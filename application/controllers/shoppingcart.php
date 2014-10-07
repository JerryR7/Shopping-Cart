<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShoppingCart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		// $this->load->library(array('udp_cart'));
		// $this->load->model('shopcart_model');
	}

	public function index()
	{
    $data = array(
      'item_per_page' => 4,
      'total_pages' => 2,
      'view' => array(
        'shoppingcart/top_navigation','shoppingcart/header','shoppingcart/homepage2','banner/home_banners','shoppingcart/products_tab','shoppingcart/bestsellers','shoppingcart/recently_viewed','shoppingcart/top_brands','shoppingcart/footer'
      ),
      // 'contain_view' => array(
      //   'banner/home_banners','shoppingcart/products_tab','shoppingcart/bestsellers','shoppingcart/recently_viewed','shoppingcart/top_brands','shoppingcart/footer'
      // ), 
    );
    $this->load->view('template',$data);
	}
}