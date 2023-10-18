<?php include_once(get_header("mobile")); ?>
<?php
$id = $_SESSION['profile_user'];
			
$row = get_table_row("tbl_o_my_users where id='$id'");
?>
	<h1 style="font-size:30px;margin-top:30px;" class="text-center">Referral code</h1>
	<h1 style="font-size:30px;margin-top:30px;" class="text-center"><?php echo $row->your_code ?></h1>
	
	<div class="text-center" style="font-size:20px;margin-top:50px;">
		<a href="#" onclick="CopyToClipboard('sample');return false;" id="sample">
			<?php echo site_url(); ?>login/?code=<?php echo $row->your_code ?>
		</a>
	</div>
	<div class="social-share">
        <button id="facebook-share">Share on Facebook</button>
        <button id="twitter-share">Share on Twitter</button>
        <button id="linkedin-share">Share on LinkedIn</button>
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
<?php include_once(get_footer("mobile")); ?>