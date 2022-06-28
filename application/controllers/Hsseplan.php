<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hsseplan extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'HSSE PLAN';
		$this->load->view('template/header-wizard', $data);
		$this->load->view('hsse-plan/index');
		$this->load->view('template/footer-wizard');
	}
}
