<?php
class MahasiswaModel extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_all_mahasiswa()
    {
        $query = $this->db->get('tbl_mahasiswa');
        return $query->result_array();
    }
    public function count_mahasiswa()
    {
        return $this->db->count_all('tbl_mahasiswa');
    }
    public function get_mahasiswa($id)
    {
        $query = $this->db->get_where('tbl_mahasiswa', array('id_mahasiswa' => $id));
        return $query->row_array();
    }

    public function insert_mahasiswa($data)
    {
        return $this->db->insert('tbl_mahasiswa', $data);
    }

    public function update_mahasiswa($id, $data)
    {
        $this->db->where('id_mahasiswa', $id);
        return $this->db->update('tbl_mahasiswa', $data);
    }

    public function delete_mahasiswa($id)
    {
        $this->db->where('id_mahasiswa', $id);
        return $this->db->delete('tbl_mahasiswa');
    }
}
