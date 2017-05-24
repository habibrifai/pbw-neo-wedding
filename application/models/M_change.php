<?php
    class M_change extends CI_Model {
        function get_data($user,$pass){
            $this->db->select('*'); 
            $this->db->where('username', $user);
            $this->db->where('password', $pass); 
            $this->db->from('tbl_user'); 
            $this->db->limit(1);
            
            $query = $this->db->get(); 
            if ($query->num_rows() == 1) {  
                return true;   
            } else {  
                return false;                                          
            }
        }

        function update_pass($user,$pass){
            $this->db->where('username', $user);
            $this->db->update('tbl_user', $pass);
        }
    }
?>