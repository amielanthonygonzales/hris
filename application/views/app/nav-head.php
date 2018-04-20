<nav class="navbar navbar-default navbar-fixed-top am-top-header">
	<div class="container-fluid">	
		<div class="navbar-header">
			<div class="page-title">
				<span><img src="<?php echo base_url("assets/app/img/hris-logo.png"); ?>" style="height:50px;"></span>
			</div>
			<!-- burger -->
			<a href="#" class="am-toggle-left-sidebar navbar-toggle collapsed">
				<span class="icon-bar">
					<span>Dashboard</span>
					<span></span>
					<span></span>
				</span>
			</a>
			<!-- logo -->
			<a href="<?php echo base_url('dashboard'); ?>" class="navbar-brand"></a>
		</div>
		<div id="am-navbar-collapse" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right am-icons-nav">
              <li class="dropdown">
              	<a href="#">
              		<span class="icon s7-bell"></span><span class="indicator"></span>
              	</a> 
              </li>
              <li class="dropdown">
              	<a class="profile" href="#"><i class="icon s7-user"></i></a>
              </li>
            </ul>
		</div>
	</div>
</nav>