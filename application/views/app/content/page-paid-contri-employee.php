<div id="pagePaidContriEmployee">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="emp-name"></h3>
		</div>
	</div>
	<div class="panel panel-default">
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
	</div>

	<div class="panel panel-default">
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
	</div>
</div>

<script type="text/javascript">
	var pagePaidContriEmployeeEmployee = {};
	pagePaidContriEmployee.init = function(selector, callback){
		pagePaidContriEmployee.elem = $(selector);
		pagePaidContriEmployee.emp_id = '<?php echo $id?>';

		const monthNames = ["January", "February", "March", "April", "May", "June",
							  "July", "August", "September", "October", "November", "December"
							];


		pagePaidContriEmployee.elem.find('.table-sss-paid').DataTable({
			"autowidth":false,
			"paging" : true,
			"searching": true,
			"processing": true,
			"serverSide": true,
			"pagingType": "full_numbers",
			"order": [[ 0, "desc" ]],
			"ajax":{
				"url": "<?php echo site_url('sss-paid-datatable-emp/')?>"+pagePaidContriEmployee.emp_id,
				"dataScr" : function( json ){
					return json['data'];
				}
			},
			"columnDefs": [
				{
					"targets": 0,
					"orderable": true,
					//"data":  "null",
					//"defaultContent": ""
				},
				{
					"targets": 1,
					"orderable": false,
				},
				{
					"targets": 2,
					"orderable": false
				}
			],
			"columns" : [
				{data: "year"},
				{data: "month"},
				{data: "sum"}
			],
			"drawCallback":function(settings){

				pagePaidContriEmployee.elem.find('.table-sss-paid td:nth-child(2)').each(function(){
					var elem = $(this);
					var data = JSON.parse(elem.html());
					elem.html(data);
					elem.html(monthNames[data-1]);
				});

			},
			dom:  	"<'row am-datatable-header'<'col-sm-6'l><'col-sm-6'f>>" +
					"<'row am-datatable-body'<'col-sm-12'tr>>" +
					"<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>"
		});


		pagePaidContriEmployee.elem.find('.table-pagibig-paid').DataTable({
			"autowidth":false,
			"paging" : true,
			"searching": true,
			"processing": true,
			"serverSide": true,
			"pagingType": "full_numbers",
			"order": [[ 0, "desc" ]],
			"ajax":{
				"url": "<?php echo site_url('pagibig-paid-datatable-emp/')?>"+pagePaidContriEmployee.emp_id,
				"dataScr" : function( json ){
					return json['data'];
				}
			},
			"columnDefs": [
				{
					"targets": 0,
					"orderable": true,
					//"data":  "null",
					//"defaultContent": ""
				},
				{
					"targets": 1,
					"orderable": false,
				},
				{
					"targets": 2,
					"orderable": false
				}
			],
			"columns" : [
				{data: "year"},
				{data: "month"},
				{data: "sum"}
			],
			"drawCallback":function(settings){

				pagePaidContriEmployee.elem.find('.table-pagibig-paid td:nth-child(2)').each(function(){
					var elem = $(this);
					var data = JSON.parse(elem.html());
					elem.html(data);
					elem.html(monthNames[data-1]);
				});

			},
			dom:  	"<'row am-datatable-header'<'col-sm-6'l><'col-sm-6'f>>" +
					"<'row am-datatable-body'<'col-sm-12'tr>>" +
					"<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>"
		});

		$.getJSON('<?php echo site_url('get-emp-name-notif/')?>'+pagePaidContriEmployee.emp_id, callback);
	}
	pagePaidContriEmployee.init("#pagePaidContriEmployee", function(result){
		result = result['query'];
		console.log(result);

		$.each(result, function(keyName, valueName){
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
</script>