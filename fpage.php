<!DOCTYPE html>
<html>
<?php
session_start();
  ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page 1</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font/simple-line-icons.min.css">
    <link rel="stylesheet" href="css/Features-Boxed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="css/Navigation-with-Button.css">
    <link rel="stylesheet" href="css/News-Cards.css">
    <link rel="stylesheet" href="css/Service-Box-Style-01.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/Team-Boxed.css">
</head>

<body style="background-image:url(&quot;img/5086168739_fa12cd3318_b.jpg&quot;);background-size:cover;">
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color:rgba(255,255,255,0.4);">
            <div class="container">
              <a class="navbar-brand" href="#" style="color:rgb(1,0,4);background-color:rgba(255,255,255,0);">LMS</a>
              <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="dropdown">
                          <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse">Students</a>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" role="presentation" href="Addstudent.php">Add Students</a>
                              <a class="dropdown-item" role="presentation" href="deletestudent.php">Remove</a>
                              <a class="dropdown-item" role="presentation" href="updatestudent.php">Update</a>
                              <a class="dropdown-item"role="presentation" href="viewstudent">View</a>
                            </div>
                        </li>
                        <li class="dropdown">
                          <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse">Books&nbsp;</a>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" role="presentation" href="Addbooks.php">Add Books</a>
                              <a class="dropdown-item" role="presentation" href="deletebooks.php">Remove</a>
                              <a class="dropdown-item" role="presentation" href="updatebooks.php">Update</a>
                              <a class="dropdown-item" role="presentation" href="viewbooks.php">View</a>
                            </div>
                        </li>
                        <li class="dropdown">
                          <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse">Manage</a>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" role="presentation" href="borrowbook.php">Issue Book</a>
                              <a class="dropdown-item" role="presentation" href="returnbook.php">Return</a>
                              <a class="dropdown-item" role="presentation" href="noreturn.php">Unreturned Books</a>
                              <a class="dropdown-item" role="presentation" href="penalty.php">Penalty</a>
                            </div>
                        </li>
                    </ul>
                    <span class="navbar-text actions">
                      <a class="btn btn-light action-button" role="button" href="logout.php">Log Out</a>
                    </span>
                </div>
              </div>
        </nav>
   </div>  
    <center>
    <figure class="snip1527">
  <div class="image" ><a href="Student.php"></a><img src="https://png.pngtree.com/png-vector/20190118/ourlarge/pngtree-vector-male-student-icon-png-image_326762.jpg" style="width:500px;height:315px"; /></div>
  <figcaption>
      STUDENT
    
  </figcaption>
  
</figure>
<figure class="snip1527 ">
  <div class="image"><a href="books.php"></a><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSyT2-k_pranP9Yb7BMGUa561TX6V8yRRfNAQ&usqp=CAU" style="width:500px;height:315px"; />
    </div> 
      
  <figcaption>
    
   BOOKS
      
  </figcaption>
      
</figure>
<figure class="snip1527">
  <div class="image"><img src="https://www.clipartkey.com/mpngs/m/140-1401801_project-management-icon-blue-free.png" style="width:500px;height:315px"; /></div>
  <figcaption>
    
    MANAGEMENT
    
  </figcaption>
  <a href="manage.php"></a>
</figure>
</center>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>