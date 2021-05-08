<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function index()
  {
    $this->load->view('home/templates/header');
    $this->load->view('home/index');
    $this->load->view('home/templates/footer');
  }

  public function anggota()
  {
    $this->load->view('home/templates/header');
    $this->load->view('home/anggota');
    $this->load->view('home/templates/footer');
  }

  public function blog()
  {
    $this->load->view('home/templates/header');
    $this->load->view('home/blog');
    $this->load->view('home/templates/footer');
  }
}
