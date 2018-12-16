<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2018
 *
 * Generated from xml/schema/CRM/Financial/EntityFinancialAccount.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:b9e9a095e5a6631dd7104828d40ec55a)
 */

/**
 * Database access object for the EntityFinancialAccount entity.
 */
class CRM_Financial_DAO_EntityFinancialAccount extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_entity_financial_account';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  static $_log = TRUE;

  /**
   * ID
   *
   * @var int unsigned
   */
  public $id;

  /**
   * Links to an entity_table like civicrm_financial_type
   *
   * @var string
   */
  public $entity_table;

  /**
   * Links to an id in the entity_table, such as vid in civicrm_financial_type
   *
   * @var int unsigned
   */
  public $entity_id;

  /**
   * FK to a new civicrm_option_value (account_relationship)
   *
   * @var int unsigned
   */
  public $account_relationship;

  /**
   * FK to the financial_account_id
   *
   * @var int unsigned
   */
  public $financial_account_id;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_entity_financial_account';
    parent::__construct();
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'financial_account_id', 'civicrm_financial_account', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Dynamic(self::getTableName(), 'entity_id', NULL, 'id', 'entity_table');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Entity Financial Account ID'),
          'description' => ts('ID'),
          'required' => TRUE,
          'table_name' => 'civicrm_entity_financial_account',
          'entity' => 'EntityFinancialAccount',
          'bao' => 'CRM_Financial_DAO_EntityFinancialAccount',
          'localizable' => 0,
        ],
        'entity_table' => [
          'name' => 'entity_table',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Entity Table'),
          'description' => ts('Links to an entity_table like civicrm_financial_type'),
          'required' => TRUE,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'import' => TRUE,
          'where' => 'civicrm_entity_financial_account.entity_table',
          'headerPattern' => '',
          'dataPattern' => '',
          'export' => TRUE,
          'table_name' => 'civicrm_entity_financial_account',
          'entity' => 'EntityFinancialAccount',
          'bao' => 'CRM_Financial_DAO_EntityFinancialAccount',
          'localizable' => 0,
        ],
        'entity_id' => [
          'name' => 'entity_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Entity ID'),
          'description' => ts('Links to an id in the entity_table, such as vid in civicrm_financial_type'),
          'required' => TRUE,
          'table_name' => 'civicrm_entity_financial_account',
          'entity' => 'EntityFinancialAccount',
          'bao' => 'CRM_Financial_DAO_EntityFinancialAccount',
          'localizable' => 0,
        ],
        'account_relationship' => [
          'name' => 'account_relationship',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Account Relationship'),
          'description' => ts('FK to a new civicrm_option_value (account_relationship)'),
          'required' => TRUE,
          'table_name' => 'civicrm_entity_financial_account',
          'entity' => 'EntityFinancialAccount',
          'bao' => 'CRM_Financial_DAO_EntityFinancialAccount',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'account_relationship',
            'optionEditPath' => 'civicrm/admin/options/account_relationship',
          ]
        ],
        'financial_account_id' => [
          'name' => 'financial_account_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Financial Account'),
          'description' => ts('FK to the financial_account_id'),
          'required' => TRUE,
          'table_name' => 'civicrm_entity_financial_account',
          'entity' => 'EntityFinancialAccount',
          'bao' => 'CRM_Financial_DAO_EntityFinancialAccount',
          'localizable' => 0,
          'FKClassName' => 'CRM_Financial_DAO_FinancialAccount',
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'table' => 'civicrm_financial_account',
            'keyColumn' => 'id',
            'labelColumn' => 'name',
          ]
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'entity_financial_account', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'entity_financial_account', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [
      'index_entity_id_entity_table_account_relationship' => [
        'name' => 'index_entity_id_entity_table_account_relationship',
        'field' => [
          0 => 'entity_id',
          1 => 'entity_table',
          2 => 'account_relationship',
        ],
        'localizable' => FALSE,
        'unique' => TRUE,
        'sig' => 'civicrm_entity_financial_account::1::entity_id::entity_table::account_relationship',
      ],
    ];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
