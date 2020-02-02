<?php 
 
$conn = include("../config/database.php");
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
 
$update = $conn->query("UPDATE profil SET nama='$nama', alamat='$alamat' WHERE id='$id'");
 
header("location:../view/index.php?alert=update");
 
?>