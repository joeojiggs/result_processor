<?php
include('php-includes/connect.php');
include('php-includes/check-login-admin.php');



?>

<?php
 if (isset($_POST['reg_submit'])){
     
    $first_name = mysqli_real_escape_string($con,$_POST['first_name']);
    $middle_name = mysqli_real_escape_string($con,$_POST['middle_name']) ;
    $last_name =mysqli_real_escape_string($con,$_POST['last_name']);
    $reg_number = mysqli_real_escape_string($con,$_POST['reg_number']);
    $class =mysqli_real_escape_string($con,$_POST['class']) ;
    $gender = mysqli_real_escape_string($con,$_POST['gender']);

    $thisquery = mysqli_query($con, "select * from students where Reg_Num = '$reg_number'");
    if(mysqli_num_rows($thisquery)>0){
        echo "<script> alert('Failed! REGISTRATION NUMBER ALREADY EXIST.')</script>";
    }else{
            
        
        $query = mysqli_query($con, "insert into students (First_Name, Last_Name, Mid_Name, Reg_Num, Class, Gender ) values ('$first_name','$last_name','$middle_name', '$reg_number', '$class', '$gender')");
    
        $query2 = mysqli_query($con, "insert into ".$class."_subject1 (reg_no) values ('$reg_number')");

        $query3 = mysqli_query($con, "insert into ".$class."_subject2 (reg_no) values ('$reg_number')");

        $query4 = mysqli_query($con, "insert into ".$class."_subject3 (reg_no) values ('$reg_number')");

        $query5 = mysqli_query($con, "insert into ".$class."_subject4 (reg_no) values ('$reg_number')");

        $query6 = mysqli_query($con, "insert into ".$class."_subject5 (reg_no) values ('$reg_number')");

        $query7 = mysqli_query($con, "insert into ".$class."_subject6 (reg_no) values ('$reg_number')");

        $query8 = mysqli_query($con, "insert into ".$class."_subject7 (reg_no) values ('$reg_number')");

        $query9 = mysqli_query($con, "insert into ".$class."_subject8 (reg_no) values ('$reg_number')");

        $query10 = mysqli_query($con, "insert into ".$class."_subject9 (reg_no) values ('$reg_number')");

        $query11 = mysqli_query($con, "insert into ".$class."_subject10 (reg_no) values ('$reg_number')");

        $query12 = mysqli_query($con, "insert into ".$class."_subject11 (reg_no) values ('$reg_number')");

        $query13 = mysqli_query($con, "insert into ".$class."_subject12 (reg_no) values ('$reg_number')");

        $query14 = mysqli_query($con, "insert into ".$class."_subject13 (reg_no) values ('$reg_number')");

        $query15 = mysqli_query($con, "insert into ".$class."_subject14 (reg_no) values ('$reg_number')");

        $query16 = mysqli_query($con, "insert into ".$class."_subject15 (reg_no) values ('$reg_number')");
        
        if (empty($query)){
            echo "<script> alert('Failed to add student')</script>";
        }else{
            echo "<script> alert('Student successfully Registered.')</script>";
        }
    }
   
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

    <title>SRPS</title>
    <!--STYLESHEET-->
    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="asset2/css/bootstrap.min.css" rel="stylesheet">
    <!--Jasmine Stylesheet [ REQUIRED ]-->
    <link href="asset2/css/style.css" rel="stylesheet">
        
        
        
        
        


   
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
      
        
      <?php
        include('php-includes/menu.php');

        

      ?>

        
        <div id="page-wrapper" >
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>New Comments!</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>New Tasks!</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- /.row -->
           
                            

                           
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
