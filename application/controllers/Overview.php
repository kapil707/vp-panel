<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Overview extends CI_Controller {
	
	var $Page_title = "Overview";
	var $Page_name  = "overview";
	var $Page_view  = "overview";
	var $Page_menu  = "overview";
	var $page_controllers = "overview";
	var $Page_tbl   = "tbl_overview";
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

		$data['url_path'] = base_url()."uploads/manage_overview/photo/main/";
		
		$data['row'] = $this->db->query("select * from $Page_tbl where status='1'")->row();

		
		$this->load->view("website/header",$data);
		$this->load->view("website/overview",$data);
		$this->load->view("website/footer",$data);
	}
}