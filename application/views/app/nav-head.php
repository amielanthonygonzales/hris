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
              <li id="notif" class="dropdown">
              	<a href="#">
              		<span class="icon s7-bell"></span><span id="notif-badge"></span>
              	</a> 
              </li>
              <li class="dropdown">
              	<a class="profile" href="#"><i class="icon s7-user"></i></a>
              </li>
            </ul>
		</div>
	</div>
</nav>

<script type="text/javascript">
	var nav = {};
	nav.id = 0;
	$('#notif').off().click(function(){
		$.getJSON('<?php echo base_url('profile');?>', function(data){
			$.each(data, function(key,value){
				if(key == "user"){
					id = value.emp_id;
					$.ajax({
						method: "POST",
						url: "<?php echo base_url('read-notification')?>",
						data: {id: value.emp_id},
						success: function(result){
							$('#notif-badge').removeClass('indicator');
							window.parent.location = "<?php echo base_url('dashboard-paid-contri-admin/')?>"+id;
						}
					});
				}
			});	
		});
	});

	// $.('#notif').off("click").click(function(){

	// });
	$('#notif').mouseenter(function(){
		$('#notif').attr('title', 'Notification');
	});

	$('.profile').mouseenter(function(){
		$('.profile').attr('title', 'Profile');
	});


	$.getJSON('<?php echo base_url('profile');?>', function(data){
		$.each(data, function(key,value){
			if(key == "user"){
					nav.id = value.emp_id;
			}
		});
		$.getJSON('<?php echo base_url('get-all-employee');?>', function(data){
			$.each(data, function(key, value){
				if(key == "query"){
					console.log("pasok");
					var len = value.length;
					for(var i=0; i<len; i++){
						//console.log(value[i].emp_id);
						//console.log(value[i].emp_notification);
						if(value[i].emp_id == nav.id && value[i].emp_notification == "1"){
							$('#notif-badge').addClass('indicator');
							console.log("ID -> " + value[i].emp_id);
							console.log("Notif -> " + value[i].emp_notification);
						}
					}
				}
			});
		});
	});
</script>