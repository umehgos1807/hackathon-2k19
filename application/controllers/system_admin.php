<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SystemAdmin extends CI_Controller {

	public function index()
	{
		$this->load->view('system_admin_dashboard');
	}

	public function login()
	{
		$this->load->view('')
	}
	public function log_out()
	{

	}

	public function __constructor()
	{
		if(!$this->session->userdata('userid'))
		{
			return redirect('system_admin/login');
		}
	}
}
