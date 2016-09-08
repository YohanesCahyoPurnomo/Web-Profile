<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Upload extends CI_Controller
	{
		var $gallery_path;
		var $gallery_path_url;
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form', 'url', 'html'));
		}

		function upload()
		{
			if ($this->input->post('upload')) {

			// $config = array(
			// 			'upload_path' => 'asset/uploads/',
			// 			'allowed_types' => 'jpg|jpeg|gif|png',
			// 			'max_size' => 2000,
			// 			'file_name' => url_title($this->input->post('userfile'))
			// 			);
			
			$config['upload_path'] = './asset/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 1000; 
			$config['max_width'] = 1024;
			$config['max_height'] = 768;

			$this->load->library('upload', $config);
			//$this->upload->do_upload();

			if ($this->upload->do_upload()) {
				$data = array('upload_data' => $this->upload->data());
				echo "upload success";
				$this->load->view('form_success', $data);
				
			}else{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('template/header');
				$this->load->view('template/menu');
				$this->load->view('profile', $error);
				$this->load->view('template/header');
			}
			
		}
	}
}
?>