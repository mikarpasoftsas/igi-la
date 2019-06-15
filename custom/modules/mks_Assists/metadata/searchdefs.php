<?php
$module_name = 'mks_Assists';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'mks_academicgroups_mks_assists_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKS_ACADEMICGROUPS_MKS_ASSISTS_1_FROM_MKS_ACADEMICGROUPS_TITLE',
        'width' => '10%',
        'default' => true,
        'id' => 'MKS_ACADEMICGROUPS_MKS_ASSISTS_1MKS_ACADEMICGROUPS_IDA',
        'name' => 'mks_academicgroups_mks_assists_1_name',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'assis_date_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_ASSIS_DATE',
        'width' => '10%',
        'name' => 'assis_date_c',
      ),
      'mks_academicgroups_mks_assists_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_MKS_ACADEMICGROUPS_MKS_ASSISTS_1_FROM_MKS_ACADEMICGROUPS_TITLE',
        'id' => 'MKS_ACADEMICGROUPS_MKS_ASSISTS_1MKS_ACADEMICGROUPS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'mks_academicgroups_mks_assists_1_name',
      ),
      'teacher_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_TEACHER',
        'id' => 'MKS_TEACHER_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'teacher_c',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'label' => 'LBL_ASSIGNED_TO',
        'type' => 'enum',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
