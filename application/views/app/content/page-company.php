<div id="pageCompany">
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
				<button type="button" name="btnBack" value="back" class ="btn btn-success btn-space btn-back-company">
					<i class="icon icon-left s7-back"></i>BACK
				</button>
				<button type="button" name="btnSave" value="save" class ="btn btn-success btn-space btn-save-company">
						<i class="icon icon-left s7-diskette"></i>SAVE
				</button>
				
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Company's Information</h3>
		</div>
		<div class="panel-body panel-body-company ">
			<form id="add-form" class="company-form">
				<div class="form-group">
					<label for="employername">Employer/Business Name <code>*</code></label>
					<input class="form-control employername" type="text" name="employername" placeholder="Employer/Business Name" required/>
				</div>
				<div class="form-group">
					<div class = "row form-group">
						<div class="col-md-4">
							<label for="lname">Unit/Room No.,Floor</label>
							<input class="form-control rm" type="text" name="rm" placeholder="Unit/Room No.,Floor"/>
						</div>
						<div class="col-md-4">
							<label for="lname">Bldg. Name</label>
							<input class="form-control bdlg" type="text" name="bdlg" placeholder="Bldg. Name"/>
						</div>
						<div class="col-md-4">
							<label for="extname">House/Lot &amp; Blk. No.</label>
							<input class="form-control house" type="text" name="house" placeholder="House/Lot & Blk. No." />
						</div>
						
					</div>
					<div class = "row form-group">
						<div class="col-md-4">
							<label for="extname">Street Name <code>*</code></label>
							<input class="form-control street" type="text" name="street" placeholder="Street Name"/>
						</div>
						<div class="col-md-4">
							<label for="extname">Subdivision</label>
							<input class="form-control subdivision" type="text" name="subdivision" placeholder="Subdivision"/>
						</div>
						<div class="col-md-4">
							<label for="extname">Barangay/District/Locality <code>*</code></label>
							<input class="form-control brgy" type="text" name="brgy" placeholder="Barangay/District/Locality"/>
						</div>
						
					</div>
					<div class = "row form-group">
						<div class="col-md-4">
							<label for="extname">City/Municipality <code>*</code></label>
							<input class="form-control city" type="text" name="city" placeholder="City/Municipality"/>
						</div>
						<div class="col-md-4">
							<label for="extname">Province <code>*</code></label>
							<input class="form-control province" type="text" name="province" placeholder="Province"/>
						</div>
						<div class="col-md-4">
							<label for="extname">Zip Code <code>*</code></label>
							<input class="form-control zipcode" type="text" name="zipcode" placeholder="Zip Code"/>
						</div>
						
					</div>
				</div>
				<div class="form-group">
					<div class="row form-group">
						<div class="col-md-3">
							<label for="extname">Tax Identification Number</label>
							<input class="form-control taxnum" type="number" name="taxnum" placeholder="Tax Identification Number"/>
						</div>
						<div class="col-md-3">
							<label for="username">Telephone Number</label>
							<input class="form-control telnum" type="tel" name="telnum" placeholder="Telephone Number" required/>
						</div>
						<div class="col-md-3">
							<label for="username">Mobile/Cellphone Number <code>*</code></label>
							<input class="form-control cellnum" type="tel" name="cellnum" placeholder="Mobile/Cellphone Number" required/>
						</div>
						<div class="col-md-3">
							<label for="email">Email <code>*</code></label>
							<input class="form-control email" type="email" name="email" placeholder="Email" required/>
						</div>
					</div>
					
				</div>
			</form>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Authorized Representative for Government Contribution</h3>
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label>Representative Name <code>*</code></label>
				<input class="form-control rep-name" type="text" name="rep-name" placeholder="Representative Name" required/>
			</div>
			<div class="form-group">
				<label>Representative Position <code>*</code></label>
				<input class="form-control rep-position" type="text" name="rep-position" placeholder="Representative Position" required/>
			</div>
		</div>
	</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Company SSS Information</h3>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label for="sssnum">SSS Number <code>*</code></label>
					<div class="row form-group">
						<div class="col-md-3">
							<input class="form-control sssnum1" type="text" name="sssnum" required />
						</div>
						<div class="col-md-1">
							<div class="dash-container">-</div>
						</div>
						<div class="col-md-3">
							<input class="form-control sssnum2" type="text" name="sssnum" required />
						</div>
						<div class="col-md-1">
							<div class="dash-container">-</div>
						</div>
						<div class="col-md-3">
							<input class="form-control sssnum3" type="text" name="sssnum" required />
						</div>
					</div>
				</div>
				<!-- <div class="form-group">
					<label for="sssnum">SSS Employer Number</label>
					<input class="form-control sssnum" type="number" name="sssnum" placeholder="SSS Employer Number" maxlength="10" pattern="/*d" title="Numbers only" required />
				</div> -->
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Company Pag-Ibig Information</h3>
			</div>
			<div class="panel-body">
				<label for="sssnum">Pag-IBIG Employer Number <code>*</code></label>
				<div class="row form-group">
					<div class="col-md-3">
						<input class="form-control pagibignum1" type="text" name="pagibigNumber" required />
					</div>
					<div class="col-md-1">
						<div class="dash-container">-</div>
					</div>
					<div class="col-md-3">
						<input class="form-control pagibignum2" type="text" name="pagibigNumber" required />
					</div>
					<div class="col-md-1">
						<div class="dash-container">-</div>
					</div>
					<div class="col-md-3">
						<input class="form-control pagibignum3" type="text" name="pagibigNumber" required />
					</div>
				</div>
				<!-- <div class="form-group">
					
					<input class="form-control pagibignum" type="number" name="pagibignum" placeholder="Pag-IBIG Employer Number" required />
				</div> -->
			</div>
			
		</div>
</div>

<script>
	var pageCompany = {};

	pageCompany.init = function(selector, callback){
		pageCompany.elem = $(selector);

		// pageCompany.elem.find('.sssnum4').val('000');

			pageCompany.elem.find('.zipcode').keydown(function(e){
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

			pageCompany.elem.find('.cellnum').keydown(function(e){
	        pageCompany.countSSSNumber1 = pageCompany.elem.find('.cellnum').val().length;
	        	if(e.which == 8 || e.which == 46){
	        		if(pageCompany.countSSSNumber1 != 0 && !(pageCompany.countSSSNumber1 < 0)){
	        				pageCompany.countSSSNumber1 -= 1;
	        			console.log(pageCompany.countSSSNumber1);
	        		}
	        		return true;
	        	}else if(pageCompany.countSSSNumber1 == 11){
	        		return false;
	        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
	        		
	        		if(pageCompany.countSSSNumber1 < 11){
	        			pageCompany.countSSSNumber1 += 1;
	        			console.log(pageCompany.countSSSNumber1);
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

	        pageCompany.elem.find('.sssnum1').keydown(function(e){
	        pageCompany.countSSSNumber1 = pageCompany.elem.find('.sssnum1').val().length;
	        	if(e.which == 8 || e.which == 46){
	        		if(pageCompany.countSSSNumber1 != 0 && !(pageCompany.countSSSNumber1 < 0)){
	        				pageCompany.countSSSNumber1 -= 1;
	        			console.log(pageCompany.countSSSNumber1);
	        		}
	        		return true;
	        	}else if(pageCompany.countSSSNumber1 == 2){
	        		pageCompany.elem.find('.sssnum2').focus();
	        		return false;
	        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
	        		
	        		if(pageCompany.countSSSNumber1 < 2){
	        			pageCompany.countSSSNumber1 += 1;
	        			console.log(pageCompany.countSSSNumber1);
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
	        
	        pageCompany.elem.find('.sssnum2').keydown(function(e){
	        pageCompany.countSSSNumber2 = pageCompany.elem.find('.sssnum2').val().length;
	        	if(e.which == 8 || e.which == 46){
	        		if(pageCompany.countSSSNumber2 != 0 && !(pageCompany.countSSSNumber2 < 0)){
	        				pageCompany.countSSSNumber2 -= 1;
	        			console.log(pageCompany.countSSSNumber2);
	        		}
	        		return true;
	        	}else if(pageCompany.countSSSNumber2 == 7){
	        		pageCompany.elem.find('.sssnum3').focus();
	        		return false;
	        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
	        		
	        		if(pageCompany.countSSSNumber2 < 7){
	        			pageCompany.countSSSNumber2 += 1;
	        			console.log(pageCompany.countSSSNumber2);
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

	        
	        pageCompany.elem.find('.sssnum3').keydown(function(e){
	        pageCompany.countSSSNumber3 = pageCompany.elem.find('.sssnum3').val().length;
	        	if(e.which == 8 || e.which == 46){
	        		if(pageCompany.countSSSNumber3 != 0 && !(pageCompany.countSSSNumber3 < 0)){
	        				pageCompany.countSSSNumber3 -= 1;
	        			console.log(pageCompany.countSSSNumber3);
	        		}
	        		return true;
	        	}else if(pageCompany.countSSSNumber3 == 1){
	        		// pageCompany.elem.find('.sssnum4').focus();
	        		return false;
	        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
	        		
	        		if(pageCompany.countSSSNumber3 < 1){
	        			pageCompany.countSSSNumber3 += 1;
	        			console.log(pageCompany.countSSSNumber3);
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

	        
	        // pageCompany.elem.find('.sssnum4').keydown(function(e){
	        // pageCompany.countSSSNumber4 = pageCompany.elem.find('.sssnum4').val().length;
	        // 	if(e.which == 8 || e.which == 46){
	        // 		if(pageCompany.countSSSNumber4 != 0 && !(pageCompany.countSSSNumber4 < 0)){
	        // 				pageCompany.countSSSNumber4 -= 1;
	        // 			console.log(pageCompany.countSSSNumber4);
	        // 		}
	        // 		return true;
	        // 	}else if(pageCompany.countSSSNumber4 == 3){
	        // 		return false;
	        // 	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
	        		
	        // 		if(pageCompany.countSSSNumber4 < 3){
	        // 			pageCompany.countSSSNumber4 += 1;
	        // 			console.log(pageCompany.countSSSNumber4);
	        // 			return true;
	        // 		}
	        // 		else{
	        // 			return false;
	        // 		}
	        // 	}
	        // 	else if(e.which == 9 || e.which >= 112 && e.which <= 123 || e.which >= 37 && e.which <= 40){
	        // 		return true;
	        // 	}else{
	        // 		return false;
	        // 	}
	        // });

	        
	        pageCompany.elem.find('.pagibignum1').keydown(function(e){
	        pageCompany.countPagibigNo1 = pageCompany.elem.find('.pagibignum1').val().length;
	        	if(e.which == 8 || e.which == 46){
	        		if(pageCompany.countPagibigNo1 != 0 && !(pageCompany.countPagibigNo1 < 0)){
	        				pageCompany.countPagibigNo1 -= 1;
	        			console.log(pageCompany.countPagibigNo1);
	        		}
	        		return true;
	        	}else if(pageCompany.countPagibigNo1 == 4){
	        		pageCompany.elem.find('.pagibignum2').focus();
	        		return false;
	        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
	        		
	        		if(pageCompany.countPagibigNo1 < 4){
	        			pageCompany.countPagibigNo1 += 1;
	        			console.log(pageCompany.countPagibigNo1);
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
	        
	        pageCompany.elem.find('.pagibignum2').keydown(function(e){
	        pageCompany.countPagibigNo2 = pageCompany.elem.find('.pagibignum2').val().length;
	        	if(e.which == 8 || e.which == 46){
	        		if(pageCompany.countPagibigNo2 != 0 && !(pageCompany.countPagibigNo2 < 0)){
	        				pageCompany.countPagibigNo2 -= 1;
	        			console.log(pageCompany.countPagibigNo2);
	        		}
	        		return true;
	        	}else if(pageCompany.countPagibigNo2 == 4){
	        		pageCompany.elem.find('.pagibignum3').focus();
	        		return false;
	        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
	        		
	        		if(pageCompany.countPagibigNo2 < 4){
	        			pageCompany.countPagibigNo2 += 1;
	        			console.log(pageCompany.countPagibigNo2);
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

	        
	        pageCompany.elem.find('.pagibignum3').keydown(function(e){
	        pageCompany.countPagibigNo3 = pageCompany.elem.find('.pagibignum3').val().length;
	        	if(e.which == 8 || e.which == 46){
	        		if(pageCompany.countPagibigNo3 != 0 && !(pageCompany.countPagibigNo3 < 0)){
	        				pageCompany.countPagibigNo3 -= 1;
	        			console.log(pageCompany.countPagibigNo3);
	        		}
	        		return true;
	        	}else if(pageCompany.countPagibigNo3 == 4){
	        		return false;
	        	}else if(e.which >= 48 && e.which <= 57 || e.which >= 96 && e.which <= 105 ){
	        		
	        		if(pageCompany.countPagibigNo3 < 4){
	        			pageCompany.countPagibigNo3 += 1;
	        			console.log(pageCompany.countPagibigNo3);
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
		pageCompany.elem.find('.btn-save-company').off("click").click(function(event){
			var company_form_info = {	
				"company_sss_id": pageCompany.elem.find('.sssnum1').val() 
								+ "-" 
								+ pageCompany.elem.find('.sssnum2').val() 
								+ "-" 
								+ pageCompany.elem.find('.sssnum3').val()
								+ "-"
								+ "000", 
				"company_pagibig_id": pageCompany.elem.find('.pagibignum1').val()
								+ "-"
								+ pageCompany.elem.find('.pagibignum2').val()
								+ "-"
								+ pageCompany.elem.find('.pagibignum3').val(),
				"company_name": pageCompany.elem.find('.employername').val(),
				"company_address": JSON.stringify({
					"room_no" : pageCompany.elem.find('.rm').val(),
					"bldg_name": pageCompany.elem.find('.bdlg').val(), 
					"house": pageCompany.elem.find('.house').val(),
					"street_name": pageCompany.elem.find('.street').val(),
					"subdivision": pageCompany.elem.find('.subdivision').val(),
					"barangay": pageCompany.elem.find('.brgy').val(),
					"city": pageCompany.elem.find('.city').val(),
					"province": pageCompany.elem.find('.province').val(),
					"zip_code": pageCompany.elem.find('.zipcode').val()
					}),
				"company_tax_id": pageCompany.elem.find('.taxnum').val(),
				"company_contact_info": JSON.stringify({
					"company_tel_no": pageCompany.elem.find('.telnum').val(),
					"company_cel_no": pageCompany.elem.find('.cellnum').val()
					}),
				"company_email": pageCompany.elem.find('.email').val(),
				"company_representative": pageCompany.elem.find('.rep-name').val(),
				"company_rep_pos": pageCompany.elem.find('.rep-position').val()
			};
			if(pageCompany.elem.find('.street').val() == ''){
				pageCompany.elem.find('.modal-error .modal-body p').html('');
				pageCompany.elem.find('.modal-error .modal-body p').html('Please enter street name!');
				pageCompany.elem.find('.modal-error').modal("show");
			}else if(pageCompany.elem.find('.brgy').val() == ''){
				pageCompany.elem.find('.modal-error .modal-body p').html('');
				pageCompany.elem.find('.modal-error .modal-body p').html('Please enter barangay/district/locality!');
				pageCompany.elem.find('.modal-error').modal("show");
			}else if(pageCompany.elem.find('.city').val() == ''){
				pageCompany.elem.find('.modal-error .modal-body p').html('');
				pageCompany.elem.find('.modal-error .modal-body p').html('Please enter city/municipality!');
				pageCompany.elem.find('.modal-error').modal("show");
			}else if(pageCompany.elem.find('.province').val() == ''){
				pageCompany.elem.find('.modal-error .modal-body p').html('');
				pageCompany.elem.find('.modal-error .modal-body p').html('Please enter province!');
				pageCompany.elem.find('.modal-error').modal("show");
			}else if(pageCompany.elem.find('.zipcode').val() == ''){
				pageCompany.elem.find('.modal-error .modal-body p').html('');
				pageCompany.elem.find('.modal-error .modal-body p').html('Please enter zip code!');
				pageCompany.elem.find('.modal-error').modal("show");
			}else{
				pageCompany.elem.find('.modal-error .modal-body p').html('');
				$.ajax({
					method: "POST",
						url: "<?php echo base_url('add-company')?>",
						data: company_form_info,
						success: function(result){
							if(result.success == 1){
								pageCompany.elem.find('.modal-department').modal();
							}else if(result.success.error){
								pageCompany.elem.find('.modal-error .modal-body p').html(result.success.error);
								pageCompany.elem.find('.modal-error').modal("show");
							}
						}
				});
			}

			
			console.log(company_form_info);
		});
		$.getJSON('<?php echo site_url('getAllCompanyInfo')?>', callback);
	}

	pageCompany.init("#pageCompany", function(result){
		result = result['query'];
		$.each(result, function(key,value){

			pageCompany.sssnum = value['company_sss_id'].split('-');
			pageCompany.pagibignum = value['company_pagibig_id'].split('-');
			pageCompany.elem.find('.employername').val(value['company_name']);
			pageCompany.elem.find('.rep-name').val(value['company_representative']);
			pageCompany.elem.find('.rep-position').val(value['company_rep_pos']);


			var companyAddress = jQuery.parseJSON(value['company_address']);
			pageCompany.elem.find('.rm').val(companyAddress['room_no']);
			pageCompany.elem.find('.bdlg').val(companyAddress['bldg_name']);
			pageCompany.elem.find('.house').val(companyAddress['house']);
			pageCompany.elem.find('.street').val(companyAddress['street_name']);
			pageCompany.elem.find('.subdivision').val(companyAddress['subdivision']);
			pageCompany.elem.find('.brgy').val(companyAddress['barangay']);
			pageCompany.elem.find('.city').val(companyAddress['city']);
			pageCompany.elem.find('.province').val(companyAddress['province']);
			pageCompany.elem.find('.zipcode').val(companyAddress['zip_code']);
			pageCompany.elem.find('.taxnum').val(value['company_tax_id']);

			var companyContact = jQuery.parseJSON(value['company_contact_info']);
			pageCompany.elem.find('.telnum').val(companyContact['company_tel_no']);
			pageCompany.elem.find('.cellnum').val(companyContact['company_cel_no']);
			pageCompany.elem.find('.email').val(value['company_email']);

		});

		pageCompany.elem.find('.sssnum1').val(pageCompany.sssnum[0]);
		pageCompany.elem.find('.sssnum2').val(pageCompany.sssnum[1]);
		pageCompany.elem.find('.sssnum3').val(pageCompany.sssnum[2]);
		// pageCompany.elem.find('.sssnum4').val(pageCompany.sssnum[3]);

		pageCompany.elem.find('.pagibignum1').val(pageCompany.pagibignum[0]);
		pageCompany.elem.find('.pagibignum2').val(pageCompany.pagibignum[1]);
		pageCompany.elem.find('.pagibignum3').val(pageCompany.pagibignum[2]);
	});
</script>