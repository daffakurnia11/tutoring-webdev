<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('anggota');
  }

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
      'users' => $this->anggota->all_data()
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

  public function detail($id)
  {
    $data = [
      'title' => 'Detail Roda',
      'user'  => $this->anggota->get_data($id)
    ];

    $this->load->view('home/templates/header', $data);
    $this->load->view('home/detail_anggota', $data);
    $this->load->view('home/templates/footer');
  }

  public function delete($id)
  {
    $this->anggota->delete_data($id);
  }
}
