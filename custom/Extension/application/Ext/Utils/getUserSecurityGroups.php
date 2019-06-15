<?php
function getUserSecurityGroups(){
	die("asdasdasd");
			require_once('modules/SecurityGroups/SecurityGroup.php');
            $groupFocus = new SecurityGroup();
            $security_modules = $groupFocus->getSecurityModules();
            if (array_key_exists("Accounts", $security_modules)) {
                global $current_user;
                $group_count = $groupFocus->getMembershipCount($current_user->id);
                if ($group_count > 1) {
                    $groups = $groupFocus->getUserSecurityGroups($current_user->id);
                    $group_options = array();
                    foreach ($groups as $group) {
                        $group_options[$group['id']] = $group['name'];
                    }
                }
            }
			return $group_options;
}