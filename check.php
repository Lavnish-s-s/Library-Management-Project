<?php 
require 'connection.php';
$email=$_POST['email'];
$password=$_POST['password'];
$query="select * from password";
$res=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($res))
{
	if($email==$row['email'] && $password==$row['password'])
	{
		ob_start();
        session_start();
		header("Location:fpage.php");
	}
}

echo "<script>alert('Incorrect Username or Password');
window.location.href='index.php';
</script>";

 ?>