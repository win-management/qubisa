<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function course(){
		if(!isset($_SESSION['user_id'])){
			redirect(base_url()); 
		}
		$this->load->view("user/course");
	}

	public function editprofile(){
		if(!isset($_SESSION['user_id'])){
			redirect(base_url()); 
		}
		$this->load->view("user/editprofile");
	}

	public function editaccount(){
		if(!isset($_SESSION['user_id'])){
			redirect(base_url()); 
		}
		$this->load->view("user/editaccount");
	}
}
