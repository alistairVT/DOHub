<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){


		$this->load->view('admin');

	}

	public function background() {

		$this->load->view('background.php');

	}

	public function demoprof()
	{
		$this->load->view('demoprof.php');
	}

	public function registerstudent()
	{
		$this->load->view('register.php');

	}

	public function registerDO()
	{
		$this->load->view('registerDO.php');
	}

		public function main()
	{
		$this->load->view('main.php');
	}

	public function dofficer() {
		$this->load->view('dofficer.php');
	}


}