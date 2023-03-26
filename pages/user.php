<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Account Details | <?php include('../files/includes/title.php');?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../files/css/AdminLTE.min.css">
	<link rel="icon" href="../files/img/FINAL_SEAL.png">
	<script src="../files/js/jquery.min.js"></script>
	<link rel="stylesheet" href="../files/includes/contentMargin.css">
</head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-yellow layout-top-nav">
<div class="wrapper">
	  <?php include('../files/includes/nav.php');?>
      <!-- Full Width Column -->
    <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
        

          <!-- Main content -->
<section class="content">
    <div class="row">
	 <div class="col-md-9">
        <div class="box box-success">
            <div class="box-body">
				<div class="row">
					<div class="col-md-12">
						<table id="example1" class="table table-bordered table-striped" style="margin-right:-10px">
              <thead>
                <tr>
				<th>Name</th>
				<th>Username</th>
                <th>Designation</th>
                
                <th>Action</th>
                
                
                </tr>
              </thead>
              
    <?php
        include('../files/includes/dbcon.php');
        $query=mysqli_query($con,"select * from enrolment_login where type='Class Scheduling'")or die(mysqli_error());
			while($row=mysqli_fetch_array($query)){
			   $id=$row["id"];
				$name=$row["Name"];
				$middlename=$row["middlename"];
				$lastname=$row["lastname"];
				$username=$row["username"];
				$position=$row["position"];
				$user=ucfirst($name) . " " . ucfirst($middlename) . " " . ucfirst($lastname);
    ?>
                <tr>

					<td><?php echo "$user" ?></td>
					<td><?php echo "$username" ?></td>
					<td><?php echo "$position" ?></td> 
					<td>
						<?php
							if ($id)  
							{
								echo "  
								<a id='removeme' href='user_del.php?id=$id'>
								<i class='glyphicon glyphicon-remove text-red'></i></a>";
							}
						?>
					</td>
				</tr>

              
<?php }?>           
</table>  
							  
		</div><!--col end -->          
        </div><!--row end-->        
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col (right) -->
        <form method="post" action="user_register.php">
            <div class="col-md-3">
				<div class="box box-success">
					<div class="box-body">
				<!-- Date range -->
						<div id="form">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
                                    <label for="date"><h4>Create Account</h4></label><br>
										<label for="date">First name:</label><br>
											<input type="text" class="form-control" name="Fname" placeholder="First name" required>
										<label for="date">Middle name:</label><br>
											<input type="text" class="form-control" name="Mname" placeholder="Middle name" required>
										<label for="date">Last name:</label><br>
											<input type="text" class="form-control" name="Lname" placeholder="Last name" required>
										<label for="date">Designation:</label><br>
											<input type="text" class="form-control" name="design" placeholder="Designation" required>
										<label for="date">Username:</label><br>
											<input type="text" class="form-control" name="username" placeholder="Username" required>
										<label for="date">Password:</label><br>
											<input type="password" class="form-control" name="pass" placeholder="Password" required>

										<br>
											<input type="hidden" class="form-control" value="Class Scheduling" name="type" placeholder="Password" readonly>
										
										<button class="btn btn-lg btn-block btn-primary" name="save" type="submit">Save</button>
										<button class="btn btn-lg btn-block" type="reset">Cancel</button>
									</div><!-- /.form group -->
								</div>
							</div>						  
						</div><hr>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
            </div><!-- /.col (right) -->
		</form>	
    </div><!-- /.row -->
</section><!-- /.content -->
        </div><!-- /.container -->
    </div><!-- /.content-wrapper -->
    
</div><!-- ./wrapper -->
	

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
<script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
</script>
</body>
</html>
