<?php session_start();
if(empty($_SESSION['id'])):
endif;?>
<!DOCTYPE hmtl>
<html>
<head>
    <link rel="icon" href="../files/img/FINAL_SEAL.png">
<link rel="stylesheet" href="../files/css/print.css" media="print">
<script src="../files/js/jquery.min.js"></script>
<style>
	table td,th{
		border: 1px solid black;
		
	}
	table{
		border-collapse:collapse;
		text-align:center;
		font-size:12px;
		
	}
	tr{
		height:20px;
	}
	thead tr {
		height:5px!important;
	}

	.wrapper_print{
		width:60%;
		margin:auto;
	}
	
	.action a{

		color:#ff0000;
		text-decoration:none;
		font-weight:bolder;
	}
	th{
		width:15%
	}
	th:last-child{
		width:5%;
	}

	
</style>
</head>
<body>
<?php 
include('../files/includes/dbcon.php');
 ?>
 <script type="text/javascript" charset="utf-8">
			jQuery(document).ready(function() {
			
		window.print()
			
			});
			</script>
 
 <div class="wrapper_print">
 <?php 
 if (isset($_POST['search']))
$id=$_SESSION['id'];
$member=$_POST['faculty'];
$sid=$_SESSION['settings'];


$search=mysqli_query($con,"select * from member where member_id='$member'")or die(mysqli_error($con));
	$row=mysqli_fetch_array($search);
			$db_first_name = $row['member_first'];
			$db_middle_name = $row['member_middle'];
			$db_last_name = $row['member_last'];
			$full_name = ucfirst($db_last_name).", ".ucfirst($db_first_name)." ".ucfirst($db_middle_name[0]).".";


$settings=mysqli_query($con,"select * from settings where settings_id='$sid'")or die(mysqli_error($con));
	$rows=mysqli_fetch_array($settings);
?> 

<h5 align = "center">
<img src = "../files/img/FINAL_SEAL.png" width ="60px" height="60px" class="logo">
<br>
ISABELA STATE UNIVERSITY</br>
JONES CAMPUS</br>
JONES, ISABELA</br><br><br>
FACULTY <?php echo strtoupper($rows['term']);?> EXAM SCHEDULE</br>
</h5>
<h5 align="center">
	<h5 align="center" style="margin-top: -15px;margin-bottom: 10px">
		<span style="margin-right: 5px">Faculty: </span>
		<span style="color: blue;margin-right: 15px"><?php echo $full_name;?></span>
		<span style="margin-right: 5px">School Year:</span>
		<span style="color: blue;margin-right: 15px"><?php echo $rows['sy']; ?></span>
		<span style="margin-right: 5px">Semester: </span>
		<span style="color: blue;margin-right: 15px"><?php echo $rows['sem']; ?> </span>
	</h5>
</h5>
<table style="width:100%;float:left">
							<thead>
							  <tr>
								<th>Subject</th>
								<th>Day</th>
								<th>Time</th>
								<th>Room</th>
								<th>Class</th>
								<th class="action">Action</th>
							  </tr>
							</thead>
							
							  
								
								<?php $query1=mysqli_query($con,"select * from exam_sched natural join member natural join time 
								where exam_sched.member_id='$member' and settings_id='$sid' order by day,time_start")or die(mysqli_error($con));
										while($row1=mysqli_fetch_array($query1)){
											$id1=$row1['sched_id'];	
											$encoder=$row1['encoded_by'];	
											$start=date("h:i a",strtotime($row1['time_start']));
											$end=date("h:i a",strtotime($row1['time_end']));										
									?>
									<tr class="show">
										<td class="name"><?php echo $row1['subject_code'];?></td>
										<td><?php echo $row1['day'];?> day</td>
										<td><?php echo $start."-".$end;?></td>
										<td><?php echo $row1['room'];?></td>
										<td><?php echo $row1['cys']."  ".$row1['cys1'];?></td>
										<td class='action' style='text-align:center'>
										<?php if($id==$encoder) 
										{
											echo "
										
										<span class='action'><a href='exam_edit.php?id=$id1' title='edit' style='color:blue'>Edit</a></span>
											<span class='action'><a href='#' id='$id1' class='delete' title='Delete'>Delete</a></span>
											";
										}?>	
										</td>		
									</tr>		
																			
							
							
		<?php }?>					  
		</table>    

	
  
  
  
 </b>

  </body>
    <script src="jquery.js"></script>
<script type="text/javascript">
$(function() {
$(".delete").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info = 'id=' + del_id;
if(confirm("Are you sure you want to delete this?"))
{
 $.ajax({
   type: "POST",
   url: "exam_sched_del.php",
   data: info,
   success: function(){
 }
});
  $(this).parents(".show").animate({ backgroundColor: "#003" }, "slow")
  .animate({ opacity: "hide" }, "slow");
 }
return false;
});
});
</script>
  </html>
