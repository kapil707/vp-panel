<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Construction extends CI_Controller {
	
	var $Page_title = "Construction";
	var $Page_name  = "construction";
	var $Page_view  = "construction";
	var $Page_menu  = "construction";
	var $page_controllers = "construction";
	var $Page_tbl   = "tbl_construction";
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

		$data['url_path'] = base_url()."uploads/manage_construction/photo/main/";	
		$data['url_path1'] = base_url()."uploads/manage_construction_child/photo/main/";
		
		$data['id'] = $id;
		$cat = str_replace("-"," ",$id);
		
		$row1 = $this->db->query("select * from tbl_construction_category where title='$cat'")->row();
		
		$data['result1'] = $this->db->query("select * from tbl_construction_child where status='1' order by id desc limit 10")->result();
		
		$data['result'] = $this->db->query("select * from $Page_tbl where status='1' and category='$row1->id' order by id desc")->result();

		
		$this->load->view("website/header",$data);
		$this->load->view("website/construction",$data);
		$this->load->view("website/footer",$data);
		
		$this->load->view("lightbox");
	}
	
	public function view($id="")
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

		$data['url_path'] = base_url()."uploads/manage_construction_child/photo/main/";
		
		
		$data['id'] = $id;
		$cat = str_replace("-"," ",$id);
		$data['id'] = $cat;
		
		$row1 = $this->db->query("select * from tbl_construction where title='$cat'")->row();
		
		$data['result'] = $this->db->query("select * from tbl_construction_child where status='1' and category='$row1->id'")->result();

		
		$this->load->view("website/header",$data);
		$this->load->view("website/construction_child",$data);
		$this->load->view("website/footer",$data);
		
		$this->load->view("lightbox");
	}
}