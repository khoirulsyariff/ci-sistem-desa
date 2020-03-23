<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_skck extends CI_Model
{
    public function pejabat()
    {
        return $this->db->query("SELECT * FROM pejabat")->result();
    }
    public function daftar_skck()
    {
        $this->db->from('skck');
        $this->db->join('penduduk', 'skck.nik=penduduk.nik');
        $this->db->join('pejabat', 'skck.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->result();
    }

    public function tambah_skck($data)
    {
        return $this->db->insert('skck', $data);
    }

    public function edit_skck($id)
    {
        $this->db->where('id_skck', $id);
        return $this->db->get('skck')->row();
    }

    public function proses_edit_skck($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('skck', $data);
    }

    public function cetak_skck($id)
    {
        $this->db->from('skck');
        $this->db->where('id_skck', $id);
        $this->db->join('penduduk', 'skck.nik=penduduk.nik');
        $this->db->join('pejabat', 'skck.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->row();
    }

    public function hapus_skck($id)
    {
        $this->db->where('id_skck', $id);
        return $this->db->delete('skck');
    }
}