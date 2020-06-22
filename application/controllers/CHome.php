<?php

class CHome extends CI_Controller{
 
    public function index()
    {
        $data['sosmd'] = $this->db->get('sosmd')->result();
        $data['letstalk'] = $this->db->get('hpg_ltlk')->result();
        $data['service'] = $this->db->get('hpg_service')->result();
        $data['pricing'] = $this->db->get('hpg_pricing')->result();
        $this->load->view('front/home',$data);
    }

}
?>