<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function index()
	{
		// $this->load->view('student/student_dashboard_view');
		
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
