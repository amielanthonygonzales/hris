<div id="pagePagibigContri">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Pag-Ibig Contribution Form</h3>
		</div>
		<div class="panel-body">
			<div class="form-pagibig">
				<input type="text" class="employerId" />
				<input type="text" class="businessName" />
				<input type="text" class="branch" />
				<input type="text" class="roomNo" />
				<input type="text" class="buildingName" />
				<input type="text" class="blockNo" />
				<input type="text" class="streetName" />
				<input type="text" class="subdivision" />
				<input type="text" class="barangay" />
				<input type="text" class="city" />
				<input type="text" class="province" />
				<input type="text" class="zipCode" />
				<input type="text" class="periodCovered" />
				<input type="text" class="midNo1" />
				<input type="text" class="name1" />
				<input type="text" class="accountNo1" />
				<input type="text" class="monthly1" />
				<input type="text" class="employeeShare1" />
				<input type="text" class="employerShare1" />
				<input type="text" class="total1" />
				<input type="text" class="remarks1" />
				<input type="text" class="midNo2" />
				<input type="text" class="name2" />
				<input type="text" class="accountNo2" />
				<input type="text" class="monthly2" />
				<input type="text" class="employeeShare2" />
				<input type="text" class="employerShare2" />
				<input type="text" class="total2" />
				<input type="text" class="remarks2" />
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