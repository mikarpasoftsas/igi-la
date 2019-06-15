<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

global $current_user,$db;

if(isset($_REQUEST['record']) && !empty($_REQUEST['record']))
{
	$record = $_REQUEST['record'];
	
	global $db,$app_list_strings;
							
	require_once "modules/mks_RegistrationReceipts/mks_RegistrationReceipts.php";
	
	$mks_RegistrationReceipts = new mks_RegistrationReceipts();	
	
	$mks_RegistrationReceipts->name =  "Número Pendiente";
	
	$mks_RegistrationReceipts->tmp_reg_c = $record;
	
	$mks_RegistrationReceipts->assigned_user_id = $current_user->id;
	
	$mks_RegistrationReceipts->save();
	
	$query_u = "	

					UPDATE mks_registrationreceipts 
					SET 
						date_entered  = NOW(),
						date_modified =NOW(),
						created_by = '".$current_user->id."',
						modified_user_id = '".$current_user->id."',
						assigned_user_id = '".$current_user->id."'						
					
					WHERE id = '".$mks_RegistrationReceipts->id."'
						
			";				
			
	$result = $db->query($query_u);
	
			require_once('modules/SecurityGroups/SecurityGroup.php');
			$groupFocus = new SecurityGroup();
			$security_modules = $groupFocus->getSecurityModules();
			//sanity check
			if(in_array("mks_RegistrationReceipts",array_keys($security_modules))) {
				//add each group in securitygroup_list to new record
				$rel_name = $groupFocus->getLinkName("mks_RegistrationReceipts","SecurityGroups");
				$gbu 	  = $groupFocus->getUserSecurityGroups($current_user->id);
				if($mks_RegistrationReceipts->load_relationship($rel_name)){
					
					$query = "
				
						select * 
						from securitygroups_records 
						where module = 'mks_Registration' 
						and deleted = 0 and 
						record_id = '".$record."'
						
					";
					
					$result = $db->query($query);
					
					while( $row = $db->fetchByAssoc($result)){ 
					
						$mks_RegistrationReceipts->$rel_name->add($row['securitygroup_id']);
						$groupFocus->addGroupToRecord('mks_RegistrationReceipts', $mks_RegistrationReceipts->id,$row['securitygroup_id']);						
					}		
				
				}
				else
					die("Not load rel $rel_name");
			}	
	
	$mks_RegistrationReceipts_New = BeanFactory::getBean(
							'mks_RegistrationReceipts', 
							$mks_RegistrationReceipts->id
						);					

	
	if ($mks_RegistrationReceipts_New->load_relationship('mks_registration_mks_registrationreceipts_1'))
	{
		$mks_RegistrationReceipts_New->mks_registration_mks_registrationreceipts_1->add($record);
	}
	else
		die ("Not load mks_registration_mks_registrationreceipts_1");
	
	SugarApplication::redirect('index.php?module=mks_RegistrationReceipts&action=DetailView&record=' . $mks_RegistrationReceipts_New->id);
	
}



