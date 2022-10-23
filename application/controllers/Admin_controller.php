<?php
class Admin_controller extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_model', 'pm');
        if (!$this->session->userdata('is_admin')) {
            return redirect('Login_controller/admin_login');
        }
    }
    public function dashboard()
    {
        $this->load->view('admin/include/header');
        $this->load->view('admin/admin_dashboard');
    }

    // post category form
    public function add_category()
    {
        $this->load->view('admin/include/header');
        $this->load->view('admin/add_post_category');
    }

    public function save_category()
    {
        // echo '<pre>'; print_r($_POST); die(__LINE__);
        $config = [
            'allowed_types' => 'jpg|png|jpeg|gif',
            'upload_path' => './upload/categories/'
        ];
        // load the upload library
        $this->load->library('upload', $config);

        $this->form_validation->set_rules('category_title', 'Category title', 'required|is_unique[post_category.post_category_title]');
        $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

        if ($this->form_validation->run() && $this->upload->do_upload('category_thumbnail')) {
            //its wroking fine
            $file_data = $this->upload->data();

            $file_path = base_url("upload/categories/" . $file_data['file_name']);
            $data = [
                'post_category_title' => $this->input->post('category_title'),
                'post_category_slug' => url_title($this->input->post('category_title'), 'dash', true),
                'category_thumbnail' => $file_path,
            ];
            if ($this->pm->save_category($data)) {
                return redirect('Admin_controller/show_all_cat');
            }
        } else {
            // if its not working
            $this->load->view('admin/include/header');
            $this->load->view('admin/add_post_category');
            $this->load->view('admin/include/footer');
        }
    }

    public function show_all_cat()
    {
        $this->load->library('pagination');
        $this->load->helper('custom_pagination');
        $config = custom_pagination('Admin_controller/show_all_cat', 10, $this->pm->get_rows('post_category'));

        $this->pagination->initialize($config);

        $data['fetch'] = $this->pm->get_category($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/include/header');
        $this->load->view('admin/all_post_cat', $data);
    }

    public function fetch_single_post_category()
    {
        $single_category = $this->pm->get_single_cat($this->input->post('category_id'));
        if ($single_category->num_rows() > 0) {
            $data = [
                'status' => 'success',
                'cat_details' => $single_category->result()
            ];
        } else {
            $data = [
                'status' => 'faild'
            ];
        }

        echo json_encode($data);
    }

    public function update_post_category()
    {
        // echo '<pre>'; print_r($_FILES['category_thumbnail']['name']); die(" line no. ".__LINE__);
        $cat_id =  $this->input->post('cat_id');
        $data = array();
        if (!empty($_FILES['category_thumbnail']['name'])) {

            $get_thumbnail_query = $this->db->where('post_category_id', $cat_id)->get('post_category')->row();
            if ($get_thumbnail_query) {
                $final_file = trim($get_thumbnail_query->category_thumbnail, base_url());
                unlink($final_file);
            }
            $config = [
                'allowed_types' => 'jpg|png|jpeg|gif',
                'upload_path' => './upload/categories/'
            ];
            // load the upload library
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('category_thumbnail')) {
                //its wroking fine
                $file_data = $this->upload->data();

                $file_path = base_url("upload/categories/" . $file_data['file_name']);
            }

            $data = [
                'post_category_title' => $this->input->post('cat_title'),
                'post_category_slug' => url_title($this->input->post('cat_title'), 'dash', true),
                'category_thumbnail' => $file_path
            ];
        } else {
            $data = [
                'post_category_title' => $this->input->post('cat_title'),
                'post_category_slug' => url_title($this->input->post('cat_title'), 'dash', true),
            ];
        }

        $update_query = $this->db->where('post_category_id', $cat_id)
            ->update('post_category', $data);

        if ($update_query == true) {
            $output = [
                'status' => 200,
                'message' => "Post category updated successfully"
            ];
        } else {
            $output = [
                'status' => 203,
                'message' => "Faild"
            ];
        }

        echo json_encode($output);
    }

    public function delete_post_category()
    {
        $cat_id =  $this->input->post("cat_id");
        $get_thumbnail_query = $this->db->where('post_category_id', $cat_id)->get('post_category')->row();
        $final_file = trim($get_thumbnail_query->category_thumbnail, base_url());
        unlink($final_file);

        $query = $this->db->where('post_category_id', $cat_id)->delete('post_category');

        if ($query == true) {
            $data = [
                'status' => 200,
                'message' => "your post category has been deleted"
            ];
        } else {
            $data = [
                'status' => 203,
                'message' => "Something went wrong"
            ];
        }
        echo json_encode($data);
    }

    // post form of articles
    public function add_post()
    {
        $data['fetch_cat'] = $this->db->get('post_category');
        $this->load->view('admin/include/header');
        $this->load->view('admin/article_form', $data);
    }

    public function save_article()
    {
        $config = [
            'allowed_types' => 'jpg|png|jpeg|gif',
            'upload_path' => './upload/products/'
        ];
        // load the upload library
        $this->load->library('upload', $config);

        $this->form_validation->set_rules('post_title', 'Post title', 'required');
        $this->form_validation->set_rules('description', 'Post Description', 'required');
        $this->form_validation->set_rules('category', 'Post Category', 'required');
        $this->form_validation->set_rules('meta_tags', 'Post meta tags', 'required');
        $this->form_validation->set_rules('meta_description', 'Post meta description', 'required');
        // set error delimeters of validation
        $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

        if ($this->form_validation->run() && $this->upload->do_upload('post_thumbnail')) {
            //if it is success
            $file_data = $this->upload->data();

            $file_path = base_url("upload/products/" . $file_data['file_name']);
            $data = [
                'post_title'            => $this->input->post('post_title'),
                'post_slug_url'         => url_title($this->input->post('post_title'), 'dash', true),
                'post_description'      => $this->input->post('description'),
                'post_category'         => $this->input->post('category'),
                'post_thumbnail'        => $file_path,
                'post_meta_tags'        => $this->input->post('meta_tags'),
                'post_meta_description' => $this->input->post('meta_description'),
            ];

            if ($this->db->insert('posts', $data)) {
                $json = [
                    'status' => 200,
                    'message' => 'Success'
                ];
            }
        } else {
            $json = [
                'status'                 => 203,
                'message'                => 'Faild',
                'upload_error'           => $this->upload->display_errors(),
                'title_error'            => form_error('post_title'),
                'description_error'      => form_error('description'),
                'cat_error'              => form_error('category'),
                'meta_tag_error'         => form_error('meta_tags'),
                'meta_description_error' => form_error('meta_description'),
            ];
        }

        echo json_encode($json);
    }

    // Admin logout method
    public function logout()
    {
        $this->session->unset_userdata('is_admin');
        return redirect('Login_controller/admin_login');
    }


    public function show_all_post()
    {
        $this->load->library('pagination');
        $this->load->helper('custom_pagination');
        $config = custom_pagination('Admin_controller/show_all_post', 10, $this->pm->get_rows('posts'));

        $this->pagination->initialize($config);

        $data['fetch'] = $this->pm->get_all_post($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/include/header');
        $this->load->view('admin/all_posts', $data);
    }

    public function delete_post($id)
    {
        $where = $this->db->where('post_id', $id);
        $get = $where->get('posts')->row_array();
        if ($get) {
            $final_file = trim($get['category_thumbnail'], base_url());
            unlink($final_file);
        }
        if ($get['post_thumbnail'] != '') {
            unlink(str_replace(base_url(), "", $get['post_thumbnail']));
        }
        $delete_query = $this->db->where('post_id', $id)->delete('posts');

        if ($delete_query == true) {
            $this->session->set_flashdata('delete_post', 'Your post has been deleted');
            return redirect('Admin_controller/show_all_post');
        }
    }
}
