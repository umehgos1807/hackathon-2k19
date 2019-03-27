<?php 

		
class Teacher extends CI_Controller
{
	
	function __construct()
	{
		if (!$this->session->userdata('usn')) {
			$this->login();
		}
	}
}

?>