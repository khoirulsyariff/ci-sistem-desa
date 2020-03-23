<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_haji extends CI_Model
{
    public function pejabat()
    {
        return $this->db->query("SELECT * FROM pejabat")->result();
    }
    public function daftar_haji()
    {
        $this->db->from('haji');
        $this->db->join('penduduk', 'haji.nik=penduduk.nik');
        $this->db->join('pejabat', 'haji.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->result();
    }

    public function tambah_haji($data)
    {
        return $this->db->insert('haji', $data);
    }

    public function edit_haji($id)
    {
        $this->db->where('id_haji', $id);
        return $this->db->get('haji')->row();
    }

    public function proses_edit_haji($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('haji', $data);
    }

    public function cetak_haji($id)
    {
        $this->db->from('haji');
        $this->db->where('id_haji', $id);
        $this->db->join('penduduk', 'haji.nik=penduduk.nik');
        $this->db->join('pejabat', 'haji.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->row();
    }

    public function hapus_haji($id)
    {
        $this->db->where('id_haji', $id);
        return $this->db->delete('haji');
    }
}