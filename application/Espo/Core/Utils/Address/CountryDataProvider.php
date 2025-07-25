<?php
/************************************************************************
 * This file is part of EspoCRM.
 *
 * EspoCRM – Open Source CRM application.
 * Copyright (C) 2014-2025 Yurii Kuznietsov, Taras Machyshyn, Oleksii Avramenko
 * Website: https://www.EspoCRM.com
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "EspoCRM" word.
 ************************************************************************/

namespace Espo\Core\Utils\Address;

use Espo\Core\Name\Field;
use Espo\Core\Utils\Config;
use Espo\Core\Utils\DataCache;
use Espo\Entities\AddressCountry;
use Espo\ORM\EntityManager;
use Espo\ORM\Query\Part\Order;

class CountryDataProvider
{
    /** @var ?array{list: string[], preferredList: string[]} */
    private ?array $data = null;
    private bool $useCache;

    private const CACHE_KEY = 'addressCountryData';
    private const LIMIT = 500;

    public function __construct(
        private DataCache $dataCache,
        private EntityManager $entityManager,
        Config\SystemConfig $systemConfig,
    ) {
        $this->useCache = $systemConfig->useCache();
    }

    /**
     * @return array{list: string[], preferredList: string[]}
     */
    public function get(): array
    {
        if ($this->data === null) {
            $this->data = $this->load();
        }

        return $this->data;
    }

    /**
     * @return array{list: string[], preferredList: string[]}
     */
    private function load(): array
    {
        if ($this->useCache && $this->dataCache->has(self::CACHE_KEY)) {
            $list = $this->dataCache->get(self::CACHE_KEY);

            if (
                is_array($list) &&
                is_array($list['list'] ?? null) &&
                is_array($list['preferredList'] ?? null)
            ) {
                /** @var array{list: string[], preferredList: string[]} */
                return $list;
            }
        }

        $list = [];
        $preferredList = [];

        /** @var iterable<AddressCountry> $collection */
        $collection = $this->entityManager
            ->getRDBRepositoryByClass(AddressCountry::class)
            ->sth()
            ->select([Field::NAME, 'isPreferred'])
            ->order(Field::NAME, Order::ASC)
            ->limit(0, self::LIMIT)
            ->find();

        foreach ($collection as $entity) {
            $list[] = $entity->getName();

            if ($entity->isPreferred()) {
                $preferredList[] = $entity->getName();
            }
        }

        if ($this->useCache) {
            $this->dataCache->store(self::CACHE_KEY, [
                'list' => $list,
                'preferredList' => $preferredList,
            ]);
        }

        return [
            'list' => $list,
            'preferredList' => $preferredList,
        ];
    }
}
