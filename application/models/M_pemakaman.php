<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_pemakaman extends CI_Model
{
	public function pejabat()
	{
		return $this->db->query("SELECT * FROM pejabat")->result();
	}
	public function daftar_pemakaman()
	{
		$this->db->from('pemakaman');
		$this->db->join('penduduk', 'pemakaman.nik=penduduk.nik');
		$this->db->join('pejabat', 'pemakaman.id_pejabat=pejabat.id_pejabat');
		return $this->db->get()->result();
	}

	public function tambah_pemakaman($data)
	{
		return $this->db->insert('pemakaman', $data);
	}
	public function edit_pemakaman($id)
	{
		$this->db->where('id_pemakaman', $id);
		return $this->db->get('pemakaman')->row();
	}

	public function cetak_pemakaman($id)
	{
		$this->db->from('pemakaman');
		$this->db->where('id_pemakaman', $id);
		$this->db->join('penduduk', 'pemakaman.nik=penduduk.nik');
		$this->db->join('pejabat', 'pemakaman.id_pejabat=pejabat.id_pejabat');
		return $this->db->get()->row();
	}

	public function proses_edit_pemakaman($where, $data)
	{
		$this->db->where($where);
		return $this->db->update('pemakaman', $data);
	}

	public function hapus_pemakaman($id)
	{
		$this->db->where('id_pemakaman', $id);
		return $this->db->delete('pemakaman');
	}
}