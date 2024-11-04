<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
			</div>
			<div class="modal-body">
				<div class="mt-2 text-center">
					<lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
					<div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
						<h4>Are you sure ?</h4>
						<p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
					</div>
				</div>
				<div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    			<button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    			<button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                		</div>
			</div>
		</div>
	</div>
</div>
        <!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
	<div class="navbar-brand-box">
		<a href="<?php echo base_url(); ?>" class="logo logo-dark">
			<span class="logo-sm">
				<img src="/public/assets/img/logo-sm.png" alt="" height="22">
                    	</span>
                    	<span class="logo-lg">
                        	<img src="/public/assets/img/logo-dark.png" alt="" height="17">
                    	</span>
		</a>
		<a href="<?php echo base_url(); ?>" class="logo logo-light">
                    	<span class="logo-sm">
                        	<img src="/public/assets/img/logo-sm.png" alt="" height="22">
                    	</span>
                    	<span class="logo-lg">
                        	<img src="/public/assets/img/logo-light.png" alt="" height="17">
                    	</span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
			<i class="ri-record-circle-line"></i>
                </button>
	</div>

	<div id="scrollbar">
		<div class="container-fluid">
			<div id="two-column-menu"></div>
			<ul class="navbar-nav" id="navbar-nav">
                        	<li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        	<li class="nav-item">
                            		<a class="nav-link menu-link" href="<?php echo base_url('dashboard'); ?>">
                                		<i class="bx bxs-dashboard"></i> <span data-key="t-dashboards">Dashboard</span>
                            		</a>
                        	</li>
				<!-- Dashboard Menu -->

				<!-- end Dashboard Menu -->
			</ul>
		</div>
                <!-- Sidebar -->
	</div>
	<div class="sidebar-background"></div>
</div>
<div class="vertical-overlay"></div>