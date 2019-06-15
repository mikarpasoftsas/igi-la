<?php
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

    /**
     * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
     */
    require_once('modules/jckl_DashboardTemplates/jckl_DashboardTemplates_sugar.php');
    class jckl_DashboardTemplates extends jckl_DashboardTemplates_sugar {

        public $encoded_pages;
        public $encoded_content;

        function __construct(){
            parent::__construct();
        }

        /**
         * Process list of users, roles, or groups
         * @param $users array
         */
        public function deploy($deploy_ids)
        {

            $users = $this->getUsersArray($deploy_ids);

            $has_users = $this->checkUsers($users);

            if ($has_users) {

                $result = $this->deployToUsers($users);

            } else {

                $result = false;

            }

            return $result;


        }

        protected function deployToUsers($users)
        {
            $template = new jckl_DashboardTemplates();
            $template->retrieve($_REQUEST['template']);

            $this->backupUsersDashboard($users, $template);
            $this->encoded_pages = $template->encoded_pages;
            $this->encoded_content = $template->encoded_content;

            $unencoded_pages = unserialize(base64_decode($this->encoded_pages));
            $unencoded_content = unserialize(base64_decode($this->encoded_content));
            $i = 0;
            foreach ($users as $user_id) {
                $user = new User();
                $user->retrieve($user_id);

                $contents = array_merge(array('dashlets'=> $unencoded_content),array('pages'=> $unencoded_pages));
                require_once('modules/UserPreferences/UserPreference.php');

                //Update 2017-05-08 fix global settings override.
                $focus = new UserPreference($this->_userFocus);
                $result = $focus->retrieve_by_string_fields(array(
                    'assigned_user_id' => $user->id,
                    'category' => 'Home',
                ));
                $focus->assigned_user_id = $user->id; // MFH Bug #13862
                $focus->deleted = 0;
                $focus->contents = base64_encode(serialize($contents));
                $focus->category = 'Home';
                $focus->save();

//                $user->setPreference('pages', $unencoded_pages, 0, 'Home');
//                $user->setPreference('dashlets', $unencoded_content,0,'Home');
//                $user->savePreferencesToDB();
//                $this->saveDeployment($user, $template);
                $i++;
            }

            return $i;

        }

        /**
         * Backup each user dashboard before deploying
         * @param $users
         * @param $template
         */
        protected function backupUsersDashboard($users, $template)
        {

            global $current_user;
            foreach ($users as $user_id) {

                require_once('modules/Users/User.php');

                //Load User bean
                $user = new User();
                $user->retrieve($user_id);

                //Encode the user preferences for database storage.

                $encoded_pages = base64_encode(serialize($user->getPreference('pages', 'Home')));
                $encoded_content = base64_encode(serialize($user->getPreference('dashlets', 'Home')));

                require_once('modules/jckl_DashboardDeployments/jckl_DashboardDeployments.php');

                $deployment = new jckl_DashboardDeployments();
                $deployment->name = 'Backup: ' . $template->name . ' - ' . $user->user_name;
                $deployment->assigned_user_id = $user->id;
                $deployment->encoded_pages = $encoded_pages;
                $deployment->encoded_content = $encoded_content;
                $deployment->user_id_c = $current_user->id;
                $deployment->save();

                $relationship = 'jckl_dashboarddeployments_jckl_dashboardtemplates';
                $deployment->load_relationship($relationship);
                $deployment->$relationship->add($template->id);
                $deployment->save();
            }


        }

        protected function saveDeployment($user, $template)
        {

            global $current_user;
            require_once('modules/jckl_DashboardDeployments/jckl_DashboardDeployments.php');

            $deployment = new jckl_DashboardDeployments();
            $deployment->name = $template->name . ' - ' . $user->user_name;
            $deployment->assigned_user_id = $user->id;
            $deployment->encoded_pages = $template->encoded_pages;
            $deployment->encoded_content = $template->encoded_content;
            $deployment->user_id_c = $current_user->id;
            $deployment->save();

            $relationship = 'jckl_dashboarddeployments_jckl_dashboardtemplates';
            $deployment->load_relationship($relationship);
            $deployment->$relationship->add($template->id);
            $deployment->save();

        }

        /**
         * Check if there are any users selected
         * @param $users
         */
        protected function checkUsers($users)
        {
            $count = count($users);

            $valid = false;

            if ($count > 0) {
                $valid = true;
            }

            return $valid;

        }


        /**
         * Return array of users depending on whether we
         * are deploying to users, roles, or groups
         * @param $deploy_ids
         * @return array
         */
        protected function getUsersArray($deploy_ids)
        {

            $deploy_to = $_REQUEST['deploy_type'];
            $users = array();

            if ($deploy_to == 'role' ) {

                $users = $this->getUsersFromRoles($deploy_ids);

            } elseif($deploy_to == 'group') {

                $users = $this->getUsersFromGroups($deploy_ids);

            }

            else {

                $users = $deploy_ids;

            }


            return $users;

        }


        /**
         * Query to get arrar of users if deploying to groups
         * @param $deploy_ids
         * @return array
         */
        protected function getUsersFromGroups($deploy_ids)
        {
            global $db;

            $temp_data = array();
            foreach($deploy_ids as $deploy_id) {
                $temp_data[] = "'" . $deploy_id . "'";
            }

            $in_string = implode(',', $temp_data);

            $sql = "SELECT su.user_id
                    FROM securitygroups_users su
                    LEFT JOIN users u ON su.user_id = u.id 
                    WHERE su.securitygroup_id IN ($in_string)
                    AND su.deleted = 0
                    AND u.deleted = 0";

            $GLOBALS['log']->debug("jckl_DashboardTemplates::getUsersFromGroups Query: $sql");

            $results = $db->query($sql);

            $users = array();

            while ($row = $db->fetchByAssoc($results)) {

                $users[] = $row['user_id'];

            }

            return $users;


        }

        /**
         * Query to get array of users if deploying to roles
         * @param $deploy_ids
         * @return array
         */
        protected function getUsersFromRoles($deploy_ids)
        {

            global $db;

            $temp_data = array();
            foreach($deploy_ids as $deploy_id) {
                $temp_data[] = "'" . $deploy_id . "'";
            }

            $in_string = implode(',', $temp_data);

            $sql = "SELECT aru.user_id 
                    FROM acl_roles_users aru
                    LEFT JOIN users u ON aru.user_id = u.id 
                    WHERE aru.role_id IN ($in_string)
                    AND aru.deleted = 0
                    AND u.deleted = 0";

            $GLOBALS['log']->debug("jckl_DashboardTemplates::getUsersFromRoles Query: $sql");

            $results = $db->query($sql);

            $users = array();

            while ($row = $db->fetchByAssoc($results)) {

                $users[] = $row['user_id'];

            }

            return $users;

        }


        /**
         * Update template content from the assigned to user settings.
         * @param $user_id
         */
        public function updateEncodedData($user_id)
        {
            global $current_user;
            //DB Datetimestamp
            $date = new SugarDateTime();
            $now = $date->asDb(true);

            require_once('modules/Users/User.php');

            //Load User bean
            $user = new User();
            $user->retrieve($user_id);

            //Encode the user preferences for database storage.
            $encoded_pages = base64_encode(serialize($user->getPreference('pages', 'Home')));
            $encoded_content = base64_encode(serialize($user->getPreference('dashlets', 'Home')));

            $this->encoded_content = $encoded_content;
            $this->encoded_pages = $encoded_pages;
            $this->data_last_refreshed = $now;

        }


    }
?>