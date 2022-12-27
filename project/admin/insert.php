<?php
include 'database.php';

// echo "Done";
$date=date("Y-m-d");

extract($_POST);

if (isset($_POST['nameSend']) && isset($_POST['userSend']) && isset($_POST['passwordSend']) && isset($_POST['emailSend']) && isset($_POST['mobileSend']) && isset($_POST['typeSend'])) {
    
    $sql="insert into `user` (username,password,name,email,cell,type) values ('$userSend','$passwordSend','$nameSend','$emailSend','$mobileSend','$typeSend')";
    $result=mysqli_query($conn,$sql);

}


if (isset($_POST['userSend']) && isset($_POST['itemSend']) && isset($_POST['fromdateSend']) && isset($_POST['todateSend']) && isset($_POST['qtySend']) && isset($_POST['priceSend']) && isset($_POST['totalSend']) && isset($_POST['invoicenoSend'])) {
    
    $sql="insert into `invoice` (invnumber,username,startdate,enddate,item,itemqty,itemprice,totalamount) values ('$invoicenoSend','$userSend','$fromdateSend','$todateSend','$itemSend','$qtySend','$priceSend','$totalSend')";
    $result=mysqli_query($conn,$sql);

}


if (isset($_POST['invoiceNoSend']) && isset($_POST['userSend']) && isset($_POST['invoiceDateSend']) && isset($_POST['dueDateSend']) && isset($_POST['totalSend']) && isset($_POST['totalvatSend']) && isset($_POST['totalbillSend'])) {
    
    $sql="insert into `finalinvoice` (invnumber,username,date,duedate,subtotal,vatamount,totalamount) values ('$invoiceNoSend','$userSend','$invoiceDateSend','$dueDateSend','$totalSend','$totalvatSend','$totalbillSend')";
    $result=mysqli_query($conn,$sql);
}


if (isset($_POST['username']) && 
    isset($_POST['password']) && 
    isset($_POST['fullname']) && 
    isset($_POST['nid']) && 
    isset($_POST['dob']) && 
    isset($_POST['address']) && 
    isset($_POST['email']) && 
    isset($_POST['mobile']) && 
    isset($_POST['actdate']) && 
    isset($_POST['duedate']) && 
    isset($_POST['package']) &&
    isset($_POST['prate']) && 
    isset($_POST['otc']) && 
    isset($_POST['dueBalance']) && 
    isset($_POST['paidBalance'])) {

    $balance=($paidBalance-$dueBalance);
    

    if($balance==0||$balance>0){
        $status="1";
    }

    else {
        $status="0";
    }

    $sql="insert into `client` (username,password,fullname,nid,dob,address,email,cell,package,activationdate,duedate,duebalance,otc,status) values ('$username','$password','$fullname','$nid','$dob','$address','$email','$mobile','$package','$actdate','$duedate','$balance','$otc','$status')";
    $result=mysqli_query($conn,$sql);
        
}

if (isset($_POST['pname']) && isset($_POST['pkrate']) && isset($_POST['pspeed']) ) {

    $sql="insert into `plan` (name,speed,rate) values ('$pname','$pspeed','$pkrate')";
    $result=mysqli_query($conn,$sql);
        
}



?>