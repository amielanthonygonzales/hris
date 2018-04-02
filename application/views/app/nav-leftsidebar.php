
<div class="am-left-sidebar">
	<div class="content">
		<div class="am-logo"></div>
		<ul class="sidebar-elements">
			<li>
				<a href="<?php echo base_url('dashboard'); ?>"><i class="icon s7-monitor"></i><span>Dashboard</span></a>
			</li>
				<li class="parent">
					<a class="company" href="#"><i class="icon s7-culture"></i><span>Company</span></a>
					<ul class="sub-menu"><li class="title">Company</li>
						<li class="nav-items">
							<div class="am-scroller nano has-scrollbar">
								<div class="content nano-content">
									<ul>
										<li class="active">
											<a href="<?php echo base_url('dashboard-company')?>">Company Information</a>
										</li>
										<li>
											<a href="<?php echo base_url('dashboard-department')?>">Departments</a>
										</li>
									</ul>
								</div>
								<div class="nano-pane">
									<div class="nano-slider">

									</div>
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li class="parent">
					<a href="#"><i class="icon s7-users"></i><span>Employee</span></a>
					<ul class="sub-menu"><li class="title">Employee</li>
						<li class="nav-items">
							<div class="am-scroller nano has-scrollbar">
								<div class="content nano-content">
									<ul>
										<li>
											<a href="<?php echo base_url('employee-register')?>">Register Employee</a>
										</li>
										<li>
											<a href="<?php echo base_url('employee-list')?>">List of Employee</a>
										</li>
										
									</ul>
								</div>
								<div class="nano-pane">
									<div class="nano-slider">

									</div>
								</div>
							</div>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo base_url('logout'); ?>"><i class="icon s7-power"></i><span>Sign Out</span></a>
				</li>
		</ul>
		<!--Sidebar bottom content-->
	</div>
</div>

<script type="text/javascript">
</script>