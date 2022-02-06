<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

	function __construct()
	{
		parent::__construct();


		$this->load->model('Item_model','categ');
	}
    /////////////////////Listing Function///////////////////////////////////
	public function details($b64_wid)
	{
		$d_value 	    	= base64_decode(urldecode($b64_wid));
		$data['list_data']	  = $this->categ->all_data_list($d_value);
		$data['subtotal']     = $this->categ->subtotal($d_value);
		$data['grandtotal']   = $this->categ->grandtotal($d_value);
		$data['discount']     = count($this->categ->discount($d_value));
		$data['discount_value']     = $this->categ->discount($d_value);
		$data['b64_wid']      = $b64_wid;
           // echo "<pre>";print_r($data['discount_value']);exit();		
		$data['content'] 	= $this->load->view('list', $data, true);
		$this->load->view('list',$data);
	}
	
	/////////////////////Add Function///////////////////////////////////
	public function add($b64_wid){
		  // echo "<pre>";print_r($_POST);exit();
		if($_POST)
		{ 

			$d_value 	    	= base64_decode(urldecode($b64_wid));
			$item_name = $this->input->post('name');
			$quantity  = $this->input->post('quantity');
			$unit_price  = $this->input->post('unit_price');
			$tax  = $this->input->post('tax');
			// echo "<pre>";print_r($item_name);exit();
			foreach($item_name as $key => $item) {
				$data= array(
					'name' => $item,
					'user_id' =>$d_value,
					'quantity' => $quantity[$key],
					'unit_price' => $unit_price[$key],
					'tax' => $tax[$key],
					'added_date' =>date('Y-m-d H:i:s'),
				);
				// echo "<pre>";print_r($data);exit();
				$type_id  		  = $this->categ->insert_data($data);
                redirect('item/details/'.$b64_wid);
			}
		}
		$data['b64_wid']    = $b64_wid;
		$this->load->view('add',$data);
	}
	/////////////////////Delete Function///////////////////////////////////
	public function delete($b64_uid,$b64_wid)
	{	
		$d_value 	    	= base64_decode(urldecode($b64_uid));
		$result			 =$this->categ->delete_data($d_value);
		if($result)
		{
			$this->session->set_flashdata('delete','Item Deleted Successfully');
			redirect('item/details/'.$b64_wid);
		}
	}
	
	
	/////////////////////Add Function///////////////////////////////////
	public function add_discount($b64_wid){
		  // echo "<pre>";print_r($_POST);exit();
		if($_POST)
		{ 
			$_POST['user_id'] 	 = base64_decode(urldecode($b64_wid));

			$type_id  		     = $this->categ->insert_discount($_POST);
			if($type_id)
			{
				$this->session->set_flashdata('add','New Discount Added');
				redirect('item/details/'.$b64_wid);
			}
		}
		// $this->load->view('add');
	}
	/////////////////////Listing Function///////////////////////////////////
	public function invoice($b64_wid)
	{
		$d_value 	    	= base64_decode(urldecode($b64_wid));
		$data['list_data']	  = $this->categ->all_data_list($d_value);
		$data['user_details']	  = $this->categ->user_details($d_value);
		$data['subtotal']     = $this->categ->subtotal($d_value);
		$data['grandtotal']   = $this->categ->grandtotal($d_value);
		$data['discount']     = count($this->categ->discount($d_value));
		$data['discount_value']     = $this->categ->discount($d_value);
		$data['b64_wid']      = $b64_wid;
           // echo "<pre>";print_r($data['list_data']);exit();		
		$data['content'] 	= $this->load->view('invoice', $data, true);
		$this->load->view('invoice',$data);
	}
   ////////////////////////////////////////////////////////////////////////////////
}
