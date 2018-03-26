<div id="pageDashboard">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Company's Information</h3>

		</div>
		<div class="panel-body panel-body-company ">
			<form>
				<div class="form-group">
					<div class="row form-group">
						<div class="col-md-6">
							<label for="sssnum">SSS Employer Number</label>
							<input class="form-control company-sss-num" type="number" name="sssnum" placeholder="SSS Employer Number" title="Numbers only" readonly />
						</div>
						<div class="col-md-6">
							<label for="sssnum">Pag-IBIG Employer Number</label>
							<input class="form-control company-pagibig-num" type="number" name="pagibignum" placeholder="Pag-IBIG Employer Number" readonly/>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="employername">Employer Name</label>
					<input class="form-control company-employer-name" type="text" name="employername" placeholder="Employer Name" readonly/>
				</div>
				<div class="form-group">
					<div class = "row form-group">
						<div class="col-md-4">
							<label for="lname">Rm./Flr./Unit No. &amp; Bldg. Name</label>
							<input class="form-control rm" type="text" name="rm" placeholder="Rm./Flr./Unit No.& Bldg. Name" readonly/>
						</div>
						<div class="col-md-4">
							<label for="extname">House/Lot &amp; Blk. No.</label>
							<input class="form-control house" type="text" name="house" placeholder="House/Lot & Blk. No." readonly />
						</div>
						<div class="col-md-4">
							<label for="extname">Street Name</label>
							<input class="form-control street" type="text" name="street" placeholder="Street Name" readonly/>
						</div>
					</div>
					<div class = "row form-group">
						<div class="col-md-4">
							<label for="extname">Subdivision</label>
							<input class="form-control subdivision" type="text" name="subdivision" placeholder="Subdivision" readonly/>
						</div>
						<div class="col-md-4">
							<label for="extname">Barangay/District/Locality</label>
							<input class="form-control brgy" type="text" name="brgy" placeholder="Barangay/District/Locality" readonly/>
						</div>
						<div class="col-md-4">
							<label for="extname">City/Municipality</label>
							<input class="form-control city" type="text" name="city" placeholder="City/Municipality" readonly/>
						</div>
					</div>
					<div class = "row form-group">
						<div class="col-md-6">
							<label for="extname">Province</label>
							<input class="form-control province" type="text" name="province" placeholder="Province" readonly/>
						</div>
						<div class="col-md-6">
							<label for="extname">Zip Code</label>
							<input class="form-control zipcode" type="number" name="zipcode" placeholder="Zip Code" readonly/>
						</div>
						
					</div>
				</div>
				<div class="form-group">
					<div class="row form-group">
						<div class="col-md-3">
							<label for="extname">Tax Identification Number</label>
							<input class="form-control company-tax-num" type="number" name="taxnum" placeholder="Tax Identification Number" readonly/>
						</div>
						<div class="col-md-3">
							<label for="username">Telephone Number</label>
							<input class="form-control company-tel-num" type="tel" name="telnum" placeholder="Telephone Number" readonly/>
						</div>
						<div class="col-md-3">
							<label for="username">Mobile/Cellphone Number</label>
							<input class="form-control company-cell-num" type="tel" name="cellnum" placeholder="Mobile/Cellphone Number" readonly/>
						</div>
						<div class="col-md-3">
							<label for="email">Email</label>
							<input class="form-control company-email" type="email" name="email" placeholder="Email" readonly/>
						</div>
					</div>
					
				</div>

			</form>
		</div>
	</div>


<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Employee's Information</h3>
	</div>
	<div class="panel-body">
		<table class="table table-striped table-hover table-fw-widget table-hover employee-info-table text-center">
			<thead>
				<tr>
					<th class="text-center">Employee No.</th>
					<th class="text-center">LAST NAME</th>
					<th class="text-center">FIRST NAME</th>
					<th class="text-center">MIDDLE NAME</th>
					<th class="text-center">EXTENSION NAME</th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</div>
</div>
		
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>SSS Contribution</h3>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label for="sss-total-contribution">Total Contribution</label>
					<input class="form-control sss-total-contribution" type="text" name="sss-total-contribution" placeholder="Total Contribution" readonly/>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Pag-ibig Contribution</h3>
			</div>
			<div class="panel-body">
				<div class="form-group">
					<label for="pagibig-total-contribution">Total Contribution</label>
					<input class="form-control pagibig-total-contribution" type="text" name="pagibig-total-contribution" placeholder="Total Contribution" readonly/>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<script>
	var pageDashboard = {};
	pageDashboard.init = function(selector, callback){
		pageDashboard.elem = $(selector);

		pageDashboard.elem.find('.employee-info-table').DataTable({
			"autowidth":false,
			"paging" : true,
			"processing": true,
			"serverSide": true,
			"pagingType": "full_numbers",
			"ajax":{
				"url": "<?php echo site_url('employee-datatable')?>",
				"dataScr" : function( json ){
					return json['data'];
				}
			},
			"columns" : [
				{data: "emp_id"},
				{data: "emp_last_name"},
				{data: "emp_first_name"},
				{data: "emp_middle_name"},
				{data: "emp_ext_name"}
			],
			"drawCallback":function(settings){},
			dom:  	"<'row am-datatable-header'<'col-sm-6'l><'col-sm-6'f>>" +
					"<'row am-datatable-body'<'col-sm-12'tr>>" +
					"<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>"
		});
		
		$.getJSON('<?php echo base_url('get-all-hr-info')?>', callback);
	}

	pageDashboard.init("#pageDashboard", function(result){
		pageDashboard.employee = result['employeeQuery'];
		pageDashboard.sss = result['sssQuery'];
		pageDashboard.pagibig = result['pagibigQuery'];
		pageDashboard.company = result['companyQuery'];

		console.log(pageDashboard.employee);

		$.each(pageDashboard.company, function(key, value){
			pageDashboard.elem.find('.company-sss-num').val(value['company_sss_id']);
			pageDashboard.elem.find('.company-pagibig-num').val(value['company_pagibig_id']);
			pageDashboard.elem.find('.company-employer-name').val(value['company_name']);

			pageDashboard.company_address = jQuery.parseJSON(value['company_address']);
			pageDashboard.elem.find('.rm').val(pageDashboard.company_address['bldg_name']);
			pageDashboard.elem.find('.house').val(pageDashboard.company_address['house']);
			pageDashboard.elem.find('.street').val(pageDashboard.company_address['street_name']);
			pageDashboard.elem.find('.subdivision').val(pageDashboard.company_address['subdivision']);
			pageDashboard.elem.find('.brgy').val(pageDashboard.company_address['barangay']);
			pageDashboard.elem.find('.city').val(pageDashboard.company_address['city']);
			pageDashboard.elem.find('.province').val(pageDashboard.company_address['province']);
			pageDashboard.elem.find('.zipcode').val(pageDashboard.company_address['zip_code']);

			pageDashboard.elem.find('.company-tax-num').val(value['company_tax_id']);

			pageDashboard.company_contact = jQuery.parseJSON(value['company_contact_info']);
			pageDashboard.elem.find('.company-tel-num').val(pageDashboard.company_contact['company_tel_no']);
			pageDashboard.elem.find('.company-cell-num').val(pageDashboard.company_contact['company_cel_no']);

			pageDashboard.elem.find('.company-email').val(value['company_email']);
		});

		// $.each(pageDashboard.employee, function(key, value){
		// 	pageDashboard.employee_name = jQuery.parseJSON(value['emp_name']);

		// 	pageDashboard.trEmployee = $('<tr></tr>');
		// 	pageDashboard.trEmployee.attr('class', key);
		// 	pageDashboard.elem.find('.employee-info-table tbody').append(pageDashboard.trEmployee);

		// 	pageDashboard.tdIdEmployee = $('<td></td>');
		// 	pageDashboard.tdIdEmployee.html(value['emp_id']);
		// 	pageDashboard.elem.find('.'+key).append(pageDashboard.tdIdEmployee);

		// 	pageDashboard.tdLastNameEmployee = $('<td></td>');
		// 	pageDashboard.tdLastNameEmployee.html(pageDashboard.employee_name['last_name']);
		// 	pageDashboard.elem.find('.'+key).append(pageDashboard.tdLastNameEmployee);

		// 	pageDashboard.tdFirstNameEmployee = $('<td></td>');
		// 	pageDashboard.tdFirstNameEmployee.html(pageDashboard.employee_name['first_name']);
		// 	pageDashboard.elem.find('.'+key).append(pageDashboard.tdFirstNameEmployee);

		// 	pageDashboard.tdMiddleNameEmployee = $('<td></td>');
		// 	pageDashboard.tdMiddleNameEmployee.html(pageDashboard.employee_name['middle_name']);
		// 	pageDashboard.elem.find('.'+key).append(pageDashboard.tdMiddleNameEmployee);

		// 	pageDashboard.tdExtNameEmployee = $('<td></td>');
		// 	pageDashboard.tdExtNameEmployee.html(pageDashboard.employee_name['ext_name']);
		// 	pageDashboard.elem.find('.'+key).append(pageDashboard.tdExtNameEmployee);
		// });

		pageDashboard.ss_contribution = 0;
		pageDashboard.ec_contribution = 0;
		pageDashboard.sss_total = 0;
		$.each(pageDashboard.sss, function(key, value){
			pageDashboard.ss_contribution +=  parseInt(value['ss_contribution']); 
			pageDashboard.ec_contribution +=  parseInt(value['ec_contribution']); 
		});
		pageDashboard.sss_total = pageDashboard.ss_contribution + pageDashboard.ec_contribution;
		pageDashboard.elem.find('.sss-total-contribution').val(pageDashboard.sss_total);

		pageDashboard.pagibig_er_share = 0;
		pageDashboard.pagibig_ee_share = 0;
		pageDashboard.pagibig_total = 0;
		$.each(pageDashboard.pagibig, function(key, value){
			pageDashboard.pagibig_er_share += parseInt(value['pagibig_er_share']);
			pageDashboard.pagibig_ee_share += parseInt(value['pagibig_ee_share']);
		});
		pageDashboard.pagibig_total = pageDashboard.pagibig_er_share + pageDashboard.pagibig_ee_share;
		pageDashboard.elem.find('.pagibig-total-contribution').val(pageDashboard.pagibig_total);
	});

</script>