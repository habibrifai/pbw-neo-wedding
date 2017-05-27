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

        $config['upload_path']          = './img/artikel/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 1000;
        $config['max_width']            = 2048;
        $config['max_height']           = 2048;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

        if (! $this->upload->do_upload('gbr')){
            $data['error'] = $this->upload->display_errors();
            $data['article'] = $this->M_model->get_data('article')->result();
            $this->load->view('admin/article', $data);
        } else {
            $fileUpload = $this->upload->data();

            $data = array(
                'judul' => $this->input->post('judull'),
                'gambar' =>$fileUpload['file_name'],
                'isi' => $this->input->post('txtArtikel'),
                'tgl_update' => date('d-m-Y H:i:s')
            );
            $this->M_model->inputData($data,'article');
            redirect(base_url().'Admin/Article');
        }  
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

        $config['upload_path']          = './img/artikel/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 1000;
        $config['max_width']            = 2048;
        $config['max_height']           = 2048;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);
        // $session = $this->session->userdata('session');

        if(isset($_FILES['gbr']) && $_FILES['gbr']['size'] > 0){
            if (! $this->upload->do_upload('gbr')){
                // $data['ses'] = $session['user'];
                $data['error1'] = $this->upload->display_errors();
                $data['article'] = $this->M_model->get_data('article')->result();
                $this->load->view('admin/article', $data);
                // redirect(base_url().'admin/gallery');
            } else {
                $fileUpload = $this->upload->data();
                $nomor = $this->input->post('noo');
                $datab = array(
                    'judul' => $this->input->post('judull'),
                    'isi' => $this->input->post('txtArtikel'),
                    'gambar' => $fileUpload['file_name'],
                    'tgl_update' => date('d-m-Y H:i:s')
                );
                $this->M_model->update($nomor,$datab, 'article');
                redirect(base_url().'Admin/Article');
                // echo $this->db->last_query();
            }
        } else {
            $nomor = $this->input->post('noo');
                $databb = array(
                    'judul' => $this->input->post('judull'),
                    'isi' => $this->input->post('txtArtikel'),
                    'tgl_update' => date('d F Y',strtotime(date('d-m-Y')))
                );
            $this->M_model->update($nomor,$databb, 'article');
            redirect(base_url().'Admin/Article');
            // echo $this->db->last_query();
        }
    }

    function editArtikel($no){
        $data['artikel'] = $this->M_model->get_item($no, 'article')->result();
        $this->load->view('admin/artikel', $data);
    }
}
?>