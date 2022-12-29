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

    public function residential(){
        $data['title']= "Residential";
        $data['residential'] = $this->db->where('post_category','12')->get('posts')->result();
        $this->load->view('front/layouts/header');
        $this->load->view('services/residential', $data);
        $this->load->view('front/layouts/footer');
    }
    public function commercial(){
        $data['title']= "Commercial";
        $data['residential'] = $this->db->where('post_category','13')->get('posts')->result();
        $this->load->view('front/layouts/header');
        $this->load->view('services/residential', $data);
        $this->load->view('front/layouts/footer');
    }

    public function elevation_design(){
        $data['title']= "Elevation Design";
        $data['residential'] = $this->db->where('post_category','14')->get('posts')->result();
        $this->load->view('front/layouts/header');
        $this->load->view('services/residential', $data);
        $this->load->view('front/layouts/footer');
    }
    public function view_service(){
        $data['title']= "View Service";
        $title = $this->uri->segment(2);
        $data['post'] = $this->db->where(['post_slug_url'=> $title])->get('posts')->row();
        $this->load->view('front/layouts/header');
        $this->load->view('front/view_services', $data);
        $this->load->view('front/layouts/footer');
    }
    
}