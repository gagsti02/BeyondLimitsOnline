<?php

class User_model extends CI_Model
{
    function return_users()
    {
        $query = $this->db->get("user");
        // echo "<pre>";
        // print_r($query->result_array());
        // echo "</pre>";
        return $query->result();
    }
}
