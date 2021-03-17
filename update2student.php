<?php

    	require 'connection.php';
        $name=$_POST['sname'];
        $email=$_POST['email'];
        $number=$_POST['pno'];
        $sem=$_POST['sem'];
        $gender=$_POST['gender'];
        $branch=$_POST['branch'];
        $id=$_GET['id'];
    	$query="update student SET name='$name',email='$email',phoneno='$number',sem='$sem',gender='$gender',branch='$branch' where id='$id'";
    	$res=mysqli_query($conn,$query);
    	echo "<center>";
    	if($res)
    	{
            echo "<script>alert('Student Details Updated Successfully');
            window.location.href='Student.php';
            </script>";    		
    	}
    	else
    	{
    		echo "Error";
    	}
    	echo  "</center>";




 ?>