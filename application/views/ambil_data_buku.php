<!DOCTYPE html>
<html>
<head>
	<title>ambil_data</title>
</head>
<body>
	<table border="2">
	<form method="POST" action="../update_buku_proses">
		<input type="hidden" name="id_buku" value='<?php echo $data_buku['id_buku'];?>'>
	<tr>
				<td>judul_buku</td>
				<td><input type="text" name="jb" value='<?php echo $data_buku['judul_buku'];?>'
				></td>
			</tr>
			<tr>
				<td>tanggal_peminjaman</td>
				<td><input type="date" name="tp"value="<?php echo $data_buku['tanggal_peminjaman'];?>"></td>
			</tr>
			<tr>
				<td>inputan</td>
				<td><input type="submit" value="daftar" >
					<input type="reset" value="reset" ></td>
			</tr>
		</form>
	</table>
</body>
</html>