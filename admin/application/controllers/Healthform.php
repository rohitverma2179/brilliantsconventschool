<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Healthform extends MY_Controller {
     public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('upload');
		islogin();
	
	}

	public function index()
	{
       
       
        $this->load->view('template/header');
		$this->load->view('dashboard');
		$this->load->view('template/footer');
	}
	
	public function policy()
	{
       
        $data['data'] = $this->home_model->select();  
        $this->load->view('template/header');
		$this->load->view('policy', $data);
		$this->load->view('template/footer');
	}
	
	
	public function logout()
	{
	    $this->session->sess_destroy();
        redirect('user/login');
	}
	





	/* Brilliants panel starts from here */


		public function blog()
	{
		$data['title'] = 'Add your post here';

                        
        $this->load->view('template/header');
		$this->load->view('blog', $data);
		$this->load->view('template/footer');
	}


	 public function addpost()
    {
        $this->load->model('home_model');

        $data['title'] = 'Add your post here';

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');      

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('slug', 'Slug', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');

        $this->form_validation->set_rules('image', 'Image', 'required|callback_do_upload');

        if ($this->form_validation->run() == FALSE)
        {
           /*echo "Validation Fail!";*/

        }
        else
        {
            $this->load->model('home_model');


            $this->load->helper(array('form', 'url'));
            $this->home_model->addpost($data);
            
               
            $this->load->view('template/header');
            $this->load->view('blog', $data);
            $this->load->view('template/footer');

        }

    }




    public function do_upload()
    {

        $data['upload_path'] = './uploads/';
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
        $this->load->view('blog', $data);
        $this->load->view('template/footer');
        
        } else {

            $uploadData = $this->upload->data();
            $picture = $uploadData['file_name'];

            $data['title'] = 'Post added successfully';

        
            $this->load->model('home_model');


            $this->load->helper(array('form', 'url'));
                $this->home_model->addpost($data);

            $this->load->view('template/header');
            $this->load->view('blog', $data);
            $this->load->view('template/footer');

    }
}



        public function edit($id)
        {

        $this->load->model('home_model');

        $data['title'] = 'Edit your post!';

        
        $this->load->helper(array('form', 'url'));
        
        $data['posts'] = $this->home_model->editposts($id);



        $this->load->view('template/header');
        $this->load->view('edit_view', $data);
        $this->load->view('template/footer');

       
            
        }

        public function delete($id)
    {

        $this->home_model->delete_post($id); 

         redirect('healthform/blog');

        
    }


    public function update($id)
        {

        $this->load->model('home_model');

        $data['title'] = 'Edit your post here';

        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');      

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('slug', 'Slug', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');

        $this->form_validation->set_rules('image', 'Image');

        if ($this->form_validation->run() == FALSE)
        {
            
            $this->load->view('template/header');
            $this->load->view('post_view', $data);
            $this->load->view('template/footer');
        }
        else
        {
            $this->load->model('home_model');


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

        
            $this->load->model('home_model');


            $this->load->helper(array('form', 'url'));
            $this->home_model->updateposts($id);

               redirect('healthform/blog');

    }
        }


}



	/* Brilliants panel ends here */

	
}
