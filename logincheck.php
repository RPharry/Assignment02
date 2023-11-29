<?php

if(isset($_POST["UserName"])){
    session_start();
    include("db.php");
    $uid = $_POST["UserName"];
    $pw = $_POST["Password"];
    $qry="select name from tbadmin where Username='$uid' and password='$pw'";

    $result=mysqli_query($con,$qry) or die(mysqli_error($con));
    $n=mysqli_num_rows($result);

    if($n>0){
        $row=mysqli_fetch_row($result);
        $name=$row[0];
        $_SESSION["name"]=$name;
        header("location:home.php");
    }
    else{
        echo "Please enter valid username and Password<br>";
        echo "<a href=login.html>Go back to Login Page...</a>";
    }

}
else{
    header("location:login.html");
}

?>