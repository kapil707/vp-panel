<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Career extends CI_Controller {
	
	var $Page_title = "Career";
	var $Page_name  = "career";
	var $Page_view  = "career";
	var $Page_menu  = "career";
	var $page_controllers = "career";
	var $Page_tbl   = "tbl_career";
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

		$data['url_path2'] = base_url()."uploads/manage_career2/photo/main/";
		$data['url_path3'] = base_url()."uploads/manage_career3/photo/main/";
		
		$data['tbl_result'] = $this->db->query("select * from $Page_tbl where status='1'")->result();
		$data['tbl_result2'] = $this->db->query("select * from tbl_career2 where status='1'")->result();
		$data['tbl_result3'] = $this->db->query("select * from tbl_career3 where status='1'")->result();
		$data['tbl_job_description'] = $this->db->query("select * from tbl_job_description where status='1'")->result();
		
		$this->load->view("website/header",$data);
		$this->load->view("website/career",$data);
		$this->load->view("website/footer",$data);
		
		$this->load->view("lightbox");
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
			$ctc 		= $_POST['ctc'];
			$position 	= $_POST['position'];
			
			$resume = "";
			$upload_path = "./uploads/manage_career_leads/photo/main/";
			$upload_path1 = base_url()."/uploads/manage_career_leads/photo/main/";
			$file = $upload_path.str_replace(" ","-",$_FILES["resume"]["name"]);
			if (move_uploaded_file($_FILES["resume"]["tmp_name"], $file)){							
				$resume = str_replace(" ","-",$_FILES["resume"]["name"]);
			}
			
			$system_ip = $this->input->ip_address();
			$row = $this->db->query("select * from tbl_career_leads where date='$date' and system_ip='$system_ip'")->row();
			if($row->id=="")
			{
				
				$from = "fairfoxitinfra";
				$sql = $this->db->query("INSERT INTO tbl_career_leads (name,email,contact,ctc,position,resume,date,time,datetime,system_ip) VALUES ('$name', '$email', '$mobile','$ctc','$position','$resume','$date','$time','$datetime','$system_ip')");
				
				$resume = $upload_path1.$resume;
				
				$email_for_career_lead = $this->Main_Model->get_website_data("email_for_career_lead");
				
				$to = $email_for_career_lead;
				$header = "MIME-Version: 1.0\r\n";
				$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
				$header .= 'To: '.$to.'' . "\r\n";
				$header .= 'From: '.$email.'' . "\r\n";
				$body='';

				$body = "<html><body><table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-width:1px solid' bordercolor='#000000'>";	
				$body .="<tr bgcolor='000000'><td width='20%' colspan=3><p style='margin-left:10'><font size=2 color='ffffff' face=verdana><strong>Inquiry</strong></font></p></td></tr>";
				$body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Name&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $name ."</font></td></tr>";
				$body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Email Id&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $email ."</font></td></tr>";
				$body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Contact Number&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $mobile ."</font></td></tr>";
				$body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Current CTC&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $ctc ."</font></td></tr>";
				$body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Current position&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $position ."</font></td></tr>";
				$body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Resume&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $resume ."</font></td></tr>";
				$body .="<tr><td width='100%'  colspan='3'></td></tr>";
				$body .="</table></body></html>";

				$subject	= "Enquiry for fairfox itinfra website";

				$sentmail = mail($to, $subject, $body, $header);
			}        
		}
		redirect(base_url()."career");
		echo "<center><h2>Thanks, we will contact you soon</h2></center>";	
	}
}