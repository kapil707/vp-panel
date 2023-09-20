<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Site_plan extends CI_Controller {
	
	var $Page_title = "Site_plan";
	var $Page_name  = "site_plan";
	var $Page_view  = "site_plan";
	var $Page_menu  = "site_plan";
	var $page_controllers = "site_plan";
	var $Page_tbl   = "tbl_site_plan";
	public function index()
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

		$data['url_path'] = base_url()."uploads/manage_site_plan/photo/main/";
		
		$data['result'] = $this->db->query("select * from $Page_tbl where status='1'")->result();

		
		$this->load->view("website/header",$data);
		$this->load->view("website/site_plan",$data);
		$this->load->view("website/footer",$data);
	}
}