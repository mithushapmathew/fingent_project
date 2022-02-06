<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
	///////////////////List Branch/////////////////////////////
	public function all_data_list($user_id)
	{
		$this->db->select('item.*');
		$this->db->from('item');
		$this->db->where('user_id',$user_id);
		$this->db->order_by('item_id','DESC');
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}
	///////////////////Total without tax/////////////////////////////
	public function subtotal($user_id)
	{
		$this->db->select('SUM(quantity*unit_price) as subtotal');
		$this->db->from('item');
		$this->db->where('user_id',$user_id);
		 $query = $this->db->get();
        $row1 = $query->row();
        return $row1;
	}
	/////////////////////Total with Tax//////////////////////////////////
	public function grandtotal($user_id)
	{
		$this->db->select('SUM(quantity*unit_price + (quantity*unit_price*(tax/100))) as grandtotal');
		$this->db->from('item');
		$this->db->where('user_id',$user_id);
		 $query = $this->db->get();
        $row1 = $query->row();
        return $row1;
	}
	///////////////////List /////////////////////////////
	public function discount($user_id)
	{
		$this->db->select('*');
		$this->db->from('user_discount');
		$this->db->where('user_id',$user_id);
		$this->db->limit('1');
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}
		////////////////////Data Insert//////////////////
	public function insert_data($insert_array)
	{
		$this->db->insert('item',$insert_array);
		return $this->db->insert_id();
	}
	
	///////////////////////Delete Data//////////////////////////
	public function delete_data($item_id)
	{
		$this->db->where('item_id',$item_id);
		$row=$this->db->delete('item');
		return $row;
	}

	/////////////////////Item Details/////////////////////
	public function item_details($id)
	{
		$this->db->select('*');
		$this->db->from('item');
		$this->db->where('item_id',$id);
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}
	
	////////////////////Update Branch//////////////////
	public function update_data($update_array,$id)
	{
		$row=$this->db->update('item',$update_array,array('item_id'=>$id));
		return $row;
	}
		////////////////////Data Insert//////////////////
	public function insert_discount($insert_array)
	{
		$this->db->insert('user_discount',$insert_array);
		return $this->db->insert_id();
	}
	/////////////////////Item Details/////////////////////
	public function user_details($id)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('user_id',$id);
		$query = $this->db->get();
		$row = $query->result_array();
		return $row;
	}
	
	/////////////////////////////////////////////////////////////
}
?>  