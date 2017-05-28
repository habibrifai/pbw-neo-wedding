<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->model('M_model');
        $this->load->helper(array('form', 'url'));
        date_default_timezone_set('Asia/Jakarta');
        $session = $this->session->userdata('session');
        if(empty($session)){
            redirect(base_url().'Admin/Login');
        }
    }

    function index(){
        $data['dataGaleri'] = $this->M_model->record_count('gallery');
        $data['dataArtikel'] = $this->M_model->record_count('article');
        $data['dataPesan'] = $this->M_model->record_count('message');

        $this->load->view('admin/dashboard', $data); 
    }
}
?>