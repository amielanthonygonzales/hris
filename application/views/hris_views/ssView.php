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
			</div>

			<div id="sss-firstName" class="form-group">
				<label for="ssFirstName">FIRST NAME</label>
			</div>
			<div id="sss-middleName" class="form-group">
				<label for="ssMiddleName">MIDDLE NAME</label>
			</div>
			<div id="sss-lastName" class="form-group">
				<label for="ssLastName">LAST NAME</label>
			</div>
			<div id="sss-extName" class="form-group">
				<label for="ssExtName">EXT NAME</label>
			</div>
			<div class="row form-group">
				<div class="col-md-4" id="ss-salary">
					<label for="ssSalary">SALARY</label>
				</div>
				<div class="col-md-4" id="ss-contribution">
					<label for="ssContribution">SS CONTRIBUTION</label>
				</div>
				<div class="col-md-4" id="ec-contribution">
					<label for="ecContribution">EC CONTRIBUTION</label>
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

		var inputSSNo = $('<input/>');
		inputSSNo.attr('id', 'ssNo');
		inputSSNo.attr('class','form-control');
		inputSSNo.attr('type','text');
		inputSSNo.attr('name','ssNo');
		inputSSNo.attr('readonly','');
		inputSSNo.attr('value',obj['sssNo']);
		$('#sss-No').append(inputSSNo);

		var inputFirstName = $('<input/>');
		inputFirstName.attr('id', 'ssFirstName');
		inputFirstName.attr('class','form-control');
		inputFirstName.attr('type','text');
		inputFirstName.attr('name','ssFirstName');
		inputFirstName.attr('readonly','');
		inputFirstName.attr('value',obj['firstName']);
		$('#sss-firstName').append(inputFirstName);

		var inputMiddleName = $('<input/>');
		inputMiddleName.attr('id', 'ssMiddleName');
		inputMiddleName.attr('class','form-control');
		inputMiddleName.attr('type','text');
		inputMiddleName.attr('name','ssMiddleName');
		inputMiddleName.attr('readonly','');
		inputMiddleName.attr('value',obj['middleName']);
		$('#sss-middleName').append(inputMiddleName);

		var inputLastName = $('<input/>');
		inputLastName.attr('id', 'ssLastName');
		inputLastName.attr('class','form-control');
		inputLastName.attr('type','text');
		inputLastName.attr('name','ssLastName');
		inputLastName.attr('readonly','');
		inputLastName.attr('value',obj['lastName']);
		$('#sss-lastName').append(inputLastName);

		var inputExtName = $('<input/>');
		inputExtName.attr('id', 'ssExtName');
		inputExtName.attr('class','form-control');
		inputExtName.attr('type','text');
		inputExtName.attr('name','ssExtName');
		inputExtName.attr('readonly','');
		inputExtName.attr('value',obj['extName']);
		$('#sss-extName').append(inputExtName);

		var inputSalaryName = $('<input/>');
		inputSalaryName.attr('id', 'ssSalary');
		inputSalaryName.attr('class','form-control');
		inputSalaryName.attr('type','text');
		inputSalaryName.attr('name','ssSalary');
		inputSalaryName.attr('readonly','');
		inputSalaryName.attr('value',obj['salary']);
		$('#ss-salary').append(inputSalaryName);

		var inputSSContribution = $('<input/>');
		inputSSContribution.attr('id', 'ssContribution');
		inputSSContribution.attr('class','form-control');
		inputSSContribution.attr('type','text');
		inputSSContribution.attr('name','ssContribution');
		inputSSContribution.attr('readonly','');
		inputSSContribution.attr('value',obj['ssContribution']);
		$('#ss-contribution').append(inputSSContribution);

		var inputERContribution = $('<input/>');
		inputERContribution.attr('id', 'ecContribution');
		inputERContribution.attr('class','form-control');
		inputERContribution.attr('type','text');
		inputERContribution.attr('name','ecContribution');
		inputERContribution.attr('readonly','');
		inputERContribution.attr('value',obj['ecContribution']);
		$('#ec-contribution').append(inputERContribution);

		});
		
	});

</script>