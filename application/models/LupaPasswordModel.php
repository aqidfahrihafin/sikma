<?php 

class LupaPasswordModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function get_user($email){
        $this->db->where('email', $email);
        $query = $this->db->get('tbl_user');
        return $query->row_array();
    }

    public function check_user_exists($email) {
        $query = $this->db->get_where('tbl_user', array('email' => $email));
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function save_token($email, $token) {
        $data = array(
            'email' => $email,
            'token' => $token,
            'created_at' => date('Y-m-d H:i:s')
        );
        $this->db->insert('password_resets', $data);
    }

    public function check_valid_token($token) {
        $query = $this->db->get_where('password_resets', array('token' => $token));
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function update_password($token, $password) {
        $email = $this->get_email_by_token($token);
        $data = array(
            'password' => password_hash($password, PASSWORD_BCRYPT)
        );
        $this->db->where('email', $email);
        $this->db->update('tbl_user', $data);
    }
    public function get_email_by_token($token){
        $query = $this->db->get_where('password_resets', array('token' => $token));
        $result = $query->row_array();
        return $result['email'];
    }
    public function delete_token($token){
        $this->db->delete('password_resets', array('token' => $token));
    }



}
