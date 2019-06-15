<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class after_relationship_add_rol
    {
        function after_relationship_add_rol($bean, $event, $arguments)
        {
            $GLOBALS['log']->fatal('Ini Rel Add Rol');
			if($bean->load_relationship('mks_subsidiaryusers_aclroles'))
			{  
			   foreach ($bean->mks_subsidiaryusers_aclroles->getBeans() as $rol){			    
				  
				  $default_rol = BeanFactory::getBean('ACLRoles',$rol->id);			  
				  if($default_rol->load_relationship('users'))
				  	$default_rol->users->add($bean->user_id_c);										  
				  
			   }
			}			
			$GLOBALS['log']->fatal('Fin ADD Rol');
        }
    }

?>