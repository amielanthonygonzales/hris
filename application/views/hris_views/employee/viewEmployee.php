<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo base_url('bootstrap/bootstrap.min.css');?>"  rel = "stylesheet"/>
     <link href="<?php echo base_url('assets/css/bootstrap-datetimepicker.min.css');?>"  rel = "stylesheet"/> 

	<title>HR Information System</title>
</head>
<body>
	<div class="container">
		<form>
			<?php $quer=$query[0];?>
			<div class="form-group">
				<label for="fname">First Name</label>
				<input class="form-control" type="text" name="fname" id="fname" value="<?= $quer->firstName?>" readonly />
			</div>
			<div class="form-group">
				<label for="mname">Middle Name</label>
				<input class="form-control" type="text" name="mname" id="mname" value="<?= $quer->middleName?>" readonly/>
			</div>
			<div class="form-group">
				<label for="lname">Last Name</label>
				<input class="form-control" type="text" name="lname" id="lname" value="<?= $quer->lastName?>" readonly/>
			</div>
			<div class="form-group">
				<label for="extname">Extension Name</label>
				<input class="form-control" type="text" name="extname" id="extname" value="<?= $quer->extName?>" readonly/>
			</div>
			<div class="input-append date" id="birthdate" data-field="date">
				<label for="bday">Birthdate (yyyy-mm-dd)</label>
			    <input id="bday" name="bday" class="form-control" value="<?= $quer->birthday?>" type="text" readonly/>
			    <span class="add-on"><i class="icon-remove"></i></span>
			    <span class="add-on"><i class="icon-th"></i></span>
			</div> 
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="email" name="email" id="email" value="<?= $quer->email?>" readonly/>
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" id="username" value="<?= $quer->username?>" readonly/>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" id="password" value="<?= $quer->password?>" readonly/>
			</div>
			
		</form>
		<div class="pull-right">
			<button type="submit" name="backBtn" id="backBtn" value="back" class ="btn btn-danger">BACK</button>
		</div>

	</div>

	<script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js');?>"></script>
	<script src="<?php echo base_url('bootstrap/bootstrap.min.js');?>"></script>
</body>
</html>

<script type="text/javascript">
	$('#backBtn').click(function(){
		self.location = "<?php echo base_url('employee');?>";
	});
</script>
