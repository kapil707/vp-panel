<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Company extends CI_Controller {
	
	var $Page_title = "Company";
	var $Page_name  = "company";
	var $Page_view  = "company";
	var $Page_menu  = "company";
	var $page_controllers = "company";
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

		
		$this->load->view("website/header",$data);
		$this->load->view("website/company",$data);
		$this->load->view("website/footer",$data);
	}
}