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
							<h3 class="font-weight-bold">Add new Post</h3>
						</div>

					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 stretch-card grid-margin">
					<div class="card">
						<div class="card-body">
							<form action="" method="post" enctype="multipart/form-data" id="article-form">
								<div class="row">
									<div class="col-md-8">
										<div class="form-group">
											<label for="post_title">Post Title</label>
											<input type="text" name="post_title" class="form-control"
												placeholder="Post title" id="post_title">
											<span class="title_error"></span>
										</div>
										<div class="form-group">
											<label for="description">Description</label>
											<textarea name="description" id="description" rows="5" class="form-control"
												placeholder="Description"></textarea>
												<span class="description_error"></span>
										</div>

										<div class="form-group">
											<label for="category">Category</label>
											<select name="category" id="category" class="form-control">
												<?php foreach($fetch_cat->result() as $cat): ?>
												<option value="<?php echo $cat->post_category_id; ?>"><?php echo $cat->post_category_title; ?></option>
												<?php endforeach; ?>
											</select>
											<span class="cat_error"></span>
										</div>
										<button type="submit" class="btn btn-primary">Publish</button>
									</div>

									<div class="col-md-4">
									<div class="form-group">
											<label for="meta_tags">Post Meta Tags</label>
											<input type="text" name="meta_tags" class="form-control"
												placeholder="Post Meta tags" id="meta_tags">
											<span class="meta_tag_error"></span>
										</div>
										<div class="form-group">
											<label for="meta_description">Post Meta Description</label>
											
											<textarea name="meta_description" id="meta_description" class="form-control" placeholder="Post Meta Description" rows="5"></textarea>
											<div class="meta_description_error"></div>
										</div>
										<div class="form-group">
											<h3>Post Thumbnail</h3>
											<label for="post_thumbnail"
												class="image-upload-icon d-flex justify-content-center align-items-center"><i
													class="ti-camera"></i></label>
											<!-- hidden file uploading field -->
											<input type="file" class="hidden-area" name="post_thumbnail"
												id="post_thumbnail">

											<img src="#" id="thumb_preview" class="img-fluid">
											<span class="upload_error text-danger"></span>
										</div>
									</div>
								</div>


							</form>
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
