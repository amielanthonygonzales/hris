<div id="pageEmployeeList">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>List of Employee</h3>
		</div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Ext Name</th>
				</thead>
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
	});
</script>