<?php
define('DB_USER','root');
define('DB_HOST','localhost');
define('DB_PASSWORD','root123');
define('DB_NAME','dbbook');


$con = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die(mysqli_connect_error());
mysqli_select_db($con,DB_NAME) or die(mysqli_error($con));

?>