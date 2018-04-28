<div id="pageRegister">
	<!-- Modal Success -->
	<div tabindex="-1" role="dialog" class="modal fade in modal-department">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
				</div>
				<div class="modal-body">
					<div class="text-center">
						<div class="i-circle text-success"><i class="icon s7-check"></i></div>
						<h4>Awesome!</h4>
						<p>Data has been saved successfully!</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" data-dismiss="modal" class="btn btn-success">Proceed</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Error -->
	<div tabindex="-1" role="dialog" class="modal fade in modal-error">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
				</div>
				<div class="modal-body">
					<div class="text-center">
						<div class="i-circle text-danger"><i class="icon s7-close"></i></div>
						<h4>Oh no!</h4>
						<p></p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" data-dismiss="modal" class="btn btn-danger">Proceed</button>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-buttons">
		<div class="row col-md-12">
			<div class="form-group">
				<button type="button" name="btnEmail" class ="btn btn-space btn-success btn-email pull-right">
					<i class="icon icon-left s7-mail"></i>EMAIL
				</button>
				<button type="button" name="btnAdd" value="add" class ="btn btn-space btn-success btn-add-register pull-right">
					<i class="icon icon-left s7-plus"></i>ADD
				</button>
				<button type="button" name="btnBack" value="back" class ="btn btn-space btn-success btnBack pull-right">
					<i class="icon icon-left s7-back"></i>BACK
				</button>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Register Employee</h3>
		</div>
		<div class="panel-body">
			<form>

				<div class="form-group">
					<label for="employeeID">Employee ID <code>*</code></label>
					<input class="form-control employeeID" type="text" name="empId" placeholder="Employee ID"  />
				</div>
				<div class="form-group">
					<label for="lname">Last Name <code>*</code></label>
					<input class="form-control lname" type="text" name="lname" placeholder="Last Name" />
				</div>
				<div class="form-group">
					<label for="first-name">First Name <code>*</code></label>
					<input class="form-control first-name" type="text" name="fname" placeholder="First Name"  />
				</div>
				<div class="form-group">
					<label for="mname">Middle Name</label>
					<input class="form-control mname" type="text" name="mname" placeholder="Middle Name"/>
				</div>
				<div class="form-group">
					<label for="extname">Extension Name</label>
					<input class="form-control extname" type="text" name="extname" placeholder="Extension Name"/>
				</div>
				<div class="form-group">
					<label for="email">Email <code>*</code></label>
					<input class="form-control email" type="email" name="email" placeholder="Email"  />
				</div>
				<div class="form-group">
					<label for="username">Username <code>*</code></label>
					<input class="form-control usernameRegister" type="text" name="username" placeholder="Username" />
				</div>
				<div class="form-group">
					<label for="password">Password (at least 8 alphanumeric characters w/special characters) <code>*</code></label>
					<input class="form-control passwordRegister" type="password" name="password" placeholder="Password"  pattern=".{8,}" title="Password must contain at least 8 characters" />
				</div>
				<div class="form-group">
					<div class="horizontal">
						<label>Position <code>*</code></label>
						<div class="col-md-12">
							<div class="am-radio inline">
								<input type="radio" class="position-radio" name="position-radio" id="hr-radio" value="admin">
								<label for="hr-radio">Admin</label>
							</div>
							<div class="am-radio inline">
								<input type="radio" class="position-radio" name="position-radio" id="employee-radio" value="employee">
								<label for="employee-radio">Employee</label>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label">Department <code>*</code></label>
					<select class="form-control listDepartment"></select>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	var pageRegister = {};
	pageRegister.init = function(selector, callback){
		pageRegister.elem = $(selector);
		var valid;
		pageRegister.elem.find('.btn-add-register').off("click").click(function(event){
			var register_info = {
				"emp_id" : pageRegister.elem.find('.employeeID').val(),
				"emp_dept" : pageRegister.elem.find('.listDepartment').val(),
				"emp_last_name" : pageRegister.elem.find('.lname').val(),
				"emp_first_name" : pageRegister.elem.find('.first-name').val(),
				"emp_middle_name" : pageRegister.elem.find('.mname').val(),
				"emp_ext_name" : pageRegister.elem.find('.extname').val(),
				"emp_email" : pageRegister.elem.find('.email').val(),
				"emp_username" : pageRegister.elem.find('.usernameRegister').val(),
				"emp_password" : pageRegister.elem.find('.passwordRegister').val(),
				"emp_position" : pageRegister.elem.find('.position-radio:checked').val()
			};
			$.getJSON("<?php echo site_url('get-all-employee')?>", function(data){
				var username = pageRegister.elem.find('.usernameRegister').val();
				var email = pageRegister.elem.find('.email').val();
				var password = pageRegister.elem.find('.passwordRegister').val();
				//console.log("All -> " + JSON.stringify(data));
				$.each(data, function(key, value){
					if(key == "query"){
						console.log("Value query ->" + value.length);
						var len = value.length;
						var id = pageRegister.elem.find('.employeeID').val();
						for(var i=0; i<len; i++){
							//console.log("username -> " + username);
							if(value[i]['emp_username'] == username){
								valid = false;
								pageRegister.elem.find('.modal-error .modal-body p').html("Username already exists!");
								pageRegister.elem.find('.modal-error').modal("show");
								break;
							}
							else if(value[i]['emp_email'] == email && email != ''){
								valid = false;
								pageRegister.elem.find('.modal-error .modal-body p').html("Email already exists!");
								pageRegister.elem.find('.modal-error').modal("show");
								break;
							}
							else if(value[i]['emp_id'] == id){
								valid = false;
								pageRegister.elem.find('.modal-error .modal-body p').html("ID already exists!");
								pageRegister.elem.find('.modal-error').modal("show");
								break;
							}				
							else{
								valid = true;
								if(i == len-1){
									var args = {email: email, password: password, username: username};
									// args['email'] = pageRegister.elem.find('.email').val();
									// args['username'] = pageRegister.elem.find('.usernameRegister').val();
									// args['password'] = pageRegister.elem.find('.passwordRegister').val();
									console.log(args);
									$.ajax({
										method: "POST",
											url: "<?php echo base_url('add-employee')?>",
											data: register_info,
											success: function(result){
												if(result.success == 1)	{
													pageRegister.elem.find('.modal-department').modal("show");
													/*console.log("Username " + username + " Email: " + email + " Password: " + password);
													pageRegister.elem.find('#email-anchor').attr('href', '<?php echo base_url('email/')?>'+email+'/'+username+'/'+password);
													pageRegister.elem.find('.btn-email').click(function(){
														console.log("Clicked");
													});*/
													$.ajax({
														method: "POST",
															url: '<?php echo base_url('email')?>',
															data: args,
															dataType: "json",
															success: function(data){
																console.log("Success");
															}
													});
													return false;

												}
												else if(result.success.error){
													console.log(result.success.error);
													pageRegister.elem.find('.modal-error .modal-body p').html(result.success.error);
													pageRegister.elem.find('.modal-error').modal("show");
												}
											}
									});
								}	
								// break;
							}
						}
					}
				});
			});
		});

		$.getJSON('<?php echo site_url('get-all-department')?>', callback);
	}

	pageRegister.init("#pageRegister", function(result){
		result = result['query'];
		console.log(result);
		$.each(result, function(key, value){
			var createOption = $('<option></option>');
			createOption.attr('value', value['dept_Id']);
			createOption.html(value['dept_name']);
			pageRegister.elem.find('.listDepartment').append(createOption);
		});
	});
</script>