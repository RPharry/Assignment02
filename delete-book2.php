<?php

session_start();
include("db.php");
if(isset($_SESSION["name"])){
    $num=$_POST["Number"];
    $qry="delete from tbbookinfo where srno=$num";
    mysqli_query($con,$qry) or die(mysqli_error($con));
    echo "Book Deleted Successfully<br>";
    echo "<a href=home.php>Go Back...</a>";
}
else{
    header("location:login.html");
}

?>