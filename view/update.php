<!DOCTYPE html>
<html>
<head>
	<title>Update data ke database</title>
</head>
<body>
	<div class="judul">		
		<h1>Update data ke database</h1>
	</div>
	
	<br/>
 
	<a href="../view/index.php">Lihat Semua Data</a>
 
	<br/>	
	<h3>Edit data</h3>
	<?php 
	$conn = include("../config/database.php");
	$id = $_GET['id'];
	$query_mysql = $conn->query("SELECT * FROM profil WHERE id='$id'");
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="../controller/update_aksi.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>