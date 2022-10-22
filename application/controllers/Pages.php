<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    class Pages extends CI_Controller {
        public function __construct(){
            parent::__construct();
            // $this->load->library('Template');
        }
        public function index(){
            $this->load->view('front/layouts/header');
            $this->load->view('front/index');
            $this->load->view('front/layouts/footer');
        }

        public function about_us(){
            $this->load->view('front/layouts/header');
            $this->load->view('front/about');
            $this->load->view('front/layouts/footer');
        }

        public function services(){
            $this->load->view('front/layouts/header');
            $this->load->view('front/service');
            $this->load->view('front/layouts/footer');
        }

        public function contact_us(){
            $this->load->view('front/layouts/header');
            $this->load->view('front/contact_us');
            $this->load->view('front/layouts/footer');
        }
    }
?>