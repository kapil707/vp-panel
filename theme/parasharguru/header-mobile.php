
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<html lang="zxx">
<!--[if gt IE 8]> <!-->
<!--
<![endif]-->

<head>
	<?php echo vp_head(); ?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<link href="<?php echo get_theme_path(); ?>css/login_style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
//session_start();
// Set a session variable
$id = $_SESSION['profile_user'];
if($id==""){
    redirect(base_url().'login');
}
$users_row = get_table_row("tbl_o_my_users where id='$id'");
?>
<div class="mobile-left-menu">
	<i class="fa fa-times mobile-left-menu-cancel" aria-hidden="true" onclick="menuoff()"></i>
	<div class="row">
		<div class="col-sm-12 text-center">
			<img src="<?php echo get_theme_path(); ?>images/user-account.png" width="50%" class="rounded-circle img-thumbnail user_image">
		</div>
		<div class="col-sm-12 text-center text-white">
			<?php echo $users_row->first_name ?>
			<?php echo $users_row->last_name ?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<ul class="menu_css">
				<li>
					<a href="<?php echo site_url(); ?>home">
						Home
					</a>
				</li>
				<li>
					<a href="<?php echo site_url(); ?>bhava">
						Bhava
					</a>
				</li>
                <li>
					<a href="<?php echo site_url(); ?>janmarashi">
						Janmarashi
					</a>
				</li>
                <li>
					<a href="<?php echo site_url(); ?>panchang">
						Panchang
					</a>
				</li>
				<li>
					<a href="<?php echo site_url(); ?>referral-code">
						Referral code
					</a>
				</li>
				<li>
					<a href="<?php echo site_url(); ?>edit-profile">
						Edit Profile
					</a>
				</li>
				<li>
					<a href="<?php echo site_url(); ?>profile-logout">
						Logout
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="fix-header bg-[#A17603]">
	<div class="col-sm-12">
		<div class="bg-[#A17603] text-white text-center p-1">
			<img src="<?php echo get_theme_path(); ?>images/menu-icon-12.png" class="mobile-menu-css" onclick="menushow()">
			<p class="font-medium text-[28px] mt-1" id="join" style="font-size: 35px;">
				<?php echo get_field_data('login_label1','73'); ?>
			</p>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row" style="padding-top:80px;">
		<div class="col-sm-4">
			<div class="toast" data-bs-delay="10000">
				<div class="toast-header">
					<!-- <img src="..." class="rounded mr-2" alt="..."> -->
					<strong class="mr-auto">
						<?php 
						if (!empty($this->session->flashdata('message_title')))
						{
							echo $this->session->flashdata('message_title'); 
						}
						?>
					</strong>
					<small class="text-muted">
						<?php 
						if (!empty($this->session->flashdata('message_time')))
						{
							echo $this->session->flashdata('message_time'); 
						}
						?>
					</small>
					<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="toast-body">
					<?php 
					if (!empty($this->session->flashdata('message_value')))
					{
						echo $this->session->flashdata('message_value'); 
					}
					?>
				</div>
			</div>
			<script>
			<?php if (!empty($this->session->flashdata('message_toast_show'))){ ?>
			$(document).ready(function(){
			$('.toast').toast('show');
			});
			<?php } ?>
			</script>
		</div>
		<div class="col-sm-4">