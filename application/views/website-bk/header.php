<?php
$title 	= $this->Main_Model->get_website_data("title");
$title2 = $this->Main_Model->get_website_data("title2");
$logo   = $this->Main_Model->get_website_data("logo");
$icon   = $this->Main_Model->get_website_data("icon");
$meta_title  = $this->Main_Model->get_website_data("meta_title");
$meta_keywords = $this->Main_Model->get_website_data("meta_keywords");
$meta_discription = $this->Main_Model->get_website_data("meta_discription");
$google_code = $this->Main_Model->get_website_data("google_code");
$topphone = $this->Main_Model->get_website_data("topphone");
$topemail = $this->Main_Model->get_website_data("topemail");
$ebrochure = $this->Main_Model->get_website_data("ebrochure");
$ebrochurestatus = $this->Main_Model->get_website_data("ebrochurestatus");
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>

	<meta charset="UTF-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="revisit-after" content="5 days" />
    <!--<link rel="icon" href="<?php echo base_url() ?>uploads/manage_website/photo/main/<?php echo $icon; ?>">-->
	<link rel="icon" href="<?php echo base_url() ?>assets/website/assets/img/custom1/favicon.png">
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!--// online-fonts -->
    <script src="<?php echo base_url() ?>assets/website/assets/js/jquery.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/assets/css/bootstrap.css">
    <!--<link rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css" />-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/assets/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/website/assets/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/assets/css/style1.css?ver=2">

    

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/website/assets/css/viewer.css">
    <script src="<?php echo base_url() ?>assets/website/assets/js/viewer.js"></script>
    <script src="<?php echo base_url() ?>assets/website/assets/js/main-new.js"></script>

    <script src="<?php echo base_url() ?>assets/website/assets/js/jquery.magnific-popup.js"></script>
    <script src="<?php echo base_url() ?>assets/website/assets/js/modern-ticker.js" type="text/javascript"> </script>
    <script src="<?php echo base_url() ?>assets/website/assets/js/customD.js"></script>
    <script src="<?php echo base_url() ?>assets/website/assets/js/slide.js"></script>
	
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <!--<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>-->
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<script src="<?php echo base_url(); ?>assets/website/assets/lightbox/lightbox.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            if (sessionStorage.getItem('firstVisit') != 1) {
                $('.popup_section').delay(1000).addClass('zoomIn').fadeIn('fast');
                $('.pp_img_close').delay(2000).addClass('zoomInUp_d').fadeIn('fast');
            }
            // if(sessionStorage.getItem('firstVisit') !=1)
            // {
            // 	$('.popup_section').fadeIn();	
            // 	$('.pp_img_close').fadeIn();	
            // }

            $('.d_pop_cls').click(function() {
                sessionStorage.setItem('firstVisit', 1);
                $('.popup_section').fadeOut();
                $('.pp_img_close').fadeOut();
            });
            
            //$('#pop_top').delay(1000).addClass('zoomIn').fadeIn('fast');
        });
    </script>
	
    <script type="text/javascript">
        /**********Form code**********************************/

        function submit_enquiry_form_header() {
            name = $('#name').val();
            emailid = $('#email').val();
            contact = $('#contact').val();
            msg = $('#msg').val();
			captcha_code = $('#captcha_code').val();

            if ($.trim(name) == "") {
                $('#name').css('border', '1px solid #ff363a');
                $('#name').focus();
                return false;
            } else if ($.trim(emailid) == "") {
                $('#email').css('border', '1px solid #ff363a');
                $('#email').focus();
                return false;
            } else if (!validateEmail(emailid)) {
                $('#email').css('border', '1px solid #ff363a');
                $('#email').focus();
                return false;
            } else if ($.trim(contact) == "") {
                $('#contact').css('border', '1px solid #ff363a');
                $('#contact').focus();
                return false;
            } else if (contact.length < 6) {
                $('#contact').css('border', '1px solid #ff363a');
                $('#contact').focus();
                return false;
            } else if (!contact.match(/[0-9]+/)) {
                $('#contact').css('border-color', 'red');
                $('#contact').focus();
                return false;
            } 
			else if (captcha_code== ""){
				$('#captcha_code').css('border', '1px solid #ff363a');
				$('#captcha_code').focus();
				return false;
			}
			else {

                $("#loaderIcon").show();
                jQuery.ajax({

                    url: "<?php echo base_url()?>contact.php",
                    data: 'name=' + name + '&email=' + emailid + '&contact=' + contact + '&msg=' + msg+'&captcha_code='+captcha_code,
                    type: "POST",

                    success: function(data) {
                        //alert(data); return false; 
                        $("#loaderIcon").hide();
                        $("#enquiry_form").hide();
                        $("#show_alrt").fadeIn();
                        $("#user-availability-status").html(data);
                        //$('#newsletter').val("");

                    },
                    error: function() {}
                })


            }
        }

        function validateEmail($email) {
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            return emailReg.test($email);
        }
    </script>
	<!--onload popup--
    <script type="text/javascript">
        function PopUp(hideOrshow) {
            if (hideOrshow == 'hide') document.getElementById('ac-wrapper').style.display = "none";
            else document.getElementById('ac-wrapper').removeAttribute('style');
        }
        window.onload = function() {
            setTimeout(function() {
                PopUp('show');
            }, 5000);
        }
    </script>
    <!--//onload popup-->
	<style>
	/*onload popup*/
#ac-wrapper {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(255,255,255,.6);
z-index: 1001;
}

#popup{
width: 370px;
height: 98%;
box-shadow: #64686e 0px 0px 3px 3px;
-moz-box-shadow: #64686e 0px 0px 3px 3px;
-webkit-box-shadow: #64686e 0px 0px 3px 3px;
position: relative;
top: 2%; 
left: 32%;
}
#popup input{
	-webkit-appearance: button-bevel;
	float: right;
    position: relative;
    top: -1em;
    background: black;
    color: gold;
    font-weight: 900;
	right: -1em;
}
#popup img{
	width:100%;
	height:100%;
	margin-top:-2em;
}
/*//onload popup*/
	</style>


<title>
    <?php echo $title; ?> <?php echo $meta_title ?>
</title>
<?php echo $google_code ?>
<meta name="author" content="<?php echo $meta_title ?>">

<meta name="description" content="<?php echo $meta_discription ?>" />

<meta name="keywords" content="<?php echo $meta_keywords ?>" />

<link rel="canonical" href="index.php" /><link rel="canonical" href="https://centralmarketnoida.com/"/>
<style type="text/css">
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 .07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }
</style>
<link rel='stylesheet' id='contact-form-7-css' href='<?php echo base_url() ?>assets/website/plugins/contact-form-7/includes/css/styles4906.css?ver=4.7' type='text/css' media='all' />
<link rel='stylesheet' id='jvcf7_style-css' href='<?php echo base_url() ?>assets/website/plugins/jquery-validation-for-contact-form-7/css/jvcf7_validated714.css?ver=4.7.10' type='text/css' media='all' />
<link rel='stylesheet' id='twentyfifteen-fonts-css' href='https://fonts.googleapis.com/css?family=Noto+Sans%3A400italic%2C700italic%2C400%2C700%7CNoto+Serif%3A400italic%2C700italic%2C400%2C700%7CInconsolata%3A400%2C700&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='genericons-css' href='<?php echo base_url() ?>assets/website/assets/genericons/genericonscf1b.css?ver=3.2' type='text/css' media='all' />
<link rel='stylesheet' id='twentyfifteen-style-css' href='<?php echo base_url() ?>assets/website/assets/styled714.css?ver=4.7.10' type='text/css' media='all' />
<!--[if lt IE 9]>
<link rel='stylesheet' id='twentyfifteen-ie-css'  href='assets/css/ie.css?ver=20141010' type='text/css' media='all' />
<![endif]-->
<!--[if lt IE 8]>
<link rel='stylesheet' id='twentyfifteen-ie7-css'  href='assets/css/ie7.css?ver=20141010' type='text/css' media='all' />
<![endif]-->
<script type='text/javascript' src='<?php echo base_url() ?>assets/website/assets/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
<script type='text/javascript' src='<?php echo base_url() ?>assets/website/assets/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
<link rel='shortlink' href='index.html' />
<style type="text/css">
    .recentcomments a {
        display: inline !important;
        padding: 0 !important;
        margin: 0 !important;
    }
</style>
</head>
<body class="home page-template page-template-index page-template-index-php page page-id-2">
    <header>
        <div class="container-fluid cnt_fluid_wrapper">
            <div class="logo wow fadeInLeft animated animated">
                <h1><a href="<?php echo base_url() ?>">
				<img style="max-width: initial;" src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?php echo $logo; ?>" alt="<?= $title; ?>"></a></h1>
            </div>
			
            <div class="right-nav">
                <!--
				<div class="top-nab wow fadeInUp animated animated top_right_cntct">
                    <ul>
						<?php if($ebrochurestatus=="1"){ ?>
                        <li class="res_style_ebro">
							<a href="<?php echo base_url() ?>uploads/manage_website/photo/main/<?php echo $ebrochure; ?>" target="_blank">
								e-Brochure
							</a>
						</li>
						<?php } ?>
                        <li class="res_style_no"><a href="javascript:void(0);" class="number">
						<?php echo $topphone ?></a> </li>
                        <li class="res_style_mail"><a href="mailto:<?php echo $topemail ?>"><?php echo $topemail ?></a> </li>
                        <li class="res_style_enquiry"><a href="" data-toggle="modal" data-target="#main_modal" class="main_modal_open enquiry_btn_popup">For Site Visit</a> </li>
                    </ul>
                </div>
				-->
                <div class="mbl_bdy_cvr_cls">&nbsp;</div>
                <nav class="navbar" id="nav_hlder_js_mbl">
                    <?php /*<img src="<?php echo base_url() ?>assets/website/assets/img/navigation-icon.png" class="toggle_btn_menu" alt="<?php echo $title2; ?>" id="mbl_opn_mn_js" />*/?>
					<div class="toggle_btn_menu" id="mbl_opn_mn_js">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</div>
                    <div class="navbar-collapse nav" id="myNavbar">
                        <!--collapse -->
                        <div class="close_menu_div" id="close_mbl_menu_btn">
                            <?php /*<img src="<?php echo base_url() ?>assets/website/assets/img/toggle-button-close.png" alt="<?php echo $title2; ?>" class="toggle_btn_menu_close" />*/?>
							<div class="toggle_btn_menu_close">
								<i class="fa fa-times" aria-hidden="true"></i>
                            </div>
							<p>Menu</p>
                        </div>
						<!--new menu start-->
						<ul class="nav navbar-nav navbar-right" id="add_mobile_width_scroll">
							<li><a href="<?php echo base_url() ?>">Home</a> </li>
							<li>
								<?php
								$tbl_company = $this->db->query("select * from tbl_company where status='1' order by menu_seq asc")->result();
								if(!empty($tbl_company)){ ?>
								<li><a href="javascript:void(0);"> Company </a>
                                <ul style="display:;">
									<?php
									foreach($tbl_company as $row){ ?>
										<li class="text-capitalize"><a href="<?php echo base_url(); ?>company/<?php echo strtolower(str_replace(" ","-",$row->title)); ?>"><?php echo $row->title; ?></a></li>
									<?php } ?>
									</ul>
								</li>
								<?php } ?>
								<?php /*
								<ul style="display:;">
									<li class="text-capitalize"><a href="<?php echo base_url(); ?>company">Company</a></li>
									<li class="text-capitalize"><a href="<?php echo base_url(); ?>vision_and_mission">Vision & Mission</a></li>
									<li class="text-capitalize"><a href="<?php echo base_url(); ?>#">Founder</a></li>
									<li class="text-capitalize"><a href="<?php echo base_url(); ?>#">Company Walkthrough</a></li>
								</ul>*/ ?>
							</li>
							<?php
								$tbl_project = $this->db->query("select * from tbl_project where status='1'")->result();
								if(!empty($tbl_project)){ ?>
								<li><a href="javascript:void(0);"> Project </a>
                                <ul style="display:;">
									<?php
									foreach($tbl_project as $row){ ?>
										<li class="text-capitalize"><a href="<?php echo base_url(); ?>project/<?php echo strtolower(str_replace(" ","-",$row->title)); ?>"><?php echo $row->title; ?></a></li>
									<?php } ?>
									</ul>
								</li>
								<?php } ?>
							
							<?php /*
							<li><a href="<?php echo base_url() ?>floor">Floor</a> </li>
							<li><a href="<?php echo base_url() ?>construction-update">Construction Update</a> </li>
							*/?>
							<?php /*
							<li><a href="<?php echo base_url() ?>blog">Blog</a> </li> */ ?>
							<?php /*<li><a href="<?php echo base_url() ?>career">Career</a> </li>*/?>
							<li><a href="<?php echo base_url() ?>contact-us">Contact Us</a> </li>
							<li><a href="tel:<?php echo $topphone ?>"><i class="fa fa-phone" ></i> <?php echo $topphone ?></a></li>
						</ul>
						<!--new menu stop-->
						<!--old menu start-->
						<!--
                        <ul class="nav navbar-nav navbar-right" id="add_mobile_width_scroll">
                            <li><a href="<?php echo base_url() ?>">Home</a> </li>
							<?php
							$tbl_company = $this->db->query("select * from tbl_company where status='1'")->result();
							if(!empty($tbl_company)){ ?>
							<li><a href="javascript:void(0);"> Company </a>
                                <ul style="display:;">
								<?php
								foreach($tbl_company as $row){ ?>
									<li class="text-capitalize"><a href="<?php echo base_url(); ?>company/<?php echo strtolower(str_replace(" ","-",$row->title)); ?>"><?php echo $row->title; ?></a></li>
								<?php } ?>
                                </ul>
                            </li>
							<?php
							}
							$tbl_project = $this->db->query("select * from tbl_project where status='1'")->result();
							if(!empty($tbl_project)){
							?>
                            <li><a href="#">Project</a>
                                <ul class="mega-menu">
                                    <li class="">
                                        <div class="mega-div-blck" id="">
                                            <ul class="" id="reMove_class">
												<?php 
												
												foreach($tbl_project as $row){ ?>
                                                <li data-tab="tab-<?php echo $row->id; ?>" class="text-capitalize"><a href="<?php echo base_url() ?>project/<?php echo strtolower(str_replace(" ","-",$row->title)); ?>"><?php echo $row->title; ?></a></li>
												<?php } ?>
                                            </ul>

                                            <div class="menu-right-holder">
												<?php
												$i = 1;
												foreach($tbl_project as $row){ ?>
                                                <div id="tab-<?php echo $row->id; ?>" class="shw-menu-cntn <?php if($i==1) { ?>current <?php } ?>">
                                                    <a href="<?php echo base_url() ?>project/<?php echo strtolower(str_replace(" ","-",$row->title)); ?>">
													<img src="<?php echo base_url() ?>uploads/manage_project/photo/main/<?php echo $row->photo1; ?>"></a>
													<h3><?php echo $row->title; ?></h3>
													<?php echo $row->description1; ?>	
                                                </div>
												<?php 
												$i++;
												} ?>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
							<?php
							}
							$tbl_media_category = $this->db->query("select * from tbl_media_category where status='1'")->result();
							if(!empty($tbl_media_category)){
							?>
							<li><a href="javascript:void(0);"> Media </a>
                                <ul style="display:;">
								<?php
								foreach($tbl_media_category as $row){ ?>
                                    <li><a href="<?php echo base_url(); ?>media/<?php echo strtolower(str_replace(" ","-",$row->title)); ?>"><?php echo $row->title; ?></a></li>
								<?php } ?>
                                </ul>
                            </li>
							<?php } ?>
							<li><a href="<?php echo base_url() ?>career">Career </a></li>
							<li><a href="<?php echo base_url() ?>blog">Blog</a> </li>
							<?php
							$tbl_construction_category = $this->db->query("select * from tbl_construction_category where status='1'")->result();
							if(!empty($tbl_construction_category)){
							?>
							<li><a href="javascript:void(0);">Construction Update</a>
                                <ul style="display:;">
								<?php
								foreach($tbl_construction_category as $row){ ?>
									<li class="text-capitalize"><a href="<?php echo base_url(); ?>construction/<?php echo strtolower(str_replace(" ","-",$row->title)); ?>"><?php echo $row->title; ?></a></li>
								<?php } ?>
                                </ul>
                            </li>
							<?php } ?>
                            <li><a href="<?php echo base_url() ?>contact_us">Contact Us</a></li>
                        </ul>
						-->
						<!--old menu stop-->

                    </div>
                </nav>
            </div>

            <div class="cls_back" id="pop_top">
                <div class="tbl_pop_blck">
                    <div class="tblcl_pop_mdl">
                        <div class="pop_blck_cont">
                            <div class="cls_div" id="close_main_btn">
                                <img src="<?php echo base_url() ?>assets/website/assets/img/close1.png" alt="<?php echo $title2; ?>">
                            </div>
                            <div class="mail_popup mail_popup_tab mail_popup-brder">
                                <div class="" id="show_alrt" style="display:none;">
                                    <div class="mail_send_alert"><span id="user-availability-status"></span></div>
                                </div>

                                <div id="enquiry_form">
                                    <div class="blck-main">
                                        <div class="inptfld inpt1"><input type="text" placeholder="Name" id="name" name="name" autocomplete="off" maxlength="50"></div>
                                        <div class="inptfld inpt2"><input type="text" placeholder="Email" id="email" name="email" autocomplete="off" maxlength="70"></div>
                                        <div class="inptfld inpt3"><input oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" type="text" placeholder="Contact" id="contact" name="contact" autocomplete="off" maxlength="12"></div>
                                        <div class="inptfld inpt4"><textarea type="text" placeholder="Message" id="msg" name="msg"></textarea></div>
										
                                    </div>
                                    <div class="blck-button">
                                        <div class="clckbtnblck"><input name="submit" type="button" class="submit" id="sendmail1" value="Submit" onClick="return submit_enquiry_form_header();">
                                            <span id="loaderIcon" style="display:none;"><img src="<?php echo base_url() ?>assets/website/assets/images/ajax-loader.gif" alt="<?php echo $title2; ?>" /> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </header>