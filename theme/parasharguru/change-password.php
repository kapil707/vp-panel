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
<script>
	function check_password1()
{
	$(".check_new_password_div").html("Loading....");
	new_password = $("#new_password").val();
	if(new_password.length < 8)
	{
		swal("Password must contain 8 characters (e.g. A,a or 1,2 or !,$,@)");
		$(".submit_div").html("<p class='text-danger'>Password must contain 8 characters (e.g. A,a or 1,2 or !,$,@)</p>");
		pass2 = 0;
		submit_btn();
	}
	else
	{
		$(".submit_div").html("&nbsp;");
		pass2 = 1;
		submit_btn();
	}
}
function check_password2()
{
	$(".check_renew_password_div").html("Loading....");
	new_password = $("#new_password").val();
	renew_password = $("#renew_password").val();
	check_password1();
	if(new_password!=renew_password)
	{
		swal("Password doesn't match");
		$(".submit_div").html("<p class='text-danger'>Password doesn't match</p>");
		pass3 = 0;
		submit_btn();
	}
	else
	{
		$(".submit_div").html("<p class='text-success'>Password Matched.</p>");
		pass3 = 1;
		submit_btn();
	}
}
</script>
<?php include_once(get_footer("mobile")); ?>