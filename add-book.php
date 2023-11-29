<?php

session_start();
if(isset($_SESSION["name"])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Book</title>
</head>
<body>
    <h1>Add a book</h1>
    <form action="add-book2.php" method=POST>
        <table>
            <tr>
                <td><label for="bookname">Book Name:</label></td>
                <td><input type="text" id="bookname" name="bookname" required></td>
            </tr>
            <tr>
                <td><label for="author">Author:</label></td>
                <td><input type="text" id="author" name="author" required></td>
            </tr>
            <tr>
                <td><label for="publisher">Publisher:</label></td>
                <td><input type="text" id="publisher" name="publisher" required></td>
            </tr>
            <tr>
                <td><label for="releasedate">Release Date:</label></td>
                <td><input type="date" id="releasedate" name="releasedate" required></td>
            </tr>
            <tr>
                <td><label for="status">Status:</label></td >
                <td><input type="text" id="status" name="status" required></td>
            </tr>
            <tr>
                <td><input type="reset"></td>
                <td><input type="Submit"></td>
            </tr>
        </table>
    </form>
    <a href="home.php">Go Back....</a>
</body>
</html>

<?php

}
else{
    header("location:login.html");
}


?>