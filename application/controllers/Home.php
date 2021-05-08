<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function index()
  {
    // $data['title'] = 'Tutoring Roda';
    // $data['user'] = 'Qwerty';

    $data = [
      'title' => 'Tutoring Roda',
      'user'  => 'Daffa'
    ];

    $this->load->view('home/templates/header', $data);
    $this->load->view('home/index', $data);
    $this->load->view('home/templates/footer');
  }

  public function anggota()
  {
    // $data['title'] = 'Anggota Roda';
    $data = [
      'title' => 'Anggota Roda',
      'users' => $this->db->get('mahasiswa')->result_array()
    ];

    $this->load->view('home/templates/header', $data);
    $this->load->view('home/anggota', $data);
    $this->load->view('home/templates/footer');
  }

  public function blog()
  {
    $data['title'] = 'Blog Roda';

    $this->load->view('home/templates/header', $data);
    $this->load->view('home/blog');
    $this->load->view('home/templates/footer');
  }
}
