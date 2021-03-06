<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    function index()
    {
        $this->load->view('login_view');
    }

    function auth()
    {
        $email    = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);
        $validate = $this->login_model->validate($email, $password);
        if ($validate[1]) {
            $data  = $validate[0]->row_array();
            $name  = $data['user_fullname'];
            $email = $data['user_email'];
            $level = $data['user_level'];
            $sesdata = array(
                'username'  => $name,
                'email'     => $email,
                'level'     => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            // access login for admin
            if ($level === '1') {
                redirect('page');

                // access login for staff
            } elseif ($level === '2') {
                redirect('page/staff');

                // access login for author
            } else {
                redirect('page/author');
            }
        } else {
            echo $this->session->set_flashdata('msg', 'E-mail or Password is Wrong');
            redirect('login');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
