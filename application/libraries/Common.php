<?php
if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Common {

	function htmlspecialchars($string) {
		if (isset($string)) {
			$result = htmlspecialchars($string);
		}else{
			$result = "";
		}

		return $result;
	}

	//////////////////////////////////////////////////////////////////////
	function file_upload($path,$file_name)
	{
		if(!empty($_FILES)){
			if($_FILES[$file_name]['error']==0){
			   	$config['upload_path']   	=   $path;
			   	$config['allowed_types'] 	=   "*"; 
			   	//$config['max_size']      	=   "5000";
			  	//$config['max_width']    	=   "1890";
			   	//$config['max_height']    	=   "490";
			  	$config['encrypt_name'] 	= TRUE;
			  	$CI =& get_instance();

				$CI->load->library('upload',$config);
				//$CI->your_library->do_something(); 
			   	//$CI->upload('upload',$config);
			   	$CI->upload->initialize($config);
			  	$image_name=$file_name;
			   	//print_r($image_name);exit(); 
			   	if(!$CI->upload->do_upload($image_name)) {
				   	echo $CI->upload->display_errors();exit();
			   	}
			   	else{
				   	$data=array('upload_data'=>$CI->upload->data());
				   	$image=$data['upload_data']['file_name'];
				   //print_r($image);
			   	}
			}else{
				$image="";
			}
		}else{
			$image="";
		}

		return $image;
	}

	////////////////////Image Resize////////////////////////
	function image_resize($path,$width,$height){
		$CI =& get_instance();
		$config['image_library'] 	= 'gd2';
		$config['source_image'] 	= $path;
		
		$config['maintain_ratio'] 	= FALSE;
		$config['width']         	= $width;
		$config['height']       	= $height;
		$config['x_axis'] 			= '0';
		$config['y_axis'] 			= '0';
		//echo "<pre>";print_r($config1);exit();
		$CI->load->library('image_lib', $config);
		//$CI->image_lib->resize();
		if ($CI->image_lib->resize()) {
			return "true";
		}else{
			return "false";
		}
	}
	//////////////////////Get Parent Id///////////////////////////////
	function get_parent(){
		if ($_SESSION['user_type']==1) {
			$parent_id=0;
		}else if ($_SESSION['user_type']==2) {
			$parent_id=$_SESSION['user_id'];
		}else if ($_SESSION['user_type']==3) {
			$parent_id=$_SESSION['company_id'];
		}

		return $parent_id;
	}

}
?>
