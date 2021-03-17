<!DOCTYPE html>
<html style="height: 100%;width: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BORROW BOOK</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body style="height: 100%;width: 100%;">
    <?php
    require 'connection.php';
    $query="select *from student";
    $res=mysqli_query($conn, $query);
    ?>

    <div class="row register-form" style="background-image:url(&quot;img/5086168739_fa12cd3318_b.jpg&quot;);background-size:cover; height: 100%;width: 100%;">
        <div class="col-md-8 offset-md-2">
            <form class="custom-form" method="post" action="borrow1book.php">
                <h1>BORROW BOOK</h1>
                <div class="form-row form-group">
                <div class="col-sm-4 label-column">
                    <label for="branch"> Name</label>
                </div>                   
                    <div class="col-sm-4 input-column">

                       <select name="name" id="name" required="">
                       <option value="none" selected disabled> 
                           Select an Option 
                       </option>
                           <?php
                             while($row=mysqli_fetch_array($res)){
                             $id = $row['id'];
                           ?>

                           <option value='<?php echo $row['id']  ?>'><?php echo $row['name']  ?></option>  
                           <?php
                               }
                             ?>
                       </select>
                    </div>
                                       

                </div>
    <?php
    require 'connection.php';
    $query="select *from books";
    $res=mysqli_query($conn, $query);
    ?>                
                <div class="form-row form-group">
                <div class="col-sm-4 label-column">
                    <label for="branch"> Book</label></div>                   
                    <div class="col-sm-4 input-column">

                       <select name="bname" id="bname" required="">
                       <option value="none" selected disabled> 
                           Select an Option 
                       </option>
                           <?php
                             while($row=mysqli_fetch_array($res)){
                             $id = $row['id'];
                           ?>
                           <option value='<?php echo $row['id']  ?>'><?php echo $row['bname']  ?></option>  
                           <?php
                               }
                             ?>
                       </select>
                    </div>
                </div>    
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field"> Return Date</label></div>
                    <div class="col-sm-4 input-column"><input class="form-control" type="date" name="rdate" required placeholder="Insert Date"   ></div>
                </div>                                    
                                                  
                <button class="btn btn-light submit-button">Submit</button>
            </form>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>