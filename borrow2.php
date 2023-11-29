<?php

include("db.php");
$num=$_POST["Number"];
$qry1="select status from tbbookinfo where srno=$num";
$result=mysqli_query($con,$qry1) or die(mysqli_error($con));
$row=mysqli_fetch_row($result);
$status=$row[0];
if($status=='borrowed'){
    echo "Book already borrowed<br>";
    echo"<a href=guest.html>Go Back...</a>";
}
else{
    $qry2="update tbbookinfo set status='borrowed' where srno=$num";
    mysqli_query($con,$qry2) or die(mysqli_error($con));
    echo "Book Borrowed Successfully<br>";
    echo"<a href=guest.html>Go Back...</a>";
}


?>