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
     $id1 = mysqli_real_escape_string($link,$_POST['id1']);
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


// Attempt insert query execution
        $sql =  "UPDATE track SET packageumber='$packageumber',packagetype='$packagetype',departuredatetime='$departuredatetime',expectedarrivaldatetime='$expectedarrivaldatetime',sendername='$sendername',senderemail='$senderemail', senderaddress='$senderaddress', senderphonenumber='$senderphonenumber', origincity='$origincity',DestinationCity='$DestinationCity',DeliveryAddress='$DeliveryAddress',ReceiverName='$ReceiverName', ReceiversEmail= '$ReceiversEmail', ReceiversPhoneNumber='$ReceiversPhoneNumber', Waybill='$Waybill', TransitPoints='$TransitPoints', TrackingNumber='$TrackingNumber'    WHERE track_id='$id1' ";
    if(mysqli_query($link, $sql)){
        echo "<div class='alert alert-success'>
        <strong>Success!</strong> Tracking Successfully Update.
        </div>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

}
// Close connection
mysqli_close($link);

?>

<?php 
include 'conn.php';
if($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM track WHERE track_id = {$id}";
    $result = $link->query($sql);

    $data = $result->fetch_assoc();

}

?>

                        </div>
                                   <div class="card-body">
                            <div class="basic-form">
                                <form method="post">
                                      <div class="form-group">
                                  <input type="hidden" name="id1" value="<?php echo $data["track_id"];?>" class="form-control" placeholder="Email">
                                </div>
                                    <hr>
                                    <h2>JK Information</h2>
                                    <hr>
                                 <div class="form-group">
                                    <label><b>Package Number</b></label>
                                    <input type="text" value="<?php echo $data["packageumber"];?>"  name="packageumber" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><b>packagetype</b></label>
                                    <input type="text" value="<?php echo $data["packagetype"];?>" name="packagetype" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><b>departuredatetime</b></label>
                                    <input type="date" value="<?php echo $data["departuredatetime"];?>" name="departuredatetime" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label><b>expectedarrivaldatetime</b></label>
                                    <input type="time" value="<?php echo $data["expectedarrivaldatetime"];?>" name="expectedarrivaldatetime" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label><b>sendername</b></label>
                                    <input type="text" value="<?php echo $data["sendername"];?>" name="sendername" class="form-control" >
                                </div>
                                <hr>
                                <h2>Seller Information</h2>
                                <hr>
                                <div class="form-group">
                                    <label><b>senderemail</b></label>
                                    <input type="text" value="<?php echo $data["senderemail"];?>" name="senderemail" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><b>senderaddress</b></label>
                                    <input type="text" value="<?php echo $data["senderaddress"];?>" name="senderaddress" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><b>senderphonenumber</b></label>
                                    <input type="text" name="senderphonenumber" value="<?php echo $data["senderphonenumber"];?>" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><b>origincity</b></label>
                                    <input type="text" name="origincity" value="<?php echo $data["origincity"];?>" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label><b>DestinationCity</b></label>
                                    <input type="text" value="<?php echo $data["DestinationCity"];?>" name="DestinationCity" class="form-control">
                                </div>
                                <hr>
                                <h2>Product Details</h2>
                                <hr>
                                <div class="form-group">
                                    <label><b>DeliveryAddress</b></label>
                                    <input type="text" value="<?php echo $data["DeliveryAddress"];?>" name="DeliveryAddress" class="form-control">
                                </div>
                            
                                <div class="form-group">
                                    <label><b>ReceiverName</b></label>
                                    <input type="text" value="<?php echo $data["ReceiverName"];?>" name="ReceiverName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><b>ReceiversEmail</b></label>
                                    <input type="email" value="<?php echo $data["ReceiversEmail"];?>" class="form-control" name="ReceiversEmail">
                                </div>
                                <div class="form-group">
                                    <label><b>ReceiversPhoneNumber</b></label>
                                    <input type="text" value="<?php echo $data["ReceiversPhoneNumber"];?>" name="ReceiversPhoneNumber" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label><b>PackageDescription</b></label>
                                    <input type="text" value="<?php echo $data["PackageDescription"];?>" class="form-control" name="PackageDescription">
                                </div>
                                <div class="form-group">
                                    <label><b>Waybill</b></label>
                                    <input type="text" value="<?php echo $data["Waybill"];?>" class="form-control" name="Waybill">
                                </div>
                                <div class="form-group">
                                    <label><b>Transit Points</b></label>
                                    <input type="text" value="<?php echo $data["TransitPoints"];?>"  class="form-control" name="TransitPoints">
                                </div>
                                <div class="form-group">
                                    <label><b>Tracking Number</b></label>
                                    <input type="text" value="<?php echo $data["TrackingNumber"];?>" class="form-control" name="TrackingNumber">
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