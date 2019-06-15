<?php
ini_set("display_errors",true);
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class create_user_system {    
	
	function create_user_system(&$bean, $event, $arguments)
	{
		
		/*
		$Relationship  = new Relationship();
		$Relationship->relationship_name='mks_subsidiaryusers_aclroles';
		$Relationship->lhs_module='mks_SubsidiaryUsers';
		$Relationship->lhs_table='mks_subsidiaryusers';
		$Relationship->lhs_key='id';
		$Relationship->rhs_module='ACLRoles';
		$Relationship->rhs_table='acl_roles';
		$Relationship->rhs_key= 'id';
		$Relationship->join_table='mks_subsidiaryusers_aclroles';
		$Relationship->join_key_lhs='mks_subsidiaryusers_ida';
		$Relationship->join_key_rhs='acl_roles_idb';
		$Relationship->relationship_type='many-to-many';
		$Relationship->relationship_role_column='module';
		$Relationship->relationship_role_column_value='mks_SubsidiaryGroup';
		$Relationship->save();
		*/
		
		global $current_user;
		
		if(empty($bean->user_id_c))
		{
			$user  = BeanFactory::getBean('Users');
			$user->user_name	 = $bean->user_name;
			$user->first_name	= $bean->first_name;
			$user->last_name 	= $bean->last_name;
			$user->user_hash 	= md5($bean->password);
			$user->phone_work   = $bean->phone_work;
			$user->email1	    = $bean->email1;
			$user->save();
			
			//Se crea vinculo entre los dos usuarios
			$bean->user_id_c = $user->id;
					
			//Se asignan las mismas preferencias globales del usuario que esta creando su usuario de filial
			$user->setPreference('pages',$current_user->getPreference('pages', 'Home'), 0, 'Home');
            $user->setPreference('dashlets', $current_user->getPreference('dashlets', 'Home'), 0, 'Home');
			$user->savePreferencesToDB();						
			
		}
		else
		{
			$user  = BeanFactory::getBean('Users');
			$user->retrieve($bean->user_id_c);
			$user->user_name	 = $bean->user_name;
			$user->first_name	= $bean->first_name;
			$user->last_name 	= $bean->last_name;
			$user->user_hash 	= md5($bean->password);
			$user->phone_work   = $bean->phone_work;
			$user->email1	    = $bean->email1;
			$user->save();		
			
			//Se incluye aca, en caso que el evento de relacion por subpanel no se dispare.
			if($bean->load_relationship('mks_subsidiaryusers_securitygroups'))
			{  
			   foreach ($bean->mks_subsidiaryusers_securitygroups->getBeans() as $group){			    
				  
				  $default_group = BeanFactory::getBean('SecurityGroups');
				  $default_group->retrieve_by_string_fields(array('id'=>$group->id,'deleted'=>0));
				  $default_group->load_relationship('users');
				  $default_group->users->add($user->id);				 					
				
			   }
			}	
			
		}
		
	}
	
}
