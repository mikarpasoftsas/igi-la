<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
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
 */


class mks_CustomPlanFees extends Basic
{
    public $new_schema = true;
    public $module_dir = 'mks_CustomPlanFees';
    public $object_name = 'mks_CustomPlanFees';
    public $table_name = 'mks_customplanfees';
    public $importable = true;

    public $id;
    public $name;
    public $date_entered;
    public $date_modified;
    public $modified_user_id;
    public $modified_by_name;
    public $created_by;
    public $created_by_name;
    public $description;
    public $deleted;
    public $created_by_link;
    public $modified_user_link;
    public $assigned_user_id;
    public $assigned_user_name;
    public $assigned_user_link;
    public $SecurityGroups;
    public $amount;
	
    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }
	
	function getRuleCharge($obj,$diff_days)
	{
			
		global $db;
	
		$query = "
		
			SELECT  mks_customdiscountrules.id, mks_customdiscountrules_cstm.`type_c`, `value`
			FROM mks_customdiscountrules  
			LEFT JOIN mks_customdiscountrules_cstm ON mks_customdiscountrules.id = mks_customdiscountrules_cstm.id_c   
			LEFT JOIN  mks_customdiscountrules_mks_custompaymentplan_c jtl0 ON mks_customdiscountrules.id=jtl0.mks_custom34c2ntrules_idb AND jtl0.deleted=0
			LEFT JOIN  mks_custompaymentplan jt0 ON jt0.id=jtl0.mks_custom2713entplan_ida AND jt0.deleted=0 AND jt0.deleted=0 
			LEFT JOIN  users jt1 ON mks_customdiscountrules.assigned_user_id=jt1.id AND jt1.deleted=0 AND jt1.deleted=0 
			 WHERE ((jt0.id = '".$obj->mks_customed0dentplan_ida."')) 
				AND mks_customdiscountrules.deleted=0 
				AND `discountrule` = 'surcharge' AND
				( 
				
					final_day > 0 AND ( ".$diff_days." BETWEEN `initial_day` AND `final_day` ) OR
					
					final_day = 0 AND ( ".$diff_days." >`initial_day`) 					
				   
				) 
				
			ORDER BY mks_customdiscountrules.id_autoincrement ASC
					
		";
	     
		$res = $db->query($query);
		
		$row = $db->fetchByAssoc($res);

		$idrule = array("id"=>"","type_c"=>"","value"=>0.00);
		
		if(isset($row['id']))	
					
			$idrule = $row;
		
		return $idrule;
		
	}
	
	function getRuleDiscount($obj,$diff_days)
	{
			
		global $db;
	
		$query = "
		
			SELECT  mks_customdiscountrules.id, mks_customdiscountrules_cstm.`type_c`, `value`
			FROM mks_customdiscountrules  
			LEFT JOIN mks_customdiscountrules_cstm ON mks_customdiscountrules.id = mks_customdiscountrules_cstm.id_c   
			LEFT JOIN  mks_customdiscountrules_mks_custompaymentplan_c jtl0 ON mks_customdiscountrules.id=jtl0.mks_custom34c2ntrules_idb AND jtl0.deleted=0
			LEFT JOIN  mks_custompaymentplan jt0 ON jt0.id=jtl0.mks_custom2713entplan_ida AND jt0.deleted=0 AND jt0.deleted=0 
			LEFT JOIN  users jt1 ON mks_customdiscountrules.assigned_user_id=jt1.id AND jt1.deleted=0 AND jt1.deleted=0 
			 WHERE ((jt0.id = '".$obj->mks_customed0dentplan_ida."')) 
				AND mks_customdiscountrules.deleted=0 
				AND `discountrule` = 'discount'
				AND ".$diff_days." BETWEEN `initial_day` AND `final_day`
			ORDER BY mks_customdiscountrules.id_autoincrement ASC
					
		";
	     
		$res = $db->query($query);
		
		$row = $db->fetchByAssoc($res);

		$idrule = array("id"=>"","type_c"=>"","value"=>0.00);
		
		if(isset($row['id']))	
					
			$idrule = $row;
			
		return $idrule;
		
	}
	
	function getDiffDay($a,$b)
	{
		global $timedate,$db; 
	
		if(!empty($a) && !empty($b)){
			
			$b1 = $timedate->to_db($b);
			
			
			$query = "
			
				SELECT DATEDIFF('".$b1."','".$a."') as date_difference
						
			";
			 
			$res = $db->query($query);
			
			$row = $db->fetchByAssoc($res);

			if(isset($row['date_difference']))	
						
				return $row['date_difference'];
		}
		
		return 0;	
	}
	
	
	function getSurcharge($obj)
	{ 
		
		$diffday = $this->getDiffDay(date("Y-m-d H:i:s"),$obj->expiration);

		if ( $diffday < 0 )
		{
			 $rule = $this->getRuleCharge($obj,$diffday*-1);
			 
			 if (!empty($rule['id']))
			 {	 
				 if($rule['type_c']=='valor')
					 
					return $rule['value'];
					
				 else
					 
					return ($obj->amount-$obj->partial_mount_c) * ($rule['value'] / 100);
			 }				
		}
		
		return 0.00;
	}
	
	function getDiscount($obj)
	{
		
		$diffday = $this->getDiffDay(date("Y-m-d H:i:s"),$obj->expiration);
       
		if ( $diffday > 0 )
		{    
			 $rule = $this->getRuleDiscount($obj,$diffday);
			 
			 if (!empty($rule['id']))
			 {
				 if($rule['type_c']=='valor')
					 
					return $rule['value'];
					
				 else
					 
					return ($obj->amount-$obj->partial_mount_c) * ($rule['value'] / 100);
			 }
		}
		
		return 0.00;
	}
	
	function calculate_payment_detail($obj)
	{
		
		if($obj->payment_status_c != 'Paid'){
			
			$surcharge = 0.00;
			
			if (empty($obj->amount_interest_c)||$obj->amount_interest_c==0.00)
				{
					$surcharge = $this->getSurcharge($obj);
					
					if($surcharge > 0.00)
						
						$obj->amount_interest_c = $surcharge;
						$obj->amount = $obj->amount + $obj->amount_interest_c;
					
				}
				
			$discount  = $this->getDiscount($obj);	
			
			return (($obj->amount-$obj->partial_mount_c) - $discount);		
			
		}	
		
	}
	
	function calculate_payment_detail_only_surcharge($obj)
	{
		
		if($obj->payment_status_c != 'Paid'){
			
			$surcharge = 0.00;
			
			if (empty($obj->amount_interest_c)||$obj->amount_interest_c==0.00)
				{
					$surcharge = $this->getSurcharge($obj);
					
					if($surcharge > 0.00)
					{
						$obj->amount_interest_c = $surcharge;
						$obj->amount = $obj->amount + $obj->amount_interest_c;
					}	
					
				}
					
			return (($obj->amount-$obj->partial_mount_c));		
			
		}	
		
	}
	
}