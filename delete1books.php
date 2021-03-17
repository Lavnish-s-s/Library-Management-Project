<?php
    
      
  require 'connection.php';
  $id=$_GET['id'];
  $query="DELETE FROM books WHERE id='$id'";
  $res=mysqli_query($conn,$query);
  if($res){
            echo "<script>alert('Book Deleted');
            window.location.href='Books.php';
            </script>";
         }
  else{
     	echo mysqli_error($conn);
      }



        
 ?>