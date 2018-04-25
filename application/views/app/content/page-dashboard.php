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
							<input class="form-control company-sss-num typing-dashboard" type="text" name="sssnum" placeholder="SSS Employer Number" title="Numbers only" />
						</div>
						<div class="col-md-6">
							<label for="sssnum">Pag-IBIG Employer Number</label>
							<input class="form-control company-pagibig-num typing-dashboard" type="text" name="pagibignum" placeholder="Pag-IBIG Employer Number"/>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="employername">Employer Name</label>
					<input class="form-control company-employer-name typing-dashboard" type="text" name="employername" placeholder="Employer Name"/>
				</div>
				<div class="form-group">
					<div class = "row form-group">
						<div class="col-md-4">
							<label for="lname">Rm./Flr./Unit No. &amp; Bldg. Name</label>
							<input class="form-control rm typing-dashboard" type="text" name="rm" placeholder="Rm./Flr./Unit No.& Bldg. Name"/>
						</div>
						<div class="col-md-4">
							<label for="extname">House/Lot &amp; Blk. No.</label>
							<input class="form-control house typing-dashboard" type="text" name="house" placeholder="House/Lot & Blk. No."/>
						</div>
						<div class="col-md-4">
							<label for="extname">Street Name</label>
							<input class="form-control street typing-dashboard" type="text" name="street" placeholder="Street Name"/>
						</div>
					</div>
					<div class = "row form-group">
						<div class="col-md-4">
							<label for="extname">Subdivision</label>
							<input class="form-control subdivision typing-dashboard" type="text" name="subdivision" placeholder="Subdivision"/>
						</div>
						<div class="col-md-4">
							<label for="extname">Barangay/District/Locality</label>
							<input class="form-control brgy typing-dashboard" type="text" name="brgy" placeholder="Barangay/District/Locality"/>
						</div>
						<div class="col-md-4">
							<label for="extname">City/Municipality</label>
							<input class="form-control city typing-dashboard" type="text" name="city" placeholder="City/Municipality"/>
						</div>
					</div>
					<div class = "row form-group">
						<div class="col-md-6">
							<label for="extname">Province</label>
							<input class="form-control province typing-dashboard" type="text" name="province" placeholder="Province"/>
						</div>
						<div class="col-md-6">
							<label for="extname">Zip Code</label>
							<input class="form-control zipcode typing-dashboard" type="number" name="zipcode" placeholder="Zip Code"/>
						</div>
						
					</div>
				</div>
				<div class="form-group">
					<div class="row form-group">
						<div class="col-md-3">
							<label for="extname">Tax Identification Number</label>
							<input class="form-control company-tax-num typing-dashboard" type="number" name="taxnum" placeholder="Tax Identification Number"/>
						</div>
						<div class="col-md-3">
							<label for="username">Telephone Number</label>
							<input class="form-control company-tel-num typing-dashboard" type="tel" name="telnum" placeholder="Telephone Number"/>
						</div>
						<div class="col-md-3">
							<label for="username">Mobile/Cellphone Number</label>
							<input class="form-control company-cell-num typing-dashboard" type="tel" name="cellnum" placeholder="Mobile/Cellphone Number"/>
						</div>
						<div class="col-md-3">
							<label for="email">Email</label>
							<input class="form-control company-email typing-dashboard" type="email" name="email" placeholder="Email"/>
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
	<div class="col-sm-6">
		<div class="info-block panel panel-default">
			<div class="panel-heading">
				<h3>SSS Contribution</h3>
			</div>
			<div class="panel-body">
				<div id="sss-graph"></div>
				<div class="contri-content">
					<span class="description">Social Security Contribution</span>
						<table class="no-border no-strip skills">
							<tbody class="no-border-x no-border-y">
		                        <tr>
		                          <td class="item">Total Employer Contribution<span class="icon s7-culture"></span></td>
		                          <td class="er-contribution amount-contri"></td>
		                        </tr>
		                        <tr class="end-of-formula">
		                          <td class="item">Total Employee Contribution<span class="icon s7-users"></span></td>
		                          <td class="ee-contribution amount-contri"></td>
		                        </tr>
		                        <tr>
		                          <td class="item total-item">Total Social Security Contribution<span class="icon s7-cash total-icon"></span></td>
		                          <td class="ss-contribution amount-contri total-contri"></td>
		                        </tr>
		                    </tbody>
						</table>
				</div>
				<div class="contri-content">
					<span class="description">SSS Contribution</span>
						<table class="no-border no-strip skills">
							<tbody class="no-border-x no-border-y">
		                        <tr>
		                          <td class="item">Total Social Security Contribution<span class="icon s7-culture"></span></td>
		                          <td class="ss-contribution amount-contri"></td>
		                        </tr>
		                        <tr class="end-of-formula">
		                          <td class="item">Total Employee Compensation Contribution<span class="icon s7-users"></span></td>
		                          <td class="ec-contribution amount-contri"></td>
		                        </tr>
		                        <tr>
		                          <td class="item total-item">Total SSS Contribution<span class="icon s7-cash total-icon"></span></td>
		                          <td class="sss-total-contribution amount-contri total-contri"></td>
		                        </tr>
		                    </tbody>
						</table>
				</div>
			</div>

		</div>
	</div>
	<div class="col-md-6">
		<div class="info-block panel panel-default">
			<div class="panel-heading">
				<h3>Pag-Ibig Contribution</h3>
			</div>
			<div class="panel-body">
				<div id="pagibig-graph"></div>
				<div class="contri-content">
					<span class="description">Pag-Ibig Contribution</span>
						<table class="no-border no-strip skills">
							<tbody class="no-border-x no-border-y">
		                        <tr>
		                          <td class="item">Total Employer Share<span class="icon s7-culture"></span></td>
		                          <td class="er-share amount-contri"></td>
		                        </tr>
		                        <tr class="end-of-formula">
		                          <td class="item">Total Employee Share<span class="icon s7-users"></span></td>
		                          <td class="ee-share amount-contri"></td>
		                        </tr>
		                        <tr>
		                          <td class="item total-item">Total Pag-Ibig Contribution<span class="icon s7-cash total-icon"></span></td>
		                          <td class="pagibig-total-contribution amount-contri total-contri"></td>
		                        </tr>
		                    </tbody>
						</table>
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


		pageDashboard.elem.find('.typing-dashboard').keydown(function(e){
			if(e.which == 9){
				return true;
			}else{
				return false;
			}
		});
		pageDashboard.elem.find('.typing-dashboard').on("contextmenu",function(){
	       return false;
	    }); 

		

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
		pageDashboard.paidContri = result['paidContriQuery'];
		pageDashboard.sssPaidMonth = [];
		pageDashboard.sssPaidAmount = [];
		pageDashboard.pagibigPaidMonth = [];
		pageDashboard.pagibigPaidAmount = [];

		const monthNamesAbri = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
								  "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
								];
		pageDashboard.getDate = new Date();

		pageDashboard.getDate.getFullYear();

		$.each(pageDashboard.paidContri, function(keyPaid, valuePaid){

			if(pageDashboard.getDate.getFullYear() == valuePaid['year'] && valuePaid['gov_agency'] == "SSS"){
				pageDashboard.sssPaidMonth.push(valuePaid['month']);
				pageDashboard.sssPaidAmount.push(valuePaid['amount']);
			}

			if(pageDashboard.getDate.getFullYear() == valuePaid['year'] && valuePaid['gov_agency'] == "Pag-Ibig"){
				pageDashboard.pagibigPaidMonth.push(valuePaid['month']);
				pageDashboard.pagibigPaidAmount.push(valuePaid['amount']);
			}
			
		});
		if(jQuery.inArray('1', pageDashboard.sssPaidMonth) == -1){
			pageDashboard.sssPaidMonth.splice(0,0, "1");
			pageDashboard.sssPaidAmount.splice(0,0, "0");
		}
		if(jQuery.inArray('2', pageDashboard.sssPaidMonth) == -1){
			pageDashboard.sssPaidMonth.splice(1,0, "2");
			pageDashboard.sssPaidAmount.splice(1,0, "0");
		}
		if(jQuery.inArray('3', pageDashboard.sssPaidMonth) == -1){
			pageDashboard.sssPaidMonth.splice(2,0, "3");
			pageDashboard.sssPaidAmount.splice(2,0, "0");
		}
		if(jQuery.inArray('4', pageDashboard.sssPaidMonth) == -1){
			pageDashboard.sssPaidMonth.splice(3,0, "4");
			pageDashboard.sssPaidAmount.splice(3,0, "0");
		}
		if(jQuery.inArray('5', pageDashboard.sssPaidMonth) == -1){
			pageDashboard.sssPaidMonth.splice(4,0, "5");
			pageDashboard.sssPaidAmount.splice(4,0, "0");
		}
		if(jQuery.inArray('6', pageDashboard.sssPaidMonth) == -1){
			pageDashboard.sssPaidMonth.splice(5,0, "6");
			pageDashboard.sssPaidAmount.splice(5,0, "0");
		}
		if(jQuery.inArray('7', pageDashboard.sssPaidMonth) == -1){
			pageDashboard.sssPaidMonth.splice(6,0, "7");
			pageDashboard.sssPaidAmount.splice(6,0, "0");
		}
		if(jQuery.inArray('8', pageDashboard.sssPaidMonth) == -1){
			pageDashboard.sssPaidMonth.splice(7,0, "8");
			pageDashboard.sssPaidAmount.splice(7,0, "0");
		}
		if(jQuery.inArray('9', pageDashboard.sssPaidMonth) == -1){
			pageDashboard.sssPaidMonth.splice(8,0, "9");
			pageDashboard.sssPaidAmount.splice(8,0, "0");
		}
		if(jQuery.inArray('10', pageDashboard.sssPaidMonth) == -1){
			pageDashboard.sssPaidMonth.splice(9,0, "10");
			pageDashboard.sssPaidAmount.splice(9,0, "0");
		}
		if(jQuery.inArray('11', pageDashboard.sssPaidMonth) == -1){
			pageDashboard.sssPaidMonth.splice(10,0, "11");
			pageDashboard.sssPaidAmount.splice(10,0, "0");
		}
		if(jQuery.inArray('12', pageDashboard.sssPaidMonth) == -1){
			pageDashboard.sssPaidMonth.splice(11,0, "12");
			pageDashboard.sssPaidAmount.splice(11,0, "0");
		}
		if(jQuery.inArray('1', pageDashboard.pagibigPaidMonth) == -1){
			pageDashboard.pagibigPaidMonth.splice(0,0, "1");
			pageDashboard.pagibigPaidAmount.splice(0,0, "0");
		}
		if(jQuery.inArray('2', pageDashboard.pagibigPaidMonth) == -1){
			pageDashboard.pagibigPaidMonth.splice(1,0, "2");
			pageDashboard.pagibigPaidAmount.splice(1,0, "0");
		}
		if(jQuery.inArray('3', pageDashboard.pagibigPaidMonth) == -1){
			pageDashboard.pagibigPaidMonth.splice(2,0, "3");
			pageDashboard.pagibigPaidAmount.splice(2,0, "0");
		}
		if(jQuery.inArray('4', pageDashboard.pagibigPaidMonth) == -1){
			pageDashboard.pagibigPaidMonth.splice(3,0, "4");
			pageDashboard.pagibigPaidAmount.splice(3,0, "0");
		}
		if(jQuery.inArray('5', pageDashboard.pagibigPaidMonth) == -1){
			pageDashboard.pagibigPaidMonth.splice(4,0, "5");
			pageDashboard.pagibigPaidAmount.splice(4,0, "0");
		}
		if(jQuery.inArray('6', pageDashboard.pagibigPaidMonth) == -1){
			pageDashboard.pagibigPaidMonth.splice(5,0, "6");
			pageDashboard.pagibigPaidAmount.splice(5,0, "0");
		}
		if(jQuery.inArray('7', pageDashboard.pagibigPaidMonth) == -1){
			pageDashboard.pagibigPaidMonth.splice(6,0, "7");
			pageDashboard.pagibigPaidAmount.splice(6,0, "0");
		}
		if(jQuery.inArray('8', pageDashboard.pagibigPaidMonth) == -1){
			pageDashboard.pagibigPaidMonth.splice(7,0, "8");
			pageDashboard.pagibigPaidAmount.splice(7,0, "0");
		}
		if(jQuery.inArray('9', pageDashboard.pagibigPaidMonth) == -1){
			pageDashboard.pagibigPaidMonth.splice(8,0, "9");
			pageDashboard.pagibigPaidAmount.splice(8,0, "0");
		}
		if(jQuery.inArray('10', pageDashboard.pagibigPaidMonth) == -1){
			pageDashboard.pagibigPaidMonth.splice(9,0, "10");
			pageDashboard.pagibigPaidAmount.splice(9,0, "0");
		}
		if(jQuery.inArray('11', pageDashboard.pagibigPaidMonth) == -1){
			pageDashboard.pagibigPaidMonth.splice(10,0, "11");
			pageDashboard.pagibigPaidAmount.splice(10,0, "0");
		}
		if(jQuery.inArray('12', pageDashboard.pagibigPaidMonth) == -1){
			pageDashboard.pagibigPaidMonth.splice(11,0, "12");
			pageDashboard.pagibigPaidAmount.splice(11,0, "0");
		}
		console.log(pageDashboard.pagibigPaidAmount);

		
		console.log(pageDashboard.company);
		$.each(pageDashboard.company, function(key, value){
			
			pageDashboard.elem.find('.company-employer-name').val(value['company_name']);
			pageDashboard.elem.find('.company-sss-num').val(value['company_sss_id']);
			pageDashboard.elem.find('.company-pagibig-num').val(value['company_pagibig_id']);

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

		pageDashboard.ss_contribution = 0;
		pageDashboard.ec_contribution = 0;
		pageDashboard.ee_contribution = 0;
		pageDashboard.er_contribution = 0;
		pageDashboard.sss_total = 0;
		$.each(pageDashboard.sss, function(key, value){
			pageDashboard.ss_contribution +=  parseFloat(value['ss_contribution']); 
			pageDashboard.ec_contribution +=  parseFloat(value['ec_contribution']); 
			pageDashboard.ee_contribution +=  parseFloat(value['ee_contribution']);
			pageDashboard.er_contribution +=  parseFloat(value['er_contribution']);

			console.log(pageDashboard.er_contribution);
		});
		pageDashboard.sss_total = pageDashboard.ss_contribution + pageDashboard.ec_contribution;
		pageDashboard.elem.find('.ss-contribution').text(pageDashboard.ss_contribution.toFixed(2));
		pageDashboard.elem.find('.ee-contribution').text(pageDashboard.ee_contribution.toFixed(2));
		pageDashboard.elem.find('.er-contribution').text(pageDashboard.er_contribution.toFixed(2));
		pageDashboard.elem.find('.ec-contribution').text(pageDashboard.ec_contribution.toFixed(2));
		pageDashboard.elem.find('.sss-total-contribution').text(pageDashboard.sss_total.toFixed(2));

		pageDashboard.pagibig_er_share = 0;
		pageDashboard.pagibig_ee_share = 0;
		pageDashboard.pagibig_total = 0;
		$.each(pageDashboard.pagibig, function(keyPagibig, valuePagibig){

			pageDashboard.pagibig_er_share += parseInt(valuePagibig['pagibig_er_share']);
			pageDashboard.pagibig_ee_share += parseInt(valuePagibig['pagibig_ee_share']);
		});
		pageDashboard.pagibig_total = pageDashboard.pagibig_er_share + pageDashboard.pagibig_ee_share;
		pageDashboard.elem.find('.er-share').text(pageDashboard.pagibig_er_share.toFixed(2));
		pageDashboard.elem.find('.ee-share').text(pageDashboard.pagibig_ee_share.toFixed(2));
		pageDashboard.elem.find('.pagibig-total-contribution').text(pageDashboard.pagibig_total.toFixed(2));


		pageDashboard.sss_graph_content = {
		  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'], 
		  y: pageDashboard.sssPaidAmount,
		  type: 'bar',
		  marker: {
		    color: '#8EC63F',
		    opacity: 0.7
		  }
		};

		pageDashboard.sss_graph_data = [pageDashboard.sss_graph_content];

		pageDashboard.sss_graph_layout = {
		  title: 'SSS Contributions for the Year '+pageDashboard.getDate.getFullYear(),
		  xaxis: {
		    tickangle: -45
		  },
		  barmode: 'group'
		};

		Plotly.newPlot('sss-graph', pageDashboard.sss_graph_data, pageDashboard.sss_graph_layout);

		pageDashboard.pagibig_graph_content = {
		  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'], 
		  y: pageDashboard.pagibigPaidAmount,
		  type: 'bar',
		  marker: {
		    color: '#8EC63F',
		    opacity: 0.7
		  }
		};

		pageDashboard.pagibig_graph_data = [pageDashboard.pagibig_graph_content];

		pageDashboard.pagibig_graph_layout = {
		  title: 'Pag-Ibig Contributions for the Year '+pageDashboard.getDate.getFullYear(),
		  xaxis: {
		    tickangle: -45
		  },
		  barmode: 'group'
		};

		Plotly.newPlot('pagibig-graph', pageDashboard.pagibig_graph_data, pageDashboard.pagibig_graph_layout);
	});

</script>