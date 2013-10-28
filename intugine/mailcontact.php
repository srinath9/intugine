<?php
require("/home/content/10/11631910/html/test_intu/phpmailer/class.phpmailer.php");
$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "relay-hosting.secureserver.net";
$mail->Username = "intern@intugine.com";  // SMTP username
$mail->Password = "Intern#123"; // SMTP password

$mail->From = "intern@intugine.com";
$mail->FromName = "Intugine Contact Section";
$mail->AddAddress($_POST['email']);

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Thanks For your Query";
$mail->Body    = '<body style="background-image:url(http://justaskdavid.com/wp-content/uploads/2013/05/Light-aluminum-Grey-Seamless-Pattern-For-Website-Background.jpg);background-position:top center;background-attachment:fixed;">
<a title="Intugine" href="http://intugine.com/test_intu/" target="_blank"><img style="float: right;margin-top:10px;" src="http://intugine.com/test_intu/images/logo.png" alt="" width="184" height="45" /></a>
<div style="padding:30px;"><h1 style="text-align:center;font-family:Arial;color:666666;">Intugine Contact Section</h1>
<h2>Dear '.$_POST['name'].' </h2>
<h3>We received your Query.<br>We will get to you as soon as possible.</h3>
<p style="text-align: center;"><span style="font-family:comic sans ms; font-size: small;">"'.$_POST['body'].'"</span></p>
<p style="text-align: center;">&nbsp;</p>
<p style="text-align: center;"><a style="font-size: x-small;" title="Intugine" href="http://intugine.com/test_intu/" target="_blank">Intugine </a><span style="font-size: x-small;">| </span><a style="font-size: x-small;" title="Features" href="http://intugine.com/test_intu/features.php" target="_blank">Product </a><span style="font-size: x-small;">| </span><a style="font-size: x-small;" title="Forum" href="http://intugine.com/test_intu/forum.php" target="_blank">Forum </a><span style="font-size: x-small;">| </span><a style="font-size: x-small;" title="Pre Order" href="http://intugine.com/test_intu/preorder.php" target="_blank">Preorder </a><span style="font-size: x-small;">| </span><a style="font-size: x-small;" title="Contact Us" href="http://intugine.com/test_intu/contact.php" target="_blank">Contact Us</a><span style="font-size: x-small;">&nbsp;&nbsp;</span>
<span style="font-size: x-small;">
<a title="Find Us on Facebook" href="https://www.facebook.com/Intugine" target="_blank"><img style="float: left;" src="http://ctrlq.org/html-mail/img/facebook.png" alt="Facebook" width="21" height="21" /></a> 
<a title="Intugine" href="twitter.com/intugine" target="_blank"><img style="float: left;" src="http://ctrlq.org/html-mail/img/twitter.png" alt="Twitter" width="22" height="22" /></a>
<small></small></span></p>
</div></body>';
$mail->AltBody = "We received your query. 
Query:";

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

?>
