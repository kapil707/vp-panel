<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manage_blog extends CI_Controller {
	var $Page_title = "Manage Blog";
	var $Page_name  = "manage_blog";
	var $Page_view  = "manage_blog";
	var $Page_menu  = "manage_blog";
	var $page_controllers = "manage_blog";
	var $Page_tbl   = "tbl_page";
	var $Page_type  = "blog";
	public function index()
	{
		if(!empty($_GET["child_page"])){
			$child_page = $_GET["child_page"];
			$page_controllers = $this->page_controllers;
			redirect("admin/$page_controllers/view?child_page=$child_page");
		}else{
			$page_controllers = $this->page_controllers;
			redirect("admin/$page_controllers/view");
		}
	}	
	public function add()
	{
		/******************session***********************/
		$user_id = $this->session->userdata("user_id");
		$user_type = $this->session->userdata("user_type");
		/******************session***********************/
		$Page_title = $this->Page_title;
		$Page_name 	= $this->Page_name;
		$Page_view 	= $this->Page_view;
		$Page_menu 	= $this->Page_menu;
		$Page_tbl 	= $this->Page_tbl;
		$page_controllers 	= $this->page_controllers;
		$this->Admin_Model->permissions_check_or_set($Page_title,$Page_name,$user_type);
		
		$data['page_url'] = $this->Page_type;
		if(!empty($_GET["child_page"])){
			$child_page = $_GET["child_page"];
			$Page_title = get_child_page_name($child_page);
			$dt_child_page = "?child_page=".$child_page;
			$data['child_page'] = $dt_child_page;
			$data['page_url'] = $child_page;
		}else{
			$child_page = $dt_child_page = "";
			$data['child_page'] = "";
		}
		
		$data['title1'] = $Page_title." || Add";
		$data['title2'] = "Add";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;		
		$this->breadcrumbs->push("Admin","admin/");
		$this->breadcrumbs->push("$Page_title","admin/$page_controllers/".$dt_child_page);
		$this->breadcrumbs->push("Add","admin/$page_controllers/add".$dt_child_page);
		$tbl = $Page_tbl;
		
		$page_type = $this->Page_type;
		$data['page_type'] = $page_type;
		
		$category_id = "";
		$system_ip = $this->input->ip_address();
		extract($_POST);
		if(isset($Submit))
		{
			$message_db = "";
			$this->form_validation->set_rules('title','Title',"required");
			/*$this->form_validation->set_rules('url', 'Url', "required|callback_check_url");
			$this->form_validation->set_rules('url', 'Url', "required|callback_check_url");*/
			if ($this->form_validation->run() == FALSE)
			{
				$message = "Check Validation.";
				$this->session->set_flashdata("message_type","warning");
			}
			else
			{
				$time = time();
				$date = date("Y-m-d",$time);
				
				$result = "";
				$dt = array(
					'title'=>$title,
					'description'=>$description,
					'excerpt'=>$excerpt,
					'image'=>$image,
					'mobile_image'=>$mobile_image,
					'page_type'=>$page_type,
					'child_page'=>$child_page,
					'category_id'=>$category_id,
					'sorting_order'=>$sorting_order,
					'url'=>$url,
					'date'=>$date,
					'time'=>$time,
					'update_date'=>$date,
					'update_time'=>$time,
					'system_ip'=>$system_ip,
					'user_id'=>$user_id,
					'status'=>$status,);
				$result = $this->Scheme_Model->insert_fun($tbl,$dt);
				if($result)
				{
					$message_db = "($title) -  Add Successfully.";
					$message = "Add Successfully.";
					$this->session->set_flashdata("message_type","success");
				}
				else
				{
					$message_db = "($title) - Not Add.";
					$message = "Not Add.";
					$this->session->set_flashdata("message_type","error");
				}
			}
			if($message_db!="")
			{
				$message = $Page_title." - ".$message;
				$message_db = $Page_title." - ".$message_db;
				$this->session->set_flashdata("message_footer","yes");
				$this->session->set_flashdata("full_message",$message);
				$this->Admin_Model->Add_Activity_log($message_db);
				if($result)
				{
					redirect(base_url()."admin/$page_controllers/edit/".$result.$dt_child_page);
				}
			}
		}
		$this->load->view("admin/header_footer/header",$data);
		$this->load->view("admin/$Page_view/add",$data);
		$this->load->view("admin/header_footer/footer",$data);
	}
	
	public function view()
	{
		/******************session***********************/
		$user_id = $this->session->userdata("user_id");
		$user_type = $this->session->userdata("user_type");
		/******************session***********************/
		$Page_title = $this->Page_title;
		$Page_name 	= $this->Page_name;
		$Page_view 	= $this->Page_view;
		$Page_menu 	= $this->Page_menu;
		$Page_tbl 	= $this->Page_tbl;
		$page_controllers 	= $this->page_controllers;
		$this->Admin_Model->permissions_check_or_set($Page_title,$Page_name,$user_type);
		
		$data['page_url'] = $this->Page_type;
		if(!empty($_GET["child_page"])){
			$child_page = $_GET["child_page"];
			$Page_title = get_child_page_name($child_page);
			$dt_child_page = "?child_page=".$child_page;
			$data['child_page'] = $dt_child_page;
			$data['page_url'] = $child_page;
		}else{
			$child_page = $dt_child_page = "";
			$data['child_page'] = "";
		}
		
		$data['title1'] = $Page_title." || View";
		$data['title2'] = "View";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;		
		$this->breadcrumbs->push("Admin","admin/");
		$this->breadcrumbs->push("$Page_title","admin/$page_controllers/".$dt_child_page);
		$this->breadcrumbs->push("View","admin/$page_controllers/view".$dt_child_page);
		$tbl = $Page_tbl;
		
		extract($_POST);
		if(isset($Delete))
		{	
			$where = array('id'=>$delete_id,'status'=>"5",'school_id'=>$school_id);
			$this->Scheme_Model->delete_fun($tbl,$where);
			$where = array('id'=>$delete_id,'school_id'=>$school_id);					
			$dt = array('status'=>"5");
			$this->Scheme_Model->edit_fun($tbl,$dt,$where);			
		}
		
		$page_type = $this->Page_type;
		$data['page_type'] = $page_type;
		$query = $this->db->query("select * from $tbl where page_type='$page_type' and child_page='$child_page' order by id desc");
  		$data["result"] = $query->result();
		$this->load->view("admin/header_footer/header",$data);
		$this->load->view("admin/$Page_view/view",$data);
		$this->load->view("admin/header_footer/footer",$data);
	}
	public function edit($id)
	{
		/******************session***********************/
		$user_id = $this->session->userdata("user_id");
		$user_type = $this->session->userdata("user_type");
		/******************session***********************/
		$Page_title = $this->Page_title;
		$Page_name 	= $this->Page_name;
		$Page_view 	= $this->Page_view;
		$Page_menu 	= $this->Page_menu;
		$Page_tbl 	= $this->Page_tbl;
		$page_controllers 	= $this->page_controllers;
		$this->Admin_Model->permissions_check_or_set($Page_title,$Page_name,$user_type);
		
		$data['page_url'] = $this->Page_type;
		if(!empty($_GET["child_page"])){
			$child_page = $_GET["child_page"];
			$Page_title = get_child_page_name($child_page);
			$dt_child_page = "?child_page=".$child_page;
			$data['child_page'] = $dt_child_page;
			$data['page_url'] = $child_page;
		}else{
			$child_page = $dt_child_page = "";
			$data['child_page'] = "";
		}
		
		$data['title1'] = $Page_title." || Edit";
		$data['title2'] = "Edit";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;		
		$this->breadcrumbs->push("Edit","admin/");
		$this->breadcrumbs->push("$Page_title","admin/$page_controllers/".$dt_child_page);
		$this->breadcrumbs->push("Edit","admin/$page_controllers/edit".$dt_child_page);
		$tbl = $Page_tbl;
		
		$page_type = $this->Page_type;
		$category_id = "";
		$system_ip = $this->input->ip_address();		
		extract($_POST);
		if(isset($Submit))
		{
			$message_db = "";
			$this->form_validation->set_rules('title','Title',"required");
			/*if($url_old==$url){
				$this->form_validation->set_rules('url', 'Url', "required|is_unique[$Page_tbl.url]");
			}*/
			if ($this->form_validation->run() == FALSE)
			{
				$message = "Check Validation.";
				$this->session->set_flashdata("message_type","warning");
			}
			else
			{
				/***********************************************/
				$this->Manage_field_group_model->insert_field_data();
				/***********************************************/
				
				$time = time();
				$date = date("Y-m-d",$time);
				$where = array('id'=>$id);
				
				if($category_id){
					$category_id = implode(',',$category_id);
				}
				
				$result = "";
				$dt = array(
					'title'=>$title,
					'description'=>$description,
					'excerpt'=>$excerpt,
					'image'=>$image,
					'mobile_image'=>$mobile_image,
					'page_type'=>$page_type,
					'child_page'=>$child_page,
					'category_id'=>$category_id,
					'sorting_order'=>$sorting_order,
					'url'=>$url,
					'update_date'=>$date,
					'update_time'=>$time,
					'system_ip'=>$system_ip,
					'user_id'=>$user_id,
					'status'=>$status,);
				$result = $this->Scheme_Model->edit_fun($tbl,$dt,$where);
				if($result)
				{
					$message_db = "$title - Edit Successfully.";
					$message = "Edit Successfully.";
					$this->session->set_flashdata("message_type","success");
				}
				else
				{
					$message_db = "$title - Not Add.";
					$message = "Not Add.";
					$this->session->set_flashdata("message_type","error");
				}
			}
			if($message_db!="")
			{
				$message = $Page_title." - ".$message;
				$message_db = $Page_title." - ".$message_db;
				$this->session->set_flashdata("message_footer","yes");
				$this->session->set_flashdata("full_message",$message);
				$this->Admin_Model->Add_Activity_log($message_db);
				if($result)
				{
					//redirect(current_url());
					redirect(base_url()."admin/$page_controllers/edit/".$id.$dt_child_page);
				}
			}
		}
		$query = $this->db->query("select * from $tbl where id='$id'");
  		$data["result"] = $query->result();
		$this->load->view("admin/header_footer/header",$data);
		$this->load->view("admin/$Page_view/edit",$data);
		$this->load->view("admin/header_footer/footer",$data);
	}
	
	/*public function check_url(){
		$Page_tbl 	= $this->Page_tbl;
		
		$url = $_POST["url"];
		$id  = $_POST["id"];
		$row = $this->db->query("select id from $Page_tbl where url='$url' and id!='$id'")->row();
		if ($row->id!="") {
			$this->set_message('unique_user_name', 'This name already exists in our database');
			return FALSE;
		} else {
			return TRUE;
		}
	}*/
	
	public function check_url_api()
	{
		$Page_tbl 	= $this->Page_tbl;
		$id 		= $_POST["id"];
		$url 		= $_POST["url"];
		$child_page = $_POST["page_url"];
		if($child_page=="blog"){
			$child_page = "";
		}
		$where = "";
		if($id!=""){
			$where = " and id!='$id'"; 
		}
		$query = $this->db->query("select id from $Page_tbl where url='$url' and child_page='$child_page' and page_type='blog' $where")->row();
		if(!empty($query->id))
		{
			echo "Error";
		}
		else
		{
			echo "ok";
		}
	}
	
	public function check_sorting_order_api()
	{
		$Page_tbl 	= $this->Page_tbl;
		$id 		= $_POST["id"];
		$sorting_order = $_POST["sorting_order"];
		$child_page = "";
		if(!empty($id)){
			$row = $this->db->query("select child_page from $Page_tbl where id='$id'")->row();
			$child_page = $row->child_page;
		}
		$where = "";
		if($id!=""){
			$where = " and id!='$id'"; 
		}
		$query = $this->db->query("select id from $Page_tbl where sorting_order='$sorting_order' and child_page='$child_page' and page_type='blog' $where")->row();
		if($query->id)
		{
			echo "Error";
		}
		else
		{
			echo "ok";
		}
	}
	
	public function delete_page_rec()
	{
		$id = $_POST["id"];
		$Page_title = $this->Page_title;
		$Page_tbl = $this->Page_tbl;
		$result = $this->db->query("delete from $Page_tbl where id='$id'");
		if($result)
		{
			$message = "Delete Successfully.";
		}
		else
		{
			$message = "Not Delete.";
		}
		$message = $Page_title." - ".$message;
		$this->Admin_Model->Add_Activity_log($message);
		echo "ok";
	}
	
	public function setting()
	{
		/******************session***********************/
		$user_id = $this->session->userdata("user_id");
		$user_type = $this->session->userdata("user_type");
		/******************session***********************/
		$Page_title = $this->Page_title;
		$Page_name 	= $this->Page_name;
		$Page_view 	= $this->Page_view;
		$Page_menu 	= $this->Page_menu;
		$Page_tbl 	= $this->Page_tbl;
		$page_controllers 	= $this->page_controllers;
		$this->Admin_Model->permissions_check_or_set($Page_title,$Page_name,$user_type);
		
		$child_page = $_GET["child_page"];
		if($child_page){
			$Page_title = get_child_page_name($child_page);
			$dt_child_page = "?child_page=".$child_page;
			$data['child_page'] = $dt_child_page;
		}
		
		$data['title1'] = $Page_title." || Settings";
		$data['title2'] = "Settings";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;		
		$this->breadcrumbs->push("Admin","admin/");
		$this->breadcrumbs->push("$Page_title","admin/$page_controllers/".$dt_child_page);
		$this->breadcrumbs->push("Settings","admin/$page_controllers/setting".$dt_child_page);
		$tbl = $Page_tbl;
		
		$system_ip = $this->input->ip_address();
		extract($_POST);
		if(isset($Submit))
		{
			$message_db = "";
			
			$this->Manage_field_group_model->insert_field_data_default($blog_page_number,"blog_page_number");

			//redirect(current_url());
		}
		$this->load->view("admin/header_footer/header",$data);
		$this->load->view("admin/$Page_view/setting",$data);
		$this->load->view("admin/header_footer/footer",$data);
	}
}