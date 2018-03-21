<div id="pageDepartment">
	<div tabindex="-1" role="dialog" class="modal fade in modal-department">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
				</div>
				<div class="modal-body">
					<div class="text-center">
						<div class="i-circle text-success"><i class="icon s7-check"></i></div>
						<h4>Awesome!</h4>
						<p>Changes has been saved successfully!</p>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" data-dismiss="modal" class="btn btn-success">Proceed</button>
				</div>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Add Department</h3>
		</div>
		<div class="panel-body">
			<div class="col-md-12">
			</div>
				<div class="input-group col-md-12">
					<input type="text" name="dept_name" placeholder="Department Name" class="form-control dept_name"/>
					<span class="input-group-btn">
						<button type="button" class="btn btn-space btn-success md-trigger btn-dept-save">SAVE</button>
					</span>
				</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>List of Department</h3>
		</div>
		<div class="panel-body">
			<table class="table table-striped table-hover table-fw-widget department-table">
				<thead>
					<tr>
						<th class="center">DEPARTMENT NAME</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script>
	var pageDepartment = {};
	pageDepartment.init = function(selector,callback){
		pageDepartment.elem = $(selector);
		pageDepartment.elem.find('.btn-dept-save').off("click").click(function(event){
			var dept_name = pageDepartment.elem.find('.dept_name').val();
			$.ajax({
				method: "POST",
					url: "<?php echo base_url('add-department')?>",
					data: {"dept_name": dept_name},
					success: function(result){
						if(result.success){
							pageDepartment.elem.find('.modal-department').modal();
						}
					}
			});	
		});
		$.getJSON('<?php echo site_url('get-department')?>', callback);

	}
	pageDepartment.init('#pageDepartment', function(result){
		result = result['query'];
		$.each(result, function(key, value){
			var trDepartment = $("<tr><td></td></tr>");
			trDepartment.attr('data-key', key);
			trDepartment.find('td').html(value['dept_name']);
			pageDepartment.elem.find('.department-table tbody').append(trDepartment);
		});

	});
	

</script>