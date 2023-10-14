<?php include_once(get_header("mobile")); ?>
<?php
// Set a session variable
$id = $_SESSION['profile_user'];
			
$row = get_table_row("tbl_o_my_users where id='$id'");

$result1 = get_table("tbl_o_interest");
?>
<?php if (!empty($this->session->flashdata('message_toast_show'))){ ?>
<?php if ($this->session->flashdata('message_toast_show')==1){ ?>
	<div class="alert alert-success">
<?php } ?>
<?php if ($this->session->flashdata('message_toast_show')==2){ ?>
	<div class="alert alert-danger">
<?php } ?>
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>
		<?php echo $this->session->flashdata('message_title'); ?>
		</strong><?php echo $this->session->flashdata('message_value'); ?>
	</div>
<?php } ?>
<?php if(empty($row->password)) { ?>
<a href="<?php echo base_url(); ?>" class="main-btn flex gap-1 items-center justify-center w-full font-semibold text-center mt-6 text-white rounded-md bg-[#A17603] px-3 py-3 text-[18px]" name="Submit1">Skip<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-[21px]"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg></a>
<br><br>
<?php } ?>

<form method="POST" class="detailsbox" id="contact-form" enctype="multipart/form-data" action="<?php echo base_url(); ?>post-data">
	<input type="hidden" name="action_type" value="password_form_submit">
	<div class="row">
		<div class="col-sm-12 form-group">
			<label>Enter Password:</label>
			<input type="password" name="new_password" class="form-control input-lg" placeholder="Enter Password" required="" value="" onchange="check_password1()" id="new_password" required>
			<div style="margin-top: -32px;width: 45px;position: absolute;right: 4px;">
				<img src="<?php echo get_theme_path(); ?>images/b_eyes1.png" width="25px" onclick="showpassword('new_password')" id="eyes1_new_password" alt="">
				<img src="<?php echo get_theme_path(); ?>images/b_eyes.png" width="25px" onclick="hidepassword('new_password')" id="eyes_new_password" style="display:none" alt="">
			</div>
		</div>
		<div class="col-sm-12 form-group">
			<label>Re-enter Password:</label>
			<input type="password" name="renew_password" class="form-control input-lg" placeholder="Re-enter Password" required="" value="" onchange="check_password2()" id="renew_password" required>
			<div style="margin-top: -32px;width: 45px;position: absolute;right: 4px;">
				<img src="<?php echo get_theme_path(); ?>images/b_eyes1.png" width="25px" onclick="showpassword('renew_password')" id="eyes1_renew_password" alt="">
				<img src="<?php echo get_theme_path(); ?>images/b_eyes.png" width="25px" onclick="hidepassword('renew_password')" id="eyes_renew_password" style="display:none" alt="">
			</div>
		</div>

		<div class="col-sm-12 form-group alert_div"></div>

		<div class="col-sm-12 form-group" id="submitbtn_disable" style="display:none">
			<a href="#" class="main-btn flex gap-1 items-center justify-center w-full font-semibold text-center mt-6 text-white rounded-md bg-[#A17603] px-3 py-3 text-[18px]" name="Submit1">Edit<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-[21px]"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg></a>
		</div>

		<div class="col-sm-12 form-group" id="submitbtn">
			<button type="submit" class="main-btn flex gap-1 items-center justify-center w-full font-semibold text-center mt-6 text-white rounded-md bg-[#A17603] px-3 py-3 text-[18px]" name="Submit1">Edit<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-[21px]"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg></button>
		</div>
	</div>
</form>	
<script>
var pass1 = 1;
var pass2 = 0;
var pass3 = 0;
function check_password1()
{
	new_password = $("#new_password").val();
	if(new_password.length < 8)
	{
		swal("Password must contain 8 characters (e.g. A,a or 1,2 or !,$,@)");
		$(".alert_div").html("<div class='alert alert-danger'>Password must contain 8 characters (e.g. A,a or 1,2 or !,$,@)</div>");
		pass2 = 0;
		submit_btn();
	}
	else
	{
		$(".alert_div").html("");
		pass2 = 1;
		submit_btn();
	}
}
function check_password2()
{
	new_password = $("#new_password").val();
	renew_password = $("#renew_password").val();
	check_password1();
	if(new_password!=renew_password)
	{
		swal("Password doesn't match");
		$(".alert_div").html("<div class='alert alert-danger'>Password doesn't match</div>");
		pass3 = 0;
		submit_btn();
	}
	else
	{
		$(".alert_div").html("");
		pass3 = 1;
		submit_btn();
	}
}
function submit_btn()
{
	$("#submitbtn").hide()
	$("#submitbtn_disable").show()
	if(pass1=="1" && pass2=="1" && pass3=="1")
	{
		$("#submitbtn").show()
		$("#submitbtn_disable").hide()
	}
}
function showpassword(id)
{
	$("#eyes1_"+id).hide();
	$("#eyes_"+id).show();
	document.getElementById(id).type = 'text';
}
function hidepassword(id)
{
	$("#eyes1_"+id).show();
	$("#eyes_"+id).hide();
	document.getElementById(id).type = 'password';
}
</script>
<?php include_once(get_footer("mobile")); ?>