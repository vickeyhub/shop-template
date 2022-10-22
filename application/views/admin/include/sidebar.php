<nav class="sidebar sidebar-offcanvas" id="sidebar">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('Admin_controller/dashboard'); ?>">
							<i class="icon-grid menu-icon"></i>
							<span class="menu-title">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#post-category" aria-expanded="false"
							aria-controls="ui-basic">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">Post Category</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="post-category">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link"
										href="<?= base_url('Admin_controller/add_category'); ?>">Add category</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="<?= base_url('Admin_controller/show_all_cat'); ?>">View category</a></li>
								
							</ul>
						</div>
					</li>

					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#post-articles" aria-expanded="false"
							aria-controls="ui-basic">
							<i class="icon-layout menu-icon"></i>
							<span class="menu-title">Manage Posts</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="post-articles">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item"> <a class="nav-link"
										href="<?= base_url('Admin_controller/add_post'); ?>">Add new Post</a></li>
								<li class="nav-item"> <a class="nav-link"
										href="<?= base_url('Admin_controller/show_all_post'); ?>">View Posts</a></li>
								
							</ul>
						</div>
					</li>
					
				</ul>
			</nav>