<?php

//delete.php

include("database.php");

if(isset($_POST["checkbox_value"]))
{
 for($count = 0; $count < count($_POST["checkbox_value"]); $count++)
 {
  $sql = "DELETE FROM `reseller` WHERE id = '".$_POST['checkbox_value'][$count]."'";
  $sql1 = "DELETE FROM `user` WHERE uid = '".$_POST['checkbox_value'][$count]."'";
//   $sql="delete from `transaction` where sl=$transid";
  $result=mysqli_query($conn,$sql);
  $result1=mysqli_query($conn,$sql1);

 }
}

if(isset($_POST["checkboxc_value"]))
{
 for($count = 0; $count < count($_POST["checkboxc_value"]); $count++)
 {
  $sql = "DELETE FROM `client` WHERE id = '".$_POST['checkboxc_value'][$count]."'";
  $result=mysqli_query($conn,$sql);

 }
}

if(isset($_POST["checkboxp_value"]))
{
 for($count = 0; $count < count($_POST["checkboxp_value"]); $count++)
 {
  $sql = "DELETE FROM `plan` WHERE id = '".$_POST['checkboxp_value'][$count]."'";
  $result=mysqli_query($conn,$sql);

 }
}

if(isset($_POST["checkboxr_value"]))
{
 for($count = 0; $count < count($_POST["checkboxr_value"]); $count++)
 {
  $sql = "DELETE FROM `reseller` WHERE id = '".$_POST['checkboxr_value'][$count]."'";
  $result=mysqli_query($conn,$sql);

 }
}

if(isset($_POST["checkboxi_value"]))
{
 for($count = 0; $count < count($_POST["checkboxi_value"]); $count++)
 {
  $sql = "DELETE FROM `invoice` WHERE invnumber='".$_POST['checkboxi_value'][$count]."'";
  $result=mysqli_query($conn,$sql);
  $sql = "DELETE FROM `finalinvoice` WHERE invnumber='".$_POST['checkboxi_value'][$count]."'";
  $result=mysqli_query($conn,$sql);

 }
}


?>
