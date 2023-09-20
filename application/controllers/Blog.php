<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller {
	
	var $Page_title = "Blog";
	var $Page_name  = "blog";
	var $Page_view  = "blog";
	var $Page_menu  = "blog";
	var $page_controllers = "blog";
	var $Page_tbl   = "tbl_blog";
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

		$data['url_path'] = base_url()."uploads/manage_blog/photo/main/";
		
		$this->load->library('pagination');

		$result = $this->db->query("select * from $tbl order by id desc")->result();
		
		$config['total_rows'] = count($result);
		$data["count_records"] = count($result);
        $config['per_page'] = 10;

        if($num!=""){
           $config['per_page'] = $num;
        }
        $config['full_tag_open']="<ul class='pagination'>";
        $config['full_tag_close']="</ul>";
        $config['first_tag_open']='<li>';
        $config['first_tag_close']='</li>';
        $config['last_tag_open']='<li>';
        $config['last_tag_close']='</li>';
        $config['next_tag_open']='<li>';
        $config['next_tag_close']='</li>';
        $config['prev_tag_open']='<li>';
        $config['prev_tag_close']='</li>';
        $config['num_tag_open']='<li>';
        $config['num_tag_close']='</li>';
        $config['cur_tag_open']="<li class='active'><a>";
        $config['cur_tag_close']='</a></li>';
        $config['num_links'] = 100;    
        $config['page_query_string'] = TRUE;
		$per_page=$_GET["pg"];
		if($per_page=="")
		{
			$per_page = 0;
		}


		$data['per_page']=$per_page;
		
		$data['user_id'] = $user_id;

		$query = $this->db->query("select * from $tbl order by id desc LIMIT $per_page,10");
  		$data["tbl_result"] = $query->result();

		
		$this->load->view("website/header",$data);
		$this->load->view("website/blog",$data);
		$this->load->view("website/footer",$data);
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

		$data['url_path'] = base_url()."uploads/manage_blog/photo/main/";
		
		$data['id'] = $id;
		$id = str_replace("-"," ",$id);
		
		$data['tbl_result'] = $this->db->query("select * from $Page_tbl where url='$id'")->result();

		
		$this->load->view("website/header",$data);
		$this->load->view("website/blog_view",$data);
		$this->load->view("website/footer",$data);
	}
}