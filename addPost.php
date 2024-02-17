
<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("location:login.html");
}

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

$title = $_POST["title"];
$content = $_POST["text"];

$query = "INSERT INTO blogs(title, content)
VALUES('$title','$content')";
$result = $conn->query($query);
header("refresh:1; url=viewBlog.php");

?>
