<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1">

    <link rel = "icon" href="assets/img/hrLogo.png"  />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('amaretti/html/assets/lib/font-awesome/css/font-awesome.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('amaretti/html/assets/lib/stroke-7/style.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('amaretti/html/assets/lib/jquery.nanoscroller/css/nanoscroller.css');?>"/>
    <link rel="stylesheet" href="<?php echo base_url('amaretti/html/assets/css/style.css');?>" type="text/css"/>
	<title>HR Information System</title>
</head>

<body class="am-splash-screen">
    <div class="am-wrapper am-login">
      <div class="am-content">
        <div class="main-content">
          <div class="login-container">
            <div class="panel panel-default">
              <div class="panel-heading"><img src = "<?php echo base_url('assets/img/title-8.png'); ?>" alt="logo" width="150px" height="39px" class="logo-img"><span>Please enter your user information.</span></div>
              <div class="panel-body">
                <form id="form-id" class="form-horizontal">
                  <div class="login-form">
                    <div class="form-group">
                      <div class="input-group"><span class="input-group-addon"><i class="icon s7-user"></i></span>
                        <input id="username" type="text" placeholder="Username" autocomplete="off" class="form-control username" name="username">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group"><span class="input-group-addon"><i class="icon s7-lock"></i></span>
                        <input id="password" type="password" placeholder="Password" name="login" class="form-control password">
                      </div>
                    </div>
                    <div class="form-group login-submit">
                      <button data-dismiss="modal" type="submit" class ="btn btn-primary form-control login-btn">LOGIN</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
<div class="am-scroll-top"></div>
	
	<script src="<?php echo base_url()?>amaretti/html/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>amaretti/html/assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>amaretti/html/assets/js/main.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>amaretti/html/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>
</body>

<script type="text/javascript">
		/*var pageIndex = {};
		pageIndex.init = function(selector, callback){
			pageIndex.elem = $(selector);
			pageIndex.elem.find('.login-btn').off('click').click(function(){
				var login_info = [];
				login_info.push(pageIndex.elem.find('.username').val());
				login_info.push(pageIndex.elem.find('.password').val());

				console.log("Hello");

				callback();
			});
		}*/
		$('.login-btn').click(function(){
			// var login_info = [];
			// login_info.push($('.username').val());
			// login_info.push($('.password').val());
			// login_info = JSON.stringify(login_info);
			$.ajax({
				method: "POST",
					url: "<?php echo base_url('get-session')?>",
					data: {	username: $('.username').val(),
							password: $('.password').val()
							},
					success: function(result){
						console.log(result);
						if(result['query'] != ""){
							var id = "";
							//location.replace("<?php echo base_url('employee-edit')?>")
							$.each(result['query'],function(key,value){
								if(key == 'emp_id'){	
									id = value;
								}
								else if(key == 'emp_position' && value == 'employee'){
									window.parent.location = "<?php echo base_url('employee-edit/')?>"+id;

								}
								else if(key == 'emp_position' && value == 'admin'){
									window.parent.location = "<?php echo base_url('dashboard')?>";
								}
							});
							
						}
					}
			});
			//console.log(login_info);
		});

		$(document).keypress(function(event){
			var keycode = (event.keyCode ? event.keyCode : event.which);
			if(keycode == '13'){
				//alert('You pressed a "enter" key in somewhere');
				$('.login-btn').trigger('click');
			}
		});

	</script>
</html>