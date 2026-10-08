<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_model{
	function __construct()
    {
        parent::__construct();

        $this->load->database();

    }
	

      /* Brilliants panel starts from here */


      public function addgallery() {
	
		$data = array(
			'gallery_name' => $this->input->post('title')		
			);
        
        return $this->db->insert('gallery', $data);
	}

        public function editposts($id) {

		$query = $this->db->get_where('posts', array('id' => $id));

        return $query->result_array();

	}

public function addgalleryimage() {

                $uploadData = $this->upload->data();
                $picture = 'images/'.$uploadData['file_name'];

	
		$data = array(
                        'gallery_id' => $this->input->post('galleryid'),
			'gallery_heading' => $this->input->post('title'),
                        'gallery_alias' => $this->input->post('slug'),
                        'gallery_image_cover' => $picture		
			);
        
        return $this->db->insert('gallery_type', $data);
	}

       

        public function delete_post($id) {

		$this->db->WHERE('id', $id);
		$this->db->delete('posts');

		return true;

	}



        public function updateposts($id) {

		$uploadData = $this->upload->data();
        $picture = $uploadData['file_name'];


		$data = array(
			'title' => $this->input->post('title'), 
			'slug' => $this->input->post('slug'), 
			'body' => $this->input->post('body'),
			'image' => $picture
			);
		
		$this->db->WHERE('id', $id);
    		$this->db->update('posts', $data);

        	return true;
            
        }

        
public function addimages() {

                $uploadData = $this->upload->data();
                $picture = 'images/'.$uploadData['file_name'];

	
		$data = array(
                       'gallery_type_id' => $this->input->post('gallery_type_id'),
                       'gallery_image' => $picture		
			);
        
        return $this->db->insert('gallery_images', $data);
	}

      public function viewgallery($id){  
		
		$query = $this->db->query("SELECT * FROM  gallery_type where gallery_id= '".$id."' ORDER BY id DESC");  
        return $query->result_array();
  
      } 

       public function viewgalleryimage($id){  
         
        $query = $this->db->query("SELECT * FROM gallery_images LEFT JOIN gallery_type ON gallery_images.gallery_type_id=gallery_type.id where gallery_type.id='".$id."'");  
        return $query->result_array();
  
      } 

        public function galleryname($id){  
         
        $query = $this->db->query("SELECT * FROM  gallery where id= '".$id."'");  
        return $query->result_array();
  
      } 
      

       public function addclubimage() {

                $uploadData = $this->upload->data();
                $picture = 'images/'.$uploadData['file_name'];

	
		$data = array(
                       'menu_id' => $this->input->post('clubid'),
                       'image_path' => $picture		
			);
        
        return $this->db->insert('menu_images', $data);
	}

      public function addeventimage() {

                $uploadData = $this->upload->data();
                $picture = 'images/'.$uploadData['file_name'];

	
		$data = array(
                       'events_heading_id' => $this->input->post('eventid'),
                       'image_path' => $picture		
			);
        
        return $this->db->insert('events_info', $data);
	}
       
         public function eventname($id){  
         
        $query = $this->db->query("SELECT * FROM  menu where id= '".$id."'");  
        return $query->result_array();
  
      } 

      
         public function deleteevent($id) {

		$this->db->WHERE('id', $id);
		$this->db->delete('events_info');

		return true;

	}
        

       public function clubname($id){  
       
	   $query = $this->db->query("SELECT * from menu  where parent_page = '45' and status ='1' and id= '".$id."'");  
	   #$query = $this->db->query("SELECT * from events_heading where id= '".$id."'");  
        return $query->result_array();
  
      } 
        
      

         public function deleteparticular($id) {

		$this->db->WHERE('id', $id);
		$this->db->delete('gallery');

		return true;

	}
        
         public function deleteparticulartype($id) {

		$this->db->WHERE('id', $id);
		$this->db->delete('gallery_type');

		return true;

	}


		/* Brilliants panel ends here */

}