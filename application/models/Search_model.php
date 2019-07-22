<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
	}
	
	public function get(){
		$result = array(
			array(
				"value" => "1",
				"label" => "Architecture"
			),
			array(
				"value" => "2",
				"label" => "Art & Culture"
			),
			array(
				"value" => "3",
				"label" => "Biology & Life Sciences"
			),
			array(
				"value" => "4",
				"label" => "Business & Management"
			),
			array(
				"value" => "5",
				"label" => "Chemistry"
			),
			array(
				"value" => "6",
				"label" => "Communication"
			),
			array(
				"value" => "7",
				"label" => "Computer Science"
			),
			array(
				"value" => "8",
				"label" => "Data Analysis & Statistics"
			)
		);

		return $result;
	}
}
