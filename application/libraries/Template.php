<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Template {
        public function front_template($page){
            echo $this->load->view('front/layouts/header');
            echo $this->load->view($page);
            echo $this->load->view('front/layouts/footer');
        }
    }
?>