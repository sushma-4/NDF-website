<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Contact Us</title>
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
    <link href="<?php echo base_url(); ?>css/contact.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <div class="row header">
        <h1>CONTACT US &nbsp;</h1>
        <h3>Please reach out for questions or suggestions!</h3>
      </div>
      <div class="row body">
        
          <?php echo form_open('contact_ctrl/insert'); ?>

          <ul>
            <li style="width: 50%;  float: left">
                <label for="first_name">First name<span class="req">*</span></label>
                <input type="text" name="first_name" placeholder="Sneha" value="<?php echo set_value('first_name'); ?>"/>
                <?php echo form_error('first_name', '<div class="error">', '</div>'); ?>
            </li>

            <li style="width: 50% ;  float:left" >
                <label for="last_name">Last name</label>
                <input type="text" name="last_name" placeholder="Rai" value="<?php echo set_value('last_name'); ?>"/>    
            </li>
            
            <li>
                <label for="email">email<span class="req">*</span></label>
                <input type="email" name="email" placeholder="sneha.rai@gmail.com" value="<?php echo set_value('email'); ?>"/>              <?php echo form_error('email', '<div class="error">', '</div>'); ?>
            </li>        

            <li>
            <div class="divider"></div></li>
            <li>
              <label for="message">Your message<span class="req">*</span></label>
              <textarea cols="46" rows="3" name="message" ><?php echo set_value('message')."\n".html_escape(''); ?></textarea>
              <?php echo form_error('message', '<div class="error">', '</div>'); ?>
            </li>
            
            <li>
              <input class="btn btn-submit" type="submit" value="Submit" >
            </li>
            
          </ul>
        <?php echo form_close(); ?> 
      </div>
    </div>
  </body>
</html>

