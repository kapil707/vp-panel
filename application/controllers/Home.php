<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	public function index($page="")
	{
		$page_data = get_all_page_data($page);

		$data["page_data"] = $page_data[0];
		$mypage = $page_data[2];
		
		$this->load->view("website/default_theme/header",$data);
		if($page=="home" || $page=="Home" || $page==""){
			$this->load->view("website/default_theme/index",$data);
		}else{
			if($mypage==""){
				$this->load->view("website/default_theme/index-2",$data);
			}else{
				$this->load->view("website/default_theme/".$mypage,$data);
			}
		}
		$this->load->view("website/default_theme/footer",$data);
	}

	public function lead()
	{
		$_SESSION["leadthanks"] = 1;
		if(isset($_POST) && $_POST['mobile'])
		{ 
			$_POST = array_map('trim', $_POST); 
			$date = date("Y-m-d");
			$time = date("H:i");
			$datetime = time();
			
			$name 		= $_POST['name'];
			$mobile 	= $_POST['mobile'];
			$email  	= $_POST['email'];
			$message 	= $_POST['message'];
			
			$system_ip = $this->input->ip_address();
			$row = $this->db->query("select * from tbl_leads where date='$date' and contact='$mobile'")->row();
			if($row->id=="")
			{
				
				$from 	= "fairfoxitinfra";
				$source = "fairfoxitinfra";
				$sql = $this->db->query("INSERT INTO tbl_leads (name, email, contact, msg, source,date,time,datetime,system_ip) VALUES ('$name', '$email', '$mobile', '$message','$source','$date','$time','$datetime','$system_ip')");
				
				$email_for_lead = $this->Main_Model->get_website_data("email_for_lead");
				
				$to = $email_for_lead;
				$header = "MIME-Version: 1.0\r\n";
				$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				$header .= 'To: '.$to.'' . "\r\n";
				$header .= 'From: '.$email.'' . "\r\n";
				$body='';

				$body = "<html><body><table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-width:1px solid' bordercolor='#000000'>";	
				$body .="<tr bgcolor='000000'><td width='20%' colspan=3><p style='margin-left:10'><font size=2 color='ffffff' face=verdana><strong>Inquiry</strong></font></p></td></tr>";
				$body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Name&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $name ."</font></td></tr>";
				$body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Email&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $email ."</font></td></tr>";
				$body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Phone&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $mobile ."</font></td></tr>";
				 $body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Message&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $message ."</font></td></tr>";
				$body .="<tr><td width='100%'  colspan='3'></td></tr>";
				$body .="</table></body></html>";

				$subject	= "Enquiry for fairfox itinfra website";

				$sentmail = mail($to, $subject, $body, $header);
			}        
		}
		echo "<center><h2>Thanks, we will contact you soon</h2></center>";	
		redirect(base_url());
	}

	public function about_us()
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
		$this->breadcrumbs->push("About Us","about_us");

		$tbl = $Page_tbl;		

		$data['url_path'] = base_url()."uploads/manage_property/photo/";
		$data['url_path1'] = base_url()."uploads/manage_vehicles/photo/";		

		$where1 = array('status'=>'1');
		$data["tbl_slider"] = $this->Main_Model->get_single_data_result("tbl_slider",$where1,"id","asc");
	
		$data["meta_title"] 		= $this->Main_Model->get_website_data("meta_title");
		$data["meta_keywords"] 		= $this->Main_Model->get_website_data("meta_keywords");
		$data["meta_discription"] 	= $this->Main_Model->get_website_data("meta_discription");	
		
		// $theme = $this->Main_Model->get_website_theme();
		$data["theme"] = $theme;
		
		$this->load->view("website/theme$theme/header",$data);
		//$this->load->view("website/theme$theme/slider",$data);
		$this->load->view("website/about_us",$data);
		$this->load->view("website/theme$theme/footer",$data);
	}
	
	public function contact_us()
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
		$this->breadcrumbs->push("Contact Us","contact_us");		

		$tbl = $Page_tbl;		

		$data['url_path'] = base_url()."uploads/manage_property/photo/";
		$data['url_path1'] = base_url()."uploads/manage_vehicles/photo/";		

		$where1 = array('status'=>'1');
		$data["tbl_slider"] = $this->Main_Model->get_single_data_result("tbl_slider",$where1,"id","asc");
	
		$data["meta_title"] 		= $this->Main_Model->get_website_data("meta_title");
		$data["meta_keywords"] 		= $this->Main_Model->get_website_data("meta_keywords");
		$data["meta_discription"] 	= $this->Main_Model->get_website_data("meta_discription");	
		
		//$theme = $this->Main_Model->get_website_theme();
		$theme = "";
		$data["theme"] = $theme;
		
		$this->load->view("website/theme$theme/header",$data);
		//$this->load->view("website/theme$theme/slider",$data);
		$this->load->view("website/contact_us",$data);
		$this->load->view("website/theme$theme/footer",$data);
	}
	
	public function privacy_policy()
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
		$this->breadcrumbs->push("Privacy Policy","privacy_policy");

		$tbl = $Page_tbl;		

		$data['url_path'] = base_url()."uploads/manage_property/photo/";
		$data['url_path1'] = base_url()."uploads/manage_vehicles/photo/";		

		$where1 = array('status'=>'1');
		$data["tbl_slider"] = $this->Main_Model->get_single_data_result("tbl_slider",$where1,"id","asc");
	
		$data["meta_title"] 		= $this->Main_Model->get_website_data("meta_title");
		$data["meta_keywords"] 		= $this->Main_Model->get_website_data("meta_keywords");
		$data["meta_discription"] 	= $this->Main_Model->get_website_data("meta_discription");	
		
		//$theme = $this->Main_Model->get_website_theme();
		$theme = "";
		$data["theme"] = $theme;
		
		$this->load->view("website/theme$theme/header",$data);
		//$this->load->view("website/theme$theme/slider",$data);
		$this->load->view("website/privacy_policy",$data);
		$this->load->view("website/theme$theme/footer",$data);
	}
	
	public function term_and_condition()
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
		$this->breadcrumbs->push("Term And Condition","term_and_condition");

		$tbl = $Page_tbl;		

		$data['url_path'] = base_url()."uploads/manage_property/photo/";
		$data['url_path1'] = base_url()."uploads/manage_vehicles/photo/";		

		$where1 = array('status'=>'1');
		$data["tbl_slider"] = $this->Main_Model->get_single_data_result("tbl_slider",$where1,"id","asc");
	
		$data["meta_title"] 		= $this->Main_Model->get_website_data("meta_title");
		$data["meta_keywords"] 		= $this->Main_Model->get_website_data("meta_keywords");
		$data["meta_discription"] 	= $this->Main_Model->get_website_data("meta_discription");	
		
		//$theme = $this->Main_Model->get_website_theme();
		$theme = "";
		$data["theme"] = $theme;
		
		$this->load->view("website/theme$theme/header",$data);
		//$this->load->view("website/theme$theme/slider",$data);
		$this->load->view("website/term_and_condition",$data);
		$this->load->view("website/theme$theme/footer",$data);
	}

	public function make_interest_submit()
	{
		error_reporting(0);
		$name = $_POST["make_interest_name"];
		$emailid = $_POST["make_interest_email"];
		$phone = $_POST["make_interest_phone"];
		$address = $_POST["make_interest_address"];
		$property_id = $_POST["property_id"];
		$type = $_POST["type"];		

		$name = base64_encode($name);
		$emailid = base64_encode($emailid);
		$phone = base64_encode($phone);
		$address = base64_encode($address);
		//$type = base64_encode($type);	

		$time = time();
		$date = date("Y-m-d",$time);
		$dt = array('property_id'=>$property_id,'name'=>$name,'emailid'=>$emailid,'phone'=>$phone,'address'=>$address,'type'=>$type,'date'=>$date,'time'=>$time,);
		$this->Scheme_Model->insert_fun("tbl_make_interest",$dt);
		echo "ok";
	}
	public function test_email()
	{
		//http://drdmail.xyz/cronjob_page/test_email?email_function=invoice&mail_server=gmail
		$email_function = $_GET["email_function"];
		$mail_server = $_GET["mail_server"];
		$this->test_email1($email_function,$mail_server,"kapil707sharma@gmail.com");
	}
	
	public function test_email1($email_function,$mail_server,$user_email_id)
	{
		error_reporting(0);
		
		$this->load->library('phpmailer_lib');
		$email = $this->phpmailer_lib->load();
		
        $subject = $message = "test mail";
		if($mail_server=="")
		{
			$row = $this->db->query("select * from tbl_email where email_function='$email_function'")->row();
			
			$addreplyto 		= $row->addreplyto;
			$addreplyto_name 	= $row->addreplyto_name;
			$server_email 		= $row->server_email;
			$server_email_name 	= $row->server_email_name;
			$email1 			= $row->email;
			$email_bcc 			= $row->email_bcc;
			$live_or_demo 		= $row->live_or_demo;
			
			$email->AddReplyTo($addreplyto,$addreplyto_name);
			$email->SetFrom($server_email,$server_email_name);
			
			$email->Subject   	= $subject;
			$email->Body 		= $message;		
			if($live_or_demo=="Demo")
			{
				$email->AddAddress($email1);
				$email_bcc = explode (",", $email_bcc);
				foreach($email_bcc as $bcc)
				{
					$email->addBcc($bcc);
				}
			}
			else
			{
				$email->AddAddress($user_email_id);
				$email->addBcc($email1);
				$email_bcc = explode (",", $email_bcc);
				foreach($email_bcc as $bcc)
				{
					$email->addBcc($bcc);
				}
				$email_other_bcc = explode (",", $email_other_bcc); 				
				foreach($email_other_bcc as $email_other_bcc_ok)
				{
					$email->addBcc($email_other_bcc_ok->memail);
				}
			}
			
			$email->IsHTML(true);		
			if($email->Send()){
				echo "Mail Sent";
			}
			else{
				echo "Mail Failed";
			}
			echo "<br>".$email->ErrorInfo;
		}
		
		if($mail_server!="")
		{
			$row = $this->db->query("select * from tbl_email where email_function='$email_function'")->row();
			print_r($row);
				
			$email->CharSet 	= 'UTF-8';
			
			$addreplyto 		= $row->addreplyto;
			$addreplyto_name 	= $row->addreplyto_name;
			$server_email 		= $row->server_email;
			$server_email_name 	= $row->server_email_name;
			$email1 			= $row->email;
			$email_bcc 			= $row->email_bcc;
			$live_or_demo 		= $row->live_or_demo;
			
			$email->AddReplyTo($addreplyto,$addreplyto_name);
			$email->SetFrom($server_email,$server_email_name);
				
			$email->Subject   	= $subject;
			$email->Body 		= $message;
			
			if($live_or_demo=="Demo")
			{
				$email->AddAddress($email1);
				$count++;
				$email_bcc = explode (",", $email_bcc);
				foreach($email_bcc as $bcc)
				{
					$email->addBcc($bcc);
					$count++;
				}
			}
			else
			{
				$email->AddAddress($user_email_id);
				$count++;
				$email->addBcc($email1);
				$count++;
				if($email_bcc!="")
				{
					$email_bcc = explode (",", $email_bcc);
					foreach($email_bcc as $bcc)
					{
						$email->addBcc($bcc);
						$count++;
					}
				}
				if($email_other_bcc!="")
				{
					$email_other_bcc = explode (",", $email_other_bcc); 				
					foreach($email_other_bcc as $email_other_bcc_ok)
					{
						$email->addBcc($email_other_bcc_ok->memail);
						$count++;
					}
				}
			}
				
			$email->IsHTML(true);
			//$email->SMTPDebug = SMTP::DEBUG_SERVER;
			$row1 = $this->db->query("select * from tbl_gmail_username_password where mail_server='$mail_server' order by id desc")->row();
			if($mail_server=="gmail")
			{
				$email->IsSMTP();
				$email->SMTPAuth   = true; 
				$email->SMTPSecure = "ssl";  //tls
				$email->Host       = "smtp.googlemail.com";
				$email->Port       = 465; //you could use port 25, 587, 465 for googlemail
				echo $email->Username   = $row1->email;
				echo $email->Password   = $row1->password;
			}
			
			if($mail_server=="smtpcorp")
			{
				$email->IsSMTP();
				$email->SMTPAuth   = true; 
				$email->SMTPSecure = "tls";  //tls
				$email->Host       = "smtpcorp.com";
				$email->Port       = 2525; //you could use port 25, 587, 465 for googlemail
				echo $email->Username   = $row1->email;
				echo $email->Password   = $row1->password;
			}
			//$email->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
			
			if($email->Send()){
				echo "Mail Sent";
			}
			else{
				echo "Mail Failed";
			}
			echo "<br>".$email->ErrorInfo;
		}
	}
	public function walkthrough()
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
		$this->breadcrumbs->push("About Us","about_us");

		$tbl = $Page_tbl;		

		$data['url_path'] = base_url()."uploads/manage_property/photo/";
		$data['url_path1'] = base_url()."uploads/manage_vehicles/photo/";		

		$where1 = array('status'=>'1');
		$data["tbl_slider"] = $this->Main_Model->get_single_data_result("tbl_slider",$where1,"id","asc");
	
		$data["meta_title"] 		= $this->Main_Model->get_website_data("meta_title");
		$data["meta_keywords"] 		= $this->Main_Model->get_website_data("meta_keywords");
		$data["meta_discription"] 	= $this->Main_Model->get_website_data("meta_discription");	
		
		//$theme = $this->Main_Model->get_website_theme();
		$theme = "";
		$data["theme"] = $theme;
		
		$this->load->view("website/header",$data);
		//$this->load->view("website/theme$theme/slider",$data);
		$this->load->view("website/walkthrough",$data);
		$this->load->view("website/footer",$data);
	}
	
	public function test_email2()
	{	
		$this->load->library('phpmailer_lib');
		$email = $this->phpmailer_lib->load();
		
		$subject = "local test ok";
		$message = "local test ok";
		
		$addreplyto 		= "kapil7071@gmail.com";
		$addreplyto_name 	= "kapil";
		$server_email 		= "kapil7071@gmail.com";
		$server_email_name 	= "DRD TEST";
		$email1 			= 'kapil7071@gmail.com';
		//$email1 = $this->Main_Model->get_website_data("email_for_lead");
		
		$email->AddReplyTo($addreplyto,$addreplyto_name);
		$email->SetFrom($server_email,$server_email_name);
		$email->AddAddress($email1);
		
		$email->Subject   	= $subject;
		$email->Body 		= $message;		
		
		$email->IsHTML(true);	
		
		$email->IsSMTP();
		$email->SMTPAuth   = 1; 
		$email->SMTPSecure = "tls";  //tls
		$email->Host       = "smtp.gmail.com";
		$email->Port       = 587;
		$email->Username   = "sanjuv63@gmail.com";
		$email->Password   = "mnqrehjkvixzcheb";
		//print_r($email);
		// exit();
		if($email->send()){
			echo 'Message has been sent';
		}else{
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $email->ErrorInfo;
		}
		//print_r($email);
	}
	
}