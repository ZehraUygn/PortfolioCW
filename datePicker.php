<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("location:login.html");
}
?>  

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="BlogDatesStyle.css">
    <title>Find Blog Entries</title>
    <center>
        <h2> Blog Archive </h2>
</head>

<body>
    <form method='GET'>
        <input type="date" name="startDate">
        <input type="date" name="endDate">

        <p> <input type="submit" name="search"> </p>

    </form>


    <?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecs417";

// Creates connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Checks connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['startDate']) && isset($_GET['endDate']))
{
    $startDate = $_GET['startDate'];
    $endDate = $_GET['endDate'];

    $sql = mysqli_query($conn,"SELECT * FROM blogs WHERE date Between '$startDate' and '$endDate' order by date DESC");

    if(mysqli_num_rows($sql)>0)
    {
        foreach($sql as $row){
            ?>
    <table>
        <tr>
            <td><?php echo $row["title"]; ?> </td>
            <td><?php echo $row["content"]; ?> </td>
            <td><?php echo $row["date"]; ?> </td>

        </tr>
    </table>
    <?php

        }
    
    }
    else{

            echo "There is no blog found.";

        }
    }

?>


    </center>


</body>

</html>