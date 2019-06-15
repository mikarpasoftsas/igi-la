<?php
    $dictionary["mks_subsidiaryusers_aclroles"] = array (
      'true_relationship_type' => 'many-to-many',
      'from_studio' => true,
      'relationships' =>
      array (
        'mks_subsidiaryusers_aclroles' =>
        array (
          'lhs_module' => 'mks_SubsidiaryUsers',
          'lhs_table' => 'mks_subsidiaryusers',
          'lhs_key' => 'id',
          'rhs_module' => 'ACLRoles',
          'rhs_table' => 'acl_roles',
          'rhs_key' => 'id',
          'relationship_type' => 'many-to-many',
          'join_table' => 'mks_subsidiaryusers_aclroles',
          'join_key_lhs' => 'mks_subsidiaryusers_ida',
          'join_key_rhs' => 'acl_roles_idb',
          ),
        ),
      'table' => 'mks_subsidiaryusers_aclroles',
      'fields' =>
      array (
        0 =>
        array (
          'name' => 'id',
          'type' => 'varchar',
          'len' => 36,
          ),
        1 =>
        array (
          'name' => 'date_modified',
          'type' => 'datetime',
          ),
        2 =>
        array (
          'name' => 'deleted',
          'type' => 'bool',
          'len' => '1',
          'default' => '0',
          'required' => true,
          ),
        3 =>
        array (
          'name' => 'mks_subsidiaryusers_ida',
          'type' => 'varchar',
          'len' => 36,
          ),
        4 =>
        array (
          'name' => 'acl_roles_idb',
          'type' => 'varchar',
          'len' => 36,
          ),
        ),
      'indices' =>
      array (
        0 =>
        array (
          'name' => 'mks_subsidiaryusers_aclrolesspk',
          'type' => 'primary',
          'fields' =>
          array (
            0 => 'id',
            ),
          ),
        1 =>
        array (
          'name' => 'mks_subsidiaryusers_ida_idx',
          'type' => 'index',
          'fields' =>
          array (
            0 => 'mks_subsidiaryusers_ida',
            ),
          ),
        2 =>
        array (
          'name' => 'acl_roles_idb_idx',
          'type' => 'alternate_key',
          'fields' =>
          array (
            0 => 'acl_roles_idb',
            ),
          ),
        ),
      ); 