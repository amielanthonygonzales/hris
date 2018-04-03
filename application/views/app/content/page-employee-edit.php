<div id="pageEmployeeEdit">
	<div tabindex="-1" role="dialog" class="modal fade in modal-department">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
				</div>
				<div class="modal-body">
					<div class="text-center">
						<div class="i-circle"><i class="icon symbol"></i></div>
						<p class="message"></p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" data-dismiss="modal" class="btn btn-success btn-proceed">Proceed</button>
					<button type="button" class="btn btn-success btn-yes">YES</button>
					<button type="button" data-dismiss="modal" class="btn btn-default btn-no">NO</button>
				</div>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="emp-full-name"></h3>
		</div>
		<div class="panel-body">
			<div class="row pull-right">
					<button type="button" name="btnBack" value="back" class ="btn btn-success btn-space btn-back-employeeEdit">

						<a href="<?php echo base_url('logout'); ?>"><i class="icon icon-left s7-power"></i>LOG OUT</a>
					</button>
					<button type="button" name="btnSave" value="save" class ="btn btn-success btn-space btn-save-employeeEdit">
							<i class="icon icon-left s7-diskette"></i>SAVE
					</button>
				</div>	
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
			<form>
				<div class="form-group">
						<label for="fname">First Name</label>
						<input class="form-control editEmp-fname" type="text" name="fname" placeholder="First Name" required />
					</div>
					<div class="form-group">
						<label for="mname">Middle Name</label>
						<input class="form-control editEmp-mname" type="text" name="mname" placeholder="Middle Name" required/>
					</div>
					<div class="form-group">
						<label for="lname">Last Name</label>
						<input class="form-control editEmp-lname" type="text" name="lname" placeholder="Last Name" required/>
					</div>
					<div class="form-group">
						<label for="extname">Extension Name</label>
						<input class="form-control editEmp-extname" type="text" name="extname" placeholder="Extension Name" />
					</div>
	                <div class="form-group">
	                    <div class="form-group">
	                        <label>Birthday (yyyy-mm-dd)</label>
	                        <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker col-md-12" id="engagement-datepicker">
	                            <span class="input-group-addon btn btn-primary">
	                            	<i class="icon-left icon-th s7-date"></i>
	                            </span>
	                            <input type="datetime" size="16" type="text" class="form-control engagement-date editEmp-birthday" name="engagement-date read" >
	                            
	                        </div>
	                    </div>
	                </div>
					<div class="form-group">
						<label for="empSalary">Salary</label>
						<input class="form-control empSalary" type="number" name="salary" placeholder="Salary" required readonly />
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input class="form-control editEmp--email " type="email" name="email" placeholder="Email" required/>
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input class="form-control editEmp-Username" type="text" name="username" placeholder="Username" required/>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input class="form-control editEmp-Password" type="password" name="password" placeholder="Password" required/>
					</div>
					<div class="form-group">
						<label for="confirmPassword">Confirm Password</label>
						<input class="form-control empConfirmPassword" type="password" name="confirmPassword" placeholder="Confirm Password" required/>
					</div>
			</form>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row pull-right">
					<button type="button" name="btnBack" value="back" class ="btn btn-success btn-space btn-back-employeeEdit">

						<a href="<?php echo base_url('logout'); ?>"><i class="icon icon-left s7-power"></i>LOG OUT</a>
					</button>
					<button type="button" name="btnSave" value="save" class ="btn btn-success btn-space btn-save-employeeEdit">
							<i class="icon icon-left s7-diskette"></i>SAVE
					</button>
				</div>	
		</div>
	</div>
</div>

<script type="text/javascript">
	var pageEmployeeEdit = {};

	pageEmployeeEdit.init = function(selector, callback){
		pageEmployeeEdit.elem = $(selector);
		pageEmployeeEdit.passId = <?php echo $id?>;
		//console.log(pageEmployeeEdit.passId);

		pageEmployeeEdit.elem.find('.btn-save-employeeEdit').off("click").click(function(event){
			pageEmployeeEdit.content = {
				"emp_first_name" : pageEmployeeEdit.elem.find('.editEmp-fname').val(),
				"emp_middle_name" : pageEmployeeEdit.elem.find('.editEmp-mname').val(),
				"emp_last_name" : pageEmployeeEdit.elem.find('.editEmp-lname').val(),
				"emp_ext_name" : pageEmployeeEdit.elem.find('.editEmp-extname').val(),
				"emp_birthday" : pageEmployeeEdit.elem.find('.editEmp-birthday').val(),
				"emp_email" : pageEmployeeEdit.elem.find('.editEmp--email').val(),
				"emp_username" : pageEmployeeEdit.elem.find('.editEmp-Username').val(),
				"emp_password" : pageEmployeeEdit.elem.find('.editEmp-Password').val()
			};

			$.ajax({
				method: "POST",
					url: "<?php echo base_url('update-employee/')?>" + pageEmployee.id,
					data: pageEmployeeEdit.content,
					success: function(result){
						if(result.success){
							pageEmployeeEdit.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
							pageEmployeeEdit.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
							pageEmployeeEdit.elem.find('.btn-proceed').show();
							pageEmployeeEdit.elem.find('.btn-yes').hide();
							pageEmployeeEdit.elem.find('.btn-no').hide();
							pageEmployeeEdit.elem.find('.message').html('Data has been saved successfully!');
							pageEmployeeEdit.elem.find('.modal-department').modal();
							
						}
					}
			});
		});

		// pageEmployeeEdit.elem.find('.btn-deleted-employeeEdit').off("click").click(function(event){
		// 	pageEmployeeEdit.elem.find('.i-circle').removeClass('text-success').addClass('text-danger');
		// 	pageEmployeeEdit.elem.find('.symbol').removeClass('s7-check').addClass('s7-attention');
		// 	pageEmployeeEdit.elem.find('.message').html('Are you sure you want to delete this data!');
		// 	pageEmployeeEdit.elem.find('.btn-proceed').hide();
		// 	pageEmployeeEdit.elem.find('.btn-yes').show().off("click").click(function(e){
		// 		$.ajax({
		// 			method: "POST",
		// 			url: "<?php echo base_url('delete-employee/')?>" + pageEmployeeEdit.id,
		// 			success: function(result){
		// 				if(result.success){
		// 					pageEmployeeEdit.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
		// 					pageEmployeeEdit.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
		// 					pageEmployeeEdit.elem.find('.btn-proceed').show();
		// 					pageEmployeeEdit.elem.find('.btn-yes').hide();
		// 					pageEmployeeEdit.elem.find('.btn-no').hide();
		// 					pageEmployeeEdit.elem.find('.message').html('Data successfully deleted!');
		// 					pageEmployeeEdit.elem.find('.modal-department').modal();
							
		// 				}
		// 			}
		// 		});
		// 	});
		// 	pageEmployeeEdit.elem.find('.btn-no').show();
		// 	pageEmployeeEdit.elem.find('.modal-department').modal();
		// });
		$.getJSON('<?php echo site_url('get-employee/')?>'+pageEmployeeEdit.passId, callback);
	}

	pageEmployeeEdit.init("#pageEmployeeEdit", function(result){
		pageEmployeeEdit.elem.find(".datetimepicker").datetimepicker({
            //startDate: date,
            autoclose: true,
            componentIcon: '.s7-date',
            navIcons:{
                rightIcon: 's7-angle-right',
                leftIcon: 's7-angle-left'
            }
        });

		result = result['query'];
        $.each(result, function(key, value){

        	pageEmployeeEdit.elem.find('.emp-full-name').text(value['emp_last_name'] + ", " + value['emp_first_name'] + " " + value['emp_middle_name'] + " " + value['emp_ext_name']);

        	pageEmployeeEdit.elem.find('.editEmp-fname').val(value['emp_first_name']);
        	pageEmployeeEdit.elem.find('.editEmp-mname').val(value['emp_middle_name']);
        	pageEmployeeEdit.elem.find('.editEmp-lname').val(value['emp_last_name']);
        	pageEmployeeEdit.elem.find('.editEmp-extname').val(value['emp_ext_name']);
        	pageEmployeeEdit.elem.find('.editEmp-birthday').val(value['emp_birthday']);
        	pageEmployeeEdit.elem.find('.editEmp--email').val(value['emp_email']);
        	pageEmployeeEdit.elem.find('.editEmp-Username').val(value['emp_username']);
        	pageEmployeeEdit.elem.find('.empSalary').val(value['emp_salary']);
        });
    });
</script>