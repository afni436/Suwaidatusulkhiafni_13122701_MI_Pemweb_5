<?php
$host = "localhost";
$dbname = "db_crud";
$username = "root";
$password = '';
$Conn = mysqli_connect($host,$username,$password,$dbname);

if(!$Conn){
    die("koneksi gagal");
}
echo "Koneksi berhasil";
?>