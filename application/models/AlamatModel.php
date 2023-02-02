<?php
class AlamatModel extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_alamat()
    {
        $query = $this->db->get('tbl_alamat');
        return $query->result_array();
    }
    public function count_alamat()
    {
        return $this->db->count_all('tbl_alamat');
    }
    public function get_alamat($id)
    {
        $query = $this->db->get_where('tbl_alamat', array('id' => $id));
        return $query->row_array();
    }

    public function insert_alamat($data)
    {
        return $this->db->insert('tbl_alamat', $data);
    }

    public function update_alamat($id, $dataAlamat)
    {
        $this->db->where('id_alamat', $id);
        return $this->db->update('tbl_alamat', $dataAlamat);
    }

    public function delete_alamat($id)
    {
        $this->db->where('id_alamat', $id);
        return $this->db->delete('tbl_alamat');
    }
}
