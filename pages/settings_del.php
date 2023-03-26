<?php session_start();
if(empty($_SESSION['id'])):

endif;
include("../files/includes/dbcon.php");
$id=$_REQUEST['id'];
$result=mysqli_query($con,"DELETE FROM settings WHERE settings_id ='$id'")or die(mysqli_error());

	echo "<script type='text/javascript'>alert('Successfully deleted settings!');</script>";	
	echo "<script>document.location='settings.php'</script>";  
?>