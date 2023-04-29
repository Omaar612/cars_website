<?php 
$conn = new mysqli('localhost','root','','sha3ban') ;
if ($conn->connect_errno)
{
    echo $conn->connect_errno;
}
?>