<?php
    
      
  require 'connection.php';
  $nameid=$_GET['id'];
  $query="DELETE FROM issue WHERE nameid='$nameid'";
  $res=mysqli_query($conn,$query);
  if($res){
            echo "<script>alert('Done');
            window.location.href='manage.php';
            </script>";
         }
  else{
     	echo mysqli_error($conn);
      }



        
 ?>