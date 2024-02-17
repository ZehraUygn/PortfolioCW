<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("location:login.html");
}
?>  

   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <title> Week 4- - Exercise 4</title>
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="reset.css">
</head> 
<body>
    <nav class="navl" >
        <ul id ="nav-list">  
            <li><a id= "main_menu" href="index.php"> SZU </a></li>         
            <li><a id="list" href="About_Me.php">About me</a></li>        
            <li><a id="list" href="education.php">Education</a></li>        
            <li><a id="list" href="projects.php">Projects</a></li>       
            <li><a id="list" href="skills.php">Skills</a></li>         
            <li><a id="list" href="contact.php">Contact</a></li>       
            <li><a id="list" href="addEntry.php">Blog</a></li>
            <li><a id="list" href="viewBlog.php">Blog Entries</a></li>
        </ul>
    </nav>
    <section class ="blog" id="blog">    
      
                <form method = "POST" action="addPost.php" id="formId"  required>
                   <div id = "blog">
                    <fieldset id="entry" >
                        <legend id="ask"> Blog </legend>
                        <fieldset>
                        <p>
                          <input type="text" name="title" placeholder= "Title" size="100" required/>   
                        </p>
                      <p>
                        <textarea cols="91" rows="5" name ="text" placeholder="Enter your text here..." class ="text" required>  
                        </textarea>  
                      </p>                    
                      <p>                      
                      <input type="submit" onclick="return preventSubmit();">
                      <input type="reset" onclick="return confirm_reset();">
                      </p>  
                   </div>
                   <script src="clear.js"></script>
                   <script src="preventSubmit.js"></script>
                </fieldset>
                  </fieldset>
             
          </form>
       
                  </section>
                  <footer id="contact-me">
                    <h2>Safiye Zehra Uygun - Portfolio</h2>
                </footer>
               </body>
      </html>
      