<?php
$dictionary['securitygroups_records'] = array (
    'table' => 'securitygroups_records', 
    'fields' => array (
        array('name' =>'id', 'type' =>'char', 'len'=>'36', 'required'=>true, 'default'=>'')
      , array('name' =>'securitygroup_id', 'type' =>'char', 'len'=>'36')
      , array('name' =>'record_id', 'type' =>'char', 'len'=>'36')
      , array('name' =>'module', 'type' =>'char', 'len'=>'36')
      , array('name' =>'date_modified','type' => 'datetime')
      , array('name' =>'modified_user_id', 'type' =>'char', 'len'=>'36')
      , array('name' =>'created_by', 'type' =>'char', 'len'=>'36')
      , array('name' =>'deleted', 'type' =>'bool', 'len'=>'1', 'required'=>true, 'default'=>'0')
    ),
    'indices' => array (
       array('name' =>'securitygroups_recordspk', 'type' =>'primary', 'fields'=>array('id')),
       array('name' =>'idx_securitygroups_records_mod', 'type' =>'index', 'fields'=>array( 'module', 'deleted', 'record_id', 'securitygroup_id')),
        array('name' =>'idx_securitygroups_records_del', 'type' =>'index', 'fields'=>array( 'deleted', 'record_id', 'module', 'securitygroup_id')),
    ),
    'relationships' => array (
    
    	'securitygroups_accounts' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'Accounts', 'rhs_table'=> 'accounts', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'Accounts'),
    	'securitygroups_bugs' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'Bugs', 'rhs_table'=> 'bugs', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'Bugs'),
    	'securitygroups_calls' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'Calls', 'rhs_table'=> 'calls', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'Calls'),
    	'securitygroups_campaigns' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'Campaigns', 'rhs_table'=> 'campaigns', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'Campaigns'),
    	'securitygroups_cases' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'Cases', 'rhs_table'=> 'cases', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'Cases'),
    	'securitygroups_contacts' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'Contacts', 'rhs_table'=> 'contacts', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'Contacts'),
    	'securitygroups_documents' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'Documents', 'rhs_table'=> 'documents', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'Documents'),
    	'securitygroups_emails' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'Emails', 'rhs_table'=> 'emails', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'Emails'),
    	'securitygroups_emailtemplates' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'EmailTemplates', 'rhs_table'=> 'email_templates', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'EmailTemplates'),
    	'securitygroups_leads' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'Leads', 'rhs_table'=> 'leads', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'Leads'),
    	'securitygroups_meetings' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'Meetings', 'rhs_table'=> 'meetings', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'Meetings'),
    	'securitygroups_notes' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'Notes', 'rhs_table'=> 'notes', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'Notes'),
    	'securitygroups_opportunities' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'Opportunities', 'rhs_table'=> 'opportunities', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'Opportunities'),
    	'securitygroups_project' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'Project', 'rhs_table'=> 'project', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'Project'),
    	'securitygroups_project_task' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'ProjectTask', 'rhs_table'=> 'project_task', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'ProjectTask'),
    	'securitygroups_prospect_lists' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'ProspectLists', 'rhs_table'=> 'prospect_lists', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'ProspectLists'),
    	'securitygroups_prospects' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'Prospects', 'rhs_table'=> 'prospects', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'Prospects'),
    	'securitygroups_tasks' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'Tasks', 'rhs_table'=> 'tasks', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'Tasks'),
		//1
		'mks_paymentplan_securitygroups_1' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_PaymentPlan', 'rhs_table'=> 'mks_paymentplan', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_PaymentPlan'),	
		//2
		'mks_academicgroups_securitygroups_c' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_AcademicGroups', 'rhs_table'=> 'mks_academicgroups', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_AcademicGroups'),	
		//3
		'mks_bank_securitygroups_c' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_Bank', 'rhs_table'=> 'mks_bank', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_Bank'),	
		//4
		'mks_box_securitygroups_c' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_Box', 'rhs_table'=> 'mks_box', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_Box'),			
		//5
		'mks_classroom_securitygroups' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_Classroom', 'rhs_table'=> 'mks_classroom', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_Classroom'),
		//5.1
		'securitygroups_mks_classroom' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_Classroom', 'rhs_table'=> 'mks_classroom', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_Classroom'),	
		//6
		'mks_classroomnew_securitygroups_c' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_ClassroomNew', 'rhs_table'=> 'mks_classroomnew', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_ClassroomNew'),
		//7
		'mks_courses_securitygroups_1_c' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_Courses', 'rhs_table'=> 'mks_courses', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_Courses'),
		//8
		'mks_messagesfb_securitygroups_1_c' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_MessagesFb', 'rhs_table'=> 'mks_messagesfb', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_MessagesFb'),
		//9
		'mks_movement_securitygroups_c' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_PaymentPlan', 'rhs_table'=> 'tasks', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_PaymentPlan'),
		//10
		'mks_movementtype_securitygroups_c' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_Movement', 'rhs_table'=> 'mks_movement', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_Movement'),
		//11
		'mks_nonworkingdays_securitygroups_c' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_NonworkingDays', 'rhs_table'=> 'mks_nonworkingdays', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_NonworkingDays'),
		//12
		'mks_registration_securitygroups_1_c' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_Registration', 'rhs_table'=> 'mks_registration', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_Registration'),
		//13
		'mks_subjectmatter_securitygroups_c' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_SubjectMatter', 'rhs_table'=> 'mks_subjectmatter', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_SubjectMatter'),
		//14
		'mks_subsidiaryusers_securitygroups_c' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_SubsidiaryUsers', 'rhs_table'=> 'mks_subsidiaryusers', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_SubsidiaryUsers'),
		//15
		'mks_teacher_securitygroups_c' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_Teacher', 'rhs_table'=> 'mks_teacher', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_Teacher'),
		//15.1	
		'securitygroups_mks_teacher' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_Teacher', 'rhs_table'=> 'mks_teacher', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_Teacher'),			
		//16
		'mks_waitinglist_securitygroups_c' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_WaitingList', 'rhs_table'=> 'mks_waitinglist', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_WaitingList'),
		//16.1
		'securitygroups_mks_waitinglist' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_WaitingList', 'rhs_table'=> 'mks_waitinglist', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_WaitingList'),	
		//17
		'securitygroups_aos_product_categories' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'AOS_Product_Categories', 'rhs_table'=> 'aos_product_categories', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'AOS_Product_Categories'),	
			
		//18
		'securitygroups_mks_categorytypesmovement' => array(
			'lhs_module'=> 'SecurityGroups', 'lhs_table'=> 'securitygroups', 'lhs_key' => 'id',
			'rhs_module'=> 'mks_CategoryTypesMovement', 'rhs_table'=> 'mks_categorytypesmovement', 'rhs_key' => 'id',
			'relationship_type'=>'many-to-many',
			'join_table'=> 'securitygroups_records', 'join_key_lhs'=>'securitygroup_id', 'join_key_rhs'=>'record_id',
			'relationship_role_column'=>'module','relationship_role_column_value'=>'mks_CategoryTypesMovement'),				
				
	)
);

