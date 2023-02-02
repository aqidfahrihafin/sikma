<?php
class ProdiModel extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_prodi()
    {
        $query = $this->db->get('tbl_prodi');
        return $query->result_array();
    }
    public function count_prodi()
    {
        return $this->db->count_all('tbl_prodi');
    }
    public function get_prodi($id)
    {
        $query = $this->db->get_where('tbl_prodi', array('id' => $id));
        return $query->row_array();
    }

    public function insert_prodi($data)
    {
        return $this->db->insert('tbl_prodi', $data);
    }

    public function update_prodi($id, $data)
    {
        $this->db->where('id_prodi', $id);
        return $this->db->update('tbl_prodi', $data);
    }

    public function delete_prodi($id)
    {
        $this->db->where('id_prodi', $id);
        return $this->db->delete('tbl_prodi');
    }
}
