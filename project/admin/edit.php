<?php
include 'database.php';

if (isset($_POST['checkbox_value'])) {
    
    $cid=$_POST['checkbox_value'];
    
    $sql="SELECT * FROM user WHERE uid='$cid'";
    $result=mysqli_query($conn,$sql);
    
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


if (isset($_POST['packageid'])) {
    
    $cid=$_POST['packageid'];
    
    $sql="SELECT id,name,rate FROM plan WHERE id='$cid'";
    $result=mysqli_query($conn,$sql);
    
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

if (isset($_POST['checkboxer_value'])) {
    
    $cid=$_POST['checkboxer_value'];
    
    $sql="SELECT * FROM reseller WHERE id='$cid'";
    $result=mysqli_query($conn,$sql);
    
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



//update quary 

if (isset($_POST['urid'])) {


    $uid=$_POST['urid'];
    $user=$_POST['edituser'];
    $pass=$_POST['editPassword'];
    $name=$_POST['editName'];
    $mob=$_POST['editMobile'];
    $email=$_POST['editEmail'];
    $type=$_POST['editType'];
    

    $sql="UPDATE user SET username='$user', password='$pass', email='$email',type='$type',cell='$mob',name='$name' where uid='$uid'";
    $result=mysqli_query($conn,$sql);
    
}


if (isset($_POST['resID'])) {

    $rsid=$_POST['resID'];
    $user=$_POST['resUser'];
    $pass=$_POST['resPass'];
    $name=$_POST['resName'];
    $mob=$_POST['resMobile'];
    $email=$_POST['resEmail'];
    $address=$_POST['resAddress'];
    $dob=$_POST['resDOB'];
    $nid=$_POST['resNID'];

    echo json_encode($rsid);

    $sql="UPDATE reseller SET username='$user', password='$pass', email='$email', address='$address', dob='$dob', nid='$nid',cell='$mob', name='$name' where id='$rsid'";

    $result=mysqli_query($conn,$sql);
    
}



?>