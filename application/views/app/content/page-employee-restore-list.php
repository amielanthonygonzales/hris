<div id="pageEmployeeRestoreList">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>List of Employee to Restore</h3>
		</div>
		<div class="panel-body">
			<table class="table employeeRestoreList">
				<thead>
					<th>Id Number</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Extension Name</th>
					<th></th>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
	
</div>

<script type="text/javascript">
	var pageEmployeeRestoreList = {};

	pageEmployeeRestoreList.init = function(selector, callback){
		pageEmployeeRestoreList.elem = $(selector);

		pageEmployeeRestoreList.elem.find('.employeeRestoreList').DataTable({
			"autowidth":true,
			"paging" : true,
			"searching": true,
			"processing": true,
			"serverSide": true,
			"orderable": true,
			"pagingType": "full_numbers",
			"order": [[ 0, "desc" ]],
			"ajax":{
				"url": "<?php echo site_url('get-emp-deleted')?>",
				"dataScr" : function( json ){
					return json['data'];
				}
			},"columnDefs": [
				{
					"targets": 0,
					"orderable": true,
					//"data":  "null",
					//"defaultContent": ""
				},
				{
					"targets": 1,
					"orderable": true,
				},
				{
					"targets": 2,
					"orderable": true,
				},
				{
					"targets": 3,
					"orderable": false,
				},
				{
					"targets": 4,
					"orderable": false,
				},
				{
					"width": "2%",
					"targets": 5,
					"orderable": false,
				}
			],
			"columns" : [
				{data: "emp_id"},
				{data: "emp_last_name"},
				{data: "emp_first_name"},
				{data: "emp_middle_name"},
				{data: "emp_ext_name"},
				{data: "emp_id"}
			],
			"drawCallback":function(settings){

				pageEmployeeRestoreList.elem.find('.employeeRestoreList td:nth-child(6)').each(function(){
					var elem = $(this);
					var data = JSON.parse(elem.html());
					console.log(data);
					elem.html("<a href='<?php echo base_url('employee-restore/')?>"+data+"' class='icon icon-left s7-note text-success'></a>");
				});

			},
			dom:  	"<'row am-datatable-header'<'col-sm-6'l><'col-sm-6'f>>" +
					"<'row am-datatable-body'<'col-sm-12'tr>>" +
					"<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>"
		});
		callback();
	}

	pageEmployeeRestoreList.init("#pageEmployeeRestoreList", function(){

	});
</script>