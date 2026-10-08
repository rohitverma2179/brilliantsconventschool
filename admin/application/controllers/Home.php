<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('home_model');
	}
	public function index()
	{

		
		$this->load->view('page-login');
		$this->load->view('template/footer');
	}
	

	public function login(){

		if($_SERVER['REQUEST_METHOD']=='POST'){


			
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		if(!$this->form_validation->run()){
		$this->session->set_flashdata('msgerror', validation_errors());
		redirect('users/login');
		}else{
		    $username=$this->input->post('username');
			$password=$this->input->post('password');
			
			$new_pass= password_hash($password,PASSWORD_DEFAULT);
			//var_dump($new_pass); die;
			$user_login=$this->home_model->login_user($username,$password);
			//echo $user_login; 
			

			if($user_login=='not_exits'){

			$this->session->set_flashdata('msgerror','Invalid Email/Password');
			redirect('users/login');

			}elseif($user_login=='invalid_password'){

			$this->session->set_flashdata('msgerror','Invalid Email/Password');
			redirect('users/login');
			}

			else{
				
				$data=array('id'=>$user_login->id,'username'=>$user_login->username,'status'=>$user_login->status);
				$this->session->set_userdata($data);
				redirect('dashboard');

				
			}

		}

		}else{

		$this->load->view('template/header');
		$this->load->view('page-login');
		$this->load->view('template/footer');

	}
	}
	public function check_activated(){
		$url= $this->uri->segment('3');
		parse_str(substr(strrchr(urldecode($_SERVER['REQUEST_URI']), "?"), 1), $_GET);
		$email=base64_decode($_GET['check']);
		$id=$_GET['id'];
		$status=$_GET['status'];
		$update_link=$this->home_model->update_link($id,$email,$status);

		if($update_link=='Already_activated_expired'){

			$this->session->set_flashdata('msgerror','This link is already Activated Expired');
			redirect('users/confirm_message');	

		}elseif ($update_link=='invalid_url') {
			$this->session->set_flashdata('msgerror','Url Expired');
			redirect('users/confirm_message');	
			
		}elseif($update_link=='link_update'){
			$this->session->set_flashdata('msgsuccess','Account Activated!please login');
			redirect('users/confirm_message');	

		}
		
		
	}
	public function confirm_page(){


		$this->load->view('template/header');
		$this->load->view('mainfiles/check_activated');
		$this->load->view('template/footer');
	}
	public function forget_password(){
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$this->form_validation->set_rules('forgot_email','Forgot Email','trim|required|valid_email');
			if(!$this->form_validation->run()){
				$this->session->set_flashdata('msgerror','Please enter emailid');
				redirect('users/send_password');	

			}else{
				$forgot_email=$this->input->post('forgot_email');
				$data=$this->home_model->forgot_password($forgot_email);

				if($data=='invalidemail'){
					$this->session->set_flashdata('msgerror','Please Enter Valid email');
					redirect('users/send_password');	

				}else{



			$config = array(
			    'protocol'  => 'smtp',
			    'smtp_host' => 'ssl://smtp.googlemail.com',
			    'smtp_port' => 465,
			    'smtp_user' => 'bapuni99@gmail.com',
			    'smtp_pass' => '9583987171',
			    'mailtype'  => 'html',
			    'charset'   => 'utf-8'
			);
			$this->email->initialize($config);
			$this->email->set_mailtype("html");
			$this->email->set_newline("\r\n");
			$url=urlencode('check='.base64_encode($data->contactEmail).'&status='.$data->status.'&id='.$data->id);
		
			$htmlContent = '<h1>Dear&nbsp;'.$data->contactName.'</h1>';
			$htmlContent .= '<p>Reset Your Account</p><a href="' . base_url().'users/new-password?'.$url.'">click here</a></p>';
			$htmlContent .= '<p></p>';

			$this->email->to($data->contactEmail);
			$this->email->from('bapuni99@gmail.com',$_SERVER['HTTP_HOST']);
			$this->email->subject('Reset Password For '.$_SERVER['HTTP_HOST']);
			$this->email->message($htmlContent);
			
			if($this->email->send()){
				$this->session->set_flashdata('msgsuccess','Check Mail For Reset Password');
				redirect('users/send_password');	

			}else{
				show_error($this->email->print_debugger());
			}




				}
			}

		}else{
		$this->load->view('template/header');
		$this->load->view('mainfiles/forgot');
		$this->load->view('template/footer');
	}
	}

	public function reset_password(){
	
		$grabUrl=$_SERVER['REQUEST_URI'];
		if(strpos($grabUrl,'?')==false){
			redirect('users/send_password');	
		}
		
		parse_str(substr(strrchr(urldecode($_SERVER['REQUEST_URI']), "?"), 1), $_GET);
		$check_email=$_GET['check'];
		$email= base64_decode($_GET['check']);
		$status=$_GET['status'];
		$id=$_GET['id'];
		$data=user_check_email($id,$email);
		if($data!==false){

			if(urlencode('check='.base64_encode($data->contactEmail).'&status='.$data->status.'&id='.$data->id)!== substr($_SERVER['REQUEST_URI'],strpos($grabUrl,'?')+1)){

				$this->session->set_flashdata('msgerror','Invalid url');
				redirect('users/send_password');

			}
			if(!user_status($email)){
				$this->session->set_flashdata('msgerror','This email is still not activated');
				redirect('users/send_password');
			}

			
			

		}else{

			$this->session->set_flashdata('msgsuccess','Not valid Email');
			redirect('users/send_password');	

		}

		$this->load->view('template/header');
		$this->load->view('mainfiles/new-password',compact('data'));	
		$this->load->view('template/footer');	

	}
	public function new_reset_password(){

		if($_SERVER['REQUEST_METHOD']=='POST'){

			$id=$this->input->post('hidden_id');
			$email=$this->input->post('hidden_email');
			$hiddend_password=$this->input->post('hidden_pass');
			$new_password= $this->input->post('password');
			$confirm_password= $this->input->post('confirm_password');

			$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[20]');	
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');	
			if(!$this->form_validation->run()){
			$this->session->set_flashdata('msgerror',validation_errors());
			redirect('users/new-password');	

			}else{

			if(password_verify($new_password,$hiddend_password)){

			$this->session->set_flashdata('msgerror','Can not set previous password as New password ');
			redirect('users/send_password');
			}else{

				$password_set=$this->home_model->update_new_password($id,$email,$new_password);

				$this->session->set_flashdata('msgsuccess','Password reset Please login');
				redirect('users/login');

			
		}
			}
		}
	}
}
