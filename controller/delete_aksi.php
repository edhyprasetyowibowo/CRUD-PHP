<?php 
$conn = include("../config/database.php");
$id = $_GET['id'];
$delete = $conn->query("DELETE FROM profil WHERE id='$id'");
 
header("location:../view/index.php?alert=hapus");
?>