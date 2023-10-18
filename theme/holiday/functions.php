<?php
if( isset($_POST['action_type']) && $_POST['action_type'] == 'load_submit_api') {
	
	$date = date("Y-m-d");
	$time = date("H:i");
	$datetime = time();
	
	$system_ip = $this->input->ip_address();
	$row = get_table_row("tbl_leads where date='$date' and system_ip='$system_ip'");
	if(empty($row->id))
	{
		$name 		= filter_var($_POST['name'],FILTER_SANITIZE_STRING);
		$mobile 	= filter_var($_POST['mobile'],FILTER_SANITIZE_STRING);
		$email  	= filter_var($_POST['email'],FILTER_SANITIZE_STRING);
		$message 	= filter_var($_POST['message'],FILTER_SANITIZE_STRING);

		$dt = array(
			'name'=>$name,
			'mobile'=>$mobile,
			'email'=>$email,
			'message'=>$message,
			'date'=>$date,
			'time'=>$time,
			'datetime'=>$datetime,
			'system_ip'=>$system_ip,);
		$this->Scheme_Model->insert_fun("tbl_leads",$dt);

		$email_for_lead = "kapildrd@gmail.com";

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

	$this->session->set_flashdata('message_title','Thanks');
	$this->session->set_flashdata('message_time','Just Now');
	$this->session->set_flashdata('message_value','Thanks, we will contact you soon');
	$this->session->set_flashdata('message_toast_show','1');
	
	redirect(base_url());
}