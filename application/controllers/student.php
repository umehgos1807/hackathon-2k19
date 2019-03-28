<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	static $data = [];

	public function index()
	{
		$this->load->view('student/events_view');
	}

	public function notes()
	{
		Student::$data['subjects'] = $this->studentmodel->get_subjects($_SESSION['usn']);
		Student::$data['notes'] = $this->studentmodel->get_notes($usn);
		$this->load->view('student/student_notes_view',Student::$data);
	}



	public function query()
	{
		$this->load->view('student/query_view');		
	}


	public function feedback()
	{

	}

	public function __construct()
	{
		parent::__construct();
		$this->load->model('studentmodel');

		if(!isset($_SESSION['usn']))
		{
			header('Location:home/index');
		}
	}
}
