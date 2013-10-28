<?php
if(isset($_POST['user1']))
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
$pic1 = $row['pic'] ;
$fname = $row['firstname'] ;


if(mysql_num_rows($sql_check1))
{
    include ('huha.php');
    
   echo '<script type="text/javascript"> window.location = "index.php"; </script>';
}

else if(!mysql_num_rows($sql_check1))

{
echo 'Password mismatch!!';

}
}

?>