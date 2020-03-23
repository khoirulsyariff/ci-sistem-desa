<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengaturan extends CI_Model {
	public function tampil() {
		return $this->db->get('pejabat')->result();
	}

	public function edit($id) {
		$this->db->where('id_pejabat', $id);
		return $this->db->get('pejabat')->row();
	}

	public function proses_edit($where, $data) {
		$this->db->where($where);
		return $this->db->update('pejabat', $data);
	}
}
