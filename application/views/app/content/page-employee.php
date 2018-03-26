<div id="pageEmployee">
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
			<form>
				<div class="row form-group">
					<button type="button" name="btnBack" value="back" class ="btn btn-success btn-space btn-back-employee">

						<i class="icon icon-left s7-back"></i>BACK
					</button>
					<button type="button" name="btnSave" value="save" class ="btn btn-success btn-space btn-save-employee">
							<i class="icon icon-left s7-diskette"></i>SAVE
					</button>
					<button type="button" name="btnDeleted" value="deleted" class ="btn btn-success btn-space btn-deleted-employee">
							<i class="icon icon-left s7-trash"></i>DELETED
					</button>
					
				</div>	
				<div class="form-group">
					<label for="fname">First Name</label>
					<input class="form-control fname" type="text" name="fname" placeholder="First Name" required readonly />
				</div>
				<div class="form-group">
					<label for="mname">Middle Name</label>
					<input class="form-control mname" type="text" name="mname" placeholder="Middle Name" required readonly/>
				</div>
				<div class="form-group">
					<label for="lname">Last Name</label>
					<input class="form-control lname" type="text" name="lname" placeholder="Last Name" required readonly/>
				</div>
				<div class="form-group">
					<label for="extname">Extension Name</label>
					<input class="form-control extname" type="text" name="extname" placeholder="Extension Name" readonly/>
				</div>
                <div class="form-group">
                    <div class="form-group">
                        <label>Birthday (yyyy-mm-dd)</label>
                        <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker col-md-12" id="engagement-datepicker">
                            <span class="input-group-addon btn btn-primary">
                            	<i class="icon-left icon-th s7-date"></i>
                            </span>
                            <input type="datetime" size="16" type="text" class="form-control engagement-date" name="engagement-date read" readonly>
                            
                        </div>
                    </div>
                </div>
				<div class="form-group">
					<label for="empSalary">Salary</label>
					<input class="form-control empSalary" type="number" name="salary" placeholder="Salary" required />
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input class="form-control emp-email" type="email" name="email" placeholder="Email" readonly required/>
				</div>
				<div class="form-group">
					<label for="username">Username</label>
					<input class="form-control empUsername" type="text" name="username" placeholder="Username" readonly required/>
				</div>
				<div class="form-group">
					<label class="control-label">Department</label>
					<select class="form-control listDepartment"></select>
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
							<input class="form-control sss-number" type="text" name="sssNumber" placeholder="SSS Number" required />
						</div>
						<div class="form-group">
							<label for="ss-contribution">SS Contribution</label>
							<input class="form-control sss-Contribution" type="text" name="ssContribution" placeholder="SS Contribution" readonly />
						</div>
						<div class="form-group">
							<label for="ec-contribution">EC Contribution</label>
							<input class="form-control ec-Contribution" type="text" name="erContribution" placeholder="ER Contribution" readonly />
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
							<input class="form-control pagibig-mid-number" type="text" name="pagibigMidNumber" placeholder="Pag-Ibig Mid Number" required />
						</div>
						<div class="form-group">
							<label for="pagibig-number">Pag-Ibig Number</label>
							<input class="form-control pagibig-number" type="text" name="pagibigNumber" placeholder="Pag-Ibig Number" required />
						</div>
						<div class="form-group">
							<label for="membership-program">Membership Program</label>
							<input class="form-control membership-program" type="text" name="membershipProgram" placeholder="Membership Program" required />
						</div>
						<div class="form-group">
							<label for="pagibig-periodCov">Pag-Ibig Period Covered</label>
							<input class="form-control periodCov" type="text" name="periodCov" placeholder="Pag-Ibig Period Covered" required />
						</div>
						<div class="form-group">
							<label for="pagibig-monthly">Pag-Ibig Monthly Compensation</label>
							<input class="form-control pagibig-monthly" type="text" name="pagibig-monthly" placeholder="Pag-Ibig Monthly Compensation" required />
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="ee-share">EE Share</label>
									<input class="form-control ee-share" type="text" name="eeShare" placeholder="EE Share" required />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="er-share">ER Share</label>
									<input class="form-control er-share" type="text" name="erShare" placeholder="ER Share" required />
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

	var pageEmployee = {};
	pageEmployee.init = function(selector, callback){
		pageEmployee.elem = $(selector);
		pageEmployee.action = "<?php echo $action?>";
		pageEmployee.id = <?php echo $id?>;

		pageEmployee.elem.find('.btn-back-employee').off("click").click(function(e){
			location.replace('<?php echo base_url('employee-list')?>');
		});

		if(pageEmployee.action == "view"){
			pageEmployee.elem.find(".panel-body").find("*").attr("disabled", "disabled");
			pageEmployee.elem.find(".btn-back-employee").removeAttr("disabled");
		}
		else if(pageEmployee.action == "edit"){
			pageEmployee.elem.find(".panel-body").find("*").remove("disabled");
		}	

		pageEmployee.elem.find('.btn-save-employee').off("click").click(function(event){
			pageEmployee.employee_content = {
				"emp_dept" : pageEmployee.elem.find('.listDepartment').val(),
				"emp_salary": pageEmployee.elem.find('.empSalary').val(),
				"sss_no" : pageEmployee.elem.find('.sss-number').val(),
				"ss_contribution" : pageEmployee.elem.find('.sss-Contribution').val(),
				"ec_contribution" : pageEmployee.elem.find('.ec-Contribution').val(),
				"pagibig_no" : pageEmployee.elem.find('.pagibig-number').val(),
				"pagibig_mid_no" : pageEmployee.elem.find('.pagibig-mid-number').val(),
				"pagibig_member_prog" : pageEmployee.elem.find('.membership-program').val(),
				"pagibig_period_cov" : pageEmployee.elem.find('.periodCov').val(),
				"pagibig_monthly_compen" : pageEmployee.elem.find('.pagibig-monthly').val(),
				"pagibig_ee_share" : pageEmployee.elem.find('.ee-share').val(),
				"pagibig_er_share" : pageEmployee.elem.find('.er-share').val()
			};
			$.ajax({
				method: "POST",
					url: "<?php echo base_url('update-employee/')?>" + pageEmployee.id,
					data: pageEmployee.employee_content,
					success: function(result){
						if(result.success){
							pageEmployee.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
							pageEmployee.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
							pageEmployee.elem.find('.btn-proceed').show();
							pageEmployee.elem.find('.btn-yes').hide();
							pageEmployee.elem.find('.btn-no').hide();
							pageEmployee.elem.find('.message').html('Data has been saved successfully!');
							pageEmployee.elem.find('.modal-department').modal();
							
						}
					}
			});
		});

		pageEmployee.elem.find('.btn-deleted-employee').off("click").click(function(event){
			
			pageEmployee.elem.find('.i-circle').removeClass('text-success').addClass('text-danger');
			pageEmployee.elem.find('.symbol').removeClass('s7-check').addClass('s7-attention');
			pageEmployee.elem.find('.message').html('Are you sure you want to delete this data!');
			pageEmployee.elem.find('.btn-proceed').hide();
			pageEmployee.elem.find('.btn-yes').show().off("click").click(function(e){
				$.ajax({
					method: "POST",
					url: "<?php echo base_url('delete-employee/')?>" + pageEmployee.id,
					success: function(result){
						if(result.success){
							pageEmployee.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
							pageEmployee.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
							pageEmployee.elem.find('.btn-proceed').show();
							pageEmployee.elem.find('.btn-yes').hide();
							pageEmployee.elem.find('.btn-no').hide();
							pageEmployee.elem.find('.message').html('Data successfully deleted!');
							pageEmployee.elem.find('.modal-department').modal();
							
						}
					}
				});
			});
			pageEmployee.elem.find('.btn-no').show();
			pageEmployee.elem.find('.modal-department').modal();
		});

		$.getJSON('<?php echo site_url('get-employee/')?>'+pageEmployee.id, callback);
	}

	pageEmployee.init("#pageEmployee", function(result){
		pageEmployee.elem.find(".datetimepicker").datetimepicker({
            //startDate: date,
            autoclose: true,
            componentIcon: '.s7-date',
            navIcons:{
                rightIcon: 's7-angle-right',
                leftIcon: 's7-angle-left'
            }
        });
		pageEmployee.result = result['query'];
		pageEmployee.departmentResult = result['departmentQuery'];
		$.each(pageEmployee.departmentResult, function(key, value){
			var createOption = $('<option></option>');
			createOption.attr('value', value['dept_Id']);
			createOption.html(value['dept_name']);
			pageEmployee.elem.find('.listDepartment').append(createOption);
		});
		$.each(pageEmployee.result, function(key, value){

			pageEmployee.elem.find('.emp-full-name').html(
				value['emp_last_name'] + ", " 
				+ value['emp_first_name'] + " " 
				+ value['emp_middle_name'] + " " 
				+ value['emp_ext_name']);

			pageEmployee.elem.find('.fname').val(value['emp_first_name']);
			pageEmployee.elem.find('.mname').val(value['emp_middle_name']);
			pageEmployee.elem.find('.lname').val(value['emp_last_name']);
			pageEmployee.elem.find('.extname').val(value['emp_ext_name']);
			pageEmployee.elem.find('.listDepartment').val(value['emp_dept']);

			pageEmployee.elem.find('.engagement-date').val(value['emp_birthday']);
			pageEmployee.elem.find('.empSalary').val(value['emp_salary']);
			pageEmployee.elem.find('.emp-email').val(value['emp_email']);
			pageEmployee.elem.find('.empUsername').val(value['emp_username']);

			pageEmployee.elem.find('.sss-number').val(value['sss_no']);
			pageEmployee.elem.find('.sss-Contribution').val(value['ss_contribution']);
			pageEmployee.elem.find('.ec-Contribution').val(value['ec_contribution']);

			pageEmployee.elem.find('.pagibig-mid-number').val(value['pagibig_mid_no']);
			pageEmployee.elem.find('.pagibig-number').val(value['pagibig_no']);
			pageEmployee.elem.find('.membership-program').val(value['pagibig_member_prog']);
			pageEmployee.elem.find('.periodCov').val(value['pagibig_period_cov']);
			pageEmployee.elem.find('.pagibig-monthly').val(value['pagibig_monthly_compen']);
			pageEmployee.elem.find('.ee-share').val(value['pagibig_ee_share']);
			pageEmployee.elem.find('.er-share').val(value['pagibig_er_share']);
		});

		pageEmployee.elem.find('.empSalary').keyup(function(e){
			pageEmployee.salary = pageEmployee.elem.find('.empSalary').val();
			if(pageEmployee.salary < 1000){
				pageEmployee.elem.find('.sss-Contribution').val('0.00');
				pageEmployee.elem.find('.ec-Contribution').val('0.00');
			}else if(pageEmployee.salary >= 1000 && pageEmployee.salary <= 1249.99){
				pageEmployee.elem.find('.sss-Contribution').val('110.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 1250 && pageEmployee.salary <= 1749.99){
				pageEmployee.elem.find('.sss-Contribution').val('165.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 1750 && pageEmployee.salary <= 2249.99){
				pageEmployee.elem.find('.sss-Contribution').val('220.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 2250 && pageEmployee.salary <= 2749.99){
				pageEmployee.elem.find('.sss-Contribution').val('275.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 2750 && pageEmployee.salary <= 3249.99){
				pageEmployee.elem.find('.sss-Contribution').val('330.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 3250 && pageEmployee.salary <= 3749.99){
				pageEmployee.elem.find('.sss-Contribution').val('385.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 3750 && pageEmployee.salary <= 4249.99){
				pageEmployee.elem.find('.sss-Contribution').val('440.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 4250 && pageEmployee.salary <= 4749.99){
				pageEmployee.elem.find('.sss-Contribution').val('495.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 4750 && pageEmployee.salary <= 5249.99){
				pageEmployee.elem.find('.sss-Contribution').val('550.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 5250 && pageEmployee.salary <= 5749.99){
				pageEmployee.elem.find('.sss-Contribution').val('605.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 5750 && pageEmployee.salary <= 6249.99){
				pageEmployee.elem.find('.sss-Contribution').val('660.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 6250 && pageEmployee.salary <= 6749.99){
				pageEmployee.elem.find('.sss-Contribution').val('715.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 6750 && pageEmployee.salary <= 7249.99){
				pageEmployee.elem.find('.sss-Contribution').val('770.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 7250 && pageEmployee.salary <= 7749.99){
				pageEmployee.elem.find('.sss-Contribution').val('825.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 7750 && pageEmployee.salary <= 8249.99){
				pageEmployee.elem.find('.sss-Contribution').val('880.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 8250 && pageEmployee.salary <= 8749.99){
				pageEmployee.elem.find('.sss-Contribution').val('935.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 8750 && pageEmployee.salary <= 9249.99){
				pageEmployee.elem.find('.sss-Contribution').val('990.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 9250 && pageEmployee.salary <= 9749.99){
				pageEmployee.elem.find('.sss-Contribution').val('1045.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 9750 && pageEmployee.salary <= 10249.99){
				pageEmployee.elem.find('.sss-Contribution').val('1100.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 10250 && pageEmployee.salary <= 10749.99){
				pageEmployee.elem.find('.sss-Contribution').val('1155.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 10750 && pageEmployee.salary <= 11249.99){
				pageEmployee.elem.find('.sss-Contribution').val('1210.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 11250 && pageEmployee.salary <= 11749.99){
				pageEmployee.elem.find('.sss-Contribution').val('1265.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 11750 && pageEmployee.salary <= 12249.99){
				pageEmployee.elem.find('.sss-Contribution').val('1320.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 12250 && pageEmployee.salary <= 12749.99){
				pageEmployee.elem.find('.sss-Contribution').val('1375.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 12750 && pageEmployee.salary <= 13249.99){
				pageEmployee.elem.find('.sss-Contribution').val('1430.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 13250 && pageEmployee.salary <= 13749.99){
				pageEmployee.elem.find('.sss-Contribution').val('1485.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 13750 && pageEmployee.salary <= 14249.99){
				pageEmployee.elem.find('.sss-Contribution').val('1540.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 14250 && pageEmployee.salary <= 14749.99){
				pageEmployee.elem.find('.sss-Contribution').val('1595.00');
				pageEmployee.elem.find('.ec-Contribution').val('10.00');
			}else if(pageEmployee.salary >= 14750 && pageEmployee.salary <= 15249.99){
				pageEmployee.elem.find('.sss-Contribution').val('1650.00');
				pageEmployee.elem.find('.ec-Contribution').val('30.00');
			}else if(pageEmployee.salary >= 15250 && pageEmployee.salary <= 15749.99){
				pageEmployee.elem.find('.sss-Contribution').val('1705.00');
				pageEmployee.elem.find('.ec-Contribution').val('30.00');
			}else if(pageEmployee.salary >= 15750){
				pageEmployee.elem.find('.sss-Contribution').val('1760.00');
				pageEmployee.elem.find('.ec-Contribution').val('30.00');
			}
		});
	});
</script>
