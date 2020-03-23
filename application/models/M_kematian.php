<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kematian extends CI_Model
{
	public function tampil()
	{
		return $this->db->get('kematian')->result();
	}

	public function cari($id_kematian)
	{
		$this->db->where('id_kematian', $id_kematian);
		$query = $this->db->get('kematian');
		if ($query->num_rows() > 0) {
			return false;
		} else {
			return true;
		}
	}

	public function tambah($data)
	{
		return $this->db->insert('kematian', $data);
	}

	public function edit($id_kematian)
	{
		$this->db->where('id_kematian', $id_kematian);
		return $this->db->get('kematian')->row();
	}

	public function proses_edit($where, $data)
	{
		$this->db->where($where);
		return $this->db->update('kematian', $data);
	}

	public function hapus($id_kematian)
	{
		$this->db->where('id_kematian', $id_kematian);
		return $this->db->delete('kematian');
	}
	public function detail($id_kematian = NULL)
	{
		$query = $this->db->get_where('kematian', array('id_kematian' => $id_kematian))->row();
		return $query;
	}
}