<?php
include('php-includes/connect.php');
include('php-includes/check-login-admin.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   
</head>

<body>

    <div id="wrapper">

      
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">EHR Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        </li>
                        <li>
                            <a href="Admin_profile.php"><i class="fa  fa-file-text-o "></i> Admin Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                           
                            
                        </li>
                        
                            <!-- /side bar -->
                            <li>
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard </a>
                        </li>
                      
                       
                        <li>
                            <a href="practitionals.php"><i class="fa fa-briefcase "></i> Practitioners </a>
                        </li>
                        <li>
                            <a href="Admin_view_patient.php"><i class="fa fa-group"></i> Patients </a>
                        </li>
                        <li>
                            <a href="user_registration_forms.php"><i class="fa  fa-edit"></i> Add practitioners </a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        
        <div id="page-wrapper" >
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">List Of Patients In Nigeria</h1>
                    <?php
                    //connect to database
                    
                    //select database
                    mysqli_select_db($con,'ehr');
                    //select query
                   $query = "SELECT * FROM users";
                   //Execute query
                   $records= mysqli_query($con, $query)

                    ?>
                   <table class="table table-bordered">
      <thead>
        <tr>
        <th>s/n</th>
          <th>HCN</th>
          <th>Name</th>
          <th>Gender</th>
          <th>Email</th>
          <th>S.O.O</th>
          <th>D.O.B</th>
          
          
          <th>History</th>
         
          </tr>
          
        
       
      
      </thead>

      <tbody>
     
      <?php
          // output data of each row
          $i=1;
            
          $query= mysqli_query($con,"select * from patients");
          if (mysqli_num_rows($query) > 0) {

          while($row = mysqli_fetch_array($query)) {
            ?> 
               <tr>
               <?php $name = $row['first_name'].' '.$row['middle_name'].' '.$row['last_name']; ?>

               <td><?php echo $i ?></td>
               <td><?php echo $row['patients_id'] ?></td>
               <td><?php echo $name ?></td>
               <td><?php echo $row['gender'] ?></td>
               <td><?php echo $row['email'] ?></td>
               <td><?php echo $row['state_of_origin'] ?></td>
               <td><?php echo $row['dob'] ?></td>
              
              
               <td>
               <form method="post" action="pmh.php" >
                                            
                                            <input name="hcn" value="<?php echo $row['patients_id'] ?>" type="hidden" >
                                            <!-- Change this to a button or input when using this as a form -->
                                            <input type="submit" name="See patient history" value="See patient history"class="btn btn-primary btn-block">
                                        
                                    </form>
               </td>
              
              
               
               </tr>
            
          <?php
          $i++;      
          }
          } else {
          echo "0 results";
          }
          
          mysqli_close($con);
     ?> 
                
                 
                
          
                </div>
                <!-- /.col-lg-12 -->
            </div>
          
            <!-- /.row -->

            <!-- /.row -->
        </div>
   <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="vendor/morrisjs/myjs.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
