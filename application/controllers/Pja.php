<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pja extends CI_Controller 
{

	public function index()
	{
		$data['title'] = 'Pre-Job Assessment';
		$this->load->view('template/header-wizard', $data);
		$this->load->view('pja/index');
        $this->load->view('template/footer-wizard');
	}
}
