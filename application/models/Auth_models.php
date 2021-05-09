<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_models extends CI_Model
{
  public function registration($data)
  {
    $this->db->insert('user', $data);
    return redirect('auth');
  }
}
