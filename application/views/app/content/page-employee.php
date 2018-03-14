<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Juan Dela Cruz</h3>
	</div>
	<div class="panel-body">
		<form>
			<div class="row">
				<div class="col-md-11">
					<div class="pull-right">
						<button type="submit" name="btnBack" id="btnBack" value="back" class ="btn btn-success">
							<i class="icon fa fa-backward"></i>	BACK
						</button>
					</div>
				</div>
				<div class="col-md-1">
					<div class="pull-right">
						<button type="submit" name="btnSave" id="btnSave" value="save" class ="btn btn-success">SAVE</button>
					</div>
				</div>
					
			</div>
			<div class="form-group">
				<label for="xfname">First Name</label>
				<input class="form-control" type="text" name="fname" id="fname" placeholder="First Name" required />
			</div>
			<div class="form-group">
				<label for="mname">Middle Name</label>
				<input class="form-control" type="text" name="mname" id="mname" placeholder="Middle Name" required/>
			</div>
			<div class="form-group">
				<label for="lname">Last Name</label>
				<input class="form-control" type="text" name="lname" id="lname" placeholder="Last Name" required/>
			</div>
			<div class="form-group">
				<label for="extname">Extension Name</label>
				<input class="form-control" type="text" name="extname" id="extname" placeholder="Extension Name"/>
			</div>
			<div class="input-append date" id="birthdate" data-field="date">
				<label for="bday">Birthdate (yyyy-mm-dd)</label>
			    <input id="bday" name="bday" class="form-control" placeholder="Birthdate" type="text" required/>
			    <span class="add-on"><i class="icon-remove"></i></span>
			    <!-- <span class="add-on"><i class="icon-th"></i></span> -->
			</div> 
			<div class="form-group">
				<label for="empSalary">Salary</label>
				<input class="form-control" type="text" name="salary" id="empSalary" placeholder="Salary" required />
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="email" name="email" id="email" placeholder="Email" required/>
			</div>
			<div class="form-group">
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" id="username" placeholder="Username" required/>
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
					<input class="form-control" type="text" name="sssNumber" id="sss-number" placeholder="SSS Number" required />
				</div>
				<div class="form-group">
					<label for="ss-contribution">SS Contribution</label>
					<input class="form-control" type="text" name="ssContribution" id="ss-Contribution" placeholder="SS Contribution" readonly />
				</div>
				<div class="form-group">
					<label for="ec-contribution">EC Contribution</label>
					<input class="form-control" type="text" name="erContribution" id="ec-contribution" placeholder="ER Contribution" readonly />
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
					<input class="form-control" type="text" name="pagibigMidNumber" id="pagibig-mid-number" placeholder="Pagibig Mid Number" required />
				</div>
				<div class="form-group">
					<label for="pagibig-number">Pag-Ibig Number</label>
					<input class="form-control" type="text" name="pagibigNumber" id="pagibig-number" placeholder="Pagibig Number" required />
				</div>
				<div class="form-group">
					<label for="membership-program">Membership Program</label>
					<input class="form-control" type="text" name="membershipProgram" id="membership-program" placeholder="Membership Program" required />
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="ee-share">EE Share</label>
							<input class="form-control" type="text" name="eeShare" id="ee-share" placeholder="EE Share" required />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label for="er-share">ER Share</label>
							<input class="form-control" type="text" name="erShare" id="er-share" placeholder="ER Share" required />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</form>
</div>
