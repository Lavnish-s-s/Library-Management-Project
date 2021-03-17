<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="css/Navigation-with-Button.css">
    <link rel="stylesheet" href="css/Data-Table.css">
    <link rel="stylesheet" href="css/Data-Table2.css">
    <link rel="stylesheet" href="css/Dynamic-Table.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/MUSA_no-more-tables.css">
    <link rel="stylesheet" href="css/MUSA_no-more-tables1.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body style="background-image:url(&quot;img/5086168739_fa12cd3318_b.jpg&quot;);background-size:cover;">
        <br>
        <br> 
    <?php
    require 'connection.php';
    $query="select *from student";
    $res=mysqli_query($conn, $query);
    ?>
    <div class="table-responsive" style="background-color:rgba(255,255,255,0.79);width:90%;margin-left:5%;text-align:center;">
        <table class="table">
            <thead style="background-color:#ffffff;font-family:'Alegreya Sans SC', sans-serif;">

                <tr style="color:rgb(0,0,0);font-family:'Abril Fatface', cursive;">
                    <th>ID</th>
                    <th>NAME</th>
                    <th>VIEW</th>
                </tr>
            </thead>
            <tbody>
                  <?php
                    while($row=mysqli_fetch_array($res)){
                    $id = $row['id'];
                  ?>                
                <tr>

                    <td><?php echo $row['id']  ?></td>
                    <td><?php echo $row['name']  ?></td>
                    <td><button class="btn btn-primary" type="button" onclick="window.location.href='view1student.php?id=<?php echo $row['id']; ?>'">View</button></td>
                </tr>
                <?php
                   }
                  ?>

            </tbody>
        </table>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="js/Dynamic-Table-1.js"></script>
    <script src="js/Dynamic-Table.js"></script>
</body>

</html>