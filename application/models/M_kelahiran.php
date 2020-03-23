<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kelahiran extends CI_Model
{
	public function tampil()
	{
		return $this->db->get('kelahiran')->result();
	}

	public function cari($id_kelahiran)
	{
		$this->db->where('id_kelahiran', $id_kelahiran);
		$query = $this->db->get('kelahiran');
		if ($query->num_rows() > 0) {
			return false;
		} else {
			return true;
		}
	}

	public function tambah($data)
	{
		return $this->db->insert('kelahiran', $data);
	}

	public function edit($id)
	{
		$this->db->where('id_kelahiran', $id);
		return $this->db->get('kelahiran')->row();
	}

	public function proses_edit($where, $data)
	{
		$this->db->where($where);
		return $this->db->update('kelahiran', $data);
	}

	public function hapus($id_kelahiran)
	{
		$this->db->where('id_kelahiran', $id_kelahiran);
		return $this->db->delete('kelahiran');
	}
	public function detail($id_kelahiran = NULL)
	{
		$query = $this->db->get_where('kelahiran', array('id_kelahiran' => $id_kelahiran))->row();
		return $query;
	}
}