<?php
if( isset($_POST['action_type']) && $_POST['action_type'] == 'login_submit' ) {
	// Form data processing logic here
	$name 		= filter_var($_POST['name'],FILTER_SANITIZE_STRING);
	$country 	= filter_var($_POST['dropdown'],FILTER_SANITIZE_STRING);
	$mobile 	= filter_var($_POST['mobile'],FILTER_SANITIZE_STRING);
	$user_code 	= filter_var($_POST['user_code'],FILTER_SANITIZE_STRING);
	$interest 	= filter_var($_POST['interest'],FILTER_SANITIZE_STRING);
	$interest_type 	= filter_var($_POST['interest_type'],FILTER_SANITIZE_STRING);

	/******county code or 0 remove hota ha iss say********* */
	$result = get_table("tbl_o_country WHERE iso='$country'");
	foreach($result as $row1){
		$phonecode = $row1->phonecode;
	}

	$mobile = str_replace($phonecode,"",$mobile);
	$fstchar = substr($mobile,0, 1);
	if($fstchar == "+"){
		$mobile = substr($mobile, 1);
	}
	$fstchar = substr($mobile,0, 1);
	if($fstchar == "0"){
		$mobile = substr($mobile, 1);
	}

	$mobile1 = $phonecode.$mobile;
	/***************************************************** */
	
	$otp = getName();
	$your_code = getName();

	$dt = array(
		'first_name'=>$name,
		'country'=>$country,
		'mobile'=>$mobile,
		'otp'=>$otp,
		'interest'=>$interest,
		'interest_type'=>$interest_type,
		'your_code'=>$your_code,);
	
	$row = get_table_row("tbl_o_my_users where mobile='$mobile'");
	if(empty($row)){
		$this->Scheme_Model->insert_fun("tbl_o_my_users",$dt);
	}else{
		$row = get_table_row("tbl_o_my_users where mobile='$mobile'");
		$id = $row->id;

		$where = array('id'=>$id);

		$dt = array(
			'otp'=>$otp);
		$this->Scheme_Model->edit_fun("tbl_o_my_users",$dt,$where);
	}
	$row = get_table_row("tbl_o_my_users where mobile='$mobile'");
	if(empty($row->password)){
		$message = "Hello $name <br>Your otp to login https://www.parashar.guru/ is : $otp";
		send_otp($message,$mobile1);
		redirect(base_url()."otp-enter?id=".$row->id);
	}else{
		redirect(base_url());
	}
}

function send_otp($message,$mobile){

	$whatsapp_key = get_field_data("whatsapp_api_key");

	//$mobile 		= "919782664507";
	$media 			= "";
	$message 		= str_replace("<br>","\\n",$message);
	$message 		= str_replace("<b>","*",$message);
	$message 		= str_replace("</b>","*",$message);

	//$this->db->query("DELETE FROM `tbl_whatsapp_message` WHERE id='$mid'");

	if($media!="")
	{
		$parmiter = '{"phone": "'.$mobile.'","message": "'.$message.'","media": { "file": "'.$media.'" }}';
	}
	if($media=="")
	{
		$parmiter = "{\"phone\":\"$mobile\",\"message\":\"$message\"}";
	}

	$curl = curl_init();
	curl_setopt_array($curl, array(
	CURLOPT_URL => "https://api.wassi.chat/v1/messages",
	CURLOPT_RETURNTRANSFER=>true,
	CURLOPT_ENCODING =>"",
	CURLOPT_MAXREDIRS =>10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION =>CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS =>$parmiter,
	CURLOPT_HTTPHEADER =>array("content-type: application/json","token:$whatsapp_key"),));
	$response = curl_exec($curl);
	$err = curl_error($curl);
	curl_close($curl);

	$response = htmlspecialchars($response);
	$response = str_replace("'","&#39;",$response);
}
function getName() {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
 
    for ($i = 0; $i < 5; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
 
    return $randomString;
}

/**********otp submit******************** */
if( isset($_POST['action_type']) && $_POST['action_type'] == 'otp_page_form_submit' ) {
	$otp 		= filter_var($_POST['otp'],FILTER_SANITIZE_STRING);
	$id 		= filter_var($_POST['id'],FILTER_SANITIZE_STRING);
	
	$row = get_table_row("tbl_o_my_users WHERE id='$id'");

	$row_otp = $row->otp;
	if($row_otp==$otp){
		session_start();
		// Set a session variable
		$_SESSION['profile_user'] = $id;
		if($row->profile_update==0){

			$where = array('id'=>$id);

			$dt = array(
				'profile_update'=>'1',);
			$this->Scheme_Model->edit_fun("tbl_o_my_users",$dt,$where);
			
			redirect(base_url().'edit-profile');
		}else{
			redirect(base_url().'home');
		}
	}else{
		
		$this->session->set_flashdata('message_title','Wrong Otp');
		$this->session->set_flashdata('message_time','Just Now');
		$this->session->set_flashdata('message_value','You Etner Wrong Otp');
		$this->session->set_flashdata('message_toast_show','1');

		redirect(base_url().'otp-enter/?id='.$id);
	}
}


/**********otp submit******************** */
if( isset($_POST['action_type']) && $_POST['action_type'] == 'profile_page_form_submit' ) {
	session_start();
	// Set a session variable
	$id = $_SESSION['profile_user'];
		
	$first_name = filter_var($_POST['first_name'],FILTER_SANITIZE_STRING);
	$last_name 	= filter_var($_POST['last_name'],FILTER_SANITIZE_STRING);
	$email 		= filter_var($_POST['email'],FILTER_SANITIZE_STRING);
	$interest 	= filter_var($_POST['interest'],FILTER_SANITIZE_STRING);
	$interest_type 	= filter_var($_POST['interest_type'],FILTER_SANITIZE_STRING);
	$address 	= filter_var($_POST['address'],FILTER_SANITIZE_STRING);
	$dob 		= filter_var($_POST['dob'],FILTER_SANITIZE_STRING);
	$time 		= filter_var($_POST['time'],FILTER_SANITIZE_STRING);
	$place 		= filter_var($_POST['place'],FILTER_SANITIZE_STRING);

	$dt = array(
		'first_name' => $first_name,
		'last_name' => $last_name,
		'email' => $email,
		'interest' => $interest,
		'interest_type' => $interest_type,
		'address' => $address,
		'dob' => $dob,
		'time' => $time,
		'place' => $place,
	);

	$where = array('id'=>$id);
	$this->Scheme_Model->edit_fun("tbl_o_my_users",$dt,$where);

	$this->session->set_flashdata('message_title','Profile Updated');
	$this->session->set_flashdata('message_time','Just Now');
	$this->session->set_flashdata('message_value','Profile Updated Successfully');
	$this->session->set_flashdata('message_toast_show','1');
	
	redirect(base_url().'edit-profile');
}
?>