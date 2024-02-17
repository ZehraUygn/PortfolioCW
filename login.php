<?php

session_start();
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

if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql =
        "SELECT email FROM users WHERE email = '" .
        $email .
        "'AND PASSWORD='" .
        $password .
        "'limit 1";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION["email"] = $email;
        header("refresh:0.1 ; url=addPost.php");
    } else {
        echo "<script>alert('username and password are incorrect')</script>";
        header("refresh:2; url=login.html");
    }
}
?>