<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Portfolio extends CI_Controller
	{
		var $gallery_path;
		public function __construct()
		{
			parent::__construct();
			$this->gallery_path = realpath(APPPATH . '../assets/image/portfolio/');
			$this->load->helper(array('form', 'url', 'html'));
		}

		public function add(){

			if ($_POST['btnAddPortfolio']) {
				$title = $_POST['title'];
				$bidang = $_POST['bidang'];
				$detail = $_POST['detail'];
				$image = $this->input->post('userfile');
				$date = $_POST['date'];
				$client = $_POST['client'];

				$config['upload_path'] = './assets/image/portfolio/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = 5000;

				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if ($this->upload->do_upload()) {
					$data = array('upload_data' => $this->upload->data());
					$file_name = $data['upload_data']['file_name'];
					$image_name = $file_name;
				}

				$insert_portfolio = array(
					'title' => $title, 
					'category' => $bidang, 
					'detail' => $detail, 
					'image' => $image_name,
					'date' => $date,
					'client' => $client
					);

				$res = $this->M_portfolio->addPortfolio('portfolio', $insert_portfolio);

				if ($res >= 1) {
					redirect('admin/portfolio');
				}else{
					echo('Insert Data Gagal');
				}
			}
		}

		public function delete($id)
		{
			$where = array('id' => $id);
			$res = $this->M_portfolio->deletePortfolio('portfolio', $where);
			redirect('admin/portfolio');
		}

		public function update($id)
		{
			$title = $_POST['title'];
			$category = $_POST['category'];
			$detail = $_POST['detail'];
			$image = $this->input->post('userfile');
			$date = $_POST['date'];
			$client = $_POST['client'];

			$update_portfolio = array(
					'title' => $title, 
					'category' => $category, 
					'detail' => $detail, 
					'date' => $date,
					'client' => $client
					);

			$res = $this->M_portfolio->updatePortfolio('portfolio', $update_portfolio, array('id' => $id));

			if ($res >= 1) {
				redirect('admin/portfolio');
			}else{
				echo('Update Data Gagal');
			}
		}

	}
 ?>