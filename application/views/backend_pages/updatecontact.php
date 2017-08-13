<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Updating Contact</title>
    <link rel="icon" href="<?php echo base_url(); ?>images/temblem.png" type="image/png">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url(); ?>css/viewport.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/update_contactdata.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <H1><font face='Constantia'>Update a Contact</font></H1>

      <?php echo form_open(''); ?>
      <?php 
      foreach ($result as $row) 
      {  ?>


      <label for="fname">First Name<span class="req">*</span></label>
      <input type="text" id="fname" name="firstname"  value="<?php echo $row->firstname; ?>"/>
      <?php echo form_error('firstname', '<div class="error">', '</div>'); ?>

      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname"  value="<?php echo $row->lastname; ?>"/>

      <label for="email">E-mail<span class="req">*</span></label>
      <input type="text" id="lname" name="email"  value="<?php echo $row->email; ?>"/>
      <?php echo form_error('email', '<div class="error">', '</div>'); ?>

      <label for="message">Message<span class="req">*</span></label>
      <textarea cols="50" rows="6" name="message"><?php echo $row->message."\n".html_escape(''); ?></textarea>
      <?php echo form_error('message', '<div class="error">', '</div>'); ?>

      <input type="hidden" name="id"  value="<?php echo $row->s_no; ?>">

      <input type="submit" value="Update" >
      <?php } ?>

      <?php echo form_close(); ?> 
    </div>
  </body>
</html>