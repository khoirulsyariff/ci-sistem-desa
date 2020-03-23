<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_cerai_mati extends CI_Model
{
    public function pejabat()
    {
        return $this->db->query("SELECT * FROM pejabat")->result();
    }

    public function daftar_cerai_mati()
    {
        $this->db->from('cerai_mati');
        $this->db->join('penduduk', 'cerai_mati.nik=penduduk.nik');
        $this->db->join('pejabat', 'cerai_mati.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->result();
    }

    public function tambah_cerai_mati($data)
    {
        return $this->db->insert('cerai_mati', $data);
    }

    public function edit_cerai_mati($id)
    {
        $this->db->where('id_cerai_mati', $id);
        return $this->db->get('cerai_mati')->row();
    }

    public function cetak_cerai_mati($id)
    {
        $this->db->from('cerai_mati');
        $this->db->where('id_cerai_mati', $id);
        $this->db->join('penduduk', 'cerai_mati.nik=penduduk.nik');
        $this->db->join('pejabat', 'cerai_mati.id_pejabat=pejabat.id_pejabat');
        return $this->db->get()->row();
    }

    public function proses_edit_cerai_mati($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('cerai_mati', $data);
    }

    public function hapus_cerai_mati($id)
    {
        $this->db->where('id_cerai_mati', $id);
        return $this->db->delete('cerai_mati');
    }
}