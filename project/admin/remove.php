<?php
include 'database.php';
if (isset($_POST['removeSend'])) {
    
    $transid=$_POST['removeSend'];
    $sql="delete from `transaction` where sl=$transid";
    $result=mysqli_query($conn,$sql);

}
?>