<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<!-- End Left Sidebar  -->
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3> </div>
            <div class="col-md-7 align-self-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-title">
                            <h4>Add New Tracking</h4>
                                            <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include 'conn.php';

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['save'])){
 $packageumber = mysqli_real_escape_string($link,$_POST['packageumber']);
 $packagetype = mysqli_real_escape_string($link,$_POST['packagetype']);
 $departuredatetime = mysqli_real_escape_string($link,$_POST['departuredatetime']);
 $expectedarrivaldatetime = mysqli_real_escape_string($link,$_POST['expectedarrivaldatetime']);
 $sendername = mysqli_real_escape_string($link,$_POST['sendername']);
 $senderemail = mysqli_real_escape_string($link,$_POST['senderemail']);
 $senderaddress = mysqli_real_escape_string($link,$_POST['senderaddress']);
 $senderphonenumber = mysqli_real_escape_string($link,$_POST['senderphonenumber']);
 $origincity = mysqli_real_escape_string($link,$_POST['origincity']);
 $DestinationCity = mysqli_real_escape_string($link,$_POST['DestinationCity']);
 $DeliveryAddress = mysqli_real_escape_string($link,$_POST['DeliveryAddress']);
 $ReceiverName = mysqli_real_escape_string($link,$_POST['ReceiverName']);
 $ReceiversEmail = mysqli_real_escape_string($link,$_POST['ReceiversEmail']);
 $ReceiversPhoneNumber = mysqli_real_escape_string($link,$_POST['ReceiversPhoneNumber']);
  $PackageDescription = mysqli_real_escape_string($link,$_POST['PackageDescription']);
 $Waybill = mysqli_real_escape_string($link,$_POST['Waybill']);
 $TransitPoints = mysqli_real_escape_string($link,$_POST['TransitPoints']);
 $TrackingNumber = mysqli_real_escape_string($link,$_POST['TrackingNumber']);


 if (empty($packageumber)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong>Receiver's Name Cannot Be Empty.
    </div>";
}

elseif (empty($packagetype)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong> Receiver's Address Cannot Be Empty.
    </div>";
}
elseif (empty($departuredatetime)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong> Receiver's Country Mode Cannot Be Empty.
    </div>";
}
elseif (empty($expectedarrivaldatetime)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong> Senders name Cannot Be Empty.
    </div>";
}


else{
    $me = rand();
    $me1 = rand();
// Attempt insert query execution
    $sql = "INSERT INTO track (packageumber,packagetype,departuredatetime,expectedarrivaldatetime,sendername,senderemail,senderaddress,senderphonenumber,origincity,DestinationCity, DeliveryAddress, ReceiverName, ReceiversEmail, ReceiversPhoneNumber,PackageDescription, Waybill, TransitPoints, TrackingNumber) 
    VALUES ('packageumber','$packagetype','$departuredatetime','$expectedarrivaldatetime','$sendername','$senderemail','$senderaddress','$senderphonenumber','$origincity','$DestinationCity', '$DeliveryAddress', '$ReceiverName', '$ReceiversEmail', '$ReceiversPhoneNumber','$PackageDescription', '$Waybill', '$TransitPoints', '$TrackingNumber')";
    if(mysqli_query($link, $sql)){
        echo "<div class='alert alert-success'>
        <strong>Success!</strong> Tracking Successfully Created.
        </div>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
}
// Close connection
mysqli_close($link);

?>

                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="post">
                                    <hr>
                                    <h2>JK Information</h2>
                                    <hr>
                                 <div class="form-group">
                                    <label><b>Package Number</b></label>
                                    <input type="text" name="packageumber" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><b>packagetype</b></label>
                                    <input type="text" name="packagetype" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><b>departuredatetime</b></label>
                                    <input type="date" name="departuredatetime" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label><b>expectedarrivaldatetime</b></label>
                                    <input type="time" name="expectedarrivaldatetime" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label><b>sendername</b></label>
                                    <input type="text" name="sendername" class="form-control" >
                                </div>
                                <hr>
                                <h2>Seller Information</h2>
                                <hr>
                                <div class="form-group">
                                    <label><b>senderemail</b></label>
                                    <input type="text" name="senderemail" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><b>senderaddress</b></label>
                                    <input type="text" name="senderaddress" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><b>senderphonenumber</b></label>
                                    <input type="text" name="senderphonenumber" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><b>origincity</b></label>
                                    <input type="text" name="origincity" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label><b>DestinationCity</b></label>
                                    <input type="text" name="DestinationCity" class="form-control">
                                </div>
                                <hr>
                                <h2>Product Details</h2>
                                <hr>
                                <div class="form-group">
                                    <label><b>DeliveryAddress</b></label>
                                    <input type="text" name="DeliveryAddress" class="form-control">
                                </div>
                            
                                <div class="form-group">
                                    <label><b>ReceiverName</b></label>
                                    <input type="text" name="ReceiverName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><b>ReceiversEmail</b></label>
                                    <input type="email" class="form-control" name="ReceiversEmail">
                                </div>
                                <div class="form-group">
                                    <label><b>ReceiversPhoneNumber</b></label>
                                    <input type="text" name="ReceiversPhoneNumber" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><b>PackageDescription</b></label>
                                    <input type="text" class="form-control" name="PackageDescription">
                                </div>
                                <div class="form-group">
                                    <label><b>Waybill</b></label>
                                    <input type="text" class="form-control" name="Waybill">
                                </div>
                                <div class="form-group">
                                    <label><b>Transit Points</b></label>
                                    <input type="text" class="form-control" name="TransitPoints">
                                </div>
                                <div class="form-group">
                                    <label><b>Tracking Number</b></label>
                                    <input type="text" class="form-control" name="TrackingNumber">
                                </div>
                        
                          <button type="submit" name="save" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-2">

            </div>
        </div>







        <!-- End PAge Content -->
        <?php include 'footer.php'; ?>