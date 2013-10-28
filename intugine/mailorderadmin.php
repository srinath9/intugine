<?php
$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "relay-hosting.secureserver.net";
$mail->Username = "contact@intugine.com";  // SMTP username
$mail->Password = "Contact#123"; // SMTP password

$mail->From = "contact@intugine.com";
$mail->FromName = "Intugine Contact Section";
$mail->AddAddress("kumar.sonoo@gmail.com","contact@intugine.com");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Oreder Received-Intugine";
$mail->Body    = '<body style="background-image:url(http://intugine.com/test_intu/images/mailbg.jpg);background-position:top center;background-attachment:fixed;">
<a title="Intugine" href="http://intugine.com/test_intu/" target="_blank"><img style="float: right;margin-top:10px;" src="http://intugine.com/test_intu/images/logo.png" alt="" width="184" height="45" /></a>
<div style="padding:30px;"><h1 style="text-align:center;font-family:Arial;color:666666;">Intugine Order Section</h1>
<h2>Ordered by '.$_POST['full-name'].' </h2>
    Version: '.$_POST['version'].'<br>
Name: '.$_POST['full-name'].'<br>
Email Id: '.$_POST['email'].'<br>
Address: '.$_POST['address-line1'].'
    <br>'.$_POST['address-line2'].'<br>
city: '.$_POST['city'].'<br>
    State: '.$_POST['region'].'<br>
  Postal code: '.$_POST['postal-code'].'<br>
      Country: '.$_POST['country'].'<br>
          Phone number: '.$_POST['number'].'
</span></p>
<p style="text-align: center;">&nbsp;</p>
<p><strong>Contact Details Of Sender</strong></p>
<p>Name : '.$_POST['full-name'].'</p>
<p>Email-id : '.$_POST['email'].'</p>
    <p>Number : '.$_POST['number'].'</p>
<p style="text-align: center;"><a style="font-size: x-small;" title="Intugine" href="http://intugine.com/test_intu/" target="_blank">Intugine </a><span style="font-size: x-small;">| </span><a style="font-size: x-small;" title="Features" href="http://intugine.com/test_intu/features.php" target="_blank">Product </a><span style="font-size: x-small;">| </span><a style="font-size: x-small;" title="Forum" href="http://intugine.com/test_intu/forum.php" target="_blank">Forum </a><span style="font-size: x-small;">| </span><a style="font-size: x-small;" title="Pre Order" href="http://intugine.com/test_intu/preorder.php" target="_blank">Preorder </a><span style="font-size: x-small;">| </span><a style="font-size: x-small;" title="Contact Us" href="http://intugine.com/test_intu/contact.php" target="_blank">Contact Us</a><span style="font-size: x-small;">&nbsp;&nbsp;</span>
<span style="font-size: x-small;">
<a title="Find Us on Facebook" href="https://www.facebook.com/Intugine" target="_blank"><img style="float: left;" src="http://ctrlq.org/html-mail/img/facebook.png" alt="Facebook" width="21" height="21" /></a> 
<a title="Intugine" href="twitter.com/intugine" target="_blank"><img style="float: left;" src="http://ctrlq.org/html-mail/img/twitter.png" alt="Twitter" width="22" height="22" /></a>
<small></small></span></p>
</div></body>';
$mail->AltBody = "Some one Has a query,. 
Query:
Contact Details.
Name : 
Email-Id :";
if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

?>