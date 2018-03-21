<div class="panel panel-default">
	<div class="panel-heading">
		<h3>Register Employee</h3>
	</div>
	<div class="panel-body">
		<form>
			<div class="row form-group">
				<div class="col-md-3 col-md-9 pull-right">
					<button type="submit" name="btnBack" id="btnBack" value="back" class ="btn btn-space btn-success ">
						<i class="icon icon-left s7-back"></i>BACK</button>
					<button type="submit" name="btnAdd" id="btnAdd" value="add" class ="btn btn-space btn-success">
						<i class="icon icon-left s7-plus"></i>ADD</button>	
				</div>
			</div>	
			<div class="form-group">
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
                        	<input type="radio" name="admin-radio" id="adminRadio" class="emptype">
                        	<label for="adminRadio">Admin</label>
                        </div>
			            <div class="am-radio inline">
                        	<input type="radio" name="admin-radio" id="employeeRadio" class="emptype">
                        	<label for="employeeRadio">Employee</label>
                        </div>
			        </div>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label">Department</label>
				<select class="form-control">
					<option value="Name">Name</option>
					<option value="Address">Address</option>
				</select>
			</div>
			
		</form>
	</div>
</div>