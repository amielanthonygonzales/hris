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
		<form id="form-id">
			<div class="form-group">
				<label for="fname">First Name</label>
				<input class="form-control" type="text" name="fname" id="fname" placeholder="First Name"/>
			</div>
			<div class="form-group">
				<label for="mname">Middle Name</label>
				<input class="form-control" type="text" name="mname" id="mname" placeholder="Middle Name"/>
			</div>
			<div class="form-group">
				<label for="lname">Last Name</label>
				<input class="form-control" type="text" name="lname" id="lname" placeholder="Last Name"/>
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" id="username" placeholder="Username"/>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" id="password" placeholder="Password"/>
			</div>
			<div class="form-group">
				<label for="repeatPass">Repeat Password</label>
				<input class="form-control" type="password" name="repeatPass" id="repeatPass" placeholder="Repeat Password" />
			</div>
			<div id="message">
				
			</div>
			<div class="input-append date form-group" id="birthdate" data-field="date">
				<label for="birthdate">Date of Birth</label>
			    <input class="form-control" type="text" placeholder="Date of Birth">
			    <span class="add-on"><i class="icon-remove"></i></span>
			    <span class="add-on"><i class="icon-th"></i></span>
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
        	format: 'mm/dd/yyyy',
        	clearBtn: true

        })
    });
	       
	$("#cancel").on("click", function(){
		
		self.location = "<?php echo base_url("index");?>";
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