<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Subscribe form</title>
    <link rel="icon" href="<?php echo base_url(); ?>images/temblem.png" type="image/png">

    <!-- Font awesome -->
    <link rel="stylesheet" href="../../fonts/font-awesome/css/font-awesome.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url(); ?>css/viewport.css" rel="stylesheet">
   
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/subscribe.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
      <div class="testbox">
      <h1>Thank You for your Interest!</h1>

      <form action="/">
          <hr>
        <div class="accounttype">
          <input type="radio" value="None" id="radioOne" name="account" checked/>
          <label for="radioOne" class="radio" chec>Individual</label>
          <input type="radio" value="None" id="radioTwo" name="account" />
          <label for="radioTwo" class="radio">Organization</label>
        </div>
      <hr>
      <label id="icon" for="name"><i class="fa fa-user-o" aria-hidden="true"></i></label>
      <input type="text" name="name" id="name" placeholder="Name" required/>
      <label id="icon" for="name"><i class="fa fa-envelope" aria-hidden="true"></i></label>
      <input type="text" name="name" id="name" placeholder="Email" required/>
      <a href="#" class="button">Subscribe</a>
      </form>
    </div>
  </body>
</html>