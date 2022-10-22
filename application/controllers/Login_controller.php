<?php
    class Login_controller extends CI_Controller{
        public function admin_login(){
            $this->load->view('admin/admin_login_view');
        }

        public function admin_login_action(){
            $this->form_validation->set_rules('admin_username', 'Username', 'required|valid_email');
            $this->form_validation->set_rules('admin_password', 'Password', 'required');
            $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

            if($this->form_validation->run() == TRUE) {
                //our login code will be executed
                $this->load->model('Login_model');
                $email = $this->input->post('admin_username');
                $password = md5($this->input->post('admin_password'));

                $q = $this->Login_model->admin_login($email, $password);
                if($q->num_rows() == 0){
                    $this->session->set_flashdata('error_message','Check your username or password and try again');
                    return redirect('Login_controller/admin_login');
                }
                if($q->num_rows() == 1){
                    $data = $q->row_array();
                    $this->session->set_userdata('is_admin',$data['admin_id']);
                    return redirect('Admin_controller/dashboard');
                }

            } else{
                //get the error message
                $this->load->view('admin/admin_login_view');
            }
        }
    }
?>