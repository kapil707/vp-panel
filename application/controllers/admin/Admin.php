<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function index()
	{
		error_reporting(0);
		$data['message_alert'] = "";
		extract($_POST);
		if(isset($Submit))
		{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if ($this->form_validation->run() == FALSE)
			{
			}
			else
			{
				$password = md5($password);
				$password = sha1($password);
				$password = md5($password);
				$result = $this->Admin_Model->admin_login($username,$password);
				if($result!="1")
				{
					$this->session->set_flashdata("message1","<p class='font-bold  alert alert-danger m-b-sm'>".$result."</p>");
				}
				if($result=="1")
				{	
					$this->Admin_Model->check_login();
				}
			}
		}
		if(isset($Forget))
		{
			$new_password = $password = $this->randomPassword();
			$password = md5($password);
			$password = sha1($password);
			$password = md5($password);
			$query = $this->db->query("SELECT * from tbl_user WHERE email='$email'");
			$row = $query->row();
			$id = $row->id;
			if(!empty($id))
			{
				$name = $row->name;		
				$where = array('email'=>$email);			
				$dt = array('password'=>$password,);
				$result = $this->Scheme_Model->edit_fun("tbl_user",$dt,$where);
				if($result)
				{
					$subject = "Password Reset";
					$message = "Dear $name,<br><br> <b>Your login details<b><br>Email is:- $email <br> Password is:- $new_password";
					$to = $email;
					$message = $this->send_email($subject,$message,$to);
					$this->session->set_flashdata("message1","<p class='font-bold  alert alert-warning m-b-sm'>Password Reset</p>");
				}
			}
			else
			{
				$this->session->set_flashdata("message1","<p class='font-bold  alert alert-danger m-b-sm'>Email Not Registered</p>");
			}
		}
		$this->load->view('admin/login/index',$data);
	}
	public function register()
	{
		$data['message_alert'] = "";
		extract($_POST);
		if(isset($Submit))
		{
			$tbl = "tbl_user";
			$this->form_validation->set_rules('name','Name','required');			
			$this->form_validation->set_rules('email','Email',"required|valid_email|trim|is_unique[$tbl.email]",
			array(
			"is_unique"=>"<p class='font-bold  alert alert-danger m-b-sm'>This Email already exists.</p>"
			));
			$this->form_validation->set_rules('password','Password','trim|required|min_length[6]|alpha_numeric',
			array(
			"min_length"=>"<p class='font-bold  alert alert-danger m-b-sm'>Min 6 charter length.</p>"
			));
			$this->form_validation->set_rules('password1','Password Confirmation','trim|required|matches[password]');
			if ($this->form_validation->run() == FALSE)
			{
				$this->session->set_flashdata("message2","<p class='font-bold  alert alert-warning m-b-sm'>Registered failed</p>");
			}
			else
			{
				$time = time();
				$date = date("Y-m-d",$time);
				$status = 1;
				$i = 0;
				$query = $this->db->query("select * from $tbl");
				$result = $query->result();
				foreach($result as $row)
				{
					$i++;
				}
				$user_type = "";
				if($i==0)
				{
					$query = $this->db->query("select * from tbl_user_type where id='1'");
					$row = $query->row();
					$user_type = $row->user_type;
				}
				$query = $this->db->query("select * from $tbl where email='$email'");
				$row = $query->row();
				if(empty($row->id))
				{
					$password = md5($password);
					$password = sha1($password);
					$password = md5($password);
					$photo = "default.jpg";
					$dt = array('name'=>$name,'email'=>$email,'password'=>$password,'user_type'=>$user_type,'photo'=>$photo,'status'=>$status,'time'=>$time,'date'=>$date,);
					$this->Scheme_Model->insert_fun($tbl,$dt);
					$result = $this->Admin_Model->admin_login($email,$password);
					if($result!="1")
					{
						$this->session->set_flashdata("message2",$result);
					}
					if($result=="1")
					{	
						$this->Admin_Model->check_login();
					}
				}
				else
				{
					$this->session->set_flashdata("message2","<p class='font-bold  alert alert-danger m-b-sm'>Email Already Registered</p>");
				}
			}
		}
		$this->load->view('admin/login/register',$data);
	}
	public function dashboard()
	{
		redirect('admin/dashboard');
	}
	public function logout()
	{
		$this->session->sess_destroy();		
		$this->Admin_Model->check_login();
		redirect(base_url()."admin");
	}
	public function randomPassword() {
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array(); //remember to declare $pass as an array
		$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		return implode($pass); //turn the array into a string
	}
	function _check_valid_username($str)
	{
	   // Your validation code
	   // ...
	   // Put this in condition where you want to return FALSE
	   $this->form_validation->set_message('_check_valid_username', 'Error Message');
	   //
	}
	public function send_email($subject,$message,$to) 
	{
		$from = 'info@accesswayanadproperty.com';
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: '.$from."\r\n".
			'Reply-To: '.$from."\r\n" .
			'X-Mailer: PHP/' . phpversion();
		if(mail($to, $subject, $message, $headers)){
			return '<br><br><center>Your mail has been sent successfully.</center><br><br>';
		} else{
			return '<br><br><center>Unable to send email. Please try again.</center><br><br>';
		}
	}
}