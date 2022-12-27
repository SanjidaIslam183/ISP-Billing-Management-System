<?php
include 'database.php';

//update quary for client
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

    $balance=($dueBalance-$paidBalance);
    
    if($balance==0||$balance>0){
        $status="1";
    }

    else {
        $status="0";
    }


    $sql="UPDATE client 
    SET 
    username='$username', 
    password='$password', 
    fullname='$fullname', 
    nid='$nid',
    dob='$dob',
    address='$address',
    cell='$mobile',
    package='$package',
    activationdate='$actdate',
    duedate='$duedate',
    duebalance='$duebalance',
    otc='$otc',
    status='$status 
    where uid='$cid'";

    $result=mysqli_query($conn,$sql);

    
}




?>