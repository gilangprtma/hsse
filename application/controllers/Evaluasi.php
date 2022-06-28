<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evaluasi extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Evaluasi';
		$this->load->view('template/header-wizard', $data);
		$this->load->view('evaluasi/index');
        $this->load->view('template/footer-wizard');
	}
}
