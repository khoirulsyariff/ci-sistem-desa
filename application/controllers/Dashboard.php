<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('login') == FALSE) {
			redirect(base_url("login"));
		}
	}

	public function index() {
		$data['title'] = "Dashboard - Desa Warung Bambu";

		$this->load->view('header', $data);
		$this->load->view('dashboard');
		$this->load->view('footer', $data);
	}
}
