<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {
	function __construct(){
	    parent::__construct();
	    $this->load->helper("url");
	    $this->load->model('M_model');
	    $this->load->library("pagination");
	}
		
	function index(){

        $config = array();
        $config["base_url"] = base_url().'Home/Artikel/index/';
        $config["total_rows"] = $this->M_model->record_count('article');
        $config["per_page"] = 2;
        $config["uri_segment"] = 4;
        $limit = $config["per_page"];

        $config["full_tag_open"] = '<ul class="pagination">';
        $config["full_tag_close"] = '</ul>';
        $config["first_link"] = false;
        $config["last_link"] = false;
        $config["first_tag_open"] = '<li>';
        $config["first_tag_close"] = '</li>';
        $config["prev_link"] = '&laquo';
        $config["prev_tag_open"] = "<li class='prev'>";
        $config["prev_tag_close"] = '</li>';
        $config["next_link"] = '&raquo';
        $config["next_tag_open"] = '<li>';
        $config["next_tag_close"] = '</li>';
        $config["last_tag_open"] = '<li>';
        $config["last_tag_close"] = '</li>';
        $config["cur_tag_open"] = "<li class='active'><a href='#'>";
        $config["cur_tag_close"] = '</a></li>';
        $config["num_tag_open"] = '<li>';
        $config["num_tag_close"] = '</li>';

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data["artikel"] = $this->M_model->fetch_table($limit, $page, 'article');
        $data["links"] = $this->pagination->create_links();

        $this->load->view('home/artikel', $data);
	}

	function artikelMore($no){
		$data['artikel'] = $this->M_model->get_item($no, 'article')->result();
		$this->load->view('home/artikel_more', $data);
	}

}
?>
