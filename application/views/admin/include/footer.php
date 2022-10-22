<!-- partial:partials/_footer.html -->
<footer class="footer">
					<div class="d-sm-flex justify-content-center justify-content-sm-between">
						<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.
							Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin
								template</a> from BootstrapDash. All rights reserved.</span>
						<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
							with <i class="ti-heart text-danger ml-1"></i></span>
					</div>
				</footer>
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->

	<!-- plugins:js -->
	<script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js'); ?>"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<script src="<?php echo base_url('assets/vendors/chart.js/Chart.min.js'); ?>"></script>

	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?php echo base_url('assets/js/off-canvas.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/hoverable-collapse.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/template.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/settings.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/todolist.js'); ?>"></script>
	<!-- endinject -->
	<!-- Custom js for this page-->
	<script src="<?php echo base_url('assets/js/dashboard.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/Chart.roundedBarCharts.js'); ?>"></script>
	<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
	<script>
        CKEDITOR.replace( 'description' );
		$("#thumb_preview").hide();
		post_thumbnail.onchange = evt => {
			const[file] = post_thumbnail.files
			if(file) {
				thumb_preview.src = URL.createObjectURL(file);
				$("#thumb_preview").show();
			}
		}

		// submit my article post
		$('#article-form').on('submit',function(e){
			e.preventDefault();
			var fd = new FormData(this);
			fd.append('description',CKEDITOR.instances.description.getData());
			$.ajax({
				url:"<?php echo base_url('Admin_controller/save_article'); ?>",
				method:"post",
				data:fd,
				dataType:"json",
				contentType:false,
				processData:false,
				success:function(response){
					if(response.status === 203){
						$('.title_error').html(response.title_error);
						$('.description_error').html(response.description_error);
						$('.cat_error').html(response.cat_error);
						$('.meta_tag_error').html(response.meta_tag_error);
						$('.meta_description_error').html(response.meta_description_error);
						$('.upload_error').html(response.upload_error);
					}
					if(response.status === 200) {
						alert("post has been uploaded successfully");
						window.open("<?= base_url("Admin_controller/show_all_post"); ?>", '_SELF');
					}
				}
			})
		})
    </script>