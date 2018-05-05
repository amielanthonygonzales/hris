<div id="pageAdminProfile">
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
	<div class="panel-buttons">
		<div class="row col-md-12">
			<div class="form-group">
				<button type="button" name="btnBack" value="back" class ="btn btn-success btn-space btn-back-employee">

					<i class="icon icon-left s7-back"></i>BACK
				</button>
				<button type="button" name="btnSave" value="save" class ="btn btn-success btn-space btn-save-employee">
						<i class="icon icon-left s7-diskette"></i>SAVE
				</button>
				<!-- <button type="button" name="btnDeleted" value="deleted" class ="btn btn-success btn-space btn-deleted-employee">
						<i class="icon icon-left s7-trash"></i>DELETE
				</button> -->
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2 class="username-header"></h2>
			<h3 class="emp-full-name"></h3>
		</div>
		
		<div class="panel-body employee-panel">
			<form>
				
				<div class="form-group">
					<label for="fname">First Name</label>
					<input class="form-control fname required-textfield" type="text" name="fname" placeholder="First Name" required/>
				</div>
				<div class="form-group">
					<label for="mname">Middle Name</label>
					<input class="form-control mname required-textfield" type="text" name="mname" placeholder="Middle Name" required/>
				</div>
				<div class="form-group">
					<label for="lname">Last Name</label>
					<input class="form-control lname required-textfield" type="text" name="lname" placeholder="Last Name" required/>
				</div>
				<div class="form-group">
					<label for="extname">Extension Name</label>
					<input class="form-control extname required-textfield" type="text" name="extname" placeholder="Extension Name"/>
				</div>
                <div class="form-group">
                    <div class="form-group">
                        <label>Birthday (yyyy-mm-dd)</label>
                        <div data-min-view="2" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker col-md-12" id="engagement-datepicker">
                            <span class="input-group-addon btn btn-primary">
                            	<i class="icon-left icon-th s7-date"></i>
                            </span>
                            <input type="datetime" size="16" type="text" class="form-control required-textfield engagement-date" name="engagement-date read" />
                            
                        </div>
                    </div>
                </div>
				<div class="form-group email-group">
					<label for="email">Email</label>
					<input class="form-control empEmail required-textfield" type="email" name="email" placeholder="Email" required/>
				</div>
				<div class="form-group username-group">
					<label for="username">Username</label>
					<input class="form-control empUsername" type="text" name="username" placeholder="Username" required/>
				</div>
				<div class="am-checkbox">
                	<input id="check1" type="checkbox" class="icheck changePassword">
                	<label for="check1">Change Password</label>
                </div>
				<div class="passwordForm">
					<div class="form-group">
						<label>Current Password <code>*</code></label>
						<input class="form-control currentPass" type="password" name="currentPass" placeholder="Current Password" />
					</div>
					<div class="form-group">
						<label>New Password (at least 8 alphanumeric characters w/special characters) <code>*</code></label>
						<input class="form-control newPass" type="password" name="newPass" placeholder="New Password" />
					</div>
				</div>
				<div class="form-group">
					<label for="empSalary">Salary</label>
					<input class="form-control empSalary" type="text" name="salary" placeholder="Salary" required />
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
									<input class="form-control sss-Contribution" type="text" name="ssContribution" 	readonly />
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
						
						<!-- <div class="form-group">
							<label>Membership Program</label>
							<select class=" form-control mem-program">
								<option value="MP1">MP1</option>
								<option value="MP2">MP2</option>
							</select>
						</div> -->
						 <div class="am-checkbox col-md-12">
	                    	<input id="check2" type="checkbox" class="icheck mp2-program">
	                    	<label for="check2">MP2 Program</label>
	                    </div>
						<div class="mp2-group">
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
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="ee-share">EE Share For Pag-Ibig No</label>
										<input class="form-control ee-share-mp2" type="text" name="eeShare" placeholder="EE Share" required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="er-share">ER Share For Pag-Ibig No</label>
										<input class="form-control er-share-mp2" type="text" name="erShare" placeholder="ER Share" required />
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="pagibig-number">Monthly Compensation</label>
							<input class="form-control monthly-compen" type="text" name="monthly-compen" placeholder="Monthly Compensation" required />
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
		                            <input type="datetime" size="16" type="text" class="form-control required-textfield remarks-date" name="engagement-date read" >
		                            
		                        </div>
							</div>
							<!-- <input class="form-control pagibig-remarks" type="text" name="pagibig-remarks" placeholder="Remarks" required /> -->
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">

	var pageAdminProfile = {};
	var globalUser = '';
	pageAdminProfile.init = function(selector, callback){
		pageAdminProfile.elem = $(selector);
		pageAdminProfile.action = "<?php echo $action?>";
		pageAdminProfile.id = <?php echo $id?>;
		pageAdminProfile.passwordChange = 'no';

		pageAdminProfile.elem.find('.passwordForm').hide();
		pageAdminProfile.elem.find('.currentPass').val('');
		pageAdminProfile.elem.find('.newPass').val('');

		pageAdminProfile.elem.find('.mp2-group').hide();
		pageAdminProfile.elem.find('.mp2-program').off("click").click(function(e){
			if(pageAdminProfile.elem.find('.mp2-program').is(':checked')){
				pageAdminProfile.elem.find('.mp2-group').show();
			}else{
				pageAdminProfile.elem.find('.mp2-group').hide();
			}
		});

		pageAdminProfile.elem.find('.changePassword').off("click").click(function(e){
			if(pageAdminProfile.elem.find('.changePassword').is(':checked')){
				pageAdminProfile.elem.find('.passwordForm').show();
				pageAdminProfile.passwordChange = 'yes';
			}else{
				pageAdminProfile.elem.find('.passwordForm').hide();
				pageAdminProfile.elem.find('.currentPass').val('');
				pageAdminProfile.elem.find('.newPass').val('');
				pageAdminProfile.passwordChange = 'no';
			}
		});

		pageAdminProfile.elem.find('.btn-back-employee').off("click").click(function(e){
			location.replace('<?php echo base_url('employee-list')?>');
		});

		if(pageAdminProfile.action == "view"){
			pageAdminProfile.elem.find(".panel-body").find("*").attr("disabled", "disabled");
			pageAdminProfile.elem.find(".btn-back-employee").removeAttr("disabled");
		}
		else if(pageAdminProfile.action == "edit"){
			pageAdminProfile.elem.find(".panel-body").find("*").remove("disabled");
		}	

		pageAdminProfile.elem.find(".datetimepicker").datetimepicker({
            //startDate: date,
            autoclose: true,
            componentIcon: '.s7-date',
            navIcons:{
                rightIcon: 's7-angle-right',
                leftIcon: 's7-angle-left'
            }
        });

		
        pageAdminProfile.elem.find('.pagibig-mid-number1').keydown(function(e){
        pageAdminProfile.countNumberMid1 = pageAdminProfile.elem.find('.pagibig-mid-number1').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageAdminProfile.countNumberMid1 != 0 && !(pageAdminProfile.countNumberMid1 < 0)){
        				pageAdminProfile.countNumberMid1 -= 1;
        			console.log(pageAdminProfile.countNumberMid1);
        		}
        		return true;
        	}else if(pageAdminProfile.countNumberMid1 == 4){
        		pageAdminProfile.elem.find('.pagibig-mid-number2').focus();
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageAdminProfile.countNumberMid1 < 4){
        			pageAdminProfile.countNumberMid1 += 1;
        			console.log(pageAdminProfile.countNumberMid1);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which >= 112 && e.which <= 123 || e.which >= 37 && e.which <= 40){
        		return true;
        	}else{
        		return false;
        	}
        });
        
        pageAdminProfile.elem.find('.pagibig-mid-number2').keydown(function(e){
        pageAdminProfile.countNumberMid2 = pageAdminProfile.elem.find('.pagibig-mid-number2').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageAdminProfile.countNumberMid2 != 0 && !(pageAdminProfile.countNumberMid2 < 0)){
        				pageAdminProfile.countNumberMid2 -= 1;
        			console.log(pageAdminProfile.countNumberMid2);
        		}
        		return true;
        	}else if(pageAdminProfile.countNumberMid2 == 4){
        		pageAdminProfile.elem.find('.pagibig-mid-number3').focus();
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageAdminProfile.countNumberMid2 < 4){
        			pageAdminProfile.countNumberMid2 += 1;
        			console.log(pageAdminProfile.countNumberMid2);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which >= 112 && e.which <= 123 || e.which >= 37 && e.which <= 40){
        		return true;
        	}else{
        		return false;
        	}
        });

        
        pageAdminProfile.elem.find('.pagibig-mid-number3').keydown(function(e){
        pageAdminProfile.countNumberMid3 = pageAdminProfile.elem.find('.pagibig-mid-number3').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageAdminProfile.countNumberMid3 != 0 && !(pageAdminProfile.countNumberMid3 < 0)){
        				pageAdminProfile.countNumberMid3 -= 1;
        			console.log(pageAdminProfile.countNumberMid3);
        		}
        		return true;
        	}else if(pageAdminProfile.countNumberMid3 == 4){
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageAdminProfile.countNumberMid3 < 4){
        			pageAdminProfile.countNumberMid3 += 1;
        			console.log(pageAdminProfile.countNumberMid3);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which >= 112 && e.which <= 123 || e.which >= 37 && e.which <= 40){
        		return true;
        	}else{
        		return false;
        	}
        });

        
        pageAdminProfile.elem.find('.pagibig-number1').keydown(function(e){
        pageAdminProfile.countPagibigNo1 = pageAdminProfile.elem.find('.pagibig-number1').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageAdminProfile.countPagibigNo1 != 0 && !(pageAdminProfile.countPagibigNo1 < 0)){
        				pageAdminProfile.countPagibigNo1 -= 1;
        			console.log(pageAdminProfile.countPagibigNo1);
        		}
        		return true;
        	}else if(pageAdminProfile.countPagibigNo1 == 4){
        		pageAdminProfile.elem.find('.pagibig-number2').focus();
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageAdminProfile.countPagibigNo1 < 4){
        			pageAdminProfile.countPagibigNo1 += 1;
        			console.log(pageAdminProfile.countPagibigNo1);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which >= 112 && e.which <= 123 || e.which >= 37 && e.which <= 40){
        		return true;
        	}else{
        		return false;
        	}
        });
        
        pageAdminProfile.elem.find('.pagibig-number2').keydown(function(e){
        pageAdminProfile.countPagibigNo2 = pageAdminProfile.elem.find('.pagibig-number2').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageAdminProfile.countPagibigNo2 != 0 && !(pageAdminProfile.countPagibigNo2 < 0)){
        				pageAdminProfile.countPagibigNo2 -= 1;
        			console.log(pageAdminProfile.countPagibigNo2);
        		}
        		return true;
        	}else if(pageAdminProfile.countPagibigNo2 == 4){
        		pageAdminProfile.elem.find('.pagibig-number3').focus();
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageAdminProfile.countPagibigNo2 < 4){
        			pageAdminProfile.countPagibigNo2 += 1;
        			console.log(pageAdminProfile.countPagibigNo2);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which >= 112 && e.which <= 123 || e.which >= 37 && e.which <= 40){
        		return true;
        	}else{
        		return false;
        	}
        });

        
        pageAdminProfile.elem.find('.pagibig-number3').keydown(function(e){
        pageAdminProfile.countPagibigNo3 = pageAdminProfile.elem.find('.pagibig-number3').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageAdminProfile.countPagibigNo3 != 0 && !(pageAdminProfile.countPagibigNo3 < 0)){
        				pageAdminProfile.countPagibigNo3 -= 1;
        			console.log(pageAdminProfile.countPagibigNo3);
        		}
        		return true;
        	}else if(pageAdminProfile.countPagibigNo3 == 4){
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageAdminProfile.countPagibigNo3 < 4){
        			pageAdminProfile.countPagibigNo3 += 1;
        			console.log(pageAdminProfile.countPagibigNo3);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which >= 112 && e.which <= 123 || e.which >= 37 && e.which <= 40){
        		return true;
        	}else{
        		return false;
        	}
        });


        
        pageAdminProfile.elem.find('.sss-number1').keydown(function(e){
        pageAdminProfile.countSSSNumber1 = pageAdminProfile.elem.find('.sss-number1').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageAdminProfile.countSSSNumber1 != 0 && !(pageAdminProfile.countSSSNumber1 < 0)){
        				pageAdminProfile.countSSSNumber1 -= 1;
        			console.log(pageAdminProfile.countSSSNumber1);
        		}
        		return true;
        	}else if(pageAdminProfile.countSSSNumber1 == 2){
        		pageAdminProfile.elem.find('.sss-number2').focus();
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageAdminProfile.countSSSNumber1 < 2){
        			pageAdminProfile.countSSSNumber1 += 1;
        			console.log(pageAdminProfile.countSSSNumber1);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which >= 112 && e.which <= 123 || e.which >= 37 && e.which <= 40){
        		return true;
        	}else{
        		return false;
        	}
        });
        
        pageAdminProfile.elem.find('.sss-number2').keydown(function(e){
        pageAdminProfile.countSSSNumber2 = pageAdminProfile.elem.find('.sss-number2').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageAdminProfile.countSSSNumber2 != 0 && !(pageAdminProfile.countSSSNumber2 < 0)){
        				pageAdminProfile.countSSSNumber2 -= 1;
        			console.log(pageAdminProfile.countSSSNumber2);
        		}
        		return true;
        	}else if(pageAdminProfile.countSSSNumber2 == 7){
        		pageAdminProfile.elem.find('.sss-number3').focus();
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageAdminProfile.countSSSNumber2 < 7){
        			pageAdminProfile.countSSSNumber2 += 1;
        			console.log(pageAdminProfile.countSSSNumber2);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which >= 112 && e.which <= 123 || e.which >= 37 && e.which <= 40){
        		return true;
        	}else{
        		return false;
        	}
        });

        //pageAdminProfile.countSSSNumber3 = pageAdminProfile.elem.find('.sss-number3').val().length;
        pageAdminProfile.elem.find('.sss-number3').keydown(function(e){
        pageAdminProfile.countSSSNumber3 = pageAdminProfile.elem.find('.sss-number3').val().length;
        	if(e.which == 8 || e.which == 46){
        		if(pageAdminProfile.countSSSNumber3 != 0 && !(pageAdminProfile.countSSSNumber3 < 0)){
        				pageAdminProfile.countSSSNumber3 -= 1;
        			console.log(pageAdminProfile.countSSSNumber3);
        		}
        		return true;
        	}else if(pageAdminProfile.countSSSNumber3 == 1){
        		return false;
        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
        		
        		if(pageAdminProfile.countSSSNumber3 < 1){
        			pageAdminProfile.countSSSNumber3 += 1;
        			console.log(pageAdminProfile.countSSSNumber3);
        			return true;
        		}
        		else{
        			return false;
        		}
        	}
        	else if(e.which == 9 || e.which >= 112 && e.which <= 123 || e.which >= 37 && e.which <= 40){
        		return true;
        	}else{
        		return false;
        	}
        });

        pageAdminProfile.elem.find('.empSalary').keydown(function(e){
        	if(e.which == 8 
        		|| e.which == 9 
        		|| e.which == 13 
        		|| e.which == 46 
        		|| e.which >= 48 && e.which <= 57 
        		|| e.which >= 96 && e.which <= 105 
        		|| e.which >= 112 && e.which <= 123 
        		|| e.which >= 37 && e.which <= 40){
        		return true;
        	}else{
        		return false;
        	}
        });

        pageAdminProfile.elem.find('.ee-share').keydown(function(e){
        	if(e.which == 8 
        		|| e.which == 9 
        		|| e.which == 13 
        		|| e.which == 46 
        		|| e.which >= 48 && e.which <= 57 
        		|| e.which >= 96 && e.which <= 105 
        		|| e.which >= 112 && e.which <= 123 
        		|| e.which >= 37 && e.which <= 40){
        		return true;
        	}else{
        		return false;
        	}
        });

        pageAdminProfile.elem.find('.er-share').keydown(function(e){
        	if(e.which == 8 
        		|| e.which == 9 
        		|| e.which == 13 
        		|| e.which == 46 
        		|| e.which >= 48 && e.which <= 57 
        		|| e.which >= 96 && e.which <= 105 
        		|| e.which >= 112 && e.which <= 123 
        		|| e.which >= 37 && e.which <= 40){
        		return true;
        	}else{
        		return false;
        	}
        });

        pageAdminProfile.elem.find('.empUsername').keydown(function(e){
			if(e.which == 9){
				return true;
			}else{
				return false;
			}
		});
		pageAdminProfile.elem.find('.empUsername').on("contextmenu",function(){
	       return false;
	    }); 

	    pageAdminProfile.elem.find('.empEmail').keydown(function(e){
			if(e.which == 9){
				return true;
			}else{
				return false;
			}
		});
		pageAdminProfile.elem.find('.empEmail').on("contextmenu",function(){
	       return false;
	    }); 



		pageAdminProfile.elem.find('.btn-save-employee').off("click").click(function(event){

			pageAdminProfile.employee_content = {
				"emp_first_name" : pageAdminProfile.elem.find('.fname').val(),
				"emp_middle_name" : pageAdminProfile.elem.find('.mname').val(),
				"emp_last_name" : pageAdminProfile.elem.find('.lname').val(),
				"emp_ext_name" : pageAdminProfile.elem.find('.extname').val(),
				"emp_birthday" : pageAdminProfile.elem.find('.engagement-date').val(),
				"emp_dept" : pageAdminProfile.elem.find('.listDepartment').val(),
				"emp_salary": pageAdminProfile.elem.find('.empSalary').val(),
				"sss_no" : pageAdminProfile.elem.find('.sss-number1').val() 
						   + "-" 
						   + pageAdminProfile.elem.find('.sss-number2').val() 
						   + "-" 
						   + pageAdminProfile.elem.find('.sss-number3').val(),
				"changePassword" : pageAdminProfile.passwordChange,
				currentPassword : pageAdminProfile.elem.find('.currentPass').val(),
				newPassword : pageAdminProfile.elem.find('.newPass').val(),
				"ss_contribution" : pageAdminProfile.elem.find('.sss-Contribution').val(),
				"ec_contribution" : pageAdminProfile.elem.find('.ec-Contribution').val(),
				"er_contribution" : pageAdminProfile.elem.find('.er-Contribution').val(),
				"ee_contribution" : pageAdminProfile.elem.find('.ee-Contribution').val(),
				"pagibig_no" : pageAdminProfile.elem.find('.pagibig-number1').val() 
							   + "-" 
							   + pageAdminProfile.elem.find('.pagibig-number2').val() 
							   + "-" 
							   + pageAdminProfile.elem.find('.pagibig-number3').val(),
				"pagibig_mid_no" : pageAdminProfile.elem.find('.pagibig-mid-number1').val() 
								  + "-" 
								  + pageAdminProfile.elem.find('.pagibig-mid-number2').val()
								  + "-"
								  + pageAdminProfile.elem.find('.pagibig-mid-number3').val(),
				"pagibig_ee_share" : pageAdminProfile.elem.find('.ee-share').val(),
				"pagibig_er_share" : pageAdminProfile.elem.find('.er-share').val(),
				"pagibig_ee_share_mp_two" : pageAdminProfile.elem.find('.ee-share-mp2').val(),
				"pagibig_er_share_mp_two" : pageAdminProfile.elem.find('.er-share-mp2').val(),
				"pagibig_remarks" : pageAdminProfile.elem.find('.pagibig-remarks').val(),
				"pagibig_remarks_date" : pageAdminProfile.elem.find('.remarks-date').val(),
				"pagibig_mem_prog" : 'MP1',
				"pagibig_mem_prog_two" : 'MP2',
				"monthly_compen" : pageAdminProfile.elem.find('.monthly-compen').val()
			};
			$.ajax({
				method: "POST",
					url: "<?php echo base_url('update-admin/')?>" + pageAdminProfile.id,
					data: pageAdminProfile.employee_content,
					success: function(result){
						console.log(result);
						if(result.success == 1){
							pageAdminProfile.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
							pageAdminProfile.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
							pageAdminProfile.elem.find('.btn-proceed').show();
							pageAdminProfile.elem.find('.btn-yes').hide();
							pageAdminProfile.elem.find('.btn-no').hide();
							pageAdminProfile.elem.find('.message').html('Data has been saved successfully!');
							pageAdminProfile.elem.find('.modal-department').modal();
						}else if(result.success == 2){
							pageAdminProfile.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
							pageAdminProfile.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
							pageAdminProfile.elem.find('.btn-proceed').show().off("click").click(function(e){
								window.parent.location = "<?php echo base_url('logout')?>";
							});
							pageAdminProfile.elem.find('.btn-yes').hide();
							pageAdminProfile.elem.find('.btn-no').hide();
							pageAdminProfile.elem.find('.message').html('Data has been saved successfully!');
							pageAdminProfile.elem.find('.modal-department').modal();
						}else if(result.success.error){
							pageAdminProfile.elem.find('.modal-error .modal-body p').html(result.success.error);
							pageAdminProfile.elem.find('.modal-error').modal("show");
						}
					}
			});
		});

		// pageAdminProfile.elem.find('.btn-deleted-employee').off("click").click(function(event){
		// 	pageAdminProfile.elem.find('.i-circle').removeClass('text-success').addClass('text-danger');
		// 	pageAdminProfile.elem.find('.symbol').removeClass('s7-check').addClass('s7-attention');
		// 	pageAdminProfile.elem.find('.message').html('Are you sure you want to delete this data?');
		// 	pageAdminProfile.elem.find('.btn-proceed').hide();
		// 	pageAdminProfile.elem.find('.btn-yes').show().off("click").click(function(e){
		// 		$.ajax({
		// 			method: "POST",
		// 			url: "<?php echo base_url('delete-employee/')?>" + pageAdminProfile.id,
		// 			success: function(result){
		// 				if(result.success){
		// 					pageAdminProfile.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
		// 					pageAdminProfile.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
		// 					pageAdminProfile.elem.find('.btn-proceed').show().off("click").click(function(){
		// 						location.replace('<?php echo base_url('employee-list')?>');
		// 					});
		// 					pageAdminProfile.elem.find('.btn-yes').hide();
		// 					pageAdminProfile.elem.find('.btn-no').hide();
		// 					pageAdminProfile.elem.find('.message').html('Data successfully deleted!');
		// 					pageAdminProfile.elem.find('.modal-department').modal();
							
		// 				}
		// 			}
		// 		});
		// 	});
		// 	pageAdminProfile.elem.find('.btn-no').show();
		// 	pageAdminProfile.elem.find('.modal-department').modal();
		// });

		$.getJSON('<?php echo site_url('get-employee/')?>'+pageAdminProfile.id, callback);
	}

	pageAdminProfile.init("#pageAdminProfile", function(result){
		
		pageAdminProfile.result = result['query'];
		pageAdminProfile.departmentResult = result['departmentQuery'];
		$.each(pageAdminProfile.departmentResult, function(key, value){
			var createOption = $('<option></option>');
			createOption.attr('value', value['dept_Id']);
			createOption.html(value['dept_name']);
			pageAdminProfile.elem.find('.listDepartment').append(createOption);
		});
		$.each(pageAdminProfile.result, function(key, value){

			pageAdminProfile.elem.find('.emp-full-name').html(
				value['emp_last_name'] + ", " 
				+ value['emp_first_name'] + " " 
				+ value['emp_middle_name'] + " " 
				+ value['emp_ext_name']);
			pageAdminProfile.elem.find('.username-header').html(value['emp_username']);

			pageAdminProfile.elem.find('.fname').val(value['emp_first_name']);
			pageAdminProfile.elem.find('.mname').val(value['emp_middle_name']);
			pageAdminProfile.elem.find('.lname').val(value['emp_last_name']);
			pageAdminProfile.elem.find('.extname').val(value['emp_ext_name']);
			pageAdminProfile.elem.find('.listDepartment').val(value['emp_dept']);

			pageAdminProfile.elem.find('.engagement-date').val(value['emp_birthday']);
			pageAdminProfile.elem.find('.empSalary').val(value['emp_salary']);
			pageAdminProfile.elem.find('.empEmail').val(value['emp_email']);
			pageAdminProfile.elem.find('.empUsername').val(value['emp_username']);
			pageAdminProfile.elem.find('.oldpassword').val(value['emp_password']);

			
			pageAdminProfile.elem.find('.sss-Contribution').val(value['ss_contribution']);
			pageAdminProfile.elem.find('.ec-Contribution').val(value['ec_contribution']);
			pageAdminProfile.elem.find('.er-Contribution').val(value['er_contribution']);
			pageAdminProfile.elem.find('.ee-Contribution').val(value['ee_contribution']);

			pageAdminProfile.mid_no = value['pagibig_mid_no'].split('-');
			pageAdminProfile.accountNo = value['pagibig_no'].split('-');
			pageAdminProfile.sssNo = value['sss_no'].split('-');
			

			
			pageAdminProfile.elem.find('.ee-share').val(value['pagibig_ee_share']);
			pageAdminProfile.elem.find('.er-share').val(value['pagibig_er_share']);
			pageAdminProfile.elem.find('.pagibig-remarks').val(value['pagibig_remarks']);
			pageAdminProfile.elem.find('.monthly-compen').val(value['monthly_compen']);
			pageAdminProfile.elem.find('.mem-program').val(value['pagibig_mem_prog']);
			pageAdminProfile.elem.find('.remarks-date').val(value['pagibig_remarks_date']);
		});

		pageAdminProfile.elem.find('.pagibig-mid-number1').val(pageAdminProfile.mid_no[0]);
		pageAdminProfile.elem.find('.pagibig-mid-number2').val(pageAdminProfile.mid_no[1]);
		pageAdminProfile.elem.find('.pagibig-mid-number3').val(pageAdminProfile.mid_no[2]);
		pageAdminProfile.elem.find('.pagibig-number1').val(pageAdminProfile.accountNo[0]);
		pageAdminProfile.elem.find('.pagibig-number2').val(pageAdminProfile.accountNo[1]);
		pageAdminProfile.elem.find('.pagibig-number3').val(pageAdminProfile.accountNo[2]);
		pageAdminProfile.elem.find('.sss-number1').val(pageAdminProfile.sssNo[0]);
		pageAdminProfile.elem.find('.sss-number2').val(pageAdminProfile.sssNo[1]);
		pageAdminProfile.elem.find('.sss-number3').val(pageAdminProfile.sssNo[2]);


		// $.getJSON('<?php echo base_url('profile');?>', function(data){
		// 	$.each(data, function(key,value){
		// 		if(key == "user"){
		// 			var username = pageAdminProfile.elem.find('.empUsername').val();
		// 			var sessionUsername = value.emp_username;
		// 			if(username == sessionUsername){
		// 				pageAdminProfile.elem.find('.required-textfield').removeAttr('readonly');
		// 				pageAdminProfile.elem.find('.email-group').hide();
		// 				globalUser = sessionUsername;
		// 				//pageAdminProfile.elem.find('.username-group').hide();
		// 			}
		// 			else{
		// 				pageAdminProfile.elem.find('.employee-panel').hide();
		// 			}
		// 		}
		// 	});	
		// });

		pageAdminProfile.elem.find('.empSalary').keyup(function(e){
			pageAdminProfile.salary = pageAdminProfile.elem.find('.empSalary').val();
			console.log(pageAdminProfile.salary);
			pageAdminProfile.valid = [];
			$.getJSON('<?php echo base_url('get-sss-ref');?>', function(result){
				result = result['query'];
				pageAdminProfile.er = 0.0;
				pageAdminProfile.ee = 0.0;
				pageAdminProfile.total = 0.0;

				
				$.each(result, function(keySalary, valueSalary){
					console.log(valueSalary['ref_range_end'] == "Over");
					if(parseFloat(pageAdminProfile.salary) >= parseFloat(valueSalary['ref_range_start']) && valueSalary['ref_range_end'] == "over" || valueSalary['ref_range_end'] == "Over"){
						pageAdminProfile.elem.find('.ec-Contribution').val(valueSalary['ref_ec']);
						pageAdminProfile.elem.find('.ee-Contribution').val(valueSalary['ref_ee']);
						pageAdminProfile.elem.find('.er-Contribution').val(valueSalary['ref_er']);
						pageAdminProfile.valid.push('greater');
					}else if((parseFloat(pageAdminProfile.salary) >= parseFloat(valueSalary['ref_range_start'])) && (parseFloat(pageAdminProfile.salary) <= parseFloat(valueSalary['ref_range_end'])) && valueSalary['ref_range_end'] != "over"){
						pageAdminProfile.elem.find('.ec-Contribution').val(valueSalary['ref_ec']);
						pageAdminProfile.elem.find('.ee-Contribution').val(valueSalary['ref_ee']);
						pageAdminProfile.elem.find('.er-Contribution').val(valueSalary['ref_er']);
						pageAdminProfile.valid.push('true');
					}else if(!(parseFloat(pageAdminProfile.salary) >= parseFloat(valueSalary['ref_range_start'])) && !(parseFloat(pageAdminProfile.salary) <= parseFloat(valueSalary['ref_range_end'])) && valueSalary['ref_range_end'] != "over"){
						console.log(valueSalary['ref_range_end']);
						pageAdminProfile.valid.push('false');
					}
				});
				if(pageAdminProfile.valid == ""){
					pageAdminProfile.elem.find('.ec-Contribution').val('0.00');
					pageAdminProfile.elem.find('.ee-Contribution').val('0.00');
					pageAdminProfile.elem.find('.er-Contribution').val('0.00');
				}else {
					pageAdminProfile.ee = parseFloat(pageAdminProfile.elem.find('.ee-Contribution').val());
					pageAdminProfile.er = parseFloat(pageAdminProfile.elem.find('.er-Contribution').val());
					pageAdminProfile.total = pageAdminProfile.ee + pageAdminProfile.er;
					pageAdminProfile.elem.find('.sss-Contribution').val(pageAdminProfile.total);
				}
				

			});
			// if(pageAdminProfile.salary < 1000){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('0.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('0.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('0.00');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('0.00');
			// }else if(pageAdminProfile.salary >= 1000 && pageAdminProfile.salary <= 1249.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('110.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('36.30');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('73.70');
			// }else if(pageAdminProfile.salary >= 1250 && pageAdminProfile.salary <= 1749.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('165.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('54.50');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('110.50');
			// }else if(pageAdminProfile.salary >= 1750 && pageAdminProfile.salary <= 2249.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('220.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('72.70');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('147.30');
			// }else if(pageAdminProfile.salary >= 2250 && pageAdminProfile.salary <= 2749.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('275.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('90.80');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('184.20');
			// }else if(pageAdminProfile.salary >= 2750 && pageAdminProfile.salary <= 3249.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('330.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('109.00');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('221.00');
			// }else if(pageAdminProfile.salary >= 3250 && pageAdminProfile.salary <= 3749.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('385.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('127.20');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('257.80');
			// }else if(pageAdminProfile.salary >= 3750 && pageAdminProfile.salary <= 4249.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('440.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('145.30');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('294.70');
			// }else if(pageAdminProfile.salary >= 4250 && pageAdminProfile.salary <= 4749.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('495.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('163.50');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('331.50');
			// }else if(pageAdminProfile.salary >= 4750 && pageAdminProfile.salary <= 5249.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('550.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('181.70');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('368.30');
			// }else if(pageAdminProfile.salary >= 5250 && pageAdminProfile.salary <= 5749.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('605.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('199.80');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('405.20');
			// }else if(pageAdminProfile.salary >= 5750 && pageAdminProfile.salary <= 6249.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('660.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('218.00');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('422.00');
			// }else if(pageAdminProfile.salary >= 6250 && pageAdminProfile.salary <= 6749.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('715.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('236.20');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('478.80');
			// }else if(pageAdminProfile.salary >= 6750 && pageAdminProfile.salary <= 7249.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('770.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('254.30');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('515.70');
			// }else if(pageAdminProfile.salary >= 7250 && pageAdminProfile.salary <= 7749.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('825.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('272.50');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('552.50');
			// }else if(pageAdminProfile.salary >= 7750 && pageAdminProfile.salary <= 8249.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('880.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('290.70');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('589.30');
			// }else if(pageAdminProfile.salary >= 8250 && pageAdminProfile.salary <= 8749.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('935.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('308.80');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('626.20');
			// }else if(pageAdminProfile.salary >= 8750 && pageAdminProfile.salary <= 9249.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('990.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('327.00');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('663.00');
			// }else if(pageAdminProfile.salary >= 9250 && pageAdminProfile.salary <= 9749.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('1045.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('345.20');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('699.80');
			// }else if(pageAdminProfile.salary >= 9750 && pageAdminProfile.salary <= 10249.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('1100.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('363.30');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('736.70');
			// }else if(pageAdminProfile.salary >= 10250 && pageAdminProfile.salary <= 10749.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('1155.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('381.50');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('773.50');
			// }else if(pageAdminProfile.salary >= 10750 && pageAdminProfile.salary <= 11249.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('1210.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('399.70');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('810.30');
			// }else if(pageAdminProfile.salary >= 11250 && pageAdminProfile.salary <= 11749.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('1265.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('417.80');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('847.20');
			// }else if(pageAdminProfile.salary >= 11750 && pageAdminProfile.salary <= 12249.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('1320.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('436.00');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('884.00');
			// }else if(pageAdminProfile.salary >= 12250 && pageAdminProfile.salary <= 12749.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('1375.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('454.20');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('920.80');
			// }else if(pageAdminProfile.salary >= 12750 && pageAdminProfile.salary <= 13249.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('1430.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('472.30');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('957.70');
			// }else if(pageAdminProfile.salary >= 13250 && pageAdminProfile.salary <= 13749.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('1485.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('490.50');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('994.50');
			// }else if(pageAdminProfile.salary >= 13750 && pageAdminProfile.salary <= 14249.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('1540.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('508.70');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('1031.30');
			// }else if(pageAdminProfile.salary >= 14250 && pageAdminProfile.salary <= 14749.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('1595.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('10.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('526.80');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('1068.20');
			// }else if(pageAdminProfile.salary >= 14750 && pageAdminProfile.salary <= 15249.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('1650.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('30.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('545.00');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('1105.00');
			// }else if(pageAdminProfile.salary >= 15250 && pageAdminProfile.salary <= 15749.99){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('1705.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('30.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('563.20');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('1141.80');
			// }else if(pageAdminProfile.salary >= 15750){
			// 	pageAdminProfile.elem.find('.sss-Contribution').val('1760.00');
			// 	pageAdminProfile.elem.find('.ec-Contribution').val('30.00');
			// 	pageAdminProfile.elem.find('.ee-Contribution').val('581.30');
			// 	pageAdminProfile.elem.find('.er-Contribution').val('1178.70');
			// }
		});
	});
</script>
