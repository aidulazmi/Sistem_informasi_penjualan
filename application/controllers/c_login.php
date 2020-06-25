<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login'); //load model m_login
    }

    public function index()
    {

            if($this->m_login->is_logged_in())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                $this->load->view('c_login');

            }else{

                //apabila session belum ada/terdaftarkan

                //form validation
                $this->form_validation->set_rules('username', 'username', 'required');
                $this->form_validation->set_rules('password', 'password', 'required');

                //pesan form
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //
                $username = $this->input->post("username", TRUE);
                $password = $this->input->post('password', TRUE);

                //cek data via model
                $query = $this->m_login->test_login('user', array('username' => $username), array('password' => $password));

                //jika ditemukan, maka create session
                if ($query != FALSE) {
                    foreach ($query as $k) {

                        $data = array(
                            'user_id'   => $k->id_user,
                            'username' => $k->username,
                            'password' => $k->password,
                            'nama_lengkap' => $k->nama_lengkap,
                            'status'      => $k->status
                        );
                        //set session userdata
                        $this->session->set_userdata($data);

                        //redirect berdasarkan level user
                        if($this->session->userdata("status") == "admin"){
                            redirect('c_admin/home');
                        }elseif($this->session->userdata("status") == "kasir"){
                            redirect('c_kasir');
                        }else{
                            redirect('c_pimpinan');
                        }

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                    $this->load->view('v_login', $data);
                }

            }else{

                $this->load->view('v_login');
            }

        }

    }
        public function logout()
    {
        $this->session->sess_destroy();
        redirect('c_login');
    }

  
}