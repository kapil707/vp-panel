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
		<ul>
			<li> <button id="facebook-share"><i class="fa fa-facebook" aria-hidden="true"></i></button></li>
			<li> <button id="twitter-share"><i class="fa fa-twitter" aria-hidden="true"></i></button></li>
			<li> <button id="linkedin-share"><i class="fa fa-linkedin" aria-hidden="true"></i></button></li>
			<li> <a href="<?php echo site_url(); ?>login/?code=<?php echo $row->your_code ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
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

// Function to open a new window for sharing
function openShareWindow(url) {
    window.open(url, '_blank', 'width=600,height=400');
}

// Add event listeners to the buttons
document.getElementById('facebook-share').addEventListener('click', function() {
    const url = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent('<?php echo site_url(); ?>login/?code=<?php echo $row->your_code ?>');
    openShareWindow(url);
});

document.getElementById('twitter-share').addEventListener('click', function() {
    const url = 'https://twitter.com/intent/tweet?url=' + encodeURIComponent('<?php echo site_url(); ?>login/?code=<?php echo $row->your_code ?>');
    openShareWindow(url);
});

document.getElementById('linkedin-share').addEventListener('click', function() {
    const url = 'https://www.linkedin.com/shareArticle?url=' + encodeURIComponent('<?php echo site_url(); ?>login/?code=<?php echo $row->your_code ?>');
    openShareWindow(url);
});
</script>
<?php include_once(get_footer("mobile")); ?>