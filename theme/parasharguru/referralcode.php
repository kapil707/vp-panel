<?php 
//Template Name:Referralcode-pg
?>
<?php get_header("mobile"); ?>
<body>
<?php echo the_content(); ?>
<?php
session_start();
// Set a session variable
$id = $_SESSION['profile_user'];
			
global $wpdb;
$table_name = $wpdb->prefix . 'my_users';

$sql = "SELECT * FROM $table_name WHERE id='$id'";
$row = $wpdb->get_row($sql);
?>
	<h1 style="font-size:30px;margin-top:30px;" class="text-center">Referral code</h1>
	<h1 style="font-size:30px;margin-top:30px;" class="text-center"><?php echo $row->your_code ?></h1>
	
	<div class="text-center" style="font-size:20px;margin-top:50px;">
		<a href="#" onclick="CopyToClipboard('sample');return false;" id="sample">
			<?php echo site_url(); ?>/login/?code=<?php echo $row->your_code ?>
		</a>
	</div>
<script>
function CopyToClipboard(id)
{
	var r = document.createRange();
	r.selectNode(document.getElementById(id));
	window.getSelection().removeAllRanges();
	window.getSelection().addRange(r);
	document.execCommand('copy');
	window.getSelection().removeAllRanges();
	alert("Text Copy")
}
</script>
<?php get_footer("mobile"); ?>