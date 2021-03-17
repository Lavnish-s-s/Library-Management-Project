<!DOCTYPE html>
<html style="height: 100%;width: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD FORM</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body style="height: 100%;width: 100%;">
    
    <?php
 
        require 'connection.php';
        $id=$_GET['id'];
        $query="select * from student where id='$id'";
        $res=mysqli_query($conn,$query);
        while ($row=mysqli_fetch_array($res)) {
    ?>
    <div class="row register-form" style="background-image:url(&quot;img/5086168739_fa12cd3318_b.jpg&quot;);background-size:cover; height: 100%;width: 100%;">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" action="Student.php">
                <h1>DETAILS</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label for="name-input-field">Name: </label></div>
                    <div>
                        <p>
                        <?php echo $row['name']?>
                        </p>
                    </div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label for="email-input-field">Email: </label></div>
                    <div>
                        <p>
                        <?php echo $row['email']?>
                        </p>
                    </div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label for="pawssword-input-field">Phone no: </label></div>
                    <div>
                        <p>
                        <?php echo $row['phoneno']?>
                        </p>
                    </div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label for="pawssword-input-field">Semester: </label></div>
                    <div>
                        <p>
                        <?php echo $row['sem']?>
                        </p>
                    </div>
                </div>
                <div class="form-row form-group">
                	<div class="col-sm-4 label-column">
	          		<label for="gender">Gender: </label>
	          		</div>
	          		<div>
                        <p>
                       <?php echo $row['gender']?>
                       </p>
                    </div>
                </div>
                <div class="form-row form-group">
                	<div class="col-sm-4 label-column">
	          		<label for="gender">Branch: </label>
	          		</div>
	          		<div>
                        <p>
                       <?php echo $row['branch']?>
                       </p>
                    </div>
                    <?php
                       }
                      ?>
                    
                </div>
                <button class="btn btn-light submit-button">Submit</button>
            </form>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>