<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	

	class About extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_about');
		}

		public function addAbout()
		{
			$judul = $_POST['judul'];
			$keterangan = $_POST['keterangan'];
			$tahun = $_POST['tahun'];
			$image = $this->input->post('userfile');

			$config['upload_path'] = './assets/image/about/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 5000;

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload()) {
				$data = array('upload_data' => $this->upload->data());
				$file_name = $data['upload_data']['file_name'];
				$image = $file_name;
			}

			$insert_about = array(
				'judul' => $judul,
				'keterangan' => $keterangan,
				'tahun' => $tahun,
				'image' => $image
				);

			$res = $this->m_about->addAbout('about', $insert_about);

			if ($res >= 1 ) {
				redirect('admin/about');
			}else{
				echo('Insert About gagal');
			}
		}

		public function deleteAbout($id)
		{
			$where = array('id' => $id);
			$this->m_about->deleteAbout('about', $where);
			redirect('admin/about');
		}

		public function updateAbout($id)
		{
			$judul = $_POST['judul'];
			$keterangan = $_POST['keterangan'];
			$tahun = $_POST['tahun'];

			$dataUpdate = array(
				'judul'=>$judul,
				'keterangan'=>$keterangan,
				'tahun'=>$tahun
				);

			$res = $this->m_about->updateAbout('about', $dataUpdate, array('id'=>$id));

			if ($res>=1) {
				redirect('admin/about');
			}else{
				echo "Update Gagal";
			}
		}
	}
 ?>