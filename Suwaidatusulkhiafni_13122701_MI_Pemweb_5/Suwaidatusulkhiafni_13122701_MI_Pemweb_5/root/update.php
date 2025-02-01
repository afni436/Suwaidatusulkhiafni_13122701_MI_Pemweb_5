<?php
require 'dbcrud.php';
$id = $_GET['id'];
//ambil data
$sql = " SELECT * From tbl_mahasiswa where id=$id";
$result = mysqli_query($Conn,$sql);
// Menambahkan fungsi tambah Data
if(isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $query = "UPDATE tbl_mahasiswa set nim='$nim', nama='$nama', email='$email' where id=$id";
    mysqli_query($conn, $query);
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
</head>
<body>

    <!--- Membuat Form Input Data -->
    <h1>menambah data mahasiswa</h1>
    <form action="" method="post">

    <table border="2">
        <tr>
            <td><label for="nim">NIM</label></td>
            <td><input type="text" name="nim" id="nim" value="[<?= $row['nim'];?>" require></td>
        </tr>
        <tr>
            <td><label for="nama">NAMA</label></td>
            <td><input type="text" name="nama" id="nama" value="[<?= $row['nama'];?>" require></td>
        </tr>
        <tr>
            <td><label for="e-mail">E-MAIL</label></td>
            <td><input type="email" name="email" id="email" value="[<?= $row['email'];?>" require></td>
        </tr>
        <tr>
            <td><button type="reset">RESET</button></td>
            <td><button type="submit" name="submit">Tambah Data</button></td>
        </tr>
    </table>
    </form>

