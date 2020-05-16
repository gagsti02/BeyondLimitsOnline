<?php
defined('BASEPATH') or exit('No direct script access allowed');
class My_controller extends CI_Controller
{
    public function Index()
    {
        //     $this->load->model("user_model","usermodel");
        //     $firstname = $this->usermodel;
        //    echo $firstname;
        //$this->load->view("user_view");
        $this->load->library("form_validation");

        $this->load->model("user_model");
        $data['userArray'] = $this->user_model->return_users();
        $this->load->view('user_view', $data);
    }
}
