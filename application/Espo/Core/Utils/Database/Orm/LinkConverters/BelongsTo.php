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

namespace Espo\Core\Utils\Database\Orm\LinkConverters;

use Espo\Core\Utils\Database\Orm\Defs\AttributeDefs;
use Espo\Core\Utils\Database\Orm\Defs\EntityDefs;
use Espo\Core\Utils\Database\Orm\Defs\RelationDefs;
use Espo\Core\Utils\Database\Orm\LinkConverter;
use Espo\ORM\Defs\Params\AttributeParam;
use Espo\ORM\Defs\Params\RelationParam;
use Espo\ORM\Defs\RelationDefs as LinkDefs;
use Espo\ORM\Type\AttributeType;
use Espo\ORM\Type\RelationType;

class BelongsTo implements LinkConverter
{
    public function convert(LinkDefs $linkDefs, string $entityType): EntityDefs
    {
        $name = $linkDefs->getName();
        $foreignEntityType = $linkDefs->getForeignEntityType();
        $foreignRelationName = $linkDefs->hasForeignRelationName() ? $linkDefs->getForeignRelationName() : null;
        $noIndex = $linkDefs->getParam('noIndex');
        $noForeignName = $linkDefs->getParam('noForeignName');
        $foreignName = $linkDefs->getParam('foreignName') ?? 'name';
        $noJoin = $linkDefs->getParam(RelationParam::NO_JOIN);

        $idName = $name . 'Id';
        $nameName = $name . 'Name';

        $idAttributeDefs = AttributeDefs::create($idName)
            ->withType(AttributeType::FOREIGN_ID)
            ->withParam('index', !$noIndex);

        $relationDefs = RelationDefs::create($name)
            ->withType(RelationType::BELONGS_TO)
            ->withForeignEntityType($foreignEntityType)
            ->withKey($idName)
            ->withForeignKey('id')
            ->withForeignRelationName($foreignRelationName);

        if ($linkDefs->getParam(RelationParam::DEFERRED_LOAD)) {
            $relationDefs = $relationDefs->withParam(RelationParam::DEFERRED_LOAD, true);
        }

        $nameAttributeDefs = !$noForeignName ?
            (
                $noJoin ?
                    AttributeDefs::create($nameName)
                        ->withType(AttributeType::VARCHAR)
                        ->withNotStorable()
                        ->withParam(AttributeParam::RELATION, $name)
                        ->withParam(AttributeParam::FOREIGN, $foreignName) :
                    AttributeDefs::create($nameName)
                        ->withType(AttributeType::FOREIGN)
                        ->withNotStorable() // Used to be false before v7.4.
                        ->withParam(AttributeParam::RELATION, $name)
                        ->withParam(AttributeParam::FOREIGN, $foreignName)
            ) : null;

        $entityDefs = EntityDefs::create()
            ->withAttribute($idAttributeDefs)
            ->withRelation($relationDefs);

        if ($nameAttributeDefs) {
            $entityDefs = $entityDefs->withAttribute($nameAttributeDefs);
        }

        return $entityDefs;
    }
}
