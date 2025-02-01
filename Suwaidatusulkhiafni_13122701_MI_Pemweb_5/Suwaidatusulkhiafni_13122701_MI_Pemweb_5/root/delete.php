<?php
require 'dbConn.php';
$id = $_GET['id'];
mysqli_query($Conn, "DELETE From tbl_mahasiswa where id=$id");
header("location:index.php");
exit;
?>