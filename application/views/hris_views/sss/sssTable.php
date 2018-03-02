<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1">

    <link href="<?php echo base_url('bootstrap/bootstrap.min.css');?>"  rel = "stylesheet"/>
     <link href="<?php echo base_url('assets/css/bootstrap-datetimepicker.min.css');?>"  rel = "stylesheet"/> 

     <link rel="stylesheet" type="text/css" href="<?php echo base_url('amaretti/html/assets/lib/datatables/css/dataTables.bootstrap.min.css');?>"/>
    <link rel="stylesheet" href="<?php echo base_url('amaretti/html/assets/css/style.css');?>" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('amaretti/html/assets/lib/stroke-7/style.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('amaretti/html/assets/lib/font-awesome/css/font-awesome.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('amaretti/html/assets/lib/jquery.nanoscroller/css/nanoscroller.css');?>"/>

	<title>HR Information System</title>
</head>
<body>
	<div class="container">
		<table id="total-table" class="table table-striped table-hover table-fw-widget">
			<thead>
				<tr>
					<th class="center">TOTAL SS CONTRIBUTION</th>
					<th class="center">TOTAL EC CONTRIBUTION</th>
					<th class="center">TOTAL CONTRIBUTION</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td id="total-ssContri" class="center"></td>
					<td id="total-ecContri"></td>
					<td id="total-contri"></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="container">
		<table id="info-table" class="table table-striped table-hover table-fw-widget">
			<thead>
				<tr>
					<th class="center">SS NUMBER</th>
					<th class="center">FIRST NAME</th>
					<th class="center">MIDDLE NAME</th>
					<th class="center">LAST NAME</th>
					<th class="center">EXTENSION NAME</th>
				</tr>
			</thead>
			<tbody id="sss-table">
			</tbody>
		</table>
	</div>

	<script src="<?php echo base_url('amaretti/html/assets/lib/jquery/jquery.min.js" type="text/javascript');?>"></script>
    <script src="<?php echo base_url('amaretti/html/assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js" type="text/javascript');?>"></script>
    <script src="<?php echo base_url('amaretti/html/assets/js/main.js" type="text/javascript');?>"></script>
    <script src="<?php echo base_url('amaretti/html/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript');?>"></script>
    <script src="<?php echo base_url('amaretti/html/assets/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript');?>"></script>
    <script src="<?php echo base_url('amaretti/html/assets/lib/datatables/js/dataTables.bootstrap.min.js" type="text/javascript');?>"></script>
    <script src="<?php echo base_url('amaretti/html/assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('amaretti/html/assets/lib/datatables/plugins/buttons/js/buttons.html5.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('amaretti/html/assets/lib/datatables/plugins/buttons/js/buttons.flash.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('amaretti/html/assets/lib/datatables/plugins/buttons/js/buttons.print.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('amaretti/html/assets/lib/datatables/plugins/buttons/js/buttons.colVis.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('amaretti/html/assets/lib/datatables/plugins/buttons/js/buttons.bootstrap.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('amaretti/html/assets/js/app-tables-datatables.js');?>" type="text/javascript"></script>

	<script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.min.js');?>"></script>
	<script src="<?php echo base_url('bootstrap/bootstrap.min.js');?>"></script>
</body>
</html>
<script type="text/javascript">
	var ecContributionTotal = 0;
	var ssContributionTotal = 0;
	var contributionTotal = 0;
	$.getJSON('<?php echo base_url('SSS_Controller/getEmployee')?>', function(result){
		result = result['query'];
		console.log(result);

		var lengthResult = result.length;

		for(var x=1; x<=lengthResult; x++){
			var trColumn = $("<tr></tr>");
			trColumn.attr('id', 'sssEmployee' + x);
			$('#sss-table').append(trColumn);
		} 

		$.each(result, function(key,value){
			key = key + 1;
			var obj=jQuery.parseJSON(value['information']);

			var tdSSNo = $("<td></td>");
			tdSSNo.html(obj['sssNo']);
			$('#sssEmployee'+key).append(tdSSNo);

			var tdFirstName = $("<td></td>");
			tdFirstName.html(obj['firstName']);
			$('#sssEmployee'+key).append(tdFirstName);

			var tdMiddleName = $("<td></td>");
			tdMiddleName.html(obj['middleName']);
			$('#sssEmployee'+key).append(tdMiddleName);

			var tdLastName = $("<td></td>");
			tdLastName.html(obj['lastName']);
			$('#sssEmployee'+key).append(tdLastName);

			var tdExtName = $("<td></td>");
			tdExtName.html(obj['extName']);
			$('#sssEmployee'+key).append(tdExtName);

			var tdAnchorView = $('<a></a>');
			tdAnchorView.attr("href", "<?= base_url('sss-view/')?>"+value['id']);
			tdAnchorView.attr("class", "text-info");
			tdAnchorView.attr("id", "anchorViewSS"+key);
			$('#sssEmployee'+key).append(tdAnchorView);

			var tdAnchorEdit = $('<a></a>');
			tdAnchorEdit.attr("href", "<?= base_url('sss-edit/')?>"+value['id']);
			tdAnchorEdit.attr("class", "text-success");
			tdAnchorEdit.attr("id", "anchorEditSS"+key);
			$('#sssEmployee'+key).append(tdAnchorEdit);

			ecContributionTotal += parseInt(obj['ecContribution']);
			ssContributionTotal += parseInt(obj['ssContribution']);

			//alert(ecContributionTotal);

		});
		contributionTotal = ecContributionTotal + ssContributionTotal;
		console.log(contributionTotal);
		for(x=1; x<=lengthResult; x++){

			var tdView=$('<td></td>');
			tdView.attr('class','icon icon-left fa fa-eye');
			$('#anchorViewSS'+x).append(tdView);

			var tdEdit=$('<td></td>');
			tdEdit.attr('class','icon icon-left fa fa-edit');
			$('#anchorEditSS'+x).append(tdEdit);
		}

		$('#total-ssContri').append(ssContributionTotal);
		$('#total-ecContri').append(ecContributionTotal);
		$('#total-contri').append(contributionTotal);

	});

</script>