<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
global $current_user;
$popupMeta = array(
	'moduleMain' => 'User',
	'varName' => 'USER',
	'orderBy' => 'user_name',
	'whereClauses' => array(
		'first_name' => 'users.first_name',
		'last_name'  => 'users.last_name',
		'user_name'  => 'users.user_name',
		'is_group'   => 'users.is_group',
		'id'         => 'users.id',
	),
	'whereStatement'=> " 
		users.id = '$current_user->id' or 
		users.id IN (
		
			SELECT `user_id` 
			FROM `securitygroups_users` 
			WHERE `securitygroup_id` IN (
				SELECT `securitygroup_id` 
				FROM `securitygroups_users`
				WHERE `user_id` = '$current_user->id' AND deleted = 0
			) AND deleted = 0
			GROUP BY `user_id`
		)	
	
	",
	'searchInputs' => array(
		'first_name',
		'last_name',
		'user_name',
		'is_group',
		'id',
	),
);
