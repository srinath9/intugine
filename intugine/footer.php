<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<SCRIPT type="text/javascript">
<!--

$(document).ready(function(){

$("#login_email").change(function() { 

var usr = $("#login_email").val();

if(usr.length >= 1)
{
$("#status").html('<div>Checking Database...</div>');
    $.ajax({  
    type: "POST",  
    url: "check.php",  
    data: "user1="+ usr ,  
    success: function(msg){  
   
   $("#status").ajaxComplete(function(event, request, settings){ 
      $(this).html(msg);
	if(msg == 'OK1')
	{ 
        
		$(this).html('<font color="red"> &nbsp;Not a valid email</font>');
                document.getElementById("login_button").disabled=true;

	}  
	else if (msg == 'OK')
	{  
		
                $(this).html('<font color="green"> &nbsp;Matched </font>');
               document.getElementById("login_button").disabled=false;


	}  
        else if (msg == 'OK2')
	{  
		
                $(this).html('<font color="red">&nbsp;Email id not registered</font>');
                document.getElementById("login_button").disabled=true;

	} 
   
   });

 } 
   
  }); 

}
else
	{
	alert("Enter Your Registered Email.");
	
	}

});



});
$(document).ready(function(){
$("#login_button").click(function() { 

var usr = $("#login_email").val();
var pass = $("#login_password").val();


if(usr.length >= 1)
{
$("#status1").html('<div> &nbsp; Sending Data...</div>');

    $.ajax({  
    type: "POST",  
    url: "check.php",  
    data: "user1="+ usr + "&pass1="  + pass,  
    success: function(msg1){  
   
   $("#status1").ajaxComplete(function(event, request, settings){ 
                $(this).html(msg1);
                if(msg1 == 'OK')
	{ 
        
		$(this).html('&nbsp;<font color="red">Does not match our documents.</font>');
	}  
});

 } 
   }); 

}
else
	{
	alert("Enter Your Registered Email.");
	
	}
});
});
//-->
$(document).ready(function(){
$("#register_button").click(function() { 

var usr = $("#register_name").val();
var email = $("#register_email").val();

if(usr.length >= 1 && email.length>=1)
{
$("#statusregister").html('<div> &nbsp; Sending Data...</div>');

    $.ajax({  
    type: "POST",  
    url: "check.php",  
    data: "reg_name="+ usr + "&reg_email=" + email,  
    success: function(msg1){  
   
   $("#statusregister").ajaxComplete(function(event, request, settings){ 
                $(this).html(msg1);
                if(msg1 == 'OK')
	{ 
        
		$(this).html('&nbsp;<font color="green">&nbsp;Available.</font>');
	}  
});

 } 
   }); 

}
else
	{
	alert("Both Fields are Required.");
	
	}
});
});

</SCRIPT>
<SCRIPT type="text/javascript">
$(document).ready(function(){

$("#forgotemail1").click(function() { 
    
var usr = $("#forgot_input").val();
if(usr.length >= 1)
{
$("#statusforgot").html('<div style="font-size:1em; " > &nbsp  Sending Request...</div>');
    $.ajax({  
    type: "POST",  
    url: "retrieve.php",  
    data: "forgotemail="+ usr ,  
    success: function(msg){  
   
   $("#statusforgot").ajaxComplete(function(event, request, settings){ 
      $(this).html(msg);
	if(msg == 'OK1')
	{ 
        
		$(this).html('<font color="red">&nbsp;Email not Registered.</font>');
	}  
	else if (msg == 'OK')
	{  
		$("#forgotemail").invisible();
                $("#forgotplace").visible();
                        $(this).html('');   
	}  
 });

 } 
   
  }); 

}
else
	{
	alert("Enter Your Registered Email");
	}

});
});
</SCRIPT>
    
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="span7">
                    <ul class="unstyled pull-left" style="padding-top:20px;">
                        <li><a href="aboutus.php" style="font-size:18px;padding-left:10px;" class="flink">About Us</a></li>
                        

                        <li><a href="contact.php" class="flink" style="font-size:18px;padding-left:10px;" >Contact Us</a></li>
                        <li><a href="privacy.php" class="flink" style="font-size:18px;padding-left:10px;" >Privacy Policy</a></li>
                        <li><a href="terms.php" class="flink" style="font-size:18px;padding-left:10px;" >Terms and Conditions</a></li>
                    </ul>
                </div>

                <div class="span5">
                    <h2>subscribe </h2>
                    

                    <a href="https://www.facebook.com/Intugine" class="social-network sn2 facebook"></a>
                    <a href="#" class="social-network sn2 twitter"></a>
                    <a href="https://plus.google.com/u/0/105167634525005952215/posts" class="social-network sn2 google"></a>
                    <a href="http://www.linkedin.com/company/3318565?trk=tyah&trkInfo=tas%3Aintugine%2Cidx%3A1-1-1" class="social-network sn2 linkedin"></a>


                </div>
            </div>
        </div>

    </footer>


    <script src="js/jquery.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/twitter.js"></script>

    <script src="js/stellar.js"></script>
    <script src="js/nicescroll.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-thumbs.js?v=1.0.2"></script>
    <script type="text/javascript" src="js/jquery.fancybox-media.js?v=1.0.0"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/custom.js"></script>

    <!--Modals--> 

    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <ul class="nav nav-tabs" id="myTab">
                <li><a href="#login" data-toggle="tab">Login</a></li>
                <li><a href="#register" data-toggle="tab">Register</a></li>

            </ul>
            
 <!--------------------- Login starts here ----------------------------------------------->
            <h3>Login in your account</h3>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="login">
                <div class="modal-body">

                    <form class="form-vertical form-modal">
                        <fieldset>

                            <!-- Form Name -->


                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label">Email</label>
                                <div class="controls">
                                    <input id="login_email" id="textinput" name="textinput" type="email" placeholder="" class="input-xxlarge" >
                             <span id="status"></span>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" >Password</label>
                                <div class="controls">
                                    <input id="login_password" id="textinput" name="textinput" type="password" placeholder="" class="input-xxlarge">
                             <span id="status1"></span>
                                </div>
                            </div>




                        </fieldset>
                    </form>
                    <div class="modal-footer">
                        <table width="100%"
                               <tr>
                                <td class="forgetpassword">
                                    
                        <div id="forgotemail" style="   visibility:hidden;"  > 
                           <input class="forgotemail" name="forgot_input" id="forgot_input" placeholder="Registered Email"/>            
                            <button type="button" class="forgotgo" name="forgotemail1" id="forgotemail1" /> Go </button>
                            <div id="statusforgot"> </div>
                            <div id="forgotplace" style="color:green; visibility:hidden;" > &nbspPassword sent!! 
                                &nbsp;Check your Email.</div>

                        </div>
                                       <span id="forgot"  onclick="forgot();"> forgot password? </span>

                                </td>
                                <td >
                      <button id="login_button" id="singlebutton" name="singlebutton" class="btn btn-primary">Login in your Account</button>
                                </td>
                            </tr>
                        </table>
                      </div>

                </div>
            </div>
            
 <!-------------------------- Register Starts here -------------------------------->
 
            <div class="tab-pane" id="register">
                <div class="modal-body">

                    <form class="form-vertical form-modal">
                        <fieldset>

                            <!-- Form Name -->


                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label">Name</label>
                                <div class="controls">
                                    <input id="register_name" id="textinput" name="textinput" type="text" placeholder="" class="input-xxlarge">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label">Email</label>
                                <div class="controls">
                                    <input id="register_email" id="textinput" name="textinput" type="text" placeholder="" class="input-xxlarge">
                                 <span id="statusregister"></span>
                                </div>
                            </div>

        </fieldset>
                    </form>
                    <div class="modal-footer">

                        <button id="register_button" id="singlebutton" name="singlebutton" class="btn btn-primary">Create New Account</button>
                    </div>

                </div>
            </div>
            <SCRIPT type="text/javascript">
   
                (function($) {
                    $.fn.invisible = function() {
                        return this.each(function() {
                            $(this).css("visibility", "hidden");
                        });
                    };
                    $.fn.visible = function() {
                        return this.each(function() {
                            $(this).css("visibility", "visible");
                        });
                    };
                }(jQuery));
                function forgot()
                {
                    $("#forgot").invisible() ; // if necessary
                    $("#forgotemail").visible();
                }
            </script>
            <script>
                $(function () {
                    $('#myTab a[href="#login"]').tab('show')
                })
                $('#myTab a[href="#login"]').click(function (e) {
                    e.preventDefault()
                    $('#myModal h3 ').replaceWith('<h3>Login in your account</h3>');
                })

                $('#myTab a[href="#register"]').click(function (e) {
                    e.preventDefault()
                    $('#myModal h3 ').replaceWith('<h3>Create New Account</h3>');
                })

            </script>

        </div>   




    </div>