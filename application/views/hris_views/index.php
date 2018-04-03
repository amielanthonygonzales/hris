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
	<div class="container login-form">
		<div id="logo">
			<img src = "<?php echo base_url('assets/img/title-8.png'); ?>" id="logo-image" alt="Logo">
		</div>
		<form>
			<div class="form-group">
				<div class="input-group">
					<!-- <label for="username">USERNAME</label> -->
					<span class="input-group-addon"><i class="icon s7-user"></i></span>
					<input type="text" class="form-control" id="username" name="username" placeholder="Username" required />
				</div>
			</div>
			<div class="form-group">
				<div class="input-group">
					<!-- <label for="password">PASSWORD</label> -->
					<span class="input-group-addon"><i class="icon s7-lock"></i></span>
					<input class="form-control" type="password" name="password" id="password" placeholder="Password" required/>
				</div>
			</div>
			<div class="form-group">
				<button type="submit" name="login" value="Login" class ="btn btn-primary form-control">LOGIN</button>
			</div>
			<div class="form-group">
				<div class="pull-right ">
					<a id="register-anchor" href="<?php echo base_url('register-employee');?>">Register here</a>
				</div>
			</div>
			
		</form>
	</div>

	<script src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>
</body>
</html>