<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller{

	function __construct(){
        parent::__construct();
        $this->load->model('M_model');
        $this->load->helper(array('form', 'url'));
        $session = $this->session->userdata('session');
        if(empty($session)){
            redirect(base_url().'Admin/Login');
        }
    }

    function index(){
        $data['message'] = $this->M_model->get_data('message')->result();
        $this->load->view('admin/message', $data);    
    }

    function doDelete($nomor){
        $this->M_model->delete($nomor, 'message');
        redirect(base_url().'Admin/Message');
    }
}
?>