<?php
class Hmpg extends CI_Controller
{
    public function index(Type $var = null)
    {
        # code...
    }
    public function letstalk()
    {
        if (isset($_POST['submit'])) {
            if($_FILES['image']['size'] != 0) {
                // No file was selected for upload, your (re)action goes here
                $config['upload_path']      = '././imagelets/';
                $config['allowed_types']    = 'gif|jpg|png|jpeg';
                $config['encrypt_name']     = TRUE;
    
                $this->load->library('upload', $config);
    
                if ( !$this->upload->do_upload('image'))
                {
                    $error = array('error' => $this->upload->display_errors());
                    printf($this->upload->display_errors());
                }

                $data = $this->upload->data();
                $image = $data['file_name'];
            }else{
                $image = $_POST['imgold'];
            }

                $id = $_POST['id'];
                $title =  $_POST['title'];
                $subtitle =  $_POST['subtitle'];

                $data = array(
                    'subtitle' => $subtitle,
                    'title' => $title,
                    'image' => $image
                );

                $this->db->where('id', $id);
                $this->db->set($data);
                $this->db->update('hpg_ltlk');
                
            
        }

        $data['page'] = "Home";
        $data['pagetree'] ="Let's Talk";
        $data['let'] = $this->db->get('hpg_ltlk')->result();
        $this->load->view('Back/Admin_letstalk',  $data);
    }

    public function pricing()
    {

        if (isset($_POST['submit'])) {

            $id = $_POST['id'];
            $title =  $_POST['title'];
            $subtitle =  $_POST['subtitle'];

            $data = array(
                'subtitle' => $subtitle,
                'title' => $title
            );

            $this->db->where('id', $id);
            $this->db->set($data);
            $this->db->update('hpg_pricing');
        }

        $data['page'] = "Home";
        $data['pagetree'] ="Pricing";
        $data['let'] = $this->db->get('hpg_pricing')->result();
        $this->load->view('Back/Admin_pricing',  $data);
    }

    public function service()
    {
        if (isset($_POST['submit'])) {

            $id = $_POST['id'];
            $title =  $_POST['title'];
            $subtitle =  $_POST['subtitle'];

            $data = array(
                'subtitle' => $subtitle,
                'title' => $title
            );

            $this->db->where('id', $id);
            $this->db->set($data);
            $this->db->update('hpg_service');
        }

        $data['page'] = "Home";
        $data['pagetree'] ="Our Service";
        $data['let'] = $this->db->get('hpg_service')->result();
        $this->load->view('Back/Admin_service',  $data);
    }

}

?>