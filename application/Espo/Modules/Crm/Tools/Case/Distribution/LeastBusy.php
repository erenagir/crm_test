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

namespace Espo\Modules\Crm\Tools\Case\Distribution;

use Espo\Modules\Crm\Entities\CaseObj;
use Espo\ORM\EntityManager;
use Espo\Core\Utils\Metadata;
use Espo\Entities\User;
use Espo\Entities\Team;

class LeastBusy
{
    public function __construct(
        private EntityManager $entityManager,
        private Metadata $metadata
    ) {}

    public function getUser(Team $team, ?string $targetUserPosition = null): ?User
    {
        $where = [
            'isActive' => true,
        ];

        if (!empty($targetUserPosition)) {
            $where['@relation.role'] = $targetUserPosition;
        }

        $userList = $this->entityManager
            ->getRDBRepository(Team::ENTITY_TYPE)
            ->getRelation($team, 'users')
            ->where($where)
            ->order('id')
            ->find();

        if (count($userList) === 0) {
            return null;
        }

        $countHash = [];

        $notActualStatusList =
            $this->metadata->get(['entityDefs', 'Case', 'fields', 'status', 'notActualOptions']) ?? [];

        foreach ($userList as $user) {
            $count = $this->entityManager
                ->getRDBRepository(CaseObj::ENTITY_TYPE)
                ->where([
                    'assignedUserId' => $user->getId(),
                    'status!=' => $notActualStatusList,
                ])
                ->count();

            $countHash[$user->getId()] = $count;
        }

        $foundUserId = false;
        $min = false;

        foreach ($countHash as $userId => $count) {
            if ($min === false) {
                $min = $count;
                $foundUserId = $userId;
            } else if ($count < $min) {
                $min = $count;
                $foundUserId = $userId;
            }
        }

        if ($foundUserId !== false) {
            /** @var ?User */
            return $this->entityManager->getEntityById(User::ENTITY_TYPE, $foundUserId);
        }

        return null;
    }
}
