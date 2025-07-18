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

namespace Espo\Core\Select\AccessControl\Filters;

use Espo\Core\Name\Field;
use Espo\Core\Portal\Acl\OwnershipChecker\MetadataProvider;
use Espo\Core\Select\AccessControl\Filter;
use Espo\Core\Select\Helpers\FieldHelper;
use Espo\Core\Select\Helpers\RelationQueryHelper;
use Espo\Entities\User;
use Espo\Modules\Crm\Entities\Contact;
use Espo\ORM\Name\Attribute;
use Espo\ORM\Query\Part\Where\OrGroup;
use Espo\ORM\Query\Part\WhereClause;
use Espo\ORM\Query\Part\WhereItem;
use Espo\ORM\Query\SelectBuilder as QueryBuilder;

class PortalOnlyContact implements Filter
{
    public function __construct(
        private string $entityType,
        private User $user,
        private FieldHelper $fieldHelper,
        private MetadataProvider $metadataProvider,
        private RelationQueryHelper $relationQueryHelper,
    ) {}

    public function apply(QueryBuilder $queryBuilder): void
    {
        $orBuilder = OrGroup::createBuilder();

        $contactId = $this->user->getContactId();

        if ($contactId) {
            $or = $this->prepareContactWhere($queryBuilder, $contactId);

            if ($or) {
                $orBuilder->add($or);
            }
        }

        if ($this->fieldHelper->hasCreatedByField()) {
            $orBuilder->add(
                WhereClause::fromRaw([Field::CREATED_BY . 'Id' => $this->user->getId()])
            );
        }

        $orGroup = $orBuilder->build();

        if ($orGroup->getItemCount() === 0) {
            $queryBuilder->where([Attribute::ID => null]);

            return;
        }

        $queryBuilder->where($orGroup);
    }

    private function prepareContactWhere(QueryBuilder $queryBuilder, string $id): ?WhereItem
    {
        $defs = $this->metadataProvider->getContactLink($this->entityType);

        if (!$defs) {
            return null;
        }

        return $this->relationQueryHelper->prepareLinkWhere($defs, Contact::ENTITY_TYPE, $id, $queryBuilder);
    }
}
