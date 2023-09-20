<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Features extends CI_Controller {
	
	var $Page_title = "Features";
	var $Page_name  = "features";
	var $Page_view  = "features";
	var $Page_menu  = "features";
	var $page_controllers = "features";
	var $Page_tbl   = "tbl_features";
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

		$data['url_path'] = base_url()."uploads/manage_features/photo/main/";
		
		$data['result'] = $this->db->query("select * from $Page_tbl where status='1'")->result();

		
		$this->load->view("website/header",$data);
		$this->load->view("website/features",$data);
		$this->load->view("website/footer",$data);
	}
}