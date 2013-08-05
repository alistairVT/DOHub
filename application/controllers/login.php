<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
<<<<<<< HEAD
		$this->load->view("login.php");
=======
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'callback_password_check');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');
		}
		else
		{
			//redirect('admin');
			$this->load->library('../controllers/admin');
			$this->admin->index();
		}
	}

	public function username_check($str)
	{
		if ($str != 'Administrator')
		{
			$this->form_validation->set_message('username_check','Invalid input.');
			return FALSE;
		}
		else if($str == '')
		{
			$this->form_validation->set_message('username_check', 'Enter username.');
			return FALSE;
		}
		else
			return TRUE;
	}

	public function password_check($str)
	{
		if($str != 'password')
		{
			$this->form_validation->set_message('password_check', 'Invalid input.');
			return FALSE;
		}
		else if($str == '')
		{
			$this->form_validation->set_message('password_check', 'Enter password.');
			return FALSE;
		}
		else
			return TRUE;
	}

	public	function __construct()
	{
	    parent::__construct(); // Don't forget to call the parent constructor in this method

	    // Now we can easily load our desired stuff
	    $this->load->helper('url');
>>>>>>> Added Necessary Files
	}
}