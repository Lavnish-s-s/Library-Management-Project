<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Navigation-with-Button.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
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
                              <a class="dropdown-item" role="presentation" href="removestudent.php">Remove</a>
                              <a class="dropdown-item" role="presentation" href="updatestudent.php">Update</a>
                              <a class="dropdown-item"role="presentation" href="viewstudent">View</a>
                            </div>
                        </li>
                        <li class="dropdown">
                          <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse">Books&nbsp;</a>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" role="presentation" href="addbooks.php">Add Books</a>
                              <a class="dropdown-item" role="presentation" href="removebook.php">Remove</a>
                              <a class="dropdown-item" role="presentation" href="upbook.php">Update</a>
                              <a class="dropdown-item" role="presentation" href="viewbook.php">View</a>
                            </div>
                        </li>
                        <li class="dropdown">
                          <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" data-bs-hover-animate="pulse">Manage</a>
                            <div class="dropdown-menu" role="menu">
                              <a class="dropdown-item" role="presentation" href="allocbook.php">Allocate Books</a>
                              <a class="dropdown-item" role="presentation" href="recentalloc.php">Recent allocation</a>
                              <a class="dropdown-item" role="presentation" href="penalty.php">Penalty</a>
                              <a class="dropdown-item" role="presentation" href="return.php">Return Books</a>
                            </div>
                        </li>
                    </ul>
                    <span class="navbar-text actions">
                      <a class="btn btn-light action-button" role="button" href="index.php">Log Out</a>
                    </span>
                </div>
              </div>
        </nav>
   </div>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
</body>

</html>