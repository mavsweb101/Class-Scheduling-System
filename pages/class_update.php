<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../HOME.php');
endif;
if($_POST)
{
include('../files/includes/dbcon.php');
	$id = $_POST['id'];
	$class =$_POST['class'];
	
	mysqli_query($con,"update cys set cys='$class' where cys_id='$id'")or die(mysqli_error());
	echo "<script type='text/javascript'>alert('Successfully updated a class!');</script>";	
	echo "<script>document.location='class.php'</script>";  
	
}	
	
?>
