<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_penduduk extends CI_Model
{
	public function tampil()
	{
		return $this->db->get('penduduk')->result();
	}

	public function cari($nik)
	{
		$this->db->where('nik', $nik);
		$query = $this->db->get('penduduk');
		if ($query->num_rows() > 0) {
			return false;
		} else {
			return true;
		}
	}

	public function tambah($data)
	{
		return $this->db->insert('penduduk', $data);
	}

	public function edit($nik)
	{
		$this->db->where('nik', $nik);
		return $this->db->get('penduduk')->row();
	}

	public function proses_edit($where, $data)
	{
		$this->db->where($where);
		return $this->db->update('penduduk', $data);
	}

	public function hapus($nik)
	{
		$this->db->where('nik', $nik);
		return $this->db->delete('penduduk');
	}
	public function detail($nik = NULL)
	{
		$query = $this->db->get_where('penduduk', array('nik' => $nik))->row();
		return $query;
	}
}