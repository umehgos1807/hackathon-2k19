<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class System extends CI_Controller {

	static $data = [
		"title" => "System Admin",
		"style" => "system_admin.css",
		"js" => ""
	];
	public function index()
	{
		$this->load->view('system_admin/system_admin_dashboard_view', System::$data);
		
	}

	public function login()
	{
		$this->load->view('system_admin/system_login_view', System::$data);
	}
	public function log_out()
	{


	}

	public function login_submit()
	{

	}
	public function __construct()
	{
		parent::__construct();

		// $this->load->library('sesson');
		if(!$this->session->userdata('userid'))
		{			
			$this->login();
		}
	}
}
