<?php

class Feed_model extends CI_Model {
	public function showPost(){
		$var = $this->input->post("text");
		return $var;
	}
}