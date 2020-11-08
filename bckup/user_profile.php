
<?php
include('php-includes/check-login-medlab.php');
include('php-includes/connect.php');

$user_type = $_SESSION['user_type'];
$email = $_SESSION['userid'];


$query = mysqli_query($con,"select * from users where `email` = '$email'");
?>
<?php

if(isset($_POST['name_change'])){
	$first_name = mysqli_real_escape_string($con,$_POST['first_name']);
    $middle_name = mysqli_real_escape_string($con,$_POST['middle_name']);
    $last_name = mysqli_real_escape_string($con,$_POST['last_name']);


    $sql2= mysqli_query($con, "UPDATE users SET first_name='$first_name', middle_name='$middle_name', last_name='$last_name' WHERE email ='$email' ");
    if($sql2){
        echo '<script>alert("Successfull.");window.location.assign("user_profile.php");</script>';
    }else{
        echo 'nooooo';
    }
}

if(isset($_POST['profile_change'])){
	$first_name = mysqli_real_escape_string($con,$_POST['profile']);
    
}
if(isset($_POST['password_change'])){
	$first_name = mysqli_real_escape_string($con,$_POST['previous_password']);
    $middle_name = mysqli_real_escape_string($con,$_POST['new_password']);
   
    
}
 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EHR User Profile</title>

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
                <a class="navbar-brand" href="index.html">EHR</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
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
                            <a href="accountants_dashboard.php"><h1><i class="fa fa-stethoscope fa-fw"></i> EHR</h1></a>
                        </li>
                        <li>
                            <a href="accountants_dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-stethoscope fa-fw"></i> Patient <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="forms.php"><i class="fa fa-plus fa-fw"></i>Add new patient</a>
                                </li>
                                <li>
                                    <a href="search.php"><i class="fa  fa-search fa-fw"></i>Search Patient</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="search.php"><i class="fa fa-money fa-fw"></i> Doctor's Recommendations</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
  <?php 
                                    
                                    
                                   
                                    while($row=mysqli_fetch_assoc($query)){
                                        $first_name = $row['first_name'];
                                        $middle_name = $row['middle_name'];
                                        $last_name = $row['last_name'];
                                        $gender = $row['gender'];
                                        $email = $row['email'];
                                        $license = $row['license_number'];
                                    ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-4 d-flex justify-content-center text-center">
                    <h1 class="page-header">User Profile</h1>
                </div>
            </div>
                <!-- /.col-lg-12 -->
            </div>
                 <div class="row">
                    <div class="col-lg-3">
                    <div >
                        <div >
                            
                        </div>
                        <div >
                            </div>
                        <div >
                            
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                                <div class="panel-heading">
                                    <div class="row">
                                    <div class="col-xs-12 text-center">
                                    <img src="img/avatar.jpg" class="rounded-circle" alt="Girl in a jacket" width="100" height="100" >
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <!--name -->
                              <div >
                                <div class="col-4 d-flex justify-content-center text-center">
                                    <span > <h3><?php echo $first_name," ", $middle_name, " ", $last_name; ?></h3></span>
                                </div>
                            </div>

                                <div class="col-4 d-flex justify-content-center text-center">
                                    <span ><h5><?php echo $user_type; ?></h5> </span>
                                </div>

                                <p></p>
                                
                                <p></p>
                            
                            <div class="col-4 d-flex justify-content-center text-center">
                                    <span >Gender: <?php echo $gender; ?></span>
                                </div>
                                <p></p>
                                <div class="col-4 d-flex justify-content-center text-center">
                                    <span >License Number :  <?php echo $license; ?></span>
                                </div>
                                <p></p>

                                <div class="col-4 d-flex justify-content-center text-center">
                                    <span ><h5> Email: <?php echo $email; ?></h5> </span>
                                </div>
                        <div class="panel-footer">
                                <div class="col-4 d-flex justify-content-center text-center">
                                    <input type='submit' name='profile' value='Edit Name' class="bg-primary" data-toggle="modal" data-target="#name">
                                </div>
                                <p></p>
                          
                                <div class="col-4 d-flex justify-content-center text-center">
                                    <input type='submit' name='profile' value='Edit Profile Picture' data-toggle="modal" data-target="#profile">
                                </div>
                                <p></p>
                        <div class="col-4 d-flex justify-content-center text-center">
                                    <button type='button' name='profile' value='' class="bg-danger" data-toggle="modal" data-target="#password">Change Your Password</button>
                                </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
                 <?php
                           
                            }
                            
                            ?>
                <div class="col-lg-3">
                    <div >
                        <div>
                        </div>
                        <div>
                       </div>
                        
                        <div >
                            
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- The Modal For Profile Picture -->
  <div class="modal" id="profile">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Change your profile picture</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="post">
        <div class="modal-body">
          <input type="file" name="profile">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" name="profile_change" class="btn btn-primary" >submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>

      <!-- The Modal For Name -->
   <div class="modal" id="name"> 
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Change your Name</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="post">
        <div class="modal-body">
          <input type="text" name="first_name" placeholder="Enter your First Name">
          <input type="text" name="middle_name" placeholder="Enter your Middle Name">
          <input type="text" name="last_name" placeholder="Enter your Last Name">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" name="name_change" class="btn btn-primary" >submit</button>
        </div>
         </form>
      </div>
    </div>
  </div>

      <!-- The Modal For Password -->
   <div class="modal" id="password">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Change your password</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="post">
        <div class="modal-body">
          <input type="text" placeholder="Enter Previous Password">
          <input type="text" placeholder="Enter New Password">
         
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" name="password_change" class="btn btn-primary" data-dismiss="modal">submit</button>
        </div>
        </form>
      </div>
    </div>
  </div>

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
