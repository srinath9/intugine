<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <title>Intugine</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">


        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'> 

        <!--Le HTML5 shim, for IE6-8 support of HTML5 elements--> 
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <!-- Le styles -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.css" media="all" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="all" />
        <link rel="stylesheet" type="text/css" href="css/jquery.fancybox-thumbs.css?v=1.0.2" />
        <link href="css/animate.css" rel="stylesheet" type="text/css" />
        <link href="css/isotope.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href="css/style-responsive.css" rel="stylesheet" type="text/css" />
        <!-- Le fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="ico/favicon.png">
        <link rel="stylesheet" type="text/css" href="css/new.css">

    </head>

    <body>

    

               <!--################ NAVIGATION START ################-->

      <div class="navbar-wrapper" >
            <div class="navbar navbar-static-top navbar-inverse" id="navigation">
                <div class="navbar-inner">
                    <div class="container">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="brand" href="index.php">  <img src="images/logo.png" style="width:80px;height:37px;"></a>
                        <div class="nav-collapse collapse">
                           <?php include('menu.php') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

       
        <!--################ NAVIGATION END ################-->
        <!--################ WRAP START ################-->

        <div id="wrap">

            <!--################ HEADER START ################-->

            <header class="page-title">
                <div class="container">
                    <h2>Pre-Order</h2>
                    <h3>Basic         $24.99<br>
                        Premium   $65
                    </h3>
                    <button id="info">More Information</button>
                </div>
            </header>
            
            <section class="trial-section">
                <div class="container">
                	<div class="row-fluid">
                    <div class="span6">
					 <form class="form-horizontal" action="preorder.php" method="post">
    <fieldset>
        <!-- Address form -->

<div class="control-group">
            <label class="control-label">Consumer</label>
            <div class="controls">
                <input type="text">
            </div>
        </div>
 
        <!-- full-name input-->
        <div class="control-group">
            <label class="control-label">Full Name</label>
            <div class="controls">
                <input id="full-name" name="full-name" type="text" placeholder="full name"
                class="input-xlarge" required>
                <p class="help-block"></p>
            </div>
        </div>


        <!-- email input-->
        <div class="control-group">
            <label class="control-label">Email Id</label>
            <div class="controls">
                <input id="email" name="email" type="email" placeholder="Email id"
                class="input-xlarge" required>
                <p class="help-block"></p>
            </div>
        </div>
        <!-- address-line1 input-->
        <div class="control-group">
            <label class="control-label">Address Line 1</label>
            <div class="controls">
                <input id="address-line1" name="address-line1" type="text" placeholder="address line 1"
                class="input-xlarge" required>
            </div>
        </div>
        <!-- address-line2 input-->
        <div class="control-group">
            <label class="control-label">Address Line 2</label>
            <div class="controls">
                <input id="address-line2" name="address-line2" type="text" placeholder="address line 2"
                class="input-xlarge" required>
            </div>
        </div>
        <!-- city input-->
        <div class="control-group">
            <label class="control-label">City / Town</label>
            <div class="controls">
                <input id="city" name="city" type="text" placeholder="city" class="input-xlarge" required>
                <p class="help-block"></p>
            </div>
        </div>
        <!-- region input-->
        <div class="control-group">
            <label class="control-label">State / Province</label>
            <div class="controls">
                <input id="region" name="region" type="text" placeholder="state / province / region"
                class="input-xlarge" required>
                <p class="help-block"></p>
            </div>
        </div>
        <!-- postal-code input-->
        <div class="control-group">
            <label class="control-label">Zip / Postal Code</label>
            <div class="controls">
                <input id="postal-code" name="postal-code" type="text" pattern="\d*" placeholder="zip or postal code"
                class="input-xlarge" required>
                <p class="help-block"></p>
            </div>
        </div>
        <!-- country select -->
        <div class="control-group">
            <label class="control-label">Country</label>
            <div class="controls">
                <select id="country" name="country" class="input-xlarge">
                    <option value="IN" selected="selected">India</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BA">Bosnia and Herzegowina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, the Democratic Republic of the</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Cote d'Ivoire</option>
                    <option value="HR">Croatia (Hrvatska)</option>
                    <option value="CU">Cuba</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="TP">East Timor</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands (Malvinas)</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="FX">France, Metropolitan</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard and Mc Donald Islands</option>
                    <option value="VA">Holy See (Vatican City State)</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran (Islamic Republic of)</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KP">Korea, Democratic People's Republic of</option>
                    <option value="KR">Korea, Republic of</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Lao People's Democratic Republic</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libyan Arab Jamahiriya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macau</option>
                    <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia, Federated States of</option>
                    <option value="MD">Moldova, Republic of</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="AN">Netherlands Antilles</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Reunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint LUCIA</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SK">Slovakia (Slovak Republic)</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SH">St. Helena</option>
                    <option value="PM">St. Pierre and Miquelon</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen Islands</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan, Province of China</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania, United Republic of</option>
                    <option value="TH">Thailand</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela</option>
                    <option value="VN">Viet Nam</option>
                    <option value="VG">Virgin Islands (British)</option>
                    <option value="VI">Virgin Islands (U.S.)</option>
                    <option value="WF">Wallis and Futuna Islands</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="YU">Yugoslavia</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                </select>
            </div>
        </div>
         <div class="control-group">
            <label class="control-label">Contact Number</label>
            <div class="controls">
                <input id="number" name="number" type = "tel"  placeholder="Phone Number"
                class="input-xlarge" required>
                <p class="help-block"></p>
            </div>
        </div>
         <div class="control-group">
        <div class="controls">
          <button class="btn btn-success">Order Now</button>
        </div>
      </div>
    </fieldset>
</form>                    
</div>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Version Information</h3>
    <ul class="nav nav-tabs" id="myTab">
        <li><a href="#consumer" data-toggle="tab">Consumer</a></li>
        <li><a href="#corporate" data-toggle="tab">Corporate</a></li>
    </ul>
</div>

<div class="tab-content">

    <div class="tab-pane active" id="consumer">
        <div class="modal-body">
            <p style="font-size:18px;">This is the complete version which effectively replaces mouse and keyboard and does much more. Use windows, Play games, control media and music, browse internet, give presentations and everything works even from a distance of 5 m.This version uses Intugine sensor and three nimble devices( one mid ring and two tip rings) to bring complete gesture control in your PCs.</p>
        </div>
    </div>

    <div class="tab-pane" id="corporate">
        <div class="modal-body">
            <p style="font-size:18px;">This version is specially optimized for giving presentations in companies, schools colleges and similar institutes. You can give lectures moving around the room freely, without holding any bulky remote and change slides comfortably wherever you are, just by a swap of hand. 
            It uses Intugine sensor and only one Nimble (mid ring)  in your index finger to do it all.</p>
            <ul style="list-style:square;font-size:16px;color:#505050;">
                <li><b>Effective presentations:</b> Give presentations with much more convenience. Swap slides from a distance of 25 ft..</li>
                <li><b>Point and write</b> on the screen within your presentations from a distance of 5 m.</li>
                <li><b>Media control:</b> Control movies and songs with your fingers! Scroll within the movies track with the precision of fractions of second. Play, pause, change track and change volume with high details of control..</li>
                <li><b>Fun & Games:</b> Even supports some apps like subway surfer & fruit ninja. Download from our app store and play using gesture control.</li>
            </ul>
        </div>
    </div>

</div>
              <!--            
<div class="span6">
<div class="row-fluid">
  <form class="form-horizontal">
    <fieldset>
      <div id="legend">
        <legend class="">Payment</legend>
      </div>
 
      <div class="control-group">
        <label class="control-label"  for="username">Card Holder's Name</label>
        <div class="controls">
          <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
        </div>
      </div>
 
      <div class="control-group">
        <label class="control-label" for="email">Card Number</label>
        <div class="controls">
          <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
        </div>
      </div>
 
      <div class="control-group">
        <label class="control-label" for="password">Card Expiry Date</label>
        <div class="controls">
          <select class="span3" name="expiry_month" id="expiry_month">
            <option></option>
            <option value="01">Jan (01)</option>
            <option value="02">Feb (02)</option>
            <option value="03">Mar (03)</option>
            <option value="04">Apr (04)</option>
            <option value="05">May (05)</option>
            <option value="06">June (06)</option>
            <option value="07">July (07)</option>
            <option value="08">Aug (08)</option>
            <option value="09">Sep (09)</option>
            <option value="10">Oct (10)</option>1
            <option value="11">Nov (11)</option>
            <option value="12">Dec (12)</option>
          </select>
          <select class="span2" name="expiry_year">
            <option value="13">2013</option>
            <option value="14">2014</option>
            <option value="15">2015</option>
            <option value="16">2016</option>
            <option value="17">2017</option>
            <option value="18">2018</option>
            <option value="19">2019</option>
            <option value="20">2020</option>
            <option value="21">2021</option>
            <option value="22">2022</option>
            <option value="23">2023</option>
          </select>
        </div>
      </div>
 
      <div class="control-group">
        <label class="control-label"  for="password_confirm">Card CVV</label>
        <div class="controls">
          <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="span2">
        </div>
      </div>
 
      <div class="control-group">
        <div class="controls">
          <label class="checkbox" for="save_card">
            <input type="checkbox" id="save_card" value="option1">
            Save card on file?
          </label>
        </div>
      </div>
 
      <div class="control-group">
        <div class="controls">
          <button class="btn btn-success">Pay Now</button>
        </div>
      </div>
 
    </fieldset>
  </form>
</div>
</div>
                -->
                </div>
            </section>

        </div>

        <!--################ PUSH WILL KEEP THE FOOTER AT BOTTOM IF YOU WANT TO CREATE OTHER PAGES ################-->

        <div id="push"></div>

 <!--################ FOOTER START ################-->

       <?php include 'footer.php'; ?>


        <!--################ FOOTER END ################-->
        <?php
        if(isset($_POST['email']))
        {
            include('db.php');
 mysql_query("INSERT into address(email,name,add1,add2,city,state,zip,country,number,version) 
     VALUES ('".$_POST['email']."', '".$_POST['full-name']."', '".$_POST['address-line1']."','".$_POST['address-line2']."', '".$_POST['city']."', '".$_POST['region']."','".$_POST['postal-code']."', '".$_POST['country']."', '".$_POST['number']."','".$_POST['version']."')") or die(mysql_error());

 $result = mysql_query("SELECT * FROM address WHERE email='" . $_POST['email'] . "'");
 $row1 = mysql_fetch_array($result);
    $sonu = array();
    while ($row1 = mysql_fetch_array($result)) {
            $sonu[] = $row1['id'];
    }
    
    $postid = $sonu[count($sonu)-1];
 
    $order_id = $_POST['postal-code'] . '_' . $postid;

    mysql_query("UPDATE  address SET transaction_id = '" . $order_id . "'  WHERE id='" . $sonu[count($sonu) - 1] . "'") or die(mysql_error());
  
 include 'mailorder.php';
 include 'mailorderadmin.php';

echo '<script>alert("congrates ' .$_POST['name']. ', you have ordered this product successfully.\n We will contact you ASAP.")
                    </script>';
        }
        ?>

</body>
</html>