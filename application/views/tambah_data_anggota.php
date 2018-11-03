<!DOCTYPE html>
<html>
<head>
	<title>tambah_data_anggota</title>
</head>
<body>
	<h1 align="center">tambah DATA anggota </h1>
	<table border="2" align="center" >
		<form method="POST" action="tambah_data_member">
			<tr>
				<td >id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td >jenis kelamin</td>
				<td><input type="radio" name="jenis" value="laki-laki">laki-laki<br>
					<input type="radio" name="jenis" value="perempuan">perempuan</td>
			</tr>
			<tr>
				<td >kelas</td>
				<td><select name="Kelas"><option value="X TI1">XTI1
					<option value="X TI2">XTI2
					<option value="X TI3">XTI3
					<option value="X TI4">XTI4
					<option value="X ADP 1">X ADP 1
					<option value="X ADP 2">X ADP 2
					<option value="X AKT">X AKT
					<option value="XI RPL1">XI RPL1
					<option value="XI RPL2">XI RPL 2
					<option value="XI MM1">XI MM 1
					<option value="XI MM2">XI MM2
					<option value="XI TKJ">XI TKJ
				</option></select></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value="daftar_diri">
					<input type="reset" value="reset_data"> </td>
			</tr>
		</form>
</body>
</html>