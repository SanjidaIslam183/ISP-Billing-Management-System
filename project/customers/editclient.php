<?php
include("database.php");
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
    
    $sql="UPDATE client SET username='$username', password='$password', fullname='$fullname', nid='$nid', dob='$dob', address='$address', cell='$mobile', email='$email' where id='$cid'";
    $result=mysqli_query($conn,$sql);

    
}
?>