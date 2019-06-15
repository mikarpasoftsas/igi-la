<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/generic/SugarWidgets/SugarWidgetSubPanelTopButton.php');

class SugarWidgetSubPanelSeeOccupationButton extends SugarWidgetSubPanelTopButton
{
    
	function getOccupation()
	{
	    if ($bean->load_relationship('mks_academicgroups_mks_groupmatters_1')){
			
			$matters = $bean->mks_academicgroups_mks_groupmatters_1->getBeans();
			
			if(count($matters)>0)
				
				return true;
			
			else

				return false;	
		}	
	}
	
	function display($defines, $additionalFormFields = null)
    {
        global $mod_strings;
		
		/*
				       
		$button = '<input class="button" onclick="
		
			window.open(\'index.php?action=index&module=mks_GroupSchedule&searchFormTab=advanced_search&query=true&clear_query=true&mks_academicgroups_mks_groupschedule_name_advanced='.$defines['focus']->name.'\', \'SuiteCRM\', \'width=900,height=500\');
		
		" name="sendrs" value="Ver ocupacion" type="button">';
        */
		
		$button = '<input class="button" onclick="
		
			window.open(\'index.php?action=index&module=mks_GroupSchedule\', \'SuiteCRM\', \'width=900,height=500\');
		
		" name="sendrs" value="Ver ocupacion" type="button">';
		
		return $button; 
    }
}
?>