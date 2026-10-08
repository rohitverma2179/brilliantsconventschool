<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Club extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('gallery_model');
         $this->load->model('Achievement_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('upload');
        islogin();
    
    }


    public function index()
    {   
        $this->load->view('template/header');
        $this->load->view('club');
        $this->load->view('template/footer');
    }

    public function addclub()
    {   
        $this->load->view('template/header');
        $this->load->view('addclub');
        $this->load->view('template/footer');
    }

   public function editclub()
    {   

         $id = $this->uri->segment(3);
        $data['name'] = $this->gallery_model->clubname($id);

        $this->load->view('template/header');
        $this->load->view('editclub', $data);
        $this->load->view('template/footer');
    }

   public function addclubimages()
    {   
        $this->load->view('template/header');
        $this->load->view('addclubimages');
        $this->load->view('template/footer');
    }
    
    public function addgallery()
    {   

        $data = '';
        
        $this->load->model('gallery_model');

        $data = $this->gallery_model->addgallery($data);

        $this->load->view('template/header');
        $this->load->view('gallery', $data);
        $this->load->view('template/footer');
    }


    

     public function addclubimage()
    {
        $this->load->model('Gallery_model');

        
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');      
        $this->form_validation->set_rules('clubid', 'Club Id', 'required'); 
        $this->form_validation->set_rules('image', 'Image', 'required|callback_do_upload');

        if ($this->form_validation->run() == FALSE)
        {
           /*echo "Validation Fail!";*/

        }
        else
        {
            $this->load->model('Gallery_model');


            $this->load->helper(array('form', 'url'));
            $this->Gallery_model->addclubimage($data);
            
               
            $this->load->view('template/header');
            $this->load->view('editclub', $data);
            $this->load->view('template/footer');

        }

    }




    public function do_upload()
    {

        $data['upload_path'] = '../images/';
        $data['allowed_types'] ='jpg|png|gif|JPG|PNG|GIF';
        $data['max_size'] = 0;
        $data['max_width'] =0;
        $data['max_height'] =0;
        $data['file_name'] = rand(100,999);
        $data['overwrite'] =TRUE;


        $this->upload->initialize($data);
        
        $this->load->library('upload', $data);
        if(!$this->upload->do_upload('image')) {

        $data['title'] =$this->upload->display_errors();       

        $this->load->view('template/header');
        $this->load->view('editclub', $data);
        $this->load->view('template/footer');
        
        } else {

            $uploadData = $this->upload->data();
            $picture = 'images/'.$uploadData['file_name'];

             $id = $this->uri->segment(3);
        $data['name'] = $this->gallery_model->clubname($id);
            $this->load->model('Gallery_model');


            $this->load->helper(array('form', 'url'));
            $this->Gallery_model->addclubimage($data);

            redirect('Club/index');

    }
}
 
    
        public function delete($id)
    {

        $this->Achievement_model->delete($id); 

         redirect('Club/index');

        
    }

     
    

}
