<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact_us extends CI_Controller {
	
	var $Page_title = "Contact_us";
	var $Page_name  = "contact_us";
	var $Page_view  = "contact_us";
	var $Page_menu  = "contact_us";
	var $page_controllers = "contact_us";
	var $Page_tbl   = "tbl_contact_us";
	public function index()
	{
		$id = 1;
		
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

		$data['url_path'] = base_url()."uploads/manage_contact_us/photo/main/";
		
		$data['tbl_row'] = $this->db->query("select * from $Page_tbl where id='$id'")->row();
		
		$this->load->view("website/header",$data);
		$this->load->view("website/contact_us",$data);
		$this->load->view("website/footer",$data);
	}
}