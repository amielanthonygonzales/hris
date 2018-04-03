<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo base_url('bootstrap/bootstrap.min.css');?>"  rel = "stylesheet"/>
    <link rel = "stylesheet" href="<?php echo base_url('assets/css/style.css');?>"  />
    <link rel = "icon" href="assets/img/logo.png"  />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('amaretti/html/assets/lib/font-awesome/css/font-awesome.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('amaretti/html/assets/lib/stroke-7/style.css');?>"/>
	<title>HR Information System</title>
</head>
<body class="login-body">
	<div id="pageIndex" class="container login-form">
		<div id="logo">
			<img src = "<?php echo base_url('assets/img/title-8.png'); ?>" id="logo-image" alt="Logo">
		</div>
		<form id="form-id">
			<div class="form-group">
				<div class="input-group">
					<!-- <label for="username">USERNAME</label> -->
					<span class="input-group-addon"><i class="icon s7-user"></i></span>
					<input type="text" class="form-control username" name="username" placeholder="Username" required />
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<!-- <label for="password">PASSWORD</label> -->
					<span class="input-group-addon"><i class="icon s7-lock"></i></span>
					<input class="form-control password" type="password" name="password" placeholder="Password" required/>
				</div>
			</div>
			<div class="form-group">
				<button type="button" name="login" value="Login" class ="btn btn-primary form-control login-btn">LOGIN</button>
			</div>
		</form>
	</div>

	<script src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>

</body>
<script type="text/javascript">
		/*var pageIndex = {};
		pageIndex.init = function(selector, callback){
			pageIndex.elem = $(selector);
			pageIndex.elem.find('.login-btn').off('click').click(function(){
				var login_info = [];
				login_info.push(pageIndex.elem.find('.username').val());
				login_info.push(pageIndex.elem.find('.password').val());

				console.log("Hello");

				callback();
			});
		}*/
		$('.login-btn').click(function(){
			// var login_info = [];
			// login_info.push($('.username').val());
			// login_info.push($('.password').val());
			// login_info = JSON.stringify(login_info);
			$.ajax({
				method: "POST",
					url: "<?php echo base_url('get-session')?>",
					data: {	username: $('.username').val(),
							password: $('.password').val()
							},
					success: function(result){
						console.log(result);
						if(result['query'] != ""){
							var id = "";
							//location.replace("<?php echo base_url('employee-edit')?>")
							$.each(result['query'],function(key,value){
								if(key == 'emp_id'){
									id = value;
								}
								else if(key == 'emp_position' && value == 'employee'){
									window.parent.location = "<?php echo base_url('employee-edit/')?>"+id;

								}
								else if(key == 'emp_position' && value == 'admin'){
									window.parent.location = "<?php echo base_url('dashboard')?>";
								}
							});
							
						}
					}
			});
			//console.log(login_info);
		});

		$(document).keypress(function(event){
			var keycode = (event.keyCode ? event.keyCode : event.which);
			if(keycode == '13'){
				//alert('You pressed a "enter" key in somewhere');
				$('.login-btn').trigger('click');
			}
		});

	</script>
</html>