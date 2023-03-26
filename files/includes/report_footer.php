<div style="clear:both;"><br></div>  
<span>Prepared by:</span><br><br>
<?php 
			include('../files/includes/dbcon.php');
			$id=$_SESSION['id'];
			$query=mysqli_query($con,"select * from signatories natural join member natural join designation where seq='1' and set_by='$id'")or die(mysqli_error($con));
				 $row=mysqli_fetch_array($query);
			$salut= $row['member_salut'];
			$db_first_name = $row['member_first'];
			$db_middle_name = $row['member_middle'];
			$db_last_name = $row['member_last'];
			$full_name = ucfirst($db_first_name).", ".ucfirst($db_middle_name[0]).". ".ucfirst($db_last_name);

				 echo "<span>$full_name $salut</span><br>";
				 echo "<span>$row[designation_name]</span>";
?>
<br><br>

<span>Approved:</span><br><br>
<?php 
			
			$query=mysqli_query($con,"select * from signatories natural join member natural join designation where seq='2' and set_by='$id'")or die(mysqli_error($con));
				 $row=mysqli_fetch_array($query);
				 echo "<span>$row[member_first] $row[member_last]</span><br>";
				 echo "<span>$row[designation_name]</span>";
?>