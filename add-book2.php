<?php

session_start();
include("db.php");
if(isset($_SESSION["name"])){
    $bknm=$_POST["bookname"];
    $bkathr=$_POST["author"];
    $bkpblshr=$_POST["publisher"];
    $bkrlsdate=$_POST["releasedate"];
    $bksts=$_POST["status"];

    $qry="insert into tbbookinfo(bookName,author,pblshngcmpny,releaseDate,status) values('$bknm','$bkathr','$bkpblshr','$bkrlsdate','$bksts')";
    mysqli_query($con,$qry) or die(mysqli_error($con));
    echo "Book Added Successfully<br>";
    echo "<a href=home.php>Go Back...</a>";
}
else{
    header("location:login.html");
}

?>