<?php

class Pages extends CI_Controller
{
	public function view($page = 'home')
	{
		if (!file_exists('../app/views/pages/' . $page . '.php')) {
			show_404();
		}
		
		$data['title'] = ucfirst($page);
		
		$this->load->view('layout/header', $data);
		$this->load->view('pages/' . $page, $data);
		$this->load->view('layout/footer', $data);
	}
}