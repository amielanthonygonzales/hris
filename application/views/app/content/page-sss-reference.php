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
						<th rowspan="2" colspan="2" class="table-title">Range of Compensation</th>
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
						<th class="table-title">From</th>
						<th class="table-title">To</th>
						<th class="table-title">ER</th>
						<th class="table-title">EE</th>
						<th class="table-title">Total</th>
						<th class="table-title">ER</th>
					</tr>
				</thead>
				<tbody>

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
			"ajax":{
				"url": "<?php echo site_url('sss-datatable')?>",
				"dataScr" : function( json ){
					return json['data'];
				}
			},
			"columnDefs": [
				{
					"targets": 0,
					"orderable": false,
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
				{data: "sum"},
				{data: "ref_ec"},	
				{data: "ref_id"},
				{data: "ref_id"}
			],
			"drawCallback":function(settings){
				pageSSSReference.elem.find('.table-sss-reference td:nth-child(6)').each(function(){
					var elem = $(this);
					var data = JSON.parse(elem.html());
					console.log(elem.html());
				});
				pageSSSReference.elem.find('.table-sss-reference td:nth-child(8)').each(function(){
					var elem = $(this);
					var data = JSON.parse(elem.html());
						elem.html(data);
					elem.html("<a class='icon icon-left s7-note text-success'></a>").off("click").click(function(){
						window.parent.location = "<?php echo base_url('add-sss-reference/')?>"+"edit/"+data;
					});
				});
				pageSSSReference.elem.find('.table-sss-reference td:nth-child(9)').each(function(){
					var elem = $(this);
					var data = JSON.parse(elem.html());
						elem.html(data);
					elem.html("<a class='icon icon-left s7-trash text-danger'></a>").off("click").click(function(){
						pageSSSReference.elem.find('.i-circle').removeClass('text-success').addClass('text-danger');
						pageSSSReference.elem.find('.symbol').removeClass('s7-check').addClass('s7-attention');
						pageSSSReference.elem.find('.sss-ref-message').html('Are you sure you want to delete this data!');
						pageSSSReference.elem.find('.btn-proceed').hide();
						pageSSSReference.elem.find('.btn-yes').show().off("click").click(function(e){
							$.ajax({
								method: "POST",
								url: "<?php echo base_url('delete-reference/')?>" + data,
								success: function(result){
									if(result.success){
										pageSSSReference.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
										pageSSSReference.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
										pageSSSReference.elem.find('.btn-proceed').show();
										pageSSSReference.elem.find('.btn-yes').hide();
										pageSSSReference.elem.find('.btn-no').hide();
										pageSSSReference.elem.find('.sss-ref-message').html('Data successfully deleted!');
										pageSSSReference.elem.find('.modal-sss-ref').modal();
									}
								}
							});
						});
						pageSSSReference.elem.find('.btn-no').show();
						pageSSSReference.elem.find('.modal-sss-ref').modal();
					});
				});
			},
			dom:  	"<'row am-datatable-header'<'col-sm-6'l><'col-sm-6'f>>" +
					"<'row am-datatable-body'<'col-sm-12'tr>>" +
					"<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>"
		});


		

		pageSSSReference.elem.find('.btn-add').off("click").click(function(e){
			window.parent.location = "<?php echo base_url('add-sss-reference/')?>"+"add/0" ;
		});
		callback();
	}

	pageSSSReference.init('#pageSSSReference', function(){

	});


</script>