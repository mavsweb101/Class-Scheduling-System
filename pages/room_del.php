<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../home.php');
endif;
include("../files/includes/dbcon.php");
$id=$_REQUEST['id'];
$result=mysqli_query($con,"DELETE FROM room WHERE room_id ='$id'")
	or die(mysqli_error());
	echo "<script type='text/javascript'>alert('Successfully deleted a room!');</script>";	
	echo "<script>document.location='room.php'</script>";  
?>