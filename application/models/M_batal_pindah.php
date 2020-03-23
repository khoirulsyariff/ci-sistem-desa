<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_batal_pindah extends CI_Model
{
    public function pejabat()
    {
        return $this->db->query("SELECT * FROM pejabat")->result();
    }


    public function daftar_batal_pindah()
    {
        $this->db->from('batal_pindah');
        $this->db->join('penduduk', 'batal_pindah.nik=penduduk.nik');
        $this->db->join('pejabat', 'batal_pindah.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->result();
    }

    public function tambah_batal_pindah($data)
    {
        return $this->db->insert('batal_pindah', $data);
    }

    public function edit_batal_pindah($id)
    {
        $this->db->where('id_batal_pindah', $id);
        return $this->db->get('batal_pindah')->row();
    }

    public function proses_edit_batal_pindah($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('batal_pindah', $data);
    }

    public function cetak_batal_pindah($id)
    {
        $this->db->from('batal_pindah');
        $this->db->where('id_batal_pindah', $id);
        $this->db->join('penduduk', 'batal_pindah.nik=penduduk.nik');
        $this->db->join('pejabat', 'batal_pindah.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->row();
    }

    public function hapus_batal_pindah($id)
    {
        $this->db->where('id_batal_pindah', $id);
        return $this->db->delete('batal_pindah');
    }
}