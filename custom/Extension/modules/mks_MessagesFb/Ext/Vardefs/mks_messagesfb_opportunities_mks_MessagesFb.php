<?php
// created: 2018-11-23 21:23:47
$dictionary["mks_MessagesFb"]["fields"]["mks_messagesfb_opportunities"] = array (
  'name' => 'mks_messagesfb_opportunities',
  'type' => 'link',
  'relationship' => 'mks_messagesfb_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_MKS_MESSAGESFB_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'mks_messagesfb_opportunitiesopportunities_ida',
);
$dictionary["mks_MessagesFb"]["fields"]["mks_messagesfb_opportunities_name"] = array (
  'name' => 'mks_messagesfb_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_MESSAGESFB_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'mks_messagesfb_opportunitiesopportunities_ida',
  'link' => 'mks_messagesfb_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["mks_MessagesFb"]["fields"]["mks_messagesfb_opportunitiesopportunities_ida"] = array (
  'name' => 'mks_messagesfb_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'mks_messagesfb_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_MESSAGESFB_OPPORTUNITIES_FROM_MKS_MESSAGESFB_TITLE',
);
