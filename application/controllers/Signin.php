<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Signin extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view("signin/index");
	}

	public function authorize(){
		$email = $this->input->post('email'); 
		$password = md5($this->input->post('password')); 
		/*$user = $this->UserModel->get($username); 
		if(empty($user)){ 
		  $this->session->set_flashdata('message', 'Username tidak ditemukan'); 
		  redirect('signin'); 
		}else{
		  if($password == $user->password){ 
			$session = array(
			  'authenticated'=>true, 
			  'username'=>$user->username,  
			  'nama'=>$user->nama 
			);
			$this->session->set_userdata($session); 
			redirect(base_url()); 
		  }else{
			$this->session->set_flashdata('message', 'Password salah');
			redirect('signin'); 
		  }
		}*/
		$session = array(
			'access_token'=>"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gRG9lIiwiaWF0IjoxNTE2MjM5MDIyfQ.SflKxwRJSMeKKF2QT4fwpMeJf36POk6yJV_adQssw5c", 
			'refresh_token'=>"", 
			'user_id'=>101,  
			'username'=>"Steven",  
			'email'=>"steve@gmail.com",  
			'profile_pic'=>"http://qubisa.com/assets/img/home/participant-3.png" 
		);
		$this->session->set_userdata($session); 
		redirect(base_url()); 
	}

	public function deauthorize(){
		$this->session->sess_destroy(); 
		redirect(base_url()); 
	  }
}
