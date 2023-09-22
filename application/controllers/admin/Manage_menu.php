<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manage_menu extends CI_Controller {
	var $Page_title = "Manage Menu";
	var $Page_name  = "manage_menu";
	var $Page_view  = "manage_menu";
	var $Page_menu  = "manage_menu";
	var $page_controllers = "manage_menu";
	var $Page_tbl   = "tbl_menu";
	public function index()
	{
		$page_controllers = $this->page_controllers;
		redirect("admin/$page_controllers/view");
	}	
	public function add()
	{
		error_reporting(0);
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
		$data['title1'] = $Page_title." || Add";
		$data['title2'] = "Add";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;		
		$this->breadcrumbs->push("Admin","admin/");
		$this->breadcrumbs->push("$Page_title","admin/$page_controllers/");
		$this->breadcrumbs->push("Add","admin/$page_controllers/add");
		$tbl = $Page_tbl;
		$data['url_path'] 	= base_url()."uploads/$page_controllers/photo/resize/";
		$upload_path 		= "./uploads/$page_controllers/photo/main/";
		$upload_resize 		= "./uploads/$page_controllers/photo/resize/";
		
		$system_ip = $this->input->ip_address();
		extract($_POST);
		if(isset($Submit))
		{
			$message_db = "";
			$this->form_validation->set_rules('title','Title',"required");
			$this->form_validation->set_rules('sorting_order', 'Sorting Order', "required|is_unique[$Page_tbl.sorting_order]");
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
				'page_type'=>$group_page_type,
				'page_id'=>$group_page_id,
				'menu_id'=>$menu_id,
				'sorting_order'=>$sorting_order,
				'status'=>$status,
				'user_id'=>$user_id,
				'date'=>$date,
				'time'=>$time,
				'update_date'=>$date,
				'update_time'=>$time,
				'system_ip'=>$system_ip,);
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
					redirect(base_url()."admin/$page_controllers/edit/".$result);
				}
			}
		}
		$this->load->view("admin/header_footer/header",$data);
		$this->load->view("admin/$Page_view/add",$data);
		$this->load->view("admin/header_footer/footer",$data);
	}
	public function view()
	{
		error_reporting(0);
		/******************session***********************/
		$user_id = $this->session->userdata("user_id");
		$user_type = $this->session->userdata("user_type");
		/******************session***********************/
		$_SESSION["latitude"] = 
		$_SESSION["longitude"] = "";
		$Page_title = $this->Page_title;
		$Page_name 	= $this->Page_name;
		$Page_view 	= $this->Page_view;
		$Page_menu 	= $this->Page_menu;
		$Page_tbl 	= $this->Page_tbl;
		$page_controllers 	= $this->page_controllers;
		$this->Admin_Model->permissions_check_or_set($Page_title,$Page_name,$user_type);
		$data['title1'] = $Page_title." || View";
		$data['title2'] = "View";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;		
		$this->breadcrumbs->push("Admin","admin/");
		$this->breadcrumbs->push("$Page_title","admin/$page_controllers/");
		$this->breadcrumbs->push("View","admin/$page_controllers/view");
		$tbl = $Page_tbl;
		$data['url_path'] 	= base_url()."uploads/$page_controllers/photo/resize/";
		$upload_path 		= "./uploads/$page_controllers/photo/main/";
		$upload_resize 		= "./uploads/$page_controllers/photo/resize/";
		
		extract($_POST);
		if(isset($Delete))
		{	
			$where = array('id'=>$delete_id,'status'=>"5",'school_id'=>$school_id);
			$this->Scheme_Model->delete_fun($tbl,$where);
			$where = array('id'=>$delete_id,'school_id'=>$school_id);					
			$dt = array('status'=>"5");
			$this->Scheme_Model->edit_fun($tbl,$dt,$where);			
		}
		$query = $this->db->query("select * from $tbl order by id desc");
  		$data["result"] = $query->result();
		$this->load->view("admin/header_footer/header",$data);
		$this->load->view("admin/$Page_view/view",$data);
		$this->load->view("admin/header_footer/footer",$data);
	}
	public function edit($id)
	{
		error_reporting(0);
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
		$data['title1'] = $Page_title." || Edit";
		$data['title2'] = "Edit";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;		
		$this->breadcrumbs->push("Edit","admin/");
		$this->breadcrumbs->push("$Page_title","admin/$page_controllers/");
		$this->breadcrumbs->push("Edit","admin/$page_controllers/edit");
		$tbl = $Page_tbl;
		$data['url_path'] 	= base_url()."uploads/$page_controllers/photo/resize/";
		$upload_path 		= "./uploads/$page_controllers/photo/main/";
		$upload_resize 		= "./uploads/$page_controllers/photo/resize/";
		
		$system_ip = $this->input->ip_address();		
		extract($_POST);
		if(isset($Submit))
		{
			$message_db = "";
			$this->form_validation->set_rules('title','Menu Title',"required");
			if ($this->form_validation->run() == FALSE)
			{
				$message = "Check Validation.";
				$this->session->set_flashdata("message_type","warning");
			}
			else
			{
				$time = time();
				$date = date("Y-m-d",$time);
				$where = array('id'=>$id);
				if (!empty($_FILES["image"]["name"]))
				{
					$this->Image_Model->uploadTo = $upload_path;
					$photo = $this->Image_Model->upload($_FILES['image']);
					$photo = str_replace($upload_path,"",$photo);
					
					$this->Image_Model->newPath = $upload_resize;
					$this->Image_Model->newWidth = 550;
					$this->Image_Model->newHeight = 550;
					$this->Image_Model->resize();
				}		
				else
				{
					$photo = $old_photo;
				}
				
				$title = ($title);
				$description = ($description);
				$description1 = ($description1);
				$result = "";
				$dt = array(
				'title'=>$title,
				'page_type'=>$group_page_type,
				'page_id'=>$group_page_id,
				'menu_id'=>$menu_id,
				'sorting_order'=>$sorting_order,
				'status'=>$status,
				'user_id'=>$user_id,
				'date'=>$date,
				'time'=>$time,
				'update_date'=>$date,
				'update_time'=>$time,
				'system_ip'=>$system_ip,);
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
					redirect(current_url());
					//redirect(base_url()."admin/$page_controllers/view");
				}
			}
		}
		$query = $this->db->query("select * from $tbl where id='$id'");
  		$data["result"] = $query->result();
		$this->load->view("admin/header_footer/header",$data);
		$this->load->view("admin/$Page_view/edit",$data);
		$this->load->view("admin/header_footer/footer",$data);
	}
	public function change_url()
	{
		error_reporting(0);
		$Page_tbl 	= $this->Page_tbl;
		$id = $_POST["id"];
		$url = $_POST["url1"];		
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
		error_reporting(0);
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

	public function change_select_group_page_type_api()
	{
		$page_type 	= $_POST["page_type"];
		$page_id 	= $_POST["page_id"];
		?>
		<select name="group_page_id" id="group_page_id" data-placeholder="Select Group Page" class="chosen-select" required onchange="onchanage_page_info()">
		<option value="">
			Select Group Page
		</option>
		<option value="0" page_title="<?php echo $page_type ?>" page_url="<?php echo $page_type ?>">
			All <?php echo $page_type ?>
		</option>
		<?php 
		$result = $this->db->query("select id,title,url from tbl_$page_type where status=1")->result();
		foreach($result as $row) { ?>
			<option value="<?php echo $row->id ?>" 
			page_title="<?php echo $row->title?>"
			page_url="<?php echo $row->url?>"
			<?php if($page_id==$row->id) { echo "selected"; } ?>>
			<?php echo $row->title ?>
			</li>
		<?php } 
	}
}