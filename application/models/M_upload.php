<?php
    class M_upload extends CI_Model {
        function inputData($data){
            $this->db->insert('gallery', $data);
        }
    }
?>