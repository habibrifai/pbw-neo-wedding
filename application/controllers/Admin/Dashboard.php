<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

	public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        date_default_timezone_set('Asia/Jakarta');
        $session = $this->session->userdata('session');
        if(empty($session)){
            redirect(base_url().'Admin/Login');
        }
    }

    function index(){
        $session = $this->session->userdata('session');
        $data['ses'] = $session['user'];
        $this->load->view('admin/dashboard', $data); 
    }
}
?>