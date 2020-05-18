<?php

class Registration extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('registration_model');
    }

    public function index()
    {
        $this->load->view("registration_view");
    }

    public function register()
    {
        $fullname = $this->input->post('fullname', true);
        $email    = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);
        $password2 = $this->input->post('password2', TRUE);

        if ($password == $password2) {
            $epass = password_hash($password, PASSWORD_DEFAULT);
            $data = [
                'user_fullname' => $fullname,
                'user_email'  => $email,
                'user_password'  => $epass
            ];

            $this->registration_model->register_user($data);
        } else {
            echo $this->session->set_flashdata('msg', 'Password did not match');
        }
    }
}

/* End of file Registration.php */
