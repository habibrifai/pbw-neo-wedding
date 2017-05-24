<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepassword extends CI_Controller{

	function __construct(){
        parent::__construct();
        $this->load->model('M_change');
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
        $this->load->view('admin/changepassword', $data);    

    }

    function do_changepassword(){
        $op = htmlspecialchars($this->input->post('old_pass'));
        $np = htmlspecialchars($this->input->post('new_pass'));
        $cp = htmlspecialchars($this->input->post('confirm_pass'));

        $old_pass = hash('md5', hash('sha256', $op));
        $new_pass = hash('md5', hash('sha256', $np));
        $confirm_pass = hash('md5', hash('sha256', $cp));

        $session = $this->session->userdata('session');
        $user = $session['user'];
        $isCorrect = $this->M_change->get_data($user,$old_pass);

        if($new_pass == $confirm_pass && $isCorrect == true){
            $setPass = array('password' => $new_pass);
            $this->M_change->update_pass($user,$setPass);
            $data['success'] = "Password anda sudah terganti, silakan login kembali";
            $this->load->view('admin/login', $data);
            $this->session->sess_destroy();
            //redirect(base_url().'admin/logout', $data);
        } else {
            $data['error'] = "Password tidak sesuai, ulangi lagi";
            $data['ses'] = $session['user'];
            $this->load->view('admin/changepassword', $data);
        }


        // if($new_pass == $confirm_pass){
        //      $session = $this->session->userdata('session');
        //      $user = $session['user'];
        //      $isCorrect = $this->m_change->get_data($user,$old_pass);

        //     if($isCorrect == true){
        //         $setPass = array('password' => $new_pass);
        //         $this->m_change->update_pass($user,$setPass);
        //         redirect(base_url().'admin/logout');
        //     } else {
        //         $data['error'] = "Password tidak sesuai, ulangi lagi";
        //         $data['ses'] = $session['user'];
        //         $this->load->view('admin/changepassword', $data);
        //         //$this->changepassword();
        //     }
        // } else {
        //     $data['error'] = "Password tidak sesuai, ulangi lagi";
        //     $data['ses'] = $session['user'];
        //     $this->load->view('admin/changepassword', $data);
        //     // echo "Password tidak sesuai, ulangi lagi.";
        //     //$this->changepassword();
        // }
    }
}
?>