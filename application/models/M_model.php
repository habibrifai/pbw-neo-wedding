<?php
  class M_model extends CI_Model {
    function get_data($table){
      return $this->db->get($table);
    }

    function get_item($nomor,$table){
      $this->db->where('no', $nomor);
      return $this->db->get($table);
    }

    function delete($nomor, $table){
      $this->db->where('no', $nomor);
      $this->db->delete($table);
    }

    function update($nomor,$data,$table){
      $this->db->where('no', $nomor);
      $this->db->update($table,$data);
    }

    function inputData($data, $table){
      $this->db->insert($table, $data);
    }

    function record_count($table) {
      return $this->db->count_all($table);
    }

    function fetch_table($limit, $start, $table) {
      $this->db->order_by("tgl_update","desc");
      // $this->db->select('gambar');
      $this->db->from($table);
      $this->db->limit($limit, $start);
      $query = $this->db->get();

      if ($query->num_rows() > 0) {
        foreach ($query->result() as $row) {
          $data[] = $row;
        }
        return $data;
      }
      return false;
    }
  }
?>