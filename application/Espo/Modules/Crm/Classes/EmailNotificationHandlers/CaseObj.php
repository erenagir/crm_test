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

namespace Espo\Modules\Crm\Classes\EmailNotificationHandlers;

use Espo\Core\Notification\EmailNotificationHandler;

use Espo\Core\Mail\SenderParams;
use Espo\Entities\InboundEmail;
use Espo\ORM\Entity;
use Espo\Entities\User;
use Espo\Entities\Email;

use Espo\ORM\EntityManager;

class CaseObj implements EmailNotificationHandler
{
    /**
     * @var array<string,\Espo\Entities\InboundEmail|null>
     */
    private $inboundEmailEntityHash = [];

    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function prepareEmail(Email $email, Entity $entity, User $user): void {}

    public function getSenderParams(Entity $entity, User $user): ?SenderParams
    {
        /** @var ?string $inboundEmailId */
        $inboundEmailId = $entity->get('inboundEmailId');

        if (!$inboundEmailId) {
            return null;
        }

        if (!array_key_exists($inboundEmailId, $this->inboundEmailEntityHash)) {
            $this->inboundEmailEntityHash[$inboundEmailId] =
                $this->entityManager->getEntityById(InboundEmail::ENTITY_TYPE, $inboundEmailId);
        }

        $inboundEmail = $this->inboundEmailEntityHash[$inboundEmailId];

        if (!$inboundEmail) {
            return null;
        }

        $emailAddress = $inboundEmail->get('emailAddress');

        if (!$emailAddress) {
            return null;
        }

        return SenderParams::create()->withReplyToAddress($emailAddress);
    }
}
