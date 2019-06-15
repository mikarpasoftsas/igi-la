<?php
// created: 2018-09-18 22:05:05
$dictionary["SecurityGroup"]["fields"]["mks_nonworkingdays_securitygroups"] = array (
  'name' => 'mks_nonworkingdays_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_nonworkingdays_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_NonworkingDays',
  'bean_name' => 'mks_NonworkingDays',
  'vname' => 'LBL_MKS_NONWORKINGDAYS_SECURITYGROUPS_FROM_MKS_NONWORKINGDAYS_TITLE',
  'id_name' => 'mks_nonworkingdays_securitygroupsmks_nonworkingdays_ida',
);
$dictionary["SecurityGroup"]["fields"]["mks_nonworkingdays_securitygroups_name"] = array (
  'name' => 'mks_nonworkingdays_securitygroups_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_NONWORKINGDAYS_SECURITYGROUPS_FROM_MKS_NONWORKINGDAYS_TITLE',
  'save' => true,
  'id_name' => 'mks_nonworkingdays_securitygroupsmks_nonworkingdays_ida',
  'link' => 'mks_nonworkingdays_securitygroups',
  'table' => 'mks_nonworkingdays',
  'module' => 'mks_NonworkingDays',
  'rname' => 'name',
);
$dictionary["SecurityGroup"]["fields"]["mks_nonworkingdays_securitygroupsmks_nonworkingdays_ida"] = array (
  'name' => 'mks_nonworkingdays_securitygroupsmks_nonworkingdays_ida',
  'type' => 'link',
  'relationship' => 'mks_nonworkingdays_securitygroups',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_NONWORKINGDAYS_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
);
