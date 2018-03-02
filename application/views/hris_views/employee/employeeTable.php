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
						<p class="text-info delete-message"></p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal" id="cancel-no">No</button>
						<button type="button" class="btn btn-success" id="cancel-yes">Yes</button>
					</div>
				</div>
			</div>
		</div>

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
	<script src="<?php echo base_url('assets/css/style.css');?>"></script>
</body>
</html>

<script type="text/javascript">
	

	$.getJSON('<?php echo base_url('RegisterEmp_Controller/getName')?>', function(result){
		result = result['query'];

		var y = result.length;
		
		
		for(x=1; x<=y; x++){
				var trColumn = $("<tr></tr>");
				trColumn.attr("id","table-information"+x);
				$('#table-emp').append(trColumn);
			}
		$.each(result, function(key, value){
			key= key+1;
			console.log(key);
			var tdColumnFname = $('<td></td>');
			tdColumnFname.attr("id","empFname");
			tdColumnFname.html(value['firstName']);
			$('#table-information'+key).append(tdColumnFname);

			var tdColumnMname = $('<td></td>');
			tdColumnMname.attr("id","empMname");
			tdColumnMname.html(value['middleName']);
			$('#table-information'+key).append(tdColumnMname);

			var tdColumnLname = $('<td></td>');
			tdColumnLname.attr("id","empLname");
			tdColumnLname.html(value['lastName']);
			$('#table-information'+key).append(tdColumnLname);

			var tdColumnExtName = $('<td></td>');
			tdColumnExtName.attr("id","empExtName");
			tdColumnExtName.html(value['extName']);
			$('#table-information'+key).append(tdColumnExtName);

			var tdColumnBdate = $('<td></td>');
			tdColumnBdate.attr("id","empBdate");
			tdColumnBdate.html(value['birthday']);
			$('#table-information'+key).append(tdColumnBdate);

			var anchorView = $('<a></a>')
			anchorView.attr('href',"<?= base_url('employee-view/')?>"+value['id']);
			anchorView.attr('id', 'anchorView' + key);
			anchorView.attr('class','text-info');
			$('#table-information' + key).append(anchorView);

			var tdButtonDelete=$('<a></a>');
			tdButtonDelete.attr('id','functionButtonDelete'+key);
			tdButtonDelete.attr('onclick','callModal('+value['id']+')');
			tdButtonDelete.attr('class','text-danger');
			$('#table-information'+key).append(tdButtonDelete);
			

		});
		for(x=1; x<=y; x++){

			var spanView=$('<td></td>');
			spanView.attr('class','icon icon-left fa fa-eye');
			$('#anchorView'+x).append(spanView);

			var spanDelete=$('<td></td>');
			spanDelete.attr('class','icon icon-left fa fa-close');
			$('#functionButtonDelete'+x).append(spanDelete);
		}
	});

	$('#spanClick').on('click', function(){
		alert("gumana!");
	});


	function callModal(id){
		$('.delete-message').text('Ooops! Are you sure you want to delete this data?');
		$('#cancel-modal').modal('show');
		$('#cancel-yes').show();
		$('#cancel-no').show();

		$('#cancel-yes').on('click',function(){
			$.ajax({
				method: "POST",
				url: "<?php echo base_url('changeStatus/')?>"+id,
				success: function(result){
					$('.delete-message').text('Data successfully deleted!');
					$('#cancel-modal').modal('show');
					$('#cancel-yes').hide();
					$('#cancel-no').hide();
				}
			});
			
		});

		$('#cancel-no').on('click', function(){
			$('#cancel-modal').modal('hide');
			$('#cancel-yes').hide();
			$('#cancel-no').hide();
		});

	}

</script>