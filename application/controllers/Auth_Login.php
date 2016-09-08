<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	
	class Auth_Login extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();

			
		}

		//store user information and send to profile page
		public function index(){
			$this->load->library('facebook', array('appId' => '1132812140063879', 'secret' => '09a139ae46b8e290f7367fba6f423f9f'));

			// get user's login information
			$this->user = $this->facebook->getUser();
			
			if($this->user){
				$data['user_profile'] = $this->facebook->api('/me/');

				//get logout url of facebook
				$data['logout_url'] = $this->facebook->getLogoutUrl(array('next'=>base_url() . 'auth_login/logout'));

				//send data to profile page
				$this->load->view('admin/home_setting', $data);
			}else{
				//store users facebook login url
				$data['login_url'] = $this->facebook->getLoginUrl();
				//$this->facebook->getLoginUrl();
				//echo('asuuu');
				$this->load->view('login', $data);
			}
		}

		public function logout(){
			session_destroy();
			redirect('welcome');
		}
	}
 ?>