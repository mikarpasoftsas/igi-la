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


class mks_RegistrationReceipts extends Basic
{
    public $new_schema = true;
    public $module_dir = 'mks_RegistrationReceipts';
    public $object_name = 'mks_RegistrationReceipts';
    public $table_name = 'mks_registrationreceipts';
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
	
    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }
	
	public function getOpenMovementByBox($idbox,$ObjReg)
	{
		global $db;
		
		$assigned_user_id = $ObjReg->assigned_user_id;
		
		$query = "					
			
			SELECT mks_dailyboxmovements.id, 
				   mks_dailyboxmovements_cstm.date_box_c, 
				   mks_dailyboxmovements_cstm.balance_c, 
				   mks_dailyboxmovements_cstm.status_c, 
				   mks_dailyboxmovements_cstm.mks_box_id_c, 
				   mks_dailyboxmovements.assigned_user_id, 
				   mks_dailyboxmovements.NAME, 
				   jt0.NAME       box_c, 
				   jt1.user_name  assigned_user_name, 
				   jt1.created_by assigned_user_name_owner, 
				   'Users'        assigned_user_name_mod, 
				   mks_dailyboxmovements.created_by 
			FROM   mks_dailyboxmovements 
				   LEFT JOIN mks_dailyboxmovements_cstm 
						  ON mks_dailyboxmovements.id = mks_dailyboxmovements_cstm.id_c 
				   LEFT JOIN mks_box jt0 
						  ON mks_dailyboxmovements_cstm.mks_box_id_c = jt0.id 
							 AND jt0.deleted = 0 
				   LEFT JOIN users jt1 
						  ON mks_dailyboxmovements.assigned_user_id = jt1.id 
							 AND jt1.deleted = 0 
							 AND jt1.deleted = 0 
			WHERE  ( ( jt0.id = '".$idbox."' ) 
					 AND ( mks_dailyboxmovements_cstm.status_c IN ( 'open' ) ) 
					 AND ( mks_dailyboxmovements.assigned_user_id = 
						   '".$assigned_user_id."' 
							OR EXISTS (SELECT 1 
									   FROM   securitygroups secg 
											  INNER JOIN securitygroups_users secu 
													  ON secg.id = secu.securitygroup_id 
														 AND secu.deleted = 0 
														 AND secu.user_id = 
											  '".$assigned_user_id."' 
											  INNER JOIN securitygroups_records secr 
													  ON secg.id = secr.securitygroup_id 
														 AND secr.deleted = 0 
														 AND 
											  secr.module = 'mks_DailyBoxMovements' 
									   WHERE  secr.record_id = mks_dailyboxmovements.id 
											  AND secg.deleted = 0) ) ) 
				   AND mks_dailyboxmovements.deleted = 0 
			ORDER  BY mks_dailyboxmovements_cstm.date_box_c ASC 
			LIMIT 1				
		";
				
		$result = $db->query($query);
							
		$row = $db->fetchByAssoc($result);	
		
		if(isset($row['id']) && !empty($row['id']))
		
			return BeanFactory::getBean('mks_DailyBoxMovements',$row['id']);
		
		else{
			
			$mks_DailyBoxMovements = BeanFactory::getBean('mks_DailyBoxMovements');			
			$mks_Box = BeanFactory::getBean('mks_Box',$idbox);			
			$mks_DailyBoxMovements->name = 'Mov. Diario';			
			$mks_DailyBoxMovements->date_box_c = date('Y-m-d');			
			$mks_DailyBoxMovements->mks_box_id_c = $idbox;			
			$mks_DailyBoxMovements->assigned_user_id = $assigned_user_id;	
			$mks_DailyBoxMovements->status_c = 'open';	
			$mks_DailyBoxMovements->balance_c = $mks_Box->balance_c;
			$mks_DailyBoxMovements->save();
			
			require_once('modules/SecurityGroups/SecurityGroup.php');
			$groupFocus = new SecurityGroup();
			$security_modules = $groupFocus->getSecurityModules();
			//sanity check
			if(in_array("mks_DailyBoxMovements",array_keys($security_modules))) {
				//add each group in securitygroup_list to new record
				$rel_name = $groupFocus->getLinkName("mks_DailyBoxMovements","SecurityGroups");
				$gbu 	  = $groupFocus->getUserSecurityGroups($current_user->id);
				if($mks_DailyBoxMovements->load_relationship($rel_name)){
					
					$query = "
				
						select * 
						from securitygroups_records 
						where module = 'mks_Box' 
						and deleted = 0 and 
						record_id = '".$idbox."'
						
					";
					
					$result = $db->query($query);
					
					while( $row = $db->fetchByAssoc($result)){ 
					
						$mks_DailyBoxMovements->$rel_name->add($row['securitygroup_id']);
						$groupFocus->addGroupToRecord('mks_DailyBoxMovements', $mks_DailyBoxMovements->id,$row['securitygroup_id']);						
					}		
				
				}
				else
					die("Not load rel $rel_name");
			}
			
			
			/*			
			
			$mks_Box = BeanFactory::getBean('mks_Box',$idbox);
			
			if ($mks_Box->load_relationship('mks_box_securitygroups')){
				
				$filiales = $mks_Box->mks_box_securitygroups->getBeans();
							
				if ($mks_DailyBoxMovements->load_relationship(' mks_dailyboxmovements_securitygroups_1')){

					foreach($filiales as $filial)
						
						$mks_DailyBoxMovements-> mks_dailyboxmovements_securitygroups_1->add($filial->id);
				}
				else
					die("Not load rel  mks_dailyboxmovements_securitygroups_1");		
			}
				else
					die("Not load rel mks_box_securitygroups");		
			*/
			
			return BeanFactory::getBean('mks_DailyBoxMovements',$mks_DailyBoxMovements->id);
		}
		
		return null;
	}
	
	public function processRel($ObjReg,$NameRelReg,$NameRelBox,$NameFieldIdBox)
	{
		if ($ObjReg->load_relationship($NameRelReg))
		{
			$listObjs = $ObjReg->$NameRelReg->getBeans(
				
					array(
								
								'order_by' => array(array('date_entered', 'ASC'))
						)
				
			);	
			$import = 0;
			
			foreach($listObjs as $Obj)
			{				
				$mks_Box = BeanFactory::getBean(
							'mks_Box', 
							$Obj->$NameFieldIdBox
						);
						
				$ObjBox = $this->getOpenMovementByBox($Obj->$NameFieldIdBox, $ObjReg);
				if(is_object($ObjBox)){
					if ($ObjBox->load_relationship($NameRelBox))
					{
						$ObjBox->$NameRelBox->add($Obj->id);
						$ObjBox->balance_c+=$Obj->amount_c * $Obj->exchange_rate_c;
						$ObjBox->save();					
						
						$mks_Box->balance_c+=$Obj->amount_c * $Obj->exchange_rate_c;
						$mks_Box->save();
					}
					else
					{
						die('Not load rel $NameRelBox ');
					}
				}
				
			}			
			
		}else
		{
			die('Not load rel $NameRelReg ');
		}
		
	}
	
	public function saveDailyBoxMovement($mks_RegistrationReceipts)
	{
		
		global $current_user;
		
		$import = 0;
		
	
		
		//Obtenemos los pagos en efectivo y los relacionamos a la caja respectiva
			
		$this->processRel($mks_RegistrationReceipts,'mks_registrationreceipts_mks_paymentscash_1','mks_dailyboxmovements_mks_paymentscash_1','mks_box_mks_paymentscash_1mks_box_ida');
			
			
		//Obtenemos los pagos con transferencia y los relacionamos a la caja respectiva
			
		$this->processRel($mks_RegistrationReceipts,'mks_registrationreceipts_mks_paymentstransfer_1','mks_dailyboxmovements_mks_paymentstransfer_1','mks_box_mks_paymentstransfer_1mks_box_ida');
					
			
		//Registramos una salida manual en efectivo al balance sobrante
		/*
		if($mks_RegistrationReceipts->balance_c>0){
			
			$mks_Movement = BeanFactory::getBean('mks_Movement');
			$mks_Movement->name = "Mov. Manual";
			$mks_Movement->date_movement = date('Y-m-d');
			$mks_Movement->way_pay = "Efectivo";
			$mks_Movement->type_income = "Salida";
			$mks_Movement->mks_movementtype_id_c = "19899658-e09a-73d6-41bc-5ce02a7e034c";
			$mks_Movement->assigned_user_id = $current_user->assigned_user_id;
			$mks_Movement->save();
			
			if ($mks_Movement->load_relationship('mks_dailyboxmovements_mks_movement_1'))
			{
				$mks_Movement->mks_dailyboxmovements_mks_movement_1->add("a cual caja?");
			}
			
			$import-=$mks_RegistrationReceipts->balance_c;
		}
		*/
		
	}
	
}