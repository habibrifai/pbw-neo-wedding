<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'email', 'url'));
        $this->load->model('M_model');
        $this->load->library('email');
        $this->load->library('form_validation');
        date_default_timezone_set('Asia/Jakarta');
    }

	function index(){
		redirect(base_url().'#kontak-neo');
	}

	function sendMessage(){

		$this->form_validation->set_rules('nama', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('pesan', 'Pesan', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('error', 'Maaf, pesan anda tidak terkirim. Mohon periksa kembali email anda.');
            
        } else {

            //Config emaill
            $config['protocol'] = "smtp";
            $config['smtp_host'] = "ssl://smtp.gmail.com";
            $config['smtp_port'] = "465";
            //$config['smtp_timeout'] = ‘7’;
            $config['smtp_user'] = "sapijantan1@gmail.com"; 
            $config['smtp_pass'] = "lolipop777";
            $config['charset'] = "utf-8";
            $config['mailtype'] = "html";
            $config['newline'] = "\r\n";
            $config['validation'] = TRUE;
            $this->email->initialize($config);

            //Kirim Email
            $this->email->to($this->input->post('email'));
            $this->email->from('neowedding@gmail.com','Neo Wedding Organizer');
            $this->email->subject('Thanks Giving');
            $this->email->message('Terimakasih telah menggunakan jasa kami, salam hormat Neo Wedding Organozer');
            $this->email->send();



        	$data = array(
        		'nama' => $this->input->post('nama'),
        		'email' => $this->input->post('email'),
        		'tanggal' => date('d-m-Y H:i:s'),
        		'pesan' => $this->input->post('pesan'),
        		);

            $this->M_model->inputData($data, 'message');
            $this->session->set_flashdata('success', 'Pesan anda telah terkirim, terimakasih telah menggunakan jasa kami.');
            
        }
        redirect(base_url().'#kontak-neo');
	}
}
?>
