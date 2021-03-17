<?php

    	require 'connection.php';        
        $bname=$_POST['bname'];
        $authname=$_POST['authname'];        
        $branch=$_POST['branch'];
        $id=$_GET['id'];
    	$query="update books SET bname='$bname',authname='$authname',branch='$branch' where id='$id'";
    	$res=mysqli_query($conn,$query);
    	echo "<center>";
    	if($res)
    	{
            echo "<script>alert('Book Details Updated Successfully');
            window.location.href='Books.php';
            </script>";    		
    	}
    	else
    	{
    		echo "Error";
    	}
    	echo  "</center>";
 ?>