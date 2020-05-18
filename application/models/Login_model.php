<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Login_model extends CI_Model
{

  function validate($email, $password)
  {
    $this->db->where('user_email', $email);
    $result = $this->db->get('tbl_users', 1);
    $data = $result->row_array();
    if (password_verify($password, $data['user_password'])) {
      return [$result,true];
    } else {
      return false;
    }
  }
}
