<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');
ini_set("display_errors",true);

class consecutive_per_subsidiary {
    	
	function consecutive_per_subsidiary(&$bean, $event, $arguments)
	{
		if(empty($bean->reg_num_c))
		{
			if(is_object($bean->accounts_mks_registration_1accounts_ida))
				foreach ($bean->accounts_mks_registration_1accounts_ida->beans as $key => $value) {
					$IdContact = $key;	
					continue;
				}
			else
				$IdContact=$bean->accounts_mks_registration_1accounts_ida;
                if(!empty($IdContact))
				{			
					$Accounts = BeanFactory::getBean('Accounts');
					$Accounts->retrieve($IdContact); 
					$registrations = array();
					if($Accounts->load_relationship('accounts_mks_registration_1'))
					{
						$registrations = $Accounts->accounts_mks_registration_1->getBeans();	

						$n = count($registrations);
						
						if($n<10)$n='0'.$n;
					
							$bean->reg_num_c = $Accounts->id_autoincrement_c ."/".$n;				
					}
				}				
		}
	}	
	
}
