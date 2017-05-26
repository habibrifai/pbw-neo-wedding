<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	function __construct()
	{
    parent::__construct();
    $this->load->helper("url");
    $this->load->model('M_model');
    $this->load->library("pagination");
  }
		
	public function index()
	{
		$this->load->view('home/artikel');
	}
}
?>
