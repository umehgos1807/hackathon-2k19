<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function index()
	{
		$this->queries();
	}

	public function notes()
	{

	}

	public function queries()
	{
		$this->load->view('student/query_view');		
	}

	public function events()
	{

	}

	public function feedback()
	{

	}

	public function __construct()
	{
		parent::__construct();

		if(!isset($_SESSION['usn']))
		{
			header('Location:home/index');
		}
	}
}
