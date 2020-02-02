<?php 
$conn = include("../config/database.php");
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$insert = $conn->query("INSERT INTO profil (nama, alamat)VALUES('$nama','$alamat')");

header("location:../view/index.php?alert=input");
?>