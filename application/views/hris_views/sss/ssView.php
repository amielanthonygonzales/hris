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
		<form>

			<div id="sss-No" class="form-group">
				<label for="ssNo">SSS NUMBER</label>
				<input type="number" name="ssNo" id="" class="form-control" readonly />
			</div>

			<div id="sss-firstName" class="form-group">
				<label for="ssFirstName">FIRST NAME</label>
				<input type="text" name="ssFirstName" class="form-control" id="sss-FirstName" readonly/>
			</div>
			<div id="sss-middleName" class="form-group">
				<label for="ssMiddleName">MIDDLE NAME</label>
				<input type="text" name="ssMiddleName" id="sss-MiddleName" class="form-control" readonly/>
			</div>
			<div id="sss-lastName" class="form-group">
				<label for="ssLastName">LAST NAME</label>
				<input type="text" name="ssLastName" id="sss-LastName" class="form-control" readonly/>
			</div>
			<div id="sss-extName" class="form-group">
				<label for="ssExtName">EXT NAME</label>
				<input type="text" name="ssExtName" id="sss-ExtName" class="form-control" readonly/>
			</div>
			<div class="row form-group">
				<div class="col-md-4" id="sss-salary">
					<label for="ssSalary">SALARY</label>
					<input type="number" name="ssSalary" id="sss-employeeSalary" class="form-control" readonly />
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
			
		</form>
		
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
		console.log(result);

		var obj=jQuery.parseJSON(value['information']);

		$('#sss-No').val(obj['sssNo']);
		$('#sss-FirstName').val(obj['firstName']);
		$('#sss-MiddleName').val(obj['middleName']);
		$('#sss-LastName').val(obj['lastName']);
		$('#sss-ExtName').val(obj['extName']);
		$('#sss-employeeSalary').val(obj['salary']);
		$('#sss-Contribution').val(obj['ssContribution']);
		$('#ec-Contribution').val(obj['ecContribution']);

		});
		
	});

</script>