<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_sktm_pendidikan extends CI_Model
{
    public function pejabat()
    {
        return $this->db->query("SELECT * FROM pejabat")->result();
    }
    public function daftar_sktm_pendidikan()
    {
        $this->db->from('sktm_pendidikan');
        $this->db->join('penduduk', 'sktm_pendidikan.nik_ayah=penduduk.nik');
        $this->db->join('pejabat', 'sktm_pendidikan.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->result();
    }

    public function tambah_sktm_pendidikan($data)
    {
        return $this->db->insert('sktm_pendidikan', $data);
    }

    public function edit_sktm_pendidikan($id)
    {
        $this->db->where('id_sktm_pendidikan', $id);
        return $this->db->get('sktm_pendidikan')->row();
    }

    public function proses_edit_sktm_pendidikan($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('sktm_pendidikan', $data);
    }

    public function cetak_sktm_pendidikan($id)
    {
        $this->db->from('sktm_pendidikan');
        $this->db->where('id_sktm_pendidikan', $id);
        $this->db->join('penduduk', 'sktm_pendidikan.nik_anak=penduduk.nik');
        $this->db->join('pejabat', 'sktm_pendidikan.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->row();
    }

    public function hapus_sktm_pendidikan($id)
    {
        $this->db->where('id_sktm_pendidikan', $id);
        return $this->db->delete('sktm_pendidikan');
    }
}