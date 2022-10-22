
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
									<h3 class="font-weight-bold">All Post Categories</h3>
								</div>
								
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12 stretch-card grid-margin">
							<div class="card">
								<div class="card-body">
									<div class="load-table">
                                    	<table class="table table-bordered">
											<tr>
												<th>#</th>
												<th>Category Name</th>
												<th>Category Slug</th>
												<th>Edit</th>
												<th>Delete</th>
											</tr>
											<?php foreach($fetch->result() as $row): ?>
											<tr>
												<td><?= $row->post_category_id; ?></td>
												<td><?= $row->post_category_title; ?></td>
												<td><?= $row->post_category_slug; ?></td>
												<td>
													<button class="btn btn-info btn-sm edit-category" data-number="<?= $row->post_category_id; ?>">Edit</button>
												</td>
												<td>
													<button class="btn btn-danger btn-sm delete" data-delete-id="<?= $row->post_category_id; ?>">Delete</button>
												</td>
											</tr>
											<?php endforeach; ?>
                                    	</table>
											</div>

                                    <?php echo $this->pagination->create_links(); ?>
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
	<script>
		$(document).ready(function(){
			$(".edit-category").click(function(){
				var cat_id = $(this).data("number");
				

				$.ajax({
					url:"<?= base_url('Admin_controller/fetch_single_post_category'); ?>",
					method:"POST",
					data:{
						category_id:cat_id 
					},
					dataType:"json",
					success:function(response){
						
						if(response.status == 'success'){
							$("#editModal").modal('show');
							$('.modal-title').text("Edit Category");
							$("#cat_title").val(response.cat_details[0].post_category_title);
							$("#fetched_cat_id").val(response.cat_details[0].post_category_id);
							
						}
					}
				});
			});

			$(".update-category").click(function(){
				var cat_title = $("#cat_title").val();
				var cat_id = $("#fetched_cat_id").val();
				$.ajax({
					url:"<?= base_url('Admin_controller/update_post_category'); ?>",
					method:"POST",
					data:{
						title:cat_title,
						cat_id:cat_id,
					},
					dataType:"json",
					success:function(response){
						// $("#editModal").modal('show');
						// $('.modal-title').text("Edit Category");
						if(response.status == 200){
							$("#editModal").modal('hide');
							$("#cat_title").val('');
							$(".load-table").load("<?= current_url();?> .load-table");
						}
					}
				});
			});

			$(".delete").click(function(){
				var cat_id = $(this).data("delete-id");
				$.ajax({
					url:"<?= base_url('Admin_controller/delete_post_category'); ?>",
					method:"POST",
					data:{
						cat_id:cat_id,
					},
					dataType:"json",
					success:function(response){
						if(response.status == 200){
							location.reload();
						}
					}
				});
			});
		});
	</script>
</body>

</html>
