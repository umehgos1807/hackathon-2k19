<?php 

		
class Teacher extends CI_Controller
{
	public function index()
	{
	
	}

	function __construct()
	{
		parent::__construct();
		
		if (!isset($_SESSION['teacher_id'])) {
			echo base_url()."home/index";
			 header("Location:localhost:80/hackathon/home/index");

		}
	}
}

?>