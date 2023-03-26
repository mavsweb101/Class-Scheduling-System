 <?php session_start();
if(empty($_SESSION['id'])):
header('Location:../HOME.php');
endif;include("../files/includes/dbcon.php");
$id=$_REQUEST['id'];
$result=mysqli_query($con,"DELETE FROM cys WHERE cys_id ='$id'")
	or die(mysqli_error());
	echo "<script type='text/javascript'>alert('Successfully deleted a class!');</script>";	
		
	echo "<script>document.location='class.php'</script>";  
?>