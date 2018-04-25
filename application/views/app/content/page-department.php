<div id="pageDepartment">
	<div tabindex="-1" role="dialog" class="modal fade in modal-department">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
				</div>
				<div class="modal-body">
					<div class="text-center">
						<div class="i-circle"><i class="icon symbol"></i></div>
						<h4>Awesome!</h4>
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
	<div id="form-bp1" tabindex="-1" role="dialog" class="modal fade modal-colored-header in modal-edit-department">
      <div class="modal-dialog custom-width">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
            <h3 class="modal-title"></h3>
          </div>
          <div class="modal-body form">
            <div class="form-group">
              <label>Department Name</label>
              <input type="text" placeholder="Department name" class="form-control dept_name">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary md-close btn-save">Save</button>
          </div>
        </div>
      </div>
    </div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Add Department</h3>
		</div>
		<div class="panel-body add-dept">
			<div class="col-md-12">
				<button type="button" class="btn btn-space btn-success md-trigger btn-dept-add pull-right"><i class="icon icon-left s7-plus"></i>ADD</button>
			</div>
				<!-- <div class="input-group col-md-12">
					<input type="text" name="dept_name" placeholder="Department Name" class="form-control dept_name"/>
					<span class="input-group-btn">
						<button type="button" class="btn btn-space btn-success md-trigger btn-dept-save"><i class="icon icon-left s7-diskette"></i>SAVE</button>
					</span>
				</div> -->
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
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</div>

<script>
	var pageDepartment = {};
	pageDepartment.init = function(selector,callback){
		pageDepartment.elem = $(selector);

		pageDepartment.elem.find('.department-table').DataTable({
			"autowidth":false,
			"paging" : true,
			"searching": true,
			"processing": true,
			"serverSide": true,
			"pagingType": "full_numbers",
			"order": [[ 0, "desc" ]],
			"ajax":{
				"url": "<?php echo site_url('department-datatable')?>",
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
				{data: "dept_name"},
				{data: "dept_Id"},
				{data: "dept_Id"}
			],
			"drawCallback":function(settings){
					// var len = pageDepartment.elem.find(".department-table td:nth-child(1)").length;
					// var tablepagesinfo = pageDepartment.dataTable.page.info();
					// pageDepartment.elem.find(".department-table td:nth-child(1)").each(function (key){
					// 	var elem = $(this);
					// 	if ( pageDepartment.dataTable.data().any() ) {
					// 		 elem.html(key+1+tablepagesinfo.start);
					// 	}
					// });
					
					pageDepartment.elem.find('.department-table td:nth-child(2)').each(function(){

						var elem = $(this);
						var data = JSON.parse(elem.html());
						elem.html(data);
						elem.html("<a class='icon icon-left s7-note text-success'></a>").off("click").click(function(){
							pageDepartment.elem.find('.btn-save').removeClass('btn-dept-save').addClass('btn-dept-edit');
							pageDepartment.elem.find('.modal-title').text('Edit Department');
							$.getJSON('<?php echo site_url('get-department-name/')?>'+data, function(result){
								result = result['query'];
								$.each(result, function(key, value){
									pageDepartment.elem.find('.dept_name').val(value['dept_name']);
								});
								
							})
							pageDepartment.elem.find('.modal-edit-department').modal();
							pageDepartment.elem.find('.btn-dept-edit').off("click").click(function(e){
								pageDepartment.editedName = {
									"dept_name" : pageDepartment.elem.find('.dept_name').val()
								}
								$.ajax({
									method: "POST",
									url: "<?php echo base_url('update-department/')?>" + data,
									data: pageDepartment.editedName,
									success: function(result){
										if(result.success){
											pageDepartment.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
											pageDepartment.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
											pageDepartment.elem.find('.btn-proceed').show();
											pageDepartment.elem.find('.btn-yes').hide();
											pageDepartment.elem.find('.btn-no').hide();
											pageDepartment.elem.find('.message').html('Data successfully deleted!');
											pageDepartment.elem.find('.modal-department').modal();
											
										}
									}
								});
							});
						});
					});

				pageDepartment.elem.find('.department-table td:nth-child(3)').each(function(){
					var elem = $(this);
					var data = JSON.parse(elem.html());
					elem.html("<a class='icon icon-left s7-trash text-danger'></a>").off("click").click(function(){
						pageDepartment.elem.find('.i-circle').removeClass('text-success').addClass('text-danger');
						pageDepartment.elem.find('.symbol').removeClass('s7-check').addClass('s7-attention');
						pageDepartment.elem.find('.message').html('Are you sure you want to delete this data!');
						pageDepartment.elem.find('.btn-proceed').hide();
						pageDepartment.elem.find('.btn-yes').show().off("click").click(function(e){
							$.ajax({
								method: "POST",
								url: "<?php echo base_url('delete-department/')?>" + data,
								success: function(result){
									if(result.success){
										pageDepartment.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
										pageDepartment.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
										pageDepartment.elem.find('.btn-proceed').show();
										pageDepartment.elem.find('.btn-yes').hide();
										pageDepartment.elem.find('.btn-no').hide();
										pageDepartment.elem.find('.message').html('Data successfully deleted!');
										pageDepartment.elem.find('.modal-department').modal();
									}
								}
							});
						});
						pageDepartment.elem.find('.btn-no').show();
						pageDepartment.elem.find('.modal-department').modal();
					});
				});

			},
			dom:  	"<'row am-datatable-header'<'col-sm-6'l><'col-sm-6'f>>" +
					"<'row am-datatable-body'<'col-sm-12'tr>>" +
					"<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>"
		});

		pageDepartment.elem.find('.btn-dept-save').off("click").click(function(event){
			var dept_name = pageDepartment.elem.find('.dept_name').val();
			$.ajax({
				method: "POST",
					url: "<?php echo base_url('add-department')?>",
					data: {"dept_name": dept_name},
					success: function(result){
						if(result.success){
							pageDepartment.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
							pageDepartment.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
							pageDepartment.elem.find('.btn-proceed').show();
							pageDepartment.elem.find('.btn-yes').hide();
							pageDepartment.elem.find('.btn-no').hide();
							pageDepartment.elem.find('.message').html('Data has been saved successfully!');
							pageDepartment.elem.find('.modal-department').modal();
						}
					}
			});	
		});

		pageDepartment.elem.find('.btn-dept-add').off("click").click(function(e){
			pageDepartment.elem.find('.btn-save').removeClass('btn-dept-edit').addClass('btn-dept-save');
			pageDepartment.elem.find('.modal-title').text('Add Department');
			pageDepartment.elem.find('.modal-edit-department').modal();
		});

		//$.getJSON('<?php echo site_url('get-department')?>', callback);

	}
	pageDepartment.init('#pageDepartment', function(result){



	});
	

</script>