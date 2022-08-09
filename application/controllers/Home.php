<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Selamat datang '.$data['user']['name'];

        $this->load->view('template/header', $data);
        $this->load->view('template/head', $data);
        $this->load->view('home/index');
        $this->load->view('template/sidebar');
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }
    
    public function pja()
    {
        $data['title'] = 'Pre Job Assessment';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Selamat datang '.$data['user']['name'];
        
        $this->load->view('template/header', $data);
        $this->load->view('template/head', $data);
        $this->load->view('pja/admin');
        $this->load->view('template/sidebar');
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }

    public function detailpja()
    {
        $data['title'] = 'View Pre Job Assessment';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Selamat datang '.$data['user']['name'];
        
        $this->load->view('template/header', $data);
        $this->load->view('template/head', $data);
        $this->load->view('pja/view');
        $this->load->view('template/sidebar');
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }
    
    public function hsseplan()
    {
        $data['title'] = 'HSSE Plan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Selamat datang '.$data['user']['name'];
        
        $this->load->view('template/header', $data);
        $this->load->view('template/head', $data);
        $this->load->view('hsse-plan/admin');
        $this->load->view('template/sidebar');
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }

    public function detailhsseplan()
    {
        $data['title'] = 'View HSSE Plan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Selamat datang '.$data['user']['name'];
        
        $this->load->view('template/header', $data);
        $this->load->view('template/head', $data);
        $this->load->view('hsse-plan/view');
        $this->load->view('template/sidebar');
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }
    
    public function practice()
    {
        $data['title'] = 'WPU';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Selamat datang '.$data['user']['name'];
        
        $this->load->view('template/header', $data);
        $this->load->view('template/head', $data);
        $this->load->view('practice/admin');
        $this->load->view('template/sidebar');
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }

    public function detailpractice()
    {
        $data['title'] = 'View Practice';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Selamat datang '.$data['user']['name'];
        
        $this->load->view('template/header', $data);
        $this->load->view('template/head', $data);
        $this->load->view('practice/view');
        $this->load->view('template/sidebar');
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }

    public function evaluasi()
    {
        $data['title'] = 'Evaluation';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Selamat datang '.$data['user']['name'];
        
        $this->load->view('template/header', $data);
        $this->load->view('template/head', $data);
        $this->load->view('evaluasi/admin');
        $this->load->view('template/sidebar');
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }

    public function detailevaluasi()
    {
        $data['title'] = 'View Evaluasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        //echo 'Selamat datang '.$data['user']['name'];
        
        $this->load->view('template/header', $data);
        $this->load->view('template/head', $data);
        $this->load->view('evaluasi/view');
        $this->load->view('template/sidebar');
        $this->load->view('template/foot');
        $this->load->view('template/footer');
    }
}
