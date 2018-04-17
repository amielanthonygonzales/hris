<div id="pageSSSContri">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>SSS Contribution Form</h3>
		</div>
		<div class="panel-body button-print">
			<div class="pull-right">
				<button type="button" name="btnPageOne" value="page-one" class ="btn btn-success btn-space btn-page-one">
						<i class="icon icon-left s7-file"></i>PAGE 1
				</button>
				<button type="button" name="btnPageTwo" value="page-two" class ="btn btn-success btn-space btn-page-two">
						<i class="icon icon-left s7-file"></i>PAGE 2
				</button>
				<button type="button" name="btnPrint" value="print" class ="btn btn-success btn-space btn-print">
						<i class="icon icon-left s7-print"></i>PRINT
				</button>
			</div>
		</div>
		<div class="panel-body button-print">
			<div class="pull-right pagination">
			</div>
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

				<input type="text" class="employerName bankCopyName" /><br/>
				<input type="text" class="employerId bankCopyEmployerId"/> 
				<input type="text" class="bankCopySummaryMonth"/> 
				<!-- <input type="text" class="employerAddress" /><br/>
				<input type="text" class="employerZip" /><br/>
				-->
			</div>

			<div class="form-sss-second"></div>
			<div class="test-relative-second">
				<input type="text" class="employerId secondPageEmployerId" /> 
				<input type="text" class="bankCopySummaryMonth secondPageSummaryMonth"/> 
				<table class="table-striped table-bordered">
					<thead>
						<th></th>
						<th>Name</th>
						<th>SS No</th>
						<th>SS</th>
						<th>EC</th>
						<th>Total Contribution</th>
					</thead>
					<tbody class="employeeList">
					</tbody>
					<tfoot>
						<td class="tableFooter" colspan="6">Footer</td>
					</tfoot>
				</table>
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

					<input type="text" class="employerName bankCopyName" /><br/>
					<input type="text" class="employerId bankCopyEmployerId"/> 
					<input type="text" class="bankCopySummaryMonth"/> 
				</div>

			</div>

			<div class="print-second-page">
				<div class="print-form-sss-second">
				</div>
				<div class="print-test-relative-second">
					<input type="text" class="employerId secondPageEmployerId" /> 
					<input type="text" class="bankCopySummaryMonth secondPageSummaryMonth"/> 
					<table class="table-striped table-bordered">
						<thead>
							<th></th>
							<th>Name</th>
							<th>SS No</th>
							<th>SS</th>
							<th>EC</th>
							<th>Total Contribution</th>
						</thead>
						<tbody class="employeeList">
						</tbody>
						<tfoot>
							<td class="tableFooter" colspan="6">Footer</td>
						</tfoot>
					</table>
				</div>
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
		pageSSSContri.pageInt = 0;
		pageSSSContri.inputCount = 0;
		pageSSSContri.page = 0;

		pageSSSContri.elem.find('.form-sss-second').hide();
		pageSSSContri.elem.find('.test-relative-second').hide();
		pageSSSContri.elem.find('.btn-page-one').hide();
		pageSSSContri.elem.find('.pagination').hide();

		pageSSSContri.elem.find('.btn-page-two').off("click").click(function(e){
			pageSSSContri.elem.find('.form-sss').hide();
			pageSSSContri.elem.find('.test-relative').hide();
			pageSSSContri.elem.find('.btn-page-two').hide();
			pageSSSContri.elem.find('.form-sss-second').show();
			pageSSSContri.elem.find('.test-relative-second').show();
			pageSSSContri.elem.find('.btn-page-one').show();
			pageSSSContri.elem.find('.pagination').show();
			
		});

		pageSSSContri.elem.find('.btn-page-one').off("click").click(function(e){
			pageSSSContri.elem.find('.form-sss').show();
			pageSSSContri.elem.find('.test-relative').show();
			pageSSSContri.elem.find('.btn-page-two').show();
			pageSSSContri.elem.find('.form-sss-second').hide();
			pageSSSContri.elem.find('.test-relative-second').hide();
			pageSSSContri.elem.find('.btn-page-one').hide();
			pageSSSContri.elem.find('.pagination').hide();
		});
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
		pageSSSContri.lastDay = monthNames[pageSSSContri.month] + " " 
							  + pageSSSContri.lastDayOnly.getDate() + ", " 
							  + pageSSSContri.getDate.getFullYear();

		pageSSSContri.monthYear = monthNames[pageSSSContri.month] + " " + pageSSSContri.getDate.getFullYear();

		pageSSSContri.pageNumber = 0;

		if(pageSSSContri.pageNumber <= 0){
			pageSSSContri.pageNumber = 1;
		}

		$.getJSON('<?php echo site_url('get-data-sss')?>' + "/" + pageSSSContri.pageNumber, callback);
	}

	pageSSSContri.init("#pageSSSContri", function(data){
		pageSSSContri.populate(data);
	});

	pageSSSContri.populate = function(data){
		pageSSSContri.page = parseInt(data.count);
		pageSSSContri.page = Math.ceil(pageSSSContri.page/30);

			pageSSSContri.elem.find('.pagination').html('');

		for(pageSSSContri.pageInt = 1; pageSSSContri.pageInt<= pageSSSContri.page;pageSSSContri.pageInt++){
			pageSSSContri.createButton = $('<button></button>');
			pageSSSContri.createButton.attr('type','button');
			pageSSSContri.createButton.attr('class','btn btn-success btn-space paginationButton')
			if(data.page == pageSSSContri.pageInt){
				pageSSSContri.createButton.addClass('active');
			}
			pageSSSContri.createButton.html(pageSSSContri.pageInt);
			pageSSSContri.createButton.off("click").click(function(e){
			
				pageSSSContri.pageNumber = $(this).text();

				pageSSSContri.elem.find('.employeeList tr').remove();
				 $.getJSON('<?php echo site_url('get-data-sss')?>' + "/" + pageSSSContri.pageNumber, pageSSSContri.populate);
				
			});
			pageSSSContri.elem.find('.pagination').append(pageSSSContri.createButton);

		}

		console.log(data['employee'][0]);
			var address = data['company'][0]['company_address'];
			var countData = data['countData'];
			address = JSON.parse(address);
			var employeedata = data['employee'];
			pageSSSContri.elem.find('.employerName').val(data['company'][0]['company_name'].toUpperCase());
			pageSSSContri.elem.find('.employerAddress').val(address.bldg_name.toUpperCase()+" "+address.house.toUpperCase()+" "+address.street_name.toUpperCase()+" "+address.subdivision.toUpperCase()+" "+address.barangay.toUpperCase()+" "+address.city.toUpperCase());
			pageSSSContri.elem.find('.employerZip').val(address.zip_code);
			pageSSSContri.elem.find('.employerId').val(data['company'][0]['company_sss_id']);
			pageSSSContri.elem.find('.totalEmployees').val(data.count);
			for(var i=0; i<countData; i++){
				//console.log(employeedata[i].ss_contribution);
				pageSSSContri.ssContri += parseInt(employeedata[i].ss_contribution);
				pageSSSContri.ecContri += parseInt(employeedata[i].ec_contribution);
			}
			pageSSSContri.totalContri = pageSSSContri.ssContri + pageSSSContri.ecContri;
			pageSSSContri.elem.find('.socialSecurity').val(pageSSSContri.ssContri);
			pageSSSContri.elem.find('.employeeCompensation').val(pageSSSContri.ecContri);
			pageSSSContri.elem.find('.employeeCompensation').val(pageSSSContri.ecContri);
			pageSSSContri.elem.find('.generationDate').val(pageSSSContri.currentDate);
			pageSSSContri.elem.find('.dueDate').val(pageSSSContri.lastDay);
			pageSSSContri.elem.find('.listSummary').val("Collection List Summary for the Month of " + pageSSSContri.monthYear);
			pageSSSContri.elem.find('.bankCopySummaryMonth').val(pageSSSContri.monthYear);

			pageSSSContri.employeeInfo = data['employee'];
			pageSSSContri.allEmployeeInfo = data['allEmployee'];

			$.each(pageSSSContri.employeeInfo, function(keyEmployee, valueEmployee){
				keyEmployee += +1;

				pageSSSContri.trEmployee = $('<tr></tr>');
				pageSSSContri.trEmployee.attr('class', 'clearField tableTr'+keyEmployee);
				pageSSSContri.elem.find('.employeeList').append(pageSSSContri.trEmployee);

				pageSSSContri.tdEmployeeId = $('<td></td>');
				pageSSSContri.tdEmployeeId.attr('class', 'tableCountNo');
				pageSSSContri.tdEmployeeId.html(keyEmployee);
				pageSSSContri.elem.find('.tableTr'+keyEmployee).append(pageSSSContri.tdEmployeeId);

				pageSSSContri.tdEmployeeName = $('<td></td>');
				pageSSSContri.tdEmployeeName.attr('class', 'tableName');
				pageSSSContri.tdEmployeeName.html(valueEmployee['emp_last_name'].toUpperCase() + ", " 
												+ valueEmployee['emp_first_name'].toUpperCase() + " " 
												+ valueEmployee['emp_ext_name'].toUpperCase() + " " 
												+ valueEmployee['emp_middle_name'].toUpperCase());
				pageSSSContri.elem.find('.tableTr'+keyEmployee).append(pageSSSContri.tdEmployeeName);

				pageSSSContri.tdEmployeeSSNo = $('<td></td>');
				pageSSSContri.tdEmployeeSSNo.attr('class', 'tableAccountNo');
				pageSSSContri.tdEmployeeSSNo.html(valueEmployee['sss_no']);
				pageSSSContri.elem.find('.tableTr'+keyEmployee).append(pageSSSContri.tdEmployeeSSNo);

				pageSSSContri.tdEmployeeSSContri = $('<td></td>');
				pageSSSContri.tdEmployeeSSContri.attr('class', 'amountContri tableSSContri');
				pageSSSContri.tdEmployeeSSContri.html(valueEmployee['ss_contribution'] + ".00");
				pageSSSContri.elem.find('.tableTr'+keyEmployee).append(pageSSSContri.tdEmployeeSSContri);

				pageSSSContri.tdEmployeeECContri = $('<td></td>');
				pageSSSContri.tdEmployeeECContri.attr('class', 'amountContri tableECContri');
				pageSSSContri.tdEmployeeECContri.html(valueEmployee['ec_contribution'] + ".00");
				pageSSSContri.elem.find('.tableTr'+keyEmployee).append(pageSSSContri.tdEmployeeECContri);

				pageSSSContri.employeeSSContri = 0;
				pageSSSContri.employeeECContri = 0;

				pageSSSContri.employeeTotalContri = parseInt(valueEmployee['ss_contribution']) + parseInt(valueEmployee['ec_contribution']);

				pageSSSContri.tdEmployeeTotalContri = $('<td></td>');
				pageSSSContri.tdEmployeeTotalContri.attr('class', 'amountContri tableTotalContri');
				pageSSSContri.tdEmployeeTotalContri.html(pageSSSContri.employeeTotalContri + ".00");
				pageSSSContri.elem.find('.tableTr'+keyEmployee).append(pageSSSContri.tdEmployeeTotalContri);
			});

			pageSSSContri.ssContribution = 0;
			pageSSSContri.ecContribution = 0;
			pageSSSContri.totalSSContri = 0;
			$.each(pageSSSContri.allEmployeeInfo, function(keyAll, valueAll){
				console.log(valueAll);
				pageSSSContri.ssContribution += +parseInt(valueAll['ss_contribution']);
				pageSSSContri.ecContribution += + parseInt(valueAll['ec_contribution']);
			});
			pageSSSContri.totalSSContri = pageSSSContri.ssContribution + pageSSSContri.ecContribution;

			pageSSSContri.elem.find('.amountDue').val(pageSSSContri.totalSSContri + ".00");
			pageSSSContri.elem.find('.grandTotal').val("Php " + pageSSSContri.totalSSContri + ".00");
			pageSSSContri.elem.find('.total').val(pageSSSContri.totalSSContri + ".00");
			pageSSSContri.elem.find('.employeeCompensation').val(pageSSSContri.ecContribution + ".00");
			pageSSSContri.elem.find('.socialSecurity').val(pageSSSContri.ssContribution + ".00");

	}
</script>
