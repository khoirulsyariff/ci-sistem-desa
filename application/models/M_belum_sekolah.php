<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_belum_sekolah extends CI_Model
{
    public function pejabat()
    {
        return $this->db->query("SELECT * FROM pejabat")->result();
    }
    public function daftar_belum_sekolah()
    {
        $this->db->from('belum_sekolah');
        $this->db->join('penduduk', 'belum_sekolah.nik=penduduk.nik');
        $this->db->join('pejabat', 'belum_sekolah.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->result();
    }

    public function tambah_belum_sekolah($data)
    {
        return $this->db->insert('belum_sekolah', $data);
    }

    public function edit_belum_sekolah($id)
    {
        $this->db->where('id_belum_sekolah', $id);
        return $this->db->get('belum_sekolah')->row();
    }

    public function cetak_belum_sekolah($id)
    {
        $this->db->from('belum_sekolah');
        $this->db->where('id_belum_sekolah', $id);
        $this->db->join('penduduk', 'belum_sekolah.nik=penduduk.nik');
        $this->db->join('pejabat', 'belum_sekolah.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->row();
    }

    public function proses_edit_belum_sekolah($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('belum_sekolah', $data);
    }

    public function hapus_belum_sekolah($id)
    {
        $this->db->where('id_belum_sekolah', $id);
        return $this->db->delete('belum_sekolah');
    }
}