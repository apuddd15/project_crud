<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH</title>
</head>
<body>
 
	<h2>TAMBAH DATA BUKU</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH BUKU</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>namabuku</td>
				<td><input type="number" name="namabuku"></td>
			</tr>
			<tr>
				<td>quantity</td>
				<td><input type="text" name="quantity"></td>
			</tr>
            <tr>
				<td>genre</td>
				<td><input type="text" name="genre"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>