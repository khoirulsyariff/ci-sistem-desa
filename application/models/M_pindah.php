<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pindah extends CI_Model
{
    public function tampil()
    {
        return $this->db->get('pindahdatang')->result();
    }

    public function cari($nik)
    {
        $this->db->where('nik', $nik);
        $query = $this->db->get('pindahdatang');
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function tambah($data)
    {
        return $this->db->insert('pindahdatang', $data);
    }

    public function edit($nik)
    {
        $this->db->where('nik', $nik);
        return $this->db->get('pindahdatang')->row();
    }

    public function proses_edit($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('pindahdatang', $data);
    }

    public function hapus($nik)
    {
        $this->db->where('nik', $nik);
        return $this->db->delete('pindahdatang');
    }
    public function detail($nik = null)
    {
        $query = $this->db->get_where('pindahdatang', array('nik' => $nik))->row();
        return $query;
    }
}