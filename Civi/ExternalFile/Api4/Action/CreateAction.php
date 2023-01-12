<?php
/*
 * Copyright (C) 2023 SYSTOPIA GmbH
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation in version 3.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types = 1);

namespace Civi\ExternalFile\Api4\Action;

use Civi\Api4\Generic\AbstractAction;
use Civi\Api4\Generic\DAOCreateAction;
use Civi\Api4\Generic\Result;
use Webmozart\Assert\Assert;

/**
 * @method $this setActivityId(int $activityId)
 * @method $this setEntity(string $entity)
 * @method $this setEntityId(int $entityId)
 * @method $this setRecordTypeId(int|null $recordTypeId)
 * @method $this setRecordTypeName(string|null $recordTypeName)
 */
final class CreateAction extends AbstractAction {

  private DAOCreateAction $createAction;

  public function __construct(DAOCreateAction $createAction) {
    parent::__construct($createAction->getEntityName(), 'create');
    $this->createAction = $createAction;
  }

  /**
   * @inheritDoc
   */
  public function setCheckPermissions(bool $checkPermissions) {
    parent::setCheckPermissions($checkPermissions);
    $this->createAction->setCheckPermissions($checkPermissions);

    return $this;
  }

  /**
   * @inheritDoc
   *
   * @throws \API_Exception
   * @throws \Civi\API\Exception\UnauthorizedException
   */
  public function _run(Result $result): void {
    Assert::notNull($this->url);

    /*
    $this->createAction->setValues([
      'activity_id' => $this->activityId,
      'entity_table' => \CRM_Core_DAO_AllCoreTables::getTableForEntityName($this->entity),
      'entity_id' => $this->entityId,
    ]);
    if (NULL !== $this->recordTypeId) {
      $this->createAction->addValue('record_type_id', $this->recordTypeId);
    }
    if (NULL !== $this->recordTypeName) {
      $this->createAction->addValue('record_type_id:name', $this->recordTypeName);
    }

    $addResult = $this->createAction->execute();
    $result->exchangeArray($addResult);*/
  }

}
