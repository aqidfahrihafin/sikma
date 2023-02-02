<?php
class SetupModel extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_setup()
    {
        $query = $this->db->get('tbl_setup');
        return $query->result_array();
    }
    public function count_setup()
    {
        return $this->db->count_all('tbl_setup');
    }
    public function get_setup($id)
    {
        $query = $this->db->get_where('tbl_setup', array('id' => $id));
        return $query->row_array();
    }

    public function insert_setup($data)
    {
        return $this->db->insert('tbl_setup', $data);
    }

    public function update_setup($id, $data)
    {
        $this->db->where('id_setup', $id);
        return $this->db->update('tbl_setup', $data);
    }

    public function delete_setup($id)
    {
        $this->db->where('id_setup', $id);
        return $this->db->delete('tbl_setup');
    }
}
