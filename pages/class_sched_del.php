 <?php session_start();
if(empty($_SESSION['id'])):
endif;include("../files/includes/dbcon.php");
if($_POST['id'])
{
$id=$_POST['id'];
$result=mysqli_query($con,"DELETE FROM schedule WHERE sched_id ='$id'")
	or die(mysqli_error());
}
	//echo "<script>document.location='class.php'</script>";  
?>