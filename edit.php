<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from admin where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				
				<tr>
					<td>namabuku</td>
					<td><input type="text" name="namabuku" value="<?php echo $d['namabuku']; ?>"></td>
				</tr>
				<tr>
					<td>quantity</td>
					<td><input type="number" name="quantity" value="<?php echo $d['quantity']; ?>"></td>
				</tr>
				<tr>
					<td>genre</td>
					<td><input type="text" name="genre" value="<?php echo $d['genre']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>