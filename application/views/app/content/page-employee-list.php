<div id="pageEmployeeList">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>List of Employee</h3>
		</div>
		<div class="panel-body">
			<table class="table employeeList">
				<thead>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Ext Name</th>
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
		$.getJSON('<?php echo site_url('get-all-employee')?>', callback);
	}

	pageEmployeeList.init("#pageEmployeeList", function(result){
		result = result['query'];
		console.log(result);
		$.each(result, function(key, value){
			var employeeName = jQuery.parseJSON(value['emp_name']);
			var trEmployeeList = $('<tr></tr>');
			trEmployeeList.attr('class', key);
			pageEmployeeList.elem.find('.employeeList tbody').append(trEmployeeList);

			var tdLastName = $('<td></td>');
			tdLastName.html(employeeName['last_name']);
			pageEmployeeList.elem.find('.'+key).append(tdLastName);

			var tdFirstName = $('<td></td>');
			tdFirstName.html(employeeName['first_name']);
			pageEmployeeList.elem.find('.'+key).append(tdFirstName);

			var tdMiddleName = $('<td></td>');
			tdMiddleName.html(employeeName['middle_name']);
			pageEmployeeList.elem.find('.'+key).append(tdMiddleName);

			var tdExtName = $('<td></td>');
			tdExtName.html(employeeName['ext_name']);
			pageEmployeeList.elem.find('.'+key).append(tdExtName);

			var tdViewAction = $('<td><a></a></td>');
			tdViewAction.find('a').attr('href', '<?php echo base_url('employee/')?>'+value['emp_id']+"/view");
			tdViewAction.find('a').attr('class', 'icon icon-left s7-look text-info');
			pageEmployeeList.elem.find('.'+key).append(tdViewAction);

			var tdViewAction = $('<td><a></a></td>');
			tdViewAction.find('a').attr('href', '<?php echo base_url('employee/')?>'+value['emp_id']+"/edit");
			tdViewAction.find('a').attr('class', 'icon icon-left s7-note');
			pageEmployeeList.elem.find('.'+key).append(tdViewAction);

			var tdViewAction = $('<td><a></a></td>');
			tdViewAction.find('a').attr('href', '<?php echo base_url('employee/')?>'+value['emp_id']);
			tdViewAction.find('a').attr('class', 'icon icon-left s7-trash text-danger');
			pageEmployeeList.elem.find('.'+key).append(tdViewAction);

		});
	});
</script>