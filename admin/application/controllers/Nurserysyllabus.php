<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Nurserysyllabus extends MY_Controller {
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
        $this->load->view('nurserysyllabus', $data);
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


     public function addsyllabus()
    {
        $this->load->model('Academics_model');

        $data['title'] = 'Add your post here';

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');      

        $this->form_validation->set_rules('class', 'Class', 'required');

        $this->form_validation->set_rules('month', 'Month', 'required');
        
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
            $this->load->view('facilities_view', $data);
            $this->load->view('template/footer');

        }

    }




    public function do_upload()
    {

        $data['upload_path'] = '../pdf/';
        $data['allowed_types'] ='jpg|png|gif|JPG|PNG|GIF|pdf';
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

            $data['title'] = 'Syllabus uploaded successfully';

        
            $this->load->model('Academics_model');


            $this->load->helper(array('form', 'url'));
                $this->Academics_model->addsyllabus($data);

            $this->load->view('template/header');
            $this->load->view('nurserysyllabus', $data);
            $this->load->view('template/footer');

    }
}



        public function editsyllabus($id)
        {

        $this->load->model('Academics_model');

        $data['title'] = 'Edit your syllabus!';

        
        $this->load->helper(array('form', 'url'));
        
        $data['posts'] = $this->Academics_model->editsyllabus($id);



        $this->load->view('template/header');
        $this->load->view('syllabusedit', $data);
        $this->load->view('template/footer');

       
            
        }

        public function delete_syllabus($id)
    {

        $this->Academics_model->delete_syllabus($id); 

         redirect('Nurserysyllabus/index');

        
    }


    public function updatesyllabus($id)
        {

        $this->load->model('Academics_model');

        $data['title'] = 'Edit your Syllabus here';

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');      

        $this->form_validation->set_rules('class', 'Class', 'required');
        $this->form_validation->set_rules('month', 'Month', 'required');
       
        $this->form_validation->set_rules('image', 'Image');

        if ($this->form_validation->run() == FALSE)
        {
            
            $this->load->view('template/header');
            $this->load->view('achievement_edit_view', $data);
            $this->load->view('template/footer');
        }
        else
        {
            $this->load->model('Academics_model');


            $this->load->helper(array('form', 'url'));

        $data['upload_path'] = '../pdf/';
        $data['allowed_types'] ='jpg|png|gif|JPG|PNG|GIF|pdf';
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

        
            $this->load->model('Academics_model');


            $this->load->helper(array('form', 'url'));
            $this->Academics_model->updatesyllabus($id);

               redirect('Nurserysyllabus/index');

    }
        }


}



    /* Brilliants panel ends here */

    
}
