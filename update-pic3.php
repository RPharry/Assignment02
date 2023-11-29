<?php
session_start();
if(isset($_SESSION["name"])){
    $name = $_SESSION["name"];
    include("db.php");
    
    if(isset($_FILES["img"]) && $_FILES["img"]["error"] == UPLOAD_ERR_OK){
        $nm = mysqli_real_escape_string($con, $_FILES["img"]["name"]);
        $old = $_FILES["img"]["tmp_name"];
        $new = "images/".$name."@".$nm;
        
        if(move_uploaded_file($old, $new)){
            $qry="UPDATE tbbookinfo SET image='$new'";
            mysqli_query($con, $qry) or die(mysqli_error($con));
            echo "IMAGE UPLOADED SUCCESSFULLY";
            echo "<a href=home.php>Go Back...</a>";
        } else {
            echo "ERROR: Failed to upload image";
        }
    } else {
        echo "ERROR: Image upload failed";
    }
} else {
    header("location:home.php");
}
?>
