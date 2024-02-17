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
        <title>Index</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
        <section class="navlist">
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
            <div class="first_page">
                <div class="introduction">
                    
<h1 class="name">Safiye Zehra Uygun</h1> 
                    
<h2 class="welcome">Welcome to my portfolio</h2> 
                    <div class="button"><a href="logout.php">Logout</a>
                    </div>
                </div>
                <div class="socials">
                    <div><a href="https://www.instagram.com/zehrauygn/" class="fa fa-instagram"></a>
                    </div>
                    <div><a href="https://www.linkedin.com/in/zehra-uygun-927768228/" class="fa fa-linkedin"></a>
                    </div>
                </div>
        </section>
        <footer id="contact-me">
            
<h2>Safiye Zehra Uygun - Portfolio</h2> 
        </footer>
    </body>

</html>