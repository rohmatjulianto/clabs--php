<?php

class CHome extends CI_Controller{
 
    public function index(Type $var = null)
    {
        $this->load->view('front/home');
    }
}
?>