<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	
	public function test_page()
	{
		$this->load->view("../../theme/central50noida/index");
	}

	public function index()
	{
		$page = $this->uri->segment('1');

		$theme = get_field_data("system_theme");
		$page_data = get_all_page_data($page);

		$data["theme"] = $theme;
		$data["page_data"] = $page_data[0];
		$mypage = $page_data[2];
		
		//$this->load->view("../../theme/".$theme."/header",$data);
		if($page=="home" || $page=="Home" || $page==""){
			$this->load->view("../../theme/".$theme."/index",$data);
		}else{
			if($mypage==""){
				$this->load->view("../../theme/".$theme."/index-2",$data);
			}else{
				$this->load->view("../../theme/".$theme."/".$mypage,$data);
			}
		}
		//$this->load->view("../../theme/".$theme."/footer",$data);
	}

	public function post_data()
	{
		$theme = get_field_data("system_theme");
		$this->load->view("../../theme/".$theme."/functions",$data);
	}
	
	public function blog($page="")
	{
		$theme 				= get_field_data("system_theme");
		$page_data 			= get_all_blog_data($page);
		$data["theme"]		= $theme;
		$data["page_data"] 	= $page_data[0];
		$mypage 			= $page_data[2]."-single";
		
		//$this->load->view("../../theme/".$theme."/header",$data);
		$this->load->view("../../theme/".$theme."/".$mypage,$data);
		//$this->load->view("../../theme/".$theme."/footer",$data);
	}

	public function construction_updates($id="")
	{
		$page = $this->uri->segment('1');
		$theme 				= get_field_data("system_theme");
		$page_data 			= get_all_blog_data($page);
		$data["theme"]		= $theme;
		$data["page_data"] 	= $page_data[0];
		$mypage 			= $page_data[2];
		
		//$this->load->view("../../theme/".$theme."/header",$data);
		$this->load->view("../../theme/".$theme."/".$mypage,$data);
		//$this->load->view("../../theme/".$theme."/footer",$data);
	}
	
	public function not_found()
	{
		$theme = get_field_data("system_theme");
		
		$this->load->view("website/".$theme."/header",$data);
		$this->load->view("website/".$theme."/404",$data);
		$this->load->view("website/".$theme."/footer",$data);
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