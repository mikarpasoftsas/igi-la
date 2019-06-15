<?php
 if(!defined('sugarEntry'))define('sugarEntry', true);
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.

 * SuiteCRM is an extension to SugarCRM Community Edition developed by Salesagility Ltd.
 * Copyright (C) 2011 - 2014 Salesagility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 ********************************************************************************/

chdir(dirname(__FILE__));

require_once('include/entryPoint.php');

global $db;
		
		$query = "
			TRUNCATE `mks_defaulters_audit`;
		";
		
		$db->query($query);
		
		$query = "
			TRUNCATE `mks_defaulters_cstm`;
		";
		
		$db->query($query);
		
		$query = "
			TRUNCATE `mks_defaulters`;
		";
		
		$db->query($query);
				
		$query = "		
		
		SELECT  COUNT(mks_customplanfees.id) n_fees,
				SUM(mks_customplanfees.amount) balance_c,
				r.id registration_id,
				r.document_name,
				r.mks_academicgroups_id_c academicgroups_id,
				r.mks_academicgroups_id1_c,
				a.id account_id, 
				a.name,
				ac.phone_mobile_c,
				jt0.`id_autoincrement`,
				mks_customplanfees.id,
				mks_customplanfees_cstm.n_fee_c,
				mks_customplanfees_cstm.payment_status_c,
				mks_customplanfees.assigned_user_id,
				jt0.name mks_custompaymentplan_mks_customplanfees_name,
				jtl0.mks_customed0dentplan_ida mks_customed0dentplan_ida,
				mks_customplanfees.name,
				mks_customplanfees.amount,
				mks_customplanfees.expiration,
				jt1.user_name assigned_user_name,
				jt1.created_by assigned_user_name_owner,
				'Users' assigned_user_name_mod, 
				mks_customplanfees.created_by  
		FROM mks_customplanfees
		LEFT JOIN mks_customplanfees_cstm ON mks_customplanfees.id = mks_customplanfees_cstm.id_c   
		LEFT JOIN  mks_custompaymentplan_mks_customplanfees_c jtl0 ON mks_customplanfees.id=jtl0.mks_custompaymentplan_mks_customplanfeesmks_customplanfees_idb AND jtl0.deleted=0
		LEFT JOIN  mks_custompaymentplan jt0 ON jt0.id=jtl0.mks_customed0dentplan_ida AND jt0.deleted=0 AND jt0.deleted=0  
		LEFT JOIN  mks_custompaymentplan_cstm jt0_c ON jt0_c.id_c = jt0.id
		LEFT JOIN  users jt1 ON mks_customplanfees.assigned_user_id=jt1.id AND jt1.deleted=0 AND jt1.deleted=0
		INNER JOIN `mks_custompaymentplan_mks_registration_c` cm ON cm.`mks_custompaymentplan_mks_registrationmks_custompaymentplan_idb` = jt0.id
		INNER JOIN `mks_registration` r ON r.id = cm.`mks_custompaymentplan_mks_registrationmks_registration_ida`
		INNER JOIN `accounts_mks_registration_1_c` c ON c.`accounts_mks_registration_1mks_registration_idb`= r.id
		INNER JOIN `accounts` a ON a.id = c.`accounts_mks_registration_1accounts_ida`
		LEFT JOIN  `accounts_cstm` ac ON ac.id_c = a.id 
		WHERE ((mks_customplanfees_cstm.payment_status_c IN ('pending'))) AND jt0_c.status_c='valid' AND r.status_id = 'Draft'
		AND mks_customplanfees.deleted=0 
		GROUP BY jt0.`id_autoincrement`
		ORDER BY r.document_name DESC	
		
		";
		
		$result = $db->query($query);
		
		while($row = $db->fetchByAssoc($result)){
			
			$mks_Defaulters = BeanFactory::getBean('mks_Defaulters');			
			
			$mks_Defaulters->account_id_c 			= $row['account_id'];
			$mks_Defaulters->telephone_c			= $row['phone_mobile_c'];
			$mks_Defaulters->mks_teacher_id_c		= '';
			$mks_Defaulters->mks_academicgroups_id_c= $row['academicgroups_id'];
			$mks_Defaulters->amount_fees_c			= $row['n_fees'];
			$mks_Defaulters->classes_without_c		= 0;
			$mks_Defaulters->mks_registration_id_c	= $row['registration_id'];
			$mks_Defaulters->last_action_c			= date('Y-m-d');
			$mks_Defaulters->balance_c				= $row['balance_c'];
			
			$mks_Defaulters->save();		
		}
		
		$GLOBALS['log']->fatal("My Query is : $query");

exit();