<?php include_once(get_header("mobile")); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <?php echo do_slider5('slider');?>
        </div>
    </div>
</div>

<div class="container-fluid image-container1" style="background-image: url(<?php echo get_theme_path(); ?>images/box1/bg.png);">
    <div class="row">
        <div class="col-sm-4 col-12 text-center">
            <img src="<?php echo get_theme_path(); ?>images/box1/01.png" class="card-img-top" alt="">
            <a href="" class="menu-button-css1">Learning</a>
            <ul class="card_ul">
                <li>Astrology</li>
                <li>Numerology</li>
                <li>Palmistry</li>
                <li>Vastu</li>
                <li>Handwriting analysis</li>
            </ul>
        </div>
        <div class="col-sm-4 col-12 text-center">
            <img src="<?php echo get_theme_path(); ?>images/box1/02.png" class="card-img-top" alt="">
            <a href="" class="menu-button-css1">Problem Solving</a>
            <ul class="card_ul">
                <li>Health</li>
                <li>Family</li>
                <li>Education</li>
                <li>Career</li>
                <li>Marriage Other</li>
            </ul>
        </div>
        <div class="col-sm-4 col-12 text-center">
            <img src="<?php echo get_theme_path(); ?>images/box1/03.png" class="card-img-top" alt="">
            <a href="" class="menu-button-css1">Self Improvement</a>
            <ul class="card_ul">
                <li>Meditation</li>
                <li>Healing Mantras</li>
                <li>Confidence Building</li>
                <li>Positive Mindset</li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid image-container2">
    <div class="row">
        <div class="col-sm-7 text-center">
            <p class="text-white">
                <?php echo get_field_data('login_label3','73'); ?>
            </p>
            <div class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="" style="width:200px;"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"></path></svg>
                <p class="text-white">
                    <?php echo get_field_data('login_label4','73'); ?>
                </p>
            </div>
            <p class="text-white">
                <?php echo get_field_data('login_label5','73'); ?>
            </p>
        </div>
        <div class="col">
            <?php
            $id = $_SESSION['profile_user'];		
            $row = get_table_row("tbl_o_my_users where id='$id'");
            $result1 = get_table("tbl_o_interest");
            ?>
            <div class="row">
                <div class="col-sm-12">                
                    <h2 class="home_page_profile_h2">Your Profile</h2>
                </div>
                <div class="col-sm-12 form-group">
                    <label>First Name:</label>
                    <input type="text" name="first_name" class="form-control input-lg" placeholder="First Name" required="" value="<?php echo $row->first_name ?>">
                </div>
                <div class="col-sm-12 form-group">
                    <label>Last Name:</label>
                    <input type="text" name="last_name" class="form-control input-lg" placeholder="Last Name" required="" value="<?php echo $row->last_name ?>">
                </div>
                <div class="col-sm-12 form-group">
                    <label>Email:</label>
                    <input type="text" name="email" class="form-control input-lg" placeholder="Enter Email" value="<?php echo $row->email ?>">
                </div>
                <div class="col-sm-12 form-group">
                    <a href="<?php echo base_url(); ?>edit-profile" class="main-btn flex gap-1 items-center justify-center w-full font-semibold text-center mt-6 text-white rounded-md bg-[#A17603] px-3 py-3 text-[18px]" name="Submit1">Update Your Profile<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="w-[21px]"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path></svg></a>
                </div>
            </div>
        </div>
        <!-- <div class="col">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="home_page_profile_h2">Referral code</h2>
                </div>
                <div class="col-sm-12">  
                    <?php include_once('referral-code2.php'); ?>
                </div>
            </div>
        </div> -->
    </div>
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-sm-12">
                    <?php include_once('panchang-2.php'); ?>
                    <style>
                    .panchang_css{ display:none; }
                    </style>
                    <script>
                    $(document).ready( function () {
                        calculate(); //onload
                    });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once(get_footer("mobile")); ?>