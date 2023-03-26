<style>
ul.menu, .sub1, .sub2, .sub3{
	list-style:none;
	}
ul.menu li {
	position:relative;
	float:left;
	width:220px;
	height: 40px;
	line-height:40px;
	text-align:center;
	font-size:15px;
	font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
}

ul li ul li.submenu ul.sub1{
	display:none;
	list-style:none;
	position:absolute;
	top:0px;
	left:200px;
	}
ul li ul li.submenu:hover ul.sub1{
	display:block;
	}
ul li ul li.submenu ul.sub2{
	display:none;
	list-style:none;
	position:absolute;
	top:0px;
	left:200px;
	}
ul li ul li.submenu:hover ul.sub2{
	display:block;
	}
	.main nav{
		background-color:#FFF;
		}
</style>
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<script src="../js/bootstrap.min.js"></script>
<header class="main">

    <nav class="navbar-fixed-top">
	<?php include('../files/includes/header.php') ?>
        <div class="container">
            <div class="navbar-header" style="padding-left:20px">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><i class="fa fa-bars"></i></button>
            </div>
            <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu">
        <ul class="nav nav-tabs ">
                <li class=""><a href="home.php" class="" style="color:#000" style="font-size:14px"><i class="glyphicon glyphicon-star-empty text-green"></i> Class Schedule</a></li>
                <li class=""><a href="exam.php" class="" style="color:#000" style="font-size:14px"><i class="glyphicon glyphicon-list-alt text-green"></i> Exam Schedule</a></li>
                <li class="dropdown notifications-menu"><a href="#" class="dropdown-toggle" style="color:#000" data-toggle="dropdown"><i class="glyphicon glyphicon-cog text-green"></i> Settings &nbsp;<span class="caret"></span></a>
        <ul class="dropdown-menu">
			<li class="dropdown submenu"><a href="#" style="color:#000"><i class="glyphicon glyphicon-file text-green"></i> Entry <span class="glyphicon glyphicon-triangle-right" style="float:right;"></span></a>
                <ul class="nav sub1 dropdown-menu">
					<li><a href="class.php"><i class="glyphicon glyphicon-user text-green"></i> Class</a></li>
					<li><a href="room.php"><i class="glyphicon glyphicon-scale text-green"></i> Room</a></li>
                    <li><a href="subject.php"><i class="glyphicon glyphicon-user text-green"></i> Subject</a></li>	  
			        <li><a href="teacher.php"><i class="glyphicon glyphicon-user text-green"></i> Professor</a></li>
					<li><a href="signatories.php"><i class="glyphicon glyphicon-user text-green"></i> Signatories</a></li>
        		</ul>	
			</li><!-- end notification -->
			<li role="separator" class="divider"></li>
            <li class="dropdown submenu"><a href="#" style="color:#000"><i class="glyphicon glyphicon-wrench text-green"></i> Maintenance <span class="glyphicon glyphicon-triangle-right" style="float:right;"></span></a>
                <ul class="nav sub2 dropdown-menu" >
                	<li><a href="department.php"><i class="glyphicon glyphicon-user text-green"></i> Department </a></li>
					<li><a href="designation.php"><i class="glyphicon glyphicon-cutlery text-green"></i> Designation</a></li>
					<li><a href="program.php"><i class="glyphicon glyphicon-cutlery text-green"></i> Program</a></li>
					<li><a href="rank.php"><i class="glyphicon glyphicon-send text-green"></i> Rank</a></li>
					<li><a href="salut.php"><i class="glyphicon glyphicon-user text-green"></i> Salutation</a></li>
					<li><a href="sy.php"><i class="glyphicon glyphicon-user text-green"></i> School Year</a></li>
					<li><a href="time.php"><i class="glyphicon glyphicon-calendar text-green"></i> Time</a></li>
        		</ul>
            </li><!-- end notification -->
			<li role="separator" class="divider"></li>
            <li><!-- start notification -->
                <a href="settings.php"style="color:#000"><i class="glyphicon glyphicon-check text-green"></i> Set Term & School year</a>
            </li><!-- end notification -->
        </ul>
    </li>
				  <!-- Tasks Menu -->

			<li class="">
                    <!-- Menu Toggle Button -->
                <a href="user.php" style="color:#000" class="dropdown-toggle" title="create your account here"><i class="glyphicon glyphicon-user text-green"></i> Welcome <font color="red"><?php echo ucfirst($_SESSION['id']);?></font></a>
            </li>
			<li class="">
                    <!-- Menu Toggle Button -->
                <a href="#logout" style="color:#000" class="dropdown-toggle" data-target="#logout" data-toggle="modal"><i class="glyphicon glyphicon-off text-red"></i> Log-out</a>
            </li>
        </ul>
    </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
    </nav>
<!-- Modal Logout-->
  <div class="modal fade" id="logout" role="dialog" data-backdrop="static" >
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content" >
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Logout Confirmation</h4>
        </div>
        <div class="modal-body">
          <?php        
						if (isset($_POST['submit'])){
							if (($_POST['submit'] =='Yes')) {
								
							
								// destroy session
									session_start();
									session_destroy();
								?>
									<script type="text/javascript">
									<!--
										window.location="../../index.php";

									//-->
									</script>
								<?php
						
								}
						}else{
								?>

									<form method="POST">
										<center>
											<b>Are you sure you want to Logout? </b> <br><br>
											
											<div class="modal-footer">
										  <input class="btn btn-primary btn-sm" type="submit" name="submit" value="Yes" class="button"> &nbsp; 
										  <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No</button> 
											</div>
										</center> 
									</form>
					<?php
					}
					?>
        </div>
      
      </div>
      
    </div>
  </div>
</header>