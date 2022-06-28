<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Selamat Datang';
		$this->load->view('template/header-home', $data);
		$this->load->view('welcome/index');
        $this->load->view('template/footer');
	}
}
