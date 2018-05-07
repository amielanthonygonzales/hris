<html lang="en">
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
  <link rel="stylesheet" href="<?php echo base_url("assets/css") ?>/style.css" type="text/css"/>
  <title>HR Information System</title>
</head>
  <body class="am-splash-screen">
    <div class="am-wrapper am-login">
      <div class="am-content">
        <div class="main-content">
          <div class="login-container forgot-password">
            <div class="panel panel-default">
              <div class="panel-heading"><img src = "<?php echo base_url('assets/img/title-8.png'); ?>" alt="logo" width="150px" height="39px" class="logo-img"><span>Forgot your password?</span></div>
              <div class="panel-body">
                <form action="index.html" parsley-validate="" novalidate="" method="get" class="form-horizontal">
                  <p class="text-center">Don't worry, we'll send you an email to reset your password.</p>
                  <div class="form-group">
                    <div id="email-handler" class="input-group"><span class="input-group-addon"><i class="icon s7-mail"></i></span>
                      <input type="email" name="email" parsley-trigger="change" data-parsley-errors-messages-disabled="true" data-parsley-class-handler="#email-handler" required="" placeholder="Your Email" autocomplete="off" class="form-control" data-parsley-id="4">
                    </div>
                  </div>
                  <!-- <p class="contact text-center">Don't remember your email? <a href="#">Contact Support</a>.</p> -->
                  <button type="submit" class="btn btn-block btn-primary btn-lg">Reset Password</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url()?>amaretti/html/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>amaretti/html/assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>amaretti/html/assets/js/main.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>amaretti/html/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>
    <!-- <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	
      	$('form').parsley();
      
      });
    </script> -->
  
<div class="am-scroll-top"></div></body></html>