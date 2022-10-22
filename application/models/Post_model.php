<?php
    class Post_model extends CI_Model {
        public function save_category($data){
            $query = $this->db->insert('post_category',$data);
            return $query;
        }


        public function get_category($limit,$offset){
            $query = $this->db->limit($limit,$offset)
            ->get('post_category');
            return $query;
        }

        public function get_rows($table){
            $query = $this->db->get($table);

            return $query->num_rows();
        }

        public function get_single_cat($id){
            $query = $this->db->where('post_category_id',$id)
                                ->get('post_category');
            return $query;
        }

        public function get_all_post($limit,$offset){
            $query = $this->db->limit($limit,$offset)
            ->join('post_category','post_category.post_category_id = posts.post_category','left')
            ->get('posts');
            return $query;
        }
    }
?>