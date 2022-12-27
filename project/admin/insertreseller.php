<?php
include 'database.php';

// echo "Done";
$date=date("Y-m-d");
extract($_POST);

if (isset($_POST['username']) && 
    isset($_POST['password']) && 
    isset($_POST['name']) && 
    isset($_POST['nid']) && 
    isset($_POST['dob']) && 
    isset($_POST['address']) && 
    isset($_POST['email']) && 
    isset($_POST['mobile'])) {

    $sql="insert into reseller (username,password,name,nid,dob,address,email,cell) values ('$username','$password','$name','$nid','$dob','$address','$email','$mobile')";
    $result=mysqli_query($conn,$sql);
    
    
}


?>