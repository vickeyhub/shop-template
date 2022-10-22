<?php
    class Login_model extends CI_model{
        public function admin_login($email, $password){
            $query = $this->db->where(['admin_email'=>$email, 'admin_password'=>$password])
                                ->get('admin');
            return $query;
        }
    }
?>