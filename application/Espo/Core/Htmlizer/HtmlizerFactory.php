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

namespace Espo\Core\Htmlizer;

use Espo\Core\InjectableFactory;
use Espo\Core\Utils\DateTime\DateTimeFactory;
use Espo\Core\AclManager;
use Espo\Entities\User;

/**
 * Not for direct use. Use `TemplateRenderer`.
 * @internal
 */
class HtmlizerFactory
{
    public function __construct(
        private InjectableFactory $injectableFactory,
        private DateTimeFactory $dateTimeFactory,
        private AclManager $aclManager
    ) {}

    public function create(bool $skipAcl = false, ?string $timeZone = null): Htmlizer
    {
        $with = [];

        if ($skipAcl) {
            $with['acl'] = null;
        }

        if ($timeZone) {
            $with['dateTime'] = $this->dateTimeFactory->createWithTimeZone($timeZone);
        }

        return $this->injectableFactory->createWith(Htmlizer::class, $with);
    }

    public function createNoAcl(): Htmlizer
    {
        return $this->create(true);
    }

    public function createForUser(User $user, ?CreateForUserParams $params = null): Htmlizer
    {
        if (!$params) {
            $params = new CreateForUserParams();
            $params->useUserTimezone = true;
            $params->applyAcl = true;
        }

        $deps = [];

        if ($params->useUserTimezone) {
            $deps['dateTime'] = $this->dateTimeFactory->createWithUserTimeZone($user);
        }

        if ($params->applyAcl) {
            $deps['acl'] = $this->aclManager->createUserAcl($user);
            $deps['user'] = $user;
        }

        return $this->injectableFactory->createWith(Htmlizer::class, $deps);
    }
}
