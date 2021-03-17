<?php
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
    	require 'connection.php';
    	$name=$_POST['sname'];
    	$email=$_POST['email'];
    	$number=$_POST['pno'];
    	$sem=$_POST['sem'];
    	$gender=$_POST['gender'];
    	$branch=$_POST['branch'];
    	$query="insert into student(name,email,phoneno,sem,gender,branch) values('$name','$email','$number','$sem','$gender','$branch')";
    	$res=mysqli_query($conn,$query);
    	echo "<center>";
    	if($res)
    	{
            echo "<script>alert('Student Added Successfully');
            window.location.href='Student.php';
            </script>";
    	}
    	else
    	{
    		echo "Error";
    	}
    	echo  "</center>";

    }


 ?>