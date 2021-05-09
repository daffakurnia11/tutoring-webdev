<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('auth_models', 'auth');
  }

  public function register()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]');
    $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('auth/register');
    } else {
      $data = [
        'nama'      => $this->input->post('nama'),
        'email'     => $this->input->post('email'),
        'password'  => password_hash($this->input->post('password1'), PASSWORD_DEFAULT)
      ];
      $this->auth->registration($data);
    }
  }
}
