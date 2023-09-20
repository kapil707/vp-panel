<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends CI_Controller {
	
	var $Page_title = "Product";
	var $Page_name  = "product";
	var $Page_view  = "product";
	var $Page_menu  = "product";
	var $page_controllers = "product";
	var $Page_tbl   = "tbl_product";
	public function index($cat="",$id="")
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

		$data['url_path'] = base_url()."uploads/manage_product/photo/main/";
		$data['url_path1'] = base_url()."uploads/manage_product/photo/main/";
		
		$cat1 = $cat;
		$id = str_replace("-"," ",$id);
		$cat = str_replace("-"," ",$cat);
		
		$row1 = $this->db->query("select * from tbl_project where title='$cat'")->row();
		
		$data['row'] = $row = $this->db->query("select * from $Page_tbl where title='$id' and category='$row1->id'")->row();
		$title = str_replace(" ","-",$row->title);
		
		
		$category = str_replace(" ","-",$row1->title);
		$_SESSION["overview"] = strtolower($category."/".$title);
		$_SESSION["floor_plan"] = strtolower($cat1);
		$_SESSION["price_plan"] = strtolower($cat1);

		
		$this->load->view("website/header",$data);
		$this->load->view("website/product",$data);
		$this->load->view("website/footer",$data);
	}
}