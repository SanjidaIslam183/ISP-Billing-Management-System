<?php
$host="localhost";
$user="root";
$pass="";
$database="billing";


$conn=new mysqli("$host","$user","$pass","$database");

if (!$conn) {
    echo "Have Some Problem Please Check Carefully";
    die(mysqli_error($conn));
}

?>