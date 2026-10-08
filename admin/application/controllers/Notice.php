<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Notice extends MY_Controller {
     public function __construct(){
        parent::__construct();
        $this->load->model('Notice_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('upload');
        islogin();
    
    }

    public function index()
    {
       $data['title'] = 'Notice Board';
       
        $this->load->view('template/header');
        $this->load->view('Notice_view', $data);
        $this->load->view('template/footer');
    }
    


    /* Brilliants panel starts from here */


        public function blog()
    {
        $data['title'] = 'Add your post here';

                        
        $this->load->view('template/header');
        $this->load->view('blog', $data);
        $this->load->view('template/footer');
    }


     public function addnotice()
    {
        $this->load->model('Notice_model');

        $data['title'] = 'Add your Notice here';

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');      

        $this->form_validation->set_rules('title', 'Title', 'required');
        
        $this->form_validation->set_rules('description', 'Description', 'required');

        if ($this->form_validation->run() == FALSE)
        {
           /*echo "Validation Fail!";*/

        }
        else
        {
            $this->load->model('Notice_model');


            $this->load->helper(array('form', 'url'));
            $this->Notice_model->addnotice($data);
            
               
            $this->load->view('template/header');
            $this->load->view('facilities_view', $data);
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
        $this->load->view('facilities_view', $data);
        $this->load->view('template/footer');
        
        } else {

            $uploadData = $this->upload->data();
            $picture = $uploadData['file_name'];

            $data['title'] = 'Image added successfully';

        
            $this->load->model('Facilities_model');


            $this->load->helper(array('form', 'url'));
                $this->Facilities_model->addimages($data);

            $this->load->view('template/header');
            $this->load->view('facilities_view', $data);
            $this->load->view('template/footer');

    }
}



        public function editachievement($id)
        {

        $this->load->model('Achievement_model');

        $data['title'] = 'Edit your Achievement!';

        
        $this->load->helper(array('form', 'url'));
        
        $data['posts'] = $this->Achievement_model->editachievement($id);



        $this->load->view('template/header');
        $this->load->view('achievement_edit_view', $data);
        $this->load->view('template/footer');

       
            
        }

        public function delete_notice($id)
    {

        $this->Notice_model->delete_notice($id); 

         redirect('Notice/index');

        
    }


    public function updateachievement($id)
        {

        $this->load->model('Achievement_model');

        $data['title'] = 'Edit your Achievement here';

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');      

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('slug', 'Slug', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');

        $this->form_validation->set_rules('image', 'Image');

        if ($this->form_validation->run() == FALSE)
        {
            
            $this->load->view('template/header');
            $this->load->view('achievement_edit_view', $data);
            $this->load->view('template/footer');
        }
        else
        {
            $this->load->model('Achievement_model');


            $this->load->helper(array('form', 'url'));

        $data['upload_path'] = './uploads/';
        $data['allowed_types'] ='jpg|png|gif|JPG|PNG|GIF';
        $data['max_size'] = 0;
        $data['max_width'] =0;
        $data['max_height'] =0;
        $data['file_name'] = rand(100,999);
        $data['overwrite'] =TRUE;

        
        $this->load->library('upload', $data);
        $this->upload->initialize($data);        

        
        
        if(!$this->upload->do_upload('image')) {

        echo $this->upload->display_errors(); 
 
        } else {


            $uploadData = $this->upload->data();
            $picture = $uploadData['file_name'];

        
            $this->load->model('Achievement_model');


            $this->load->helper(array('form', 'url'));
            $this->Achievement_model->updateachievement($id);

               redirect('Achievement/index');

    }
        }


}



    /* Brilliants panel ends here */

    
}
