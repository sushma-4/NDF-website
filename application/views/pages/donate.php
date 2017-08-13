<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Donate</title>
    <link rel="icon" href="<?php echo base_url(); ?>images/temblem.png" type="image/png">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url(); ?>css/viewport.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url(); ?>https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="<?php echo base_url(); ?>https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/donate.css" rel="stylesheet">

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
            <li><a href="<?php echo base_url(); ?>pages/view/payhistory">Payment History</a></li>
            <li><a href="<?php echo base_url(); ?>pages/view/faq">FAQs</a></li>            
            <li><a href="<?php echo base_url(); ?>pages/view/subscribe">Subscribe</a></li>
            <li><a href="<?php echo base_url(); ?>pages/view/contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <div class="jumbotron">
      <div class="container">
        <h1>Donate towards NDF</h1>
        <p>Thank you for stopping by! India takes pride in citizens like you!</p>
      </div>
    </div>
    <section class="tom" id="donate">
        <div class="container">
            <div class="row">
                    <div class="content">
                    
                    <!-- Multistep Form -->
                    <div class="main">

                    <?php echo form_open('donate_ctrl/getstep1'); ?>


                    <?php if ($step==1) 

                    { ?>

                    <fieldset id="steps">
                    <h2 class="title">Personal Details</h2>
                    <p class="subtitle">Step 1</p>
                    <label><font size="4px" font face="Californian FB" color="brown">Note: All fields are mandatory</font></label>

                    <input class="text_field" name="fname" placeholder="First Name" type="text" value="<?php echo set_value('fname'); ?>">
                    <?php echo form_error('fname', '<div class="error">', '</div>'); ?>

                    <input class="text_field" name="lname" placeholder="Last Name" type="text" value="<?php echo set_value('lname'); ?>" >
                    <?php echo form_error('lname', '<div class="error">', '</div>'); ?>

                    <label>Gender:</label>
                    <input name="gender" type="radio" value="Male">Male
                    <input name="gender" type="radio" value="Female">Female
                    <?php echo form_error('gender', '<div class="error">', '</div>'); ?>


                    <input class="text_field" name="address" placeholder="Address" type="text" value="<?php echo set_value('address'); ?>">
                    <?php echo form_error('address', '<div class="error">', '</div>'); ?>

                    <input class="text_field" name="zip" placeholder="Zipcode" type="text" value="<?php echo set_value('zip'); ?>">
                    <?php echo form_error('zip', '<div class="error">', '</div>'); ?>
                    
                    <select name="country" class="options">
                    <option>--Select Country--</option>
                    <option value="301">Algeria</option><option value="302">Angola</option><option value="317">Benin</option><option value="322">Botswana</option><option value="327">Burkina Faso</option><option value="328">Burundi</option><option value="329">Cameroon</option><option value="331">Cape Verde</option><option value="333">Central African Repu</option><option value="334">Chad</option><option value="511">Comoros</option><option value="339">Congo</option><option value="193">Cote D'Ivoire</option><option value="345">Djibouti</option><option value="349">Egypt</option><option value="352">Equatorial Guinea</option><option value="513">Eritrea</option><option value="354">Ethiopia</option><option value="517">Gabon</option><option value="360">Gambia</option><option value="518">Gaza Strip</option><option value="362">Ghana</option><option value="368">Guinea</option><option value="369">Guinea-Bissau</option><option value="386">Kenya</option><option value="391">Lesotho</option><option value="221">Liberia</option><option value="533">Libya</option><option value="396">Madagascar</option><option value="397">Malawi</option><option value="100">Mali</option><option value="104">Mauritania</option><option value="105">Mauritius</option><option value="535">Mayotte</option><option value="110">Morocco</option><option value="111">Mozambique</option><option value="112">Namibia</option><option value="119">Niger</option><option value="120">Nigeria</option><option value="133">Reunion</option><option value="136">Rwanda</option><option value="229">Sao Tome</option><option value="150">Senegal</option><option value="151">Seychelles</option><option value="152">Sierra Leone</option><option value="154">Somalia</option><option value="155">South Africa</option><option value="158">Sudan</option><option value="160">Swaziland</option><option value="165">Tanzania</option><option value="551">Tobago</option><option value="167">Togo</option><option value="169">Tunisia</option><option value="172">Uganda</option><option value="556">Western Sahara</option><option value="182">Zambia</option><option value="183">Zimbabwe</option><option value="503">Antartica</option><option value="523">Heard Island</option><option value="501">Afghanistan</option><option value="185">Armenia</option><option value="504">Ashmore and Cartier Island</option><option value="186">Azerbaijan</option><option value="310">Bahrain</option><option value="311">Bangladesh</option><option value="319">Bhutan</option><option value="325">Brunei</option><option value="506">Burma</option><option value="337">China</option><option value="342">Cyprus</option><option value="519">Glorioso Islands</option><option value="372">Hong Kong</option><option value="375">India</option><option value="376">Indonesia</option><option value="377">Iran</option><option value="196">Iraq</option><option value="380">Israel</option><option value="384">Japan</option><option value="529">Johnston Atoll</option><option value="385">Jordan</option><option value="199">Kazakhstan</option><option value="531">Korea, North</option><option value="532">Korea, South</option><option value="388">Kuwait</option><option value="200">Kyrgyzstan</option><option value="220">Laos</option><option value="390">Lebanon</option><option value="395">Macau</option><option value="398">Malaysia</option><option value="399">Maldives</option><option value="223">Mongolia</option><option value="113">Nepal</option><option value="122">Oman</option><option value="123">Pakistan</option><option value="129">Philippines</option><option value="132">Qatar</option><option value="148">Saudi Arabia</option><option value="153">Singapore</option><option value="549">Spratly Islands</option><option value="157">Sri Lanka</option><option value="163">Syria</option><option value="164">Taiwan</option><option value="211">Tajikistan</option><option value="166">Thailand</option><option value="212">Turkmenistan</option><option value="174">United Arab Emirates</option><option value="232">Uzbekistan</option><option value="234">Vietnam</option><option value="555">West Bank</option><option value="180">Yemen, Republic of</option><option value="184">Albania</option><option value="308">Austria</option><option value="314">Belarus</option><option value="315">Belgium</option><option value="188">Bosnia-Hercegovina</option><option value="326">Bulgaria</option><option value="194">Croatia</option><option value="343">Czech Republic</option><option value="344">Denmark</option><option value="353">Estonia</option><option value="514">Europa Island</option><option value="516">Faroe Islands</option><option value="356">Finland</option><option value="357">France</option><option value="215">Georgia</option><option value="361">Germany</option><option value="216">Gibraltar</option><option value="363">Greece</option><option value="522">Guernsey</option><option value="524">Holy Sea (Vatican City)</option><option value="373">Hungary</option><option value="374">Iceland</option><option value="526">Ireland</option><option value="378">Ireland, Northern</option><option value="197">Isle of Man</option><option value="381">Italy</option><option value="528">Jersey</option><option value="389">Latvia</option><option value="392">Liechtenstein</option><option value="393">Lithuania</option><option value="394">Luxembourg</option><option value="222">Macedonia</option><option value="101">Malta</option><option value="203">Moldova</option><option value="108">Monaco</option><option value="114">Netherlands</option><option value="121">Norway</option><option value="130">Poland</option><option value="131">Portugal</option><option value="134">Romania</option><option value="135">Russia</option><option value="228">San Marino</option><option value="547">Scotland</option><option value="207">Serbia</option><option value="208">Slovakia</option><option value="209">Slovenia</option><option value="156">Spain</option><option value="550">Svalbard</option><option value="161">Sweden</option><option value="162">Switzerland</option><option value="170">Turkey</option><option value="173">Ukraine</option><option value="262">United Kingdom</option><option value="177">Vatican City</option><option value="554">Wales</option><option value="213">Yugoslavia</option><option value="309">Bahamas</option><option value="312">Barbados</option><option value="316">Belize</option><option value="318">Bermuda</option><option value="330">Canada</option><option value="332">Cayman Islands</option><option value="509">Clipperton Island</option><option value="340">Costa Rica</option><option value="347">Dominican Republic</option><option value="350">El Salvador</option><option value="217">Greenland</option><option value="365">Guadeloupe</option><option value="367">Guatemala</option><option value="195">Haiti</option><option value="371">Honduras</option><option value="383">Jamaica</option><option value="527">Jarvis Island</option><option value="530">Juan de Nova Island</option><option value="106">Mexico</option><option value="536">Midway Islands</option><option value="109">Montserrat</option><option value="537">Netherlands Antilles</option><option value="118">Nicaragua</option><option value="125">Panama</option><option value="539">Pitcaim Islands</option><option value="541">Saint Helena</option><option value="542">Saint Kitts and Nevis</option><option value="543">Saint Lucia</option><option value="544">Saint Pierre and Miquelon</option><option value="500">USA</option><option value="502">American Samoa</option><option value="307">Australia</option><option value="508">Christmas Island</option><option value="510">Cocos (Keeling) Islands</option><option value="242">Cook Islands</option><option value="355">Fiji</option><option value="243">French Polynesia</option><option value="521">Guam</option><option value="525">Howland Island</option><option value="219">Kiribati</option><option value="102">Marshall Islands</option><option value="107">Micronesia</option><option value="225">Nauru</option><option value="116">New Caledonia</option><option value="117">New Zealand</option><option value="226">Niue</option><option value="258">Norfolk Island</option><option value="538">Northern Mariana Islands</option><option value="124">Palau</option><option value="126">Papua New Guinea</option><option value="546">Samoa</option><option value="210">Solomon Islands</option><option value="552">Tokelau</option><option value="249">Tonga</option><option value="231">Tuvalu</option><option value="233">Vanuatu</option><option value="253">Wallis Island</option><option value="303">Anguilla</option><option value="304">Antigua and Barbuda</option><option value="305">Argentina</option><option value="306">Aruba</option><option value="320">Bolivia</option><option value="323">Brazil</option><option value="324">British Virgin Islands</option><option value="336">Chile</option><option value="338">Colombia</option><option value="512">Cuba</option><option value="346">Dominica</option><option value="348">Ecuador</option><option value="515">Falkland Islands</option><option value="358">French Guiana</option><option value="364">Grenada</option><option value="370">Guyana</option><option value="103">Martinique</option><option value="127">Paraguay</option><option value="128">Peru</option><option value="540">Puerto Rico</option><option value="545">Saint Vincent</option><option value="548">South Georgia</option><option value="159">Suriname</option><option value="168">Trinidad and Tobago</option><option value="176">Uruguay</option><option value="178">Venezuela</option><option value="553">Virgin Islands</option>                       </select>
                    <?php echo form_error('country', '<div class="error">', '</div>'); ?>

                                       
                    <input class="text_field" name="email"  placeholder="Email" type="email" value="<?php echo set_value('email'); ?>">
                    <?php echo form_error('email', '<div class="error">', '</div>'); ?>

                    <input class="text_field" name="mobile" placeholder="Mobile" type="tel" value="<?php echo set_value('mobile'); ?>">
                    <?php echo form_error('mobile', '<div class="error">', '</div>'); ?>

                    <input type="submit" value="Next" >
                    </fieldset>
                         
                    <?php } ?>

                    <?php echo form_close(); ?>

                    <?php echo form_open('donate_ctrl/getstep2') ?>
                    <!--Step 2-->
                    <?php if($step == 2)
                    { ?>

                    <fieldset id="steps">
                    <h2 class="title">Donation Details</h2>
                    <p class="subtitle">Step 2</p>
                    <input class="text_field" name="amount" placeholder="Amount(in Rs.)" type="text" value="<?php echo set_value('amount'); ?>" >
                    <?php echo form_error('amount', '<div class="error">', '</div>'); ?>
                    
                    <label>Security Text:</label>
                    <img id="captcha" src="<?php echo base_url(); ?>" style="min-width:206px; max-width:25%; width:90%" alt="CAPTCHA Image">
                    <a href="#" onclick="document.getElementById('captcha').src = 'securimage_v2.02/securimage_show.php?' + Math.random(); return false">[Reload Image]</a><br><br>
                    <label for="message">Enter the code above here :</label>
                    <input id="captcha" name="captcha" type="text">
                    <input type="submit" value="Next">
                    </fieldset>

                    <?php } ?> 

                    <?php echo form_close(); ?>

                    <?php echo form_open('donate_ctrl/getstep3') ?>
                    
                    <!--Step 3-->
                    <?php if($step==3)
                    { ?>

                    <fieldset id="steps">
                    <h2 class="title">Terms of Donation</h2>
                    <p class="subtitle">Step 3</p>
                    <p>Please note that you can pay only through your 'Net Banking Account' of Indian Banks</p>
                    <label>The acceptance of donations in NDF is subject to the following terms :-</label>
                    <textarea readonly="readonly" style="align-content: left">1.Donations from Government/ budgetary support or from the balance sheets of PSUs  are not accepted in NDF.                                                                                              2.NDF is used for the welfare of the members of the Armed Forces (including Para Military Forces) and their dependents. Hence conditional donations, where the donor specifically mentions that the amount is meant for a  particular purpose, are not accepted in the NDF. </textarea>
                    <input type="checkbox" name="terms" value="on"> I accept the above terms for donations.
                    <?php echo form_error('terms', '<div class="error">', '</div>'); ?>

                    <input type="submit"  value="Submit" >        
                    </form> 

                    </fieldset>

                    <?php }  ?> 

                    <?php echo form_close(); ?> 
                    
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
