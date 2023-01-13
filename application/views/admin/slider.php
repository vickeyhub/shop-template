<!-- partial -->
<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->
    <?php $this->load->view('admin/include/right_sidebar'); ?>
    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    <?php $this->load->view('admin/include/sidebar'); ?>
    <section class="main-panel">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header bg-primary-g text-white">Slider Manager</div>

                <div class="card-body">
                    <button type="button" class="btn btn-success" id="modal_btn">
                        Add new Category
                    </button>
                    <!-- Modal -->
                    <div class="modal fade cat_model" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New Slider</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="slider_form" id="slider_form" method="post" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="title">Slider Title</label>
                                            <?php echo form_input(['type' => 'text', 'name' => 'title', 'class' => 'form-control', 'id' => 'title', 'placeholder' => 'Slider Title', 'value' => set_value('course_name')]);
                                            ?>

                                            <div class="title-error"></div>
                                        </div>

                                        <div class="form-group">
                                            <label for="cat_image">Slider Image</label>
                                            <img src="" height="120px" id="cat_image">
                                            <?php echo form_upload(['name' => 'slider_image', 'class' => 'form-control', 'id' => 'cat_image_file']); ?>

                                            <div class="img_err text-danger"></div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" id="btn" class="btn btn-primary save" name="save" value="add">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="slider-grids">
                    <div class="row">
                        <?php $query = $this->db->get('slider');

                        foreach ($query->result() as $row) { ?>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="<?= $row->slider_thumbnail; ?>" class="img-fluid my-2">
                                        <p><?= $row->slider_title; ?></p>
                                        <a href="<?= base_url('Admin_controller/delete_slider/' . $row->slider_id); ?>" class="btn btn-danger"><i class="icon-grid ti-trash"></i></a>
                                        <?php if ($row->post_status == '1') { ?>

                                            <button type="button" class="btn btn-primary change_status" data-status="<?= $row->post_status; ?>" id="<?= $row->slider_id; ?>"><i class="icon-grid ti-eye"></i></button>

                                        <?php } else { ?>

                                            <button type="button" class="btn btn-warning change_status" data-status="<?= $row->post_status; ?>" id="<?= $row->slider_id; ?>"><i class="icon-grid ti-na"></i></button>

                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('admin/include/footer'); ?>
<script>
    $(document).ready(function() {

        

        $('#modal_btn').click(function() {
            $('.cat_model').modal('show');
            $('#slider_form')[0].reset();
        });

        $(document).on('submit', '#slider_form', function(e) {
            e.preventDefault();
            var fd = new FormData(this);
            $.ajax({
                url: "<?php echo base_url('Admin_controller/insert_slider'); ?>",
                method: 'POST',
                data: fd,
                processData: false,
                contentType: false,
                cache: false,
                async: true,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    if (data.status == 0) {
                        if (data.title != '') {
                            $('.title-error').html(data.title);
                        } else {
                            $('.title-error').html('');
                        }

                        if (data.description != '') {
                            $('.des-error').html(data.description);
                        } else {
                            $('.des-error').html('');
                        }

                        if (data.image_error != '') {
                            $('.img_err').html(data.image_error);
                        } else {
                            $('.img_err').html('');
                        }
                    }

                    if (data.status == 1) {
                        $('#slider_form')[0].reset();
                        $('.cat_model').modal('hide');
                        $(".slider-grids").load("<?= current_url(); ?> .slider-grids");
                    }

                }

            });
        });

        $(document).on('click', '.change_status', function() {
            var slider_id = $(this).attr("id");
            var status = $(this).data("status");
            var btn_action = 'delete';
            if (confirm("Are you sure you want to change status?")) {
                $.ajax({
                    url: "<?php echo base_url('Admin_controller/update_status_of_slider'); ?>",
                    method: "POST",
                    data: {
                        post_id: slider_id,
                        status: status,
                        btn_action: btn_action
                    },
                    success: function(data) {
                        console.log(data);
                        $(".slider-grids").load("<?= current_url(); ?> .slider-grids");
                    }
                });
            } else {
                return false;
            }
        }); // end change the status
    });
</script>
</body>

</html>