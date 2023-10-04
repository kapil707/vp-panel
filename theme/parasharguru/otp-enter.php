<?php 
//Template Name:Otp-page-pg
?>
<?php get_header(); ?>
<body>
<?php echo the_content(); ?>
<?php
global $wpdb;
$table_name = $wpdb->prefix . 'my_users';
$id = $_GET["id"];
$sql = "SELECT * FROM $table_name WHERE id='$id'";
$row = $wpdb->get_row($sql);

$no = $row->mobile;
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4">

		</div>
		<div class="col-sm-4 text-center">
			<div class="bg-[#A17603] text-white text-center p-1">
				<p class="font-medium text-[32px] mt-1" id="join" style="font-size: 35px;">
					<?php echo get_field('login_label1','43'); ?>
				</p>
			</div>
			<p class="font-bold text-[24px] mb-2" style="font-size: 12px;text-align: right;">
				<?php echo get_field('login_label2','43'); ?>
			</p>
			<form class="" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="POST" style="margin-top:50px;">
				<input type="hidden" name="action" value="otp_page_form_submit">
				<input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
				<div class="mt-2">
					<p class=" text-[#A17603] text-[12px] font-normal">Hello <?php echo $row->name; ?>, Otp Send on your this mobile no <?php echo $no; ?></p>
					<p class=" text-[#A17603] text-[12px] font-normal">Enter Otp</p>
					<input id="name" name="otp" type="name" placeholder="Please Enter otp" maxlength="100" required="" class="border-[#A17603] w-full rounded-[11px] border-[1px] px-4 py-3 placeholder-[#A17603] focus:ring-2 focus:ring-inset focus:ring-[#A17603] text-[#A17603] " value="">
				</div>
				<button type="submit" class="main-btn flex gap-1 items-center justify-center w-full font-semibold text-center mt-6 text-white rounded-md bg-[#A17603] px-3 py-3 text-[18px]" name="login_submit">
					Submit
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-[21px]"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg>
				</button>
			</form>
		</div>
	</div>
</div>


