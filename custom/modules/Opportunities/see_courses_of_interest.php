<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class see_courses_of_interest

{

    function see_courses_of_interest($bean, $event, $arguments)

    {
		if($bean->load_relationship('mks_interestcourse_opportunities'))
		{
			$interestcourses = $bean->mks_interestcourse_opportunities->getBeans();
			
			$cadena=array();
						
			foreach ($interestcourses as $interestcourse)
			{
				$cadena[] = $interestcourse->course;
			}
			
			if(count($cadena))
				
				$bean->courses_of_interest_c = implode(', ',$cadena);
		}		

    }

}