<?php

session_start();
include("db.php");
if(isset($_SESSION["name"])){
    $bksrno=$_POST["Number"];
    $bknm=$_POST["bookname"];
    $bkathr=$_POST["author"];
    $bkpblshr=$_POST["publisher"];
    $bkrlsdate=$_POST["releasedate"];
    $bksts=$_POST["status"];

    $qry="update tbbookinfo set bookName='$bknm', author='$bkathr', pblshngcmpny='$bkpblshr',releaseDate='$bkrlsdate',status='$bksts' where srno=$bksrno" ;
    mysqli_query($con,$qry) or die(mysqli_error($con));
    echo "Book Added Successfully<br>";
    echo "<a href=home.php>Go Back...</a>";
}
else{
    header("location:login.html");
}

?>