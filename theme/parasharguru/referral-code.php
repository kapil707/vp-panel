<?php include_once(get_header("mobile")); ?>
<?php
$id = $_SESSION['profile_user'];
			
$row = get_table_row("tbl_o_my_users where id='$id'");
?>
<h1 style="font-size:30px;margin-top:30px;" class="text-center">Referral code</h1>
<h1 style="font-size:30px;margin-top:30px;" class="text-center"><?php echo $row->your_code ?></h1>
	
<?php include_once('referral-code2.php'); ?>
<?php include_once(get_footer("mobile")); ?>