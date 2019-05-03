<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    body
    {
      font-family: sans-serif;
	    background: #d5f0f3;
    }
    .kotak
    {
      width: 350px;
      background: white;
      margin-top: 150px;
      padding: 100px 30px;
    }
    .oke
    {
    background: #46de4b;
  	color: white;
  	font-size: 13pt;
  	border-radius: 3px;
  	padding: 10px 20px;
    text-decoration: none;
    }
    .input
    {
      box-sizing : border-box;
      width: 100%;
      padding: 6px;
      font-size: 11pt;
      margin-bottom: 10px;
    }
    </style>
  </head>
  <body>
    <center>
    <div class="kotak">
      <form class="" action="<?php echo base_url('login/login'); ?>" method="post">
        <?php if($this->session->flashdata('msg_alert_error')) { ?>
              <div class="alert alert-danger">
                  <?=$this->session->flashdata('msg_alert_error');?>
              </div>
        <?php } ?>
        <?php if($this->session->flashdata('msg_alert')) { ?>
              <div class="alert alert-success">
                  <?=$this->session->flashdata('msg_alert');?>
              </div>
        <?php } ?>
        <h1 style="margin-top:-20px">LOGIN</h1>
        <br>
          <input type="text" name="username" class="input" placeholder="Username">
          <br>
          <br>
          <input type="text" name="password" class="input" placeholder="Password">
          <br>
          <br>
          <b>
          <input type="submit" class="oke" name="" value="LOGIN">
          <?php echo $this->session->flashdata('message');?>
        </b>
      </form>
    </div>
  </body>
</html>
