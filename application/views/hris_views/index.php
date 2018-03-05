<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo base_url('bootstrap/bootstrap.min.css');?>"  rel = "stylesheet"/>
	<title>HR Information System</title>
</head>
<body>
	<div class="container">

		<form>
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" id="username" name="username" placeholder="Username" required />
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" id="password" placeholder="Password" required/>
			</div>
			<div class="form-group">
				<a href="<?php echo base_url('register-employee');?>">Register here</a>
			</div>
			<div class="pull-right">
				<button type="submit" name="login" value="Login" class ="btn btn-success">LOGIN</button>
			</div>
		</form>
	</div>

	<script src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>
</body>
</html>