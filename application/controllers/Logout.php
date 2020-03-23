<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('login') == FALSE) {
			redirect(base_url("login"));
		}
	}

	public function index() {
		$this->session->sess_destroy();
		redirect(base_url('/login'));
	}
}
