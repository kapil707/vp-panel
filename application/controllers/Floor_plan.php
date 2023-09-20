<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Floor_plan extends CI_Controller {
	
	var $Page_title = "Floor_plan";
	var $Page_name  = "floor_plan";
	var $Page_view  = "floor_plan";
	var $Page_menu  = "floor_plan";
	var $page_controllers = "floor_plan";
	var $Page_tbl   = "tbl_floor_plan";
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

		$data['url_path'] = base_url()."uploads/manage_floor_plan/photo/main/";
		
		$cat = str_replace("-"," ",$id);
		
		$row1 = $this->db->query("select * from tbl_project where title='$cat'")->row();
		
		$data['result'] = $this->db->query("select * from $Page_tbl where status='1' and category='$row1->id'")->result();

		
		$this->load->view("website/header",$data);
		$this->load->view("website/floor_plan",$data);
		$this->load->view("website/footer",$data);
		
		$this->load->view("lightbox");
	}
}