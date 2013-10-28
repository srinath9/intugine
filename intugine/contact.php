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
                        <a class="brand" href="index.php">  <img src="images/logo.png" style="width:60%;height:37px;"></a>
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

            <section class="contact-page">

                <div class="container">
                   <div class="row">
                       <div class="span12">
      <h1 class="center">Get in Touch</h1>
           <!-- Begin Content -->
           
           <?php 
           if(isset($_POST['email']))
           {
               include 'mailcontact.php';
                include 'mailcontactadmin.php';
          
           }
           ?>
      
    </div>
    </div>
                </div>

            </section>
            <section class="contact-page rev">

                <div class="container">
                    <div class="row margintop20">


                        <div class="span6">
                            <h2 class="big-h2-heading"><i  class="icon-envelope-alt"></i> Contact Us</h2>
                            <p>Let us know what you think and we will get back to you with a cool reply!</p>
                            <form class="form-main" action="contact.php" method="post">

                                <fieldset>
                                    <div class="clearfix">
                                        <label for="name"><span>Name:</span></label>
                                        <div class="input">
                                            <input  id="name" name="name" type="text" value="" class="input-xlarge" required>

                                        </div>


                                    </div>

                                    <div class="clearfix">
                                        <label for="email"><span>Email:</span></label>
                                        <div class="input">
                                            <input  id="email" name="email" type="email" value="" class="input-xlarge" required>
                                        </div>
                                    </div>

                                    <div class="clearfix">
                                        <label for="message"><span>Message:</span></label>
                                        <div class="input">
                                            <textarea tabindex="3" class="input-xlarge" id="message" name="body" rows="7" required></textarea>
                                        </div>
                                    </div>

                                    <div class="actions">
                                        <button tabindex="3" type="submit" class="btn btn-landing ">Send</button>
                                    </div>
                                </fieldset>

                            </form>
                        </div>
                        <div class="span5 offset1">
                           
          <h3>Address</h3>
          <p>E21/B Vijay Nagar, New Delhi, 110009</p>
          
          <i class="icon-phone"></i>+91 9647783693 <br>
          <i class="icon-envelope"></i>  <a href="mailto:contact@intugine.com">contact@intugine.com</a>
          <br />
          <h3>Social Media</h3>
           <a href="#" class="social-network sn2 behance"></a>
                        <a href="#" class="social-network sn2 facebook"></a>
                        <a href="#" class="social-network sn2 pinterest"></a>
                        <a href="#" class="social-network sn2 flickr"></a>
                        <a href="#" class="social-network sn2 dribbble"></a>
                        <a href="#" class="social-network sn2 lastfm"></a>
                        <a href="#" class="social-network sn2 forrst"></a>
                        <a href="#" class="social-network sn2 xing"></a> 
                        </div>
                    </div>
                </div>

            </section>

<!-- ############################SPONSORS/CLIENTS ################################## 
<section id="bottom">

               
                <div class="container">
                    <div class="row center">
                        <div class="as-seen">
                            <div class="span2">
                                <img src="images/client-1.png" alt="Tc">
                            </div>
                            <div class="span2">
                                <img src="images/client-2.png" alt="Tc">
                            </div>
                            <div class="span2">
                                <img src="images/client-3.png" alt="Tc">
                            </div>
                            <div class="span2">
                                <img src="images/client-4.png" alt="Tc">
                            </div>
                            <div class="span2">
                                <img src="images/client-5.png" alt="Tc">
                            </div>
                            <div class="span2">
                                <img src="images/client-6.png" alt="Tc">
                            </div>

                        </div>


                    </div>
                </div>

            </section>
-->

        </div>

        <!--################ PUSH WILL KEEP THE FOOTER AT BOTTOM IF YOU WANT TO CREATE OTHER PAGES ################-->

        <div id="push"></div>

 <!--################ FOOTER START ################-->

        <?php include 'footer.php'; ?>


        <!--################ FOOTER END ################-->




       
    </body>
</html>