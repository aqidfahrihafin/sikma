<?php
class M_data extends CI_Model
{
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    function get_data($table)
    {
        return $this->db->get($table);
    }

    function get_data1($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function delete_data($where, $table)
    {
        $this->db->delete($table, $where);
    }

    public function count($table)
    {
        return $this->db->count_all($table);
    }


    function profil_mhs()
    {
        $this->db->where('tbl_pendaftaran.id_pendaftaran', $this->session->userdata('id_pendaftaran'));
        return $this->db->get('tbl_pendaftaran')->result();
    }
    function persyaratan_mhs()
    {
        $this->db->where('tbl_persyaratan.id_pendaftaran', $this->session->userdata('id_pendaftaran'));
        return $this->db->get('tbl_persyaratan')->result();
    }
    function getDataById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tbl_pembayaran');
    }

    public function import_data($datadosen)
    {
        $jumlah = count($datadosen);
        if ($jumlah > 0) {
            $this->db->replace('tbl_dosen', $datadosen);
        }
    }
    public function import_instansi($datainstansi)
    {
        $jumlah = count($datainstansi);
        if ($jumlah > 0) {
            $this->db->replace('tbl_instansi', $datainstansi);
        }
    }
}
