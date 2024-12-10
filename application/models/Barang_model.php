<?php
class Barang_model extends CI_Model
{
  private $table = 'barang';

  public function get_all_barang()
  {
    return $this->db->get($this->table)->result();
  }

  public function insert_barang($data)
  {
    return $this->db->insert($this->table, $data);
  }
}
