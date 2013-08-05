<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class student extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('view_model');
	}



	public function demoprof()
	{
		$this->load->view('demoprof.php');
	}

	public function index()
	{
		$this->load->view('student');
	}


	public function background()
	{
		$this->view_model->savebackground();
	}
}


