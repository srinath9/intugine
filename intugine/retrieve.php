<?php

$username = $_POST['forgotemail'];


                                include('db.php');

$sql_check = mysql_query("select username from user where username='".$username."'")
 or die(mysql_error());

if(mysql_num_rows($sql_check))
{
    $result = mysql_query("SELECT * FROM user
WHERE username='".$username."'");
$row = mysql_fetch_array($result) ;
$pass = $row['password'] ;
$name = $row['firstname'] ;
include('forgotemail.php');
echo 'OK';

}
else if(!filter_var("$username", FILTER_VALIDATE_EMAIL))
{
    echo '<font color="red" >&nbsp;Not a valid email </font>' ;
}
else
{
echo 'OK1';
}
?>