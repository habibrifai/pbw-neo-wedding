<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller{

	function __construct(){
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
        // $session = $this->session->userdata('session');
        // $data['ses'] = $session['user'];
        $data['article'] = $this->M_model->get_data('article')->result();
        $this->load->view('admin/article', $data);    
    }

    function showAdd(){
        $this->load->view('admin/artikel');    
    }

    function addArticle(){
        $data = array(
                'judul' => $this->input->post('judull'),
                'isi' => $this->input->post('txtArtikel'),
                'tgl_update' => date('d-m-Y H:i:s'));
        $this->M_model->inputData($data,'article');
        redirect(base_url().'Admin/Article');
    }

    function doDelete($nomor){
        $this->M_model->delete($nomor, 'article');
        redirect(base_url().'Admin/Article');
    }

    // function edit($nomor){
    //     $session = $this->session->userdata('session');
    //     $data = array('no' => $nomor);

    //     $data['edit'] = $this->M_model->get_item($data,'article')->result();
    //     $data['ses'] = $session['user'];
    //     $data['article'] = $this->M_model->get_data('article')->result();
    //     $this->load->view('Admin/Article', $data);
    //     // var_dump($data['edit']);
    // }

    // function getSelectedArticle($nomor){
    //     $data = $this->M_model->get_item($nomor, 'article')->row_array();
    //     echo json_encode($data);
    // }

    function updateArticle($no){
        $datab = array(
            'judul' => $this->input->post('judull'),
            'isi' => $this->input->post('txtArtikel'),
            'tgl_update' => date('Y-m-d H:i:s')
        );
        $this->M_model->update($no,$datab,'article');
        redirect(base_url().'Admin/Article');
    }

    function editArtikel($no){
        $data['artikel'] = $this->M_model->get_item($no, 'article')->result();
        $this->load->view('admin/artikel', $data);
    }
}
?>