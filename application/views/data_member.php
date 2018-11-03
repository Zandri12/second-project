<!DOCTYPE html>
<html>
<head>
	<title>data_member</title>
</head>
<body>
	<h1 align="center">HI NEW MEMBERS WANT TO JOIN US?</h1>
	<p align="center"><?php echo anchor('anggota/tambah_data_anggota','tambah_data');
	?></p>
<table border="2" align="center">
			<tr border="2">
				<td colspan="6" align="center">data utama</td>
			<tr>
				<td align="center">id</td>
				<td align="center">nama</td>
				<td align="center">jenis kelamin</td>
				<td align="center">kelas</td>
				<td align="center" colspan="2">Action</td>

			</tr>
			<?php $No=1;
			foreach ($data_member as $key) {
			?>
			<tr>

				<td><?php echo $key['id'];?></td>
				<td><?php echo $key['Nama'];?></td>
				<td><?php echo $key['jenis_kelamin'];?></td>
				<td><?php echo $key['Kelas'];?></td>
				<td><?php echo anchor('anggota/edit_data_member/'.$key['id'],'EDIT');?></td>
				<td><?php echo anchor('anggota/delete_member/'.$key['id'],'HAPUS');?></td>
			</tr>
		<?php } ?>
</table>
</body>
</html>