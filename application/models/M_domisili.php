<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_domisili extends CI_Model
{
    public function pejabat()
    {
        return $this->db->query("SELECT * FROM pejabat")->result();
    }
    public function daftar_domisili()
    {
        $this->db->from('domisili');
        $this->db->join('penduduk', 'domisili.nik=penduduk.nik');
        $this->db->join('pejabat', 'domisili.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->result();
    }

    public function tambah_domisili($data)
    {
        return $this->db->insert('domisili', $data);
    }

    public function edit_domisili($id)
    {
        $this->db->where('id_domisili', $id);
        return $this->db->get('domisili')->row();
    }

    public function cetak_domisili($id)
    {
        $this->db->from('domisili');
        $this->db->where('id_domisili', $id);
        $this->db->join('penduduk', 'domisili.nik=penduduk.nik');
        $this->db->join('pejabat', 'domisili.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->row();
    }

    public function proses_edit_domisili($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('domisili', $data);
    }

    public function hapus_domisili($id)
    {
        $this->db->where('id_domisili', $id);
        return $this->db->delete('domisili');
    }
}