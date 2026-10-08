<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Addimage extends MY_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('gallery_model');
		$this->load->helper(array('form', 'url'));
                $this->load->library('form_validation');
                $this->load->library('upload');
		islogin();
	
	}


    public function index()
    {   
        $this->load->view('template/header');
        $this->load->view('gallery');
        $this->load->view('template/footer');
    }
    

     public function addimages()
    {
        $this->load->model('gallery_model');

        
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');      
        $this->form_validation->set_rules('gallery_type_id', 'Gallery Type Id', 'required'); 
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('slug', 'Slug', 'required');

        $this->form_validation->set_rules('image', 'Image', 'required|callback_do_upload');

        if ($this->form_validation->run() == FALSE)
        {
           /*echo "Validation Fail!";*/

        }
        else
        {
            $this->load->model('gallery_model');


            $this->load->helper(array('form', 'url'));
            $this->gallery_model->addimages($data);
            
               
            $this->load->view('template/header');
            $this->load->view('blog', $data);
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
        $this->load->view('gallery', $data);
        $this->load->view('template/footer');
        
        } else {

            $uploadData = $this->upload->data();
            $picture = $uploadData['file_name'];

            
            $this->load->model('gallery_model');


            $this->load->helper(array('form', 'url'));
                $this->gallery_model->addimages($data);

            $this->load->view('template/header');
            $this->load->view('gallery', $data);
            $this->load->view('template/footer');

    }
}

    
    

}
