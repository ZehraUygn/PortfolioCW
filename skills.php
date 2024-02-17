<?php session_start();
if(!isset($_SESSION["email"])){
    header("location:login.html");
}
   ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Week 4- - Exercise 4</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
</head>

<body>
    <nav class="navl">
        <ul id="nav-list">
            <li><a id="main_menu" href="index.php"> SZU </a></li>
            <li><a id="list" href="About_Me.php">About me</a></li>
            <li><a id="list" href="education.php">Education</a></li>
            <li><a id="list" href="projects.php">Projects</a></li>
            <li><a id="list" href="skills.php">Skills</a></li>
            <li><a id="list" href="contact.php">Contact</a></li>
            <li><a id="list" href="addEntry.php">Blog</a></li>
        </ul>
    </nav>
    <section class="Skills" id="skills">
        <div class="list_skills">
            <h2 class="skills_line">Skills</h2>
            <p3>Java Object-Oriented</p3>
            <p3>HTML</p3>
            <p3>CSS</p3>
            <p3>MIPS</p3>
        </div>
    </section>
    <footer id="contact-me">
        <h2>Safiye Zehra Uygun - Portfolio</h2>
    </footer>
</body>

</html>