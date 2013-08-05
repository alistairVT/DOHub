<?php
class Feed extends CI_Controller{
	public function index()
	{
		$this->load->view('feed/home.php');
	}

	public function	post()
	{	$this->load->model('feed_model');
		$data['post'] = $this->feed_model->showPost();
		$this->load->view('feed/post.php', $data);

	}
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
}

