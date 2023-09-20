<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About_us extends CI_Controller {
	
	var $Page_title = "About Us";
	var $Page_name  = "About Us";
	var $Page_view  = "about_us";
	var $Page_menu  = "about_us";
	var $page_controllers = "about_us";
	var $Page_tbl   = "tbl_company";
	public function index($id="")
	{
		$Page_title = $this->Page_title;
		$Page_name 	= $this->Page_name;
		$Page_view 	= $this->Page_view;
		$Page_menu 	= $this->Page_menu;
		$Page_tbl 	= $this->Page_tbl;
		$page_controllers 	= $this->page_controllers;	

		$data['title1'] = $Page_title;
		$data['title2'] = "View";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;
		$this->breadcrumbs->push("<i class='fa fa-home' aria-hidden='true'></i>Home","home");		

		$tbl = $Page_tbl;		

		$data['url_path'] = base_url()."uploads/manage_company/photo/main/";
		
		$data['url_path2'] = base_url()."uploads/manage_promoters_profile/photo/main/";
		
		$data['url_path3'] = base_url()."uploads/manage_csr/photo/main/";
		
		$id = str_replace("-"," ",$id);
		$data['row'] = $this->db->query("select * from $Page_tbl where title='$id'")->row();
		
		if($id == 'company'){
			$vieww = "company_new";
		}else{
			$vieww = "company_others";
		}
		
		$this->load->view("website/header",$data);
		$this->load->view("website/".$vieww,$data);
		$this->load->view("website/footer",$data);
	}
}