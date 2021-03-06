<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1">

    <link rel = "icon" href="<?php echo base_url("assets/app/img/hris-logo.png"); ?>"/>	
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('amaretti/html/assets/lib/font-awesome/css/font-awesome.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('amaretti/html/assets/lib/stroke-7/style.css');?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('amaretti/html/assets/lib/jquery.nanoscroller/css/nanoscroller.css');?>"/>
    <link rel="stylesheet" href="<?php echo base_url('amaretti/html/assets/css/style.css');?>" type="text/css"/>
    <!-- <link rel="stylesheet" href="<?php echo base_url("assets/css") ?>/style.css" type="text/css"/> -->
	<link rel="stylesheet" href="<?php echo base_url("assets/app") ?>/css/style.css" type="text/css"/>
	<title>HR Information System</title>
</head>

<body class="am-splash-screen">
    <div class="am-wrapper am-login">
      <div class="am-content">
        <div class="main-content">
          <div class="login-container">
            <div class="panel panel-default">
              <div class="panel-heading"><img src = "<?php echo base_url('assets/img/title-8.png'); ?>" alt="logo" width="150px" height="39px" class="logo-img"><span>Please enter your user information.</span></div>
              <div class="text-center message" style="display: none; color: #ec4b4b;"><i class="icon icon-left s7-attention"></i> Incorrect username or password!</div>
              <div class="panel-body">
                <form id="form-id" method="POST" class="form-horizontal">
                  <div class="login-form">
                    <div class="form-group">
                      <div class="input-group"><span class="input-group-addon"><i class="icon s7-user"></i></span>
                        <input id="username" autocomplete="off" type="text" placeholder="Username" autocomplete="off" class="form-control username" name="username">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group"><span class="input-group-addon"><i class="icon s7-lock"></i></span>
                        <input id="password" autocomplete="off" type="password" placeholder="Password" name="login" class="form-control password">
                      </div>
                    </div>
                    <div class="form-group forgot-button">
                    	<a href="#" class="btn-forgot">Forgot Password</a>
                    </div>
                    <div class="form-group login-submit">
                      <button data-dismiss="modal" class ="btn form-control login-btn" id="login-btn-index">LOGIN</button>
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
		$('.login-btn').off().click(function(e){
			e.preventDefault();
			var formdata = $('#form-id').serializeArray();
			var login_info = [];
			login_info.push($('.username').val());
			login_info.push($('.password').val());
			login_info = JSON.stringify(login_info);
			$.ajax({
				method: "POST",
					url: "<?php echo base_url('get-session')?>",
					data: {	username: $('.username').val(),
							password: $('.password').val()
							},
					success: function(result){
						if(result['query'] != ""){
							var id = "";
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
					},
					error: function(result){
						$('.message').show();
					}
			});
			//console.log(login_info);
		});

		$('.btn-forgot').off("click").click(function(e){
			window.parent.location = "<?php echo base_url('forgot-password')?>";
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