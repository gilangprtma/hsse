<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Practice extends CI_Controller {

	public function index()
	{
		$data['title'] = 'HSSE Work Practice';
		$this->load->view('template/header-wizard', $data);
		$this->load->view('practice/index');
        $this->load->view('template/footer-wizard');
	}
}
