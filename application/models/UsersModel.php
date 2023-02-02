<?php
class UsersModel extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_user()
    {
        $query = $this->db->get('tbl_user');
        return $query->result_array();
    }
    public function count_user()
    {
        return $this->db->count_all('tbl_user');
    }
    public function get_user($id)
    {
        $query = $this->db->get_where('tbl_user', array('id' => $id));
        return $query->row_array();
    }

    public function insert_user($data)
    {
        return $this->db->insert('tbl_user', $data);
    }

    public function update_user($id, $data)
    {
        $this->db->where('id_user', $id);
        return $this->db->update('tbl_user', $data);
    }

    public function delete_user($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->delete('tbl_user');
    }
}
