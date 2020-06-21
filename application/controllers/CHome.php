<?php

class CHome extends CI_Controller{
 
    public function index()
    {
        $data['sosmd'] = $this->db->get('sosmd')->result();
        $this->load->view('front/home',$data);
    }

}
?>