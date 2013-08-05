<?php
class Form extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function background()
	{
		$this->load->view('templates/header.php');
		$this->load->view('form/background.php');
		$this->load->view('templates/footer.php');
	}

	public function demoprof()
	{
	$this->load->view('templates/header.php');
	$this->load->view('form/demoprof.php');
	$this->load->view('templates/footer.php');
	}

	public function register() {
		$this->load->view('templates/header.php');
		$this->load->view('form/register.php');
		$this->load->view('templates/footer.php');
	}

	public function registerDO() {
		$this->load->view('templates/header.php');
		$this->load->view('form/registerDO.php');
		$this->load->view('templates/footer.php');
	}
}