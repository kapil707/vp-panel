<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manage_library_Model extends CI_Model  
{  
	public function insert_image_library()
	{
		$title			= $_POST["title"];
		$library_image  = $_FILES['library_image'];
		if($_POST["title"]==""){
			$title = $library_image["name"];
		}
		$system_ip 		= $this->input->ip_address();
		$time 			= time();
		$date 			= date("Y-m-d",$time);
		$user_id 		= $this->session->userdata("user_id");
		
		$upload_path 		= "./uploads/manage_library/photo/main/";
		$upload_resize 		= "./uploads/manage_library/photo/resize/";
		
		$extension = pathinfo($library_image["name"], PATHINFO_EXTENSION);
		if($extension=="mp4")
		{
			$image = $library_image["name"];
			$file_tmp =$library_image['tmp_name'];
			move_uploaded_file($file_tmp,$upload_path.$library_image["name"]);
		}else{
			$this->Image_Model->uploadTo = $upload_path;
			$image = $this->Image_Model->upload($library_image);
			$image = str_replace($upload_path,"",$image);
		
			$this->Image_Model->newPath 	= $upload_resize;
			$this->Image_Model->newWidth 	= 550;
			$this->Image_Model->newHeight 	= 550;
			$this->Image_Model->resize();
		}
		$status = 1;
		$dt = array(
			'title'=>$title,
			'image'=>$image,
			'date'=>$date,
			'time'=>$time,
			'update_date'=>$date,
			'update_time'=>$time,
			'system_ip'=>$system_ip,
			'user_id'=>$user_id,
			'status'=>$status,
		);
		
		$id = $this->Scheme_Model->insert_fun("tbl_library",$dt);
		return $id;
	}	
}  