
<!-- partial -->
<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_settings-panel.html -->
			<?php $this->load->view('admin/include/right_sidebar'); ?>
			<!-- partial -->
			<!-- partial:partials/_sidebar.html -->
			<?php $this->load->view('admin/include/sidebar'); ?>
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="row">
						<div class="col-md-12 grid-margin">
							<div class="row">
								<div class="col-12 col-xl-8 mb-4 mb-xl-0">
									<h3 class="font-weight-bold">Add new Category</h3>
								</div>
								
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12 stretch-card grid-margin">
							<div class="card">
								<div class="card-body">
                                    <?php echo form_open_multipart('Admin_controller/save_category'); ?>
                                    <div class="form-group">
                                            <label for="category">Category Name</label>
                                            <?= form_input([
                                                'type' => 'text',
                                                'name' => 'category_title',
                                                'class' => 'form-control form-control-lg',
                                                'placeholder'=> "Enter category name",
                                                'value' => set_value('category_title')

                                            ]); ?>
                                            <?php echo form_error('category_title'); ?>
                                    </div>
									<div class="form-group">
											<h3>Category Thumbnail</h3>
											<label for="post_thumbnail"
												class="image-upload-icon d-flex justify-content-center align-items-center"><i
													class="ti-camera"></i></label>
											<!-- hidden file uploading field -->
											<input type="file" class="hidden-area" name="category_thumbnail"
												id="post_thumbnail">

											<img src="#" id="thumb_preview" class="img-fluid">
											<span class="upload_error text-danger"></span>
										</div>
                                    <button type="submit" class="btn btn-primary">Save Category</button>
                                    <?php echo form_close(); ?>
                                </div>
							</div>
						</div>
						

					</div>
				</div>
				<!-- content-wrapper ends -->
				<?php $this->load->view('admin/include/footer'); ?>
	<!-- End custom js for this page-->
</body>

</html>
