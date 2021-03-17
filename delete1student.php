<?php
    
      
  require 'connection.php';
  $id=$_GET['id'];
  $query="DELETE FROM student WHERE id='$id'";
  $res=mysqli_query($conn,$query);
  if($res){
            echo "<script>alert('Student Deleted');
            window.location.href='deletestudent.php';
            </script>";
         }
  else{
     	echo mysqli_error($conn);
      }



        
 ?>