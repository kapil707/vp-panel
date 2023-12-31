<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manage_setting extends CI_Controller {
	var $Page_title = "Manage Setting";
	var $Page_name  = "manage_setting";
	var $Page_view  = "manage_setting";
	var $Page_menu  = "manage_setting";
	var $page_controllers = "manage_setting";
	var $Page_tbl   = "tbl_setting";
	
	public function index()
	{
		$page_controllers = $this->page_controllers;
		redirect("admin/$page_controllers/general_setting");
	}	
	public function setting()
	{
		/******************session***********************/
		$user_id = $this->session->userdata("user_id");
		$user_type = $this->session->userdata("user_type");
		/******************session***********************/
		$Page_title = $this->Page_title;
		$Page_name 	= $this->Page_name;
		$Page_view 	= $this->Page_view;
		$Page_menu 	= $this->Page_menu;
		$Page_tbl 	= $this->Page_tbl;
		$page_controllers 	= $this->page_controllers;
		$this->Admin_Model->permissions_check_or_set($Page_title,$Page_name,$user_type);
		$data['title1'] = $Page_title." || General Settings";
		$data['title2'] = "General Settings";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;		
		$this->breadcrumbs->push("Admin","admin/");
		$this->breadcrumbs->push("$Page_title","admin/$page_controllers/");
		$this->breadcrumbs->push("General Settings","admin/$page_controllers/general_setting");
		$tbl = $Page_tbl;
		
		$system_ip = $this->input->ip_address();
		extract($_POST);
		if(isset($Submit))
		{
			$message_db = "";
			
			$this->Manage_field_group_model->insert_field_data_default($site_title,"site_title");

			$this->Manage_field_group_model->insert_field_data_default($site_tagline,"site_tagline");

			$this->Manage_field_group_model->insert_field_data_default($image_site_logo,"image_site_logo");
			
			$this->Manage_field_group_model->insert_field_data_default($mobile_image_site_logo,"mobile_image_site_logo");
			
			$this->Manage_field_group_model->insert_field_data_default($image_site_favicon,"image_site_favicon");

			$this->Manage_field_group_model->insert_field_data_default($meta_title,"meta_title");

			$this->Manage_field_group_model->insert_field_data_default($meta_discription,"meta_discription");

			$this->Manage_field_group_model->insert_field_data_default($meta_keywords,"meta_keywords");

			$this->Manage_field_group_model->insert_field_data_default($others_tag,"others_tag");

			$this->Manage_field_group_model->insert_field_data_default($copyright_text,"copyright_text");

			redirect(current_url());
		}
		$this->load->view("admin/header_footer/header",$data);
		$this->load->view("admin/$Page_view/setting",$data);
		$this->load->view("admin/header_footer/footer",$data);
	}
	
	public function theme()
	{		
		/******************session***********************/
		$user_id = $this->session->userdata("user_id");
		$user_type = $this->session->userdata("user_type");
		/******************session***********************/
		$Page_title = $this->Page_title;
		$Page_name 	= $this->Page_name;
		$Page_view 	= $this->Page_view;
		$Page_menu 	= $this->Page_menu;
		$Page_tbl 	= $this->Page_tbl;
		$page_controllers 	= $this->page_controllers;
		$this->Admin_Model->permissions_check_or_set($Page_title,$Page_name,$user_type);
		$data['title1'] = $Page_title." || Theme";
		$data['title2'] = "Theme";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;		
		$this->breadcrumbs->push("Admin","admin/");
		$this->breadcrumbs->push("$Page_title","admin/$page_controllers/");
		$this->breadcrumbs->push("Theme","admin/$page_controllers/theme");
		$tbl = $Page_tbl;
		
		$system_ip = $this->input->ip_address();
		extract($_POST);
		if(isset($Submit))
		{
			$message_db = "";
			
			$this->Manage_field_group_model->insert_field_data_default($system_theme,"system_theme");

			redirect(current_url());
		}
		$this->load->view("admin/header_footer/header",$data);
		$this->load->view("admin/$Page_view/theme",$data);
		$this->load->view("admin/header_footer/footer",$data);
	}
}