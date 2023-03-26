
 <?php session_start();
if(empty($_SESSION['id'])):
endif;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Member | <?php include('../files/includes/title.php');?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../files/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../plugins/select2/select2.min.css">
	<link rel="icon" href="../files/img/FINAL_SEAL.png">
	<script src="../files/js/jquery.min.js"></script>
	<link rel="stylesheet" href="../files/includes/contentMargin.css">
 </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-yellow layout-top-nav" onload="myFunction()">
    <div class="wrapper">
	  
	  
      <?php include('../files/includes/nav.php');?>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
        
<?php 
			include('../files/includes/dbcon.php');
			$id=$_REQUEST['id'];
			$query=mysqli_query($con,"select * from member left outer join designation on member.designation_id=designation.designation_id where member_id='$id'")or die(mysqli_error($con));
				 $row=mysqli_fetch_array($query);
?>
          <!-- Main content -->
          <section class="content">
            <div class="row">
	      <div class="col-md-6">
              <div class="box box-success">
               <form method="post" action="teacher_update.php">
                <div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label for="date">Salutation</label>
								<input type="hidden" class="form-control" name="id" value="<?php echo $row['member_id'];?>" required>
								<select class="form-control select2" name="salut" required>
									<option><?php echo $row['member_salut'];?></option>
								  <?php 
									$query2=mysqli_query($con,"select * from salut order by salut")or die(mysqli_error($con));
									  while($row2=mysqli_fetch_array($query2)){
								  ?>
										<option><?php echo $row2['salut'];?></option>
								  <?php }
									
								  ?>
								</select>
							
						  </div><!-- /.form group -->

						  <div class="form-group">
							<label for="date">First Name</label><br>
								<input type="text" class="form-control" name="first" placeholder="First Name" value="<?php echo $row['member_first'];?>" required>	
						  </div><!-- /.form group -->
						  
						  <div class="form-group">
							<label for="date">Middle Name</label><br>
								<input type="text" class="form-control" name="middle" placeholder="Middle Name" value="<?php echo $row['member_middle'];?>" required>	
						  </div><!-- /.form group -->
						  
						  <div class="form-group">
							<label for="date">Last Name</label><br>
								<input type="text" class="form-control" name="last" placeholder="Last Name" value="<?php echo $row['member_last'];?>" required>	
						  </div><!-- /.form group -->
						  
						   <div class="form-group">
							<label for="date">Rank</label>
							
								<select class="form-control select2" name="rank" required>
									<option><?php echo $row['member_rank'];?></option>
								  <?php 
									$query2=mysqli_query($con,"select * from rank order by rank")or die(mysqli_error($con));
									  while($row2=mysqli_fetch_array($query2)){
								  ?>
										<option><?php echo $row2['rank'];?></option>
								  <?php }
									
								  ?>
								</select>
							
						  </div><!-- /.form group -->
						  <div class="form-group">
							<label for="date">Department</label>
							
								<select class="form-control select2" name="dept" required>
									<option><?php echo $row['dept_code'];?></option>
								  <?php 
									$query2=mysqli_query($con,"select * from dept order by dept_code")or die(mysqli_error($con));
									  while($row2=mysqli_fetch_array($query2)){
								  ?>
										<option><?php echo $row2['dept_code'];?></option>
								  <?php }
									
								  ?>
								</select>
							
						  </div><!-- /.form group -->
						  <div class="form-group">
							<label for="date">Designation</label>
								
								<select class="form-control select2" name="designation" required>
								<option value="<?php echo $row['designation_id'];?>"><?php echo $row['designation_name'];?></option>
								  <?php 
									$query2=mysqli_query($con,"select * from designation order by designation_name")or die(mysqli_error($con));
									  while($row2=mysqli_fetch_array($query2)){
								  ?>
										<option value="<?php echo $row2['designation_id'];?>"><?php echo $row2['designation_name'];?></option>
								  <?php }
									
								  ?>
								</select>
							
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                  <div class="form-group">
                    
                      <button class="btn btn-lg btn-primary" id="daterange-btn" name="save" type="submit">
                        Save Changes
                      </button>
					  <a class="btn btn-lg btn-default " id="daterange-btn" href="teacher.php">
                       Cancel
                      </a>
					  
					  
                   </div>
                  </div><!-- /.form group -->
							  
					</div><!--col end -->
		
				
				</form>	
                </div><!-- /.box-body -->
				
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
			
			
          </div><!-- /.row -->
	  
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->





	<script type="text/javascript" src="autosum.js"></script>
    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<script src="../files/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../plugins/select2/select2.full.min.js"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../files/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../files/js/demo.js"></script>
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    
   
  </body>
</html>