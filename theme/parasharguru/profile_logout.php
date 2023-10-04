<?php 
//Template Name:Profile-logout-page-pg
?>
<?php 
session_start();
session_destroy();
wp_redirect(home_url('/profile_edit_page'));
?>