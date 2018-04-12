<div id="pageSSSContri">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>SSS Contribution Form</h3>
		</div>
		<div class="panel-body button-print">
			<div class="pull-right">
				<button type="button" name="btnPrint" value="print" class ="btn btn-success btn-space btn-print">
						<i class="icon icon-left s7-print"></i>PRINT
				</button>
			</div>
		</div>
		<div class="panel-body button-print">
			<div class="pull-right pagination"></div>
		</div>
	</div>
	<div class="panel panel-default">
		
		<div class="panel-body form-body">
			<div class="form-sss"></div>
			<div class="test-relative">
				<input type="text" class="employerName" /><br/>
				<input type="text" class="employerAddress" />
				<input type="text" class="amountDue" /><br/>
				<input type="text" class="employerZip" /> 
				<input type="text" class="dueDate" /><br/>
				<input type="text" class="employerId" /> 
				<input type="text" class="generationDate" /><br/>

				<!-- <input type="text" class="listSummary" /> -->
				<input type="text" class="listSummary" /><br/>
				<input type="text" class="totalEmployees" /><br/>
				<input type="text" class="socialSecurity" /><br/>
				<input type="text" class="employeeCompensation" /><br/>
				<input type="text" class="total" /><br/>
				<input type="text" class="grandTotal" /><br/>
				<!-- <input type="text" class="employerAddress" /><br/>
				<input type="text" class="employerZip" /><br/>
				-->
			</div>
			<div class="print-form-sss">
				<div class="sss-image-form">
					
				</div>

				<div class="sss-form-content">
					<input type="text" class="employerName" /><br/>
					<input type="text" class="employerAddress" />
					<input type="text" class="amountDue" /><br/>
					<input type="text" class="employerZip" /> 
					<input type="text" class="dueDate" /><br/>
					<input type="text" class="employerId" /> 
					<input type="text" class="generationDate" /><br/>

					<input type="text" class="listSummary" />
					<input type="text" class="totalEmployees" />
					<input type="text" class="socialSecurity" />
					<input type="text" class="employeeCompensation" />
					<input type="text" class="total" />
					<input type="text" class="grandTotal" />
				</div>
				

			</div>
			<div class="sss-back-form">
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var pageSSSContri = {};
	pageSSSContri.ssContri = 0;
	pageSSSContri.ecContri = 0;
	pageSSSContri.totalContri = 0;
	pageSSSContri.init = function(selector, callback){
		pageSSSContri.elem = $(selector);
		pageSSSContri.elem.find('.btn-print').off("click").click(function(e){
			window.print();
		});
		const monthNames = ["January", "February", "March", "April", "May", "June",
							  "July", "August", "September", "October", "November", "December"
							];
		const monthNamesAbri = ["Jan", "Feb", "Mar", "Apr", "May", "Jun",
								  "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
								];
		pageSSSContri.getDate = new Date();

		pageSSSContri.month = pageSSSContri.getDate.getMonth();
		pageSSSContri.day = pageSSSContri.getDate.getDate();
		pageSSSContri.last = pageSSSContri.getDate.getMonth() + 1, 0;
		pageSSSContri.monthlyCompen = monthNamesAbri[pageSSSContri.month] + " " 
										+ pageSSSContri.getDate.getFullYear();

		pageSSSContri.currentDate = monthNames[pageSSSContri.month] + " " 
										+ (pageSSSContri.day<10 ? '0' : '') + pageSSSContri.day + ", " 
										+ pageSSSContri.getDate.getFullYear();
		pageSSSContri.lastDayOnly = new Date(pageSSSContri.getDate.getFullYear(), pageSSSContri.month + 1, 0);
		pageSSSContri.lastDay = monthNames[pageSSSContri.month]+ " " + pageSSSContri.lastDayOnly.getDate() + ", " + pageSSSContri.getDate.getFullYear();
		pageSSSContri.monthYear = monthNames[pageSSSContri.month] + pageSSSContri.getDate.getFullYear();
		$.getJSON('<?php echo site_url('get-data-sss')?>', function(data){
			console.log(data['employee'][0]);
			var address = data['company'][0]['company_address'];
			var countData = data['countData'];
			address = JSON.parse(address);
			var employeedata = data['employee'];
			pageSSSContri.elem.find('.employerName').val(data['company'][0]['company_name']);
			pageSSSContri.elem.find('.employerAddress').val(address.bldg_name+" "+address.house+" "+address.street_name+" "+address.subdivision+" "+address.barangay+" "+address.city);
			pageSSSContri.elem.find('.employerZip').val(address.zip_code);
			pageSSSContri.elem.find('.employerId').val(data['company'][0]['company_sss_id']);
			pageSSSContri.elem.find('.totalEmployees').val(countData);
			for(var i=0; i<countData; i++){
				//console.log(employeedata[i].ss_contribution);
				pageSSSContri.ssContri += parseInt(employeedata[i].ss_contribution);
				pageSSSContri.ecContri += parseInt(employeedata[i].ec_contribution);
			}
			pageSSSContri.totalContri = pageSSSContri.ssContri + pageSSSContri.ecContri;
			pageSSSContri.elem.find('.socialSecurity').val(pageSSSContri.ssContri);
			pageSSSContri.elem.find('.employeeCompensation').val(pageSSSContri.ecContri);
			pageSSSContri.elem.find('.employeeCompensation').val(pageSSSContri.ecContri);
			pageSSSContri.elem.find('.amountDue').val(pageSSSContri.totalContri);
			pageSSSContri.elem.find('.total').val(pageSSSContri.totalContri);
			pageSSSContri.elem.find('.grandTotal').val("Php" + pageSSSContri.totalContri);
			pageSSSContri.elem.find('.generationDate').val(pageSSSContri.currentDate);
			pageSSSContri.elem.find('.dueDate').val(pageSSSContri.lastDay);
			pageSSSContri.elem.find('.listSummary').val("Collection List Summary for the Month of " + pageSSSContri.monthYear);
			console.log(pageSSSContri.lastDay);
		});
	}

	pageSSSContri.init("#pageSSSContri", function(){

	});
</script>
