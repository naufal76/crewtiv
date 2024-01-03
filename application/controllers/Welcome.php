<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('tamplate/header');
		$this->load->view('personal/layout');
		$this->load->view('tamplate/footer');
	}
}
