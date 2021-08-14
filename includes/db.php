<?php 

$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="cms";

$conn =  mysqli_connect($db_host,$db_user,$db_password,$db_name);
if (!$conn) {
    # code...
     die("Bağlantı Kuralamadı: ".mysqli_connect_error()) ; 
}
?>