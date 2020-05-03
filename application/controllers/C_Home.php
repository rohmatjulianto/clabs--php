<?php

class C_Home extends CI_Controller{
 
    public function index(Type $var = null)
    {
        $this->load->view('front/home');
    }
}
?>