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
  <!-- <link rel="stylesheet" href="<?php echo base_url("assets/css") ?>/style.css" type="text/css"/> -->
  <title>HR Information System</title>
</head>

<body class="am-splash-screen">
  <div class="am-wrapper am-login">
    <div class="am-content">
      <div class="main-content">
        <div class="forgot-container">
          <div class="panel panel-default">
            <div class="panel-heading"><img src = "<?php echo base_url('assets/img/title-8.png'); ?>" alt="logo" width="150px" height="39px" class="logo-img"><span>Please enter your user information.</span></div>
            <div class="text-center message" style="display: none; color: #ec4b4b;"><i class="icon icon-left s7-attention"></i></div>
            <div class="panel-body">
              <form id="form-id" method="POST" class="form-horizontal">
                <div class="login-form">
                  <div class="form-group">
                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-user"></i></span>
                      <input id="username" autocomplete="off" type="text" placeholder="Username" autocomplete="off" class="form-control username" name="username">
                    </div>
                  </div>
                  <div class="form-group login-submit">
                    <div class="row">
                      <div class="col-md-6">
                        <button data-dismiss="modal" class ="btn form-control back-btn">CANCEL</button>
                      </div>
                      <div class="col-md-6">
                        <button data-dismiss="modal" class ="btn form-control submit-username">SUBMIT</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <form id="question-form" method="POST" class="form-horizontal">
                <div class="login-form">
                  <div class="form-group">
                    <p class="hint-question"></p>
                    <div class="input-group"><span class="input-group-addon"><i class="icon s7-help1"></i></span>
                      <input id="username" autocomplete="off" type="text" placeholder="Answer" autocomplete="off" class="form-control hint-answer" name="username">
                    </div>
                  </div>
                  <div class="form-group login-submit">
                    <div class="row">
                      <div class="col-md-6">
                        <button data-dismiss="modal" class ="btn form-control back-btn">CANCEL</button>
                      </div>
                      <div class="col-md-6">
                        <button data-dismiss="modal" class ="btn form-control answer-submit">SUBMIT</button>
                      </div>
                    </div>
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
  $('#question-form').hide();
  $('#form-id').show();
    $('.submit-username').off().click(function(e){
      e.preventDefault();
      var formdata = $('#form-id').serializeArray();
      var login_info = [];
      login_info.push($('.username').val());
      login_info.push($('.password').val());
      login_info = JSON.stringify(login_info);
      $.ajax({
        method: "POST",
          url: "<?php echo base_url('get-username')?>",
          data: { username: $('.username').val()
              },
          success: function(result){
            console.log(result);
            if(result['query'] == 'error'){
              
              $('.message').text('No username found!');
              $('.message').show();
            }else{
              $('#question-form').show();
              $('#form-id').hide();
              $('.hint-question').text(result['query']['emp_hint_question'] + "?");

            }

          }

      });
    });

    $('.answer-submit').off().click(function(e){
      e.preventDefault();
      var formdata = $('#form-id').serializeArray();
      var login_info = [];
      login_info.push($('.username').val());
      login_info.push($('.password').val());
      login_info = JSON.stringify(login_info);
      $.ajax({
        method: "POST",
          url: "<?php echo base_url('get-answer')?>",
          data: { username: $('.username').val(),
                  answer: $('.hint-answer').val()
              },
          success: function(result){
            console.log(result);
            if(result['query'] == 'error'){
              $('.message').text('Wrong answer!');
              $('.message').show();
            }else{
              if(result['query'] != ""){
                var id = "";
                $.each(result['query'],function(key,value){
                  if(key == 'emp_id'){  
                    id = value;
                     window.parent.location = "<?php echo base_url('password-edit/')?>"+id;
                  }
                  // else if(key == 'emp_position' && value == 'employee'){
                  //   window.parent.location = "<?php echo base_url('password-edit/')?>"+id;
                  // }
                  // else if(key == 'emp_position' && value == 'admin'){
                  //   window.parent.location = "<?php echo base_url('dashboard')?>";
                  // }

                });
              }

            }

          }

      });
    });

    $('.back-btn').off().click(function(e){
      e.preventDefault();
      window.parent.location = "<?php echo base_url('index'); ?>";
      //alert("h");
    });
  </script>
</html>