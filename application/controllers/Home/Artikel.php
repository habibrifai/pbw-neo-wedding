<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_model');
    }

	public function index(){
		$data['article'] = $this->M_model->get_data('article')->result();
		$this->load->view('home/artikel', $data);
	}
}
?>
