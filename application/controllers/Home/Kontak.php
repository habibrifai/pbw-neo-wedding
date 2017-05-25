<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->helper('email');
        $this->load->model('M_message');
        $this->load->library('session');
        date_default_timezone_set('Asia/Jakarta');
    }

	function index(){
		$this->load->view('home/kontak');
	}

	function sendMessage(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('message', 'Message', 'required');

		// var_dump($this->form_validation->run());
		if($this->form_validation->run() == true){

			$data = array(
				'nama' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'tanggal' => date('Y-m-d H:i:s'),
				'pesan' => $this->input->post('message')
			);
			// $this->session->flash_data
			$this->session->set_flashdata('success',  'Pesan Terkirim');
			$this->M_message->submit($data, 'message');
			redirect(base_url().'Home/Kontak');

		} else {
		    $this->session->set_flashdata('error',  'Pesan Tidak Terkirim');
		    redirect(base_url().'Home/Kontak');
		}

	}

}
?>
