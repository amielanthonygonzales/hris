<div id="pageSSSReferenceEdit">
	<div tabindex="-1" role="dialog" class="modal fade in modal-sss-ref">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button " data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
				</div>
				<div class="modal-body">
					<div class="text-center">
						<div class="i-circle"><i class="icon symbol"></i></div>
						<h4>Awesome!</h4>
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
	<div class="panel-buttons">
		<div class="row col-md-12">
			<div class="form-group">
				<button type="button" name="btnBack" value="back" class ="btn btn-success btn-space btn-back">

					<i class="icon icon-left s7-back"></i>BACK
				</button>
				<button type="button" name="btnPrint" value="print" class ="btn btn-success btn-space btn-save pull-right">
					<i class="icon icon-left s7-diskette"></i>SAVE
			</button>
			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			SSS Contribution Reference
		</div>
		<div class="panel-body">
			<label>Range of Compensation</label>
			<div class="form-group">
				<label>From</label>
      			<input type="name" placeholder="From" class="form-control sss-ref-from clear-sss-ref "/>
			</div>
      		<div class="form-group">
      			<label>To</label>
      			<div class="input-group">
      				<input type="name" placeholder="To" class="form-control sss-ref-to clear-sss-ref"/>
					<div class="input-group-btn">
						<button tabindex="-1" data-toggle="dropdown" type="button" class="btn btn-primary btn-shade1 dropdown-toggle" aria-expanded="false"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                        <ul role="menu" class="dropdown-menu pull-right">
                          <li class="end-over">Over</li>
                        </ul>
					</div>
      			</div>
      		</div>
	        <div class="form-group">
	        	<label>Monthly Salary Credit</label>
	        	<input type="name" placeholder="Monthly Salary Credit" class="form-control sss-ref-monthly clear-sss-ref"/>
	        </div>
	        <div class="contri-content">
				<span class="description">Social Security</span>
				<table class="no-border no-strip skills">
					<tbody class="no-border-x no-border-y">
	                    <tr>
	                      <td class="item">Employer Contribution<span class="icon s7-culture"></span></td>
	                      <td><input type="name" class="form-control sss-ref-input sss-ref-er clear-sss-ref"/></td>
	                    </tr>
	                    <tr class="end-of-formula">
	                      <td class="item">Employee Contribution<span class="icon s7-users"></span></td>
	                      <td><input type="name" class="form-control sss-ref-input sss-ref-ee clear-sss-ref"/></td>
	                    </tr>
	                    <tr>
	                      <td class="item total-item">Total Social Security<span class="icon s7-cash total-icon"></span></td>
	                      <td class="ss-contribution amount-contri sss-ref-total-contri"></td>
	                    </tr>
	                </tbody>
				</table>
			</div>
			<div class="form-group">
	        	<label>Employee Compensation</label>
	        	<input type="name" placeholder="Employee Compensation" class="form-control sss-ref-ec clear-sss-ref"/>
	        </div>
		</div>
	</div>
</div>
<script type="text/javascript">

	var pageSSSReferenceEdit = {};
	var action = '<?php echo $action?>';
	pageSSSReferenceEdit.init = function(selector, callback){
		pageSSSReferenceEdit.elem = $(selector);
		pageSSSReferenceEdit.valid = true;
		pageSSSReferenceEdit.action = '<?php echo $action?>';
		pageSSSReferenceEdit.id = '<?php echo $id?>';
		pageSSSReferenceEdit.saveMax = 0;

		if(pageSSSReferenceEdit.action == "edit"){
			pageSSSReferenceEdit.elem.find('.sss-ref-from').attr('readonly', "");
			pageSSSReferenceEdit.elem.find('.sss-ref-to').attr('readonly' , "");
		}else if(pageSSSReferenceEdit.action == "add"){
			pageSSSReferenceEdit.elem.find('.sss-ref-from').removeAttr('readonly');
			pageSSSReferenceEdit.elem.find('.sss-ref-to').removeAttr('readonly');
		}

		pageSSSReferenceEdit.elem.find('.clear-sss-ref').keydown(function(e){
			if(e.which == 8 
        		|| e.which == 9 
        		|| e.which == 13 
        		|| e.which == 46 
        		|| e.which >= 48 && e.which <= 57 
        		|| e.which >= 96 && e.which <= 105 
        		|| e.which >= 112 && e.which <= 123 
        		|| e.which >= 37 && e.which <= 40 
        		|| e.which == 190){
        		return true;
        	}else{
        		return false;
        	}
		});

		pageSSSReferenceEdit.elem.find('.end-over').off("click").click(function(e){
		pageSSSReferenceEdit.elem.find('.sss-ref-to').val('Over');
			});

		pageSSSReferenceEdit.elem.find('.btn-back').off("click").click(function(e){
			location.replace('<?php echo base_url('dashboard-sss-reference')?>');
		});

		pageSSSReferenceEdit.elem.find('.btn-save').off("click").click(function(event){
				
				pageSSSReferenceEdit.elem.find('.modal-edit-sss-ref').hide();
				pageSSSReferenceEdit.content = {
					"ref_range_start" : pageSSSReferenceEdit.elem.find('.sss-ref-from').val(),
					"ref_range_end" : pageSSSReferenceEdit.elem.find('.sss-ref-to').val(),
					"ref_monthly_salary" : pageSSSReferenceEdit.elem.find('.sss-ref-monthly').val(),
					"ref_er" : pageSSSReferenceEdit.elem.find('.sss-ref-er').val(),
					"ref_ee" : pageSSSReferenceEdit.elem.find('.sss-ref-ee').val(),
					"ref_ec" : pageSSSReferenceEdit.elem.find('.sss-ref-ec').val(),
					"ref_max" : pageSSSReferenceEdit.saveMax
				};

				if(pageSSSReferenceEdit.action == "edit"){
						$.ajax({
							method: "POST",
								url: "<?php echo base_url('update-reference/')?>"+pageSSSReferenceEdit.id,
								data: pageSSSReferenceEdit.content,
								success: function(result){
									if(result.success == 1){
										pageSSSReferenceEdit.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
										pageSSSReferenceEdit.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
										pageSSSReferenceEdit.elem.find('.btn-proceed').show();
										pageSSSReferenceEdit.elem.find('.btn-yes').hide();
										pageSSSReferenceEdit.elem.find('.btn-no').hide();
										pageSSSReferenceEdit.elem.find('.sss-ref-message').html('Data has been updated successfully!');
										pageSSSReferenceEdit.elem.find('.modal-sss-ref').modal();
									}else if(result.success.error){
										pageSSSReferenceEdit.elem.find('.modal-error .modal-body p').html(result.success.error);
										pageSSSReferenceEdit.elem.find('.modal-error').modal("show");
									}
								}
						});	
					}

				if(pageSSSReferenceEdit.action == "add"){

				$.getJSON("<?php echo site_url('get-all-reference')?>", function(result){

					result = result['query'];
					console.log(result);


					$.each(result, function(keyRef, valueRef){
						if(valueRef['ref_max'] == '1'){
							pageSSSReferenceEdit.maxRange = valueRef['ref_range_start'];
						}

					pageSSSReferenceEdit.start = parseFloat(pageSSSReferenceEdit.elem.find('.sss-ref-from').val());
					pageSSSReferenceEdit.end = parseFloat(pageSSSReferenceEdit.elem.find('.sss-ref-to').val());

					if(pageSSSReferenceEdit.start > pageSSSReferenceEdit.maxRange){
						pageSSSReferenceEdit.elem.find('.modal-error .modal-body p').html("Start of range is greater than the max range saved!");
						pageSSSReferenceEdit.elem.find('.modal-error').modal("show");
						pageSSSReferenceEdit.valid = false;
					}else if(pageSSSReferenceEdit.end > pageSSSReferenceEdit.maxRange && pageSSSReferenceEdit.end != 'Over'){
						pageSSSReferenceEdit.elem.find('.modal-error .modal-body p').html("End of range is greater than the max range saved!");
						pageSSSReferenceEdit.elem.find('.modal-error').modal("show");
						pageSSSReferenceEdit.valid = false;
					}else if(pageSSSReferenceEdit.end < pageSSSReferenceEdit.start){
						pageSSSReferenceEdit.elem.find('.modal-error .modal-body p').html("Invalid range!");
						pageSSSReferenceEdit.elem.find('.modal-error').modal("show");
						pageSSSReferenceEdit.valid = false;
					}else if(pageSSSReferenceEdit.end == pageSSSReferenceEdit.start){
						pageSSSReferenceEdit.elem.find('.modal-error .modal-body p').html("Invalid range!");
						pageSSSReferenceEdit.elem.find('.modal-error').modal("show");
						pageSSSReferenceEdit.valid = false;
					}else if(valueRef['ref_range_start'] == pageSSSReferenceEdit.start){
						pageSSSReferenceEdit.elem.find('.modal-error .modal-body p').html("Start of range already exists!");
						pageSSSReferenceEdit.elem.find('.modal-error').modal("show");
						pageSSSReferenceEdit.valid = false;
					}else if(valueRef['ref_range_end'] == pageSSSReferenceEdit.end){
						pageSSSReferenceEdit.elem.find('.modal-error <div class="mod"></div>al-body p').html("End of range already exists!");
						pageSSSReferenceEdit.elem.find('.modal-error').modal("show");
						pageSSSReferenceEdit.valid = false;
					}else if(valueRef['ref_range_end'] == pageSSSReferenceEdit.start){
						pageSSSReferenceEdit.elem.find('.modal-error .modal-body p').html("End of range already exists!");
						pageSSSReferenceEdit.elem.find('.modal-error').modal("show");
						pageSSSReferenceEdit.valid = false;
					}else if(pageSSSReferenceEdit.end == 'Over') {
						pageSSSReferenceEdit.content = {
							"ref_range_start" : pageSSSReferenceEdit.elem.find('.sss-ref-from').val(),
							"ref_range_end" : pageSSSReferenceEdit.elem.find('.sss-ref-to').val(),
							"ref_monthly_salary" : pageSSSReferenceEdit.elem.find('.sss-ref-monthly').val(),
							"ref_er" : pageSSSReferenceEdit.elem.find('.sss-ref-er').val(),
							"ref_ee" : pageSSSReferenceEdit.elem.find('.sss-ref-ee').val(),
							"ref_ec" : pageSSSReferenceEdit.elem.find('.sss-ref-ec').val(),
							"ref_max" : 1
						};
						pageSSSReferenceEdit.valid = true;
						
					}else if(pageSSSReferenceEdit.start < valueRef['ref_range_start']  && pageSSSReferenceEdit.end > valueRef['ref_range_end']){
						pageSSSReferenceEdit.elem.find('.modal-error .modal-body p').html("Range already exists!");
						pageSSSReferenceEdit.elem.find('.modal-error').modal("show");
						pageSSSReferenceEdit.valid = false;
					}else if(pageSSSReferenceEdit.end == 'Over') {
						pageSSSReferenceEdit.content = {
							"ref_range_start" : pageSSSReferenceEdit.elem.find('.sss-ref-from').val(),
							"ref_range_end" : pageSSSReferenceEdit.elem.find('.sss-ref-to').val(),
							"ref_monthly_salary" : pageSSSReferenceEdit.elem.find('.sss-ref-monthly').val(),
							"ref_er" : pageSSSReferenceEdit.elem.find('.sss-ref-er').val(),
							"ref_ee" : pageSSSReferenceEdit.elem.find('.sss-ref-ee').val(),
							"ref_ec" : pageSSSReferenceEdit.elem.find('.sss-ref-ec').val(),
							"ref_max" : 1
						};
						pageSSSReferenceEdit.valid = true;
						
					}else if(valueRef['ref_range_start'] != pageSSSReferenceEdit.start 
						&& valueRef['ref_range_end'] != pageSSSReferenceEdit.end 
						&& (!(pageSSSReferenceEdit.start > valueRef['ref_range_start']) && !(pageSSSReferenceEdit.end < valueRef['ref_range_end'])) 
						&& !(pageSSSReferenceEdit.end < pageSSSReferenceEdit.start) 
						&& valueRef['ref_range_end'] != pageSSSReferenceEdit.start){
						pageSSSReferenceEdit.valid = true;
					}
					});

					if(pageSSSReferenceEdit.valid == true && pageSSSReferenceEdit.action == "add"){
						// if(pageSSSReferenceEdit.end == 'Over') {
						// 	pageSSSReferenceEdit.content = {
						// 		"ref_range_start" : pageSSSReferenceEdit.elem.find('.sss-ref-from').val(),
						// 		"ref_range_end" : pageSSSReferenceEdit.elem.find('.sss-ref-to').val(),
						// 		"ref_monthly_salary" : pageSSSReferenceEdit.elem.find('.sss-ref-monthly').val(),
						// 		"ref_er" : pageSSSReferenceEdit.elem.find('.sss-ref-er').val(),
						// 		"ref_ee" : pageSSSReferenceEdit.elem.find('.sss-ref-ee').val(),
						// 		"ref_ec" : pageSSSReferenceEdit.elem.find('.sss-ref-ec').val(),
						// 		"ref_max" : 1
						// 	};
						
						// }else{
						// 	pageSSSReferenceEdit.content = {
						// 		"ref_range_start" : pageSSSReferenceEdit.elem.find('.sss-ref-from').val(),
						// 		"ref_range_end" : pageSSSReferenceEdit.elem.find('.sss-ref-to').val(),
						// 		"ref_monthly_salary" : pageSSSReferenceEdit.elem.find('.sss-ref-monthly').val(),
						// 		"ref_er" : pageSSSReferenceEdit.elem.find('.sss-ref-er').val(),
						// 		"ref_ee" : pageSSSReferenceEdit.elem.find('.sss-ref-ee').val(),
						// 		"ref_ec" : pageSSSReferenceEdit.elem.find('.sss-ref-ec').val(),
						// 		"ref_max" : 0
						// 	};
						// }
						$.ajax({
							method: "POST",
								url: "<?php echo base_url('add-reference')?>",
								data: pageSSSReferenceEdit.content,
								success: function(result){
									if(result.success == 1){
										pageSSSReferenceEdit.elem.find('.i-circle').removeClass('text-danger').addClass('text-success');
										pageSSSReferenceEdit.elem.find('.symbol').removeClass('s7-attention').addClass('s7-check');
										pageSSSReferenceEdit.elem.find('.btn-proceed').show().off("click").click(function(e){
											window.parent.location = "<?php echo base_url('dashboard-sss-reference')?>";
										});
										pageSSSReferenceEdit.elem.find('.btn-yes').hide();
										pageSSSReferenceEdit.elem.find('.btn-no').hide();
										pageSSSReferenceEdit.elem.find('.sss-ref-message').html('Data has been saved successfully!');
										pageSSSReferenceEdit.elem.find('.modal-sss-ref').modal();
									}else if(result.success.error){
										pageSSSReferenceEdit.elem.find('.modal-error .modal-body p').html(result.success.error);
										pageSSSReferenceEdit.elem.find('.modal-error').modal("show");
									}
								}
						});	
					}


					
				});

				}
			});	


		pageSSSReferenceEdit.ref_er = 0.0;
		pageSSSReferenceEdit.ref_ee = 0.0;
		pageSSSReferenceEdit.ref_total = 0.0;
		pageSSSReferenceEdit.elem.find('.sss-ref-er').keyup(function(e){
			
			pageSSSReferenceEdit.ref_er = parseFloat(pageSSSReferenceEdit.elem.find('.sss-ref-er').val());
			pageSSSReferenceEdit.ref_ee = parseFloat(pageSSSReferenceEdit.elem.find('.sss-ref-ee').val());
			if(pageSSSReferenceEdit.elem.find('.sss-ref-ee').val() == ""){
				pageSSSReferenceEdit.ref_ee = 0.0;
			}
			pageSSSReferenceEdit.ref_total = pageSSSReferenceEdit.ref_er + pageSSSReferenceEdit.ref_ee;
			pageSSSReferenceEdit.elem.find('.sss-ref-total-contri').text(pageSSSReferenceEdit.ref_total);
		});

		pageSSSReferenceEdit.elem.find('.sss-ref-ee').keyup(function(e){
			pageSSSReferenceEdit.ref_er = parseFloat(pageSSSReferenceEdit.elem.find('.sss-ref-er').val());
			pageSSSReferenceEdit.ref_ee = parseFloat(pageSSSReferenceEdit.elem.find('.sss-ref-ee').val());
			if(pageSSSReferenceEdit.ref_er == ""){
				pageSSSReferenceEdit.ref_er = 0;
			}
			pageSSSReferenceEdit.ref_total = pageSSSReferenceEdit.ref_er + pageSSSReferenceEdit.ref_ee;

			pageSSSReferenceEdit.elem.find('.sss-ref-total-contri').text(pageSSSReferenceEdit.ref_total);
		});

		
		if(pageSSSReferenceEdit.action == "edit"){
			$.getJSON('<?php echo base_url('ref-get-data/')?>'+pageSSSReferenceEdit.id, callback);
		}else{
			callback();
		}
		

	}

	if(action == "edit"){
		pageSSSReferenceEdit.ref_er_query = 0.0;
		pageSSSReferenceEdit.ref_ee_query = 0.0;
		pageSSSReferenceEdit.ref_total_query = 0.0;
		pageSSSReferenceEdit.init("#pageSSSReferenceEdit", function(result){
			result = result['query'];
			console.log(result);
			$.each(result, function(keyEdit, valueEdit){
				pageSSSReferenceEdit.elem.find('.sss-ref-from').val(valueEdit['ref_range_start']);
				pageSSSReferenceEdit.elem.find('.sss-ref-to').val(valueEdit['ref_range_end']);
				pageSSSReferenceEdit.elem.find('.sss-ref-monthly').val(valueEdit['ref_monthly_salary']);
				pageSSSReferenceEdit.elem.find('.sss-ref-er').val(valueEdit['ref_er']);
				pageSSSReferenceEdit.elem.find('.sss-ref-ee').val(valueEdit['ref_ee']);
				pageSSSReferenceEdit.elem.find('.sss-ref-ec').val(valueEdit['ref_ec']);
			});
			pageSSSReferenceEdit.ref_er_query = parseFloat(pageSSSReferenceEdit.elem.find('.sss-ref-er').val());
			pageSSSReferenceEdit.ref_ee_query = parseFloat(pageSSSReferenceEdit.elem.find('.sss-ref-ee').val());
			pageSSSReferenceEdit.ref_total_query = pageSSSReferenceEdit.ref_er_query + pageSSSReferenceEdit.ref_ee_query;
			pageSSSReferenceEdit.elem.find('.sss-ref-total-contri').text(pageSSSReferenceEdit.ref_total_query);
		});
	}else{
		pageSSSReferenceEdit.init("#pageSSSReferenceEdit", function(){
		});
	}
	
</script>