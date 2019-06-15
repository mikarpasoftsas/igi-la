<?php

$entry_point_registry['getCourseById'] = array('file' => 'custom/modules/mks_Courses/getCourseById.php', 'auth' => false);
$entry_point_registry['getCustomPaymentPlan'] = array('file' => 'custom/modules/mks_Registration/getCustomPaymentPlan.php', 'auth' => false);
$entry_point_registry['saveMessageFb'] = array('file' => 'custom/modules/mks_MessagesFb/saveMessageFb.php', 'auth' => true);
$entry_point_registry['getMessagesFb'] = array('file' => 'custom/modules/mks_MessagesFb/getMessagesFb.php', 'auth' => true);
$entry_point_registry['fbWebhookMessages'] = array('file' => 'custom/modules/mks_MessagesFb/fbWebhookMessages.php', 'auth' => false);
$entry_point_registry['NewAutoRegRR'] = array('file' => 'custom/modules/mks_RegistrationReceipts/new_auto_reg_rr.php', 'auth' => true);
$entry_point_registry['processPayment'] = array('file' => 'custom/modules/mks_RegistrationReceipts/process_payment.php', 'auth' => true);
$entry_point_registry['OccupationView'] = array('file' => 'custom/modules/mks_AcademicGroups/view.occupation.php', 'auth' => true);
$entry_point_registry['getOccupation'] = array('file' => 'custom/modules/mks_AcademicGroups/get_occupation.php', 'auth' => true);
$entry_point_registry['geDebt'] = array('file' => 'custom/modules/mks_Refinances/get_debt.php', 'auth' => true);
