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

  public function delete_data($id)
  {
    $this->db->delete('mahasiswa', ['id' => $id]);
    $this->session->set_flashdata('notifikasi', '<div class="alert alert-success" role="alert">Anggota telah dihapus</div>');
    return redirect('home/anggota');
  }

  public function insert_data($data)
  {
    $this->db->insert('mahasiswa', $data);
    $this->session->set_flashdata('notifikasi', '<div class="alert alert-success" role="alert">Anggota telah ditambah</div>');
    return redirect('home/anggota');
  }

  public function update_data($data, $id)
  {
    $this->db->where('id', $id);
    $this->db->update('mahasiswa', $data);
    $this->session->set_flashdata('notifikasi', '<div class="alert alert-success" role="alert">Anggota telah diubah</div>');
    return redirect('home/anggota');
  }
}
