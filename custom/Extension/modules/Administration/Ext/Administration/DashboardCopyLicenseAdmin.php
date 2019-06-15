<?php

global $sugar_version, $admin_group_header;

if (!is_array($jckl_options_defs)) {
    $jckl_options_defs=array();
}


if(preg_match( "/^6.*/", $sugar_version) ) {
    $jckl_options_defs['Administration']['jackal_DashboardManager_License']= array('helpInline','LBL_JCKL_DASHBOARD_LICENSEADDON_LICENSE_TITLE','LBL_JCKL_DASHBOARD_LICENSEADDON_LICENSE','./index.php?module=jckl_DashboardTemplates&action=license');

    $jckl_options_defs['Administration']['jackal_DashboardManager']=array(
        'Administration',
        'LBL_JACKAL_DASHBOARDCOPY_TITLE',
        'LBL_JACKAL_DASHBOARDCOPY_DESCRIPTION',
        './index.php?module=jckl_DashboardTemplates&action=index'
    );
} else {
    $jckl_options_defs['Administration']['jackal_DashboardManager']= array('helpInline','LBL_JCKL_DASHBOARD_LICENSEADDON_LICENSE_TITLE','LBL_JCKL_DASHBOARD_LICENSEADDON_LICENSE','javascript:parent.SUGAR.App.router.navigate("#bwc/index.php?module=jckl_DashboardTemplates&action=license", {trigger: true});');
    $jckl_options_defs['Administration']['jackal_DashboardManager']=array(
        'Administration',
        'LBL_JACKAL_DASHBOARDCOPY_TITLE',
        'LBL_JACKAL_DASHBOARDCOPY_DESCRIPTION',
        './index.php?module=jckl_DashboardTemplates&action=index'
    );
}

    $admin_group_header['jackal_software']=array(
        'LBL_JACKAL_DASHBOARD_MANAGER_GROUP_TITLE',
        '',
        'false',
        $jckl_options_defs,
        'LBL_JACKAL_DASHBOARD_MANAGER_GROUP_DESCRIPTION',
    );