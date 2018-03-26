<div id="pageEmployeeList">
	<div tabindex="-1" role="dialog" class="modal fade in modal-department">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
				</div>
				<div class="modal-body">
					<div class="text-center">
						<div class="i-circle"><i class="icon symbol"></i></div>
						<p class="message"></p>
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
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>List of Employee</h3>
		</div>
		<div class="panel-body">
			<table class="table employeeList">
				<thead>
					<th>Id Number</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Extension Name</th>
					<th></th>
					<th></th>
					<th></th>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</div>

<script type="text/javascript">
	var pageEmployeeList = {};
	pageEmployeeList.init = function(selector, callback){
		pageEmployeeList.elem = $(selector);

		pageEmployeeList.elem.find('.employeeList').DataTable({
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
				{data: "emp_ext_name"},
				{data: "emp_id"},
				{data: "emp_id"},
				{data: "emp_id"}
			],
			"drawCallback":function(settings){
				pageEmployeeList.elem.find('.employeeList td:nth-child(6)').each(function(){
					var elem = $(this);
					var data = JSON.parse(elem.html());
					console.log(data);
					elem.html("<a href='<?php echo base_url('employee/')?>"+data+"/view"+"' class='icon icon-left s7-look text-info'></a>");
				});
				pageEmployeeList.elem.find('.employeeList td:nth-child(7)').each(function(){
					var elem = $(this);
					var data = JSON.parse(elem.html());
					console.log(data);
					elem.html("<a href='<?php echo base_url('employee/')?>"+data+"/edit"+"' class='icon icon-left s7-note text-success'></a>");
				});
				pageEmployeeList.elem.find('.employeeList td:nth-child(8)').each(function(){
					var elem = $(this);
					var data = JSON.parse(elem.html());
					console.log(data);
					elem.html("<a class='icon icon-left s7-trash text-danger employee-delete'></a>").off("click").click(function(e){
							pageEmployeeList.elem.find('.i-circle').removeClass('text-success').addClass('text-danger');
							pageEmployeeList.elem.find('.symbol').removeClass('s7-check').addClass('s7-attention');
							pageEmployeeList.elem.find('.message').html('Are you sure you want to delete this data!');
							pageEmployeeList.elem.find('.btn-proceed').hide();
							pageEmployeeList.elem.find('.btn-yes').show().off("click").click(function(e){
								console.log(data);
								$.ajax({
									method: "POST",
									url: "<?php echo base_url('delete-employee/')?>" + data,
									success: function(result){
										if(result.success){
											pageEmployeeList.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
											pageEmployeeList.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
											pageEmployeeList.elem.find('.btn-proceed').show();
											pageEmployeeList.elem.find('.btn-yes').hide();
											pageEmployeeList.elem.find('.btn-no').hide();
											pageEmployeeList.elem.find('.message').html('Data successfully deleted!');
											pageEmployeeList.elem.find('.modal-department').modal();
											
										}
									}
								});
							});
							pageEmployeeList.elem.find('.btn-no').show();
							pageEmployeeList.elem.find('.modal-department').modal();
						});
						
				});


			},
			dom:  	"<'row am-datatable-header'<'col-sm-6'l><'col-sm-6'f>>" +
					"<'row am-datatable-body'<'col-sm-12'tr>>" +
					"<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>"
		});

		pageEmployeeList.elem.find('.employee-delete').off("click").click(function(e){
			alert('data');
		});
		// $.getJSON('<?php echo site_url('get-all-employee')?>', callback);
	}

	pageEmployeeList.init("#pageEmployeeList", function(){

		

				// pageEmployeeList.elem.find('.employeeList td:nth-child(3)').each(function(){
				// 	var elem = $(this);
    //         			var id = elem.html();
            	
				// });

		// result = result['query'];
		// console.log(result);
		// $.each(result, function(key, value){
		// 	var employeeName = jQuery.parseJSON(value['emp_name']);
		// 	var trEmployeeList = $('<tr></tr>');
		// 	trEmployeeList.attr('class', key);
		// 	pageEmployeeList.elem.find('.employeeList tbody').append(trEmployeeList);

		// 	var tdLastName = $('<td></td>');
		// 	tdLastName.html(employeeName['last_name']);
		// 	pageEmployeeList.elem.find('.'+key).append(tdLastName);

		// 	var tdFirstName = $('<td></td>');
		// 	tdFirstName.html(employeeName['first_name']);
		// 	pageEmployeeList.elem.find('.'+key).append(tdFirstName);

		// 	var tdMiddleName = $('<td></td>');
		// 	tdMiddleName.html(employeeName['middle_name']);
		// 	pageEmployeeList.elem.find('.'+key).append(tdMiddleName);

		// 	var tdExtName = $('<td></td>');
		// 	tdExtName.html(employeeName['ext_name']);
		// 	pageEmployeeList.elem.find('.'+key).append(tdExtName);

		// 	var tdViewAction = $('<td><a></a></td>');
		// 	tdViewAction.find('a').attr('href', '<?php echo base_url('employee/')?>'+value['emp_id']+"/view");
		// 	tdViewAction.find('a').attr('class', 'icon icon-left s7-look text-info');
		// 	pageEmployeeList.elem.find('.'+key).append(tdViewAction);

		// 	var tdViewAction = $('<td><a></a></td>');
		// 	tdViewAction.find('a').attr('href', '<?php echo base_url('employee/')?>'+value['emp_id']+"/edit");
		// 	tdViewAction.find('a').attr('class', 'icon icon-left s7-note');
		// 	pageEmployeeList.elem.find('.'+key).append(tdViewAction);

		// 	var tdViewAction = $('<td><a></a></td>');
		// 	tdViewAction.find('a').attr('class', 'icon icon-left s7-trash text-danger employee-delete');
			// tdViewAction.find('a').off("click").click(function(e){
			// 	pageEmployeeList.elem.find('.i-circle').removeClass('text-success').addClass('text-danger');
			// 	pageEmployeeList.elem.find('.symbol').removeClass('s7-check').addClass('s7-attention');
			// 	pageEmployeeList.elem.find('.message').html('Are you sure you want to delete this data!');
			// 	pageEmployeeList.elem.find('.btn-proceed').hide();
			// 	pageEmployeeList.elem.find('.btn-yes').show().off("click").click(function(e){
			// 		$.ajax({
			// 			method: "POST",
			// 			url: "<?php echo base_url('delete-employee/')?>" + value['emp_id'],
			// 			success: function(result){
			// 				if(result.success){
			// 					pageEmployeeList.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
			// 					pageEmployeeList.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
			// 					pageEmployeeList.elem.find('.btn-proceed').show();
			// 					pageEmployeeList.elem.find('.btn-yes').hide();
			// 					pageEmployeeList.elem.find('.btn-no').hide();
			// 					pageEmployeeList.elem.find('.message').html('Data successfully deleted!');
			// 					pageEmployeeList.elem.find('.modal-department').modal();
								
			// 				}
			// 			}
			// 		});
			// 	});
			// 	pageEmployeeList.elem.find('.btn-no').show();
			// 	pageEmployeeList.elem.find('.modal-department').modal();
			// });
		// 	pageEmployeeList.elem.find('.'+key).append(tdViewAction);

		// });
	});
</script>