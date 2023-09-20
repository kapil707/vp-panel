<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Project extends CI_Controller {
	
	var $Page_title = "Project";
	var $Page_name  = "project";
	var $Page_view  = "project";
	var $Page_menu  = "project";
	var $page_controllers = "project";
	var $Page_tbl   = "tbl_project";
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

		$data['url_path'] = base_url()."uploads/manage_project/photo/main/";
		$data['url_path1'] = base_url()."uploads/manage_product/photo/main/";
		
		$pg_url = $id;
		$id = str_replace("-"," ",$id);
		
		$data['row'] = $row = $this->db->query("select * from $Page_tbl where title='$id'")->row();
		$data['category'] = $row->id;
		$data['pg_url'] = $pg_url;

		
		$this->load->view("website/header",$data);
		// $this->load->view("website/project",$data);
		$this->load->view("website/project_new",$data);
		$this->load->view("website/footer",$data);
	}
	
	public function floorplan($id="",$id2="")
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

		$data['url_path'] = base_url()."uploads/manage_project/photo/main/";
		$data['url_path1'] = base_url()."uploads/manage_product/photo/main/";
		
		$pg_url = $id;
		$id = str_replace("-"," ",$id);
		
		$data['row'] = $row = $this->db->query("select * from $Page_tbl where title='$id'")->row();
		$data['category'] = $row->id;
		$data['pg_url'] = $pg_url;
		
		
		$this->load->view("website/header",$data);
		// $this->load->view("website/project",$data);
		$this->load->view("website/floor",$data);
		$this->load->view("website/footer",$data);
	}
	
	public function construction_update($id="",$id2="")
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

		$data['url_path'] = base_url()."uploads/manage_project/photo/main/";
		$data['url_path1'] = base_url()."uploads/manage_product/photo/main/";

		$data['url_path_l'] = base_url()."uploads/manage_construction/photo/main/";
		$data['url_path1_l'] = base_url()."uploads/manage_construction/photo/main/";
		
		$_SESSION['pid'] = $id;
		$pg_url = $id;
		$id = str_replace("-"," ",$id);
		
		$data['row'] = $row = $this->db->query("select * from $Page_tbl where title='$id'")->row();
		$data['category'] = $row->id;
		$data['pg_url'] = $pg_url;
		
		$data['result'] = $this->db->query("select * from tbl_construction where status='1' and category='$row->id' order by id desc")->result();
		
		$this->load->view("website/header",$data);
		// $this->load->view("website/project",$data);
		$this->load->view("website/construction",$data);
		$this->load->view("website/footer",$data);
	}
	public function construction_view($id="")
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
		$pg_url = $id;
		$data['pg_url'] = $_SESSION["pid"]; // yha change ho rha h iss liya session say liya ha
		
		$data['id'] = $id;
		$cat = str_replace("-"," ",$id);
		$data['id'] = $cat;
		
		
		$row1 = $this->db->query("select * from tbl_construction where title='$cat'")->row();
		
		$data['result'] = $this->db->query("select * from tbl_construction_child where status='1' and category='$row1->id'")->result();

		
		$this->load->view("website/header",$data);
		$this->load->view("website/construction_up_child",$data);
		$this->load->view("website/footer",$data);
		
		$this->load->view("lightbox");
	}
	
	public function walkthrough($id="",$id2="")
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

		$data['url_path'] = base_url()."uploads/manage_project/photo/main/";
		$data['url_path1'] = base_url()."uploads/manage_product/photo/main/";
		
		$pg_url = $id;
		$id = str_replace("-"," ",$id);
		
		$data['row'] = $row = $this->db->query("select * from $Page_tbl where title='$id'")->row();
		$data['category'] = $row->id;
		$data['pg_url'] = $pg_url;

		
		$this->load->view("website/header",$data);
		// $this->load->view("website/project",$data);
		$this->load->view("website/walkthrough",$data);
		$this->load->view("website/footer",$data);
	}
	public function pricelist($id="",$id2="")
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

		$data['url_path'] = base_url()."uploads/manage_project/photo/main/";
		$data['url_path1'] = base_url()."uploads/manage_product/photo/main/";
		
		$pg_url = $id;
		$id = str_replace("-"," ",$id);
		
		$data['row'] = $row = $this->db->query("select * from $Page_tbl where title='$id'")->row();
		$data['category'] = $row->id;
		$data['pg_url'] = $pg_url;

		
		$this->load->view("website/header",$data);
		// $this->load->view("website/project",$data);
		$this->load->view("website/project_pricelist",$data);
		$this->load->view("website/footer",$data);
	}
}