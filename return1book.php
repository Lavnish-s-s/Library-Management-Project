<?php
    if($_SERVER['REQUEST_METHOD']=="POST")
    {

        function dateDiffInDays($date1, $date2)  
          { 
              $diff = strtotime($date2) - strtotime($date1);
              return round($diff / 86400);
          } 

        require 'connection.php';
    	$nameid=$_POST['name'];
        $query="select * from issue where nameid='$nameid'";
        $res=mysqli_query($conn,$query);
        while ($row=mysqli_fetch_array($res))
        {
            $date1=date("Y/m/d");
            $date2=$row['rdate'];
            $dateDiff = dateDiffInDays($date1, $date2); 
            if($dateDiff<0)
            {
                $k=abs($dateDiff);
                $o=10*(ceil($k/7));
                echo "<script>alert('Collect Rs. $o');
                window.location.href='return2book.php?id=$nameid';
                </script>";
            }
            else
            {
                echo "<script>alert('No penalties');
                window.location.href='return2book.php?id=$nameid';
                </script>";                
            }
        }

    }


 ?>