<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kematian extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login') == FALSE) {
			redirect(base_url("login"));
		}
		$this->load->model('m_kematian');
	}

	public function tampil()
	{
		$data['title'] = "Data Kematian - Desa Warung Bambu";
		$data['kematian'] = $this->m_kematian->tampil();

		$this->load->view('header', $data);
		$this->load->view('kematian/tampil_kematian');
		$this->load->view('footer');
	}
	public function tampil_kematian()
	{
		$data['title'] = "Data Kematian - Desa Warung Bambu";
		$data['kematian'] = $this->m_kematian->tampil();

		$this->load->view('header', $data);
		$this->load->view('kematian/tampil_kematian2');
		$this->load->view('footer');
	}
	public function tambah()
	{
		$data['title'] = "Tambah Kematian - Desa Warung Bambu";

		$this->load->view('header', $data);
		$this->load->view('kematian/tambah_kematian');
		$this->load->view('footer');
	}

	public function proses_tambah()
	{

		$id_kematian = $this->input->post('id_kematian');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$agama = $this->input->post('agama');
		$pekerjaan = $this->input->post('pekerjaan');
		$alamat = $this->input->post('alamat');
		$rt = $this->input->post('rt');
		$rw = $this->input->post('rw');
		$hari_wafat = $this->input->post('hari_wafat');
		$tanggal_wafat = $this->input->post('tanggal_wafat');
		$pukul = $this->input->post('pukul');

		$data = array(
			'nama' => ucwords($nama),
			'jenis_kelamin' => $jenis_kelamin,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'alamat' => $alamat,
			'rt' => $rt,
			'rw' => $rw,
			'hari_wafat' => $hari_wafat,
			'tanggal_wafat' => $tanggal_wafat,
			'pukul' => $pukul,
		);
		$this->m_kematian->tambah($data);

		$this->session->set_flashdata('sukses', 'Data dengan ID ' . $id_kematian . ' berhasil ditambahkan.');
		redirect(base_url('kematian/tampil'));
	}

	public function edit($id_kematian)
	{
		$data['title'] = "Edit kematian - Desa Warung Bambu";
		$data['kematian'] = $this->m_kematian->edit($id_kematian);

		$this->load->view('header', $data);
		$this->load->view('kematian/edit_kematian');
		$this->load->view('footer');
	}

	public function proses_edit()
	{
		$data = array(

			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'agama' => $this->input->post('agama'),
			'pekerjaan' => $this->input->post('pekerjaan'),
			'alamat' => $this->input->post('alamat'),
			'rt' => $this->input->post('rt'),
			'rw' => $this->input->post('rw'),
			'hari_wafat' => $this->input->post('hari_wafat'),
			'tanggal_wafat' => $this->input->post('tanggal_wafat'),
			'pukul' => $this->input->post('pukul'),
		);
		$where = array(
			'id_kematian' => $this->input->post('id'),
		);
		$this->m_kematian->proses_edit($where, $data);

		$this->session->set_flashdata('sukses', 'Data berhasil diedit.');
		redirect(base_url('kematian/tampil/'));
	}

	public function hapus($id_kematian)
	{
		$this->m_kematian->hapus($id_kematian);
		$this->session->set_flashdata('sukses', 'Data dengan ID ' . $id_kematian . ' berhasil dihapus.');
		redirect(base_url('kematian/tampil'));
	}

	public function detail($id_kematian)
	{
		$this->load->model('m_kematian');
		$detail = $this->m_kematian->detail($id_kematian);
		$data['detail'] = $detail;
		$this->load->view('header', $data);
		$this->load->view('kematian/detail_kematian', $data);
		$this->load->view('footer');
	}
}