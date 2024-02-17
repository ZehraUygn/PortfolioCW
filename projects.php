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
    <section class="projects" id="projects">
        <div class="project">
            <h2 class="project_head">Here are the links of some of my projects</h2>
            <div class="links">
                <p><a
                        href="https://ecs417-210821994uygun.apps.kube.eecs.qmul.ac.uk/topic2/my_homepage.html">"https://ecs417-210821994uygun.apps.kube.eecs.qmul.ac.uk/topic2/my_homepage.html"</a>
                </p>
                <hr>
                <p><a
                        href="https://ecs417-210821994uygun.apps.kube.eecs.qmul.ac.uk/topic3/my_homepage_week3.html">https://ecs417-210821994uygun.apps.kube.eecs.qmul.ac.uk/topic3/my_homepage_week3.html</a>
                </p>
                <hr>
                <p><a
                        href="https://ecs417-210821994uygun.apps.kube.eecs.qmul.ac.uk/topic3/exercise_3.html">https://ecs417-210821994uygun.apps.kube.eecs.qmul.ac.uk/topic3/exercise_3.html</a>
                </p>
                <hr>
            </div>
        </div>
    </section>
    <footer id="contact-me">
        <h2>Safiye Zehra Uygun - Portfolio</h2>
    </footer>
</body>

</html>