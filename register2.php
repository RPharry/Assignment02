<?php

include("db.php");
$qry="insert into tbadmin(name,userName,password) values('$_POST[Name]','$_POST[userName]','$_POST[password]')";
mysqli_query($con,$qry) or die(mysqli_error($con));
echo "Registration is Successful <br>";
echo "<a href=login.html>Go back to login page...</a>";

?>