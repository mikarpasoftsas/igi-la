<?php

require_once('include/MVC/View/views/view.edit.php');

class mks_CustomPaymentPlanViewEdit extends ViewEdit {

    function __construct(){
        parent::__construct();
    }

    function display(){
      if ($this->bean->status_c == 'closed') {
        $queryParams = array(
            'module' => 'mks_CustomPaymentPlan',
            'return_module' => 'ChildModule',
            'action' => 'DetailView',
            'record' => $this->bean->id
        );
        SugarApplication::redirect('index.php?' . http_build_query($queryParams));
      }
      else {
        parent::display();
      }
    }
}