<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manage_blog extends CI_Controller {
	var $Page_title = "Manage Blog";
	var $Page_name  = "manage_blog";
	var $Page_view  = "manage_blog";
	var $Page_menu  = "manage_blog";
	var $page_controllers = "manage_blog";
	var $Page_tbl   = "tbl_blog";
	public function index()
	{
		$page_type = $_GET["page_type"];
		if($page_type){
			$page_controllers = $this->page_controllers;
			redirect("admin/$page_controllers/view?page_type=$page_type");
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
		
		$page_type = $_GET["page_type"];
		if($page_type){
			$Page_title = str_replace("Blog",$page_type,$Page_title);
			$pg_type = "?page_type=".$page_type;
			$data['pg_type'] = $pg_type;
			$Page_title = str_replace("manage_","",$Page_title);
		}
		
		$data['title1'] = $Page_title." || Add";
		$data['title2'] = "Add";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;		
		$this->breadcrumbs->push("Admin","admin/");
		$this->breadcrumbs->push("$Page_title","admin/$page_controllers/".$pg_type);
		$this->breadcrumbs->push("Add","admin/$page_controllers/add".$pg_type);
		$tbl = $Page_tbl;

		if(empty($page_type)){
			$page_type = "";
		}
		
		$system_ip = $this->input->ip_address();
		extract($_POST);
		if(isset($Submit))
		{
			$message_db = "";
			$this->form_validation->set_rules('title','Title',"required");
			$this->form_validation->set_rules('url', 'Url', "required|is_unique[$Page_tbl.url]");
			if ($this->form_validation->run() == FALSE)
			{
				$message = "Check Validation.";
				$this->session->set_flashdata("message_type","warning");
			}
			else
			{
				$time = time();
				$date = date("Y-m-d",$time);
				if (!empty($_FILES["image"]["name"]))
				{
					$image_ = $this->Manage_library_Model->insert_image_library($_FILES['image']);
				}		
				else
				{
					$image_ = "";
				}
				
				if (!empty($_FILES["mobile_image"]["name"]))
				{
					$mobile_image_ = $this->Manage_library_Model->insert_image_library($_FILES['mobile_image']);
				}		
				else
				{
					$mobile_image_ = "";
				}
				
				$result = "";
				$dt = array(
					'title'=>$title,
					'description'=>$description,
					'excerpt'=>$excerpt,
					'image'=>$image_,
					'mobile_image'=>$mobile_image_,
					'page_type'=>$page_type,
					'date'=>$date,
					'time'=>$time,
					'update_date'=>$date,
					'update_time'=>$time,
					'system_ip'=>$system_ip,
					'user_id'=>$user_id,
					'status'=>$status,
					'url'=>$url,);
				$result = $this->Scheme_Model->insert_fun($tbl,$dt);
				$title = ($title);
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
					redirect(base_url()."admin/$page_controllers/edit/".$result.$pg_type);
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
		
		$page_type = $_GET["page_type"];
		if($page_type){
			$Page_title = str_replace("Blog",$page_type,$Page_title);
			$pg_type = "?page_type=".$page_type;
			$data['pg_type'] = $pg_type;
			$Page_title = str_replace("manage_","",$Page_title);
		}
		
		$data['title1'] = $Page_title." || View";
		$data['title2'] = "View";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;		
		$this->breadcrumbs->push("Admin","admin/");
		$this->breadcrumbs->push("$Page_title","admin/$page_controllers/".$pg_type);
		$this->breadcrumbs->push("View","admin/$page_controllers/view".$pg_type);
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
		
		$query = $this->db->query("select * from $tbl where page_type='$page_type' order by id desc");
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
		
		$page_type = $_GET["page_type"];
		if($page_type){
			$Page_title = str_replace("Blog",$page_type,$Page_title);
			$pg_type = "?page_type=".$page_type;
			$data['pg_type'] = $pg_type;
			$Page_title = str_replace("manage_","",$Page_title);
		}
		
		$data['title1'] = $Page_title." || Edit";
		$data['title2'] = "Edit";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;		
		$this->breadcrumbs->push("Edit","admin/");
		$this->breadcrumbs->push("$Page_title","admin/$page_controllers/".$pg_type);
		$this->breadcrumbs->push("Edit","admin/$page_controllers/edit".$pg_type);
		$tbl = $Page_tbl;
		
		
		$category_id = "";
		$system_ip = $this->input->ip_address();		
		extract($_POST);
		if(isset($Submit))
		{
			$message_db = "";
			$this->form_validation->set_rules('title','Title',"required");
			if($url_old==$url){
				$this->form_validation->set_rules('url', 'Url', "required|is_unique[$Page_tbl.url]");
			}
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
				
				if (!empty($_FILES["image"]["name"]))
				{
					$image_ = $this->Manage_library_Model->insert_image_library($_FILES['image']);
				}		
				else
				{
					$image_ = "";
				}
				
				if (!empty($_FILES["mobile_image"]["name"]))
				{
					$mobile_image_ = $this->Manage_library_Model->insert_image_library($_FILES['mobile_image']);
				}		
				else
				{
					$mobile_image_ = "";
				}
				
				if($category_id){
					$category_id = implode(',',$category_id);
				}
				
				$result = "";
				$dt = array(
					'title'=>$title,
					'description'=>$description,
					'excerpt'=>$excerpt,
					'image'=>$image_,
					'mobile_image'=>$mobile_image_,
					'category_id'=>$category_id,
					'page_type'=>$page_type,
					'date'=>$date,
					'time'=>$time,
					'update_date'=>$date,
					'update_time'=>$time,
					'system_ip'=>$system_ip,
					'user_id'=>$user_id,
					'status'=>$status,
					'url'=>$url,);
				$result = $this->Scheme_Model->edit_fun($tbl,$dt,$where);
				$title = ($title);				
				$title = $old_title." - ($title)";
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
					redirect(base_url()."admin/$page_controllers/edit/".$id);
				}
			}
		}
		$query = $this->db->query("select * from $tbl where id='$id'");
  		$data["result"] = $query->result();
		$this->load->view("admin/header_footer/header",$data);
		$this->load->view("admin/$Page_view/edit",$data);
		$this->load->view("admin/header_footer/footer",$data);
	}
	public function check_url()
	{
		$Page_tbl 	= $this->Page_tbl;
		$id 		= $_POST["id"];
		$url 		= $_POST["url"];		
		$query = $this->db->query("select * from $Page_tbl where url='$url' and id!='$id'")->row();
		if($query->id)
		{
			echo "Error";
		}
		else
		{
			echo "ok";
		}
	}
	public function delete_rec()
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
	public function delete_photo()
	{
		$id = $_POST["id"];
		$type_me = $_POST["type_me"];
		$Page_title = $this->Page_title;
		$Page_tbl = $this->Page_tbl;
		$page_controllers 	= $this->page_controllers;
		$url_path = "./uploads/$page_controllers/photo/";
		$query = $this->db->query("select * from $Page_tbl where id='$id'");
        $row = $query->row();
		$filename = $url_path.$row->$type_me;
		$name = ucfirst(base64_decode($row->menu_title));
		$result = $this->db->query("update $Page_tbl set $type_me='' where id='$id'");
		if($result)
		{
			$message = "$name - Delete Photo Successfully.";
			if (file_exists($filename)) 
			{
    			unlink($filename);
			}
		}
		else
		{
			$message = "$name - Photo Not Update.";
		}
		$message = $Page_title." - ".$message;
		$this->Admin_Model->Add_Activity_log($message);
		echo "ok";
	}
}