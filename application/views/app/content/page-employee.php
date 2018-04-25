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
			<h2 class="username-header"></h2>
			<h3 class="emp-full-name"></h3>
		</div>
		<div class="panel-body">
			<div class="row pull-right">
					<button type="button" name="btnBack" value="back" class ="btn btn-success btn-space btn-back-employee">

						<i class="icon icon-left s7-back"></i>BACK
					</button>
					<button type="button" name="btnSave" value="save" class ="btn btn-success btn-space btn-save-employee">
							<i class="icon icon-left s7-diskette"></i>SAVE
					</button>
					<button type="button" name="btnDeleted" value="deleted" class ="btn btn-success btn-space btn-deleted-employee">
							<i class="icon icon-left s7-trash"></i>DELETE
					</button>
				</div>	
		</div>
	</div>
	<div class="panel panel-default">
		
		
		<div class="panel-body employee-panel">
			<form>
				
				<div class="form-group">
					<label for="fname">First Name</label>
					<input class="form-control fname required-textfield" type="text" name="fname" placeholder="First Name" required readonly />
				</div>
				<div class="form-group">
					<label for="mname">Middle Name</label>
					<input class="form-control mname required-textfield" type="text" name="mname" placeholder="Middle Name" required readonly/>
				</div>
				<div class="form-group">
					<label for="lname">Last Name</label>
					<input class="form-control lname required-textfield" type="text" name="lname" placeholder="Last Name" required readonly/>
				</div>
				<div class="form-group">
					<label for="extname">Extension Name</label>
					<input class="form-control extname required-textfield" type="text" name="extname" placeholder="Extension Name" readonly/>
				</div>
                <div class="form-group">
                    <div class="form-group">
                        <label>Birthday (yyyy-mm-dd)</label>
                        <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker col-md-12" id="engagement-datepicker">
                            <span class="input-group-addon btn btn-primary">
                            	<i class="icon-left icon-th s7-date"></i>
                            </span>
                            <input type="datetime" size="16" type="text" class="form-control required-textfield engagement-date" name="engagement-date read" readonly>
                            
                        </div>
                    </div>
                </div>
				<div class="form-group email-group">
					<label for="email">Email</label>
					<input class="form-control empEmail required-textfield" type="email" name="email" placeholder="Email" readonly required/>
				</div>
				<div class="form-group username-group">
					<label for="username">Username</label>
					<input class="form-control empUsername" type="text" name="username" placeholder="Username" required/>
				</div>
				<div class="form-group">
					<label for="oldpassword">Old Password</label>
					<input class="form-control oldpassword" type="password" name="oldpassword" placeholder="Old Password" />
				</div>
				<div class="form-group">
					<label for="newpassword">New Password</label>
					<input class="form-control newpassword" type="password" name="newpassword" placeholder="New Password" />
				</div>
				<div class="form-group">
					<label class="control-label">Department</label>
					<select class="form-control listDepartment"></select>
				</div>

			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-body">
				<div class="form-group">
					<label for="empSalary">Salary</label>
					<input class="form-control empSalary" type="number" name="salary" placeholder="Salary" required />
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
									<input class="form-control sss-number1" type="text" name="sss-number" required />
								</div>
								<div class="col-md-1">
									<div class="dash-container">-</div>
								</div>
								<div class="col-md-4">
									<input class="form-control sss-number2" type="text" name="sss-number" required />
								</div>
								<div class="col-md-1">
									<div class="dash-container">-</div>
								</div>
								<div class="col-md-2">
									<input class="form-control sss-number3" type="text" name="sss-number" required />
								</div>
							</div>
						</div>
						<!-- <div class="form-group">
							<label for="sss-number">SSS Number</label>
							<input class="form-control sss-number" type="text" name="sssNumber" placeholder="SSS Number" required />
						</div> -->
						<div class="form-group">
							<label for="ss-contribution">Social Security Contribution</label>
							<div class="row form-group">
								<div class="col-md-3">
									<label for="ec-contribution">ER Contribution</label>
									<input class="form-control er-Contribution" type="text" name="erContribution" readonly />
								</div>
								<div class="col-md-1">
									<div class="dash-container-sss">+</div>
								</div>
								<div class="col-md-3">
									<label for="ee-contribution">EE Contribution</label>
									<input class="form-control ee-Contribution" type="text" name="eeContribution"  readonly />
								</div>
								<div class="col-md-1">
									<div class="dash-container-sss">=</div>
								</div>
								<div class="col-md-3">
									<label for="ss-contribution">Total</label>
									<input class="form-control sss-Contribution" type="text" name="ssContribution" placeholder="SS Contribution" readonly />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="ec-contribution">Employee Compensation Contribution</label>
							<input class="form-control ec-Contribution" type="text" name="erContribution" placeholder="EC Contribution" readonly />
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
									<input class="form-control pagibig-mid-number1" type="text" name="pagibigMidNumber" required />
								</div>
								<div class="col-md-1">
									<div class="dash-container">-</div>
								</div>
								<div class="col-md-3">
									<input class="form-control pagibig-mid-number2" type="text" name="pagibigMidNumber" required />
								</div>
								<div class="col-md-1">
									<div class="dash-container">-</div>
								</div>
								<div class="col-md-3">
									<input class="form-control pagibig-mid-number3" type="text" name="pagibigMidNumber" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label >Pag-Ibig Number</label>
							<div class="row form-group">
								<div class="col-md-3">
									<input class="form-control pagibig-number1" type="text" name="pagibigNumber" required />
								</div>
								<div class="col-md-1">
									<div class="dash-container">-</div>
								</div>
								<div class="col-md-3">
									<input class="form-control pagibig-number2" type="text" name="pagibigNumber" required />
								</div>
								<div class="col-md-1">
									<div class="dash-container">-</div>
								</div>
								<div class="col-md-3">
									<input class="form-control pagibig-number3" type="text" name="pagibigNumber" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>Membership Program</label>
							<select class=" form-control mem-program">
								<option value="MP1">MP1</option>
								<option value="MP2">MP2</option>
							</select>
						</div>
						<div class="form-group">
							<label for="pagibig-number">Monthly Compensation</label>
							<input class="form-control monthly-compen" type="text" name="monthly-compen" placeholder="Monthly Compensation" required />
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
						<div class="row form-group">
							<div class="col-md-6">
								<label for="pagibig-monthly">Remarks</label>
								<select class="form-control pagibig-remarks">
									<option value="N">Newly Hired</option>
									<option value="L">Leave Without Pay/ AWOL</option>
									<option value="RS">Resigned/Separated</option>
									<option value="RT">Retired</option>
									<option value="D">Deceased</option>
									<option value="O">Other</option>
								</select>
							</div>
							<div class="col-md-6">
								<label>Specify the date (mm/dd/yyyy)</label>
		                        <div data-min-view="2" data-date-format="mm/dd/yyyy" class="input-group date datetimepicker col-md-12" id="engagement-datepicker">
		                            <span class="input-group-addon btn btn-primary">
		                            	<i class="icon-left icon-th s7-date"></i>
		                            </span>
		                            <input type="datetime" size="16" type="text" class="form-control required-textfield remarks-date" name="engagement-date read" readonly>
		                            
		                        </div>
							</div>
							<!-- <input class="form-control pagibig-remarks" type="text" name="pagibig-remarks" placeholder="Remarks" required /> -->
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row pull-right">
					<button type="button" name="btnBack" value="back" class ="btn btn-success btn-space btn-back-employee">

						<i class="icon icon-left s7-back"></i>BACK
					</button>
					<button type="button" name="btnSave" value="save" class ="btn btn-success btn-space btn-save-employee">
							<i class="icon icon-left s7-diskette"></i>SAVE
					</button>
					<button type="button" name="btnDeleted" value="deleted" class ="btn btn-success btn-space btn-deleted-employee">
							<i class="icon icon-left s7-trash"></i>DELETE
					</button>
				</div>	
		</div>
	</div>
</div>

<script type="text/javascript">

	var pageEmployee = {};
	var globalUser = '';
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

		pageEmployee.elem.find(".datetimepicker").datetimepicker({
            //startDate: date,
            autoclose: true,
            componentIcon: '.s7-date',
            navIcons:{
                rightIcon: 's7-angle-right',
                leftIcon: 's7-angle-left'
            }
        });

		
        pageEmployee.elem.find('.pagibig-mid-number1').keydown(function(e){
        pageEmployee.countNumberMid1 = pageEmployee.elem.find('.pagibig-mid-number1').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageEmployee.countNumberMid1 != 0 && !(pageEmployee.countNumberMid1 < 0)){
        				pageEmployee.countNumberMid1 -= 1;
        			console.log(pageEmployee.countNumberMid1);
        		}
        		return true;
        	}else if(pageEmployee.countNumberMid1 == 4){
        		pageEmployee.elem.find('.pagibig-mid-number2').focus();
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageEmployee.countNumberMid1 < 4){
        			pageEmployee.countNumberMid1 += 1;
        			console.log(pageEmployee.countNumberMid1);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which == 189){
        		return true;
        	}else{
        		return false;
        	}
        });
        
        pageEmployee.elem.find('.pagibig-mid-number2').keydown(function(e){
        pageEmployee.countNumberMid2 = pageEmployee.elem.find('.pagibig-mid-number2').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageEmployee.countNumberMid2 != 0 && !(pageEmployee.countNumberMid2 < 0)){
        				pageEmployee.countNumberMid2 -= 1;
        			console.log(pageEmployee.countNumberMid2);
        		}
        		return true;
        	}else if(pageEmployee.countNumberMid2 == 4){
        		pageEmployee.elem.find('.pagibig-mid-number3').focus();
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageEmployee.countNumberMid2 < 4){
        			pageEmployee.countNumberMid2 += 1;
        			console.log(pageEmployee.countNumberMid2);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which == 189){
        		return true;
        	}else{
        		return false;
        	}
        });

        
        pageEmployee.elem.find('.pagibig-mid-number3').keydown(function(e){
        pageEmployee.countNumberMid3 = pageEmployee.elem.find('.pagibig-mid-number3').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageEmployee.countNumberMid3 != 0 && !(pageEmployee.countNumberMid3 < 0)){
        				pageEmployee.countNumberMid3 -= 1;
        			console.log(pageEmployee.countNumberMid3);
        		}
        		return true;
        	}else if(pageEmployee.countNumberMid3 == 4){
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageEmployee.countNumberMid3 < 4){
        			pageEmployee.countNumberMid3 += 1;
        			console.log(pageEmployee.countNumberMid3);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which == 189){
        		return true;
        	}else{
        		return false;
        	}
        });

        
        pageEmployee.elem.find('.pagibig-number1').keydown(function(e){
        pageEmployee.countPagibigNo1 = pageEmployee.elem.find('.pagibig-number1').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageEmployee.countPagibigNo1 != 0 && !(pageEmployee.countPagibigNo1 < 0)){
        				pageEmployee.countPagibigNo1 -= 1;
        			console.log(pageEmployee.countPagibigNo1);
        		}
        		return true;
        	}else if(pageEmployee.countPagibigNo1 == 4){
        		pageEmployee.elem.find('.pagibig-number2').focus();
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageEmployee.countPagibigNo1 < 4){
        			pageEmployee.countPagibigNo1 += 1;
        			console.log(pageEmployee.countPagibigNo1);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which == 189){
        		return true;
        	}else{
        		return false;
        	}
        });
        
        pageEmployee.elem.find('.pagibig-number2').keydown(function(e){
        pageEmployee.countPagibigNo2 = pageEmployee.elem.find('.pagibig-number2').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageEmployee.countPagibigNo2 != 0 && !(pageEmployee.countPagibigNo2 < 0)){
        				pageEmployee.countPagibigNo2 -= 1;
        			console.log(pageEmployee.countPagibigNo2);
        		}
        		return true;
        	}else if(pageEmployee.countPagibigNo2 == 4){
        		pageEmployee.elem.find('.pagibig-number3').focus();
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageEmployee.countPagibigNo2 < 4){
        			pageEmployee.countPagibigNo2 += 1;
        			console.log(pageEmployee.countPagibigNo2);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which == 189){
        		return true;
        	}else{
        		return false;
        	}
        });

        
        pageEmployee.elem.find('.pagibig-number3').keydown(function(e){
        pageEmployee.countPagibigNo3 = pageEmployee.elem.find('.pagibig-number3').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageEmployee.countPagibigNo3 != 0 && !(pageEmployee.countPagibigNo3 < 0)){
        				pageEmployee.countPagibigNo3 -= 1;
        			console.log(pageEmployee.countPagibigNo3);
        		}
        		return true;
        	}else if(pageEmployee.countPagibigNo3 == 4){
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageEmployee.countPagibigNo3 < 4){
        			pageEmployee.countPagibigNo3 += 1;
        			console.log(pageEmployee.countPagibigNo3);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which == 189){
        		return true;
        	}else{
        		return false;
        	}
        });


        
        pageEmployee.elem.find('.sss-number1').keydown(function(e){
        pageEmployee.countSSSNumber1 = pageEmployee.elem.find('.sss-number1').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageEmployee.countSSSNumber1 != 0 && !(pageEmployee.countSSSNumber1 < 0)){
        				pageEmployee.countSSSNumber1 -= 1;
        			console.log(pageEmployee.countSSSNumber1);
        		}
        		return true;
        	}else if(pageEmployee.countSSSNumber1 == 2){
        		pageEmployee.elem.find('.sss-number2').focus();
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageEmployee.countSSSNumber1 < 2){
        			pageEmployee.countSSSNumber1 += 1;
        			console.log(pageEmployee.countSSSNumber1);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which == 189){
        		return true;
        	}else{
        		return false;
        	}
        });
        
        pageEmployee.elem.find('.sss-number2').keydown(function(e){
        pageEmployee.countSSSNumber2 = pageEmployee.elem.find('.sss-number2').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageEmployee.countSSSNumber2 != 0 && !(pageEmployee.countSSSNumber2 < 0)){
        				pageEmployee.countSSSNumber2 -= 1;
        			console.log(pageEmployee.countSSSNumber2);
        		}
        		return true;
        	}else if(pageEmployee.countSSSNumber2 == 7){
        		pageEmployee.elem.find('.sss-number3').focus();
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageEmployee.countSSSNumber2 < 7){
        			pageEmployee.countSSSNumber2 += 1;
        			console.log(pageEmployee.countSSSNumber2);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which == 189){
        		return true;
        	}else{
        		return false;
        	}
        });

        //pageEmployee.countSSSNumber3 = pageEmployee.elem.find('.sss-number3').val().length;
        pageEmployee.elem.find('.sss-number3').keydown(function(e){
        pageEmployee.countSSSNumber3 = pageEmployee.elem.find('.sss-number3').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageEmployee.countSSSNumber3 != 0 && !(pageEmployee.countSSSNumber3 < 0)){
        				pageEmployee.countSSSNumber3 -= 1;
        			console.log(pageEmployee.countSSSNumber3);
        		}
        		return true;
        	}else if(pageEmployee.countSSSNumber3 == 1){
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageEmployee.countSSSNumber3 < 1){
        			pageEmployee.countSSSNumber3 += 1;
        			console.log(pageEmployee.countSSSNumber3);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which == 189){
        		return true;
        	}else{
        		return false;
        	}
        });



		pageEmployee.elem.find('.btn-save-employee').off("click").click(function(event){

			pageEmployee.employee_content = {
				"emp_birthday" : pageEmployee.elem.find('.engagement-date').val(),
				"emp_dept" : pageEmployee.elem.find('.listDepartment').val(),
				"emp_salary": pageEmployee.elem.find('.empSalary').val(),
				"sss_no" : pageEmployee.elem.find('.sss-number1').val() 
						   + "-" 
						   + pageEmployee.elem.find('.sss-number2').val() 
						   + "-" 
						   + pageEmployee.elem.find('.sss-number3').val() ,
				"ss_contribution" : pageEmployee.elem.find('.sss-Contribution').val(),
				"ec_contribution" : pageEmployee.elem.find('.ec-Contribution').val(),
				"er_contribution" : pageEmployee.elem.find('.er-Contribution').val(),
				"ee_contribution" : pageEmployee.elem.find('.ee-Contribution').val(),
				"pagibig_no" : pageEmployee.elem.find('.pagibig-number1').val() 
							   + "-" 
							   + pageEmployee.elem.find('.pagibig-number2').val() 
							   + "-" 
							   + pageEmployee.elem.find('.pagibig-number3').val(),
				"pagibig_mid_no" : pageEmployee.elem.find('.pagibig-mid-number1').val() 
								  + "-" 
								  + pageEmployee.elem.find('.pagibig-mid-number2').val()
								  + "-"
								  + pageEmployee.elem.find('.pagibig-mid-number3').val(),
				"pagibig_ee_share" : pageEmployee.elem.find('.ee-share').val(),
				"pagibig_er_share" : pageEmployee.elem.find('.er-share').val(),
				"pagibig_remarks" : pageEmployee.elem.find('.pagibig-remarks').val(),
				"pagibig_remarks_date" : pageEmployee.elem.find('.remarks-date').val(),
				"pagibig_mem_prog" : pageEmployee.elem.find('.mem-program').val(),
				"monthly_compen" : pageEmployee.elem.find('.monthly-compen').val()
			};

			$.ajax({
				method: "POST",
					url: "<?php echo base_url('update-employee/')?>" + pageEmployee.id,
					data: pageEmployee.employee_content,
					success: function(result){
						console.log(result);
						if(result.success == 1){
							pageEmployee.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
							pageEmployee.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
							pageEmployee.elem.find('.btn-proceed').show();
							pageEmployee.elem.find('.btn-yes').hide();
							pageEmployee.elem.find('.btn-no').hide();
							pageEmployee.elem.find('.message').html('Data has been saved successfully!');
							pageEmployee.elem.find('.modal-department').modal();
						}else if(result.success.error){
							pageEmployee.elem.find('.modal-error .modal-body p').html(result.success.error);
							pageEmployee.elem.find('.modal-error').modal("show");
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
			pageEmployee.elem.find('.username-header').html(value['emp_username']);

			pageEmployee.elem.find('.fname').val(value['emp_first_name']);
			pageEmployee.elem.find('.mname').val(value['emp_middle_name']);
			pageEmployee.elem.find('.lname').val(value['emp_last_name']);
			pageEmployee.elem.find('.extname').val(value['emp_ext_name']);
			pageEmployee.elem.find('.listDepartment').val(value['emp_dept']);

			pageEmployee.elem.find('.engagement-date').val(value['emp_birthday']);
			pageEmployee.elem.find('.empSalary').val(value['emp_salary']);
			pageEmployee.elem.find('.empEmail').val(value['emp_email']);
			pageEmployee.elem.find('.empUsername').val(value['emp_username']);
			pageEmployee.elem.find('.oldpassword').val(value['emp_password']);

			
			pageEmployee.elem.find('.sss-Contribution').val(value['ss_contribution']);
			pageEmployee.elem.find('.ec-Contribution').val(value['ec_contribution']);
			pageEmployee.elem.find('.er-Contribution').val(value['er_contribution']);
			pageEmployee.elem.find('.ee-Contribution').val(value['ee_contribution']);

			pageEmployee.mid_no = value['pagibig_mid_no'].split('-');
			pageEmployee.accountNo = value['pagibig_no'].split('-');
			pageEmployee.sssNo = value['sss_no'].split('-');
			

			
			pageEmployee.elem.find('.ee-share').val(value['pagibig_ee_share']);
			pageEmployee.elem.find('.er-share').val(value['pagibig_er_share']);
			pageEmployee.elem.find('.pagibig-remarks').val(value['pagibig_remarks']);
			pageEmployee.elem.find('.monthly-compen').val(value['monthly_compen']);
			pageEmployee.elem.find('.mem-program').val(value['pagibig_mem_prog']);
			pageEmployee.elem.find('.remarks-date').val(value['pagibig_remarks_date']);
		});

		pageEmployee.elem.find('.pagibig-mid-number1').val(pageEmployee.mid_no[0]);
		pageEmployee.elem.find('.pagibig-mid-number2').val(pageEmployee.mid_no[1]);
		pageEmployee.elem.find('.pagibig-mid-number3').val(pageEmployee.mid_no[2]);
		pageEmployee.elem.find('.pagibig-number1').val(pageEmployee.accountNo[0]);
		pageEmployee.elem.find('.pagibig-number2').val(pageEmployee.accountNo[1]);
		pageEmployee.elem.find('.pagibig-number3').val(pageEmployee.accountNo[2]);
		pageEmployee.elem.find('.sss-number1').val(pageEmployee.sssNo[0]);
		pageEmployee.elem.find('.sss-number2').val(pageEmployee.sssNo[1]);
		pageEmployee.elem.find('.sss-number3').val(pageEmployee.sssNo[2]);


		$.getJSON('<?php echo base_url('profile');?>', function(data){
			$.each(data, function(key,value){
				if(key == "user"){
					var username = pageEmployee.elem.find('.empUsername').val();
					var sessionUsername = value.emp_username;
					if(username == sessionUsername){
						pageEmployee.elem.find('.required-textfield').removeAttr('readonly');
						pageEmployee.elem.find('.email-group').hide();
						globalUser = sessionUsername;
						//pageEmployee.elem.find('.username-group').hide();
					}
					else{
						pageEmployee.elem.find('.employee-panel').hide();
					}
				}
			});	
		});

		pageEmployee.elem.find('.empSalary').keyup(function(e){
			pageEmployee.salary = pageEmployee.elem.find('.empSalary').val();
			console.log(pageEmployee.salary);

			$.getJSON('<?php echo base_url('get-sss-ref');?>', function(result){
				result = result['query'];
				pageEmployee.er = 0.0;
				pageEmployee.ee = 0.0;
				pageEmployee.total = 0.0;

				$.each(result, function(keySalary, valueSalary){
					if(pageEmployee.salary >= valueSalary['ref_range_start'] && valueSalary['ref_range_end'] == "Over"){
						pageEmployee.elem.find('.ec-Contribution').val(valueSalary['ref_ec']);
						pageEmployee.elem.find('.ee-Contribution').val(valueSalary['ref_ee']);
						pageEmployee.elem.find('.er-Contribution').val(valueSalary['ref_er']);
					}else if(!(pageEmployee.salary >= valueSalary['ref_range_start']) && !(pageEmployee.salary <= valueSalary['ref_range_end'])){
						pageEmployee.elem.find('.ec-Contribution').val('0.00');
						pageEmployee.elem.find('.ee-Contribution').val('0.00');
						pageEmployee.elem.find('.er-Contribution').val('0.00');
					}else if(pageEmployee.salary >= valueSalary['ref_range_start'] && pageEmployee.salary <= valueSalary['ref_range_end']){
						pageEmployee.elem.find('.ec-Contribution').val(valueSalary['ref_ec']);
						pageEmployee.elem.find('.ee-Contribution').val(valueSalary['ref_ee']);
						pageEmployee.elem.find('.er-Contribution').val(valueSalary['ref_er']);
					}
				});
				pageEmployee.ee = parseFloat(pageEmployee.elem.find('.ee-Contribution').val());
				pageEmployee.er = parseFloat(pageEmployee.elem.find('.er-Contribution').val());
				pageEmployee.total = pageEmployee.ee + pageEmployee.er;
				pageEmployee.elem.find('.sss-Contribution').val(pageEmployee.total);

			});
			// if(pageEmployee.salary < 1000){
			// 	pageEmployee.elem.find('.sss-Contribution').val('0.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('0.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('0.00');
			// 	pageEmployee.elem.find('.er-Contribution').val('0.00');
			// }else if(pageEmployee.salary >= 1000 && pageEmployee.salary <= 1249.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('110.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('36.30');
			// 	pageEmployee.elem.find('.er-Contribution').val('73.70');
			// }else if(pageEmployee.salary >= 1250 && pageEmployee.salary <= 1749.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('165.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('54.50');
			// 	pageEmployee.elem.find('.er-Contribution').val('110.50');
			// }else if(pageEmployee.salary >= 1750 && pageEmployee.salary <= 2249.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('220.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('72.70');
			// 	pageEmployee.elem.find('.er-Contribution').val('147.30');
			// }else if(pageEmployee.salary >= 2250 && pageEmployee.salary <= 2749.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('275.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('90.80');
			// 	pageEmployee.elem.find('.er-Contribution').val('184.20');
			// }else if(pageEmployee.salary >= 2750 && pageEmployee.salary <= 3249.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('330.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('109.00');
			// 	pageEmployee.elem.find('.er-Contribution').val('221.00');
			// }else if(pageEmployee.salary >= 3250 && pageEmployee.salary <= 3749.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('385.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('127.20');
			// 	pageEmployee.elem.find('.er-Contribution').val('257.80');
			// }else if(pageEmployee.salary >= 3750 && pageEmployee.salary <= 4249.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('440.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('145.30');
			// 	pageEmployee.elem.find('.er-Contribution').val('294.70');
			// }else if(pageEmployee.salary >= 4250 && pageEmployee.salary <= 4749.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('495.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('163.50');
			// 	pageEmployee.elem.find('.er-Contribution').val('331.50');
			// }else if(pageEmployee.salary >= 4750 && pageEmployee.salary <= 5249.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('550.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('181.70');
			// 	pageEmployee.elem.find('.er-Contribution').val('368.30');
			// }else if(pageEmployee.salary >= 5250 && pageEmployee.salary <= 5749.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('605.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('199.80');
			// 	pageEmployee.elem.find('.er-Contribution').val('405.20');
			// }else if(pageEmployee.salary >= 5750 && pageEmployee.salary <= 6249.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('660.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('218.00');
			// 	pageEmployee.elem.find('.er-Contribution').val('422.00');
			// }else if(pageEmployee.salary >= 6250 && pageEmployee.salary <= 6749.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('715.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('236.20');
			// 	pageEmployee.elem.find('.er-Contribution').val('478.80');
			// }else if(pageEmployee.salary >= 6750 && pageEmployee.salary <= 7249.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('770.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('254.30');
			// 	pageEmployee.elem.find('.er-Contribution').val('515.70');
			// }else if(pageEmployee.salary >= 7250 && pageEmployee.salary <= 7749.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('825.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('272.50');
			// 	pageEmployee.elem.find('.er-Contribution').val('552.50');
			// }else if(pageEmployee.salary >= 7750 && pageEmployee.salary <= 8249.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('880.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('290.70');
			// 	pageEmployee.elem.find('.er-Contribution').val('589.30');
			// }else if(pageEmployee.salary >= 8250 && pageEmployee.salary <= 8749.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('935.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('308.80');
			// 	pageEmployee.elem.find('.er-Contribution').val('626.20');
			// }else if(pageEmployee.salary >= 8750 && pageEmployee.salary <= 9249.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('990.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('327.00');
			// 	pageEmployee.elem.find('.er-Contribution').val('663.00');
			// }else if(pageEmployee.salary >= 9250 && pageEmployee.salary <= 9749.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('1045.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('345.20');
			// 	pageEmployee.elem.find('.er-Contribution').val('699.80');
			// }else if(pageEmployee.salary >= 9750 && pageEmployee.salary <= 10249.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('1100.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('363.30');
			// 	pageEmployee.elem.find('.er-Contribution').val('736.70');
			// }else if(pageEmployee.salary >= 10250 && pageEmployee.salary <= 10749.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('1155.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('381.50');
			// 	pageEmployee.elem.find('.er-Contribution').val('773.50');
			// }else if(pageEmployee.salary >= 10750 && pageEmployee.salary <= 11249.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('1210.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('399.70');
			// 	pageEmployee.elem.find('.er-Contribution').val('810.30');
			// }else if(pageEmployee.salary >= 11250 && pageEmployee.salary <= 11749.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('1265.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('417.80');
			// 	pageEmployee.elem.find('.er-Contribution').val('847.20');
			// }else if(pageEmployee.salary >= 11750 && pageEmployee.salary <= 12249.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('1320.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('436.00');
			// 	pageEmployee.elem.find('.er-Contribution').val('884.00');
			// }else if(pageEmployee.salary >= 12250 && pageEmployee.salary <= 12749.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('1375.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('454.20');
			// 	pageEmployee.elem.find('.er-Contribution').val('920.80');
			// }else if(pageEmployee.salary >= 12750 && pageEmployee.salary <= 13249.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('1430.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('472.30');
			// 	pageEmployee.elem.find('.er-Contribution').val('957.70');
			// }else if(pageEmployee.salary >= 13250 && pageEmployee.salary <= 13749.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('1485.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('490.50');
			// 	pageEmployee.elem.find('.er-Contribution').val('994.50');
			// }else if(pageEmployee.salary >= 13750 && pageEmployee.salary <= 14249.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('1540.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('508.70');
			// 	pageEmployee.elem.find('.er-Contribution').val('1031.30');
			// }else if(pageEmployee.salary >= 14250 && pageEmployee.salary <= 14749.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('1595.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('10.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('526.80');
			// 	pageEmployee.elem.find('.er-Contribution').val('1068.20');
			// }else if(pageEmployee.salary >= 14750 && pageEmployee.salary <= 15249.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('1650.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('30.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('545.00');
			// 	pageEmployee.elem.find('.er-Contribution').val('1105.00');
			// }else if(pageEmployee.salary >= 15250 && pageEmployee.salary <= 15749.99){
			// 	pageEmployee.elem.find('.sss-Contribution').val('1705.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('30.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('563.20');
			// 	pageEmployee.elem.find('.er-Contribution').val('1141.80');
			// }else if(pageEmployee.salary >= 15750){
			// 	pageEmployee.elem.find('.sss-Contribution').val('1760.00');
			// 	pageEmployee.elem.find('.ec-Contribution').val('30.00');
			// 	pageEmployee.elem.find('.ee-Contribution').val('581.30');
			// 	pageEmployee.elem.find('.er-Contribution').val('1178.70');
			// }
		});
	});
</script>
