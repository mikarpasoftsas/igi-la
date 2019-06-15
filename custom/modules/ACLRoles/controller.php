<?php
class ACLRolesController extends SugarController
{
    function preProcess()
    {
       if($this->action == 'Popup')
		{
			/*
			 Se Habilita el acceso al PopUp para usuario no admin
			*/
			$this->hasAccess = true;
		}
    }
}