<?php
	/**
	* 
	*/
	class Template
	{
		
		protected $CI;
		function __construct()
		{
			$this->CI =&get_instance();
			$this->CI->load->helper('url');
			$this->CI->load->view_data['base_url'] = base_url();
		}

		function display($template, $data=null)
		{
			$data['_header'] = $this->CI->load->view('template/header', $data, true);
			$data['_menu'] = $this->CI->load->view('template/menu', $data, true);
			$data['_services'] = $this->CI->load->view('/services', $data, true);
			$data['_portfolio'] = $this->CI->load->view('/portfolio', $data, true);
			$data['_about'] = $this->CI->load->view('/about', $data, true);
			$data['_teamSection'] = $this->CI->load->view('/teamSection_view', $data, true);
			$data['_clientSite'] = $this->CI->load->view('/client_site_view', $data, true);

			//$data['_contentHome'] = $this->CI->load->view($template, $data, true);
			//$data['_contentProfile'] = $this->CI->load->view('/profile', $data, true);
			$data['_contact'] = $this->CI->load->view('/contact_as_view', $data, true);
			$data['_footer'] = $this->CI->load->view('template/footer', $data, true);
			$this->CI->load->view('template', $data, true);
		}

		function admin($template2, $data=null){
			$data['header'] = $this->CI->load->view('admin/template/head', $data, true);
			$data['_topbarAdmin'] = $this->CI->load->view('admin/template/topbar', $data, true);
			$data['_sidebarAdmin'] = $this->CI->load->view('admin/template/sidebar', $data, true);
			$data['_contentAdmin'] = $this->CI->load->view($template2, $data, true);
			$data['_javascriptAdmin'] = $this->CI->load->view('admin/template/js', $data, true);
			$data['_footerAdmin'] = $this->CI->load->view('admin/template/foot', $data, true);
			$this->CI->load->view('admin/template_admin', $data, true);
		}
	}