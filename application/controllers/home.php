<?php 

class Home extends CI_Controller
{
	static $data = [

	];
	public function index()
	{
		if(isset($_SESSION['usn']))
		{
			header("Location:../student/index");
		}
		if(isset($_SESSIO['teacher_id']))
		{
			header("Location:../teacher/index");
		}
		$this->load->view('login_view');
	}
	
	public function login()
	{
		$this->load->view('login_view');
	}

	public function student_submit()
	{
		$usn = $this->input->post('usn');
		$password = $this->input->post('password');

		if($this->loginmodel->validate_student($usn, $password))
		{
			$this->session->set_userdata('usn',$usn);
			header("Location:../student/index");
		}
		else{
			Home::$data['error_type'] = 'usn';
			Home::$data['error'] = 'Invalid USN or password';
			$this->load->view('login_view',Home::$data);
		}

	}

	public function teacher_submit()
	{	
		$teacher_id = $this->input->post('teacher_id');
		$password = $this->input->post('password');

		if($this->loginmodel->validate_teacher($teacher_id, $password))
		{
			$this->session->set_userdata('teacher_id',$teacher_id);
			header("Location:../teacher/index");
		}
		else{
			Home::$data['error_type'] = 'teacher_id';
			Home::$data['error'] = 'Invalid teacher ID or password';
			$this->load->view('login_view',Home::$data);
		}
	}

	function __construct()
	{
		parent::__construct(); 
		$this->load->model('loginmodel');

		
	}
}

?>