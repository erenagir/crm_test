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

namespace Espo\Core\Acl\OwnershipChecker;

use Espo\Core\Acl\DefaultOwnershipChecker;
use Espo\Core\Acl\Exceptions\NotImplemented;
use Espo\Core\Acl\OwnershipChecker;
use Espo\Core\AclManager;
use Espo\Core\Binding\Binder;
use Espo\Core\Binding\BindingContainer;
use Espo\Core\Binding\BindingData;
use Espo\Core\InjectableFactory;
use Espo\Core\Utils\Metadata;

class OwnershipCheckerFactory
{
    /** @var class-string<OwnershipChecker> */
    private string $defaultClassName = DefaultOwnershipChecker::class;

    public function __construct(
        private Metadata $metadata,
        private InjectableFactory $injectableFactory
    ) {}

    /**
     * Create an ownership checker.
     *
     * @throws NotImplemented
     */
    public function create(string $scope, AclManager $aclManager): OwnershipChecker
    {
        $className = $this->getClassName($scope);

        $bindingContainer = $this->createBindingContainer($className, $aclManager, $scope);

        return $this->injectableFactory->createWithBinding($className, $bindingContainer);
    }

    /**
     * @return class-string<OwnershipChecker>
     * @throws NotImplemented
     */
    private function getClassName(string $scope): string
    {
        /** @var ?class-string<OwnershipChecker> $className */
        $className = $this->metadata->get(['aclDefs', $scope, 'ownershipCheckerClassName']);

        if ($className) {
            return $className;
        }

        if (!$this->metadata->get(['scopes', $scope])) {
            throw new NotImplemented();
        }

        return $this->defaultClassName;
    }

    /**
     * @param class-string<OwnershipChecker> $className
     */
    private function createBindingContainer(string $className, AclManager $aclManager, string $scope): BindingContainer
    {
        $bindingData = new BindingData();

        $binder = new Binder($bindingData);

        $binder->bindInstance(AclManager::class, $aclManager);

        $binder
            ->for($className)
            ->bindValue('$entityType', $scope);

        return new BindingContainer($bindingData);
    }
}
