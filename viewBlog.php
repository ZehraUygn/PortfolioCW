<?php session_start();
if(!isset($_SESSION["email"])){
    header("location:login.html");
}
   ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> viewBlog</title>
    <center>
        <link rel="stylesheet" href="style_viewBlog.css">
        <link rel="stylesheet" href="reset.css">
</head>

<body>
    <p id="p"> Blog Entries </p>
    <nav>
        <ul id="list">

            <li><a id="list" href="addEntry.php">Add Entry</a></li>
            <li><a id="list" href="datePicker.php">Blog Archive</a></li>

        </ul>
    </nav>

    <?php

    $conn = mysqli_connect("localhost", "root", "", "ecs417");
    $query =mysqli_query($conn, "SELECT * FROM blogs ORDER BY date DESC");
    ?>

    <table>

        <?php foreach($query as $row) : ?>
        <tr>
            <td class="title"><?php echo $row["title"]; ?> </td>
            <td class="content"><?php echo $row["content"]; ?> </td>
            <td class="date"><?php echo $row["date"]; ?> </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </center>

</body>

</html>
