<?php
if(isset($_POST['reg_email'],$_POST['reg_name']))
{
include('db.php');
$passkey = mt_rand(1000000,9999999);
 mysql_query("INSERT into user(username,password,firstname) VALUES ('".$_POST['reg_email']."', '".$passkey."', '".$_POST['reg_name']."')") or die(mysql_error());
$user = $_POST['reg_name'];
include 'mailregister.php';
echo '<script>alert("congrates ' .$_POST['reg_name']. ', you have been successfully registered.\n See your mail for login details.")
                    window.location.href="./index.php";</script>';
}
?>