<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shoppingcart_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	
	public function products_tab($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('products_tab');
			return $query->result_array();
		}

		$query = $this->db->order_by('products_tab_id','asc')->get_where('category',array('products_tab_id'=>$id));
		return $query->result_array();
	}
}