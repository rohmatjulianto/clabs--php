<?php
class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->view("Back/Admin_home");
    }

    public function login()
    {
        $this->load->view("Back/Admin_login");
    }
}

?>