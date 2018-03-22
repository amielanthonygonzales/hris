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
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Company's Information</h3>
		</div>
		<div class="panel-body panel-body-company ">
			<form id="add-form" class="company-form">
				<div class="row form-group">
					<button type="button" name="btnSave" value="save" class ="btn btn-success btn-space btn-save-company">
							<i class="icon icon-left s7-diskette"></i>SAVE
					</button>
					<button type="button" name="btnBack" value="back" class ="btn btn-success btn-space btn-back-company">
						<i class="icon icon-left s7-back"></i>BACK
					</button>
				</div>

				<div class="form-group">
					<div class="row form-group">
						<div class="col-md-6">
							<label for="sssnum">SSS Employer Number</label>
							<input class="form-control sssnum" type="number" name="sssnum" placeholder="SSS Employer Number" maxlength="10" pattern="/*d" title="Numbers only" required />
						</div>
						<div class="col-md-6">
							<label for="sssnum">Pag-IBIG Employer Number</label>
							<input class="form-control pagibignum" type="number" name="pagibignum" placeholder="Pag-IBIG Employer Number" required />
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="employername">Employer Name</label>
					<input class="form-control employername" type="text" name="employername" placeholder="Employer Name" required/>
				</div>
				<div class="form-group">
					<div class = "row form-group">
						<div class="col-md-4">
							<label for="lname">Rm./Flr./Unit No. &amp; Bldg. Name</label>
							<input class="form-control rm" type="text" name="rm" placeholder="Rm./Flr./Unit No.& Bldg. Name"/>
						</div>
						<div class="col-md-4">
							<label for="extname">House/Lot &amp; Blk. No.</label>
							<input class="form-control house" type="text" name="house" placeholder="House/Lot & Blk. No." />
						</div>
						<div class="col-md-4">
							<label for="extname">Street Name</label>
							<input class="form-control street" type="text" name="street" placeholder="Street Name"/>
						</div>
					</div>
					<div class = "row form-group">
						<div class="col-md-4">
							<label for="extname">Subdivision</label>
							<input class="form-control subdivision" type="text" name="subdivision" placeholder="Subdivision"/>
						</div>
						<div class="col-md-4">
							<label for="extname">Barangay/District/Locality</label>
							<input class="form-control brgy" type="text" name="brgy" placeholder="Barangay/District/Locality"/>
						</div>
						<div class="col-md-4">
							<label for="extname">City/Municipality</label>
							<input class="form-control city" type="text" name="city" placeholder="City/Municipality"/>
						</div>
					</div>
					<div class = "row form-group">
						<div class="col-md-6">
							<label for="extname">Province</label>
							<input class="form-control province" type="text" name="province" placeholder="Province"/>
						</div>
						<div class="col-md-6">
							<label for="extname">Zip Code</label>
							<input class="form-control zipcode" type="number" name="zipcode" placeholder="Zip Code"/>
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
							<label for="username">Mobile/Cellphone Number</label>
							<input class="form-control cellnum" type="tel" name="cellnum" placeholder="Mobile/Cellphone Number" required/>
						</div>
						<div class="col-md-3">
							<label for="email">Email</label>
							<input class="form-control email" type="email" name="email" placeholder="Email" required/>
						</div>
					</div>
					
				</div>

			</form>
		</div>
	</div>
</div>

<script>
	var pageCompany = {};

	pageCompany.init = function(selector, callback){
		pageCompany.elem = $(selector);
		pageCompany.elem.find('.btn-save-company').off("click").click(function(event){
			// var company_address = {
			// 	"bldg_name": pageCompany.elem.find('.rm').val(), 
			// 	"house": pageCompany.elem.find('.house').val(),
			// 	"street_name": pageCompany.elem.find('.street').val(),
			// 	"subdivision": pageCompany.elem.find('.subdivision').val(),
			// 	"barangay": pageCompany.elem.find('.brgy').val(),
			// 	"city": pageCompany.elem.find('.city').val(),
			// 	"province": pageCompany.elem.find('.province').val(),
			// 	"zip_code": pageCompany.elem.find('.zipcode').val()
			// 	};
			// company_address = JSON.stringify(company_address);

			// var company_contact = {
			// 	"company_tel_no": pageCompany.elem.find('.telnum').val(),
			// 	"company_cel_no": pageCompany.elem.find('.cellnum').val()
			// 	};
			// company_contact = JSON.stringify(company_contact);

			var company_form_info = {	
				"company_sss_id": pageCompany.elem.find('.sssnum').val(), 
				"company_pagibig_id": pageCompany.elem.find('.pagibignum').val(),
				"company_name": pageCompany.elem.find('.employername').val(),
				"company_address": JSON.stringify({
					"bldg_name": pageCompany.elem.find('.rm').val(), 
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
				"company_email": pageCompany.elem.find('.email').val()
			};

			$.ajax({
				method: "POST",
					url: "<?php echo base_url('add-company')?>",
					data: company_form_info,
					success: function(result){
						if(result.success){
							pageCompany.elem.find('.modal-department').modal();
						}
					}
			});
			console.log(company_form_info);
		});
		$.getJSON('<?php echo site_url('getAllCompanyInfo')?>', callback);
	}

	pageCompany.init("#pageCompany", function(result){
		result = result['query'];
		$.each(result, function(key,value){

			pageCompany.elem.find('.sssnum').val(value['company_sss_id']);
			pageCompany.elem.find('.pagibignum').val(value['company_pagibig_id']);
			pageCompany.elem.find('.employername').val(value['company_name']);

			var companyAddress = jQuery.parseJSON(value['company_address']);
			pageCompany.elem.find('.rm').val(companyAddress['bldg_name']);
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
	});
</script>