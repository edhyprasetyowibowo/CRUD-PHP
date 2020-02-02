<!DOCTYPE html>
<html>
<head>
	<title>Insert data ke database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Insert data ke database</h1>
	</div>
	
	<br/>
 
	<a href="../view/index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data</h3>
	<form action="../controller/add_aksi.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>