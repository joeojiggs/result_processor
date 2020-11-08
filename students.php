<?php
include('php-includes/connect.php');
include('php-includes/check-login-admin.php');

if(isset($_POST['delete'])){
    $id = mysqli_real_escape_string($con,$_POST['id']);

    $query=mysqli_query($con,"delete from students where id = '$id'");
          
    if (empty($query)){
        echo '<script>alert("Failed") </script>';
    }else{
        echo '<script>alert("Deleted Successfully") </script>';
        echo $id;
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

    <style>
        .me {
            display: inline-block;
        }
    </style>
    
       
</head>

<body>

    <div id="wrapper">

     

        <?php
                include('php-includes/menu.php');


        ?>
        
        <div id="page-wrapper" >
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Student's List</h1>
                    
                    <?php $class="kg1"; include("class_tbl.php"); ?>   
                    <?php $class="kg2"; include("class_tbl.php"); ?>
                    <?php $class="kg3"; include("class_tbl.php"); ?> 
                    <?php $class="basic1"; include("class_tbl.php"); ?> 
                    <?php $class="basic2"; include("class_tbl.php"); ?> 
                    <?php $class="basic3"; include("class_tbl.php"); ?> 
                    <?php $class="basic4"; include("class_tbl.php"); ?> 
                    <?php $class="basic5"; include("class_tbl.php"); ?> 
                    <?php $class="jss1"; include("class_tbl.php"); ?> 
                    <?php $class="jss2"; include("class_tbl.php"); ?> 
                    <?php $class="jss3"; include("class_tbl.php"); ?>            
                    <?php $class="sss1"; include("class_tbl.php"); ?> 
                    <?php $class="sss2"; include("class_tbl.php"); ?> 
                    <?php $class="sss3"; include("class_tbl.php"); ?> 

                 
                    <a type="button" href="dashboard.php" class="btn btn-danger"><--back</a>
          
                    <?php mysqli_close($con); ?>          
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


