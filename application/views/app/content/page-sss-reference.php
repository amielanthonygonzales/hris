<div id = "pageSSSReference">
	
	<div tabindex="-1" role="dialog" class="modal fade in modal-sss-ref">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
				</div>
				<div class="modal-body">
					<div class="text-center">
						<div class="i-circle"><i class="icon symbol"></i></div>
						<p class="sss-ref-message"></p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" data-dismiss="modal" class="btn btn-success btn-proceed">Proceed</button>
					<button type="button" class="btn btn-success btn-yes">YES</button>
					<button type="button" data-dismiss="modal" class="btn btn-default btn-no">NO</button>
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
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>SSS Contribution Reference</h3>
		</div>
		<div class="panel-body">
			<button type="button" name="btnPrint" value="print" class ="btn btn-success btn-space btn-add pull-right">
					<i class="icon icon-left s7-plus"></i>ADD
			</button>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
			<table class="table table-hover table-bordered table-striped table-sss-reference">
				<thead>
					<tr>
						<th rowspan="3" class="table-title">Range of Compensation</th>
						<th rowspan="3" class="table-title">Monthly Salary Credit</th>
						<th colspan="4" class="table-title">Employer - Employee</th>
						<th rowspan="3" class="table-title"></th>
						<th rowspan="3" class="table-title"></th>
						
					</tr>
					<tr>
						<th colspan="3" class="table-title">Social Security</th>
						<th class="table-title">EC</th>
					</tr>
					<tr>
						<th class="table-title">ER</th>
						<th class="table-title">EE</th>
						<th class="table-title">Total</th>
						<th class="table-title">ER</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1,000 - 1,249.99</td>
						<td>1,000</td>
						<td>73.70</td>
						<td>36.30</td>
						<td>110.00</td>
						<td>10.00</td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	var pageSSSReference = {};
	pageSSSReference.init = function(selector, callback){
		pageSSSReference.elem = $(selector);
		pageSSSReference.elem.find('.table-sss-reference').DataTable({
			"autowidth":false,
			"paging" : true,
			"searching": true,
			"processing": true,
			"serverSide": true,
			"pagingType": "full_numbers",
			"order": [[ 0, "desc" ]],
			"ajax":{
				"url": "<?php echo site_url('sss-datatable')?>",
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
				{data: "ref_range_start"},
				{data: "ref_range_end"},
				{data: "ref_monthly_salary"},
				{data: "ref_er"},
				{data: "ref_ee"},
				{data: "ref_ec"},	
				{data: "ref_id"},
				{data: "ref_id"}
			],
			"drawCallback":function(settings){

			},
			dom:  	"<'row am-datatable-header'<'col-sm-6'l><'col-sm-6'f>>" +
					"<'row am-datatable-body'<'col-sm-12'tr>>" +
					"<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>"
		});

		

		pageSSSReference.elem.find('.btn-add').off("click").click(function(e){
			window.parent.location = "<?php echo base_url('add-sss-reference')?>";
		});
		callback();
	}

	pageSSSReference.init('#pageSSSReference', function(){

	});


</script>