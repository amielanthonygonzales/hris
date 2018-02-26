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
		<div class="modal fade" tabindex="-1" id="cancel-modal">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header bg-secondary">
						<h5 class="modal-title text-white">MESSAGE</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p class="text-info"></p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal" id="cancel-no">No</button>
						<button type="button" class="btn btn-success" id="cancel-yes">Yes</button>
					</div>
				</div>
			</div>
		</div>

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
			    <!-- <span class="add-on"><i class="icon-th"></i></span> -->
			</div> 
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="email" name="email" id="email" placeholder="Email" required/>
			</div>
			<div class="form-group">
				<label for="username">Username<code id="username-code"></code></label>
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
			<div class="float-right form-group">
				<button type="submit" name="save" id="save" value="Save" data-target="#cancel-modal" data-toggle="modal" class ="btn btn-success" >SAVE</button>
			</div>
		</form>
		<div class="clearfix"></div>
		<div class="float-right">
			<button type="button" name="cancel" id="cancel" value="Cancel" class ="btn btn-danger" data-toggle="modal" data-target="#cancel-modal" ">CANCEL</button>
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
	<script src="<?php echo base_url('bootstrap/bootstrap.min.js');?>"></script>
</body>
</html>

<script>
	$('#cancel-yes').on('click', function(){
		self.location = "<?php echo base_url("index");?>";
	});

	$('#save').on('click', function(){
		$('.text-info').text('Succesfully Added!');
	});

	$('#cancel').on('click', function(){
		$('.text-info').text('Are you sure you want to cancel?');
	});

	$('#cancel-modal').on('show.bs.modal', function(event){
		var save = $(event.relatedTarget);
		if(save.val() == "Save"){
			$('#cancel-yes').hide();
			$('#cancel-no').hide();
			var message = save.data('save');
			var modal = $(this);
			modal.find('.modal-body p').text(message);

		}else{
			$('#cancel-yes').show();
			$('#cancel-no').show();
			var message = save.data('save');
			var modal = $(this);
			modal.find('.modal-body p').text(message);	
		}
		
	});

	$(function () {
        $('#birthdate').datepicker({
        	format: 'yyyy-mm-dd',

        })
    });

	$("#password").on("keyup", function(){
		$("#repeatPass").val("");
		$("#message").text("");
	});

	$("#repeatPass").on("keyup", function(){
		var passwordVal = $("#password").val();
		var val = $("#repeatPass").val();

		if(passwordVal != val){
			$("#message").text("Password does not match!");
			$("#save").hide();
		}else{
			$("#message").text("");
			$("#save").show();
		}
	});

	$("#bday").on('change',function(){
		$("#save").show();
	});

	$.getJSON('<?php echo base_url('RegisterEmp_Controller/getName')?>', function(result){
		result = result['query'];

		$.each(result, function(key, value){
			var empFirstName = value['firstName'].toUpperCase();
			var empLastName = value['lastName'].toUpperCase();
			var empMiddleName = value['middleName'].toUpperCase();
			var empExtName = value['extName'].toUpperCase();
			var empBirthday = value['birthday'];
			var empUsername = value['username'].toUpperCase();
			var empStatus = value['active'].toUpperCase();
			

			var enteredFirstName="", enteredLastName="", enteredMiddleName="", enteredExtName="", enteredBirthday="", enteredUsername="", enteredStatus="YES";

			$("#fname").on("keyup", function(){
				enteredFirstName = $("#fname").val().toUpperCase();
				
				if(enteredFirstName == empFirstName 
					&& enteredLastName == empLastName 
					&& enteredMiddleName == empMiddleName 
					&& empExtName == enteredExtName 
					&& empBirthday == enteredBirthday ){

					$('.text-info').text('Ooops! Data already exist, try to login with your username and password');
					$('#cancel-modal').modal('show');
					$('#cancel-yes').hide();
					$('#cancel-no').hide();
					$("#save").hide();

				}
			});

			$('#fname').on('keydown', function(){
				$("#save").show();
			});

			$("#lname").on("keyup", function(){
				enteredLastName = $("#lname").val().toUpperCase();
				
				if(enteredFirstName == empFirstName 
					&& enteredLastName == empLastName 
					&& enteredMiddleName == empMiddleName 
					&& empExtName == enteredExtName 
					&& empBirthday == enteredBirthday){

					$('.text-info').text('Ooops! Data already exist, try to login with your username and password');
					$('#cancel-modal').modal('show');
					$('#cancel-yes').hide();
					$('#cancel-no').hide();
					$("#save").hide();
				}
			});
			$('#lname').on('keydown', function(){
				$("#save").show();
			});

			$("#mname").on("keyup", function(){
				enteredMiddleName = $("#mname").val().toUpperCase();
				
				if(enteredFirstName == empFirstName 
					&& enteredLastName == empLastName 
					&& enteredMiddleName == empMiddleName 
					&& empExtName == enteredExtName 
					&& empBirthday == enteredBirthday){
					$('.text-info').text('Ooops! Data already exist, try to login with your username and password');
					$('#cancel-modal').modal('show');
					$('#cancel-yes').hide();
					$('#cancel-no').hide();
					$("#save").hide();
				}
			});
			$('#mname').on('keydown', function(){
				$("#save").show();
			});

			$("#extname").on("keyup", function(){
				enteredExtName = $("#extname").val().toUpperCase();
				
				if(enteredFirstName == empFirstName 
					&& enteredLastName == empLastName 
					&& enteredMiddleName == empMiddleName 
					&& empExtName == enteredExtName 
					&& empBirthday == enteredBirthday){
					$('.text-info').text('Ooops! Data already exist, try to login with your username and password');
					$('#cancel-modal').modal('show');
					$('#cancel-yes').hide();
					$('#cancel-no').hide();
					$("#save").hide();
				}
			});
			$('#extname').on('keydown', function(){
				$("#save").show();
			});

			$("#bday").on("change", function(){
				enteredBirthday = $("#bday").val();
				
				if(enteredFirstName == empFirstName 
					&& enteredLastName == empLastName 
					&& enteredMiddleName == empMiddleName 
					&& empExtName == enteredExtName 
					&& empBirthday == enteredBirthday){
					$('.text-info').text('Ooops! Data already exist, try to login with your username and password');
					$('#cancel-modal').modal('show');
					$('#cancel-yes').hide();
					$('#cancel-no').hide();
					$("#save").hide();

				}
			});
			

			$("#username").on("keyup", function(){
				enteredUsername = $("#username").val().toUpperCase();
				

				if(empUsername == enteredUsername  ){
					
					$("#save").hide();
					$('.text-info').text('Ooops! Username already exist, try to use other username');
					$('#cancel-modal').modal('show');
					$('#cancel-yes').hide();
					$('#cancel-no').hide();
					
				}

			});
			$('#username').on('keydown', function(){
				$("#save").show();
			});




		});

	});


</script>