<?php

require_once 'include/MVC/View/views/view.list.php';

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class mks_CustomPlanFeesViewList extends ViewList
{
	function listViewPrepare() {
		
        $_REQUEST['orderBy'] = strtoupper('expiration'); //set the field to order by NOTE: MUST BE ALL CAPS!
        $_REQUEST['sortOrder'] = 'ASC'; //set the order, ascending or descending
		parent::listViewPrepare(); 

  }
}

