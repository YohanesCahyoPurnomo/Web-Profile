<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('template', 'email');
		$this->load->helper('url');
		$this->load->model('M_profile');
	}

	public function index()
	{
		if (!$this->session->userdata('username')) {
			$this->session->set_flashdata('error', 'Maaf Username dan Password Unvalid');
			redirect('Welcome');
		}else{
			redirect('admin/home');
		}
	}

	public function message(){
		

		$config['protocol'] = "smtp";
		$config['smtp_host'] = "ssl://smtp.gmail.com";
		$config['smtp_port'] = "465";
		$config['smtp_user'] = "cahyo.ycp@gmail.com";
		$config['smtp_pass'] = "cahyo29051994";
		$config['charset'] = "utf-8";
		$config['useragent'] = 'Codeigniter';
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";

		$this->load->library('email');

		$this->email->initialize($config);

		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$message = $this->input->post('message');

		$this->email->from('cahyo.ycp@gmail.com', 'Cahyo Purnomo');
		$this->email->to($email);
		$this->email->subject('Web Profile Message');
		$this->email->message($message);

		if ($this->email->send()) {
			echo('success');
		}else{
			show_error($this->email->print_debugger());
		}
	}

	public function home($aksi = null, $id = null)
	{
		$this->load->library('crud');
		$table = "profiles";
		$primary = "id";
		$fields = "id, lastname, skill, website, mobile_number, email, profile_image, birthday, country, summary, firstname";
		$conditions = array();

		if ($aksi == 'add') {
			
		}elseif ($aksi == 'form') {
			$this->template->admin('admin/home/home_form');
			$this->load->view('admin/template_admin');
		}else{
			$data = $this->crud->getData($fields, $table, $conditions);

			$this->template->admin('admin/home/index', array('data' => $data));
			$this->load->view('admin/template_admin');
		}
		
	}

	public function portfolio($aksi=null, $id=null){
		//$dataPortfolio;
		$data = $this->M_portfolio->getPortfolio();
		$dataUpdate = $this->M_portfolio->getPortfolioUpdate($id);
		
		if ($aksi == 'update') {
			$this->template->admin('admin/portfolio/update', array('data' => $dataUpdate));
			$this->load->view('admin/template_admin');
		}elseif ($aksi == 'add'){
			$this->template->admin('admin/portfolio/add_portfolio');
			$this->load->view('admin/template_admin');
		}else{
			$this->template->admin('admin/portfolio/index', array('data' => $data));
			$this->load->view('admin/template_admin');
		}
	}

	public function about($aksi=null, $id=null)
	{
		$data = $this->M_about->getAbout();
		

		if ($aksi == 'update') {
			$dataUpdate = $this->M_about->getAboutUpdate($id);
			$this->template->admin('admin/about/update', array('data'=>$dataUpdate));
			$this->load->view('admin/template_admin');
		}elseif ($aksi == 'add') {
			$this->template->admin('admin/about/add_about');
			$this->load->view('admin/template_admin');
		}else{
			$this->template->admin('admin/about/index', array('data' => $data));
			$this->load->view('admin/template_admin');
		}
	}
}
