<?php
include('php-includes/check-login-admin.php');
include('php-includes/connect.php');

?>

<?php
 if (isset($_POST['submit'])){
     
    $first_name = mysqli_real_escape_string($con,$_POST['first_name']);
    $middle_name = mysqli_real_escape_string($con,$_POST['middle_name']) ;
    $last_name =mysqli_real_escape_string($con,$_POST['last_name']);
    $license = mysqli_real_escape_string($con,$_POST['license_number']);
    $email =mysqli_real_escape_string($con,$_POST['email']) ;
    $gender = mysqli_real_escape_string($con,$_POST['gender']);
    $password = 'password';
    $user_type = mysqli_real_escape_string($con,$_POST['profession']);
   

    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (first_name, middle_name, last_name, license_number, email, gender, password, user_type)
        VALUES ('$first_name', '$middle_name', '$last_name', '$license',  '$email', '$gender', '$hash', '$user_type')";



        if (mysqli_query($con, $sql)) {
            echo '<script>alert("Registration Successfull.");window.location.assign("User_registration_forms.php");</script>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }    
 }
 

mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EHR user_registration_forms</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

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
                        
                        <li>
                            <a href="Admin_profile.php"><i class="fa  fa-file-text-o "> </i> Admin Profile</a>
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
                            <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
                       
                        <li>
                            <a href="practitionals.php"><i class="fa fa-briefcase "></i> Practitioners</a>
                        </li>
                        <li>
                            <a href="Admin_view_patient.php"><i class="fa fa-group"></i> Patients </a>
                        </li>
                        <li>
                            <a href="user_registration_forms.php"><i class="fa  fa-edit"></i> Add practitioners</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Practitioners Registration</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                <!-- Registration form -->
                                    <form role="form" method="post">
                                       
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input class="form-control" placeholder="First Name" name="first_name">
                                        </div>
                                        <div class="form-group">
                                            <label>Middle Name</label>
                                            <input class="form-control" placeholder="Middle Name" name="middle_name">
                                        </div>
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input class="form-control" placeholder="Last Name" name="last_name">
                                        </div>
                                        <div class="form-group">
                                            <label>License Number</label>
                                            <input class="form-control" placeholder="License Number" name="license_number">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" placeholder="Email" name="email">
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Upload Passport</label>
                                            <input type="file" name="passport">
                                        </div>
                            
                                        <div class="form-group">
                                            <label>Gender</label>
                                            
                                            <input type="radio" name="gender" value="male" checked> Male
                                            <input type="radio" name="gender" value="female"> Female
                                            <input type="radio" name="gender" value="other"> Other

                                        </div>

                                        <div class="form-group">
                                            <label>profession</label>
                                            <select class="form-control" name="profession">
                                                <option  value="Doctor">Doctor</option>
                                                <option  name="profession" value="Radiographer">Radiographer</option>
                                                <option name="profession" value="Physiotherapist">Physiotherapist</option>
                                                <option name="profession" value="Med_lab">Med_lab scientist</option>
                                                <option name="profession" value="Nurse">Nurse</option>
                                                <option name="profession" value="Accountant">Accountant</option>
                                                <option name="profession" value="Pharmacist">Pharmacist</option>
                                            </select>
                                        </div>
                                   
                                     
                                        

                                        <button type="submit" class="btn btn-default" name="submit">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset </button
                                        
                                        ><!-- Registration form -->   
                                    </form>
                                
                                 
                                </div>
                               
                           
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
