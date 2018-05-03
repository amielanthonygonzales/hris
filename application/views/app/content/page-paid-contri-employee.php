<div id="pagePaidContriEmployee">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="emp-name"></h3>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<div class="info-block panel panel-default">
				<div class="panel-heading">
					<h3>Paid Contribution List for SSS</h3>
				</div>
				<div class="panel-body">
					<div id="sss-graph"></div>
					<div class="contri-content">
						<table class="no-border no-strip skills">
							<tbody class="no-border-x no-border-y">
								<tr>
									<td class="item">
										January
									</td>
									<td class="jan amount-contri">
										34
									</td>
								</tr>
								<tr>
									<td class="item">
										February
									</td>
									<td class="feb amount-contri">
										67
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="info-block panel panel-default">
				<div class="panel-heading">
					<h3>Paid Contribution List for Pag-Ibig</h3>
				</div>
				<div class="panel-body">
					<div id="sss-graph"></div>
					<div class="contri-content">
						<table class="no-border no-strip skills">
							<tbody class="no-border-x no-border-y">
								<tr>
									<td class="item">
										January
									</td>
									<td class="jan amount-contri">
										34
									</td>
								</tr>
								<tr>
									<td class="item">
										February
									</td>
									<td class="feb amount-contri">
										67
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="panel panel-default">
		<div class="panel-heading">
			<h3>Paid Contribution List for SSS</h3>
		</div>
		<div class="panel-body">
			<table class="table table-striped table-hover table-fw-widget table-sss-paid">
				<thead>
					<tr>
						<th>Year</th>
						<th>Month</th>
						<th>Amount</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div> -->

	<!-- <div class="panel panel-default">
		<div class="panel-heading">
			<h3>Paid Contribution List for Pag-Ibig</h3>
		</div>
		<div class="panel-body">
			<table class="table table-striped table-hover table-fw-widget table-pagibig-paid">
				<thead>
					<tr>
						<th>Year</th>
						<th>Month</th>
						<th>Amount</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div> -->
</div>

<script type="text/javascript">
	var pagePaidContriEmployeeEmployee = {};
	pagePaidContriEmployee.init = function(selector, callback){
		pagePaidContriEmployee.elem = $(selector);
		pagePaidContriEmployee.emp_id = '<?php echo $id?>';
		pagePaidContriEmployee.pagibigEE = 0;
		pagePaidContriEmployee.pagibigER = 0;
		pagePaidContriEmployee.pagibigPaidMonth = [];
		pagePaidContriEmployee.pagibigPaidAmount = [];

		const monthNames = ["January", "February", "March", "April", "May", "June",
							  "July", "August", "September", "October", "November", "December"
							];


		// pagePaidContriEmployee.elem.find('.table-sss-paid').DataTable({
		// 	"autowidth":false,
		// 	"paging" : true,
		// 	"searching": true,
		// 	"processing": true,
		// 	"serverSide": true,
		// 	"pagingType": "full_numbers",
		// 	"order": [[ 0, "desc" ]],
		// 	"ajax":{
		// 		"url": "<?php echo site_url('sss-paid-datatable-emp/')?>"+pagePaidContriEmployee.emp_id,
		// 		"dataScr" : function( json ){
		// 			return json['data'];
		// 		}
		// 	},
		// 	"columnDefs": [
		// 		{
		// 			"targets": 0,
		// 			"orderable": true,
		// 			//"data":  "null",
		// 			//"defaultContent": ""
		// 		},
		// 		{
		// 			"targets": 1,
		// 			"orderable": false,
		// 		},
		// 		{
		// 			"targets": 2,
		// 			"orderable": false
		// 		}
		// 	],
		// 	"columns" : [
		// 		{data: "year"},
		// 		{data: "month"},
		// 		{data: "sum"}
		// 	],
		// 	"drawCallback":function(settings){

		// 		pagePaidContriEmployee.elem.find('.table-sss-paid td:nth-child(2)').each(function(){
		// 			var elem = $(this);
		// 			var data = JSON.parse(elem.html());
		// 			elem.html(data);
		// 			elem.html(monthNames[data-1]);
		// 		});

		// 	},
		// 	dom:  	"<'row am-datatable-header'<'col-sm-6'l><'col-sm-6'f>>" +
		// 			"<'row am-datatable-body'<'col-sm-12'tr>>" +
		// 			"<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>"
		// });


		// pagePaidContriEmployee.elem.find('.table-pagibig-paid').DataTable({
		// 	"autowidth":false,
		// 	"paging" : true,
		// 	"searching": true,
		// 	"processing": true,
		// 	"serverSide": true,
		// 	"pagingType": "full_numbers",
		// 	"order": [[ 0, "desc" ]],
		// 	"ajax":{
		// 		"url": "<?php echo site_url('pagibig-paid-datatable-emp/')?>"+pagePaidContriEmployee.emp_id,
		// 		"dataScr" : function( json ){
		// 			return json['data'];
		// 		}
		// 	},
		// 	"columnDefs": [
		// 		{
		// 			"targets": 0,
		// 			"orderable": true,
		// 			//"data":  "null",
		// 			//"defaultContent": ""
		// 		},
		// 		{
		// 			"targets": 1,
		// 			"orderable": false,
		// 		},
		// 		{
		// 			"targets": 2,
		// 			"orderable": false
		// 		}
		// 	],
		// 	"columns" : [
		// 		{data: "year"},
		// 		{data: "month"},
		// 		{data: "sum"}
		// 	],
		// 	"drawCallback":function(settings){

		// 		pagePaidContriEmployee.elem.find('.table-pagibig-paid td:nth-child(2)').each(function(){
		// 			var elem = $(this);
		// 			var data = JSON.parse(elem.html());
		// 			elem.html(data);
		// 			elem.html(monthNames[data-1]);
		// 		});

		// 	},
		// 	dom:  	"<'row am-datatable-header'<'col-sm-6'l><'col-sm-6'f>>" +
		// 			"<'row am-datatable-body'<'col-sm-12'tr>>" +
		// 			"<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>"
		// });

		$.getJSON('<?php echo site_url('get-emp-name-notif/')?>'+pagePaidContriEmployee.emp_id, callback);
	}
	pagePaidContriEmployee.init("#pagePaidContriEmployee", function(result){
		pagePaidContriEmployee.x = 0;
		pagePaidContriEmployee.empQuery = result['query'];
		pagePaidContriEmployee.sssPaid = result['querySSS'];
		pagePaidContriEmployee.pagibigPaid = result['queryPagibig'];
		pagePaidContriEmployee.pagibigTotalPaid = 0;
		
		
		$.each(pagePaidContriEmployee.pagibigPaid, function(keyPagibig, valPagibig){
			
			for(pagePaidContriEmployee.x = 0; 
				pagePaidContriEmployee.x < $.parseJSON(valPagibig['paid_employee']).length; 
				pagePaidContriEmployee.x++){

				if($.parseJSON(valPagibig['paid_employee'])[pagePaidContriEmployee.x]['pagibig_emp_id'] == pagePaidContriEmployee.emp_id){
					pagePaidContriEmployee.pagibigEE = parseInt($.parseJSON(valPagibig['paid_employee'])[pagePaidContriEmployee.x]['pagibig_ee_share']);
					pagePaidContriEmployee.pagibigER = parseInt($.parseJSON(valPagibig['paid_employee'])[pagePaidContriEmployee.x]['pagibig_er_share']);
					pagePaidContriEmployee.pagibigTotalPaid = pagePaidContriEmployee.pagibigER + pagePaidContriEmployee.pagibigEE;
				}
			}

		});

		$.each(pagePaidContriEmployee.empQuery, function(keyName, valueName){
			pagePaidContriEmployee.elem.find('.emp-name').text(
				valueName['emp_last_name'] 
				+ ", " 
				+ valueName['emp_first_name'] 
				+ " " 
				+ valueName['emp_middle_name'] 
				+ " " 
				+ valueName['emp_ext_name']);
		});
	});

	pagePaidContriEmployee.sss_graph_content = {
		  x: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'], 
		  y: [45,43,54,76,42,6,87,23,5,67,4,56],
		  type: 'bar',
		  marker: {
		    color: '#8EC63F',
		    opacity: 0.7
		  }
		};

		pagePaidContriEmployee.sss_graph_data = [pagePaidContriEmployee.sss_graph_content];

		pagePaidContriEmployee.sss_graph_layout = {
		  title: 'SSS Contributions for the Year ',
		  xaxis: {
		    tickangle: -45
		  },
		  barmode: 'group'
		};

		Plotly.newPlot('sss-graph', pagePaidContriEmployee.sss_graph_data, pagePaidContriEmployee.sss_graph_layout);
</script>