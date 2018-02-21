<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url('bootstrap/bootstrap.min.css');?>"  rel = "stylesheet"/>
	<title>HR Information System</title>
</head>
<body>
	<div class="container">
		<div class="modal fade" tabindex="-1" id="cancel-modal">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">MESSAGE</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p></p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal" id="cancel-no">No</button>
						<button type="button" class="btn btn-success" id="cancel-yes">Yes</button>
					</div>
				</div>
			</div>
		</div>
		<form method="post" action="<?php echo base_url();?>RegisterCompany_Controller/add">
			<div class="form-group">
				<label for="sssnum">SSS Employer Number <code>*</code></label>
				<input class="form-control" type="number" name="sssnum" id="sssnum" placeholder="SSS Employer Number" required />
			</div>
			<div class="form-group">
				<label for="sssnum">Pag-IBIG Employer Number <code>*</code></label>
				<input class="form-control" type="number" name="pagibignum" id="pagibignum" placeholder="Pag-IBIG Employer Number" required />
			</div>
			<div class="form-group">
				<label for="employername">Employer Name <code>*</code></label>
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
			<div class="float-right form-group">
				<button type="submit" name="save" id="save" value="Save" data-target="#cancel-modal" data-toggle="modal" class ="btn btn-success" data-save="Succesfully Added!">SAVE</button>
			</div>
		</form>
		<div class="clearfix"></div>
		<div class="float-right">
			<button type="button" name="cancel" id="cancel" value="Cancel" class ="btn btn-danger" data-toggle="modal" data-target="#cancel-modal" data-save="Are you sure you want to cancel?">CANCEL</button>
		</div>
	</div>
	<script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js');?>"></script>
	<script src="<?php echo base_url('bootstrap/bootstrap.min.js');?>"></script>
</body>
</html>

<script>  
	$('#cancel-yes').on('click', function(){
		self.location = "<?php echo base_url("index");?>";
	});

	$('#cancel-modal').on('show.bs.modal', function(event){
		var save = $(event.relatedTarget);
		if(save.val() == "Save"){
			$('#cancel-yes').hide();
			$('#cancel-no').hide();
			var message = save.data('save');
			var modal = $(this);
			modal.find('.modal-body p').text(message);

		}else{
			$('#cancel-yes').show();
			$('#cancel-no').show();
			var message = save.data('save');
			var modal = $(this);
			modal.find('.modal-body p').text(message);	
		}
		
	});

	$.getJSON("<?php echo base_url('RegisterCompany_Controller/getCompanyIdInfo')?>", function(result){
		result = result['query'];
		console.log(result);
		$.each(result, function(key,value){
			var sssid = value['sssid'];
			var pagibigid = value['pagibigid'];

			var sssnum;
			var pagibignum;

			$("#sssnum").on("keyup", function(){
				sssnum = $("#sssnum").val();

				if(sssnum == sssid){
					alert("SSS ID already taken!");
				}
			});

			$("#pagibignum").on("keyup", function(){
				pagibignum = $("#pagibignum").val();

				if(pagibignum == pagibigid){
					alert("Pag-IBIG ID already taken!");
				}
			});

		});
	});
</script>