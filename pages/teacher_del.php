
 <?php session_start();
if(empty($_SESSION['id'])):
header('Location:../home.php');
endif;
include("../files/includes/dbcon.php");
$id=$_REQUEST['id'];
$result=mysqli_query($con,"DELETE FROM member WHERE member_id ='$id'")
	or die(mysqli_error());
	echo "<script type='text/javascript'>alert('Successfully deleted a faculty!');</script>";	
	echo "<script>document.location='teacher.php'</script>";  
?>