<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	//public function index()
	//{
	//	$this->load->view('welcome_message');
	//}

	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->helper('url');
		$this->load->model('M_about');
	}

	public function index()
	{
		$dataPortfolio = $this->M_portfolio->getPortfolio();
		$dataAbout = $this->M_about->getAbout();
		$this->template->display('home', array('data_folio' => $dataPortfolio, 'data_about'=>$dataAbout));
		// $this->load->view('template/header');
		// $this->load->view('template/menu');
		// $this->load->view('welcome_message');
		// $this->load->view('template/footer');
		$this->load->view('template');
	}

	public function login()
	{
		if (!$this->session->userdata('username')) {
				$this->template->display('login');
				$this->load->view('template');
			}else{
				$this->template->display('profile');
				$this->load->view('template');
			}
		
	}

	function logout_user()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}

	function profile()
		{
			// if (!$this->session->userdata('username')) {
			// 	$this->session->set_flashdata('error', 'Maaf Username dan Password Unvalid');
			// 	redirect('welcome');
			// }
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('profile');
			$this->load->view('template/footer');
			// $this->template->display('profile');
			// $this->load->view('template');
		}

}



