<?php
defined('BASEPATH') or die("No direct script allowed");

class Services extends CI_Controller {
    public function interiors_and_design(){
        $this->load->view('front/layouts/header');
        $this->load->view('services/interiors_and_design');
        $this->load->view('front/layouts/footer');
    }

    public function turnkey(){
        $this->load->view('front/layouts/header');
        $this->load->view('services/turnkey');
        $this->load->view('front/layouts/footer');
    }

    public function project_consultancy(){
        $this->load->view('front/layouts/header');
        $this->load->view('services/project_consultancy');
        $this->load->view('front/layouts/footer');
    }
    public function decor(){
        $this->load->view('front/layouts/header');
        $this->load->view('services/decor');
        $this->load->view('front/layouts/footer');
    }
    public function landscape_designing(){
        $this->load->view('front/layouts/header');
        $this->load->view('services/landscape_designing');
        $this->load->view('front/layouts/footer');
    }
    public function lighting_art_and_accessories(){
        $this->load->view('front/layouts/header');
        $this->load->view('services/lighting_art_and_accessories');
        $this->load->view('front/layouts/footer');
    }
    
}