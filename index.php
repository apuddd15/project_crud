<!DOCTYPE html>
<html>
<head>
	<title>DATA BUKU PERPUSTAKAAN</title>
</head>
<body>
 
	<h2>BUKU-BUKU PERPUSTAKAAN</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAMABUKU</th>
			<th>QUANTITY</th>
			<th>GENRE</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from admin");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['namabuku']; ?></td>
				<td><?php echo $d['quantity']; ?></td>
				<td><?php echo $d['genre']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>