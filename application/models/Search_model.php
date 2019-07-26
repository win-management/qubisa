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
				"category" => "Art",
				"value" => "0",
				"label" => "Category Courses"
			),
			array(
				"category" => "Art",
				"value" => "1",
				"label" => "Architecture"
			),
			array(
				"category" => "Art",
				"value" => "2",
				"label" => "Art & Culture"
			),
			array(
				"category" => "Business",
				"value" => "3",
				"label" => "Biology & Life Sciences"
			),
			array(
				"category" => "Business",
				"value" => "4",
				"label" => "Business & Management"
			),
			array(
				"category" => "Business",
				"value" => "5",
				"label" => "Chemistry"
			),
			array(
				"category" => "Business",
				"value" => "6",
				"label" => "Communication"
			),
			array(
				"category" => "Business",
				"value" => "7",
				"label" => "Computer Science"
			),
			array(
				"category" => "Business",
				"value" => "8",
				"label" => "Data Analysis & Statistics"
			)
		);

		return $result;
	}
}
