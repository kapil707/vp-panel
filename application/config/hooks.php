<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

//require_once BASEPATH."application/config/database.php";

$hook['pre_system'] = array(
'class'    => 'Router_Hook',
'function' => 'get_routes',
'filename' => 'Router_Hook.php',
'filepath' => 'hooks',
'params'   => array(
	"localhost",
	"central50no_user",
	"kapil1234!@#$",
	"central50noida_db",
	"",
	)
);
