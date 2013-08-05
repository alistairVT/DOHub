<?php
class View_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('view_model');
	}

	public function index(){
		//default
	}

	public function MPAdmin() {	
		$data["offenses"] = $this->view_model->Viewoffenses();
		$data["students"] = $this->view_model->Viewstudents();
		$this->load->view('admin.php', $data);
	}

	public function registerStudent() {
		$this->view_model->RegisterStudent();	
	}

	public function registerDO() {
		$this->view_model->RegisterDO();
	}

	public function DemoGraphProf() {
		$this->view_model->DemoGraphProf();
	}

	public function MPDOfficer() {
		$this->load->view('dofficer.php');	
	}
}
?>