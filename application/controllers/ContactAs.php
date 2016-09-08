<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class ContactAs extends CI_Controller
	{
		public function index()
		{
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('contact_as_view');
			$this->load->view('template/footer');
		}
	}