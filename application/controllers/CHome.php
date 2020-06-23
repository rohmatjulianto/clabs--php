<?php

class CHome extends CI_Controller{
 
    public function index()
    {
        $data['banner'] = $this->db->query('SELECT * FROM `hpg_banner` ORDER BY order_by asc')->result();
        $data['sosmd'] = $this->db->get('sosmd')->result();
        $data['letstalk'] = $this->db->get('hpg_ltlk')->result();
        $data['service'] = $this->db->get('hpg_service')->result();
        $data['pricing'] = $this->db->get('hpg_pricing')->result();
        $this->load->view('front/home',$data);
    }

}
?>