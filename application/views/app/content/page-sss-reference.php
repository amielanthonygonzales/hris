<div id = "pageSSSReference">
	<div id="form-bp1" tabindex="-1" role="dialog" class="modal fade modal-colored-header in modal-edit-sss-ref">
      <div class="modal-dialog custom-width">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><i class="icon s7-close"></i></button>
            <h3 class="modal-title"></h3>
          </div>
          <div class="modal-body form">
          	<div class="form-group row">
          		<label class="col-xs-12">Range of Compensation</label>
          		<div class="form-group">
          			<label class="col-xs-1 label-range">From</label>
          			<div class="col-xs-5">
          				<input type="name" placeholder="From" class="form-control sss-ref-from"/>
          			</div>
          		</div>
          		<div class="form-group">
          			<label class="col-xs-1 label-range">To</label>
          			<div class="col-xs-5">
          				<input type="name" placeholder="To" class="form-control sss-ref-to"/>
          			</div>
          		</div>
            </div>

            <div class="form-group">
            	<label>Monthly Salary Credit</label>
            	<input type="name" placeholder="Monthly Salary Credit" class="form-control sss-ref-monthly"/>
            </div>
            <div class="contri-content">
				<span class="description">Social Security</span>
				<table class="no-border no-strip skills">
					<tbody class="no-border-x no-border-y">
                        <tr>
                          <td class="item">Employer Contribution<span class="icon s7-culture"></span></td>
                          <td><input type="name" class="form-control sss-ref-input sss-ref-er"/></td>
                        </tr>
                        <tr class="end-of-formula">
                          <td class="item">Employee Contribution<span class="icon s7-users"></span></td>
                          <td><input type="name" class="form-control sss-ref-input sss-ref-ee"/></td>
                        </tr>
                        <tr>
                          <td class="item total-item">Total Social Security<span class="icon s7-cash total-icon"></span></td>
                          <td class="ss-contribution amount-contri sss-ref-total-contri "></td>
                        </tr>
                    </tbody>
				</table>
			</div>
			<div class="form-group">
            	<label>Employee Compensation</label>
            	<input type="name" placeholder="Employee Compensation" class="form-control sss-ref-ec"/>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-primary btn-save">Save</button>
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

		// pageSSSReference.elem.find('.table-sss-reference').DataTable({

		// });

		

		pageSSSReference.elem.find('.btn-add').off("click").click(function(e){
			pageSSSReference.elem.find('.btn-save').removeClass('btn-ref-edit').addClass('btn-ref-save');
			pageSSSReference.elem.find('.modal-title').text('Add SSS Reference');
			pageSSSReference.elem.find('.modal-edit-sss-ref').modal();

			pageSSSReference.elem.find('.btn-ref-save').off("click").click(function(event){
				pageSSSReference.content = {
					"ref_range_start" : pageSSSReference.elem.find('.sss-ref-from').val(),
					"ref_range_end" : pageSSSReference.elem.find('.sss-ref-to').val(),
					"ref_monthly_salary" : pageSSSReference.elem.find('.sss-ref-monthly').val(),
					"ref_er" : pageSSSReference.elem.find('.sss-ref-er').val(),
					"ref_ee" : pageSSSReference.elem.find('.sss-ref-ee').val(),
					"ref_ec" : pageSSSReference.elem.find('.sss-ref-ec').val()
				};
				console.log(pageSSSReference.content);
			});	
		});
		callback();
	}

	pageSSSReference.init('#pageSSSReference', function(){

	});


</script>