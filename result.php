<?php
include('php-includes/connect.php');
include('php-includes/check-login-admin.php');

$class_name = ($_POST['class']);
$reg_no = ($_POST['reg_no']);


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

     
        
        <div id="page-wrapper" >
            <div class="row">
                <div class="col-lg-12">
                <a type="button" href="students.php" class="btn btn-danger"><--back</a>
                    <h1 class="page-header" align = "center">THE NAME OF THE SCHOOL</h1>
                    <div style = "text-align:center;">
                    <img src="images/logo.png" width ="10%">
                    </div>
                    <p align = "center"><i>this is the school motto</i></p>
                    <p align = "center">School Address</p>
                    <p align = "center">school website if any</p>

                    <h3 align = "center">TERMINAL REPORT CARD</h3>
                    <hr>

                    <table>
                    <tr>
                    <td>
                        <p>
                            Students' Name: 
                        </p>
                    </td>
                        
                    <td>
                        <p>
                            Position: 
                        </p>
                    </td>
                    </tr>

                    <tr>
                    <td>
                        <p>
                            Class: 
                        </p>
                    </td>
                        
                    <td>
                        <p>
                            N0 of Students: 
                        </p>
                    </td>
                    </tr>

                    <tr>
                    <td>
                        <p>
                            REG Number: 
                        </p>
                    </td>
                        
                    <td>
                        <p>
                            Student Average: 
                        </p>
                    </td>
                    </tr>

                    <tr>
                    <td>
                        <p>
                            Cender: 
                        </p>
                    </td>
                        
                    <td>
                        <p>
                            N0 of Subjects: 
                        </p>
                    </td>
                    </tr>
                    </table>
                    

    <table class="table table-bordered">
      <thead>
        <tr>
        <th>s/n</th>
          <th>Subjects</th>
          <th>Full Name</th>
          <th>  
            <?php 
                $thissql1 = "select * from ".$class_name."_subject_list where subject_id = 'subject1' ";
                $thisquery1 = mysqli_query($con, $thissql1); 
                $thisrow1 = mysqli_fetch_array($thisquery1);
                if (isset($thisrow1['subject_name'])){
                    echo $thisrow1['subject_name'];
                }
            ?> 
          </th>
          <th>
            <?php 
                $thissql2 = "select * from ".$class_name."_subject_list where subject_id = 'subject2' ";
                $thisquery2 = mysqli_query($con, $thissql2); 
                $thisrow2 = mysqli_fetch_array($thisquery2);
                if (isset($thisrow2['subject_name'])){
                    echo $thisrow2['subject_name'];
                }
            ?>
          </th>
          <th>
          <?php 
                $thissql3 = "select * from ".$class_name."_subject_list where subject_id = 'subject3' ";
                $thisquery3 = mysqli_query($con, $thissql3); 
                $thisrow3 = mysqli_fetch_array($thisquery3);
                if (isset($thisrow3['subject_name'])){
                    echo $thisrow3['subject_name'];
                } 
            ?>
          </th>
          <th>
          <?php 
                $thissql4 = "select * from ".$class_name."_subject_list where subject_id = 'subject4' ";
                $thisquery4 = mysqli_query($con, $thissql4); 
                $thisrow4 = mysqli_fetch_array($thisquery4);
                if (isset($thisrow4['subject_name'])){
                    echo $thisrow4['subject_name'];
                }
            ?>
          </th>
          <th>
            <?php 
                $thissql5 = "select * from ".$class_name."_subject_list where subject_id = 'subject5' ";
                $thisquery5 = mysqli_query($con, $thissql5); 
                $thisrow5 = mysqli_fetch_array($thisquery5);
                if (isset($thisrow5['subject_name'])){
                    echo $thisrow5['subject_name']; 
                }
            ?>
          </th>
          <th>
            <?php 
                $thissql6 = "select * from ".$class_name."_subject_list where subject_id = 'subject6' ";
                $thisquery6 = mysqli_query($con, $thissql6); 
                $thisrow6 = mysqli_fetch_array($thisquery6);
                if (isset($thisrow6['subject_name'])){
                    echo $thisrow6['subject_name'];
                }
            ?>
          </th>
          <th>
            <?php 
                $thissql7 = "select * from ".$class_name."_subject_list where subject_id = 'subject7' ";
                $thisquery7 = mysqli_query($con, $thissql7); 
                $thisrow7 = mysqli_fetch_array($thisquery7);
                if (isset($thisrow7['subject_name'])){
                    echo $thisrow7['subject_name'];
                }
            ?>
          </th>
          <th>
            <?php 
                $thissql8 = "select * from ".$class_name."_subject_list where subject_id = 'subject8' ";
                $thisquery8 = mysqli_query($con, $thissql8); 
                $thisrow8 = mysqli_fetch_array($thisquery8);
                if (isset($thisrow8['subject_name'])){
                    echo $thisrow8['subject_name'];
                }
            ?>
          </th>
          <th>
            <?php 
                $thissql9 = "select * from ".$class_name."_subject_list where subject_id = 'subject9' ";
                $thisquery9 = mysqli_query($con, $thissql9); 
                $thisrow9 = mysqli_fetch_array($thisquery9);
                if (isset($thisrow9['subject_name'])){
                    echo $thisrow9['subject_name'];
                } 
            ?>
          </th>
          <th>
            <?php 
                $thissql10 = "select * from ".$class_name."_subject_list where subject_id = 'subject10' ";
                $thisquery10 = mysqli_query($con, $thissql10); 
                $thisrow10 = mysqli_fetch_array($thisquery10);
                if (isset($thisrow10['subject_name'])){
                    echo $thisrow10['subject_name'];
                }
            ?>
          </th>
          <th>
            <?php 
                $thissql11 = "select * from ".$class_name."_subject_list where subject_id = 'subject11' ";
                $thisquery11 = mysqli_query($con, $thissql11); 
                $thisrow11 = mysqli_fetch_array($thisquery11);
                if (isset($thisrow11['subject_name'])){
                    echo $thisrow11['subject_name'];
                } 
            ?>
          </th>
          <th>
            <?php 
                $thissql12 = "select * from ".$class_name."_subject_list where subject_id = 'subject12' ";
                $thisquery12 = mysqli_query($con, $thissql12); 
                $thisrow12 = mysqli_fetch_array($thisquery12);
                if (isset($thisrow12['subject_name'])){
                    echo $thisrow12['subject_name'];
                }
            ?>
          </th>
          <th>
            <?php 
                $thissql13 = "select * from ".$class_name."_subject_list where subject_id = 'subject13' ";
                $thisquery13 = mysqli_query($con, $thissql13); 
                $thisrow13 = mysqli_fetch_array($thisquery13);
                if (isset($thisrow13['subject_name'])){
                    echo $thisrow13['subject_name'];
                }
            ?>
          </th>
          <th>
            <?php 
                $thissql14 = "select * from ".$class_name."_subject_list where subject_id = 'subject14' ";
                $thisquery14 = mysqli_query($con, $thissql14); 
                $thisrow14 = mysqli_fetch_array($thisquery14);
                if (isset($thisrow14['subject_name'])){
                    echo $thisrow14['subject_name'];
                }

            ?>
          </th>
          <th>
            <?php 
                $thissql15 = "select * from ".$class_name."_subject_list where subject_id = 'subject15' ";
                $thisquery15 = mysqli_query($con, $thissql15); 
                $thisrow15 = mysqli_fetch_array($thisquery15);
                if (isset($thisrow15['subject_name'])){
                    echo $thisrow15['subject_name'];
                }
            ?>
          </th>
          <th>Total</th>
          <th>AVG.</th>
          <th>Grade</th>
          <th>Postion</th>
          </tr>
          
        
       
      
      </thead>

      <tbody>
     
      <?php
      
          // output data of each row
          $i=1;
           $sql = "select * from students where Class='$class_name'";
          $query= mysqli_query($con,$sql);
          if (mysqli_num_rows($query) > 0) {

          while($row = mysqli_fetch_array($query)) {
            ?> 
               <tr>
               <?php 
                
               $name = $row['First_Name'].' '.$row['Mid_Name'].' '.$row['Last_Name']; ?>
               <td><?php echo $i ?></td>
               <td><?php echo $row['Reg_Num']; ?></td>
               <td><?php echo $name ?></td>
               <td>
               <?php
                    $Reg_Num = $row['Reg_Num'];
                    $osql ="select * from ".$class_name."_subject1 where reg_no = '$Reg_Num'" ;
                    $oquery= mysqli_query($con,$osql);
                    if (mysqli_num_rows($oquery) > 0) {

                        $orow = mysqli_fetch_array($oquery);
                        echo $orow['Total'] ;
                        
                    }
                ?>    
               </td>
         
               
               <td>
                <?php
                    $osql ="select * from ".$class_name."_subject2 where reg_no = '$Reg_Num'" ;
                    $oquery= mysqli_query($con,$osql);
                    if (mysqli_num_rows($oquery) > 0) {

                        $orow = mysqli_fetch_array($oquery);
                        echo $orow['Total'] ;
                        
                    }
                ?>
               </td>
               <td>
               <?php
                    $osql ="select * from ".$class_name."_subject3 where reg_no = '$Reg_Num'" ;
                    $oquery= mysqli_query($con,$osql);
                    if (mysqli_num_rows($oquery) > 0) {

                        $orow = mysqli_fetch_array($oquery);
                        echo $orow['Total'] ;
                        
                    }
                ?>
               </td>
               <td>
               <?php
                    $osql ="select * from ".$class_name."_subject4 where reg_no = '$Reg_Num'" ;
                    $oquery= mysqli_query($con,$osql);
                    if (mysqli_num_rows($oquery) > 0) {

                        $orow = mysqli_fetch_array($oquery);
                        echo $orow['Total'] ;
                        
                    }
                ?>
               </td>
               <td>
               <?php
                    $osql ="select * from ".$class_name."_subject5 where reg_no = '$Reg_Num'" ;
                    $oquery= mysqli_query($con,$osql);
                    if (mysqli_num_rows($oquery) > 0) {

                        $orow = mysqli_fetch_array($oquery);
                        echo $orow['Total'] ;
                        
                    }
                ?>

               </td>
               <td>
               <?php
                    $osql ="select * from ".$class_name."_subject6 where reg_no = '$Reg_Num'" ;
                    $oquery= mysqli_query($con,$osql);
                    if (mysqli_num_rows($oquery) > 0) {

                        $orow = mysqli_fetch_array($oquery);
                        echo $orow['Total'] ;
                        
                    }
                ?>
               </td>
               <td>
               <?php
                    $osql ="select * from ".$class_name."_subject7 where reg_no = '$Reg_Num'" ;
                    $oquery= mysqli_query($con,$osql);
                    if (mysqli_num_rows($oquery) > 0) {

                        $orow = mysqli_fetch_array($oquery);
                        echo $orow['Total'] ;
                        
                    }
                ?>
               </td>

               <td>
               <?php
                    $osql ="select * from ".$class_name."_subject8 where reg_no = '$Reg_Num'" ;
                    $oquery= mysqli_query($con,$osql);
                    if (mysqli_num_rows($oquery) > 0) {

                        $orow = mysqli_fetch_array($oquery);
                        echo $orow['Total'] ;
                        
                    }
                ?>
               </td>
               <td>
               
               <?php
                    $osql ="select * from ".$class_name."_subject9 where reg_no = '$Reg_Num'" ;
                    $oquery= mysqli_query($con,$osql);
                    if (mysqli_num_rows($oquery) > 0) {

                        $orow = mysqli_fetch_array($oquery);
                        echo $orow['Total'] ;
                        
                    }
                ?>
               </td>
               <td>
               <?php
                    $osql ="select * from ".$class_name."_subject10 where reg_no = '$Reg_Num'" ;
                    $oquery= mysqli_query($con,$osql);
                    if (mysqli_num_rows($oquery) > 0) {

                        $orow = mysqli_fetch_array($oquery);
                        echo $orow['Total'] ;
                        
                    }
                ?>
                </td>
               <td>
                    
               <?php
                    $osql ="select * from ".$class_name."_subject11 where reg_no = '$Reg_Num'" ;
                    $oquery= mysqli_query($con,$osql);
                    if (mysqli_num_rows($oquery) > 0) {

                        $orow = mysqli_fetch_array($oquery);
                        echo $orow['Total'] ;
                        
                    }
                ?>
               </td>
               <td>
               <?php
                    $osql ="select * from ".$class_name."_subject12 where reg_no = '$Reg_Num'" ;
                    $oquery= mysqli_query($con,$osql);
                    if (mysqli_num_rows($oquery) > 0) {

                        $orow = mysqli_fetch_array($oquery);
                        echo $orow['Total'] ;
                        
                    }
                ?>
               </td>
               <td>
               <?php
                    $osql ="select * from ".$class_name."_subject13 where reg_no = '$Reg_Num'" ;
                    $oquery= mysqli_query($con,$osql);
                    if (mysqli_num_rows($oquery) > 0) {

                        $orow = mysqli_fetch_array($oquery);
                        echo $orow['Total'] ;
                        
                    }
                ?>
               </td>

               <td>
               <?php
                    $osql ="select * from ".$class_name."_subject14 where reg_no = '$Reg_Num'" ;
                    $oquery= mysqli_query($con,$osql);
                    if (mysqli_num_rows($oquery) > 0) {

                        $orow = mysqli_fetch_array($oquery);
                        echo $orow['Total'] ;
                        
                    }
                ?>
               </td>
               <td>
               <?php
                    $osql ="select * from ".$class_name."_subject15 where reg_no = '$Reg_Num'" ;
                    $oquery= mysqli_query($con,$osql);
                    if (mysqli_num_rows($oquery) > 0) {

                        $orow = mysqli_fetch_array($oquery);
                        echo $orow['Total'] ;
                        
                    }
                ?>
               </td>
               <td>
               <?php echo $row['total']; ?>
               </td>
               <td>
               <?php echo $row['avg']; ?>
               </td>
               <td>
               <?php echo $row['grade']; ?>
               </td>
               <td>
               <?php echo $row['position']; ?>
               </td>
               
               
               
               </tr>
            
          <?php
          $i++;      
          }
          } else {
            ?>
            <tr>
            <td colspan = "20" align="center">
          <h2> 
              No Student in Class
          </h2>
        </td>
        </tr>
          <?php }?>
        </tbody>
        </table>

        <br>
        <br>
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-success me" data-toggle="modal" data-target="#myModal">
        RENDER RESULT
        </button>

        <!-- The Modal -->
        <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title text-danger">WARNING</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                Are you sure you want to total the class score, average, grade and assign class position?
                <br>
                <br>

                <form method="POST">

                    <input name="class_name" value="<?php echo $class_name ?>" type="hidden" >
                    <input type="submit" class="btn btn-success" value="Total Now" name="process" />


                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

            </div>
        </div>
        </div>
        <?php
          
          
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
