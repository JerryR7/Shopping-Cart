<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shoppingcart_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	
	public function products_tab($id = FALSE)
	{
		//撈第一層分類資料
		$query = $this->db->get('products_tab');
		return $query->result();
	}

	public function category()
	{
		//撈第二層分類資料
		$query = $this->db->get('category');
		return $query->result();
	}

	//Function products_tab & function category in one function
	public function in_common()
	{
		$tab = $this->db->get('products_tab')->result();
		$category = $this->db->get('category')->result();

		for($i=0; $i<count($tab);$i++) {
			$tab[$i]->category = array();
			foreach($category as $category[$tab[$i]->category_id]) {
				if($category[$tab[$i]->category_id]->products_tab_id == $tab[$i]->category_id) {
					array_push($tab[$i]->category,$category[$tab[$i]->category_id]);
				}
			}
		}
		return $tab;
	}
}