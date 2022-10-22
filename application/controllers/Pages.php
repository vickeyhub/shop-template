<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Pages extends CI_Controller {
        public function index(){
            $this->load->view('front/layouts/header');
            $this->load->view('front/index');
            $this->load->view('front/layouts/footer');
        }
    }
?>