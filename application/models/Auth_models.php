<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_models extends CI_Model
{
  public function registration($data)
  {
    $this->db->insert('user', $data);
    return redirect('auth');
  }

  public function login($data)
  {
    $user = $this->db->get_where('user', ['email' => $data['email']])->row_array();

    if ($user) {
      if (password_verify($data['password'], $user['password'])) {
        $data = [
          'email' => $user['email'],
          'nama'  => $user['nama']
        ];
        $this->session->set_userdata($data);

        return redirect('home');
      } else {
        echo "PASSWORD GAK COCOK!";
        return;
      }
    } else {
      echo "DATA GAADA";
      return;
    }
  }
}
