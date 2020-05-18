<?php

class User_model extends CI_Model
{
    function return_users()
    {
        $this->db->where("user_id",7);
        $query = $this->db->get("tbl_users");
        $result = $query->row_array();
        if (password_verify('120291',$result['user_password'])) {
            echo 'wow';
          } else {
            echo 'no';
          }


        // echo "<pre>";
        // print_r($result['user_password']);
        // echo "</pre>";

       // return $query->result();
    }
}
