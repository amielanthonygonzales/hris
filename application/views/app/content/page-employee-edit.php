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
						<h4>Awesome!</h4>
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
	<div class="panel-buttons ">
		<div class="row col-md-12 ">
			<div class="form-group">
				<button type="button" name="btnSave" value="save" class ="btn btn-success btn-space btn-save-employeeEdit">
					<i class="icon icon-left s7-diskette"></i>SAVE
				</button>
				<button type="button" name="btnBack" value="back" class ="btn btn-success btn-space btn-back-employeeEdit">
					<a href="<?php echo base_url('logout'); ?>"><i class="icon icon-left s7-power"></i>LOG OUT</a>
				</button>
			</div>	
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="emp-full-name"></h3>
		</div>
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
	                <div class="am-checkbox">
                    	<input id="check1" type="checkbox" class="icheck changePassword">
                    	<label for="check1">Change Password</label>
                    </div>
					<div class="passwordForm">
						<div class="form-group">
							<label>Current Password <code>*</code></label>
							<input class="form-control editEmp-currentPass" type="password" name="currentPass" placeholder="Current Password" />
						</div>
						<div class="form-group">
							<label>New Password (at least 8 alphanumeric characters w/special characters) <code>*</code></label>
							<input class="form-control editEmp-newPass" type="password" name="newPass" placeholder="New Password" />
						</div>
					</div>
					<div class="form-group">
						<label for="empSalary">Salary</label>
						<input class="form-control editEmp-salary" type="number" name="salary" placeholder="Salary" required readonly />
					</div>
					<div class="form-group">
						<label>Department</label>
						<input class="form-control editEmp-dept" type="text" name="empDept" placeholder="Department" required readonly />
					</div>
			</form>
		</div>
	</div>
	<div class="row">

		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>SSS Information</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label>SSS Number</label>
						<input class="form-control editEmp-sss" type="text" name="empSss" placeholder="SSS Number" required readonly />
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Pag-Ibig Information</h3>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label>Pag-Ibig Number</label>
						<input class="form-control editEmp-pagibig" type="text" name="empPagibig" placeholder="Pag-Ibig Number" required readonly />
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="panel panel-default">
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
	</div> -->
</div>

<script type="text/javascript">
	var pageEmployeeEdit = {};

	pageEmployeeEdit.init = function(selector, callback){
		pageEmployeeEdit.elem = $(selector);
		pageEmployeeEdit.passId = <?php echo $id?>;
		pageEmployeeEdit.passwordChange = 'no';
		//console.log(pageEmployeeEdit.passId);

		pageEmployeeEdit.elem.find('.passwordForm').hide();
		pageEmployeeEdit.elem.find('.editEmp-currentPass').val('');
		pageEmployeeEdit.elem.find('.editEmp-newPass').val('');

		pageEmployeeEdit.elem.find('.changePassword').off("click").click(function(e){
			if(pageEmployeeEdit.elem.find('.changePassword').is(':checked')){
				pageEmployeeEdit.elem.find('.passwordForm').show();
				pageEmployeeEdit.passwordChange = 'yes';
			}else{
				pageEmployeeEdit.elem.find('.passwordForm').hide();
				pageEmployeeEdit.elem.find('.editEmp-currentPass').val('');
				pageEmployeeEdit.elem.find('.editEmp-newPass').val('');
				pageEmployeeEdit.passwordChange = 'no';
			}
		});

		pageEmployeeEdit.elem.find('.btn-save-employeeEdit').off("click").click(function(event){
			pageEmployeeEdit.content = {
				"emp_id" : pageEmployeeEdit.passId,
				"emp_first_name" : pageEmployeeEdit.elem.find('.editEmp-fname').val(),
				"emp_middle_name" : pageEmployeeEdit.elem.find('.editEmp-mname').val(),
				"emp_last_name" : pageEmployeeEdit.elem.find('.editEmp-lname').val(),
				"emp_ext_name" : pageEmployeeEdit.elem.find('.editEmp-extname').val(),
				"emp_birthday" : pageEmployeeEdit.elem.find('.editEmp-birthday').val(),
				"changePassword" : pageEmployeeEdit.passwordChange,
				currentPassword : pageEmployeeEdit.elem.find('.editEmp-currentPass').val(),
				newPassword : pageEmployeeEdit.elem.find('.editEmp-newPass').val()
			};

			console.log(pageEmployeeEdit.passId);

			$.ajax({
				method: "POST",
					url: "<?php echo base_url('employee-update/')?>" + pageEmployeeEdit.passId,
					data: pageEmployeeEdit.content,
					success: function(result){
						if(result.success == 1){
							pageEmployeeEdit.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
							pageEmployeeEdit.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
							pageEmployeeEdit.elem.find('.btn-proceed').show();
							pageEmployeeEdit.elem.find('.btn-yes').hide();
							pageEmployeeEdit.elem.find('.btn-no').hide();
							pageEmployeeEdit.elem.find('.message').html('Data has been saved successfully!');
							pageEmployeeEdit.elem.find('.modal-department').modal();
							
						}else if(result.success == 2){
							pageEmployeeEdit.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
							pageEmployeeEdit.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
							pageEmployeeEdit.elem.find('.btn-proceed').show().off("click").click(function(e){
								window.parent.location = "<?php echo base_url('logout')?>";
							});
							pageEmployeeEdit.elem.find('.btn-yes').hide();
							pageEmployeeEdit.elem.find('.btn-no').hide();
							pageEmployeeEdit.elem.find('.message').html('Data has been saved successfully!');
							pageEmployeeEdit.elem.find('.modal-department').modal();
							
						}else if(result.success.error){
							pageEmployeeEdit.elem.find('.modal-error .modal-body p').html(result.success.error);
							pageEmployeeEdit.elem.find('.modal-error').modal("show");
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
		console.log(result);
        $.each(result, function(key, value){

        	pageEmployeeEdit.elem.find('.emp-full-name').text(value['emp_last_name'] + ", " + value['emp_first_name'] + " " + value['emp_middle_name'] + " " + value['emp_ext_name']);

        	pageEmployeeEdit.elem.find('.editEmp-fname').val(value['emp_first_name']);
        	pageEmployeeEdit.elem.find('.editEmp-mname').val(value['emp_middle_name']);
        	pageEmployeeEdit.elem.find('.editEmp-lname').val(value['emp_last_name']);
        	pageEmployeeEdit.elem.find('.editEmp-extname').val(value['emp_ext_name']);
        	pageEmployeeEdit.elem.find('.editEmp-birthday').val(value['emp_birthday']);
        	pageEmployeeEdit.elem.find('.editEmp-salary').val(value['emp_salary']);
        	pageEmployeeEdit.elem.find('.editEmp-sss').val(value['sss_no']);
        	pageEmployeeEdit.elem.find('.editEmp-pagibig').val(value['pagibig_no']);


        	pageEmployeeEdit.dept_id = value['emp_dept'];
        });

        $.getJSON('<?php echo site_url('get-department-name/')?>'+pageEmployeeEdit.dept_id, function(data){
        		data = data['query'];
        		console.log( data);

        		$.each(data, function(keyDept, valueDept){
        			pageEmployeeEdit.elem.find('.editEmp-dept').val(valueDept['dept_name']);
        		});
	        		
        	});
    });
</script>