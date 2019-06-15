<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class before_relationship_add_group
    {
        function before_relationship_add_group($bean, $event, $arguments)
        {
            $GLOBALS['log']->fatal('Ini Rel Add Grupo');
			if($bean->load_relationship('mks_subsidiaryusers_securitygroups'))
			{  
			   $GLOBALS['log']->fatal('Load Rel Add Grupo');
			   foreach ($bean->mks_subsidiaryusers_securitygroups->getBeans() as $group){			    
				  
				  $GLOBALS['log']->fatal('Get Grupo');
				  $default_group = BeanFactory::getBean('SecurityGroups');
				  $default_group->retrieve_by_string_fields(array('id'=>$group->id,'deleted'=>0));
				  $default_group->load_relationship('users');
				  $default_group->users->add($bean->user_id_c);		
				  $GLOBALS['log']->fatal('Set Grupo In Rel');				  
				  				
			   }			   
			}  
			$GLOBALS['log']->fatal('Fin ADD Grupo');
        }
    }

?>