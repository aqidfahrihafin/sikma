<?php
class PeriodeModel extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_periode()
    {
        $query = $this->db->get('tbl_periode');
        return $query->result_array();
    }
    public function get_active_periode() {
        $this->db->where('status', 'aktif');
        $query = $this->db->get('tbl_periode');
        return $query->result_array();
    }
    
    public function count_periode()
    {
        return $this->db->count_all('tbl_periode');
    }
    public function get_periode($id)
    {
        $query = $this->db->get_where('tbl_periode', array('id' => $id));
        return $query->row_array();
    }

    public function insert_periode($data)
    {
        return $this->db->insert('tbl_periode', $data);
    }

    public function update_periode($id, $data)
    {
        $this->db->where('id_periode', $id);
        return $this->db->update('tbl_periode', $data);
    }

    public function delete_periode($id)
    {
        $this->db->where('id_periode', $id);
        return $this->db->delete('tbl_periode');
    }
}
