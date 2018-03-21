<div id="pageDashboard">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Company's Information</h3>

		</div>
		<div class="panel-body panel-body-company ">
			<form>
				<div class="form-group">
					<div class="row form-group">
						<div class="col-md-6">
							<label for="sssnum">SSS Employer Number</label>
							<input class="form-control sssnum" type="number" name="sssnum" placeholder="SSS Employer Number" maxlength="10" pattern="/*d" title="Numbers only" required readonly />
						</div>
						<div class="col-md-6">
							<label for="sssnum">Pag-IBIG Employer Number</label>
							<input class="form-control pagibignum" type="number" name="pagibignum" placeholder="Pag-IBIG Employer Number" required  readonly/>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="employername">Employer Name</label>
					<input class="form-control employername" type="text" name="employername" placeholder="Employer Name" required readonly/>
				</div>
				<div class="form-group">
					<div class = "row form-group">
						<div class="col-md-4">
							<label for="lname">Rm./Flr./Unit No. &amp; Bldg. Name</label>
							<input class="form-control rm" type="text" name="rm" placeholder="Rm./Flr./Unit No.& Bldg. Name" readonly/>
						</div>
						<div class="col-md-4">
							<label for="extname">House/Lot &amp; Blk. No.</label>
							<input class="form-control house" type="text" name="house" placeholder="House/Lot & Blk. No." readonly />
						</div>
						<div class="col-md-4">
							<label for="extname">Street Name</label>
							<input class="form-control street" type="text" name="street" placeholder="Street Name" readonly/>
						</div>
					</div>
					<div class = "row form-group">
						<div class="col-md-4">
							<label for="extname">Subdivision</label>
							<input class="form-control subdivision" type="text" name="subdivision" placeholder="Subdivision" readonly/>
						</div>
						<div class="col-md-4">
							<label for="extname">Barangay/District/Locality</label>
							<input class="form-control brgy" type="text" name="brgy" placeholder="Barangay/District/Locality" readonly/>
						</div>
						<div class="col-md-4">
							<label for="extname">City/Municipality</label>
							<input class="form-control city" type="text" name="city" placeholder="City/Municipality" readonly/>
						</div>
					</div>
					<div class = "row form-group">
						<div class="col-md-6">
							<label for="extname">Province</label>
							<input class="form-control province" type="text" name="province" placeholder="Province" readonly/>
						</div>
						<div class="col-md-6">
							<label for="extname">Zip Code</label>
							<input class="form-control zipcode" type="number" name="zipcode" placeholder="Zip Code" readonly/>
						</div>
						
					</div>
				</div>
				<div class="form-group">
					<div class="row form-group">
						<div class="col-md-3">
							<label for="extname">Tax Identification Number</label>
							<input class="form-control taxnum" type="number" name="taxnum" placeholder="Tax Identification Number" readonly/>
						</div>
						<div class="col-md-3">
							<label for="username">Telephone Number</label>
							<input class="form-control taxnum" type="tel" name="telnum" placeholder="Telephone Number" required readonly/>
						</div>
						<div class="col-md-3">
							<label for="username">Mobile/Cellphone Number</label>
							<input class="form-control cellnum" type="tel" name="cellnum" placeholder="Mobile/Cellphone Number" required readonly/>
						</div>
						<div class="col-md-3">
							<label for="email">Email</label>
							<input class="form-control email" type="email" name="email" placeholder="Email" required readonly/>
						</div>
					</div>
					
				</div>

			</form>
		</div>
	</div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Employee's Information</h3>
	</div>
	<div class="panel-body">
		<table class="table table-striped table-hover table-fw-widget info-table">
			<thead>
				<tr>
					<th class="center">FIRST NAME</th>
					<th class="center">MIDDLE NAME</th>
					<th class="center">LAST NAME</th>
					<th class="center">EXTENSION NAME</th>
					<th class="center">BIRTHDAY</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
</div>
		
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>SSS Contribution</h3>
			</div>
			<div class="panel-body">
				
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Pag-ibig Contribution</h3>
			</div>
			<div class="panel-body">
				
			</div>
		</div>
	</div>
</div>

<script>
	var pageDashboard = {};
	pageDashboard.init = function(selector, callback){
		pageDashboard.elem = $(selector);
		callback();
	}

	pageDashboard.init("#pageDashboard", function(){

	});

</script>