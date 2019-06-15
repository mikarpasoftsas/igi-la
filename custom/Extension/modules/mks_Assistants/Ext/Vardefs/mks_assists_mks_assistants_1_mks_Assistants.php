<?php
// created: 2019-04-29 22:42:48
$dictionary["mks_Assistants"]["fields"]["mks_assists_mks_assistants_1"] = array (
  'name' => 'mks_assists_mks_assistants_1',
  'type' => 'link',
  'relationship' => 'mks_assists_mks_assistants_1',
  'source' => 'non-db',
  'module' => 'mks_Assists',
  'bean_name' => 'mks_Assists',
  'vname' => 'LBL_MKS_ASSISTS_MKS_ASSISTANTS_1_FROM_MKS_ASSISTS_TITLE',
  'id_name' => 'mks_assists_mks_assistants_1mks_assists_ida',
);
$dictionary["mks_Assistants"]["fields"]["mks_assists_mks_assistants_1_name"] = array (
  'name' => 'mks_assists_mks_assistants_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_ASSISTS_MKS_ASSISTANTS_1_FROM_MKS_ASSISTS_TITLE',
  'save' => true,
  'id_name' => 'mks_assists_mks_assistants_1mks_assists_ida',
  'link' => 'mks_assists_mks_assistants_1',
  'table' => 'mks_assists',
  'module' => 'mks_Assists',
  'rname' => 'name',
);
$dictionary["mks_Assistants"]["fields"]["mks_assists_mks_assistants_1mks_assists_ida"] = array (
  'name' => 'mks_assists_mks_assistants_1mks_assists_ida',
  'type' => 'link',
  'relationship' => 'mks_assists_mks_assistants_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_ASSISTS_MKS_ASSISTANTS_1_FROM_MKS_ASSISTANTS_TITLE',
);
