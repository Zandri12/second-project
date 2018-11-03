<!DOCTYPE html>
<html>
<head>
	<title>ambil_data</title>
</head>
<body>
	<table border="2">
	<form method="POST" action="../update_member_proses">
		<input type="hidden" name="id" value="<?php echo $data_member['id']; ?>">
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama" value="<?php echo $data_member['Nama'];?>"></td>
			</tr>
			<tr>
				<td >jenis kelamin</td>
				<td><input type="radio" name="jenis" value="laki-laki" 
					<?php if($data_member['jenis_kelamin']=='laki-laki') echo "checked";?>>laki-laki<br>
					<input type="radio" name="jenis" value="perempuan" 
					<?php if($data_member['jenis_kelamin']=='perempuan') echo "checked";?>>perempuan</td>
			</tr>
			<tr>
				<td >kelas</td>
				<td><select name="Kelas" value="<?php echo $data['Kelas']; ?>">
			<option value="X TI1" <?php if($data_member['jenis_kelamin']=='X TI1') echo "selected";?>>XTI1
			<option value="X TI2" <?php if($data_member['Kelas']=='X TI2') echo "selected";?>>XTI2
			<option value="X TI3" <?php if($data_member['Kelas']=='X TI3') echo "selected";?>>XTI3
			<option value="X TI4" <?php if($data_memberdata_member['Kelas']=='X TI4') echo "selected";?>>XTI4
			<option value="X ADP 1"<?php if($data_member['Kelas']=='X ADP 1') echo "selected";?>>X ADP 1
			<option value="X ADP 2"<?php if($data_member['Kelas']=='X ADP 2') echo "selected";?>>X ADP 2
			<option value="X AKT" <?php if($data_member['Kelas']=='X AKT') echo "selected";?>>X AKT
			<option value="XI RPL1"<?php if($data_member['Kelas']=='XI RPL1') echo "selected";?>>XI RPL1
			<option value="XI RPL2"<?php if($data_member['Kelas']=='XI RPL2') echo "selected";?>>XI RPL 2
			<option value="XI MM1"<?php if($data_member['Kelas']=='XI MM1') echo "selected";?>>XI MM 1
			<option value="XI MM2"<?php if($data_member['Kelas']=='XI MM2') echo "selected";?>>XI MM2
			<option value="XI TKJ"<?php if($data_member['Kelas']=='XI TKJ') echo "selected";?>>XI TKJ
		</option></select></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="daftar_diri">
					<input type="reset" value="reset_data"> </td>
			</tr>
		
		</form>
	</table>
</body>
</html>