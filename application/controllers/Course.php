<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Course extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view("course/index");
	}

	public function subject(){
		$this->load->view("course/subject");
	}
	
	public function detail(){
		$this->load->view("course/detail");
	}

	public function enroll(){
		redirect(gDomainCourseLecture);
	}

	public function lecture(){
		$this->load->view("course/lecture");
	}
}
