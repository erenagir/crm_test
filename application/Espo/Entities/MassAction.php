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

namespace Espo\Entities;

use Espo\Core\Name\Field;
use Espo\Core\ORM\Entity;
use Espo\Core\Field\DateTime;
use Espo\Core\Field\Link;

use Espo\Core\MassAction\Data;
use Espo\Core\MassAction\Params;

use RuntimeException;

use stdClass;

class MassAction extends Entity
{
    public const ENTITY_TYPE = 'MassAction';

    public const STATUS_PENDING = 'Pending';

    public const STATUS_RUNNING = 'Running';

    public const STATUS_SUCCESS = 'Success';

    public const STATUS_FAILED = 'Failed';

    public function getParams(): Params
    {
        $raw = $this->get('params');

        if (!is_string($raw)) {
            throw new RuntimeException("No 'params'.");
        }

        /** @var Params $params */
        $params = unserialize(base64_decode($raw));

        return $params;
    }

    public function getData(): Data
    {
        $raw = $this->get('data');

        if (!$raw instanceof stdClass) {
            throw new RuntimeException("No 'data'.");
        }

        return Data::fromRaw($raw);
    }

    public function getTargetEntityType(): string
    {
        $value = $this->get('entityType');

        if (!is_string($value)) {
            throw new RuntimeException("No 'entityType'.");
        }

        return $value;
    }

    public function getAction(): string
    {
        $value = $this->get('action');

        if (!is_string($value)) {
            throw new RuntimeException("No 'action'.");
        }

        return $value;
    }

    public function getStatus(): string
    {
        $value = $this->get('status');

        if (!is_string($value)) {
            throw new RuntimeException("No 'status'.");
        }

        return $value;
    }

    public function notifyOnFinish(): bool
    {
        return (bool) $this->get('notifyOnFinish');
    }

    public function getCreatedAt(): DateTime
    {
        $value = $this->getValueObject(Field::CREATED_AT);

        if (!$value instanceof DateTime) {
            throw new RuntimeException("No 'createdAt'.");
        }

        return $value;
    }

    public function getCreatedBy(): Link
    {
        $value = $this->getValueObject(Field::CREATED_BY);

        if (!$value instanceof Link) {
            throw new RuntimeException("No 'createdBy'.");
        }

        return $value;
    }

    public function getProcessedCount(): int
    {
        return (int) $this->get('processedCount');
    }

    public function setStatus(string $status): self
    {
        $this->set('status', $status);

        return $this;
    }

    public function setProcessedCount(int $processedCount): self
    {
        $this->set('processedCount', $processedCount);

        return $this;
    }

    public function setNotifyOnFinish(bool $notifyOnFinish = true): self
    {
        $this->set('notifyOnFinish', $notifyOnFinish);

        return $this;
    }
}
