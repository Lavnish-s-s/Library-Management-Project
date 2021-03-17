<?php
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
    	require 'connection.php';
    	$bname=$_POST['bname'];
    	$authname=$_POST['authname'];    	
    	$branch=$_POST['branch'];
    	$query="insert into books(bname,authname,branch) values('$bname','$authname','$branch')";
    	$res=mysqli_query($conn,$query);
    	echo "<center>";
    	if($res)
    	{
            echo "<script>alert('Books Added Successfully');
            window.location.href='Books.php';
            </script>";
    	}
    	else
    	{
    		echo "Error";
    	}
    	echo  "</center>";

    }


 ?>