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
		<form method="post" action="<?php echo base_url();?>RegisterEmp_Controller/add">
			<div class="form-group">
				<label for="fname">First Name</label>
				<input class="form-control" type="text" name="fname" id="fname" placeholder="First Name" required />
			</div>
			<div class="form-group">
				<label for="mname">Middle Name</label>
				<input class="form-control" type="text" name="mname" id="mname" placeholder="Middle Name" required/>
			</div>
			<div class="form-group">
				<label for="lname">Last Name</label>
				<input class="form-control" type="text" name="lname" id="lname" placeholder="Last Name" required/>
			</div>
			<div class="form-group">
				<label for="extname">Extension Name</label>
				<input class="form-control" type="text" name="extname" id="extname" placeholder="Extension Name"/>
			</div>
			<div class="input-append date" id="birthdate" data-field="date">
				<label for="bday">Birthdate (yyyy-mm-dd)</label>
			    <input id="bday" name="bday" class="form-control" placeholder="Birthdate" type="text" required/>
			    <span class="add-on"><i class="icon-remove"></i></span>
			    <span class="add-on"><i class="icon-th"></i></span>
			</div> 
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="email" name="email" id="email" placeholder="Email" required/>
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" id="username" placeholder="Username" required/>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" id="password" placeholder="Password" required/>
			</div>
			<div class="form-group">
				<label for="repeatPass">Repeat Password</label>
				<input class="form-control" type="password" name="repeatPass" id="repeatPass" placeholder="Repeat Password" required/>
			</div>
			<div id="message" class="message">

			</div>
			<div class="pull-right">
				<button type="submit" name="save" value="Save" class ="btn btn-success" >SAVE</button>
			</div>
		</form>
		<div class="pull-right">
			<button type="submit" name="cancel" id="cancel" value="Cancel" class ="btn btn-danger" >CANCEL</button>
		</div>
	</div>
	<?php 
		//--Conversion of date--
		/*$current = date("m/d/y");
		$new_format = date("m-d-y", strtotime($current));
		echo $current. "<br>";
		echo $new_format;
		$current;
		$db_date;*/
	?>
	<script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js');?>"></script>
</body>
</html>

<script>
	$(function () {
        $('#birthdate').datepicker({
        	format: 'yyyy-mm-dd',

        })
    });
	       
	$("#cancel").on("click", function(){
		
		self.location = "<?php echo base_url("index");?>";
	});

	$("#password").on("keyup", function(){
		$("#repeatPass").val("");
		$("#message").text("");
	});

	$("#repeatPass").on("keyup", function(){
		var passwordVal = document.getElementById("password");
		passwordVal = passwordVal.value;
		var val = document.getElementById("repeatPass");
		val = val.value;

		if(passwordVal != val){
			$("#message").text("Password does not match!");
		}else{
			$("#message").text("");
		}

		//console.log(passwordVal);
	});
</script>