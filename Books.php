<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOOKS</title>
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
   ADD
  </figcaption>
  <a href="Addbooks.php"></a>
</figure>
<figure class="snip1527">
  <div class="image"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTbAriZo8_7JTvuR5G_Bu93KYGNxyIkJ-jUXA&usqp=CAU" style="  
  height:315px;
" /></div>
  <figcaption>
   REMOVE
  </figcaption>
  <a href="deletebooks.php"></a>
</figure>
<figure class="snip1527">
  <div class="image"><img src="data:image/png;base64,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" style="  
  height:315px;
" />
  <figcaption>
    UPDATE
  </figcaption>
  <a href="updatebooks.php"></a>
</figure>
<figure class="snip1527">
  <div class="image"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRbpmPj2LKXNicQ4zXRF79MH6pGNZSOmpiPfA&usqp=CAU" style="  
  height:315px;
" /></div>
  <figcaption>
    VIEW
  </figcaption>
  <a href="viewbooks.php"></a>
</figure>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>