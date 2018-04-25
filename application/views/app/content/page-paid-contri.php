<div id="pagePaidContri">
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
	var pagePaidContri = {};
	pagePaidContri.init = function(selector, callback){
		pagePaidContri.elem = $(selector);

		const monthNames = ["January", "February", "March", "April", "May", "June",
							  "July", "August", "September", "October", "November", "December"
							];


		pagePaidContri.elem.find('.table-sss-paid').DataTable({
			"autowidth":false,
			"paging" : true,
			"searching": true,
			"processing": true,
			"serverSide": true,
			"pagingType": "full_numbers",
			"order": [[ 0, "desc" ]],
			"ajax":{
				"url": "<?php echo site_url('sss-paid-datatable')?>",
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
				{data: "amount"}
			],
			"drawCallback":function(settings){

				pagePaidContri.elem.find('.table-sss-paid td:nth-child(2)').each(function(){
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


		pagePaidContri.elem.find('.table-pagibig-paid').DataTable({
			"autowidth":false,
			"paging" : true,
			"searching": true,
			"processing": true,
			"serverSide": true,
			"pagingType": "full_numbers",
			"order": [[ 0, "desc" ]],
			"ajax":{
				"url": "<?php echo site_url('pagibig-paid-datatable')?>",
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
				{data: "amount"}
			],
			"drawCallback":function(settings){

				pagePaidContri.elem.find('.table-pagibig-paid td:nth-child(2)').each(function(){
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


		callback();
	}
	pagePaidContri.init("#pagePaidContri", function(){

	});
</script>