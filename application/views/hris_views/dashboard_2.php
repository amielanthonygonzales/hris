<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo base_url('bootstrap/bootstrap.min.css');?>"  rel = "stylesheet"/>
    <link rel = "stylesheet" href="<?php echo base_url('assets/css/dashboard.css');?>"  />
    <link rel = "icon" href="assets/img/logo3.png"  />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('amaretti/html/assets/lib/font-awesome/css/font-awesome.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('amaretti/html/assets/lib/stroke-7/style.css');?>"/>
	<title>HR Information System</title>
</head>
<body>
	<header id="hr-header">
		<ul class="header-element">
			<li id="header-name">WELCOME</li>
			<li id="header-logout">
				<a href="#">
					<i class="icon s7-power" id="logout"></i>
				</a>
			</li>
		</ul>
	</header>
	<div class="container">
		
		<div class="left-sidebar">
			<div class="content">
				<ul class="sidebar-element">
					<li class="parent active">
						<a href="#">
							<i class="icon"><img id = "logo-nav" src="assets/img/logo3.png" alt="logo"/></i>
						</a>
					</li>
					<li class="parent active">
						<a href="#">
							<i class="icon s7-monitor"></i>
							<span>Dashboard</span>
						</a>
					</li>
					<li class="parent active">
						<a href="#">
							<i class="icon s7-power"></i>
							<span>Sign Out</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3><strong>Company's Information</strong></h3>
			</div>
			<div class="panel-body-company ">
					<form>

						<div class="form-group">
							<div class="row form-group">
								<div class="col-md-6">
									<label for="sssnum">SSS Employer Number</label>
									<input class="form-control" type="number" name="sssnum" id="sssnum" placeholder="SSS Employer Number" required />
								</div>
								<div class="col-md-6">
									<label for="sssnum">Pag-IBIG Employer Number</label>
									<input class="form-control" type="number" name="pagibignum" id="pagibignum" placeholder="Pag-IBIG Employer Number" required />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="employername">Employer Name</label>
							<input class="form-control" type="text" name="employername" id="employername" placeholder="Employer Name" required/>
						</div>
						<div class="form-group">
							<div class = "row form-group">
								<div class="col-md-4">
									<label for="lname">Rm./Flr./Unit No. &amp; Bldg. Name</label>
									<input class="form-control" type="text" name="rm" id="rm" placeholder="Rm./Flr./Unit No.& Bldg. Name"/>
								</div>
								<div class="col-md-4">
									<label for="extname">House/Lot &amp; Blk. No.</label>
									<input class="form-control" type="text" name="house" id="house" placeholder="House/Lot & Blk. No."/>
								</div>
								<div class="col-md-4">
									<label for="extname">Street Name</label>
									<input class="form-control" type="text" name="street" id="street" placeholder="Street Name"/>
								</div>
							</div>
							<div class = "row form-group">
								<div class="col-md-4">
									<label for="extname">Subdivision</label>
									<input class="form-control" type="text" name="subdivision" id="subdivision" placeholder="Subdivision"/>
								</div>
								<div class="col-md-4">
									<label for="extname">Barangay/District/Locality</label>
									<input class="form-control" type="text" name="brgy" id="brgy" placeholder="Barangay/District/Locality"/>
								</div>
								<div class="col-md-4">
									<label for="extname">City/Municipality</label>
									<input class="form-control" type="text" name="city" id="city" placeholder="City/Municipality"/>
								</div>
							</div>
							<div class = "row form-group">
								<div class="col-md-6">
									<label for="extname">Province</label>
									<input class="form-control" type="text" name="province" id="province" placeholder="Province"/>
								</div>
								<div class="col-md-6">
									<label for="extname">Zip Code</label>
									<input class="form-control" type="number" name="zipcode" id="zipcode" placeholder="Zip Code"/>
								</div>
								
							</div>
						</div>
						<div class="form-group">
							<div class="row form-group">
								<div class="col-md-3">
									<label for="extname">Tax Identification Number</label>
									<input class="form-control" type="number" name="taxnum" id="taxnum" placeholder="Tax Identification Number"/>
								</div>
								<div class="col-md-3">
									<label for="username">Telephone Number</label>
									<input class="form-control" type="tel" name="telnum" id="telnum" placeholder="Telephone Number" required/>
								</div>
								<div class="col-md-3">
									<label for="username">Mobile/Cellphone Number</label>
									<input class="form-control" type="tel" name="cellnum" id="cellnum" placeholder="Mobile/Cellphone Number" required/>
								</div>
								<div class="col-md-3">
									<label for="email">Email</label>
									<input class="form-control" type="email" name="email" id="email" placeholder="Email" required/>
								</div>
							</div>
							
						</div>
							<div class="pull-right btnEdit">
								<button type="submit" name="btnEdit" id="btnEdit" value="edit" class ="btn btn-success">EDIT</button>
							</div>
					</form>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h3><strong>Employee's Information</strong></h3>
			</div>
			<div class="panel-body">
				<table id="info-table" class="table table-striped table-hover table-fw-widget">
					<thead>
						<tr>
							<th class="center">FIRST NAME</th>
							<th class="center">MIDDLE NAME</th>
							<th class="center">LAST NAME</th>
							<th class="center">EXTENSION NAME</th>
							<th class="center">BIRTHDAY</th>
						</tr>
					</thead>
					<tbody id="table-emp">
						<!-- <tr id="table-information">
							
							<td class="center">
								<button class="btn btn-light text-info"><span class="icon s7-info"></button>
								<button class="btn btn-light text-success"><span class="icon s7-look"></button>
								<button class="btn btn-light text-danger"><span class="icon s7-trash"></button></td>
						</tr> -->
					</tbody>
				</table>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3><strong>SSS Contribution</strong></h3>
					</div>
					<div class="panel-body">
						
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3><strong>Pag-ibig Contribution</strong></h3>
					</div>
					<div class="panel-body">
						
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>