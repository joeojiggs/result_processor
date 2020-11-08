<?php

include('php-includes/check-login-admin.php');


include('php-includes/connect.php');


$hcn = $_POST['hcn'];
  




$query = mysqli_query($con,"select * from patients where `patients_id` = '$hcn'");
?> 

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="O.J Technologies LTD">

    <title>EHR- Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

 

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
                <a class="navbar-brand" href="index.html">EHR</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-message">
                        
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
                        <li>
                            <a href="Doctors_dashboard.php"><h1><i class="fa fa-stethoscope fa-fw"></i> EHR</h1></a>
                        </li>
                        <li style="margin:19px">
                            <a href="pin.php"><i class="" id="profile" >
                            </i><img src="img/avatar.jpg" alt="Girl in a jacket" width="100" height="100"></a>
                            <?php 
                                    
                                    
                                   
                                        while($row=mysqli_fetch_assoc($query)){
                                            $first_name = $row['first_name'];
                                            $middle_name = $row['middle_name'];
                                            $last_name = $row['last_name'];
                                            $dob = $row['dob'];
                                            $gender = $row['gender'];
                                            $hcn = $row['patients_id'];

                                        ?>
                            <div class='form'>
                            
                            <p>Name:  <?php echo $first_name," ", $middle_name, " ", $last_name; ?></p>
                            <p>HCN: <?php echo $hcn; ?></p>
                            <p>DOB:  <?php echo $dob; ?></p>
                            <p>Gender: <?php echo $gender; ?></p>
                            <?php
                                   
                                    }
                                    
                                    ?>
                        </li>
                      
                     
                           
                            
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
                          
                            </ul>
                            <!-- /.nav-second-level -->
                       
                      
                        </form>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PATIENT MEDICAL HISTORY</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Full History
                        </div>
                        
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Date</th>
                                        <th>Practitioners</th>
                                        <th>Name of Practitionals</th>
                                        <th>Reports Type</th>
                                        <th>Practitioners' Reports</th>
                                        <th>Hospital</th>
                                        
                                         
                                       
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <tr class="odd gradeX">       
                                    <?php 
                                    $i=1;
                                    $query = mysqli_query($con,"select * from recommendations where hcn='$hcn'");
                                    if(mysqli_num_rows($query)>0){
                                        while($row=mysqli_fetch_array($query)){
                                            $date = $row['date'];
                                            $user_type = $row['user_type'];
                                            $user_name = $row['user_name'];
                                            $hospital = $row['hosp_name'];
                                            $report_type = $row['report_type'];
                                            $recommendation = $row['recommendations'];
                                           

                                        ?>
                                	
                                    	<td><?php echo $i; ?></td>
                                        <td><?php echo $date; ?></td>
                                        <td><?php echo $user_type; ?></td>
                                        <td><?php echo $user_name; ?></td>
                                        <td><?php echo $report_type; ?></td>
                                        <td><?php echo $recommendation; ?></td>
                                        <td><?php echo $hospital; ?></td>
                               

                                    </tr>
                                    <?php
                                        $i++;
                                    }
                                    }
                                    else{
                                    ?>
                                        <tr>
                                            <td colspan="7" text-align="center" >There is history.</td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                            
                                </tbody>
                            </table>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
               
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->

                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div> -->

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
            <!-- /.container-fluid -->
            <div class="container-fluid">
                <div class="row">

                    <!-- /.col-lg-12 -->
                </div>
            </div>
            <!-- /.container-fluid -->
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

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
