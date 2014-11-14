<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShoppingCart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
		// $this->load->library(array('udp_cart'));
		$this->load->model('shoppingcart_model');
		$this->load->library('ion_auth');
		
		$this->load->library('Facebook_ion_auth');
	}

	public function index()
	{

		if (isset($_GET['code']))
		{
			$this->facebook_ion_auth->login();
		}
		
		$data = array(
			'item_per_page' => 4,
			'total_pages' => 2,

			'products_tab' => $this->shoppingcart_model->products_tab(),

			'view' => array(
				'shoppingcart/top_navigation',
				'shoppingcart/header',
				'shoppingcart/homepage2',
				'banner/home_banners',
				'shoppingcart/products_tab',
				'shoppingcart/bestsellers',
				'shoppingcart/recently_viewed',
				'shoppingcart/top_brands',
				'shoppingcart/footer'
				),
			// 'contain_view' => array(
			// 	'banner/home_banners','shoppingcart/products_tab','shoppingcart/bestsellers','shoppingcart/recently_viewed','shoppingcart/top_brands','shoppingcart/footer'
			// 	), 
			);
		foreach ($data['products_tab']['category_id'] as $id) {
			$data['category'] = $this->shoppingcart_model->products_tab($id);
		}

		$this->load->view('template', $data);
	}

	public function faq()
	{
		$data = array(
			'view' => array(
				'shoppingcart/top_navigation','shoppingcart/header','shoppingcart/faq','shoppingcart/footer'
				),
			);

		$this->load->view('template', $data);
	}

	public function contact()
	{
		$data = array(
			'view' => array(
				'shoppingcart/top_navigation','shoppingcart/header','shoppingcart/contact','shoppingcart/footer'
				),
			);

		$this->load->view('template', $data);
	}

	public function auth()
	{
		$data = array(
			'view' => array(
				'shoppingcart/top_navigation','shoppingcart/header','shoppingcart/authentication','shoppingcart/footer'
				),
			);
		$this->load->view('template', $data);
	}

	public function cart()
	{
		$data = array(
			'view' => array(
				'shoppingcart/top_navigation','shoppingcart/header','cart/cart','shoppingcart/footer'
				),
			);
		$this->load->view('template', $data);
	}

	public function checkout()
	{
		$data = array(
			'view' => array(
				'shoppingcart/top_navigation','shoppingcart/header','cart/checkout','shoppingcart/footer'
				),
			);
		$this->load->view('template', $data);
	}

	public function category()
	{
		$data = array(
			'products_tab' => $this->shoppingcart_model->products_tab(),
			'view' => array(
				'shoppingcart/top_navigation','shoppingcart/header','shoppingcart/category','shoppingcart/footer'
				),
			);
		$this->load->view('template', $data);
	}

	public function category2()
	{
		$data = array(
			'products_tab' => $this->shoppingcart_model->products_tab(),
			'view' => array(
				'shoppingcart/top_navigation','shoppingcart/header','shoppingcart/category2','shoppingcart/footer'
				),
			);
		$this->load->view('template', $data);
	}
}