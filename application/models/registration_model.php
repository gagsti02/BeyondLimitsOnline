<?php


defined('BASEPATH') or exit('No direct script access allowed');

class registration_model extends CI_Model
{
    function register_user($arrayobj)
    {
        // $this->db->where('user_email',$email);
        // $this->db->where('user_password',$password);
        // $result = $this->db->get('tbl_users',1);
        $builder = $this->db->table('mytable');
        $builder->insert($arrayobj);
        return "Registered";
    }
}

/* End of file registration_model.php */
