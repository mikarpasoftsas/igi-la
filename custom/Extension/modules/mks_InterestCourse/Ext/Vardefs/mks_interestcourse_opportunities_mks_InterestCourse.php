<?php
// created: 2018-09-19 21:19:28
$dictionary["mks_InterestCourse"]["fields"]["mks_interestcourse_opportunities"] = array (
  'name' => 'mks_interestcourse_opportunities',
  'type' => 'link',
  'relationship' => 'mks_interestcourse_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_MKS_INTERESTCOURSE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'mks_interestcourse_opportunitiesopportunities_ida',
);
$dictionary["mks_InterestCourse"]["fields"]["mks_interestcourse_opportunities_name"] = array (
  'name' => 'mks_interestcourse_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_INTERESTCOURSE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'mks_interestcourse_opportunitiesopportunities_ida',
  'link' => 'mks_interestcourse_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["mks_InterestCourse"]["fields"]["mks_interestcourse_opportunitiesopportunities_ida"] = array (
  'name' => 'mks_interestcourse_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'mks_interestcourse_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_INTERESTCOURSE_OPPORTUNITIES_FROM_MKS_INTERESTCOURSE_TITLE',
);
