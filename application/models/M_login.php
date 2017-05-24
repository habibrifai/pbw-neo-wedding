<?php
    class M_login extends CI_Model {
        function login_authen($username,$password){
            $this->db->select('*'); 
            $this->db->where('username', $username); 
            $this->db->where('password', $password); 
            $this->db->from('tbl_user'); 
            $this->db->limit(1);
            
            $query = $this->db->get(); 
            if ($query->num_rows() == 1) {  
                return $query->result();   
            } else {  
                return false;                                          
            }
        }
        
        function update_time($username,$time){
            $this->db->where('username', $username);
            $this->db->update('tbl_user', $time);
        }
        
        function logout(){
	       $this->session->sess_destroy();
	       redirect(base_url('login'));
        }
    }
?>