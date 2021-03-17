<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>library management</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/Login-Form-Clean.css">
    <link rel="stylesheet" href="css/Login-Form-Dark.css">
    <link rel="stylesheet" href="css/styles.css">
    <style type="text/css">
        img {
               border: 1px;
               border-radius: 2px;
               padding: 5px;
               width: 150px;
            }
    </style>
</head>

<body>
    <div class="login-dark" style="background-image:url(&quot;img/default-libraries-8.jpg&quot;);">
        <form method="post" action="check.php">
            <center>
            <div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Lock_Icon.svg/768px-Lock_Icon.svg.png">
            </div>
            </center>
            <br>
            <br>            
            <div class="form-group"><input class="form-control" style="color: black;" type="email" name="email" required placeholder="Email"></div>
            <div class="form-group"><input class="form-control" style="color: black;" type="password" name="password" required placeholder="Password"></div>

            <div class="form-group"><button class="btn btn-primary btn-block btn-lg visible" type="submit" data-bs-hover-animate="pulse">Log In</button>
            </div>
        </form>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/bs-animation.js"></script>
</body>

</html>