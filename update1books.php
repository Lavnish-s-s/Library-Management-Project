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
        $query="select * from books where id='$id'";
        $res=mysqli_query($conn,$query);
        while ($row=mysqli_fetch_array($res)) {
                    ?>            
            <form class="custom-form" method="post" action="update2books.php?id=<?php echo $row['id']; ?>">
                <h1>DETAILS</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Book Name </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="bname" required placeholder="Insert Book Name" 
                        value="<?php echo $row['bname']  ?>"></div>
                </div> 
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Author Name </label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="authname" required placeholder="Insert Author Name" 
                        value="<?php echo $row['authname']  ?>"></div>
                </div>                                
                <div class="form-row form-group">
                <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> Branch Name</label></div>                    
	          		<div class="col-sm-6 input-column">
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