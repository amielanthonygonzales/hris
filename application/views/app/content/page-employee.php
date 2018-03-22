<div id="pageEmployee">

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
					<input class="form-control fname" type="text" name="fname" placeholder="First Name" required />
				</div>
				<div class="form-group">
					<label for="mname">Middle Name</label>
					<input class="form-control mname" type="text" name="mname" placeholder="Middle Name" required/>
				</div>
				<div class="form-group">
					<label for="lname">Last Name</label>
					<input class="form-control lname" type="text" name="lname" placeholder="Last Name" required/>
				</div>
				<div class="form-group">
					<label for="extname">Extension Name</label>
					<input class="form-control extname" type="text" name="extname" placeholder="Extension Name"/>
				</div>
                <div class="form-group">
                    <div class="form-group">
                        <label>Birthday (yyyy-mm-dd)</label>
                        <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker col-md-12" id="engagement-datepicker">
                            <span class="input-group-addon btn btn-primary">
                            	<i class="icon-left icon-th s7-date"></i>
                            </span>
                            <input type="datetime" size="16" type="text" class="form-control engagement-date" name="engagement-date">
                            
                        </div>
                    </div>
                </div>
				<div class="form-group">
					<label for="empSalary">Salary</label>
					<input class="form-control empSalary" type="text" name="salary" placeholder="Salary" required />
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input class="form-control emp-email" type="email" name="email" placeholder="Email" required/>
				</div>
				<div class="form-group">
					<label for="username">Username</label>
					<input class="form-control empUsername" type="text" name="username" placeholder="Username" required/>
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
							<input class="form-control ss-Contribution" type="text" name="ssContribution" placeholder="SS Contribution" readonly />
						</div>
						<div class="form-group">
							<label for="ec-contribution">EC Contribution</label>
							<input class="form-control ec-contribution" type="text" name="erContribution" placeholder="ER Contribution" readonly />
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
							<input class="form-control pagibig-mid-number" type="text" name="pagibigMidNumber" placeholder="Pagibig Mid Number" required />
						</div>
						<div class="form-group">
							<label for="pagibig-number">Pag-Ibig Number</label>
							<input class="form-control pagibig-number" type="text" name="pagibigNumber" placeholder="Pagibig Number" required />
						</div>
						<div class="form-group">
							<label for="membership-program">Membership Program</label>
							<input class="form-control membership-program" type="text" name="membershipProgram" placeholder="Membership Program" required />
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

	$(document).ready(function(){
        //initialize the javascript
        var date = "<?php echo date("m/d/Y"); ?>";
        $(".datetimepicker").datetimepicker({
            //startDate: date,
            autoclose: true,
            componentIcon: '.s7-date',
            navIcons:{
                rightIcon: 's7-angle-right',
                leftIcon: 's7-angle-left'
            }
        });
    });

	var pageEmployee = {};
	pageEmployee.init = function(selector, callback){
		pageEmployee.elem = $(selector);
		pageEmployee.action = "<?php echo $action?>";
		pageEmployee.id = <?php echo $id?>;

		if(pageEmployee.action == "view"){
			pageEmployee.elem.find(".panel-body").find("*").attr("disabled", "disabled");
			pageEmployee.elem.find(".btn-back-employee").removeAttr("disabled");
		}
		else if(pageEmployee.action == "edit"){
			pageEmployee.elem.find(".btn-save-employee").remove("disabled");
			pageEmployee.elem.find(".panel-body").find("*").remove("disabled");
		}	
		$.getJSON('<?php echo site_url('get-employee/')?>'+pageEmployee.id, callback);
	}

	pageEmployee.init("#pageEmployee", function(result){
		result = result['query'];
		console.log(result);
		$.each(result, function(key, value){
			pageEmployee.name = jQuery.parseJSON(value['emp_name']);

			pageEmployee.elem.find('.emp-full-name').html(
				pageEmployee.name['last_name'] + ", " 
				+ pageEmployee.name['first_name'] + " " 
				+ pageEmployee.name['middle_name'] + " " 
				+ pageEmployee.name['ext_name']);

			pageEmployee.elem.find('.fname').val(pageEmployee.name['first_name']);
			pageEmployee.elem.find('.mname').val(pageEmployee.name['middle_name']);
			pageEmployee.elem.find('.lname').val(pageEmployee.name['last_name']);
			pageEmployee.elem.find('.extname').val(pageEmployee.name['ext_name']);

			pageEmployee.elem.find('.engagement-date').val(value['emp_birthday']);
			pageEmployee.elem.find('.empSalary').val(value['emp_salary']);
			pageEmployee.elem.find('.emp-email').val(value['emp_email']);
			pageEmployee.elem.find('.empUsername').val(value['emp_username']);

			pageEmployee.elem.find('.sss-number').val(value['sss_no']);
			pageEmployee.elem.find('.ss-Contribution').val(value['ss_contribution']);
			pageEmployee.elem.find('.ec-contribution').val(value['ec_contribution']);

			pageEmployee.elem.find('.pagibig-mid-number').val(value['pagibig_mid_no']);
			pageEmployee.elem.find('.pagibig-number').val(value['pagibig_no']);
			pageEmployee.elem.find('.membership-program').val(value['pagibig_member_prog']);
			pageEmployee.elem.find('.ee-share').val(value['pagibig_ee_share']);
			pageEmployee.elem.find('.er-share').val(value['pagibig_er_share']);
		});
	});
</script>
