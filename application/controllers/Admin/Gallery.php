<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller{

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
        $data['gallery'] = $this->M_model->get_data('gallery')->result();
        $this->load->view('admin/gallery', $data);  
    }

    function addGallery(){
        $config['upload_path']          = './img/gambar/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);
        // $session = $this->session->userdata('session');
        // $data['ses'] = $session['user'];
        // $time = array('last_login' => date('Y-m-d H:i:s'));

        if ( ! $this->upload->do_upload('img')){
            // $data['ses'] = $session['user'];
            $data['error'] = $this->upload->display_errors();
            $data['gallery'] = $this->M_model->get_data('gallery')->result();
            $this->load->view('admin/gallery', $data);
            // redirect(base_url().'admin/gallery');
        } else {
            $fileUpload = $this->upload->data();

            $datab = array(
                'judul' => $this->input->post('judull'),
                'keterangan' => $this->input->post('ket'),
                'gambar' => $fileUpload['file_name'],
                'tgl_update' => date('Y-m-d H:i:s')
            );
            $this->M_model->inputData($datab, 'gallery');
            redirect(base_url().'Admin/Gallery');
            // echo $this->db->last_query();
        }
    }

    function doDelete($nomor){
        $this->M_model->delete($nomor, 'gallery');
        redirect(base_url().'Admin/Gallery');
    }

    // function edit($nomor){
    //     $session = $this->session->userdata('session');
    //     $data = array('no' => $nomor);

    //     $data['edit'] = $this->M_model->get_item($nomor,'gallery')->result();
    //     $data['ses'] = $session['user'];
    //     $data['gallery'] = $this->M_model->get_data('gallery')->result();
    //     $this->load->view('Admin/Gallery', $data);
    //     // var_dump($data['edit']);
    // }

    function getSelectedGallery($nomor){
        $data = $this->M_model->get_item($nomor, 'gallery')->row_array();
        echo json_encode($data);
    }

    function editGallery(){
        $config['upload_path']          = './img/gambar/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 0;
        $config['max_width']            = 2048;
        $config['max_height']           = 2048;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);
        // $session = $this->session->userdata('session');

        if(isset($_FILES['img']) && $_FILES['img']['size'] > 0){
            if (! $this->upload->do_upload('img')){
                // $data['ses'] = $session['user'];
                $data['error1'] = $this->upload->display_errors();
                $data['gallery'] = $this->M_model->get_data('gallery')->result();
                $this->load->view('admin/gallery', $data);
                // redirect(base_url().'admin/gallery');
            } else {
                $fileUpload = $this->upload->data();
                $nomor = $this->input->post('noo');
                $datab = array(
                    'judul' => $this->input->post('judull'),
                    'keterangan' => $this->input->post('ket'),
                    'gambar' => $fileUpload['file_name'],
                    'tgl_update' => date('Y-m-d H:i:s')
                );
                $this->M_model->update($nomor,$datab, 'gallery');
                redirect(base_url().'Admin/Gallery');
                // echo $this->db->last_query();
            }
        } else {
            $nomor = $this->input->post('noo');
                $databb = array(
                    'judul' => $this->input->post('judull'),
                    'keterangan' => $this->input->post('ket'),
                    'tgl_update' => date('Y-m-d H:i:s')
                );
            $this->M_model->update($nomor,$databb, 'gallery');
            redirect(base_url().'Admin/Gallery');
            // echo $this->db->last_query();
        }
    }
}
?>