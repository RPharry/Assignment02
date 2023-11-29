<?php

session_start();
include("db.php");
$qry="select * from tbbookinfo";
$result=mysqli_query($con,$qry) or die(mysqli_error($con));


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
</head>
<body>
    <h1>Here is a list of all books</h1>
    <table border="3px solid">
        <tr>
            <th>Serial No.</th>
            <th>Book Name</th>
            <th>Author Name</th>
            <th>Publisher</th>
            <th>Release Date</th>
            <th>Status</th>
        </tr>
    <?php
    while($row=mysqli_fetch_row($result)){
        echo "<tr><td>$row[0].</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "<td>$row[5]</td></tr>";
    }
    ?>
    </table>
    <a href=<?php if(isset($_SESSION["name"])){echo "home.php";}else{echo "guest.html";} ?>>Go Back...</a>
</body>
</html>