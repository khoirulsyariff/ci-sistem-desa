<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_pengaturan');
	}

	public function index()
	{
		$data['title'] = "Pengaturan - Desa Warung Bambu";
		$data['pengaturan'] = $this->m_pengaturan->tampil();

		$mutasi = $this->load->view('header', $data);
		$this->load->view('pengaturan/tampil_pengaturan');
		$this->load->view('footer');
	}

	public function edit()
	{
		$data['title'] = "Edit Pengaturan - Desa Warung Bambu";
		$data['pengaturan'] = $this->m_pengaturan->edit($this->uri->segment(3));

		$this->load->view('header', $data);
		$this->load->view('pengaturan/edit_pengaturan');
		$this->load->view('footer');
	}

	public function proses_edit()
	{
		$data = array(
			'nama_pejabat' => $this->input->post('nama'),
			'nip_pejabat' => $this->input->post('nip'),
			'jabatan_pejabat' => $this->input->post('jabatan'),
		);
		$where = array(
			'id_pejabat' => $this->input->post('id'),
		);
		$this->m_pengaturan->proses_edit($where, $data);
		$this->session->set_flashdata('sukses', 'Data Dengan ID  berhasil diedit.');
		redirect(base_url('pengaturan/'));
	}
}