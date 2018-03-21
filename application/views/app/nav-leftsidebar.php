<div class="am-left-sidebar">
	<div class="content">
	  <div class="am-logo"></div>
	  <ul class="sidebar-elements">
		<!--<li><a href="<?php echo site_url(); ?>"><i class="icon s7-home"></i><span>Home</span></a>-->
		<li class="parent">
			<a href="<?php echo site_url(); ?>"><i class="icon s7-monitor"></i><span>Dashboard</span></a>
		<li class="parent">
			<a class="company" href="<?php echo site_url("logout"); ?>"><i class="icon s7-culture"></i><span>Company</span></a>
			<ul class="sub-menu">
                <li>
                	<a href="">Version 1</a>
                </li>
                <li class="active">
                	<a href="dashboard2.html">Version 2</a>
                </li>
                <li><a href="">
                	<span class="label label-primary pull-right">New</span>Version 3</a>
                </li>
                <li><a href="">
                	<span class="label label-primary pull-right">New</span>Version 4</a>
                </li>
              </ul>
		</li>
		<li>
			<a href="<?php echo site_url("logout"); ?>"><i class="icon s7-users"></i><span>Employee</span></a>
		</li>
		<li>
			<a href="<?php echo site_url("logout"); ?>"><i class="icon s7-power"></i><span>Sign Out</span></a>
		</li>
	  </ul>
	  <!--Sidebar bottom content-->
	</div>
</div>

<script type="text/javascript">
	$('.company').is(':hover', function(){
		$('.sub-menu').addClass('visible');
	});
</script>