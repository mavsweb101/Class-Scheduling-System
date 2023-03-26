
 <?php session_start();
if(empty($_SESSION['id'])):
header('Location:../home.php');
endif;

include('../files/includes/dbcon.php');

	$salut = $_POST['salut'];	
	$last = $_POST['last'];	
	$first = $_POST['first'];	
	$middle = $_POST['middle'];	
	$rank = $_POST['rank'];	
	$dept = $_POST['dept'];	
	$designation = $_POST['designation'];	
					
		$query=mysqli_query($con,"select * from member where member_last='$last' and  member_first='$first' and  member_middle='$middle'")or die(mysqli_error());
				$count=mysqli_num_rows($query);
				if ($count>0)
				{
					echo "<script type='text/javascript'>alert('Member already exist');</script>";
					echo "<script>document.location='teacher.php'</script>";  
				}	
				else{
					mysqli_query($con,"INSERT INTO member(member_salut,member_last,member_first,member_middle,member_rank,dept_code,designation_id) 
					VALUES('$salut','$last','$first','$rank','$dept','$designation')")or die(mysqli_error());
				
					echo "<script type='text/javascript'>
				alert('Successfuly added new member');</script>";	
				echo "<script>document.location='teacher.php'</script>";  
				}
				  
	
?>