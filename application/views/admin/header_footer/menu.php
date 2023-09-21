<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header text-center">
                <div class="dropdown profile-element"> <span>
                	<?php 
					if($this->session->userdata("user_type") !=""){ ?>
                    <img alt="image" class="img-circle" src="<?= base_url()?>uploads/manage_users/photo/<?= $this->session->userdata("image") ?>" width="100" />
                    <?php } else { 
					?>
                    <img alt="image" class="img-circle" src="<?= base_url()?>uploads/manage_profile/photo/unapproved.jpg" width="100" />
                    <?php
					}?>
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?= $this->session->userdata("name"); ?></strong>
                     </span> <span class="text-muted text-xs block"><?php $user_type1 = $this->session->userdata("user_type"); ?>
                     <?php echo str_replace("_"," ",$user_type1); ?><b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="<?= base_url()?>admin/dashboard/edit_profile">Edit Profile</a></li>
                        <?php /* <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                       	<li class="divider"></li> */ ?>
                        <li><a href="<?= base_url()?>admin/logout">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    RE+
                </div>
            </li>
            <li <?php if($Page_menu=="dashboard") { ?> class="active" <?php } ?>>
                <a href="<?= base_url()?>admin/dashboard">
                <i class="fa fa-th-large"></i>
                <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <?php
			$user_type = $this->session->userdata("user_type");
			$menu = $this->db->query("SELECT * FROM `tbl_permission_settings` join tbl_permission_page on tbl_permission_settings.page_type=tbl_permission_page.page_type where tbl_permission_settings.user_type='$user_type' order by tbl_permission_page.sorting_order asc")->result();
			foreach($menu as $mymenu)
			{	
				$menu_page_type = $menu_page_type1 = $mymenu->page_type;
				if($mymenu->menu_id!=0){
					$new_menu = $this->db->query("SELECT * FROM `tbl_permission_page` where id='$mymenu->menu_id'")->row();
					$pg_type = $menu_page_type;
					$menu_page_type1 = $new_menu->page_type."/?page_type=".$pg_type;
				}
				?> 
				<li 
				<?php if($Page_menu==$menu_page_type && $_GET["page_type"]=="") { ?> 
				class="active" <?php } ?>
				<?php if($_GET["page_type"]==$menu_page_type && $_GET["page_type"]!="") { ?> class="active" <?php } ?>>
				
                    <a href="<?= base_url()?>admin/<?php echo $menu_page_type1 ?>">
                    <?php if(base64_decode($mymenu->fafa_icon)==""){ ?>
                    <i class="fa fa-th-large"></i>
                    <?php } else { ?>
                    <?= base64_decode($mymenu->fafa_icon); ?>
                    <?php } ?>
                    <span class="nav-label">
                    <?= $mymenu->page_title;?>
                    </span> 
                    </a>
                
                    <?php if($mymenu->page_type=="manage_setting"){ ?>
                        <ul class="nav nav-second-level collapse">
                            <li <?php if($Page_menu=="title") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/<?php echo $menu_page_type1 ?>/general_setting">General Setting</a></li>
                        </ul>
                    <?php } ?>
                </li>
            <?php 
			} ?>
    </div>
</nav>