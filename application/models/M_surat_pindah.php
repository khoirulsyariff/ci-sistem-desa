<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_surat_pindah extends CI_Model
{
    public function pejabat()
    {
        return $this->db->query("SELECT * FROM pejabat")->result();
    }
    public function daftar_pindah()
    {
        $this->db->from('pindah');
        $this->db->join('penduduk', 'pindah.nik_kepala_keluarga=penduduk.nik');
        $this->db->join('pejabat', 'pindah.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->result();
    }

    public function tambah_pindah($data)
    {
        return $this->db->insert('pindah', $data);
    }

    public function edit_pindah($id)
    {
        $this->db->where('id_pindah', $id);
        return $this->db->get('pindah')->row();
    }

    public function cetak_pindah($id)
    {
        $this->db->from('pindah');
        $this->db->where('id_pindah', $id);
        $this->db->join('penduduk', 'pindah.nik_kepala_keluarga=penduduk.nik');
        $this->db->join('pejabat', 'pindah.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->row();
    }

    public function proses_edit_pindah($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('pindah', $data);
    }

    public function hapus_pindah($id)
    {
        $this->db->where('id_pindah', $id);
        return $this->db->delete('pindah');
    }
}