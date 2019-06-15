<?php
	ini_set("display_errors",true);
    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

	class after_relationship_add_teacher
    {
        
		function teacherAssigned($matter,$idTeacher)
		{
			if ($matter->load_relationship('mks_groupmatters_mks_groupmatterteachers')){
				
				$Teachers = $matter->mks_groupmatters_mks_groupmatterteachers->getBeans();
				
				foreach($Teachers as $Teacher)
				{
					if($Teacher->mks_teacher_mks_groupmatterteachers_1mks_teacher_ida==$idTeacher)
						
					   return true;
				}
				
				return false;
			}
			
			return null;
		}
		
		function after_relationship_add_assigned_teacher($bean, $event, $arguments)
        {
           
			if($arguments['related_module']=='mks_Teacher')
			{
				if ($bean->load_relationship('mks_academicgroups_mks_groupmatters_1')){
						
					$matters = $bean->mks_academicgroups_mks_groupmatters_1->getBeans();
						
					foreach ($matters as $matter){   
						
						if ($bean->load_relationship('mks_academicgroups_mks_teacher_1')){
							
							$Teachers = $bean->mks_academicgroups_mks_teacher_1->getBeans();
							
							foreach($Teachers as $Teacher)
								{
									
									if(!$this->teacherAssigned($matter,$Teacher->id)){
										$mks_GroupMatterTeachers = BeanFactory::newBean('mks_GroupMatterTeachers');
										$mks_GroupMatterTeachers->mks_groupmatters_mks_groupmatterteachersmks_groupmatters_ida = $matter->id;
										$mks_GroupMatterTeachers->mks_teacher_mks_groupmatterteachers_1mks_teacher_ida		   = $Teacher->id;
										$mks_GroupMatterTeachers->currency_id												   = $Teacher->currency_id;
										$mks_GroupMatterTeachers->amount_theory												   = $Teacher->amount_theory_c;	
										$mks_GroupMatterTeachers->amount_practice											   = $Teacher->amount_practice_c;	
										$mks_GroupMatterTeachers->assigned_user_id = $bean->assigned_user_id;
										$mks_GroupMatterTeachers->id_autoincrement='pending';	
										$mks_GroupMatterTeachers->save();									
									}									
								
								}
							}
						}
					}
			}		
				
        }
    }

?>