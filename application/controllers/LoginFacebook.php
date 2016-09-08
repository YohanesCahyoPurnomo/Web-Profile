<?php 
	/**
	* 
	*/
	class LoginFacebook extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function index(){
			$fb_config = array('appId' => '1132812140063879', 
				'secret' => '09a139ae46b8e290f7367fba6f423f9f');

			$this->load->library('facebook', $fb_config);

			$user = $this->facebook->getUser();


			if ($user) {
				try{
					$data['user_profile'] = $this->facebook->api('/me');
				}catch(FacebookApiException $e){
					$user = null;
				}
			}

			if ($user) {
				$data['logout_url'] = $this->facebook->getLogoutUrl();
			}else{
				$data['login_url'] = $this->facebook->getLoginUrl();
			}

			// $this->load->view('admin/home_setting', $data);
		}
	}
 ?>