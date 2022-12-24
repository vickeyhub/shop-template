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

        public function our_products(){
            $data['all_categories'] = $this->db->where_not_in('post_category_title','residential')
            ->where_not_in('post_category_title','commercial')
            ->where_not_in('post_category_title','elevation')
            ->get('post_category')->result();
            $this->load->view('front/layouts/header');
            $this->load->view('front/our_products', $data);
            $this->load->view('front/layouts/footer');
        }

        public function product(){
            $slug = $this->uri->segment(2);
            $data = [
                'category' => $this->db->where(['post_category.post_category_slug'=> $slug])->get('post_category')->row(),
                'posts' => $this->db->where(['post_category_slug' => $slug])
                ->join('post_category', 'post_category.post_category_id = posts.post_category')
                ->get('posts')->result()
            ];
            $this->load->view('front/layouts/header');
            $this->load->view('front/all_product_view', $data);
            $this->load->view('front/layouts/footer');
        }
    }
?>