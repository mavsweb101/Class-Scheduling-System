
<?php
include("../files/includes/dbcon.php");
$id=$_REQUEST['id'];
$result=mysqli_query($con,"DELETE FROM subject WHERE subject_id ='$id'")
	or die(mysqli_error());
	echo "<script type='text/javascript'>alert('Successfully deleted a room!');</script>";	
	echo "<script>document.location='subject.php'</script>";  
?>