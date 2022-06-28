<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checklist extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Checklist_model');
        $this->load->helper('tgl_indo');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Checklist';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Checklist_model', 'checklist');
        $data['checklist'] = $this->checklist->getListCheck();

        $this->load->view('template/header', $data);
        $this->load->view('template/head', $data);
        $this->load->view('checklist/index',$data);
        $this->load->view('template/sidebar');
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }
}