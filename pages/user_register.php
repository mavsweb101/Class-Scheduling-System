 <?php
 error_reporting(0);
include('../files/includes/dbcon.php');
	$first =$_POST['Fname'];
	$middle =$_POST['Mname'];
	$last =$_POST['Lname'];
	$username =$_POST['username'];
	$pass =$_POST['pass'];
	$password=md5($pass);
	$designation =$_POST['design'];
	$type =$_POST['type'];

	if(isset($_POST['save']))
	{
		$insert=mysqli_query($con,"insert into enrolment_login 
		(id,Name,middlename,lastname,position,username,password,type)Values('null','$first','$middle','$last','$designation','$username','$password','$type')")or die(mysqli_error());
		$result = mysqli_query($insert);
	
		echo "<script type='text/javascript'>alert('Success your accout is saved');</script>";		
			echo "<script>document.location='user.php'</script>";
	}
?>