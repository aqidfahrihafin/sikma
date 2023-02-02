<?php
class ProgramModel extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_program()
    {
        $query = $this->db->get('tbl_program');
        return $query->result_array();
    }
    public function count_program()
    {
        return $this->db->count_all('tbl_program');
    }
    public function get_program($id)
    {
        $query = $this->db->get_where('tbl_program', array('id' => $id));
        return $query->row_array();
    }

    public function insert_program($data)
    {
        return $this->db->insert('tbl_program', $data);
    }

    public function update_program($id, $data)
    {
        $this->db->where('id_program', $id);
        return $this->db->update('tbl_program', $data);
    }

    public function delete_program($id)
    {
        $this->db->where('id_program', $id);
        return $this->db->delete('tbl_program');
    }
}
