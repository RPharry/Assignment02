<?php

session_start();
include("db.php");
if(isset($_SESSION["name"])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Pic</title>
</head>
<body>
    <form action="update-pic3.php" enctype="multipart/form-data" method=POST>
    <label for="img">Select Image:</label><input type="file" id="img" name="img"><br><input type="submit"></form>
</body>
</html>
<?php

}
else{
    header("location:login.html");
}

?>