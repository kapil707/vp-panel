<?php
if( isset($_POST['action_type']) && $_POST['action_type'] == 'login_submit' ) {
	// Form data processing logic here
	echo $name 		= sanitize_text_field( $_POST['name']);
	$country 	= sanitize_text_field( $_POST['dropdown']);
	$mobile 	= sanitize_text_field( $_POST['mobile']);
	$user_code 	= sanitize_text_field( $_POST['user_code']);
	$interest 	= sanitize_text_field( $_POST['interest']);
	$interest_type 	= sanitize_text_field( $_POST['interest_type']);

	global $wpdb;

	/******county code or 0 remove hota ha iss say********* */
	$sql1 = "SELECT * FROM wp_country WHERE iso='$country'";
	$row1 = $wpdb->get_row($sql1);

	$mobile = str_replace($row1->phonecode,"",$mobile);
	$fstchar = substr($mobile,0, 1);
	if($fstchar == "+"){
		$mobile = substr($mobile, 1);
	}
	$fstchar = substr($mobile,0, 1);
	if($fstchar == "0"){
		$mobile = substr($mobile, 1);
	}

	$mobile1 = $row1->phonecode.$mobile;
	/***************************************************** */
	
	$otp = getName();
	$your_code = getName();

	$table_name = $wpdb->prefix . 'my_users'; // Replace 'your_table_name' with your actual table name
	
	$table_name2 = $wpdb->prefix . 'my_use_code';

	$data_to_check = array(
		'mobile' =>$mobile,
		// Add more columns and values as needed
	);

	$where = array();
	foreach ($data_to_check as $column => $value) {
		$where[] = $column . ' = %s';
	}

	$where_clause = implode(' AND ', $where);

	$sql = $wpdb->prepare("SELECT COUNT(*) FROM $table_name WHERE $where_clause", $data_to_check);

	$existing_count = $wpdb->get_var($sql);

	if ($existing_count > 0) {
		// Data already exists, handle accordingly
		
	} else {
		// Data doesn't exist, proceed with the insertion
		$data_to_insert = array(
			'first_name'=>$name,
			'country'=>$country,
			'mobile'=>$mobile,
			'otp'=>$otp,
			'interest'=>$interest,
			'interest_type'=>$interest_type,
			'your_code'=>$your_code,
			// Add more columns and values as needed
		);

		$format = array(
			'%s', // For string values
			'%s', // For string values
			// Add more format placeholders based on the data types of your columns
		);

		$insert_result = $wpdb->insert($table_name, $data_to_insert, $format);

		if ($insert_result === false) {
			// Handle the insertion error
		} else {
			// Insertion successful
			
			$sql = "SELECT id FROM $table_name WHERE mobile='$mobile'";
			$row = $wpdb->get_row($sql);
			$id = $row->id;
			
			$data_to_insert2 = array(
				'use_code_user' =>$id,
				'user_code' =>$user_code,
			);
			$format2 = array(
				'%s', // For string values
				'%s', // For string values
				// Add more format placeholders based on the data types of your columns
			);
			if($_GET["code"]){
				$wpdb->insert($table_name2, $data_to_insert2, $format2);
			}
		}
	}
	
	$message = "Hello $name <br> Thank you for intresting us your otp is this: $otp";

	send_otp($message,$mobile1);
	
	/************************************************************************/
	$sql = "SELECT * FROM $table_name WHERE mobile='$mobile'";
	$row = $wpdb->get_row($sql);
	
	wp_redirect( home_url('/otp-enter/?id='.$row->id) ); 
	exit();
}

function send_otp($message,$mobile){

	$whatsapp_key = "433e4178876685b01e0f99a4e474bcfab30d6b57fb256500ee65827aed544f37557625b3d70d4152";

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
	echo $response = str_replace("'","&#39;",$response);
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

function otp_page_form_submit_handler() {
    if( isset($_POST['action']) && $_POST['action'] == 'otp_page_form_submit' ) {
		$otp 		= sanitize_text_field( $_POST['otp'] );
		$id 		= sanitize_text_field( $_POST['id'] );
		
		global $wpdb;
		$table_name = $wpdb->prefix . 'my_users';
		
		$sql = "SELECT * FROM $table_name WHERE id='$id'";
		$row = $wpdb->get_row($sql);
		$row_otp = $row->otp;
		if($row_otp==$otp){
			session_start();
			// Set a session variable
			$_SESSION['profile_user'] = $id;
			if($row->profile_update==0){
				
				$profile_update = 1;
				$data = array(
					'profile_update' => $profile_update,
				);

				$where = array(
					'id' => $id,
				);

				$wpdb->update($table_name, $data, $where);
				
				wp_redirect(home_url('/profile_edit_page'));
			}else{
				wp_redirect(home_url('/home'));
			}
		}else{
			wp_redirect(home_url('/otp-enter/?id='.$id.'&error=true'));
		}
    }
}


add_action( 'admin_post_nopriv_otp_page_form_submit', 'otp_page_form_submit_handler' );
add_action( 'admin_post_otp_page_form_submit', 'otp_page_form_submit_handler' );




function profile_page_form_submit_handler() {
    if( isset($_POST['action']) && $_POST['action'] == 'profile_page_form_submit' ) {
		session_start();
		// Set a session variable
		$id = $_SESSION['profile_user'];
		
		global $wpdb;
		$table_name = $wpdb->prefix . 'my_users';
		
		$first_name = sanitize_text_field( $_POST['first_name'] );
		$last_name 	= sanitize_text_field( $_POST['last_name'] );
		$email 		= sanitize_text_field( $_POST['email'] );
		$interest 	= sanitize_text_field( $_POST['interest'] );
		$interest_type 	= sanitize_text_field( $_POST['interest_type'] );
		$address 	= sanitize_text_field( $_POST['address'] );
		$dob 		= sanitize_text_field( $_POST['dob'] );
		$time 		= sanitize_text_field( $_POST['time'] );
		$place 		= sanitize_text_field( $_POST['place'] );
	
		$data = array(
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

		$where = array(
			'id' => $id,
		);

		$wpdb->update($table_name, $data, $where);
		
		wp_redirect( home_url('/profile_edit_page') );
    }
}


add_action( 'admin_post_nopriv_profile_page_form_submit', 'profile_page_form_submit_handler' );
add_action( 'admin_post_profile_page_form_submit', 'profile_page_form_submit_handler' );
?>