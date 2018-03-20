<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Register Employee</h3>
	</div>
	<div class="panel-body">
		<form>
			<div class="col-md-12">
				<div class="pull-right">
					<button type="submit" name="btnAdd" id="btnAdd" value="add" class ="btn btn-success">ADD</button>
				</div>
			</div>
			<div class="fomr-group">
				<label for="employeeID">Employee ID</label>
				<input class="form-control" type="text" name="empId" id="employeeID" placeholder="Employee ID" required />
			</div>
			<div class="form-group">
				<label for="first-name">First Name</label>
				<input class="form-control" type="text" name="fname" id="first-name" placeholder="First Name" required />
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
			<div class="form-group">
				<label for="username">Username</label>
				<input class="form-control" type="text" name="username" id="username" placeholder="Username" required/>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" id="password" placeholder="Password" required/>
			</div>
			<div class="form-group">
				<div class="horizontal">
					<label>Position</label>
					<div class="col-md-12">
						<div class="am-radio inline">
                        	<input type="radio" name="admin-radio" id="adminRadio">
                        	<label for="adminRadio">Admin</label>
                        </div>
			            <div class="am-radio inline">
                        	<input type="radio" name="employee-radio" id="employeeRadio">
                        	<label for="employeeRadio">Employee</label>
                        </div>
			        </div>
				</div>
			</div>
			
		</form>
	</div>
</div>