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
    <div class="row register-form" style="background-image:url(&quot;img/5086168739_fa12cd3318_b.jpg&quot;);background-size:cover; height: 100%;width: 100%;">
        <div class="col-md-8 offset-md-2">
        <?php
        require 'connection.php';
        $id=$_GET['id'];
        $query="select * from student where id='$id'";
        $res=mysqli_query($conn,$query);
        while ($row=mysqli_fetch_array($res)) {
                    ?>            
            <form class="custom-form" method="post" action="update2student.php?id=<?php echo $row['id']; ?>">
                <h1>DETAILS</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="sname" required placeholder="Insert Name" value="<?php echo $row['name']  ?>"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="email-input-field">Email </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="email" name="email" required placeholder="Insert Email" 
                        value="<?php echo $row['email']  ?>"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Phone no:-</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="tel" name="pno" required placeholder="Add Phone No" pattern="[0-9]{10}" value="<?php echo $row['phoneno'] ?>"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="pawssword-input-field">Semester:-</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="sem" required placeholder="Semester" value="<?php echo $row['sem'] ?>"></div>
                </div>
                <div class="form-row form-group">
                	<div class="col-sm-4 label-column">
	          		<label for="gender">Gender:</label>
	          		</div>
	          		<div class="col-sm-4 input-column">
                       <select name="gender" id="gender" required="" value="<?php echo $row['gender'] ?>">
                       <option value="none" selected disabled> 
                           Select an Option 
                       </option>                        
                         <option value="M">Male</option>
                         <option value="F">Female</option>
                         <option value="O">Other</option>
                       </select>
                    </div>
                </div>
                <div class="form-row form-group">
                	<div class="col-sm-4 label-column">
	          		<label for="gender">Branch:</label>
	          		</div>
	          		<div class="col-sm-4 input-column">
                       <select name="branch" id="branch" required="" value="<?php echo $row['branch'] ?>">
                       <option value="none" selected disabled> 
                           Select an Option 
                       </option>                        
                         <option value="EXTC">Extc</option>
                         <option value="COMPS">Comps</option>
                         <option value="IT">It</option>
                         <option value="Mech">Mech</option>
                         <option value="Civil">Civil</option>
                       </select>
                    </div>
                    
                </div>
                <button class="btn btn-light submit-button">Submit</button>
            </form>
            <?php
                }
              ?>            
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>