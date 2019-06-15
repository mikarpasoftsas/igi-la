<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class loading_matters {
    	
	
	function subjectsAssigned($bean)
	{
		if ($bean->load_relationship('mks_academicgroups_mks_groupmatters_1')){
			
			$matters = $bean->mks_academicgroups_mks_groupmatters_1->getBeans();
			
			if(count($matters)>0)
				
				return true;
			
			else

				return false;	
		}
		
		return null;
	}
	
	function loading_matters(&$bean, $event, $arguments)
	{
		if(!empty($bean->mks_courses_id_c)){
			$sa = $this->subjectsAssigned($bean);			
			if(!$sa){				
				$objCourses = BeanFactory::getBean('mks_Courses');
				$objCourses->retrieve($bean->mks_courses_id_c); 
				if ($objCourses->load_relationship('mks_courses_mks_subjectmatter_1')){
					$matters = $objCourses->mks_courses_mks_subjectmatter_1->getBeans();
					if(is_array($matters) && count($matters)>0)
						foreach ($matters as $matter){                                             
							$mks_GroupMatters = BeanFactory::newBean('mks_GroupMatters');
							$mks_GroupMatters->mks_subjectmatter_id_c = $matter->id;							
							$mks_GroupMatters->assigned_user_id = $bean->assigned_user_id;
							$mks_GroupMatters->id_autoincrement='pending';	
							$mks_GroupMatters->save();	
							
							if($bean->load_relationship('mks_academicgroups_mks_groupmatters_1'))
							{
								$bean->mks_academicgroups_mks_groupmatters_1->add($mks_GroupMatters->id);
							}
							else
							{
								die("Not load mks_academicgroups_mks_groupmatters_1");
							}
								
						}					
				}
				else
				{
					die("Not load mks_courses_mks_subjectmatter_1");
				}
			}
			else if($sa == null)
			{
					die("Not load mks_academicgroups_mks_groupmatters_1");
			}
        }
		else
		{
			die("Field mks_courses_id_c is required");
		}
	
	}
}
