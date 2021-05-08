<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Model
{
  public function all_data()
  {
    return $this->db->get('mahasiswa')->result_array();
  }

  public function get_data($id)
  {
    return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
  }
}
