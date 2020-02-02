<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan data dari database</title>
</head>
<body>
	<div class="head">		
		<h2>Menampilkan data dari database</h2>
	</div>
	<a class="tombol" href="add.php">+ Tambah Data</a><br>
	<?php 
		if(isset($_GET['alert'])){
			$alert = $_GET['alert'];
			if($alert == "input"){
				echo "Data berhasil di input.";
			}else if($alert == "update"){
				echo "Data berhasil di update.";
			}else if($alert == "hapus"){
				echo "Data berhasil di hapus.";
			}
		}
	?>
	<br>
	<h3>Data Profil</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		$conn = include("../config/database.php");
		$query_mysql = $conn->query("SELECT * FROM profil");
		$no = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td>
				<a class="edit" href="update.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" onclick="return confirm('Yakin akan Menghapus data?')" href="../controller/delete_aksi.php?id=<?php echo $data['id']; ?>">Hapus</a>									
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>