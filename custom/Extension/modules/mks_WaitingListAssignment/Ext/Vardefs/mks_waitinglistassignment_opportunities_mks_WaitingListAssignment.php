<?php
// created: 2018-09-24 17:10:37
$dictionary["mks_WaitingListAssignment"]["fields"]["mks_waitinglistassignment_opportunities"] = array (
  'name' => 'mks_waitinglistassignment_opportunities',
  'type' => 'link',
  'relationship' => 'mks_waitinglistassignment_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_MKS_WAITINGLISTASSIGNMENT_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'mks_waitinglistassignment_opportunitiesopportunities_ida',
);
$dictionary["mks_WaitingListAssignment"]["fields"]["mks_waitinglistassignment_opportunities_name"] = array (
  'name' => 'mks_waitinglistassignment_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_WAITINGLISTASSIGNMENT_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'mks_waitinglistassignment_opportunitiesopportunities_ida',
  'link' => 'mks_waitinglistassignment_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["mks_WaitingListAssignment"]["fields"]["mks_waitinglistassignment_opportunitiesopportunities_ida"] = array (
  'name' => 'mks_waitinglistassignment_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'mks_waitinglistassignment_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_WAITINGLISTASSIGNMENT_OPPORTUNITIES_FROM_MKS_WAITINGLISTASSIGNMENT_TITLE',
);
