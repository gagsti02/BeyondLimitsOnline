<?php


defined('BASEPATH') or exit('No direct script access allowed');

class registration_model extends CI_Model
{
    function register_user($arrayobj)
    {
        $this->db->insert('tbl_users',$arrayobj);
        return "Registered";
    }
}

/* End of file registration_model.php */
