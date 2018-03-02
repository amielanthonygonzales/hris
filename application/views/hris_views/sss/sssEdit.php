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
		<?php $quer = $query[0];?>

		<div class="modal fade" tabindex="-1" id="cancel-modal">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header bg-secondary">
						<h5 class="modal-title text-white">MESSAGE</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p class="text-info"></p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal" id="cancel-no">No</button>
						<button type="button" class="btn btn-success" id="cancel-yes">Yes</button>
					</div>
				</div>
			</div>
		</div>

		<form id="edit-form-sss">
			<div id="sss-No" class="form-group">
				<label for="ssNo">SSS NUMBER</label>
				<input type="text" name="sssNo" maxlength="10" minlength="10" id="sss-Number" class="form-control"/>
			</div>

			<div id="sss-firstName" class="form-group">
				<label for="ssFirstName">FIRST NAME</label>
				<input type="text" name="firstName" class="form-control" id="sss-FirstName" readonly/>
			</div>
			<div id="sss-middleName" class="form-group">
				<label for="ssMiddleName">MIDDLE NAME</label>
				<input type="text" name="middleName" id="sss-MiddleName" class="form-control" readonly/>
			</div>
			<div id="sss-lastName" class="form-group">
				<label for="ssLastName">LAST NAME</label>
				<input type="text" name="lastName" id="sss-LastName" class="form-control" readonly/>
			</div>
			<div id="sss-extName" class="form-group">
				<label for="ssExtName">EXT NAME</label>
				<input type="text" name="extName" id="sss-ExtName" class="form-control" readonly/>
			</div>
			<div class="row form-group">
				<div class="col-md-4" id="sss-salary">
					<label for="ssSalary">SALARY</label>
					<input type="number" name="salary" id="sss-employeeSalary" class="form-control" />
				</div>
				<div class="col-md-4" id="ss-contribution">
					<label for="ssContribution">SS CONTRIBUTION</label>
					<input type="number" name="ssContribution" id="sss-Contribution" class="form-control" readonly/>
				</div>
				<div class="col-md-4" id="ec-contribution">
					<label for="ecContribution">EC CONTRIBUTION</label>
					<input type="text" name="ecContribution" id="ec-Contribution" class="form-control" readonly/>
				</div>
				
			</div>
			<div class="pull-right">
					<button type="submit" name="updateSSS" id="updateSSS" value="update" class ="btn btn-success">UPDATE</button>
			</div>
			
		</form>
		<div class="pull-right">
			<button type="submit" name="backBtn" id="backBtn" value="back" class ="btn btn-danger">BACK</button>
		</div>
		
	</div>

	<script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js');?>"></script>
	<script src="<?php echo base_url('bootstrap/bootstrap.min.js');?>"></script>

</body>
</html>

<script type="text/javascript">
	var getId = "<?php echo $quer->id?>";

	$.getJSON('<?php echo base_url('SSS_Controller/getSSInfo/')?>'+getId, function(result){
		result = result['query'];

		$.each(result, function(key, value){

		var obj=jQuery.parseJSON(value['information']);

		$('#sss-Number').val(obj['sssNo']);
		$('#sss-FirstName').val(obj['firstName']);
		$('#sss-MiddleName').val(obj['middleName']);
		$('#sss-LastName').val(obj['lastName']);
		$('#sss-ExtName').val(obj['extName']);
		$('#sss-employeeSalary').val(obj['salary']);
		$('#sss-Contribution').val(obj['ssContribution']);
		$('#ec-Contribution').val(obj['ecContribution']);

		});

		
	});


	$('#sss-employeeSalary').on('keyup', function(){
		var empSalary = $('#sss-employeeSalary').val();

		if(empSalary < 1000){
			$('#sss-Contribution').val('0.00');
			$('#ec-Contribution').val('0.00');
		}else if(empSalary >= 1000 && empSalary <= 1249.99){
			$('#sss-Contribution').val('110.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 1250 && empSalary <= 1749.99){
			$('#sss-Contribution').val('165.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 1750 && empSalary <= 2249.99){
			$('#sss-Contribution').val('220.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 2250 && empSalary <= 2749.99){
			$('#sss-Contribution').val('275.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 2750 && empSalary <= 3249.99){
			$('#sss-Contribution').val('330.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 3250 && empSalary <= 3749.99){
			$('#sss-Contribution').val('385.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 3750 && empSalary <= 4249.99){
			$('#sss-Contribution').val('440.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 4250 && empSalary <= 4749.99){
			$('#sss-Contribution').val('495.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 4750 && empSalary <= 5249.99){
			$('#sss-Contribution').val('550.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 5250 && empSalary <= 5749.99){
			$('#sss-Contribution').val('605.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 5750 && empSalary <= 6249.99){
			$('#sss-Contribution').val('660.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 6250 && empSalary <= 6749.99){
			$('#sss-Contribution').val('715.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 6750 && empSalary <= 7249.99){
			$('#sss-Contribution').val('770.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 7250 && empSalary <= 7749.99){
			$('#sss-Contribution').val('825.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 7750 && empSalary <= 8249.99){
			$('#sss-Contribution').val('880.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 8250 && empSalary <= 8749.99){
			$('#sss-Contribution').val('935.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 8750 && empSalary <= 9249.99){
			$('#sss-Contribution').val('990.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 9250 && empSalary <= 9749.99){
			$('#sss-Contribution').val('1045.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 9750 && empSalary <= 10249.99){
			$('#sss-Contribution').val('1100.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 10250 && empSalary <= 10749.99){
			$('#sss-Contribution').val('1155.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 10750 && empSalary <= 11249.99){
			$('#sss-Contribution').val('1210.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 11250 && empSalary <= 11749.99){
			$('#sss-Contribution').val('1265.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 11750 && empSalary <= 12249.99){
			$('#sss-Contribution').val('1320.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 12250 && empSalary <= 12749.99){
			$('#sss-Contribution').val('1375.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 12750 && empSalary <= 13249.99){
			$('#sss-Contribution').val('1430.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 13250 && empSalary <= 13749.99){
			$('#sss-Contribution').val('1485.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 13750 && empSalary <= 14249.99){
			$('#sss-Contribution').val('1540.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 14250 && empSalary <= 14749.99){
			$('#sss-Contribution').val('1595.00');
			$('#ec-Contribution').val('10.00');
		}else if(empSalary >= 14750 && empSalary <= 15249.99){
			$('#sss-Contribution').val('1650.00');
			$('#ec-Contribution').val('30.00');
		}else if(empSalary >= 15250 && empSalary <= 15749.99){
			$('#sss-Contribution').val('1705.00');
			$('#ec-Contribution').val('30.00');
		}else if(empSalary >= 15750){
			$('#sss-Contribution').val('1760.00');
			$('#ec-Contribution').val('30.00');
		}
	});

	function getDataForm(){
		var formData = $('#edit-form-sss').serializeArray();
		var data = {};

		for(key in formData){
			var name=formData[key]['name'];
			var value=formData[key]['value'];
			data[name]=value;
		}
		return data;
	}


	$('#updateSSS').click(function(){
		var countSSNumber = $('#sss-Number').val().length;
		
		
			var postData = getDataForm();
			//alert(JSON.stringify(postData));

			$.ajax({
				method: "POST",
				url: "<?php echo base_url('sss-update/')?>"+getId,
				data: postData,
				success: function(result){
			        // result = result['data'];
			        if(result['success'] == 1){
			        	//alert("Your data was saved");
			        	$('.text-info').text('Data successfully updated!');
						$('#cancel-modal').modal('show');
						$('#cancel-yes').hide();
						$('#cancel-no').hide();
			        	//self.location = "<?php echo site_url('sss');?>";
			        }else{
			        	alert("You have an error");
			        }
			        
			    }
			});
		
		return false;
	});

	$('#backBtn').click(function(){
		self.location = "<?php echo site_url('sss');?>";
	});

</script>