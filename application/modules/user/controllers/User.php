<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		

		$this->load->model('User_model','categ');
	}
    /////////////////////Listing Function///////////////////////////////////
	public function index()
	{
		$data['list_data']	= $this->categ->all_data_list();
          // echo "<pre>";print_r($data);exit();		
		$data['content'] 	= $this->load->view('list', $data, true);
		$this->load->view('list',$data);
	}
	
	/////////////////////Add Function///////////////////////////////////
	public function add(){
		 // echo "<pre>";print_r($_POST);exit();
		if($_POST)
		{ 
			$type_id  		  = $this->categ->insert_data($_POST);
			if($type_id)
			{
				$this->session->set_flashdata('add','New User Added');
				redirect('user');
			}
		}
		$this->load->view('add');
	}
	/////////////////////Delete Function///////////////////////////////////
	public function delete($b64_uid)
	{	
		$d_value 	    	= base64_decode(urldecode($b64_uid));
		$result			 =$this->categ->delete_data($d_value);
		if($result)
		{
			$this->session->set_flashdata('delete','User Deleted Successfully');
			redirect('user');
		}
	}
	/////////////////////View Function///////////////////////////////////
	public function view($b64_uid)
	{	
		$d_value 	    		= base64_decode(urldecode($b64_uid));
		$data['b64_vid']        = $b64_uid;
		$data['details']		= $this->categ->item_details($d_value);
		$data['item_list']		= $this->categ->item_list($d_value);
		$data['subtotal']     = $this->categ->subtotal($d_value);
		$data['grandtotal']   = $this->categ->grandtotal($d_value);
		$data['discount']     = count($this->categ->discount($d_value));
		$data['discount_value']     = $this->categ->discount($d_value);
		$data['b64_wid']      = $b64_uid;
		$data['content'] 	= $this->load->view('view', $data, true);
		$this->load->view('view',$data);
	}

   ////////////////////////////////////////////////////////////////////////////////
}
