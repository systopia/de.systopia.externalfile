<?php
// phpcs:disable
use CRM_Externalfile_ExtensionUtil as E;
// phpcs:enable

class CRM_Externalfile_BAO_ExternalFile extends CRM_Externalfile_DAO_ExternalFile {

  /**
   * Create a new ExternalFile based on array-data
   *
   * @param array $params key-value pairs
   * @return CRM_Externalfile_DAO_ExternalFile|NULL
   */
  /*
  public static function create($params) {
    $className = 'CRM_Externalfile_DAO_ExternalFile';
    $entityName = 'ExternalFile';
    $hook = empty($params['id']) ? 'create' : 'edit';

    CRM_Utils_Hook::pre($hook, $entityName, CRM_Utils_Array::value('id', $params), $params);
    $instance = new $className();
    $instance->copyValues($params);
    $instance->save();
    CRM_Utils_Hook::post($hook, $entityName, $instance->id, $instance);

    return $instance;
  }
  */

}
