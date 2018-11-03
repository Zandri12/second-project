<!DOCTYPE html>
<html>
<head>
	<title>data_buku</title>
</head>
<body><h1 align="center">0psiData</h1>
	<
	<p align="center">====klik👇👇👇==== </p>
	<p align="center"><?php echo anchor('crud/tambah_data_buku','tambah_data');?></p>
<table border="2" align="center">
			<tr border="2">
				<td colspan="5" align="center">data buku</td>
			</tr>
			<tr>
				<td align="center">id_buku</td>
				<td align="center">judul_buku</td>
				<td align="center">tanggal_peminjaman</td>
				<td align="center" colspan="2">aksi</td>
			</tr>
			<?php $No=1;
			foreach ($data_buku as $key) {
			?>
			<tr>
				<td><?php echo $key['id_buku'];?></td>
				<td><?php echo $key['judul_buku'];?></td>
				<td><?php echo $key['tanggal_peminjaman'];?></td>
				<td><?php echo anchor('crud/edit_data_buku/'.$key['id_buku'],'EDIT');?></td>
				<td><?php echo anchor('crud/delete_buku/'.$key['id_buku'],'HAPUS');?></td>
			</tr>
		<?php } ?>
</table>
</body>

</html>