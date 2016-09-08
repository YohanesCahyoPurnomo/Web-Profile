<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Login extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('user');
		}

		function index()
		{
			redirect('welcome/login');
		}

		function check_database()
		{
			//if($this->input->post('btnLogin')){
				$username = $this->input->post('username');
				$password = $this->input->post('password');

				//validasi field terhadap database;
				$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
				$this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric');

				if ($this->form_validation->run() == FALSE) {
					redirect('welcome');
				}else{
					//cek database apakah username dan password valid
					$is_valid = $this->user->login($username, $password);

					if ($is_valid != false) {
						$sess_array = array();
						foreach ($is_valid as $row) {
							$sess_array = array('id' => $row['id'], 'username' => $row['username']);
							$this->session->set_userdata('username', $sess_array);
						}
						redirect('Admin');
					}else{
						//username dan password not valid
						$this->session->set_flashdata('error', 'Invalid username or password');
					
						redirect('Welcome');
					}
				}
			//}
			
			
		}
		
	}
	
 ?>