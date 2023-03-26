<?php 
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Department | <?php include('../files/includes/title.php');?></title>
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
        

          <!-- Main content -->
          <section class="content">
            <div class="row">
	      <div class="col-md-9">
              <div class="box box-success">
               
                <div class="box-body">
				<div class="row">
					<div class="col-md-12">
						
<table class="table table-bordered table-striped" style="margin-right:-10px">
              <thead>
                <tr>
                <th>Department Code</th>
                <th>Department Name</th>
                <th>Action</th>
                
                
                </tr>
              </thead>
              
    <?php
        include('../files/includes/dbcon.php');
        $query=mysqli_query($con,"select * from dept order by dept_name")or die(mysqli_error());
          
          while($row=mysqli_fetch_array($query)){
            $id=$row['dept_id'];
            $code=$row['dept_code'];
            $name=$row['dept_name'];
    ?>
                <tr>
                <td><?php echo $code;?></td>
                 <td><?php echo $name;?></td>
                <td><a id="click" href="department.php?id=<?php echo $id;?>&code=<?php echo $code;?>&name=<?php echo $name;?>">
                <i class="glyphicon glyphicon-edit text-blue"></i></a>
                <a id="removeme" href="department_del.php?id=<?php echo $id;?>">
                <i class="glyphicon glyphicon-remove text-red"></i></a>
                </td>
        
                </tr>

              
<?php }?>           
</table>  

							  
		</div><!--col end -->
		<div class="col-md-6">
			   
						
         </div><!--col end-->           
        </div><!--row end-->        
					
			
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
            
            <div class="col-md-3">
              <div class="box box-success">
                <div class="box-body">
                  <!-- Date range -->
                  <div id="form">
					
				  <div class="row">
					 <div class="col-md-12">
						 <form method="post" action="department_save.php"> 
						  <div class="form-group">
							<label for="date">Add Department Code & Name</label><br>
								<input type="text" class="form-control" name="code" placeholder="Department Code" required>
								<input type="text" class="form-control" name="name" placeholder="Department Name" required>
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                  <div class="form-group">
                    
                      <button class="btn btn-lg btn-primary" id="daterange-btn" name="save" type="submit">
                        Save
                      </button>
					  <button class="btn btn-lg" id="daterange-btn" type="reset">
                       Cancel
                      </button>
					  
					  
                   </div>
                  </div><!-- /.form group -->
				</form>	
				<div id="form">
					
				  <div class="row">
					 <div class="col-md-12">
						  <form method="post" action="department_update.php">
						  <div class="form-group">
							<label for="date">Update Department Code & Name</label><br>
								<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $_REQUEST['id'];?>" readonly>
								<input type="text" class="form-control" id="class" name="code" value="<?php echo $_REQUEST['code'];?>" placeholder="Department Code" required>
								<input type="text" class="form-control" id="class" name="name" value="<?php echo $_REQUEST['name'];?>" placeholder="Department Name" required>
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                  <div class="form-group">
                    
                      <button class="btn btn-lg btn-primary" id="daterange-btn" name="save" type="submit">
                        Update
                      </button>
					  
					  </form>
					  
                   </div>
                  </div><!-- /.form group --><hr>
                				
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
     <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
  </body>
</html>
