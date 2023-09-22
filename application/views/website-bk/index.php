<style>
.myicss i
{
	font-size:22px !important;
}
</style>
<?php 
$title 	= $this->Main_Model->get_website_data("title");
$home_page_video_title = $this->Main_Model->get_website_data("home_page_video_title"); 
$home_page_video_url = $this->Main_Model->get_website_data("home_page_video_url");

$topphone = $this->Main_Model->get_website_data("topphone");
$facebook = $this->Main_Model->get_website_data("facebook");
$twitter = $this->Main_Model->get_website_data("twitter");
$linkedin = $this->Main_Model->get_website_data("linkedin");
$googleplus = $this->Main_Model->get_website_data("googleplus");
$youtube = $this->Main_Model->get_website_data("youtube");
$whatsappno = $this->Main_Model->get_website_data("whatsappno");
?>
<div class="gallery-wrap" id="home_page_gap_js">
	<?php /*
	<div class="mar">        
		<div id="latest-news">            
			<div class="ticker1 modern-ticker mt-round mt-scroll">                
				<div class="mt-news" style="width: 820px;">
					<ul>
						<?php
						foreach($tbl_toptext as $row){ ?>
						<li>
							<a href="#"><?= $row->title;?></a>
						</li>
						<?php } ?>                      
					</ul>
				</div>                
				<div class="mt-controls">                    
					<div class="mt-prev"></div>                    
					<div class="mt-play mt-pause"></div>                    
					<div class="mt-next"></div>                
				</div>
			</div>
		</div>
	</div>
	-->
	<!--
	<div class="single-item">  
		<?php //foreach($tbl_slider as $row){ ?>
		<div class="slide">            
			<div class="heading container"></div> 
			<img src="<?//= $url_path.$row->photo; ?>" title="<?php //echo $title2; ?>" alt="" style="width: 100%;" />            
			<div class="slide-count-wrap"> 
				<span class="current"></span> 
				<span class="total"></span>
			</div>
		</div> 
		<?php //} ?>
	</div>
	-->
	*/ ?>
	<div class="slider-container">
		<?php 
		$i = 1;
		foreach($tbl_slider as $row){
			$active = "";
            if($i==1){
				$active = "active";
			}
			$i++;
				 ?>
			<div class="slide <?= $active;?>" style="background: <?/*linear-gradient(    rgba(0, 0, 0, 0.5),    rgba(0, 0, 0, 0.5)  ),*/?>  url(<?= $url_path.$row->photo; ?>);">
			
			
                <div class="info">
                    <?php echo $row->mytext; ?>
                </div>
            </div>
        <?php } ?>
	</div>
	<div class="eraser"></div>
	<div class="buttons-container">
		<button id="previous"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
		<button id="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
	</div>
	<div class="banner-icon">
		<ul>
			<li>
				<a href="<?= $facebook ?>" target="_blank">
					<i class="fa fa-facebook" aria-hidden="true"></i>
				</a>
			</li>
			<li>
				<a href="<?= $twitter ?>" target="_blank">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
			</li>
			<li>
				<a href="<?= $googleplus ?>" target="_blank">
					<i class="fa fa-google-plus" aria-hidden="true"></i>
				</a>
			</li>
			<li>
				<a href="<?= $linkedin ?>" target="_blank">
					<i class="fa fa-linkedin" aria-hidden="true"></i>
				</a>
			</li>
			<li>
				<a href="<?= $youtube ?>" target="_blank">
					<i class="fa fa-youtube" aria-hidden="true"></i>
				</a>
			</li>
			
		</ul>
	</div>
	<?/*
	<div class="banner-call">
		<p><i class="fa fa-phone" aria-hidden="true"></i> <span>call us now</span> <a href="tel:<?php echo $topphone ?>"><?php echo $topphone ?></a></p>
	</div>
	*/?>
</div>
<div class="mar">        
		<div id="latest-news">            
			<div class="ticker1 modern-ticker mt-round mt-scroll">                
				<div class="mt-news" style="width: 820px;">
					<ul>
						<?php
						foreach($tbl_toptext as $row){ ?>
						<li>
							<a href="#"><?= $row->title;?></a>
						</li>
						<?php } ?>                      
					</ul>
				</div>                
				<div class="mt-controls">                    
					<div class="mt-prev"></div>                    
					<div class="mt-play mt-pause"></div>                    
					<div class="mt-next"></div>                
				</div>
			</div>
		</div>
	</div>
<div class="about_section">
   <div class="container">
      <div class="col-md-7 col-sm-6">
         <div class="col-md-12">
            <div class="col-md-6 text-logo" style="margin-left: -28px; margin-top: -18px;">
               <h1 class="animate fadeInUp" data-anim-delay="300" data-anim-type="fadeInUp"><?php echo $home_dt1->title;?></h1>
            </div>
            <?/*
			<div class="col-md-6" style="float: right; text-align: right;"> <img src="https://www.spectrummetro.com/wp-content/themes/spectrum/images/Logo_spec.png" alt="" style="height:54px;"> </div>
			*/?>
         </div>
         <p class="animate fadeInUp" data-anim-delay="400" data-anim-type="fadeInUp"><?php echo $home_dt1->description;?></p>
         <?php if($home_dt1->link != ""){?>
		 <a class="animate fadeInUp" data-anim-delay="500" data-anim-type="fadeInUp" href="<?php echo $home_dt1->link;?>">Read More <i class="fa fa-long-arrow-right"></i></a>
		 <?php } ?>
      </div>
      <div class="col-md-5 col-sm-6 box-section">
		 <?php /*<div class="box"> <a href="<?php echo base_url(); ?>about-us/about-us"> <img class="img-responsive" src="<?php echo base_url() ?>assets/website/assets/img/custom1/1.png"></a> <span>Vision &amp; Mission</span></div>
		 <div class="clearfix"></div> */ ?>
         <div class="box"> <span>CSR</span> <a href="<?php echo base_url(); ?>about-us/csr"> <img class="img-responsive" src="<?php echo base_url() ?>assets/website/assets/img/custom1/3.png"> </a> </div>
         
         <?/*
		 <div class="box"> <a href="https://www.spectrummetro.com/key-people.html"> <img class="img-responsive" src="https://www.spectrummetro.com/wp-content/themes/spectrum/home/images/about/3.png"></a> <span>Key<br>        People</span> </div>
         <div class="box"> <span>Awards &amp; Certifications</span> <a href="https://www.spectrummetro.com/awards-certifications.html"> <img class="img-responsive" src="https://www.spectrummetro.com/wp-content/themes/spectrum/home/images/about/4.png"> </a> </div>
		 */?>
      </div>
   </div>
</div>
<?php /*
	<!--custom section 1 start-->
	<section class="our-missions-sec home-about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="row">
                        <div class="col-md-6">
							<div class="elementor-widget-container">
								<h2 style="text-align:left;" title="<?php echo $home_dt1->title;?>"><?php echo $home_dt1->title;?></h2>
							</div>
                            <div class="our-missions-right">
								<?php echo $home_dt1->description;?>
                                <?php if($home_dt1->link != ""){?>
								<div class="elementor-widget-wrap">
                                    <a href="<?php echo $home_dt1->link;?>">View More <img class="img-fluid" src="<?php echo base_url() ?>assets/website/assets/img/custom1/arrow-right.png"></a>
                                </div>
								<?php } ?>
								
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="our-missions-left">
                                <img src="<?php echo base_url() ?>uploads/manage_home/photo/main/<?php echo $home_dt1->photo ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!--custom section 1 stop-->
	<!--custom section 2 start-->
	<section class="our-missions-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="our-missions-left">
                        <img class="img-fluid" src="<?php echo base_url() ?>uploads/manage_home/photo/main/<?php echo $home_dt2->photo ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="our-missions-right">
                        <?php echo $home_dt2->description;?>
                        <?php if($home_dt2->link != ""){?>
								<div class="elementor-widget-wrap">
                                    <a href="<?php echo $home_dt2->link;?>">View More <img class="img-fluid" src="<?php echo base_url() ?>assets/website/assets/img/custom1/arrow-right.png"></a>
                                </div>
								<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!--custom section 2 stop-->
	
	<!--custom section 3 start-->
	<section class="testmonials-sec margin-t-50">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="testmonials-left">
                        <div class="elementor-widget-container">
                            <h2><?php echo $home_page_video_title; ?></h2>
                        </div>
                        <div class="testmonials-text">
                            <?php echo $home_dt3->description;?>
                             <?php if($home_dt3->link != ""){?>
							<div class="elementor-image-box-button">
                                <a href="<?php echo $home_dt3->link;?>" class="elementor-button">
								Read More
								<img class="img-fluid" src="<?php echo base_url() ?>assets/website/assets/img/custom1/arrow-right.png">
							</a>
                            </div>
							<?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="testmonials-right">
                        <div class="testmonials-popup">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-play" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<!--custom section 3 stop-->
*/?>
	
<?php /*
	<div class="container" style="padding:0;">
		<div class="bg">
			
			<div class="col-md-8 col-sm-8 col-xs-7 about_spec_div" style="padding-bottom:40px;border-right: 2px solid #bebebc;">
				<div class="about wow fadeInLeft animated animated">
					<h2 style="text-align:left;" title="<?php echo $home_dt1->title;?>"><?php echo $home_dt1->title;?></h2>
					<?php echo $home_dt1->description;?>
				</div>
			</div>
			
			<div class="col-md-12 col-sm-12 col-xs-12 exlu_div"> 
				<div class="exclusive wow fadeInRight animated animated i_frm_hm">
					<h2 style="" class="spechead" title="<?php echo $home_page_video_title; ?>"><?php echo $home_page_video_title; ?></h2>
					<?php if($home_page_video_url) { ?>
					<iframe width="" height="" src="<?= $this->Main_Model->youtube_url($home_page_video_url)?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
					<?php } ?>          
				</div>
			</div> 
			
			<div class="col-md-12 col-sm-12 col-xs-12" style="padding-bottom:40px;">
				<div class="about wow fadeInLeft animated animated">
					<h2 style="text-align:left;" title="<?php echo $home_dt2->title;?>"><?php echo $home_dt2->title;?></h2>
					<?php echo $home_dt2->description;?>
				</div>
			</div>
			-->
		</div>
		
		<div class="col-md-12 col-sm-12 col-xs-12 about_spec_div">
			<div class="about wow fadeInLeft animated animated" style="border-right:0px;">
				<div class="features-box website-features">
					<ul>
						<?php
						foreach($tbl_icon1 as $row){ ?>
						<li>
							<?php echo $row->icon; ?>
							<?php echo $row->title; ?>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>    
		<!--
		<div class="bg">
			<div class="col-md-12 col-sm-12 col-xs-12 about_spec_div" style="padding-bottom:40px;"> 
				<div class="about wow fadeInLeft animated animated">
					<h2 title="Key Features">Key Features</h2>
					<div class="features-box website-features">
						<ul style="padding: 0px;">
							<?php
							foreach($tbl_icon2 as $row){ ?>
							<li class="myicss">
								<?php echo $row->icon; ?>
								<?php echo $row->title; ?>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	
	</div>
*/ ?>
<script> 
$(document).ready(function() {        
function resizeImage() {            
var realy_width = $(window).width();            
//alert(realy_width);            
var realy_height = $(window).height();            
var gap_for_bnr = $('header').height();            
//alert(gap_for_bnr); 
         
var gap_for_bnr1 = $('#tils_hgth_js').height();            
if (realy_width >= 1100 && realy_width <= 1400) {                
//if(realy_width >= 991 && realy_width <= 1366){                
var add_hgt = gap_for_bnr + gap_for_bnr1;                
var mns_hgt = realy_height - add_hgt + 140;                
$('#home_page_gap_js').css({                    
"margin-top": gap_for_bnr,                    
width: "100%",                    
"height": mns_hgt                
});            
} else {                
$('#home_page_gap_js').addClass('dym_gap_mng_js');            
}        
}        
$(window).resize(function() {            
resizeImage();        
});        
$(window).load(function() {            
resizeImage();        
});        
resizeImage();    
});
</script>
<script>
function main_modal_open()
{
	$(".main_modal_open").click()
}
function main_modal_open1()
{
	$(".main_modal_open1").click()
}
function main_modal_open2()
{
	$(".main_modal_open2").click()
}
<?php if($_SESSION["leadthanks"]=="1") { 
	$_SESSION["leadthanks"] = ""; ?>
	setTimeout('main_modal_open2();',2000);
<?php } else { ?>
if("1"=="<?php echo $popupstatus;?>")
{
	setTimeout('main_modal_open1();',15000);
}
else
{
	setTimeout('main_modal_open();',15000);
}
<?php } ?>
</script>

<!---pup-up----->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <iframe src="<?= $this->Main_Model->youtube_url($home_page_video_url)?>" allowfullscreen="allowfullscreen" width="100%" height="400px" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>