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

namespace Espo\Core\Upgrades\Migrations\V8_0;

use Espo\Core\Container;
use Espo\Core\Name\Field;
use Espo\Core\Upgrades\Migration\Script;
use Espo\Core\Utils\Metadata;
use Espo\Entities\Role;
use Espo\ORM\EntityManager;
use Espo\ORM\Query\Part\Expression;
use Espo\ORM\Query\UpdateBuilder;

class AfterUpgrade implements Script
{
    public function __construct(
        private Container $container
    ) {}

    public function run(): void
    {
        $this->updateRoles(
            $this->container->getByClass(EntityManager::class)
        );

        $this->updateMetadata(
            $this->container->getByClass(Metadata::class)
        );
    }

    private function updateRoles(EntityManager $entityManager): void
    {
        $query = UpdateBuilder::create()
            ->in(Role::ENTITY_TYPE)
            ->set(['messagePermission' => Expression::column('assignmentPermission')])
            ->build();

        $entityManager->getQueryExecutor()->execute($query);
    }

    private function updateMetadata(Metadata $metadata): void
    {
        $defs = $metadata->get(['scopes']);

        foreach ($defs as $entityType => $item) {
            $isCustom = $item['isCustom'] ?? false;
            $type = $item['type'] ?? false;

            if (!$isCustom) {
                continue;
            }

            if ($type === 'Event') {
                $metadata->set('entityDefs', $entityType, [
                    'fields' => [
                        'dateEnd' => [
                            'suppressValidationList' => ['required'],
                        ],
                    ]
                ]);

                $metadata->save();

                continue;
            }

            if (
                !in_array($type, [
                    'BasePlus',
                    'Base',
                    'Company',
                    'Person',
                ])
            ) {
                continue;
            }

            $recordDefs = $metadata->getCustom('recordDefs', $entityType) ?? (object) [];
            $scopes = $metadata->getCustom('scopes', $entityType) ?? (object) [];

            $recordDefs->duplicateWhereBuilderClassName = "Espo\\Classes\\DuplicateWhereBuilders\\General";

            $scopes->duplicateCheckFieldList = [];

            if ($type === 'Company' || $type === 'Person') {
                $scopes->duplicateCheckFieldList = [Field::NAME, 'emailAddress'];
            }

            $metadata->saveCustom('recordDefs', $entityType, $recordDefs);
            $metadata->saveCustom('scopes', $entityType, $scopes);
        }
    }
}
