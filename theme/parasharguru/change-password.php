<?php include_once(get_header("mobile")); ?>
<?php
// Set a session variable
$id = $_SESSION['profile_user'];
			
$row = get_table_row("tbl_o_my_users where id='$id'");

$result1 = get_table("tbl_o_interest");
?>
<?php if (!empty($this->session->flashdata('message_toast_show'))){ ?>
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>
	<?php echo $this->session->flashdata('message_title'); ?>
	</strong><?php echo $this->session->flashdata('message_value'); ?>
</div>
<?php } ?>
<form method="POST" class="detailsbox" id="contact-form" enctype="multipart/form-data" action="<?php echo base_url(); ?>post-data">
	<input type="hidden" name="action_type" value="change_password">
	<div class="row">
		<div class="col-sm-12 form-group">
			<label>Enter Password:</label>
			<input type="password" name="password" class="form-control input-lg" placeholder="Enter Password" required="" value="">
		</div>
		<div class="col-sm-12 form-group">
			<label>Re-enter Password:</label>
			<input type="password" name="password" class="form-control input-lg" placeholder="Re-enter Password" required="" value="">
		</div>
	</div>
</form>	

<?php include_once(get_footer("mobile")); ?>