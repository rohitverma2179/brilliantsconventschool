<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Academics extends MY_Controller {
     public function __construct(){
        parent::__construct();
        $this->load->model('Academics_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('upload');
        islogin();
    
    }

    public function index()
    {
       $data['title'] = 'Academic Pages';
       
        $this->load->view('template/header');
        $this->load->view('Academics_view', $data);
        $this->load->view('template/footer');
    }
    
     public function calendar()
    {
       $data['title'] = 'Academic Pages';
       
        $this->load->view('template/header');
        $this->load->view('Calendar_view', $data);
        $this->load->view('template/footer');
    }

    public function bcsjunior()
    {
       $data['title'] = 'Academic Pages';
       
        $this->load->view('template/header');
        $this->load->view('bcsjunior', $data);
        $this->load->view('template/footer');
    }

    public function curriculum()
    {
       $data['title'] = 'Academic Pages';
       
        $this->load->view('template/header');
        $this->load->view('curriculum', $data);
        $this->load->view('template/footer');
    }
    
     public function results()
    {
       $data['title'] = 'Academic Pages';
       
        $this->load->view('template/header');
        $this->load->view('results', $data);
        $this->load->view('template/footer');
    }
    

     public function nurserysyllabus()
    {
       $data['title'] = 'Academic Pages';
       
        $this->load->view('template/header');
        $this->load->view('nurserysyllabus', $data);
        $this->load->view('template/footer');
    }


    
     public function syllabus()
    {
       $data['title'] = 'Academic Pages';
       
        $this->load->view('template/header');
        $this->load->view('syllabus', $data);
        $this->load->view('template/footer');
    }


     public function handbook()
    {
       $data['title'] = 'Academic Pages';
       
        $this->load->view('template/header');
        $this->load->view('handbook', $data);
        $this->load->view('template/footer');
    }


     public function examschedule()
    {
       $data['title'] = 'Academic Pages';
       
        $this->load->view('template/header');
        $this->load->view('examschedule', $data);
        $this->load->view('template/footer');
    }
    public function slc()
    {
       $data['title'] = 'Academic Pages';
       
        $this->load->view('template/header');
        $this->load->view('slc', $data);
        $this->load->view('template/footer');
    }
     
     public function homework()
    {
       $data['title'] = 'Academic Pages';
       
        $this->load->view('template/header');
        $this->load->view('homework', $data);
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


     public function addevents()
    {
        $this->load->model('Academics_model');

        $data['title'] = 'Add your events';

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');      

        $this->form_validation->set_rules('title', 'Title', 'required');
        
        $this->form_validation->set_rules('sdate', 'Start Date', 'required');

        $this->form_validation->set_rules('edate', 'End Date', 'required');

        if ($this->form_validation->run() == FALSE)
        {
           /*echo "Validation Fail!";*/

        }
        else
        {
            $this->load->model('Academics_model');


            $this->load->helper(array('form', 'url'));
            $this->Academics_model->addevents($data);
            
               
            $this->load->view('template/header');
            $this->load->view('Calendar_view', $data);
            $this->load->view('template/footer');

        }

    }


   public function addbcsaimages()
    {
        $this->load->model('Academics_model');

        $data['title'] = 'Add your images here';

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');      
        
        $this->form_validation->set_rules('image', 'Image', 'required|callback_do_upload');

        if ($this->form_validation->run() == FALSE)
        {
           /*echo "Validation Fail!";*/

        }
        else
        {
            $this->load->model('Facilities_model');


            $this->load->helper(array('form', 'url'));
            $this->home_model->addachievement($data);
            
               
            $this->load->view('template/header');
            $this->load->view('bcsjunior', $data);
            $this->load->view('template/footer');

        }

    }

 


    public function do_upload()
    {

        $data['upload_path'] = '../images/bcs-juniors/';
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

        
            $this->load->model('Academics_model');


            $this->load->helper(array('form', 'url'));
                $this->Academics_model->addbcsimages($data);

            $this->load->view('template/header');
            $this->load->view('bcsjunior', $data);
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



 public function delete_events($id)
    {

        $this->Academics_model->delete_events($id); 

         redirect('Academics/calendar');

        
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
