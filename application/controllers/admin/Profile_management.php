<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile_management extends CI_Controller {
	var $Page_title = "Profile Management";
	var $Page_name  = "profile_management";
	var $Page_view  = "profile_management";
	var $Page_menu  = "profile_management";
	var $Page_tbl   = "tbl_permission_settings";
	var $page_controllers = "profile_management";
	public function index()
	{
		$page_controllers = $this->page_controllers;
		redirect("admin/$page_controllers/permission_settings");
	}
	public function permission_settings()
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

		$data['title1'] = $Page_title." || Permission Settings";
		$data['title2'] = "Permission Settings";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;
		$this->breadcrumbs->push("Admin","admin/");
		$this->breadcrumbs->push("$Page_title","admin/$page_controllers/");
		$this->breadcrumbs->push("Permission Settings","admin/$page_controllers/add");	

		$tbl = $Page_tbl;	

		extract($_POST);
		if(isset($Submit))
		{
			$query = $this->db->query("select * from $Page_tbl where id='$id'");
			$row1 = $query->row();
			$name = ucfirst($row1->name);			

			$message_new = "";
			$result = $this->db->query("delete from $tbl where user_type='$user_type'");
			$this->db->query("update tbl_user set updateme='1' where user_type='$user_type'");
			$this->session->set_flashdata("user_type1",$user_type);
			foreach($page_type as $page_type1)
			{
				$message_new.= ucfirst(str_replace("_"," ","$page_type1")).",";
				$user_type1 = str_replace("_"," ","$user_type");
				$dt = array('user_type'=>$user_type,'page_type'=>$page_type1,);
				$result = $this->Scheme_Model->insert_fun($tbl,$dt);
			}

			if($result)
			{
				$message = "$user_type1 Permission Set to ($message_new) Successfully.";
				$this->session->set_flashdata("message_type","success");
			}
			else
			{
				$message = "Permission Not Set.";
				$this->session->set_flashdata("message_type","error");
			}
			$this->session->set_flashdata("message_footer","yes");
			$this->session->set_flashdata("full_message",$message);
			$this->Admin_Model->Add_Activity_log($message);
			redirect(current_url());
		}
		
		$query = $this->db->query("select * from tbl_permission_page order by sorting_order asc")->result();
		$data["result"] = $query;
		
		$this->load->view("admin/header_footer/header",$data);
		$this->load->view("admin/$Page_view/permission_settings",$data);
		$this->load->view("admin/header_footer/footer",$data);
	}

	function get_permission_settings()
	{
		extract($_POST);
		error_reporting(0);
		if($user_type=="")
		{
			$user_type = "Category";
		}
		?>
        <div class="col-sm-12">
            <div class="col-sm-6">
                All Permission
            </div>
            <div class="col-sm-6">
                Permission Of <?php echo str_replace("_","",$user_type); ?>
            </div>
        </div>
        <div class="col-sm-12">
            <select class="form-control dual_select" multiple name="page_type[]" id="page_type">
                <?php
                $query = $this->db->query("select * from tbl_permission_page order by page_title asc");
                $result1 = $query->result();
                foreach($result1 as $row1)
                {
                    $page_type = $row1->page_type;
                    $query = $this->db->query("select * from tbl_permission_settings where user_type='$user_type' and page_type='$page_type'");
                    $row2 = $query->row();
                    ?>
                    <option value="<?= $row1->page_type; ?>" <?php if($row2->page_type==$row1->page_type) { echo "selected"; }?>>
                        <?= $row1->page_title; ?>
                    </option>
                    <?php
                }
                ?>
            </select>
      	</div>
        <?php
	}
	
	public function onchange_page_api()
	{
		$id 	= $_POST["id"];
		$type 	= $_POST["type"];
		$value 	= $_POST["value"];

		$Page_title = $this->Page_title;
		$Page_tbl = $this->Page_tbl;
		$result = $this->db->query("update tbl_permission_page set $type='$value' where id='$id'");
		if($result)
		{
			$message = "Update Successfully.";
		}
		else
		{
			$message = "Not Update.";
		}
		$message = $Page_title." - ".$message;
		$this->Admin_Model->Add_Activity_log($message);
		echo "ok";
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
		
		$data['title1'] = $Page_title." || Add";
		$data['title2'] = "Add";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;		
		$this->breadcrumbs->push("Admin","admin/");
		$this->breadcrumbs->push("$Page_title","admin/$page_controllers/");
		$this->breadcrumbs->push("Add","admin/$page_controllers/add");
		$tbl = $Page_tbl;
		
		$page_error_message = "";
		$system_ip = $this->input->ip_address();
		extract($_POST);
		if(isset($Submit))
		{
			$message_db = "";
			$page_name = str_replace("_"," ",$page_name);
			$page_name = "manage_".str_replace("manage","",$page_name);
			echo $page_name = str_replace(" ","_",$page_name);
			$this->form_validation->set_rules('page_name','Page Name',"required|is_unique[$Page_tbl.page_type]");
			if ($this->form_validation->run() == FALSE)
			{
				$message = "Check Validation.";
				$this->session->set_flashdata("message_type","warning");
			}
			else
			{
				$row = $this->db->query("select id from $Page_tbl where page_type='$page_type'")->row();
				if(!empty($row->id)){
					$page_error_message = "This Page Already Use";
					$message = "Check Validation.";
					$this->session->set_flashdata("message_type","warning");
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
		$data["page_error_message"] = $page_error_message;
		$this->load->view("admin/header_footer/header",$data);
		$this->load->view("admin/$Page_view/add",$data);
		$this->load->view("admin/header_footer/footer",$data);
	}
}