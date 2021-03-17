<?php
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
    	require 'connection.php';
    	$nameid=$_POST['name'];
    	$bookid=$_POST['bname'];
        $rdate=$_POST['rdate'];
        $query1="select * from issue";
        $res1=mysqli_query($conn,$query1);
        $z=0;
        while($row1=mysqli_fetch_array($res1)) 
        {
         $k=$row1['nameid'];
        if($_POST['name']==$k)
        {
            $z=1;
            echo "<script>alert('Book not returned');
            window.location.href='borrowbook.php';
            </script>";
        } 
        }
        if($z!=1)
        {  	
    	$query="insert into issue(nameid,bookid,rdate) values('$nameid','$bookid','$rdate')";
    	$res=mysqli_query($conn,$query);
    	echo "<center>";
    	if($res)
    	{            
           echo "<script>alert('Book Issued');
            window.location.href='Manage.php';
            </script>";
    	}
    	else
    	{
    		echo "Error";
    	}
    	echo  "</center>";
        } 

    }


 ?>