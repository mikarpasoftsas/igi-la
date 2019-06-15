<?php
// created: 2018-09-20 20:16:35
$dictionary["SecurityGroup"]["fields"]["mks_waitinglist_securitygroups"] = array (
  'name' => 'mks_waitinglist_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_waitinglist_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_WaitingList',
  'bean_name' => false,
  'vname' => 'LBL_MKS_WAITINGLIST_SECURITYGROUPS_FROM_MKS_WAITINGLIST_TITLE',
  'id_name' => 'mks_waitinglist_securitygroupsmks_waitinglist_ida',
);
$dictionary["SecurityGroup"]["fields"]["mks_waitinglist_securitygroups_name"] = array (
  'name' => 'mks_waitinglist_securitygroups_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_WAITINGLIST_SECURITYGROUPS_FROM_MKS_WAITINGLIST_TITLE',
  'save' => true,
  'id_name' => 'mks_waitinglist_securitygroupsmks_waitinglist_ida',
  'link' => 'mks_waitinglist_securitygroups',
  'table' => 'mks_waitinglist',
  'module' => 'mks_WaitingList',
  'rname' => 'name',
);
$dictionary["SecurityGroup"]["fields"]["mks_waitinglist_securitygroupsmks_waitinglist_ida"] = array (
  'name' => 'mks_waitinglist_securitygroupsmks_waitinglist_ida',
  'type' => 'link',
  'relationship' => 'mks_waitinglist_securitygroups',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_WAITINGLIST_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
);
