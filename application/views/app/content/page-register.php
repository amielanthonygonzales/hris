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
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Register Employee</h3>
		</div>
		<div class="panel-body">
			<form>
				<div class="row form-group">
					<div class="col-md-10 col-md-2 pull-right">
						<button type="button" name="btnBack" value="back" class ="btn btn-space btn-success btnBack">
							<i class="icon icon-left s7-back"></i>BACK
						</button>
						<button type="button" name="btnAdd" value="add" class ="btn btn-space btn-success btn-add-register">
							<i class="icon icon-left s7-plus"></i>ADD
						</button>	
					</div>
				</div>	
				<div class="form-group">
					<label for="employeeID">Employee ID</label>
					<input class="form-control employeeID" type="text" name="empId" placeholder="Employee ID" required />
				</div>
				<div class="form-group">
					<label for="lname">Last Name</label>
					<input class="form-control lname" type="text" name="lname" placeholder="Last Name" required/>
				</div>
				<div class="form-group">
					<label for="first-name">First Name</label>
					<input class="form-control first-name" type="text" name="fname" placeholder="First Name" required />
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
					<label for="username">Username</label>
					<input class="form-control usernameRegister" type="text" name="username" placeholder="Username" required/>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input class="form-control passwordRegister" type="password" name="password" placeholder="Password" required/>
				</div>
				<div class="form-group">
					<div class="horizontal">
						<label>Position</label>
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
					<label class="control-label">Department</label>
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
		pageRegister.elem.find('.btn-add-register').off("click").click(function(event){
			var register_info = {
				"emp_id" : pageRegister.elem.find('.employeeID').val(),
				"emp_dept" : pageRegister.elem.find('.listDepartment').val(),
				"emp_last_name" : pageRegister.elem.find('.lname').val(),
				"emp_first_name" : pageRegister.elem.find('.first-name').val(),
				"emp_middle_name" : pageRegister.elem.find('.mname').val(),
				"emp_ext_name" : pageRegister.elem.find('.extname').val(),
				"emp_username" : pageRegister.elem.find('.usernameRegister').val(),
				"emp_password" : pageRegister.elem.find('.passwordRegister').val(),
				"emp_position" : pageRegister.elem.find('.position-radio:checked').val()
			};

			$.ajax({
				method: "POST",
					url: "<?php echo base_url('add-employee')?>",
					data: register_info,
					success: function(result){
						if(result.success == 1)	{
							pageRegister.elem.find('.modal-department').modal("show");
						}
						else if(result.success.error){
							console.log(result.success.error);
							pageRegister.elem.find('.modal-error .modal-body p').html(result.success.error);
							pageRegister.elem.find('.modal-error').modal("show");
						}
					}
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