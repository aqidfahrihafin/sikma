<?php
class M_pembayaran extends CI_Model
{
    function pembayaran_mhs()
    {
        $this->db->where('tbl_pembayaran.id_pendaftaran', $this->session->userdata('id_pendaftaran'));
        return $this->db->get('tbl_pembayaran')->result();
    }
}
