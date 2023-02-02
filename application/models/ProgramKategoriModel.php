<?php
class ProgramKategoriModel extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_program_kategori()
    {
        $query = $this->db->get('tbl_program_kategori');
        return $query->result_array();
    }
    public function count_program_kategori()
    {
        return $this->db->count_all('tbl_program_kategori');
    }
    public function get_program_kategori($id)
    {
        $query = $this->db->get_where('tbl_program_kategori', array('id' => $id));
        return $query->row_array();
    }

    public function insert_program_kategori($data)
    {
        return $this->db->insert('tbl_program_kategori', $data);
    }

    public function update_program_kategori($id, $data)
    {
        $this->db->where('id_kategori', $id);
        return $this->db->update('tbl_program_kategori', $data);
    }

    public function delete_program_kategori($id)
    {
        $this->db->where('id_kategori', $id);
        return $this->db->delete('tbl_program_kategori');
    }
}
