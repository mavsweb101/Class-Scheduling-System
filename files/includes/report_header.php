<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
?>
<style>
	span{
		font-size: 12px!important;
	}
	table td,th{
		border: 1px solid black;
		
	}
	table{
		border-collapse:collapse;
		text-align:center;
		font-size:9px;
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
	.first{
		width:50px
	}
	.action a{
		float:right;
		color:#ff0000;
		text-decoration:none;
		font-weight:bolder;
	}
	th{
		width:18%
	}
	.sec{
		width:30%;
	}
	.hideme{
		display:none;
	}
	.showme{
		font-size: 10px!important;
	}
	ul li{
		list-style-type:none;
		display:block;
		text-align: center;
		margin-left:-40px;

	}
	ul{
		margin-bottom: 0px;
	}
	h5
	{
		font-size:17px
	}
</style>
<h5 align = "center">
<img src = "../files/img/FINAL_SEAL.png" width ="60px" height="60px" class="logo">
<br>
ISABELA STATE UNIVERSITY</br>
JONES CAMPUS</br>
JONES, ISABELA</br><br>
<?php
	
	if($member<>"")
	{
		$room="";
		$class="";	
		$text="Faculty";
		$db_first_name = $row['member_first'];
		$db_middle_name = $row['member_middle'];
		$db_last_name = $row['member_last'];
		$value = ucfirst($db_last_name).", ".ucfirst($db_first_name)." ".ucfirst($db_middle_name[0]).".";
		echo "FACULTY SCHEDULE";
		$displaym="hideme";
		$displayr="showme";
		$displayc="showme";
		
	}
	elseif($room<>"")
	{
		$member="";
		$class="";
		$text="Room";
		$value=$room;
		echo "ROOM SCHEDULE";
		$displayr="hideme";
		$displayc="showme";
		$displaym="showme";
	}
	elseif($class<>"")
	{
		$room="";
		$member="";
		$text="Class";
		$value=$class;
		echo "CLASS SCHEDULE";
		$displayc="hideme";
		$displaym="showme";
		$displayr="showme";
	}
?>

</h5>
	<h5 align="center" style="margin-top: -15px;margin-bottom: 10px">
    
		<span style="margin-right: 5px"><?php echo $text;?>: </span>
		<span style="color: blue;margin-right: 15px"><?php echo $value;?></span>
		<span style="margin-right: 5px">School Year:</span>
		<span style="color: blue;margin-right: 15px"><?php echo $rows['sy']; ?></span>
		<span style="margin-right: 5px">Semester: </span>
		<span style="color: blue;margin-right: 15px"><?php echo $rows['sem']; ?> </span>
	</h5>