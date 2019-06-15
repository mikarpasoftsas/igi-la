<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class ConvertLeadIntoAccountLogicHook {

    
	
	function checkExistAccount($name)
	{
		global $db;
		
		$query =  "SELECT id FROM accounts ";

		$query.= "WHERE name like '$name' and deleted = 0 LIMIT 1";

		$results = $db->query($query, true);

		$row = $db->fetchByAssoc($results);

		$id = $row['id'];
		
		if (!empty($id)) {
		   
			 $accounts = BeanFactory::getBean('Accounts');
			 $accounts->retrieve($id);
			 return $accounts;		   
		}
		else
			return null;
	}
	
	function ConvertLeadIntoAccountLogicHook(&$bean, $event, $arguments){		
		
			
		if($bean->status=='New'){			
						
			$account = $this->checkExistAccount($bean->first_name . " " . $bean->last_name);
			
			if($account==null)
			{					
				$account  = BeanFactory::getBean('Accounts');
				$account->name 		   	   = $bean->first_name . " " . $bean->last_name;	
				$account->first_name_c = $bean->first_name;
				$account->last_name_c  = $bean->last_name;	
				$account->phone_mobile_c					= $bean->phone_mobile;	
				$account->phone_home_c						= $bean->phone_home;				
				$account->phone_office						= $bean->phone_work;
				$account->phone_alternate					= $bean->phone_fax;
				$account->birthdate_c						= $bean->birthdate_c;
				$account->sexo_c							= $bean->sexo_c;
				$account->id_type_c							= $bean->id_type_c;
				$account->id_local_c						= $bean->id_local_c;
				$account->primary_address_number_c			= $bean->primary_address_number_c;
				$account->primary_address_floor_c			= $bean->primary_address_floor_c;
				$account->primary_address_neighborhood_c	= $bean->primary_address_neighborhood_c;
				$account->primary_address_location_c		= $bean->primary_address_location_c;
				$account->primary_addres_between_stree_c	= $bean->primary_addres_between_stree_c;
				$account->primary_address_home_c			= $bean->primary_address_home_c;
				$account->billing_address_state 			= $bean->primary_address_state;
				$account->billing_address_postalcode 		= $bean->primary_address_postalcode;
				$account->billing_address_city 				= $bean->primary_address_city;
				$account->email1							= $bean->email1;
				
				$account->assigned_user_id = $bean->assigned_user_id;
				$account->account_type	   = 'Potencial';		 
				$account->save();
				
				$contact  = BeanFactory::getBean('Contacts');
				$contact->first_name  						= $bean->first_name;
				$contact->last_name   						= $bean->last_name;
				$contact->email1	  						= $bean->email1;
				$contact->account_id  						= $account->id;
				$contact->phone_work						= $bean->phone_work;
				$contact->phone_alternate					= $bean->phone_fax;
				$contact->phone_mobile						= $bean->phone_mobile;
				$contact->phone_home						= $bean->phone_home;
				$contact->billing_address_state 			= $bean->primary_address_state;
				$contact->billing_address_postalcode 		= $bean->primary_address_postalcode;
				$contact->billing_address_city 				= $bean->primary_address_city;
				
				$contact->primary_address_number_c			= $bean->primary_address_number_c;
				$contact->primary_address_floor_c			= $bean->primary_address_floor_c;
				$contact->primary_address_neighborhood_c	= $bean->primary_address_neighborhood_c;
				$contact->primary_address_location_c		= $bean->primary_address_location_c;
				$contact->primary_addres_between_stree_c	= $bean->primary_addres_between_stree_c;
				$contact->primary_address_home_c			= $bean->primary_address_home_c;
				
				$contact->assigned_user_id 					= $bean->assigned_user_id;
				
				$contact->lead_source						= $bean->lead_source;
				$contact->save();
				
				
			}
			else
			{
				$account->phone_office						= $bean->phone_work;
				$account->phone_alternate					= $bean->phone_fax;
				$account->sexo_c							= $bean->sexo_c;
				$account->id_type_c							= $bean->id_type_c;
				$account->id_local_c						= $bean->id_local_c;
				$account->primary_address_number_c			= $bean->primary_address_number_c;
				$account->primary_address_floor_c			= $bean->primary_address_floor_c;
				$account->primary_address_neighborhood_c	= $bean->primary_address_neighborhood_c;
				$account->primary_address_location_c		= $bean->primary_address_location_c;
				$account->primary_addres_between_stree_c	= $bean->primary_addres_between_stree_c;
				$account->primary_address_home_c			= $bean->primary_address_home_c;
				$account->billing_address_state 			=  $bean->primary_address_state;
				$account->billing_address_postalcode 		=  $bean->primary_address_postalcode;
				$account->billing_address_city 				=  $bean->primary_address_city;
				$account->email1							=  $bean->email1;
				$account->save();
			}
						
						
			$opp  			  = BeanFactory::getBean('Opportunities');
			$opp->name 		  = "Preinforme / " . $account->name;
			$opp->account_id  = $account->id;
			$opp->sales_stage = 'Prospecting';
			$opp->amount	  = 0;
			
			if(isset($_REQUEST['mks_meansnotice_id_c'])&&!empty($_REQUEST['mks_meansnotice_id_c']))
				$opp->mks_meansnotice_id_c = $_REQUEST['mks_meansnotice_id_c'];
			else
				$opp->mks_meansnotice_id_c = $mks_meansnotice_id_c;
				
			$opp->assigned_user_id = $bean->assigned_user_id;
			$opp->id_autoincrement_c = 'pending';
			$opp->save();		
			
			if(!empty($bean->id_ci_tmp_c))
			{
			$ci = BeanFactory::getBean('mks_InterestCourse');
			$ci->mks_courses_id_c = $bean->id_ci_tmp_c;
			$ci->leads_mks_interestcourse_1leads_ida 			   =  $bean->id;
			$ci->mks_interestcourse_opportunitiesopportunities_ida =  $opp->id;
			$ci->assigned_user_id = $bean->assigned_user_id;
			$ci->id_autoincrement_c = 'pending';
			$ci->save();
			}
			
			
			
			
			
		}
	}	
	
}
