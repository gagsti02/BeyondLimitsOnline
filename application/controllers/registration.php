<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller
{

    public function index()
    {
        $this->load->view("registration_view");
    }

    public function auth()
    {
        $fullname = $this->input->post('fullname', true);
        $email    = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);
        $password2 = $this->input->post('password2', TRUE);
    }
}

/* End of file Registration.php */
