<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class just_my_records
    {
        function just_my_records($bean, $event, $arguments)
        {
            global $current_user;
			
			die("HOLAAAAA");
			
			where()->equals('id',$current_user->id);
			
        }
    }

?>