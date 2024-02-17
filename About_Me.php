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
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <title>About Me</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
</head>

<body>
    <nav class="navl">
        <ul id="nav-list">
            <li><a id="main_menu" href="index.php"> SZU </a>
            </li>
            <li><a id="list" href="About_Me.php">About me</a>
            </li>
            <li><a id="list" href="education.php">Education</a>
            </li>
            <li><a id="list" href="projects.php">Projects</a>
            </li>
            <li><a id="list" href="skills.php">Skills</a>
            </li>
            <li><a id="list" href="contact.php">Contact</a>
            </li>
            <li><a id="list" href="addEntry.php">Blog</a>
            </li>
        </ul>
    </nav>
    <section class="about" id="about-me">
        <div class="informations">
            <h2 class="AboutMe">About Me</h2>
            <img class="profile" src="profile.jpeg" alt="Safiye Zehra Uygun" />
            <p id="about_me">Hello, my name is Safiye Zehra Uygun. I am a BSc computer Science Student
                at Queen Mary University of London. I am an international student and I
                am currently living in Istanbul/Turkey.
                <br>
                <br>Since my childhood, my interest in computers and technology has been increasing
                day by day, so I chose the computer science department, which I thought
                would be the best for me.
                <br>
                <br>My aim is to become an expert on computers by exploring many branches
                of my field.
            </p>
        </div>
    </section>
    <footer id="contact-me">
        <h2>Safiye Zehra Uygun - Portfolio</h2>
    </footer>
</body>

</html>