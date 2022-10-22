
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
									<h3 class="font-weight-bold">All Posts</h3>
									<hr>
								</div>
								
							</div>
						</div>
					</div>
					
					<div class="row">
						
							<?php
								if($this->session->flashdata('delete_post')){
									echo '<div class="col-md-12 p-3 stretch-card alert alert-danger" role="alert">'.
									$this->session->flashdata('delete_post')
									.'</div>';
								} 
							?>
						<div class="col-md-12 stretch-card grid-margin">
							<div class="card">
								<div class="card-body">
									<div class="load-table">
                                    	<table class="table table-bordered">
											<tr>
												<th>#</th>
												<th>Post Titile</th>
												<th>Category</th>
                                                <th>Post Thumbnail</th>
                                                <th>Date</th>
												<th>Edit</th>
												<th>Delete</th>
											</tr>
                                            <?php foreach ($fetch->result() as $row): ?>
                                            <tr>
                                                <td><?= $row->post_id; ?></td>
                                                <td><?= $row->post_title; ?></td>
                                                <td><?= $row->post_category_title; ?></td>
                                                <td><img src="<?= $row->post_thumbnail; ?>" alt="" height="100px"></td>
                                                <td><b><?= date("d M, Y H:i A", strtotime($row->post_created_at)); ?></b></td>
                                                <td></td>
                                                <td><a href="<?= base_url("Admin_controller/delete_post/".$row->post_id); ?>" class="btn btn-danger">Delete</a></td>
                                            </tr>
											<?php endforeach; ?>
                                    	</table>

                                        <?php echo $this->pagination->create_links(); ?>
											</div>

                                    
                                </div>
							</div>
						</div>
						

					</div>
				</div>

				<!--edit category Modal -->
				<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<input type="text" id="cat_title" class="form-control" placeholder="Category title">
					</div>
					<div class="modal-footer">
						<input type="hidden" id="fetched_cat_id">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary update-category">Save changes</button>
					</div>
					</div>
				</div>
				</div>
				<!-- content-wrapper ends -->
	<?php $this->load->view('admin/include/footer'); ?>
	<!-- End custom js for this page-->
	
</body>

</html>
