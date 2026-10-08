<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Results_model extends CI_model{
	function __construct()
    {
        parent::__construct();

        $this->load->database();
    }
	public function resister($data){
	
	
	$select=$this->db->query("SELECT id,contactEmail,status FROM users_resgistration WHERE contactEmail='".$data['contactEmail']."'");
		$result=$select->row();
		if($select->num_rows() > 0 && $result->status==1){
			return 'already_exit';
		}elseif($select->num_rows() && $result->status==0){

			return 'already_exit_not_activated';}
		else{
			$success=$this->db->insert('users_resgistration',$data);
			if($success){
				 $id= $this->db->insert_id();				 
				 //$data=$this->db->query("INSERT INTO address_book(userid,contact_name,company_name,	phone_number,email,address_1,city,post_zip_code,country) VALUES('".$id."','".$data['contactName']."','".$data['company']."','".$data['telephone']."','".$data['notificationEmail']."','".$data['address2']."','".$data['city']."','".$data['postCode']."','".$data['country']."')");
				$select_data=$this->db->query("SELECT id,contactName,contactEmail,status FROM users_resgistration WHERE id='".$id."'");


				
				return $select_data->row();

			}
			
			
		}

	}
	public function update_link($id,$email,$status){

		$select_data=$this->db->query("SELECT id,contactEmail,contactName,status FROM users_resgistration WHERE id='".$id."'AND contactEmail='".$email."' AND status='".$status."'");
		$result=$select_data->row();

		if($select_data->num_rows() > 0){
			if($result->status=='1'){

				return 'Already_activated_expired';

			}else{

				$update_link=$this->db->query("UPDATE users_resgistration SET status='1' WHERE id='".$id."' AND contactEmail='".$email."'");
				if($update_link){

					return 'link_update';
				}else{

					return 'Something_not_correct';
				}

			}


		}else{

			return 'invalid_url';
		}

	}
	public function login_user($username,$password){
	   $select=$this->db->query("SELECT id,username,password,status FROM users_resgistration WHERE username='".$username."' ");
		$result=$select->row();
		if($select->num_rows() >0 ){
			if(password_verify($password,$result->password)){
				if($result->status=='1'){
					$result=$select->row();
					return $result;
					
				}else{

					return 'acount_not_activated';

				}

			}else{

				return 'invalid_password';

			}

		}else{
			return 'not_exits';
		}


	}

	public function forgot_password($email){

		$select=$this->db->query("SELECT id,contactEmail,contactName,password,status FROM users_resgistration WHERE contactEmail='".$email."' ");
		$result=$select->row();
		if(isset($result)){

			return $select->row();
		}else{

			return 'invalidemail';
		}	

	}
	public function update_new_password($id,$email,$new_password){
		$password=password_hash($new_password,PASSWORD_BCRYPT);
		$upadte= $this->db->query("UPDATE users_resgistration SET password='".$password."' WHERE id='".$id."' AND contactEmail='".$email."'");

		return true;

	}
	
	public function select()  
      {  
        
         /*$query = $this->db->get('new_policy_form'); 
         $query = $this->db->order_by('created', 'DESC');*/
    $info=$this->db->query("SELECT * FROM new_policy_form ORDER BY created DESC");
         return $info->result_array();  
      }  
      
      	
	public function view()  
      {  
         $id = base64_decode($this->uri->segment(3));
         
         $query = $this->db->get_where('new_policy_form', array('id' => $id)); 
        
         return $query->result_array();  
      } 
      
      
  	public function viewmember()  
      {  
         $id = base64_decode($this->uri->segment(3));
         
         $query = $this->db->get_where('member_detail_form', array('policy_id' => $id)); 
         return $query->result_array();  
      }  
      
  	public function viewinner()  
      {  
         $id = base64_decode($this->uri->segment(3));
         $query = $this->db->get_where('member_detail_form', array('id' => $id));  
        return $query->result_array();  
      } 
      
      
      	public function comment($comments)  
      {  
        
        $id = base64_decode($this->uri->segment(3));
         
        $this->db->set('comment', $comments);

        $this->db->where('id', $id); 
        
        $this->db->update('member_detail_form'); 
          
          
      } 
      


      /* Brilliants panel starts from here */


      public function addresult() {

		$slug = url_title($this->input->post('slug'));

		$uploadData = $this->upload->data();
        $picture = $uploadData['file_name'];


		$data = array(
			'class' => $this->input->post('class'), 
			'file' => $picture

			);
        
        return $this->db->insert('result', $data);
	}

        public function editachievement($id) {

		$query = $this->db->get_where('achievement', array('id' => $id));

        return $query->result_array();

	}


        public function delete_facilitiesimage($id) {

		$this->db->WHERE('id', $id);
		$this->db->delete('menu_images');

		return true;

	}



        public function updateachievement($id) {

		$uploadData = $this->upload->data();
        $picture = $uploadData['file_name'];


		$data = array(
			'title' => $this->input->post('title'), 
			'slug' => $this->input->post('slug'), 
			'body' => $this->input->post('body'),
			'image' => $picture
			);
		
		$this->db->WHERE('id', $id);
    		$this->db->update('achievement', $data);

        	return true;
            
        }

        public function addimage() {

		
		$uploadData = $this->upload->data();
        $picture = 'images/'.$uploadData['file_name'];


		$data = array(
			 
			
			'image' => $picture

			);
        
        return $this->db->insert('principal_related_image', $data);
	}

       public function addfounder() {

		

		$uploadData = $this->upload->data();
        $picture = 'images/'.$uploadData['file_name'];


		$data = array(
			'title' => $this->input->post('title'), 
			'name' => $this->input->post('name'), 
			'description' => $this->input->post('body'),
			'image_path' => $picture

			);
        
        return $this->db->insert('founder', $data);
	}
        public function editfounder($id) {

		$query = $this->db->get_where('founder', array('id' => $id));

        return $query->result_array();

	}

        public function updatefounder($id) {

		$uploadData = $this->upload->data();
        $picture = 'images/'.$uploadData['file_name'];


		$data = array(
			'title' => $this->input->post('title'), 
			'name' => $this->input->post('slug'), 
			'description' => $this->input->post('body'),
			'image_path' => $picture
			);
		
		$this->db->WHERE('id', $id);
    		$this->db->update('founder', $data);

        	return true;
            
        }

         public function delete_founder($id) {

		$this->db->WHERE('id', $id);
		$this->db->delete('founder');

		return true;

	}

        
         public function delete_principle($id) {

		$this->db->WHERE('id', $id);
		$this->db->delete('principal_related_image');

		return true;

	}
            
       
         public function delete($id) {

		$this->db->WHERE('id', $id);
		$this->db->delete('menu_images');

		return true;

	}

		/* Brilliants panel ends here */

}