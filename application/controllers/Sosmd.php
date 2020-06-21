<?php
class Sosmd extends CI_Controller
{

    public function index()
    {
        $data['page'] = "Social Media";
        $data['sosmd'] = $this->db->get('sosmd')->result();
        $this->load->view("Back/Admin_sosmd", $data);
    }

    public function save()
    {
        $id = $this->input->post('id');
        $link = $this->input->post('link');

        foreach( $id as $key => $n ) {
            $query = $this->db->query('SELECT * FROM sosmd WHERE link="'.$link[$key].'"');
            if ($query->num_rows()) {
              
            } else {
               $this->db->where('id', $n);
               $this->db->set('link', $link[$key]);
               $status = $this->db->update('sosmd');
               if ($status) {
                   
               }
               
            }
            // print "The name is ".$n." and email is ".$link[$key].", thank you\n";
        }
        redirect('/index.php/Sosmd');
        
    }

    public function add()
    {

        $link = $this->input->post('link');
        $icon = $this->input->post('icon');

        $data = array(
            'icon' => $icon,
            'link' => $link
        );

       $status = $this->db->insert('sosmd', $data);

       if ($status) {
            redirect('/index.php/Sosmd');
       }
    }

    public function delete()
    {
        $id = $this->input->get('id');

        $this->db->where('id', $id);
        $status = $this->db->delete('sosmd');
        if ($status) {
            redirect('/index.php/Sosmd');
        }

    }

}

?>