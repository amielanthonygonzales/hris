<div id="pagePagibigContri">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Pag-Ibig Contribution Form</h3>
		</div>
		<div class="panel-body">
			<div class="form-pagibig">
				<input type="text"/>
			</div>
			<div class="print-form-pagibig"> Print this form</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	var pagePagibigContri = {};

	pagePagibigContri.init = function(selector, callback){
		pagePagibigContri.elem = $(selector);

		callback();
	}

	pagePagibigContri.init("#pagePagibigContri", function(){

	});
</script>