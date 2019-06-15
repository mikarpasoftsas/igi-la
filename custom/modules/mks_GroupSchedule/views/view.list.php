<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.list.php');
class mks_GroupScheduleViewList extends ViewList
{
    function __construct()
    {
        parent::__construct();
    }
    function preDisplay()
    {
        echo '<script>
		
		$(document).ready(function(){
		   $("#menu_bar_creacttive" ).hide();
		   $("#MassAssign_SecurityGroups" ).hide();
		   $("#selectLinkTop" ).hide();
		   $("#selectLinkBottom" ).hide();
		   $("#select_actions_disabled_top" ).hide();
		   $("#select_actions_disabled_bottom" ).hide();
		   //$(".sugar_action_button" ).hide();
		   $(".listview-checkbox" ).hide();
		   $(".edit-link" ).hide();
		   $(".inlineEditIcon" ).hide();
		   
		   
		   
		   
		});		
			
		</script>';
        parent::preDisplay();
    }
}
?>