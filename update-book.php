<?php

session_start();
if(isset($_SESSION["name"])){
include("db.php");
$qry="select * from tbbookinfo";
$qry2="select max(srno) from tbbookinfo";
$result=mysqli_query($con,$qry) or die(mysqli_error($con));
$result2=mysqli_query($con,$qry2) or die(mysqli_error($con));
$row2=mysqli_fetch_row($result2);
$num=$row2[0];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update a Book</title>
    <script type="text/javascript">
        function validate(event){
            if(document.getElementById("Number").value==""){
                alert("Please Enter a Number");
                event.preventDefault();
            }
            else{
                let num=parseInt(document.getElementById("Number").value);
                if(num<1 ){
                alert("Please enter a Valid Number");
                event.preventDefault();
                }   
                else{
                    let maxnum=<?php echo $num; ?>;
                    if(num > maxnum){
                        alert("Please Enter a Valid Number");
                        event.preventDefault();
                    }
                }
            }
            
        }
    </script>
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
    <form action="update-book2.php" method="POST">
        <table>
            <tr>
                <td><label for="srno">Enter the Serial Number of the book you want to Update: </label></td>
                <td><input type="number" id="Number" name="Number" require placeholder="Enter the Serial Number" ></td>
                <td><input type="submit" onclick="validate(event)"></td>
            </tr>
        </table>
    </form>
    <a href="home.php">Go Back...</a>
</body>
</html>
<?php

}
else{
    header("location:login.html");
}

?>