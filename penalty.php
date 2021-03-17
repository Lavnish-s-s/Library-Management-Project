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
    <?php
    require 'connection.php';
    $query="SELECT * FROM issue JOIN student ON issue.nameid = student.id JOIN books ON issue.bookid= books.id";
    $res=mysqli_query($conn, $query);
    ?>
    <div class="table-responsive" style="background-color:rgba(255,255,255,0.79);width:90%;margin-left:5%;text-align:center;">
        <table class="table">
            <thead style="background-color:#ffffff;font-family:'Alegreya Sans SC', sans-serif;">

                <tr style="color:rgb(0,0,0);font-family:'Abril Fatface', cursive;">
                    <th>STUDENT NAME</th>
                    <th>ISSUED BOOK NAME</th>
                    <th>RETURN DATE</th>
                    <th>PENALTY</th>
                </tr>
            </thead>
            <tbody>
                  <?php
                    function dateDiffInDays($date1, $date2)  
                    { 
                       $diff = strtotime($date2) - strtotime($date1);
                       return round($diff / 86400);
                    }

                    while($row=mysqli_fetch_array($res)){
                    $id = $row['id'];
                    $date1=date("Y/m/d");
                    $date2=$row['rdate'];
                    $dateDiff = dateDiffInDays($date1, $date2);
                    if($dateDiff<0)
                    {
                        $k=abs($dateDiff);
                        $o=10*(ceil($k/7));
                    ?>    
                     <tr>
     
                         <td><?php echo $row['name']  ?></td>
                         <td><?php echo $row['bname']  ?></td>
                         <td><?php echo $row['rdate']  ?></td>
                         <td><?php echo $o ?></td>
                     </tr>               
                <?php
                   }
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