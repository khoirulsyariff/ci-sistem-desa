<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_izin_keluarga extends CI_Model
{
    public function pejabat()
    {
        return $this->db->query("SELECT * FROM pejabat")->result();
    }
    public function daftar_izin_keluarga()
    {
        $this->db->from('izin_keluarga');
        $this->db->join('penduduk', 'izin_keluarga.nik_ayah=penduduk.nik');
        $this->db->join('pejabat', 'izin_keluarga.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->result();
    }

    public function tambah_izin_keluarga($data)
    {
        return $this->db->insert('izin_keluarga', $data);
    }

    public function edit_izin_keluarga($id)
    {
        $this->db->where('id_izin_keluarga', $id);
        return $this->db->get('izin_keluarga')->row();
    }

    public function proses_edit_izin_keluarga($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('izin_keluarga', $data);
    }

    public function cetak_izin_keluarga($id)
    {
        $this->db->from('izin_keluarga');
        $this->db->where('id_izin_keluarga', $id);
        $this->db->join('penduduk', 'izin_keluarga.nik_ayah=penduduk.nik');
        $this->db->join('pejabat', 'izin_keluarga.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->row();
    }

    public function hapus_izin_keluarga($id)
    {
        $this->db->where('id_izin_keluarga', $id);
        return $this->db->delete('izin_keluarga');
    }
}