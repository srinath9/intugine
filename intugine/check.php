<?php
if(isset($_POST['reg_email']))
{
$username=$_POST['reg_name'];
$useremail = $_POST['reg_email'];

include('db.php');

$sql_check = mysql_query("select username from user where username='".$useremail."'")
 or die(mysql_error());
if(!filter_var("$useremail", FILTER_VALIDATE_EMAIL))
{
    echo '<font color="red">&nbsp;Enter a valid Email.</font>' ;
}
else if(!mysql_num_rows($sql_check))
{
echo '<font color="green">Available :)</font>';
include 'register_user.php';
}

else
{
echo '<font color="red">&nbsp;Not Available</font>';
}
}

if((isset($_POST['user1']))&&(!isset($_POST['pass1'])))
{
$username = $_POST['user1'];
include('db.php');

$sql_check = mysql_query("select username from user where username='".$username."'")
 or die(mysql_error());

if(mysql_num_rows($sql_check))
{
echo 'OK';

}
else if(filter_var("$username", FILTER_VALIDATE_EMAIL))
{
    echo 'OK2' ;
}
else
{
echo 'OK1';
}
}

if( isset($_POST['user1'],$_POST['pass1']))
{
$username = $_POST['user1'];
$password = $_POST['pass1'];
 include('db.php');
$sql_check1 = mysql_query("select password from user where username='".$username."' AND password='".$password."'")
 or die(mysql_error());
$result = mysql_query("SELECT * FROM user
WHERE username='".$username."'");
$row = mysql_fetch_array($result) ;

$id = $row['id'] ;
$fname = $row['firstname'] ;


if(mysql_num_rows($sql_check1))
{
session_start();
$_SESSION["username"] = $username;
$_SESSION["id"] = $id;
   echo '<script type="text/javascript"> window.location = "index.php"; </script>';
}

else if(!mysql_num_rows($sql_check1))

{
echo '<font color="red">Password mismatch!!</font>';

}
}

?>