<div id="pageEmployeeRestore">
	<div tabindex="-1" role="dialog" class="modal fade in modal-emp-restore">
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
				<button type="button" name="btnBack" value="back" class ="btn btn-success btn-space btn-back-employee">

					<i class="icon icon-left s7-back"></i>BACK
				</button>
				<button type="button" name="btnRestore" value="restore" class ="btn btn-success btn-space btn-restore-employee">
						<i class="icon icon-left s7-repeat"></i>RESTORE
				</button>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2 class="username-header"></h2>
			<h3 class="emp-full-name"></h3>
		</div>
		
		<div class="panel-body">
			<form>
				
				<div class="form-group">
					<label for="fname">First Name</label>
					<input class="form-control fname required-textfield typing-emp" type="text" name="fname" placeholder="First Name"/>
				</div>
				<div class="form-group">
					<label for="mname">Middle Name</label>
					<input class="form-control mname required-textfield typing-emp" type="text" name="mname" placeholder="Middle Name"/>
				</div>
				<div class="form-group">
					<label for="lname">Last Name</label>
					<input class="form-control lname required-textfield typing-emp" type="text" name="lname" placeholder="Last Name"/>
				</div>
				<div class="form-group">
					<label for="extname">Extension Name</label>
					<input class="form-control extname required-textfield typing-emp" type="text" name="extname" placeholder="Extension Name"/>
				</div>
                <div class="form-group">
                    <div class="form-group">
                        <label>Birthday (yyyy-mm-dd)</label>
                        <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker col-md-12" id="engagement-datepicker">
                            <span class="input-group-addon btn btn-primary">
                            	<i class="icon-left icon-th s7-date"></i>
                            </span>
                            <input type="datetime" size="16" type="text" class="form-control required-textfield engagement-date typing-emp" name="engagement-date read">
                            
                        </div>
                    </div>
                </div>
				<div class="form-group email-group">
					<label for="email">Email</label>
					<input class="form-control empEmail required-textfield typing-emp" type="email" name="email" placeholder="Email"/>
				</div>
				<div class="form-group username-group">
					<label for="username">Username</label>
					<input class="form-control empUsername typing-emp" type="text" name="username" placeholder="Username"/>
				</div>
				<div class="form-group">
					<label for="empSalary">Salary</label>
					<input class="form-control empSalary typing-emp" type="text" name="salary" placeholder="Salary"/>
				</div>
				<div class="form-group">
					<label class="control-label">Department</label>
					<input class="form-control listDepartment typing-emp" type="text" name="department" placeholder="Department"/>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>SSS Contribution</h3>
					</div>
					<div class="panel-body sss-panel">
						<div class="form-group">
							<label for="sss-number">SSS Number</label>
							<div class="row form-group">
								<div class="col-md-3">
									<input class="form-control sss-number1 typing-emp" type="text" name="sss-number"/>
								</div>
								<div class="col-md-1">
									<div class="dash-container">-</div>
								</div>
								<div class="col-md-4">
									<input class="form-control sss-number2 typing-emp" type="text" name="sss-number"/>
								</div>
								<div class="col-md-1">
									<div class="dash-container">-</div>
								</div>
								<div class="col-md-2">
									<input class="form-control sss-number3 typing-emp" type="text" name="sss-number"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="ss-contribution">Social Security Contribution</label>
							<div class="row form-group">
								<div class="col-md-3">
									<label for="ec-contribution">ER Contribution</label>
									<input class="form-control er-Contribution typing-emp" type="text" name="erContribution"/>
								</div>
								<div class="col-md-1">
									<div class="dash-container-sss">+</div>
								</div>
								<div class="col-md-3">
									<label for="ee-contribution">EE Contribution</label>
									<input class="form-control ee-Contribution typing-emp" type="text" name="eeContribution" />
								</div>
								<div class="col-md-1">
									<div class="dash-container-sss">=</div>
								</div>
								<div class="col-md-3">
									<label for="ss-contribution">Total</label>
									<input class="form-control sss-Contribution typing-emp" type="text" name="ssContribution"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="ec-contribution">Employee Compensation Contribution</label>
							<input class="form-control ec-Contribution typing-emp" type="text" name="erContribution" placeholder="EC Contribution"  />
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Pag-ibig Contribution</h3>
					</div>
					<div class="panel-body pagibig-panel">
						<div class="form-group">
							<label for="pagibig-mid-number">Pag-Ibig MID No</label>
							<div class="row form-group">
								<div class="col-md-3">
									<input class="form-control pagibig-mid-number1 typing-emp" type="text" name="pagibigMidNumber"/>
								</div>
								<div class="col-md-1">
									<div class="dash-container">-</div>
								</div>
								<div class="col-md-3">
									<input class="form-control pagibig-mid-number2 typing-emp" type="text" name="pagibigMidNumber"/>
								</div>
								<div class="col-md-1">
									<div class="dash-container">-</div>
								</div>
								<div class="col-md-3">
									<input class="form-control pagibig-mid-number3 typing-emp" type="text" name="pagibigMidNumber"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label >Pag-Ibig Number</label>
							<div class="row form-group">
								<div class="col-md-3">
									<input class="form-control pagibig-number1 typing-emp" type="text" name="pagibigNumber"/>
								</div>
								<div class="col-md-1">
									<div class="dash-container">-</div>
								</div>
								<div class="col-md-3">
									<input class="form-control pagibig-number2 typing-emp" type="text" name="pagibigNumber"/>
								</div>
								<div class="col-md-1">
									<div class="dash-container">-</div>
								</div>
								<div class="col-md-3">
									<input class="form-control pagibig-number3 typing-emp" type="text" name="pagibigNumber"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Membership Program</label>
							<input class="form-control mem-program typing-emp" type="text" name="mem-program" placeholder="Membership Program"/>
						</div>
						<div class="form-group">
							<label for="pagibig-number">Monthly Compensation</label>
							<input class="form-control monthly-compen typing-emp" type="text" name="monthly-compen" placeholder="Monthly Compensation"/>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="ee-share">EE Share</label>
									<input class="form-control ee-share typing-emp" type="text" name="eeShare" placeholder="EE Share"/>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="er-share">ER Share</label>
									<input class="form-control er-share typing-emp" type="text" name="erShare" placeholder="ER Share"/>
								</div>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-6">
								<label for="pagibig-monthly">Remarks</label>
								<input class="form-control pagibig-remarks typing-emp" type="text" name="pagibig-remarks" placeholder="Remarks"/>
							</div>
							<div class="col-md-6">
								<label>Specify the date (mm/dd/yyyy)</label>
		                        <div data-min-view="2" data-date-format="mm/dd/yyyy" class="input-group date datetimepicker col-md-12" id="engagement-datepicker">
		                            <span class="input-group-addon btn btn-primary">
		                            	<i class="icon-left icon-th s7-date"></i>
		                            </span>
		                            <input type="datetime" size="16" type="text" class="form-control required-textfield remarks-date typing-emp" name="engagement-date read">
		                            
		                        </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	var pageEmployeeRestore = {};
	pageEmployeeRestore.init = function(selector, callback){
		pageEmployeeRestore.elem = $(selector);



		pageEmployeeRestore.elem.find('.typing-emp').keydown(function(e){
			if(e.which == 9){
				return true;
			}else{
				return false;
			}
		});
		pageEmployeeRestore.elem.find('.typing-emp').on("contextmenu",function(){
	       return false;
	    });

		pageEmployeeRestore.emp_id = '<?php echo $id?>';

		pageEmployeeRestore.elem.find('.btn-back-employee').off("click").click(function(e){
			location.replace('<?php echo base_url('employee-restore-list')?>');
		});

		pageEmployeeRestore.elem.find('.btn-restore-employee').off("click").click(function(e){
			pageEmployeeRestore.elem.find('.i-circle').removeClass('text-success').addClass('text-danger');
			pageEmployeeRestore.elem.find('.symbol').removeClass('s7-check').addClass('s7-attention');
			pageEmployeeRestore.elem.find('.message').html('Are you sure you want to restore this employee?');
			pageEmployeeRestore.elem.find('.btn-proceed').hide();
			pageEmployeeRestore.elem.find('.btn-yes').show().off("click").click(function(e){
				$.ajax({
					method: "POST",
					url: "<?php echo base_url('update-restore-employee/')?>" + pageEmployeeRestore.emp_id,
					success: function(result){
						if(result.success){
							pageEmployeeRestore.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
							pageEmployeeRestore.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
							pageEmployeeRestore.elem.find('.btn-proceed').show().off("click").click(function(){
								location.replace('<?php echo base_url('employee-restore-list')?>');
							});
							pageEmployeeRestore.elem.find('.btn-yes').hide();
							pageEmployeeRestore.elem.find('.btn-no').hide();
							pageEmployeeRestore.elem.find('.message').html('Data successfully restored!');
							pageEmployeeRestore.elem.find('.modal-emp-restore').modal();
							
						}
					}
				});
			});
			pageEmployeeRestore.elem.find('.btn-no').show();
			pageEmployeeRestore.elem.find('.modal-emp-restore').modal();
		});

		$.getJSON('<?php echo site_url('get-employee-restore/')?>'+pageEmployeeRestore.emp_id, callback);
	}

	pageEmployeeRestore.init("#pageEmployeeRestore", function(result){
		result = result['query'];
		console.log(result);

		$.each(result, function(keyEmp, valueEmp){
			pageEmployeeRestore.elem.find('.fname').val(valueEmp['emp_first_name']);
			pageEmployeeRestore.elem.find('.mname').val(valueEmp['emp_middle_name']);
			pageEmployeeRestore.elem.find('.lname').val(valueEmp['emp_last_name']);
			pageEmployeeRestore.elem.find('.extname').val(valueEmp['emp_ext_name']);
			pageEmployeeRestore.elem.find('.engagement-date').val(valueEmp['emp_birthday']);
			pageEmployeeRestore.elem.find('.empEmail').val(valueEmp['emp_email']);
			pageEmployeeRestore.elem.find('.empUsername').val(valueEmp['emp_username']);
			pageEmployeeRestore.elem.find('.empSalary').val(valueEmp['emp_salary']);
			pageEmployeeRestore.elem.find('.er-Contribution').val(valueEmp['er_contribution']);
			pageEmployeeRestore.elem.find('.ee-Contribution').val(valueEmp['ee_contribution']);
			pageEmployeeRestore.elem.find('.ee-Contribution').val(valueEmp['ee_contribution']);
			pageEmployeeRestore.elem.find('.sss-Contribution').val(valueEmp['ss_contribution']);
			pageEmployeeRestore.elem.find('.mem-program').val(valueEmp['pagibig_mem_prog']);
			pageEmployeeRestore.elem.find('.monthly-compen').val(valueEmp['monthly_compen']);
			pageEmployeeRestore.elem.find('.ee-share').val(valueEmp['pagibig_ee_share']);
			pageEmployeeRestore.elem.find('.er-share').val(valueEmp['pagibig_er_share']);
			pageEmployeeRestore.elem.find('.pagibig-remarks').val(valueEmp['pagibig_remarks']);
			pageEmployeeRestore.elem.find('.ec-Contribution').val(valueEmp['ec_contribution']);
			pageEmployeeRestore.elem.find('.username-header').text(valueEmp['emp_username']);
			pageEmployeeRestore.elem.find('.emp-full-name').text(
															valueEmp['emp_last_name'] 
															+ ", " 
															+ valueEmp['emp_first_name'] 
															+ " " 
															+ valueEmp['emp_middle_name'] 
															+ " " 
															+ valueEmp['emp_ext_name']);

			pageEmployeeRestore.dept_id = valueEmp['emp_dept'];

			pageEmployeeRestore.mid_no = valueEmp['pagibig_mid_no'].split('-');
			pageEmployeeRestore.accountNo = valueEmp['pagibig_no'].split('-');
			pageEmployeeRestore.sssNo = valueEmp['sss_no'].split('-');

		});

		$.getJSON('<?php echo site_url('get-department-name/')?>'+pageEmployeeRestore.dept_id, function(data){
			data = data['query']
			console.log(data);
			$.each(data, function(keyDept, valueDept){
				pageEmployeeRestore.elem.find('.listDepartment').val(valueDept['dept_name']);
			});
		});

		pageEmployeeRestore.elem.find('.pagibig-mid-number1').val(pageEmployeeRestore.mid_no[0]);
		pageEmployeeRestore.elem.find('.pagibig-mid-number2').val(pageEmployeeRestore.mid_no[1]);
		pageEmployeeRestore.elem.find('.pagibig-mid-number3').val(pageEmployeeRestore.mid_no[2]);
		pageEmployeeRestore.elem.find('.pagibig-number1').val(pageEmployeeRestore.accountNo[0]);
		pageEmployeeRestore.elem.find('.pagibig-number2').val(pageEmployeeRestore.accountNo[1]);
		pageEmployeeRestore.elem.find('.pagibig-number3').val(pageEmployeeRestore.accountNo[2]);
		pageEmployeeRestore.elem.find('.sss-number1').val(pageEmployeeRestore.sssNo[0]);
		pageEmployeeRestore.elem.find('.sss-number2').val(pageEmployeeRestore.sssNo[1]);
		pageEmployeeRestore.elem.find('.sss-number3').val(pageEmployeeRestore.sssNo[2]);
	});
</script>