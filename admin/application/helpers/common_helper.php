<?php

defined('BASEPATH') OR exit('No direct script access allowed');


function islogin(){

	$CI =& get_instance();
    $is_logged_in = $CI->session->userdata('id');
       if(!isset($is_logged_in))
       {
			redirect('user/login');
       }
}
function check_islogin(){

	$CI =& get_instance();
    $is_logged_in = $CI->session->userdata('id');
      
      
}
function user_check_email($id,$email){

	$CI =& get_instance();
   	$select_data=$CI->db->query("SELECT * FROM users_resgistration WHERE id='".$id."'AND contactEmail='".$email."'");
	$result=$select_data->row();

	if($select_data->num_rows()>0){

		return $result;

	}
	return false;	

}
function user_status($username){

	$CI =& get_instance();
   	$select_data=$CI->db->query("SELECT id,username,status,password FROM users_resgistration WHERE username='".$username."'");
		$result=$select_data->row();
	if($result->status==1){

		return true;

	}
	return false;	

}









