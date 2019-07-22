<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("search_model");
	}
	
	public function list()
    {
		$response = $this->search_model->get();
		echo json_encode($response);
    }
}
