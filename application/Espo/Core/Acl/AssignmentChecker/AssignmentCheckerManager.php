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

namespace Espo\Core\Acl\AssignmentChecker;

use Espo\ORM\Entity;
use Espo\Entities\User;
use Espo\Core\Acl\AssignmentChecker;

class AssignmentCheckerManager
{
    /** @var array<string, AssignmentChecker<Entity>> */
    private $checkerCache = [];

    public function __construct(private AssignmentCheckerFactory $factory)
    {}

    public function check(User $user, Entity $entity): bool
    {
        $entityType = $entity->getEntityType();

        $checker = $this->getChecker($entityType);

        return $checker->check($user, $entity);
    }

    /**
     * @return AssignmentChecker<Entity>
     */
    private function getChecker(string $entityType): AssignmentChecker
    {
        if (!array_key_exists($entityType, $this->checkerCache)) {
            $this->loadChecker($entityType);
        }

        return $this->checkerCache[$entityType];
    }

    private function loadChecker(string $entityType): void
    {
        $this->checkerCache[$entityType] = $this->factory->create($entityType);
    }
}
