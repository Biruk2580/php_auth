<?php
$host = 'localhost';
$username='root';
$password='';
$db = 'DUOLS';
$conn = mysqli_connect($host, $username, $password, $db);
if($conn){
}else{
    echo "DB Not Connected";
}
?>