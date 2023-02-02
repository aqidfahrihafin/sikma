<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LupaPassword extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('LupaPasswordModel');
        $this->load->library('form_validation');
        $this->load->library('email');
        
    }

        public function index() {
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 587,
                'smtp_user' => 'aqidfahrihafin@gmail.com',
                'smtp_pass' => 'AlwaysJungkook97',
                'mailtype'  => 'html', 
                'charset'   => 'utf-8'
            );
            $this->email->initialize($config);
            $this->email->set_newline("\r\n");
            // proses kirim email
            $this->load->view('LupaPassword');
        }
    
        public function send_reset_link() {
            //validate the email address
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error', 'Silakan masukkan alamat email yang valid !');
                redirect('LupaPassword');
            } else {
                //check if the email address exists in the database
                $email = $this->input->post('email');
                $user = $this->LupaPasswordModel->get_user($email);
                $user_exists = $this->LupaPasswordModel->check_user_exists($email);
    
                if ($user_exists) {
                    //generate a reset password token
                    $token = md5(uniqid(rand(), true));
                    $link = base_url() . "lupapassword/reset_password?token".$token;
                    $message = $this->load->view('email_reset_password', array('link' => $link, 'username' => $user['username']), true);
    
                    //save the token to the database
                    $this->LupaPasswordModel->save_token($email, $token);
    
                    //send the reset password link to the user's email address
                    $this->email->set_mailtype("html");
                    $this->email->from('aqidfahrihafin@gmail.com', 'Sikma');
                    $this->email->to($email);
                    $this->email->subject('Reset Password');
                    $this->email->message($message);
                    $this->email->send();
    
                    $this->session->set_flashdata('success', 'Tautan untuk mengatur ulang kata sandi telah dikirim ke alamat email Anda !');
                    redirect('LupaPassword');
                } else {
                    $this->session->set_flashdata('error', 'Alamat email ini tidak terdaftar !');
                    redirect('LupaPassword');
                }
            }
        }
    
        public function reset_password() {
            $token = $this->input->get('token');
    
            //check if the token is valid
            $valid_token = $this->LupaPasswordModel->check_valid_token($token);
    
            if ($valid_token) {
                $this->load->view('reset_password');
            } else {
                $this->session->set_flashdata('error', 'Invalid token');
                redirect('LupaPassword');
            }
        }
    
        public function update_password() {
            
             //validate the form
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
     
            
            $pass = $this->input->post('password');
            $token = $this->input->post('token');
            $password = md5($pass);
    
           
            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error', validation_errors());
                redirect('LupaPassword/reset_password?token=' . $token);
            } else {
                //update the password in the database
                $this->LupaPasswordModel->update_password($token, $password);
    
                //delete the token from the database
                $this->LupaPasswordModel->delete_token($token);
    
                $this->session->set_flashdata('alert', 'Password kamu berhasil di <b>Reset !</b>');
                $this->session->set_flashdata('alert_timeout', 4000);
                redirect('login');
            }
        }
    
    



}