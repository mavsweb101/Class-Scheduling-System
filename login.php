<?php session_start();

include('files/includes/dbcon.php');

if(isset($_POST['login']))
{

$user_unsafe=$_POST['username'];
$pass_unsafe=$_POST['password'];

$user = mysqli_real_escape_string($con,$user_unsafe);
$pass = mysqli_real_escape_string($con,$pass_unsafe);

$pass=md5($pass);
/*$salt="a1Bz20ydqelm8m1wql";
$pass=$salt.$pass;*/

$query=mysqli_query($con,"select * from user where username='$user' and password='$pass'")or die(mysqli_error($con));
	$row=mysqli_fetch_array($query);
           
           $name=$row['name'];
           $counter=mysqli_num_rows($query);
           $id=$row['user_id'];
           $status=$row['type'];
	  	if ($counter == 0) 
		  {	
		  echo "<script type='text/javascript'>alert('Invalid Username or Password!');
		  document.location='index.php'</script>";
		  } 
	  else
		  {

	  	$query=mysqli_query($con,"select * from settings where status='active'")or die(mysqli_error());
		$row=mysqli_fetch_array($query);		
	
		$_SESSION['settings']=$row['settings_id'];
		$_SESSION['term']=$row['term'];
	  	$_SESSION['id']=$id;	
	  	$_SESSION['name']=$name;	
	  	$_SESSION['type']=$status;	
	  		
		  	if ($status=='Class Scheduling')
		  		{
				  
				 	echo "<script type='text/javascript'>document.location='pages/home.php'</script>";
				 }
			  else
			  {

					echo "<script type='text/javascript'>document.location='pages/faculty_home.php'</script>";
				}
		  
	 
	
		// echo "<script type='text/javascript'>document.location='pages/home.php'</script>";
	  }
}	 
?>
