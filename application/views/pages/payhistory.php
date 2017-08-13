<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- To clear any cache -->
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Paymeny History</title>
    <link rel="icon" href="<?php echo base_url(); ?>images/temblem.png" type="image/png">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url(); ?>css/viewport.css" rel="stylesheet">

    <!-- Including JS File Here -->
    <!--<script src="<?php echo base_url(); ?>js/multi_step_form.js" type="text/javascript"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/payhistory.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>pages/view/index">HOME</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url(); ?>pages/view/about">About</a></li>
            <li><a href="<?php echo base_url(); ?>donate_ctrl/getstep1">DONATE</a></li>
            <li><a href="<?php echo base_url(); ?>pages/view/faq">FAQs</a></li>            
            <li><a href="<?php echo base_url(); ?>pages/view/subscribe">Subscribe</a></li>
            <li><a href="<?php echo base_url(); ?>pages/view/contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="jumbotron">
      <div class="container">
        <h1>Payment History</h1>
        <p>Obtain the donation details you have made in the past.</p>
      </div>
    </div>
    <section class="tom" id="donate">
        <div class="container">
            <div class="row">
                    <div class="content">
                    
                    <!-- Multistep Form -->
                    <div class="main">
                    <form method="POST" name="contact_form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"> 
                    <!-- Progressbar -->
                    <ul id="progressbar">
                    <div class="don">
                    <li id="active1">1)Personal Details</li>
                    <li id="active2">2)Transaction Details</li>
                    </div>
                    </ul>

                    <!--Step 1 -->
                    <fieldset id="first">
                    <h2 class="title">Personal Details</h2>
                    <p class="subtitle">Step 1</p>
                    <input class="text_field" name="fname" placeholder="First Name" type="text">
                    <input class="text_field" name="lname" placeholder="Last Name" type="text">
                    <label>Gender:</label>
                    <input name="gender" type="radio" value="Male">Male
                    <input name="gender" type="radio" value="Female">Female
                    <input class="text_field" name="email"  placeholder="Email" type="email">
                    <input class="text_field" name="mobile" placeholder="Mobile" type="tel">
                    <input id="next_btn1" onclick="next_step1(); validation(event)" type="button" value="Next">
                    </fieldset>

                    <!--Step 2--> 
                    <fieldset id="second">
                    <h2 class="title">Transaction Details</h2>
                    <p class="subtitle">Step 2</p>
                    <input class="text_field" name="tno" placeholder="Transaction Number" type="text" value="">
                    <label>Date:</label>
                    <input type="Date">
                    <input type="Date">
                    <label>Security Text:</label>
                    <img id="captcha" src="" style="min-width:206px; max-width:25%; width:90%" alt="CAPTCHA Image">
                    <a href="#" onclick="document.getElementById('captcha').src = '' + Math.random(); return false">[Reload Image]</a><br><br>
                    <label for="message">Enter the code above here :</label>
                    <input id="captcha" name="captcha" type="text">
                    <input id="pre_btn1" onclick="prev_step1()" type="button" value="Previous">
                    <input class="submit_btn" onclick="validation(event)" type="submit" value="Search">
                    </fieldset>
                    </form>
                    </div>
                    </div>
            </div>
        </div>
    </section>
    <hr>
     <!-- FOOTER -->
              <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy;2017, National Informatics Center</p>
              </footer>
  </body>
</html>
