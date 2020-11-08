<?php
include('php-includes/connect.php');
include('php-includes/check-login-admin.php');

$sub_id= ($_POST['sub_id']);
$class_name = ($_POST['class_name']);

if (isset($_POST['grade'])){
     
    
    $sub_id = mysqli_real_escape_string($con,$_POST['sub_id']);
    $class_name = mysqli_real_escape_string($con,$_POST['class_name']);
    
    
    // output data of each row
    $i=1;
    $last_total = "";
    $last_i;
    $sql ="select * from ".$class_name."_".$sub_id." order by length(Total), Total DESC";
    $query= mysqli_query($con,$sql);
        if (mysqli_num_rows($query) > 0) {

            while($row = mysqli_fetch_array($query)) {
                $reg_no = $row['reg_no'];

                $query2 = mysqli_query($con,"select * from ".$class_name."_".$sub_id." where reg_no = '$reg_no' "); 
                $row2 = mysqli_fetch_array($query2);  
                $total = $row2['Total'];
                

                if ($total >= 70){
                    $grade = 'A';
                }elseif ($total < 70 && $total >= 60 ){
                    $grade = 'B';
                }elseif ($total < 60 && $total >= 50){
                    $grade = 'C';
                }elseif ($total < 50 && $total >= 45){
                    $grade = 'D';
                }elseif ($total < 45 && $total >= 40){
                    $grade = 'E';
                }elseif($total < 40){
                    $grade = 'F';
                }

                if ($total != $last_total){

                    if(){

                        $position = $i."ST" ;

                        $sql3 = "update ".$class_name."_".$sub_id." set `grade` = '$grade', `position` = '$position' where reg_no = '$reg_no'";

                    }elseif($i == 2 || $i == 22 || $i == 32 || $i == 42 || $i == 52 || $i == 62 || $i == 72 || $i == 82 || $i == 92 || $i == 102 
                    || $i == 122 || $i == 132 || $i == 142 || $i == 152 || $i == 162 || $i == 172 || $i == 182 || $i == 192 || $i == 202 
                    || $i == 222 || $i == 232 || $i == 242 || $i == 252 || $i == 262 || $i == 272 || $i == 282 || $i == 292 || $i == 302){

                        $position = $i."ND" ;

                        $sql3 = "update ".$class_name."_".$sub_id." set `grade` = '$grade', `position` = '$position' where reg_no = '$reg_no'";
                    }elseif($i == 3 || $i == 23 || $i == 33 || $i == 43 || $i == 53 || $i == 63 || $i == 73 || $i == 83 || $i == 93 || $i == 103 
                    || $i == 123 || $i == 133 || $i == 143 || $i == 153 || $i == 163 || $i == 173 || $i == 183 || $i == 193 || $i == 203 
                    || $i == 223 || $i == 233 || $i == 243 || $i == 253 || $i == 263 || $i == 273 || $i == 283 || $i == 293 || $i == 303){
                        
                        $position = $i."RD" ;

                        $sql3 = "update ".$class_name."_".$sub_id." set `grade` = '$grade', `position` = '$position' where reg_no = '$reg_no'";
                    }else{
                        
                        $position = $i."TH" ;

                        $sql3 = "update ".$class_name."_".$sub_id." set `grade` = '$grade', `position` = '$position' where reg_no = '$reg_no'";
                    }
                    $last_i = $i;
                }else{
                    if($last_i == 1 || $last_i == 21 || $last_i == 31 || $last_i == 41 || $last_i == 51 || $last_i == 61 || $last_i == 71 || $last_i == 81 || $last_i == 91 || $last_i == 101 
                    || $last_i == 121 || $last_i == 131 || $last_i == 141 || $last_i == 151 || $last_i == 161 || $last_i == 171 || $last_i == 181 || $last_i == 191 || $last_i == 201 
                    || $last_i == 221 || $last_i == 231 || $last_i == 241 || $last_i == 251 || $last_i == 261 || $last_i == 271 || $last_i == 281 || $last_i == 291 || $last_i == 301){

                        $position = $last_i."ST" ;

                        $sql3 = "update ".$class_name."_".$sub_id." set `grade` = '$grade', `position` = '$position' where reg_no = '$reg_no'";

                    }elseif($last_i == 2 || $last_i == 22 || $last_i == 32 || $last_i == 42 || $last_i == 52 || $last_i == 62 || $last_i == 72 || $last_i == 82 || $last_i == 92 || $last_i == 102 
                    || $last_i == 122 || $last_i == 132 || $last_i == 142 || $last_i == 152 || $last_i == 162 || $last_i == 172 || $last_i == 182 || $last_i == 192 || $last_i == 202 
                    || $last_i == 222 || $last_i == 232 || $last_i == 242 || $last_i == 252 || $last_i == 262 || $last_i == 272 || $last_i == 282 || $last_i == 292 || $last_i == 302){

                        $position = $last_i."ND" ;

                        $sql3 = "update ".$class_name."_".$sub_id." set `grade` = '$grade', `position` = '$position' where reg_no = '$reg_no'";
                    }elseif($last_i == 3 || $last_i == 23 || $last_i == 33 || $last_i == 43 || $last_i == 53 || $last_i == 63 || $last_i == 73 || $last_i == 83 || $last_i == 93 || $last_i == 103 
                    || $last_i == 123 || $last_i == 133 || $last_i == 143 || $last_i == 153 || $last_i == 163 || $last_i == 173 || $last_i == 183 || $last_i == 193 || $last_i == 203 
                    || $last_i == 223 || $last_i == 233 || $last_i == 243 || $last_i == 253 || $last_i == 263 || $last_i == 273 || $last_i == 283 || $last_i == 293 || $last_i == 303){
                        
                        $position = $last_i."RD" ;

                        $sql3 = "update ".$class_name."_".$sub_id." set `grade` = '$grade', `position` = '$position' where reg_no = '$reg_no'";
                    }else{
                        
                        $position = $last_i."TH" ;

                        $sql3 = "update ".$class_name."_".$sub_id." set `grade` = '$grade', `position` = '$position' where reg_no = '$reg_no'";
                    }
                }

                

                $query3 = mysqli_query($con, $sql3);

                $last_total = $total;


                $i++;      
            }
        }

   

    if (empty($query3)){
        echo '<script>alert("Failed") </script>';
    }else{
        echo '<script>alert("Result successfully graded");</script>';
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
                <a type="button" href="<?php echo $class_name?>.php" class="btn btn-danger"><--back</a>
                    <h1 class="page-header">
                    <?php 
                    $thissql = "select * from ".$class_name."_subject_list where subject_id = '$sub_id'";
                    $thisquery = mysqli_query($con, $thissql); 
                    $thisrow = mysqli_fetch_array($thisquery);
                    echo $thisrow['subject_name']; 
                    ?> Result Spread Sheet for <?php echo $class_name?>
                     
                    </h1>
                    
<form action="edit.php" method="POST">

<input name="sub_id" value="<?php echo $sub_id ?>" type="hidden" >
<input name="class_name" value="<?php echo $class_name ?>" type="hidden" >
<input type="submit" class="btn btn-primary me" value="Edit Spread Sheet" name="edit" />
  

</form>




<br>
<br>
<hr>

    <table class="table table-bordered">
      <thead>
        <tr>
        <th>s/n</th>
          <th>Reg Number</th>
          <th>Full Name</th>
          <th>First test</th>
          <th>Second test</th>
          <th>Exam</th>
          <th>Total</th>
          <th>Grade</th>
          <th>Position</th>
          </tr>
          
        
       
      
      </thead>

      <tbody>
     
      <?php
      
          // output data of each row
          $i=1;
           $sql ="select * from ".$class_name."_".$sub_id;
          $query= mysqli_query($con,$sql);
          if (mysqli_num_rows($query) > 0) {

          while($row = mysqli_fetch_array($query)) {
            ?> 
               <tr>
               <?php 
               $query2 = mysqli_query($con,"select * from students where Reg_Num =".$row['reg_no']); 
               $row2 = mysqli_fetch_array($query2);  
               $name = $row2['First_Name'].' '.$row2['Mid_Name'].' '.$row2['Last_Name']; ?>
               <td><?php echo $i ?></td>
               <td><?php echo $row['reg_no'] ?></td>
               <td><?php echo $name ?></td>
               <td><?php echo $row['first test'] ?></td>
         
               
               <td>
               <?php echo $row['second test'] ?>
               </td>
               <td>
               <?php echo $row['exam'] ?>
               </td>
               <td>
               <?php echo $row['Total'] ?>
               </td>
               <td>
               <?php echo $row['grade'] ?>
               </td>
               <td>
               <?php echo $row['position']?>
               </td>
               
               </tr>
            
          <?php
          $i++;      
          }
          } else {
            ?>
            <tr>
            <td colspan = "9" align="center">
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
        Grade Subject
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
                Are you sure you want to grade this subject?
                <br>
                <br>

                <form method="POST">

                    <input name="sub_id" value="<?php echo $sub_id ?>" type="hidden" >
                    <input name="class_name" value="<?php echo $class_name ?>" type="hidden" >
                    <input type="submit" class="btn btn-success" value="Grade Now" name="grade" />


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
