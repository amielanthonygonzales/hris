<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo base_url('bootstrap/bootstrap.min.css');?>"  rel = "stylesheet"/>
     <link href="<?php echo base_url('assets/css/bootstrap-datetimepicker.min.css');?>"  rel = "stylesheet"/>
	<title>HR Information System</title>
</head>
<body>
	<div class="container">
		<form method="post" action="<?php echo base_url();?>RegisterCompany_Controller/add">
			<div class="form-group">
				<label for="sssnum">SSS Employer Number</label>
				<input class="form-control" type="number" name="sssnum" id="sssnum" placeholder="SSS Employer Number" required />
			</div>
			<div class="form-group">
				<label for="sssnum">Pag-IBIG Employer Number</label>
				<input class="form-control" type="number" name="pagibignum" id="pagibignum" placeholder="Pag-IBIG Employer Number" required />
			</div>
			<div class="form-group">
				<label for="employername">Employer Name</label>
				<input class="form-control" type="text" name="employername" id="employername" placeholder="Employer Name" required/>
			</div>
			<div class="form-group">
				<div class = "form-inline">
					<div class="input-group">
						<label for="lname">Rm./Flr./Unit No. &amp; Bldg. Name</label>
						<input class="form-control" type="text" name="rm" id="rm" placeholder="Rm./Flr./Unit No.& Bldg. Name" required/>
					</div>
					<div class="input-group">
						<label for="extname">House/Lot &amp; Blk. No.</label>
						<input class="form-control" type="text" name="house" id="house" placeholder="House/Lot & Blk. No."/>
					</div>
					<div class="input-group">
						<label for="extname">Street Name</label>
						<input class="form-control" type="text" name="street" id="street" placeholder="Street Name"/>
					</div>
				</div>
				<div class = "form-inline">
					<div class="input-group">
						<label for="extname">Subdivision</label>
						<input class="form-control" type="text" name="subdivision" id="subdivision" placeholder="Subdivision"/>
					</div>
					<div class="input-group">
						<label for="extname">Barangay/District/Locality</label>
						<input class="form-control" type="text" name="brgy" id="brgy" placeholder="Barangay/District/Locality"/>
					</div>
					<div class="input-group">
						<label for="extname">City/Municipality</label>
						<input class="form-control" type="text" name="city" id="city" placeholder="City/Municipality"/>
					</div>
				</div>
				<div class = "form-inline">
					<div class="input-group">
						<label for="extname">Province</label>
						<input class="form-control" type="text" name="province" id="province" placeholder="Province"/>
					</div>
					<div class="input-group">
						<label for="extname">Zip Code</label>
						<input class="form-control" type="number" name="zipcode" id="zipcode" placeholder="Zip Code"/>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label for="extname">Tax Identification Number <code>(If any)</code></label>
				<input class="form-control" type="number" name="taxnum" id="taxnum" placeholder="Tax Identification Number"/>
			</div>
			<div class="form-group">
				<label for="username">Telephone Number <code>Area Code+Tel. No.</code></label>
				<input class="form-control" type="tel" name="telnum" id="telnum" placeholder="Telephone Number" required/>
			</div>
			<div class="form-group">
				<label for="username">Mobile/Cellphone Number</label>
				<input class="form-control" type="tel" name="cellnum" id="cellnum" placeholder="Mobile/Cellphone Number" required/>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="email" name="email" id="email" placeholder="Email" required/>
			</div>
			<div id="message" class="message">

			</div>
			<div class="pull-right">
				<button type="submit" name="save" value="Save" class ="btn btn-success" >SAVE</button>
			</div>
		</form>
		<div class="pull-right">
			<button type="submit" name="cancel" id="cancel" value="Cancel" class ="btn btn-danger" >CANCEL</button>
		</div>
	</div>
	<?php 
		//--Conversion of date--
		/*$current = date("m/d/y");
		$new_format = date("m-d-y", strtotime($current));
		echo $current. "<br>";
		echo $new_format;
		$current;
		$db_date;*/
	?>
	<script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js');?>"></script>
</body>
</html>

<script>  
	$("#cancel").on("click", function(){
		
		self.location = "<?php echo base_url("index");?>";
	});
</script>