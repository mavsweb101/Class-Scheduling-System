<?php
include("../files/includes/dbcon.php");
$id=$_REQUEST['id'];
$result=mysqli_query($con,"DELETE FROM enrolment_login WHERE type='Class Scheduling' AND id ='$id'")or die(mysqli_error());
	
	echo "<script type='text/javascript'>alert('Successfully deleted a room!');</script>";	
	echo "<script>document.location='user.php'</script>";  
?>