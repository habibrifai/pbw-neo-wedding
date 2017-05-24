<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

	function __construct(){
        parent::__construct();
        $this->load->model('M_login');
        $this->load->helper(array('form', 'url'));
        date_default_timezone_set('Asia/Jakarta');
    }

    function index(){
        $this->load->view('admin/login');
    }

    function do_login(){
        $username = htmlspecialchars($this->input->post('username'));
		$p = htmlspecialchars($this->input->post('pass'));
        $password = hash('md5', hash('sha256', $p));

        // echo $username;
        // echo $password;

		$isLogin = $this->M_login->login_authen($username, $password); 
        
        // $date = date('Y-m-d H:i:s');
        $time = array('last_login' => date('Y-m-d H:i:s'));
        
		if($isLogin == true){
            
            $this->M_login->update_time($username,$time);
            
			$data_session = array(
				'user' => $isLogin[0]->username,
                'email' => $isLogin[0]->email                
				);
 
			$this->session->set_userdata('session', $data_session);
 
			redirect(base_url().'Admin/Dashboard');
 
		} else {
            $data['error'] = "Invalid User and Password combination";
			$this->load->view('admin/login', $data);
		}
    }


    function logout(){
	   $this->session->sess_destroy();
	   redirect(base_url().'Admin/Login');
    }
    
}
?>