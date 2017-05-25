<?php
  class M_message extends CI_Model {

  	function submit($data, $table){
  		$this->db->insert($table, $data);
  	}
}
?>