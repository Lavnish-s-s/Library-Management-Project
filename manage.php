<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MANAGE</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font/simple-line-icons.min.css">
    <link rel="stylesheet" href="css/Features-Boxed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="css/Navigation-with-Button.css">
    <link rel="stylesheet" href="css/News-Cards1.css">
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
  <div class="col d-flex justify-content-center ">
<figure class="snip1527">
  <div class="image"><img src="data:image/png;base64,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" alt="pr-sample23" style="
  height:315px;" />
</div>
  <figcaption>
   BORROW BOOK
  </figcaption>
  <a href="borrowbook.php"></a>
</figure>
<figure class="snip1527">
  <div class="image"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT2FNKOr9sfzHbsQtVB5yWuWjD1xSLn9i-rCQ&usqp=CAU" style="  
  height:315px;
" /></div>
  <figcaption>
  RETURN BOOK
  </figcaption>
  <a href="returnbook.php"></a>
</figure>
<figure class="snip1527">
  <div class="image"><img src="https://i.pinimg.com/originals/5b/01/8a/5b018a9baaab0cabedcbbfebe692d568.png" alt="pr-sample25" style="  
  height:315px;
" />
  <figcaption>
    BOOKS NOT RETURNED
  </figcaption>
  <a href="noreturn.php"></a>
</figure>
<figure class="snip1527">
  <div class="image"><img src="https://thumbs.dreamstime.com/b/black-solid-icon-penalty-fine-chastisment-black-solid-icon-penalty-justice-amercement-damages-sanction-fine-177545477.jpg" alt="pr-sample23" style="  
  height:315px;
" /></div>
  <figcaption>
    PENALTIES
  </figcaption>
  <a href="penalty.php"></a>
</figure>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>