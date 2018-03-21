<div id="pageEmployee">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3>Juan Dela Cruz</h3>
		</div>
		<div class="panel-body">
			<form>
				<div class="row form-group">
					<div class="col-md-2 col-md-10 pull-right">
						<button type="button" name="btnBack" value="back" class ="btn btn-space btn-success btnBack">BACK</button>
						<button type="button" name="btnSave" value="Save" class ="btn btn-space btn-success btnSave">SAVE</button>
					</div>
				</div>	
				<div class="form-group">
					<label for="fname">First Name</label>
					<input class="form-control fname" type="text" name="fname" placeholder="First Name" required />
				</div>
				<div class="form-group">
					<label for="mname">Middle Name</label>
					<input class="form-control mname" type="text" name="mname" placeholder="Middle Name" required/>
				</div>
				<div class="form-group">
					<label for="lname">Last Name</label>
					<input class="form-control lname" type="text" name="lname" placeholder="Last Name" required/>
				</div>
				<div class="form-group">
					<label for="extname">Extension Name</label>
					<input class="form-control extname" type="text" name="extname" placeholder="Extension Name"/>
				</div>
				<div class="input-append date birthdate" data-field="date">
					<label for="bday">Birthdate (yyyy-mm-dd)</label>
					<input name="bday" class="form-control bday" placeholder="Birthdate" type="text" required/>
					<span class="add-on"><i class="icon-remove"></i></span>
					<!-- <span class="add-on"><i class="icon-th"></i></span> -->
				</div> 
				<div class="form-group">
					<label for="empSalary">Salary</label>
					<input class="form-control empSalary" type="text" name="salary" placeholder="Salary" required />
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input class="form-control email" type="email" name="email" placeholder="Email" required/>
				</div>
				<div class="form-group">
					<label for="username">Username</label>
					<input class="form-control username" type="text" name="username" placeholder="Username" required/>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>SSS Contribution</h3>
					</div>
					<div class="panel-body sss-panel">
						<div class="form-group">
							<label for="sss-number">SSS Number</label>
							<input class="form-control sss-number" type="text" name="sssNumber" placeholder="SSS Number" required />
						</div>
						<div class="form-group">
							<label for="ss-contribution">SS Contribution</label>
							<input class="form-control ss-Contribution" type="text" name="ssContribution" placeholder="SS Contribution" readonly />
						</div>
						<div class="form-group">
							<label for="ec-contribution">EC Contribution</label>
							<input class="form-control ec-contribution" type="text" name="erContribution" placeholder="ER Contribution" readonly />
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Pag-ibig Contribution</h3>
					</div>
					<div class="panel-body pagibig-panel">
						<div class="form-group">
							<label for="pagibig-mid-number">Pag-Ibig MID No</label>
							<input class="form-control pagibig-mid-number" type="text" name="pagibigMidNumber" placeholder="Pagibig Mid Number" required />
						</div>
						<div class="form-group">
							<label for="pagibig-number">Pag-Ibig Number</label>
							<input class="form-control pagibig-number" type="text" name="pagibigNumber" placeholder="Pagibig Number" required />
						</div>
						<div class="form-group">
							<label for="membership-program">Membership Program</label>
							<input class="form-control membership-program" type="text" name="membershipProgram" placeholder="Membership Program" required />
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="ee-share">EE Share</label>
									<input class="form-control ee-share" type="text" name="eeShare" placeholder="EE Share" required />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="er-share">ER Share</label>
									<input class="form-control er-share" type="text" name="erShare" placeholder="ER Share" required />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	var pageEmployee = {};
	pageEmployee.init = function(selector, callback){
		pageEmployee.elem = $(selector);

	}

	pageEmployee.init("#pageEmployee", function(){
		
	});
</script>
