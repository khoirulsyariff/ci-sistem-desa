<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_sktm_kesehatan extends CI_Model
{
    public function pejabat()
    {
        return $this->db->query("SELECT * FROM pejabat")->result();
    }
    public function daftar_sktm_kesehatan()
    {
        $this->db->from('sktm_kesehatan');
        $this->db->join('penduduk', 'sktm_kesehatan.nik_anak=penduduk.nik');
        $this->db->join('pejabat', 'sktm_kesehatan.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->result();
    }

    public function tambah_sktm_kesehatan($data)
    {
        return $this->db->insert('sktm_kesehatan', $data);
    }

    public function edit_sktm_kesehatan($id)
    {
        $this->db->where('id_sktm_kesehatan', $id);
        return $this->db->get('sktm_kesehatan')->row();
    }

    public function cetak_sktm_kesehatan($id)
    {
        $this->db->from('sktm_kesehatan');
        $this->db->where('id_sktm_kesehatan', $id);
        $this->db->join('penduduk', 'sktm_kesehatan.nik_anak=penduduk.nik');
        $this->db->join('pejabat', 'sktm_kesehatan.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->row();
    }

    public function proses_edit_sktm_kesehatan($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('sktm_kesehatan', $data);
    }

    public function hapus_sktm_kesehatan($id)
    {
        $this->db->where('id_sktm_kesehatan', $id);
        return $this->db->delete('sktm_kesehatan');
    }
}