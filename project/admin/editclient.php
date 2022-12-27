<?php
include("database.php");
if (isset($_POST['checkbox_value'])) {
    $cid=$_POST['checkbox_value'];
    //echo $cid;
    $sql="SELECT id,username,password,fullname,nid,dob,address,email,cell,package,activationdate,duedate,duebalance,otc FROM client WHERE id='$cid'";
    $result=mysqli_query($conn,$sql);
    //$response=array();

    $response=array();

    while($row=mysqli_fetch_assoc($result)){
        $response=$row;
    }

    echo json_encode($response);
}

else{
$response['status']=200;
$response['message']="Invalid or data Not Found";
}

if (isset($_POST['cid'])) {
    
    $cid=$_POST['cid'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $fullname=$_POST['fullname'];
    $nid=$_POST['nid'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $actdate=$_POST['actdate'];
    $duedate=$_POST['duedate'];
    $package=$_POST['package'];
    $prate=$_POST['prate'];
    $otc=$_POST['otc'];
    $dueBalance=$_POST['dueBalance'];
    $paidBalance=$_POST['paidBalance'];

    $balance=($paidBalance-$dueBalance);
    
    if($balance==0||$balance>0){
        $status="1";
    }

    else {
        $status="0";
    }


    $sql="UPDATE client SET username='$username', password='$password', fullname='$fullname', nid='$nid', dob='$dob', address='$address', cell='$mobile', package='$package', activationdate='$actdate', duedate='$duedate', duebalance='$balance', otc='$otc', status='$status' where id='$cid'";
    $result=mysqli_query($conn,$sql);

    
}
?>