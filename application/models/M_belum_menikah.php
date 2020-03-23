<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_belum_menikah extends CI_Model
{
    public function pejabat()
    {
        return $this->db->query("SELECT * FROM pejabat")->result();
    }
    public function daftar_belum_menikah()
    {
        $this->db->from('belum_menikah');
        $this->db->join('penduduk', 'belum_menikah.nik=penduduk.nik');
        $this->db->join('pejabat', 'belum_menikah.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->result();
    }

    public function tambah_belum_menikah($data)
    {
        return $this->db->insert('belum_menikah', $data);
    }

    public function edit_belum_menikah($id)
    {
        $this->db->where('id_belum_menikah', $id);
        return $this->db->get('belum_menikah')->row();
    }

    public function proses_edit_belum_menikah($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('belum_menikah', $data);
    }

    public function cetak_belum_menikah($id)
    {
        $this->db->from('belum_menikah');
        $this->db->where('id_belum_menikah', $id);
        $this->db->join('penduduk', 'belum_menikah.nik=penduduk.nik');
        $this->db->join('pejabat', 'belum_menikah.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->row();
    }

    public function hapus_belum_menikah($id)
    {
        $this->db->where('id_belum_menikah', $id);
        return $this->db->delete('belum_menikah');
    }
}