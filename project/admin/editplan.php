<?php
include("database.php");
if (isset($_POST['checkbox_value'])) {
    $pid=$_POST['checkbox_value'];
    //echo $cid;
    $sql="SELECT id,name,speed,rate FROM plan WHERE id='$pid'";
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

if (isset($_POST['pid'])) {
    
    $pid=$_POST['pid'];
    $ename=$_POST['ename'];
    $espeed=$_POST['espeed'];
    $erate=$_POST['erate'];
    
    $sql="UPDATE plan SET name='$ename', speed='$espeed', rate='$erate' where id='$pid'";
    $result=mysqli_query($conn,$sql);

    
}
?>