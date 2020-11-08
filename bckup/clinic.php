<?php

include('php-includes/check-login-admin.php');


include('php-includes/connect.php');

$failed = 0;

$clinic = ($_POST['license_number']);

$license_number =( $_POST['license_number']);

if(isset($_POST['drop'])){
    $license_number = $_POST['license_number'];
 
    mysqli_query($con,"UPDATE users SET hosp_1='' WHERE `license_number` ='$license_number'");
    echo '<script>alert("Successfully dropped from clinic.");</script>';

}

if(isset($_POST['drop2'])){
    $license_number = $_POST['license_number'];

    mysqli_query($con,"UPDATE users SET hosp_2='' WHERE `license_number` ='$license_number'");
    echo '<script>alert("Successfully dropped from clinic.");</script>';
}

if(isset($_POST['drop3'])){
    $license_number = $_POST['license_number'];

    mysqli_query($con,"UPDATE users SET hosp_3='' WHERE `license_number` ='$license_number'");
    echo '<script>alert("Successfully dropped from clinic.");</script>';
}


if(isset($_POST['drop4'])){
    $license_number = $_POST['license_number'];

    mysqli_query($con,"UPDATE users SET hosp_4='' WHERE `license_number` ='$license_number'");
    echo '<script>alert("Successfully dropped from clinic.");</script>';
}

if(isset($_POST['drop5'])){
    $license_number = $_POST['license_number'];

    mysqli_query($con,"UPDATE users SET hosp_5='' WHERE `license_number` ='$license_number'");
    echo '<script>alert("Successfully dropped from clinic.");</script>';
}



if(isset($_POST['Enter'])){
    $clinics = $_POST['clinics'];
    $license_number = $_POST['license_number'];

    mysqli_query($con,"UPDATE users SET hosp_1='$clinics' WHERE `license_number` ='$license_number'");
    echo '<script>alert("Successfully transfered.");</script>';
}

if(isset($_POST['Enter2'])){
    $clinics = $_POST['clinics'];
    $license_number = $_POST['license_number'];

    mysqli_query($con,"UPDATE users SET hosp_2='$clinics' WHERE `license_number` ='$license_number'");
    echo '<script>alert("Successfully transfered.");</script>';
}

if(isset($_POST['Enter3'])){
    $clinics = $_POST['clinics'];
    $license_number = $_POST['license_number'];

    mysqli_query($con,"UPDATE users SET hosp_3='$clinics' WHERE `license_number` ='$license_number'");
    echo '<script>alert("Successfully transfered.");</script>';
}

if(isset($_POST['Enter4'])){
    $clinics = $_POST['clinics'];
    $license_number = $_POST['license_number'];

    mysqli_query($con,"UPDATE users SET hosp_4='$clinics' WHERE `license_number` ='$license_number'");
    echo '<script>alert("Successfully transfered.");</script>';
}

if(isset($_POST['Enter5'])){
    $clinics = $_POST['clinics'];
    $license_number = $_POST['license_number'];

    mysqli_query($con,"UPDATE users SET hosp_5='$clinics' WHERE `license_number` ='$license_number'");
    echo '<script>alert("Successfully transfered.");</script>';
}



if(isset($_POST['submit'])){
    $hospital = mysqli_real_escape_string($con,$_POST['hospitals']);
    $license_number = $_POST['license_number'];

    
    $query2 = mysqli_query($con,"select * from users where `license_number` = '$license_number'");
    $row = mysqli_fetch_assoc($query2);
    $hosp_1 = $row['hosp_1'];
    $hosp_2 = $row['hosp_2'];
    $hosp_3 = $row['hosp_3'];
    $hosp_4 = $row['hosp_4'];
    $hosp_5 = $row['hosp_5'];
   
    if ($hosp_1 == ""){
        mysqli_query($con,"UPDATE users SET hosp_1='$hospital' WHERE `license_number` ='$license_number'");
        echo '<script>alert("Successfully added to Clinic.");</script>';

    }elseif($hosp_2 == ""){
        mysqli_query($con,"UPDATE users SET hosp_2='$hospital' WHERE license_number ='$license_number'");
        echo '<script>alert("Successfully added to Clinic.");</script>';

    }elseif($hosp_3 == ""){
        mysqli_query($con,"UPDATE users SET hosp_3='$hospital' WHERE license_number ='$license_number'");
        echo '<script>alert("Successfully added to Clinic.");</script>';

    }elseif($hosp_4 == ""){
        mysqli_query($con,"UPDATE users SET hosp_4='$hospital' WHERE license_number ='$license_number'");
        echo '<script>alert("Successfully added to Clinic.");</script>';

    }elseif($hosp_5 == ""){
        mysqli_query($con,"UPDATE users SET hosp_5='$hospital' WHERE license_number ='$license_number'");
        echo '<script>alert("Successfully added to Clinic.");</script>';

    }else{
        $failed = 1;
    }   

}


$query = mysqli_query($con,"select * from users where `license_number` = '$license_number'");
 
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
    <script src="ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
                                            $user_type = $row['user_type'];
                                            $gender = $row['gender'];
                                            $license_number = $row['license_number'];
                                            
                                        ?>
                            <div class='form'>
                            <p>Name:  <?php echo $first_name," ", $middle_name, " ", $last_name; ?></p>
                            <p>License Number: <?php echo $license_number; ?></p>
                            <p>Profession:  <?php echo $user_type; ?></p>
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
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Clinic Placement</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row --> 
            <?php 
                if ($failed == 1){
            ?>
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Failed to add to Clinic!</strong> Practitioner has reached her maximum clinic limit. Please contact <a href="www.ojtechnologiesltd.com" class="alert-link">OJ Technologies LTD</a> to rectify.
            </div> 
            <?php    
            }
            ?>         
            <!-- /.row -->
            
            
            <div class="row">
              <!--Display the different hospital and their names -->
            <?php
            $query = mysqli_query($con, "select * from users where license_number = '$license_number'");
            $row = mysqli_fetch_assoc($query);
            if($row['hosp_1'] != ""){
            ?>
                <div class="col-lg-3">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <?php echo $row['hosp_1']; ?>
                        </div>
                        <div class="panel-body">
                        <?php
                            $hospital_name = $row['hosp_1'];
                            include('hosp.php');

                        ?>    
                            <p>
                                <?php
                                    echo $full_name;
                                ?>
                            </p>
                        </div>
                        <div class="panel-footer">
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#mytransferModal1">
                            Transfer
                            </button>

                            <!-- The Modal -->
                            <div class="modal" id="mytransferModal1">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">Transfer Practioner to Another Clinic</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                       <div class="form-group">
                                      <form method="post">
                                        <select name="clinics" class="form-control">
                                            <option value="AFH">48th Armed Forces Hospital, Lagos.</option>
                                            <option value="AFH2">68th Armed Forces Hospital, Lagos</option>
                                            <option value="ASUTH">Abia State University Teaching Hospital, Aba</option>
                                            <option value="ATBUTHB">Abubakar Tafawa Balewa University Teaching Hospital, Bauchi</option>
                                            <option value="ACA">Abuja Clinics, Abuja</option>
                                            <option value="ABUTH">Ahmadu Bello University Teaching Hospital, Zaria</option>
                                            <option value="AKTH">Aminu Kano Teaching Hospital, Kano</option>
                                            <option value="ASUTH">Anambra State University Teaching Hospital, Amaku Awka</option>
                                            <option value="AFH">Armed Forces Hospital</option>
                                            <option value="ARC">Aso Rock Clinic</option>                                            
                                            <option value="BUTH">Babcock University Teaching Hospital</option>
                                            <option value="BMC">Baptist Medical Centre, Saki</option>
                                            <option value="BDSH">Barau Dikko Specialist Hospital, Kaduna</option>
                                            <option value="BSUTH">Benue State University Teaching Hospital Makurdi</option>
                                            <option value="BUTHJ">Bingham University Teaching Hospital Jos</option>
                                            <option value="BMHPH">Braithewaite Memorial Hospital, Port Harcourt</option>
                                            <option value="CHBC">Central Hospital, Benin City</option>
                                            <option value="DAHL">Dalhatu Araf Hospital, Lafia</option>
                                            <option value="DELSUTH">Delta State University Teaching Hospital, Oghara</option>
                                            <option value="DCCD">Dental Centre Complex Dugbe, Ibadan</option>
                                            <option value="DSH">Duro Soleye Hospital, Ikeja</option>
                                            <option value="ESUTH">Ebonyi State University Teaching Hospital, Abakaliki</option>
                                            <option value="EHP">Eko Hospital Plc, Ikeja</option>
                                            <option value="FCMC">First Consultant medical centre Obalande</option>
                                            <option value="GHA">Garki Hospital, Abuja</option>
                                            <option value="GHO">General Hospital Onitsha</option>
                                            <option value="GHI">General Hospital, Ikot-Ekpene</option>
                                            <option value="GHM">General Hospital, Minna</option>
                                            <option value="GHCH">General Hospital/Island Maternity/Massey Children’s Hospital, Lagos</option>
                                            <option value="HSHS">Havanah Specialist Hospital Ltd, Suruleres</option>
                                            <option value="HRHE">Holy Rosary Hospital Emekuku</option>
                                            <option value="IUTH">Igbinedion University Teaching Hospital, Okada</option>
                                            <option value="IGH">Immanuel General Hospital, Eket</option>
                                            <option value="ISUTHO">Imo State University Teaching Hospital Orlu, Imo Statet</option>
                                            <option value="JUTH">Jos University Teaching Hospital</option>
                                            <option value="LUSTH">Lagos State University Teaching Hospital, Ikeja</option>
                                            <option value="LUTH">Lagos State University Teaching Hospital, Ikeja</option>
                                            <option value="LAUTECHTH">LAUTECH Teaching Hospital, Osogbo / Ogbomoso</option>
                                            <option value="MUTH">Madonna University Teaching Hospital</option>
                                            <option value="MHHE">Memphys Hospital for Neurosurgery, Enugu</option>
                                            <option value="MBHB">Military Base Hospital, Benin</option>
                                            <option value="MHI">Motayo Hospital, Ikeja</option>
                                            <option value="NAFHI">NAF Hospital, Ikeja</option>
                                            <option value="NAHA">National Hospital Abuja</option>
                                            <option value="NHO">Naval Hospital, Ojo 16</option>
                                            <option value="NAFHI">NAF Hospital, Ikeja</option>
                                            <option value="NDUTH">Niger Delta University Teaching Hospital, Okolobiri 36</option>
                                            <option value="NAUTH">Nnamdi Azikiwe University Teaching Hosp. Nnewi</option>
                                            <option value="OAUTHC">OAU Teaching Hospital Complex, Ile-Ife</option>
                                            <option value="OOUTH">Olabisi Onabanjo (Ogun State) University Teaching Hospital, Sagamu 40</option>
                                            <option value="OMCU">Oriafor Medical Centre Uromi, Edo state</option>
                                            <option value="PGH">Parklane General Hospital, Enugu</option>
                                            <option value="PGJ">Plateau Hospital Jos</option>
                                            <option value="RRSHC">Ring Road Specialist Hospital Complex, Ibadan</option>
                                            <option value="SAH">Seventh-day Adventist Hospital, Ile-Ife</option>
                                            <option value="SSHI">Sobi Specialist Hospital, Ilorin</option>
                                            <option value="LHA">Luke Hospital Anua</option>
                                            <option value="NHL">Nicholas Hospital, Lagos</option>
                                            <option value="SHA">State Hospital Asubiaro, Osogbo</option>
                                            <option value="SHAAB">State Hospital, Abeokuta</option>
                                            <option value="SHAK">State Hospital, Akure</option>
                                            <option value="SHMCA">State House Medical Centre Abuja</option>
                                            <option value="SSHI">State specialist hospital Ikere-Ekiti</option>
                                            <option value="UCHI">University College Hospital, Ibadan</option>
                                            <option value="UATH">University of Abuja Teaching Hospital Gwagwalada</option>
                                            <option value="UBTH">University of Benin Teaching Hospital, Benin City</option>
                                            <option value="UCTH">University of Calabar Teaching Hospital</option>
                                            <option value="UITH">University of Ilorin Teaching Hospital, Ilorin</option>
                                            <option value="UMTH">University of Maiduguri Teaching Hospital</option>
                                            <option value="UNTH">University of Nigeria Teaching Hospital, Enugu</option>
                                            <option value="UPHTH">University of Port Harcourt Teaching Hospital</option>
                                            <option value="UUTH">University of Uyo Teaching Hospital</option>
                                            <option value="UTHA">University Teaching Hospital Ado-Ekit</option>
                                            <option value="UDUTH">Usmanu Danfodio University Teaching Hospital, Sokoto</option>
                                            <option value="FDH">FCT District Hospitals</option>
                                            <option value="FMCA">Federal Medical Centre Abeokuta</option>
                                            <option value="FMCAB">Federal Medical Centre, Abuja</option>
                                            <option value="FMCAE">Federal Medical Centre, Abakaliki, Ebonyi State</option>
                                            <option value="FMCAS">Federal Medical Centre Asaba</option>
                                            <option value="FMCB">Federal Medical Centre Bid</option>
                                            <option value="FMCEM">Federal Medical Centre Ebute-Metta</option>
                                            <option value="FMCK">Federal Medical Centre Keffi</option>
                                            <option value="FMCL">Federal Medical Centre Lokoja</option>
                                            <option value="FMCM">Federal Medical Centre Makurdi</option>
                                            <option value="FMCO">Federal Medical Centre Owerr</option>
                                            <option value="FMCOW">Federal Medical Centre Owo</option>
                                            <option value="FMCY">Federal Medical Centre Yenagoa</option>
                                            <option value="FMCU">Federal Medical Centre Umuahia</option>
                                            <option value="FTHA">Federal Teaching Hospital Abakaliki</option>
                                            <option value="FTHI">Federal Teaching Hospital Ido-Ekiti</option>
                                            <option value="FTHG">Federal Teaching Hospital, Gombe</option>
                                            <option value="FMCAY">Federal Medical Centre,  Yola</option>
                                            <option value="FMCK">Federal Medical Centre,  Katsina</option>
                                            <option value="FMCAB">Federal Medical Centre, Azare,  Bauchi</option>
                                            <option value="FMCBK">Federal Medical Centre,  Birnin-Kebbi, Kebbi</option>
                                            <option value="FMCBJ">Federal Medical Centre,  Birnin-Kudu, Jigawa</option>
                                            <option value="'FMCNY">Federal Medical Centre, Nguru, Yobe</option>
                                            <option value="'FMCGZ">Federal Medical Centre, Gusau, Zamfara State</option>
                                            <option value="'FMCJT">Federal Medical Centre, Jalingo, Taraba State</option>
                                            <option value="'FMCGZS">Federal Medical Centre, Gusau, Zamfara State</option>
                                        </select>
                                        </div>
                                        <br>
                                        <input name="license_number" value="<?php echo $license_number; ?>" type="hidden" >
                                        <input type="submit" class="btn btn-primary"  name="Enter" value="Transfer">
                                        
                                        </form>
                                        
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                    </div>
                                </div>
                            </div>

                            <!--button to call modal -->
                            <button type="button" class="btn btn-success"data-toggle="modal" data-target="#mydropModal1">
                                Drop
                            </button>

                            <!-- The Modal -->
                            <div class="modal" id="mydropModal1">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Drop Practitioner</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                            are you sure you want to drop practitioner from <?php echo $row['hosp_1'];?> ?
                                            <br>
                                            <form class="form group" method="POST">
                                                <input name="license_number" value="<?php echo $license_number; ?>" type="hidden" >
                                                <input type="submit" class="btn btn-primary"  name="drop" value="YES">
                                            </form>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                    </div>
                                </div>
                            </div> 
                        
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <?php
                }

                if($row['hosp_2'] != ""){
                ?>
                <div class="col-lg-3">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <?php echo $row['hosp_2']; ?>
                        </div>
                        <div class="panel-body">
                            <?php
                                $hospital_name = $row['hosp_2'];
                                include('hosp.php');

                            ?>  
                            <p>
                                <?php
                                    echo $full_name;
                                ?>
                            </p>
                        </div>
                        <div class="panel-footer">
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#mytransferModal2">
                            Transfer
                            </button>

                            <!-- The Modal -->
                            <div class="modal" id="mytransferModal2">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">Transfer Practioner to Another Clinic</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                    <form action="" method="POST">
                                        <select name="clinics"class="form-control">
                                            <option value="AFH">48th Armed Forces Hospital, Lagos.</option>
                                            <option value="AFH2">68th Armed Forces Hospital, Lagos</option>
                                            <option value="ASUTH">Abia State University Teaching Hospital, Aba</option>
                                            <option value="ATBUTHB">Abubakar Tafawa Balewa University Teaching Hospital, Bauchi</option>
                                            <option value="ACA">Abuja Clinics, Abuja</option>
                                            <option value="ABUTH">Ahmadu Bello University Teaching Hospital, Zaria</option>
                                            <option value="AKTH">Aminu Kano Teaching Hospital, Kano</option>
                                            <option value="ASUTH">Anambra State University Teaching Hospital, Amaku Awka</option>
                                            <option value="AFH">Armed Forces Hospital</option>
                                            <option value="ARC">Aso Rock Clinic</option>                                            
                                            <option value="BUTH">Babcock University Teaching Hospital</option>
                                            <option value="BMC">Baptist Medical Centre, Saki</option>
                                            <option value="BDSH">Barau Dikko Specialist Hospital, Kaduna</option>
                                            <option value="BSUTH">Benue State University Teaching Hospital Makurdi</option>
                                            <option value="BUTHJ">Bingham University Teaching Hospital Jos</option>
                                            <option value="BMHPH">Braithewaite Memorial Hospital, Port Harcourt</option>
                                            <option value="CHBC">Central Hospital, Benin City</option>
                                            <option value="DAHL">Dalhatu Araf Hospital, Lafia</option>
                                            <option value="DELSUTH">Delta State University Teaching Hospital, Oghara</option>
                                            <option value="DCCD">Dental Centre Complex Dugbe, Ibadan</option>
                                            <option value="DSH">Duro Soleye Hospital, Ikeja</option>
                                            <option value="ESUTH">Ebonyi State University Teaching Hospital, Abakaliki</option>
                                            <option value="EHP">Eko Hospital Plc, Ikeja</option>
                                            <option value="FCMC">First Consultant medical centre Obalande</option>
                                            <option value="GHA">Garki Hospital, Abuja</option>
                                            <option value="GHO">General Hospital Onitsha</option>
                                            <option value="GHI">General Hospital, Ikot-Ekpene</option>
                                            <option value="GHM">General Hospital, Minna</option>
                                            <option value="GHCH">General Hospital/Island Maternity/Massey Children’s Hospital, Lagos</option>
                                            <option value="HSHS">Havanah Specialist Hospital Ltd, Suruleres</option>
                                            <option value="HRHE">Holy Rosary Hospital Emekuku</option>
                                            <option value="IUTH">Igbinedion University Teaching Hospital, Okada</option>
                                            <option value="IGH">Immanuel General Hospital, Eket</option>
                                            <option value="ISUTHO">Imo State University Teaching Hospital Orlu, Imo Statet</option>
                                            <option value="JUTH">Jos University Teaching Hospital</option>
                                            <option value="LUSTH">Lagos State University Teaching Hospital, Ikeja</option>
                                            <option value="LUTH">Lagos State University Teaching Hospital, Ikeja</option>
                                            <option value="LAUTECHTH">LAUTECH Teaching Hospital, Osogbo / Ogbomoso</option>
                                            <option value="MUTH">Madonna University Teaching Hospital</option>
                                            <option value="MHHE">Memphys Hospital for Neurosurgery, Enugu</option>
                                            <option value="MBHB">Military Base Hospital, Benin</option>
                                            <option value="MHI">Motayo Hospital, Ikeja</option>
                                            <option value="NAFHI">NAF Hospital, Ikeja</option>
                                            <option value="NAHA">National Hospital Abuja</option>
                                            <option value="NHO">Naval Hospital, Ojo 16</option>
                                            <option value="NAFHI">NAF Hospital, Ikeja</option>
                                            <option value="NDUTH">Niger Delta University Teaching Hospital, Okolobiri 36</option>
                                            <option value="NAUTH">Nnamdi Azikiwe University Teaching Hosp. Nnewi</option>
                                            <option value="OAUTHC">OAU Teaching Hospital Complex, Ile-Ife</option>
                                            <option value="OOUTH">Olabisi Onabanjo (Ogun State) University Teaching Hospital, Sagamu 40</option>
                                            <option value="OMCU">Oriafor Medical Centre Uromi, Edo state</option>
                                            <option value="PGH">Parklane General Hospital, Enugu</option>
                                            <option value="PGJ">Plateau Hospital Jos</option>
                                            <option value="RRSHC">Ring Road Specialist Hospital Complex, Ibadan</option>
                                            <option value="SAH">Seventh-day Adventist Hospital, Ile-Ife</option>
                                            <option value="SSHI">Sobi Specialist Hospital, Ilorin</option>
                                            <option value="LHA">Luke Hospital Anua</option>
                                            <option value="NHL">Nicholas Hospital, Lagos</option>
                                            <option value="SHA">State Hospital Asubiaro, Osogbo</option>
                                            <option value="SHAAB">State Hospital, Abeokuta</option>
                                            <option value="SHAK">State Hospital, Akure</option>
                                            <option value="SHMCA">State House Medical Centre Abuja</option>
                                            <option value="SSHI">State specialist hospital Ikere-Ekiti</option>
                                            <option value="UCHI">University College Hospital, Ibadan</option>
                                            <option value="UATH">University of Abuja Teaching Hospital Gwagwalada</option>
                                            <option value="UBTH">University of Benin Teaching Hospital, Benin City</option>
                                            <option value="UCTH">University of Calabar Teaching Hospital</option>
                                            <option value="UITH">University of Ilorin Teaching Hospital, Ilorin</option>
                                            <option value="UMTH">University of Maiduguri Teaching Hospital</option>
                                            <option value="UNTH">University of Nigeria Teaching Hospital, Enugu</option>
                                            <option value="UPHTH">University of Port Harcourt Teaching Hospital</option>
                                            <option value="UUTH">University of Uyo Teaching Hospital</option>
                                            <option value="UTHA">University Teaching Hospital Ado-Ekit</option>
                                            <option value="UDUTH">Usmanu Danfodio University Teaching Hospital, Sokoto</option>
                                            <option value="FDH">FCT District Hospitals</option>
                                            <option value="FMCA">Federal Medical Centre Abeokuta</option>
                                            <option value="FMCAB">Federal Medical Centre, Abuja</option>
                                            <option value="FMCAE">Federal Medical Centre, Abakaliki, Ebonyi State</option>
                                            <option value="FMCAS">Federal Medical Centre Asaba</option>
                                            <option value="FMCB">Federal Medical Centre Bid</option>
                                            <option value="FMCEM">Federal Medical Centre Ebute-Metta</option>
                                            <option value="FMCK">Federal Medical Centre Keffi</option>
                                            <option value="FMCL">Federal Medical Centre Lokoja</option>
                                            <option value="FMCM">Federal Medical Centre Makurdi</option>
                                            <option value="FMCO">Federal Medical Centre Owerr</option>
                                            <option value="FMCOW">Federal Medical Centre Owo</option>
                                            <option value="FMCY">Federal Medical Centre Yenagoa</option>
                                            <option value="FMCU">Federal Medical Centre Umuahia</option>
                                            <option value="FTHA">Federal Teaching Hospital Abakaliki</option>
                                            <option value="FTHI">Federal Teaching Hospital Ido-Ekiti</option>
                                            <option value="FTHG">Federal Teaching Hospital, Gombe</option>
                                            <option value="FMCAY">Federal Medical Centre,  Yola</option>
                                            <option value="FMCK">Federal Medical Centre,  Katsina</option>
                                            <option value="FMCAB">Federal Medical Centre, Azare,  Bauchi</option>
                                            <option value="FMCBK">Federal Medical Centre,  Birnin-Kebbi, Kebbi</option>
                                            <option value="FMCBJ">Federal Medical Centre,  Birnin-Kudu, Jigawa</option>
                                            <option value="'FMCNY">Federal Medical Centre, Nguru, Yobe</option>
                                            <option value="'FMCGZ">Federal Medical Centre, Gusau, Zamfara State</option>
                                            <option value="'FMCJT">Federal Medical Centre, Jalingo, Taraba State</option>
                                            <option value="'FMCGZS">Federal Medical Centre, Gusau, Zamfara State</option>
                                        </select>
                                        <br><br>
                                        <input name="license_number" value="<?php echo $license_number; ?>" type="hidden" >

                                        <input type="submit" class="btn btn-primary" name="Enter2" value="Transfer">
                                        </form>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-warning"data-toggle="modal" data-target="#mydropModal2">
                                Drop
                            </button>

                            <!-- The Modal -->
                            <div class="modal" id="mydropModal2">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Drop Practitioner</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                            are you sure you want to drop practitioner from <?php echo $row['hosp_2'];?> ?
                                            <br>
                                            <form class="form group" method="POST">
                                                <input name="license_number" value="<?php echo $license_number; ?>" type="hidden" >
                                                <input type="submit" class="btn btn-primary"  name="drop2" value="YES">
                                            </form> 
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <?php
                }

                if($row['hosp_3'] != ""){
                ?>
                  <!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <?php echo $row['hosp_3']; ?>
                        </div>
                        <div class="panel-body">
                            <?php
                                $hospital_name = $row['hosp_3'];
                                include('hosp.php');

                            ?>  
                            <p>
                                <?php
                                    echo $full_name;
                                ?> 
                            </p>
                        </div>
                        <div class="panel-footer">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mytransferModal3">
                            Transfer
                            </button>

                            <!-- The Modal -->
                            <div class="modal" id="mytransferModal3">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">Transfer Practioner to Another Clinic</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                    <form action="" method="post">
                                        <select name="clinics" class="form-control">
                                            <option value="AFH">48th Armed Forces Hospital, Lagos.</option>
                                            <option value="AFH2">68th Armed Forces Hospital, Lagos</option>
                                            <option value="ASUTH">Abia State University Teaching Hospital, Aba</option>
                                            <option value="ATBUTHB">Abubakar Tafawa Balewa University Teaching Hospital, Bauchi</option>
                                            <option value="ACA">Abuja Clinics, Abuja</option>
                                            <option value="ABUTH">Ahmadu Bello University Teaching Hospital, Zaria</option>
                                            <option value="AKTH">Aminu Kano Teaching Hospital, Kano</option>
                                            <option value="ASUTH">Anambra State University Teaching Hospital, Amaku Awka</option>
                                            <option value="AFH">Armed Forces Hospital</option>
                                            <option value="ARC">Aso Rock Clinic</option>                                            
                                            <option value="BUTH">Babcock University Teaching Hospital</option>
                                            <option value="BMC">Baptist Medical Centre, Saki</option>
                                            <option value="BDSH">Barau Dikko Specialist Hospital, Kaduna</option>
                                            <option value="BSUTH">Benue State University Teaching Hospital Makurdi</option>
                                            <option value="BUTHJ">Bingham University Teaching Hospital Jos</option>
                                            <option value="BMHPH">Braithewaite Memorial Hospital, Port Harcourt</option>
                                            <option value="CHBC">Central Hospital, Benin City</option>
                                            <option value="DAHL">Dalhatu Araf Hospital, Lafia</option>
                                            <option value="DELSUTH">Delta State University Teaching Hospital, Oghara</option>
                                            <option value="DCCD">Dental Centre Complex Dugbe, Ibadan</option>
                                            <option value="DSH">Duro Soleye Hospital, Ikeja</option>
                                            <option value="ESUTH">Ebonyi State University Teaching Hospital, Abakaliki</option>
                                            <option value="EHP">Eko Hospital Plc, Ikeja</option>
                                            <option value="FCMC">First Consultant medical centre Obalande</option>
                                            <option value="GHA">Garki Hospital, Abuja</option>
                                            <option value="GHO">General Hospital Onitsha</option>
                                            <option value="GHI">General Hospital, Ikot-Ekpene</option>
                                            <option value="GHM">General Hospital, Minna</option>
                                            <option value="GHCH">General Hospital/Island Maternity/Massey Children’s Hospital, Lagos</option>
                                            <option value="HSHS">Havanah Specialist Hospital Ltd, Suruleres</option>
                                            <option value="HRHE">Holy Rosary Hospital Emekuku</option>
                                            <option value="IUTH">Igbinedion University Teaching Hospital, Okada</option>
                                            <option value="IGH">Immanuel General Hospital, Eket</option>
                                            <option value="ISUTHO">Imo State University Teaching Hospital Orlu, Imo Statet</option>
                                            <option value="JUTH">Jos University Teaching Hospital</option>
                                            <option value="LUSTH">Lagos State University Teaching Hospital, Ikeja</option>
                                            <option value="LUTH">Lagos State University Teaching Hospital, Ikeja</option>
                                            <option value="LAUTECHTH">LAUTECH Teaching Hospital, Osogbo / Ogbomoso</option>
                                            <option value="MUTH">Madonna University Teaching Hospital</option>
                                            <option value="MHHE">Memphys Hospital for Neurosurgery, Enugu</option>
                                            <option value="MBHB">Military Base Hospital, Benin</option>
                                            <option value="MHI">Motayo Hospital, Ikeja</option>
                                            <option value="NAFHI">NAF Hospital, Ikeja</option>
                                            <option value="NAHA">National Hospital Abuja</option>
                                            <option value="NHO">Naval Hospital, Ojo 16</option>
                                            <option value="NAFHI">NAF Hospital, Ikeja</option>
                                            <option value="NDUTH">Niger Delta University Teaching Hospital, Okolobiri 36</option>
                                            <option value="NAUTH">Nnamdi Azikiwe University Teaching Hosp. Nnewi</option>
                                            <option value="OAUTHC">OAU Teaching Hospital Complex, Ile-Ife</option>
                                            <option value="OOUTH">Olabisi Onabanjo (Ogun State) University Teaching Hospital, Sagamu 40</option>
                                            <option value="OMCU">Oriafor Medical Centre Uromi, Edo state</option>
                                            <option value="PGH">Parklane General Hospital, Enugu</option>
                                            <option value="PGJ">Plateau Hospital Jos</option>
                                            <option value="RRSHC">Ring Road Specialist Hospital Complex, Ibadan</option>
                                            <option value="SAH">Seventh-day Adventist Hospital, Ile-Ife</option>
                                            <option value="SSHI">Sobi Specialist Hospital, Ilorin</option>
                                            <option value="LHA">Luke Hospital Anua</option>
                                            <option value="NHL">Nicholas Hospital, Lagos</option>
                                            <option value="SHA">State Hospital Asubiaro, Osogbo</option>
                                            <option value="SHAAB">State Hospital, Abeokuta</option>
                                            <option value="SHAK">State Hospital, Akure</option>
                                            <option value="SHMCA">State House Medical Centre Abuja</option>
                                            <option value="SSHI">State specialist hospital Ikere-Ekiti</option>
                                            <option value="UCHI">University College Hospital, Ibadan</option>
                                            <option value="UATH">University of Abuja Teaching Hospital Gwagwalada</option>
                                            <option value="UBTH">University of Benin Teaching Hospital, Benin City</option>
                                            <option value="UCTH">University of Calabar Teaching Hospital</option>
                                            <option value="UITH">University of Ilorin Teaching Hospital, Ilorin</option>
                                            <option value="UMTH">University of Maiduguri Teaching Hospital</option>
                                            <option value="UNTH">University of Nigeria Teaching Hospital, Enugu</option>
                                            <option value="UPHTH">University of Port Harcourt Teaching Hospital</option>
                                            <option value="UUTH">University of Uyo Teaching Hospital</option>
                                            <option value="UTHA">University Teaching Hospital Ado-Ekit</option>
                                            <option value="UDUTH">Usmanu Danfodio University Teaching Hospital, Sokoto</option>
                                            <option value="FDH">FCT District Hospitals</option>
                                            <option value="FMCA">Federal Medical Centre Abeokuta</option>
                                            <option value="FMCAB">Federal Medical Centre, Abuja</option>
                                            <option value="FMCAE">Federal Medical Centre, Abakaliki, Ebonyi State</option>
                                            <option value="FMCAS">Federal Medical Centre Asaba</option>
                                            <option value="FMCB">Federal Medical Centre Bid</option>
                                            <option value="FMCEM">Federal Medical Centre Ebute-Metta</option>
                                            <option value="FMCK">Federal Medical Centre Keffi</option>
                                            <option value="FMCL">Federal Medical Centre Lokoja</option>
                                            <option value="FMCM">Federal Medical Centre Makurdi</option>
                                            <option value="FMCO">Federal Medical Centre Owerr</option>
                                            <option value="FMCOW">Federal Medical Centre Owo</option>
                                            <option value="FMCY">Federal Medical Centre Yenagoa</option>
                                            <option value="FMCU">Federal Medical Centre Umuahia</option>
                                            <option value="FTHA">Federal Teaching Hospital Abakaliki</option>
                                            <option value="FTHI">Federal Teaching Hospital Ido-Ekiti</option>
                                            <option value="FTHG">Federal Teaching Hospital, Gombe</option>
                                            <option value="FMCAY">Federal Medical Centre,  Yola</option>
                                            <option value="FMCK">Federal Medical Centre,  Katsina</option>
                                            <option value="FMCAB">Federal Medical Centre, Azare,  Bauchi</option>
                                            <option value="FMCBK">Federal Medical Centre,  Birnin-Kebbi, Kebbi</option>
                                            <option value="FMCBJ">Federal Medical Centre,  Birnin-Kudu, Jigawa</option>
                                            <option value="'FMCNY">Federal Medical Centre, Nguru, Yobe</option>
                                            <option value="'FMCGZ">Federal Medical Centre, Gusau, Zamfara State</option>
                                            <option value="'FMCJT">Federal Medical Centre, Jalingo, Taraba State</option>
                                            <option value="'FMCGZS">Federal Medical Centre, Gusau, Zamfara State</option>
                                        </select>
                                        <br><br>
                                        <input name="license_number" value="<?php echo $license_number; ?>" type="hidden" >

                                        <input type="submit" class="btn btn-primary" name="Enter3" value="Transfer">
                                        </form>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                    </div>
                                </div>
                                
                            </div>                           
                             <button type="button" class="btn btn-primary"data-toggle="modal" data-target="#mydropModal3">
                                Drop
                             </button>

                            <!-- The Modal -->
                                <div class="modal" id="mydropModal3">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Drop Practitioner</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                            are you sure you want to drop practitioner from <?php echo $row['hosp_3'];?> ?
                                            <br>
                                            <form class="form group" method="POST">
                                              <input name="license_number" value="<?php echo $license_number; ?>" type="hidden" >
                                              <input type="submit" class="btn btn-primary"  name="drop3" value="YES">
                                            </form> 
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <?php
                }

                if($row['hosp_4'] != ""){
                ?>

                <div class="col-lg-3">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <?php echo $row['hosp_4']; ?>
                        </div>
                        <div class="panel-body">

                            <?php
                                $hospital_name = $row['hosp_4'];
                                include('hosp.php');

                            ?>  
                           <p>
                                <?php
                                    echo $full_name;
                                ?> 
                            </p>
                        </div>
                        <div class="panel-footer"> 
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#mytransferModal4">
                            Transfer
                            </button>

                            <!-- The Modal -->
                            <div class="modal" id="mytransferModal4">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">Transfer Practioner to Another Clinic</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                          
                                        <form action="" method="post">
                                        <select name="clinics" class="form-control">
                                            <option value="AFH">48th Armed Forces Hospital, Lagos.</option>
                                            <option value="AFH2">68th Armed Forces Hospital, Lagos</option>
                                            <option value="ASUTH">Abia State University Teaching Hospital, Aba</option>
                                            <option value="ATBUTHB">Abubakar Tafawa Balewa University Teaching Hospital, Bauchi</option>
                                            <option value="ACA">Abuja Clinics, Abuja</option>
                                            <option value="ABUTH">Ahmadu Bello University Teaching Hospital, Zaria</option>
                                            <option value="AKTH">Aminu Kano Teaching Hospital, Kano</option>
                                            <option value="ASUTH">Anambra State University Teaching Hospital, Amaku Awka</option>
                                            <option value="AFH">Armed Forces Hospital</option>
                                            <option value="ARC">Aso Rock Clinic</option>                                            
                                            <option value="BUTH">Babcock University Teaching Hospital</option>
                                            <option value="BMC">Baptist Medical Centre, Saki</option>
                                            <option value="BDSH">Barau Dikko Specialist Hospital, Kaduna</option>
                                            <option value="BSUTH">Benue State University Teaching Hospital Makurdi</option>
                                            <option value="BUTHJ">Bingham University Teaching Hospital Jos</option>
                                            <option value="BMHPH">Braithewaite Memorial Hospital, Port Harcourt</option>
                                            <option value="CHBC">Central Hospital, Benin City</option>
                                            <option value="DAHL">Dalhatu Araf Hospital, Lafia</option>
                                            <option value="DELSUTH">Delta State University Teaching Hospital, Oghara</option>
                                            <option value="DCCD">Dental Centre Complex Dugbe, Ibadan</option>
                                            <option value="DSH">Duro Soleye Hospital, Ikeja</option>
                                            <option value="ESUTH">Ebonyi State University Teaching Hospital, Abakaliki</option>
                                            <option value="EHP">Eko Hospital Plc, Ikeja</option>
                                            <option value="FCMC">First Consultant medical centre Obalande</option>
                                            <option value="GHA">Garki Hospital, Abuja</option>
                                            <option value="GHO">General Hospital Onitsha</option>
                                            <option value="GHI">General Hospital, Ikot-Ekpene</option>
                                            <option value="GHM">General Hospital, Minna</option>
                                            <option value="GHCH">General Hospital/Island Maternity/Massey Children’s Hospital, Lagos</option>
                                            <option value="HSHS">Havanah Specialist Hospital Ltd, Suruleres</option>
                                            <option value="HRHE">Holy Rosary Hospital Emekuku</option>
                                            <option value="IUTH">Igbinedion University Teaching Hospital, Okada</option>
                                            <option value="IGH">Immanuel General Hospital, Eket</option>
                                            <option value="ISUTHO">Imo State University Teaching Hospital Orlu, Imo Statet</option>
                                            <option value="JUTH">Jos University Teaching Hospital</option>
                                            <option value="LUSTH">Lagos State University Teaching Hospital, Ikeja</option>
                                            <option value="LUTH">Lagos State University Teaching Hospital, Ikeja</option>
                                            <option value="LAUTECHTH">LAUTECH Teaching Hospital, Osogbo / Ogbomoso</option>
                                            <option value="MUTH">Madonna University Teaching Hospital</option>
                                            <option value="MHHE">Memphys Hospital for Neurosurgery, Enugu</option>
                                            <option value="MBHB">Military Base Hospital, Benin</option>
                                            <option value="MHI">Motayo Hospital, Ikeja</option>
                                            <option value="NAFHI">NAF Hospital, Ikeja</option>
                                            <option value="NAHA">National Hospital Abuja</option>
                                            <option value="NHO">Naval Hospital, Ojo 16</option>
                                            <option value="NAFHI">NAF Hospital, Ikeja</option>
                                            <option value="NDUTH">Niger Delta University Teaching Hospital, Okolobiri 36</option>
                                            <option value="NAUTH">Nnamdi Azikiwe University Teaching Hosp. Nnewi</option>
                                            <option value="OAUTHC">OAU Teaching Hospital Complex, Ile-Ife</option>
                                            <option value="OOUTH">Olabisi Onabanjo (Ogun State) University Teaching Hospital, Sagamu 40</option>
                                            <option value="OMCU">Oriafor Medical Centre Uromi, Edo state</option>
                                            <option value="PGH">Parklane General Hospital, Enugu</option>
                                            <option value="PGJ">Plateau Hospital Jos</option>
                                            <option value="RRSHC">Ring Road Specialist Hospital Complex, Ibadan</option>
                                            <option value="SAH">Seventh-day Adventist Hospital, Ile-Ife</option>
                                            <option value="SSHI">Sobi Specialist Hospital, Ilorin</option>
                                            <option value="LHA">Luke Hospital Anua</option>
                                            <option value="NHL">Nicholas Hospital, Lagos</option>
                                            <option value="SHA">State Hospital Asubiaro, Osogbo</option>
                                            <option value="SHAAB">State Hospital, Abeokuta</option>
                                            <option value="SHAK">State Hospital, Akure</option>
                                            <option value="SHMCA">State House Medical Centre Abuja</option>
                                            <option value="SSHI">State specialist hospital Ikere-Ekiti</option>
                                            <option value="UCHI">University College Hospital, Ibadan</option>
                                            <option value="UATH">University of Abuja Teaching Hospital Gwagwalada</option>
                                            <option value="UBTH">University of Benin Teaching Hospital, Benin City</option>
                                            <option value="UCTH">University of Calabar Teaching Hospital</option>
                                            <option value="UITH">University of Ilorin Teaching Hospital, Ilorin</option>
                                            <option value="UMTH">University of Maiduguri Teaching Hospital</option>
                                            <option value="UNTH">University of Nigeria Teaching Hospital, Enugu</option>
                                            <option value="UPHTH">University of Port Harcourt Teaching Hospital</option>
                                            <option value="UUTH">University of Uyo Teaching Hospital</option>
                                            <option value="UTHA">University Teaching Hospital Ado-Ekit</option>
                                            <option value="UDUTH">Usmanu Danfodio University Teaching Hospital, Sokoto</option>
                                            <option value="FDH">FCT District Hospitals</option>
                                            <option value="FMCA">Federal Medical Centre Abeokuta</option>
                                            <option value="FMCAB">Federal Medical Centre, Abuja</option>
                                            <option value="FMCAE">Federal Medical Centre, Abakaliki, Ebonyi State</option>
                                            <option value="FMCAS">Federal Medical Centre Asaba</option>
                                            <option value="FMCB">Federal Medical Centre Bid</option>
                                            <option value="FMCEM">Federal Medical Centre Ebute-Metta</option>
                                            <option value="FMCK">Federal Medical Centre Keffi</option>
                                            <option value="FMCL">Federal Medical Centre Lokoja</option>
                                            <option value="FMCM">Federal Medical Centre Makurdi</option>
                                            <option value="FMCO">Federal Medical Centre Owerr</option>
                                            <option value="FMCOW">Federal Medical Centre Owo</option>
                                            <option value="FMCY">Federal Medical Centre Yenagoa</option>
                                            <option value="FMCU">Federal Medical Centre Umuahia</option>
                                            <option value="FTHA">Federal Teaching Hospital Abakaliki</option>
                                            <option value="FTHI">Federal Teaching Hospital Ido-Ekiti</option>
                                            <option value="FTHG">Federal Teaching Hospital, Gombe</option>
                                            <option value="FMCAY">Federal Medical Centre,  Yola</option>
                                            <option value="FMCK">Federal Medical Centre,  Katsina</option>
                                            <option value="FMCAB">Federal Medical Centre, Azare,  Bauchi</option>
                                            <option value="FMCBK">Federal Medical Centre,  Birnin-Kebbi, Kebbi</option>
                                            <option value="FMCBJ">Federal Medical Centre,  Birnin-Kudu, Jigawa</option>
                                            <option value="'FMCNY">Federal Medical Centre, Nguru, Yobe</option>
                                            <option value="'FMCGZ">Federal Medical Centre, Gusau, Zamfara State</option>
                                            <option value="'FMCJT">Federal Medical Centre, Jalingo, Taraba State</option>
                                            <option value="'FMCGZS">Federal Medical Centre, Gusau, Zamfara State</option>
                                        </select>
                                        <br><br>
                                        <input name="license_number" value="<?php echo $license_number; ?>" type="hidden" >

                                        <input type="submit" class="btn btn-primary" name="Enter4" value="Transfer">
                                        </form>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                    </div>
                                </div>
                                
                            </div>                           
                       
                            <button type="button" class="btn btn-danger"data-toggle="modal" data-target="#mydropModal4">
                                Drop
                            </button>

                            <!-- The Modal -->
                            <div class="modal" id="mydropModal4">
                                <div class="modal-dialog">
                                 <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Drop Practitioner</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                            are you sure you want to drop practitioner from <?php echo $row['hosp_4'];?> ?
                                            <br>
                                            <form class="form group" method="POST">
                                              
                                              <input name="license_number" value="<?php echo $license_number; ?>" type="hidden" >
                                              <input type="submit" class="btn btn-primary"  name="drop4" value="YES">
                                            </form> 
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                  </div>
                                </div>
                                
                            </div>
                        </div>                            
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <?php
                }

                if($row['hosp_5'] != ""){
                ?>
                <div class="col-lg-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <?php echo $row['hosp_5']; ?>
                        </div>
                        <div class="panel-body">
                            <?php
                                $hospital_name = $row['hosp_5'];
                                include('hosp.php');

                            ?>  
                            <p>
                                <?php
                                    echo $full_name;
                                ?>
                            </p>
                        </div>

                        <div class="panel-footer">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#mytransferModal5">
                            Transfer
                            </button>

                            <!-- The Modal -->
                            <div class="modal" id="mytransferModal5">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">Transfer Practioner to Another Clinic</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body"class="form-control">
                                    <form action="" method="post">
                                        <select name="clinics" class="form-control">
                                            <option value="AFH">48th Armed Forces Hospital, Lagos.</option>
                                            <option value="AFH2">68th Armed Forces Hospital, Lagos</option>
                                            <option value="ASUTH">Abia State University Teaching Hospital, Aba</option>
                                            <option value="ATBUTHB">Abubakar Tafawa Balewa University Teaching Hospital, Bauchi</option>
                                            <option value="ACA">Abuja Clinics, Abuja</option>
                                            <option value="ABUTH">Ahmadu Bello University Teaching Hospital, Zaria</option>
                                            <option value="AKTH">Aminu Kano Teaching Hospital, Kano</option>
                                            <option value="ASUTH">Anambra State University Teaching Hospital, Amaku Awka</option>
                                            <option value="AFH">Armed Forces Hospital</option>
                                            <option value="ARC">Aso Rock Clinic</option>                                            
                                            <option value="BUTH">Babcock University Teaching Hospital</option>
                                            <option value="BMC">Baptist Medical Centre, Saki</option>
                                            <option value="BDSH">Barau Dikko Specialist Hospital, Kaduna</option>
                                            <option value="BSUTH">Benue State University Teaching Hospital Makurdi</option>
                                            <option value="BUTHJ">Bingham University Teaching Hospital Jos</option>
                                            <option value="BMHPH">Braithewaite Memorial Hospital, Port Harcourt</option>
                                            <option value="CHBC">Central Hospital, Benin City</option>
                                            <option value="DAHL">Dalhatu Araf Hospital, Lafia</option>
                                            <option value="DELSUTH">Delta State University Teaching Hospital, Oghara</option>
                                            <option value="DCCD">Dental Centre Complex Dugbe, Ibadan</option>
                                            <option value="DSH">Duro Soleye Hospital, Ikeja</option>
                                            <option value="ESUTH">Ebonyi State University Teaching Hospital, Abakaliki</option>
                                            <option value="EHP">Eko Hospital Plc, Ikeja</option>
                                            <option value="FCMC">First Consultant medical centre Obalande</option>
                                            <option value="GHA">Garki Hospital, Abuja</option>
                                            <option value="GHO">General Hospital Onitsha</option>
                                            <option value="GHI">General Hospital, Ikot-Ekpene</option>
                                            <option value="GHM">General Hospital, Minna</option>
                                            <option value="GHCH">General Hospital/Island Maternity/Massey Children’s Hospital, Lagos</option>
                                            <option value="HSHS">Havanah Specialist Hospital Ltd, Suruleres</option>
                                            <option value="HRHE">Holy Rosary Hospital Emekuku</option>
                                            <option value="IUTH">Igbinedion University Teaching Hospital, Okada</option>
                                            <option value="IGH">Immanuel General Hospital, Eket</option>
                                            <option value="ISUTHO">Imo State University Teaching Hospital Orlu, Imo Statet</option>
                                            <option value="JUTH">Jos University Teaching Hospital</option>
                                            <option value="LUSTH">Lagos State University Teaching Hospital, Ikeja</option>
                                            <option value="LUTH">Lagos State University Teaching Hospital, Ikeja</option>
                                            <option value="LAUTECHTH">LAUTECH Teaching Hospital, Osogbo / Ogbomoso</option>
                                            <option value="MUTH">Madonna University Teaching Hospital</option>
                                            <option value="MHHE">Memphys Hospital for Neurosurgery, Enugu</option>
                                            <option value="MBHB">Military Base Hospital, Benin</option>
                                            <option value="MHI">Motayo Hospital, Ikeja</option>
                                            <option value="NAFHI">NAF Hospital, Ikeja</option>
                                            <option value="NAHA">National Hospital Abuja</option>
                                            <option value="NHO">Naval Hospital, Ojo 16</option>
                                            <option value="NAFHI">NAF Hospital, Ikeja</option>
                                            <option value="NDUTH">Niger Delta University Teaching Hospital, Okolobiri 36</option>
                                            <option value="NAUTH">Nnamdi Azikiwe University Teaching Hosp. Nnewi</option>
                                            <option value="OAUTHC">OAU Teaching Hospital Complex, Ile-Ife</option>
                                            <option value="OOUTH">Olabisi Onabanjo (Ogun State) University Teaching Hospital, Sagamu 40</option>
                                            <option value="OMCU">Oriafor Medical Centre Uromi, Edo state</option>
                                            <option value="PGH">Parklane General Hospital, Enugu</option>
                                            <option value="PGJ">Plateau Hospital Jos</option>
                                            <option value="RRSHC">Ring Road Specialist Hospital Complex, Ibadan</option>
                                            <option value="SAH">Seventh-day Adventist Hospital, Ile-Ife</option>
                                            <option value="SSHI">Sobi Specialist Hospital, Ilorin</option>
                                            <option value="LHA">Luke Hospital Anua</option>
                                            <option value="NHL">Nicholas Hospital, Lagos</option>
                                            <option value="SHA">State Hospital Asubiaro, Osogbo</option>
                                            <option value="SHAAB">State Hospital, Abeokuta</option>
                                            <option value="SHAK">State Hospital, Akure</option>
                                            <option value="SHMCA">State House Medical Centre Abuja</option>
                                            <option value="SSHI">State specialist hospital Ikere-Ekiti</option>
                                            <option value="UCHI">University College Hospital, Ibadan</option>
                                            <option value="UATH">University of Abuja Teaching Hospital Gwagwalada</option>
                                            <option value="UBTH">University of Benin Teaching Hospital, Benin City</option>
                                            <option value="UCTH">University of Calabar Teaching Hospital</option>
                                            <option value="UITH">University of Ilorin Teaching Hospital, Ilorin</option>
                                            <option value="UMTH">University of Maiduguri Teaching Hospital</option>
                                            <option value="UNTH">University of Nigeria Teaching Hospital, Enugu</option>
                                            <option value="UPHTH">University of Port Harcourt Teaching Hospital</option>
                                            <option value="UUTH">University of Uyo Teaching Hospital</option>
                                            <option value="UTHA">University Teaching Hospital Ado-Ekit</option>
                                            <option value="UDUTH">Usmanu Danfodio University Teaching Hospital, Sokoto</option>
                                            <option value="FDH">FCT District Hospitals</option>
                                            <option value="FMCA">Federal Medical Centre Abeokuta</option>
                                            <option value="FMCAB">Federal Medical Centre, Abuja</option>
                                            <option value="FMCAE">Federal Medical Centre, Abakaliki, Ebonyi State</option>
                                            <option value="FMCAS">Federal Medical Centre Asaba</option>
                                            <option value="FMCB">Federal Medical Centre Bid</option>
                                            <option value="FMCEM">Federal Medical Centre Ebute-Metta</option>
                                            <option value="FMCK">Federal Medical Centre Keffi</option>
                                            <option value="FMCL">Federal Medical Centre Lokoja</option>
                                            <option value="FMCM">Federal Medical Centre Makurdi</option>
                                            <option value="FMCO">Federal Medical Centre Owerr</option>
                                            <option value="FMCOW">Federal Medical Centre Owo</option>
                                            <option value="FMCY">Federal Medical Centre Yenagoa</option>
                                            <option value="FMCU">Federal Medical Centre Umuahia</option>
                                            <option value="FTHA">Federal Teaching Hospital Abakaliki</option>
                                            <option value="FTHI">Federal Teaching Hospital Ido-Ekiti</option>
                                            <option value="FTHG">Federal Teaching Hospital, Gombe</option>
                                            <option value="FMCAY">Federal Medical Centre,  Yola</option>
                                            <option value="FMCK">Federal Medical Centre,  Katsina</option>
                                            <option value="FMCAB">Federal Medical Centre, Azare,  Bauchi</option>
                                            <option value="FMCBK">Federal Medical Centre,  Birnin-Kebbi, Kebbi</option>
                                            <option value="FMCBJ">Federal Medical Centre,  Birnin-Kudu, Jigawa</option>
                                            <option value="'FMCNY">Federal Medical Centre, Nguru, Yobe</option>
                                            <option value="'FMCGZ">Federal Medical Centre, Gusau, Zamfara State</option>
                                            <option value="'FMCJT">Federal Medical Centre, Jalingo, Taraba State</option>
                                            <option value="'FMCGZS">Federal Medical Centre, Gusau, Zamfara State</option>
                                        </select>
                                        <br><br>
                                        <input name="license_number" value="<?php echo $license_number; ?>" type="hidden" >

                                        <input type="submit" class="btn btn-primary" name="Enter5" value="Transfer">
                                        </form>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>

                                    </div>
                                </div>
                                
                            </div>  
           
                            <button type="button" class="btn btn-info"data-toggle="modal" data-target="#mydropModal5">
                                Drop
                            </button>

                            <!-- The Modal -->
                            <div class="modal" id="mydropModal5">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                    <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Drop Practitioner</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                    <!-- Modal body -->
                                        <div class="modal-body">
                                                are you sure you want to drop practitioner from <?php echo $row['hosp_5'];?> ?
                                                <br>
                                            <form class="form group" method="POST">
                                                  <input name="license_number" value="<?php echo $license_number; ?>" type="hidden" >
                                                  <input type="submit" class="btn btn-primary"  name="drop5" value="YES">
                                            </form> 
                                        </div>

                                    <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                                
                            </div>
                        </div>                            
                    </div>
                </div>
            <!-- /.row -->
             <?php
              }
             ?>
            </div>
            <form role="form" name="assign"  method="POST" >
            <div class="form-group" > 
               <hr>
              <h2>Assign Practitioners To Clinic</h2>
                        
                <select name="hospitals"class="form-control" class="custom-control" >
                    <option value="AFH">48th Armed Forces Hospital, Lagos.</option>
                    <option value="AFH2">68th Armed Forces Hospital, Lagos</option>
                    <option value="ASUTH">Abia State University Teaching Hospital, Aba</option>
                    <option value="ATBUTHB">Abubakar Tafawa Balewa University Teaching Hospital, Bauchi</option>
                    <option value="ACA">Abuja Clinics, Abuja</option>
                    <option value="ABUTH">Ahmadu Bello University Teaching Hospital, Zaria</option>
                    <option value="AKTH">Aminu Kano Teaching Hospital, Kano</option>
                    <option value="ASUTH">Anambra State University Teaching Hospital, Amaku Awka</option>
                    <option value="AFH">Armed Forces Hospital</option>
                    <option value="ARC">Aso Rock Clinic</option>                                            
                    <option value="BUTH">Babcock University Teaching Hospital</option>
                    <option value="BMC">Baptist Medical Centre, Saki</option>
                    <option value="BDSH">Barau Dikko Specialist Hospital, Kaduna</option>
                    <option value="BSUTH">Benue State University Teaching Hospital Makurdi</option>
                    <option value="BUTHJ">Bingham University Teaching Hospital Jos</option>
                    <option value="BMHPH">Braithewaite Memorial Hospital, Port Harcourt</option>
                    <option value="CHBC">Central Hospital, Benin City</option>
                    <option value="DAHL">Dalhatu Araf Hospital, Lafia</option>
                    <option value="DELSUTH">Delta State University Teaching Hospital, Oghara</option>
                    <option value="DCCD">Dental Centre Complex Dugbe, Ibadan</option>
                    <option value="DSH">Duro Soleye Hospital, Ikeja</option>
                    <option value="ESUTH">Ebonyi State University Teaching Hospital, Abakaliki</option>
                    <option value="EHP">Eko Hospital Plc, Ikeja</option>
                    <option value="FCMC">First Consultant medical centre Obalande</option>
                    <option value="GHA">Garki Hospital, Abuja</option>
                    <option value="GHO">General Hospital Onitsha</option>
                    <option value="GHI">General Hospital, Ikot-Ekpene</option>
                    <option value="GHM">General Hospital, Minna</option>
                    <option value="GHCH">General Hospital/Island Maternity/Massey Children’s Hospital, Lagos</option>
                    <option value="HSHS">Havanah Specialist Hospital Ltd, Suruleres</option>
                    <option value="HRHE">Holy Rosary Hospital Emekuku</option>
                    <option value="IUTH">Igbinedion University Teaching Hospital, Okada</option>
                    <option value="IGH">Immanuel General Hospital, Eket</option>
                    <option value="ISUTHO">Imo State University Teaching Hospital Orlu, Imo Statet</option>
                    <option value="JUTH">Jos University Teaching Hospital</option>
                    <option value="LUSTH">Lagos State University Teaching Hospital, Ikeja</option>
                    <option value="LUTH">Lagos State University Teaching Hospital, Ikeja</option>
                    <option value="LAUTECHTH">LAUTECH Teaching Hospital, Osogbo / Ogbomoso</option>
                    <option value="MUTH">Madonna University Teaching Hospital</option>
                    <option value="MHHE">Memphys Hospital for Neurosurgery, Enugu</option>
                    <option value="MBHB">Military Base Hospital, Benin</option>
                    <option value="MHI">Motayo Hospital, Ikeja</option>
                    <option value="NAFHI">NAF Hospital, Ikeja</option>
                    <option value="NAHA">National Hospital Abuja</option>
                    <option value="NHO">Naval Hospital, Ojo 16</option>
                    <option value="NAFHI">NAF Hospital, Ikeja</option>
                    <option value="NDUTH">Niger Delta University Teaching Hospital, Okolobiri 36</option>
                    <option value="NAUTH">Nnamdi Azikiwe University Teaching Hosp. Nnewi</option>
                    <option value="OAUTHC">OAU Teaching Hospital Complex, Ile-Ife</option>
                    <option value="OOUTH">Olabisi Onabanjo (Ogun State) University Teaching Hospital, Sagamu 40</option>
                    <option value="OMCU">Oriafor Medical Centre Uromi, Edo state</option>
                    <option value="PGH">Parklane General Hospital, Enugu</option>
                    <option value="PGJ">Plateau Hospital Jos</option>
                    <option value="RRSHC">Ring Road Specialist Hospital Complex, Ibadan</option>
                    <option value="SAH">Seventh-day Adventist Hospital, Ile-Ife</option>
                    <option value="SSHI">Sobi Specialist Hospital, Ilorin</option>
                    <option value="LHA">Luke Hospital Anua</option>
                    <option value="NHL">Nicholas Hospital, Lagos</option>
                    <option value="SHA">State Hospital Asubiaro, Osogbo</option>
                    <option value="SHAAB">State Hospital, Abeokuta</option>
                    <option value="SHAK">State Hospital, Akure</option>
                    <option value="SHMCA">State House Medical Centre Abuja</option>
                    <option value="SSHI">State specialist hospital Ikere-Ekiti</option>
                    <option value="UCHI">University College Hospital, Ibadan</option>
                    <option value="UATH">University of Abuja Teaching Hospital Gwagwalada</option>
                    <option value="UBTH">University of Benin Teaching Hospital, Benin City</option>
                    <option value="UCTH">University of Calabar Teaching Hospital</option>
                    <option value="UITH">University of Ilorin Teaching Hospital, Ilorin</option>
                    <option value="UMTH">University of Maiduguri Teaching Hospital</option>
                    <option value="UNTH">University of Nigeria Teaching Hospital, Enugu</option>
                    <option value="UPHTH">University of Port Harcourt Teaching Hospital</option>
                    <option value="UUTH">University of Uyo Teaching Hospital</option>
                    <option value="UTHA">University Teaching Hospital Ado-Ekit</option>
                    <option value="UDUTH">Usmanu Danfodio University Teaching Hospital, Sokoto</option>
                    <option value="FDH">FCT District Hospitals</option>
                    <option value="FMCA">Federal Medical Centre Abeokuta</option>
                    <option value="FMCAB">Federal Medical Centre, Abuja</option>
                    <option value="FMCAE">Federal Medical Centre, Abakaliki, Ebonyi State</option>
                    <option value="FMCAS">Federal Medical Centre Asaba</option>
                    <option value="FMCB">Federal Medical Centre Bid</option>
                    <option value="FMCEM">Federal Medical Centre Ebute-Metta</option>
                    <option value="FMCK">Federal Medical Centre Keffi</option>
                    <option value="FMCL">Federal Medical Centre Lokoja</option>
                    <option value="FMCM">Federal Medical Centre Makurdi</option>
                    <option value="FMCO">Federal Medical Centre Owerr</option>
                    <option value="FMCOW">Federal Medical Centre Owo</option>
                    <option value="FMCY">Federal Medical Centre Yenagoa</option>
                    <option value="FMCU">Federal Medical Centre Umuahia</option>
                    <option value="FTHA">Federal Teaching Hospital Abakaliki</option>
                    <option value="FTHI">Federal Teaching Hospital Ido-Ekiti</option>
                    <option value="FTHG">Federal Teaching Hospital, Gombe</option>
                    <option value="FMCAY">Federal Medical Centre,  Yola</option>
                    <option value="FMCK">Federal Medical Centre,  Katsina</option>
                    <option value="FMCAB">Federal Medical Centre, Azare,  Bauchi</option>
                    <option value="FMCBK">Federal Medical Centre,  Birnin-Kebbi, Kebbi</option>
                    <option value="FMCBJ">Federal Medical Centre,  Birnin-Kudu, Jigawa</option>
                    <option value="'FMCNY">Federal Medical Centre, Nguru, Yobe</option>
                    <option value="'FMCGZ">Federal Medical Centre, Gusau, Zamfara State</option>
                    <option value="'FMCJT">Federal Medical Centre, Jalingo, Taraba State</option>
                    <option value="'FMCGZS">Federal Medical Centre, Gusau, Zamfara State</option>
                </select>
                
                            
                        
                <br><br>
                <input name="license_number" value="<?php echo $license_number; ?>" type="hidden" >

                <input type="submit" name="submit"class="btn btn-dark mb-2"  value="Assign">
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
