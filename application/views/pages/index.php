<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>NDF</title>
    <link rel="icon" href="<?php echo base_url(); ?>images/temblem.png" type="image/png">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url(); ?>css/viewport.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script ref="<?php echo base_url(); ?>https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script ref="<?php echo base_url(); ?>https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/index.css" rel="stylesheet">
  </head>
<!-- NAVBAR ================================================= -->
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
          <a class="navbar-brand" href="<?php echo base_url(); ?>pages/view/index"><font color="black">National Defence Fund</font></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url(); ?>pages/view/subscribe"><font color="black">Subscribe</font></a></li>
            <li><a href="<?php echo base_url(); ?>pages/view/payhistory"><font color="black">Payment History</font></a></li>
            <li class="active"><a href="<?php echo base_url(); ?>pages/view/contact"><font color="black">Contact</font></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo base_url(); ?>images/slide1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <img src="<?php echo base_url(); ?>images/semblem.png">
              <h1><b>National Defence Fund</b></h1>
              <p>Raising funds towards welfare of the members of Armed (including Paramilitary) forces and their dependents. Subscribe to receive event notifications and newsletters.</p>
              <p><a class="btn btn-lg btn-primary" href="<?php echo base_url(); ?>donate_ctrl/getstep1" role="button">DONATE</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo base_url(); ?>images/slide2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1></h1>
              <p>Three years of Modi Government!</p>
              <p><a class="btn btn-lg btn-primary" href="http://www.narendramodi.in/" role="button" target="blank">Learn more</a></p>
            </div>
          </div>
        </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="<?php echo base_url(); ?>images/about.png" alt="About NDF" width="140" height="140">
          <h2>About NDF</h2>
          <p>Natioanl Defence Fund abbreviated as NDF accepts voluntary donations from individuals, Organizations, trusts and companies etc.</p>
          <p><a class="btn btn-default" href="<?php echo base_url(); ?>pages/view/about" role="button">Know more &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php echo base_url(); ?>images/FAQs.jpg" alt="FAQs" width="140" height="140">
          <h2>Frequently Asked Questions</h2>
          <p>Here is a list of answers for questions like payment modes and netbanking options.</p>
          <p><a class="btn btn-default" href="<?php echo base_url(); ?>pages/view/faq" role="button">Click Here &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="<?php echo base_url(); ?>images/donate.jpg" alt="Donate" width="140" height="140">
          <h2>Contribute</h2>
          <p>All your valuable donations will be utilized for various schemes under NDF.</p>
          <p><a class="btn btn-default" href="<?php echo base_url(); ?>donate_ctrl/getstep1" role="button">Donate Online &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Schemes under National Defence Fund <span class="text-muted"></span></h2>
          <p class="lead"> A scholarship scheme to encourage technical and post graduation education for the widows and wards of the deceased personnel of Armed Forces and Para Military Forces is being implemented. The scheme is being implemented by the Department of Ex-Servicemen Welfare, Ministry of Defence in respect of armed forces. In so far as personnel of paramilitary forces and Railway Protection force are concerned, the scheme is being implemented by Ministry of Home Affairs and Ministry of Railways respectively. <br> To know more about it, follow the link: <a href="http://www.scholarships.gov.in/" target="blank">http://www.scholarships.gov.in/</a> </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo base_url(); ?>images/w1.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">“PM’s Scholarship Scheme” being implemented out of NDF<span class="text-muted"></span></h2>
          <p class="lead">The scheme applies to armed forces (including paramilitary forces). Monthly scholarships are awarded to wards of (a) Ex-service personnel (below officer rank only), (b) their widows, (c) widows of personnel died in harness due to causes attributable to line of duty and (d) wards and widows of in service personnel of paramilitary forces and Railway Protection Force. </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="<?php echo base_url(); ?>images/w2.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">NDF released towards SPG Family Welfare Fund <span class="text-muted"></span></h2>
          <p class="lead">Annual grant of Rs. 15 lakh from NDF is being released to the SPG Family Welfare Fund to undertake various welfare activities that includes child development initiatives and health services for the benefit of its personnel and their families.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="<?php echo base_url(); ?>images/w3.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy;2017, National Informatics Center</p>
      </footer>

    </div><!-- /.container -->





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script ref="<?php echo base_url(); ?>js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  </body>
</html>
