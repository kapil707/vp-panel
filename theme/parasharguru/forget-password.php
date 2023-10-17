<?php
include_once('functions.php');
$id  = $_SESSION["temp_user_id"];
$dt = array(
	'password' =>'',
);
$where = array('id'=>$id);
edit_function("tbl_o_my_users",$dt,$where);

/*************************************************** */
$row = get_table_row("tbl_o_my_users where id='$id'");
$otp = getName();
$message = "Hello $row->name <br>Your otp to login https://www.parashar.guru/ is : $otp";
send_otp($message,$row->mobile);
?>