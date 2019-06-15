<?php
// created: 2019-06-12 02:38:55
$searchFields['Opportunities'] = array (
  'name' => 
  array (
    'query_type' => 'default',
  ),
  'account_name' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'accounts.name',
    ),
  ),
  'amount' => 
  array (
    'query_type' => 'default',
  ),
  'next_step' => 
  array (
    'query_type' => 'default',
  ),
  'probability' => 
  array (
    'query_type' => 'default',
  ),
  'lead_source' => 
  array (
    'query_type' => 'default',
    'operator' => '=',
    'options' => 'lead_source_dom',
    'template_var' => 'LEAD_SOURCE_OPTIONS',
  ),
  'opportunity_type' => 
  array (
    'query_type' => 'default',
    'operator' => '=',
    'options' => 'opportunity_type_dom',
    'template_var' => 'TYPE_OPTIONS',
  ),
  'sales_stage' => 
  array (
    'query_type' => 'default',
    'operator' => '=',
    'options' => 'sales_stage_dom',
    'template_var' => 'SALES_STAGE_OPTIONS',
    'options_add_blank' => true,
  ),
  'current_user_only' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'assigned_user_id',
    ),
    'my_items' => true,
    'vname' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
  ),
  'assigned_user_id' => 
  array (
    'query_type' => 'default',
  ),
  'open_only' => 
  array (
    'query_type' => 'default',
    'db_field' => 
    array (
      0 => 'sales_stage',
    ),
    'operator' => 'not in',
    'closed_values' => 
    array (
      0 => 'Closed Won',
      1 => 'Closed Lost',
    ),
    'type' => 'bool',
  ),
  'favorites_only' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'checked_only' => true,
    'subquery' => 'SELECT favorites.parent_id FROM favorites
			                    WHERE favorites.deleted = 0
			                        and favorites.parent_type = \'Opportunities\'
			                        and favorites.assigned_user_id = \'{1}\'',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_entered' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_modified' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_date_closed' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'start_range_date_closed' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'end_range_date_closed' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
    'is_date_field' => true,
  ),
  'range_amount' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'start_range_amount' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'end_range_amount' => 
  array (
    'query_type' => 'default',
    'enable_range_search' => true,
  ),
  'date_closed' => 
  array (
    'query_type' => 'default',
  ),
  'amount_usdollar' => 
  array (
    'query_type' => 'default',
  ),
  'courses_of_interest_c' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => '
	
			SELECT opp.id 
			FROM `opportunities` opp
			LEFT JOIN `mks_interestcourse_opportunities_c` icp ON icp.`mks_interestcourse_opportunitiesopportunities_ida` = opp.id 
			INNER JOIN `mks_interestcourse` ic ON ic.id = icp.`mks_interestcourse_opportunitiesmks_interestcourse_idb`
			INNER JOIN mks_courses c ON c.id = ic.`mks_courses_id_c`
			WHERE c.name LIKE "%{0}%"
	
	',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
  'filter_filial_c' => 
  array (
    'query_type' => 'format',
    'operator' => 'subquery',
    'subquery' => '
	
			SELECT opp.id 
			FROM `opportunities` opp					
			INNER JOIN securitygroups_records secr
                            ON secr.deleted = 0
                               AND secr.module = \'Opportunities\'
							   AND secr.record_id = opp.id
			INNER JOIN securitygroups secg	ON 	secg.id = secr.securitygroup_id	   			
			WHERE secg.name LIKE "%{0}%"
	
	',
    'db_field' => 
    array (
      0 => 'id',
    ),
  ),
);