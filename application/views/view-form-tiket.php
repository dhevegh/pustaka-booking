<html>
<head>
	<title>Form Input Tiket</title>
</head>
<body>
	<center>
		<form action="<?=base_url('tiket/cetak');?>" method="post">
			<table>
				<tr>
					<th colspan="3">
						Form Input Pembelian Tiket
					</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr>
					</td>
				</tr>
				<tr>
					<td>Nama Admin</td>
					<td>:</td>
					<td>
						<input type="text" name="nama" id="nama">
					</td>
				</tr>
				</tr>
				<tr>
					<td>Nama Pembeli</td>
					<td>:</td>
					<td>
						<input type="text" name="nama" id="nama">
					</td>
				</tr>
				<tr>
					<td>No HP</td>
					<td>:</td>
					<td>
						<input type="text" name="nomor" id="nomor">
					</td>
				</tr>
				<tr>
					<td>Rute</td>
					<td>:</td>
					<td>
						<select name="rute">
							<option value="">Pilih Rute</option> 
							<option value="Bogor-Boyolali">Bogor-Boyolali</option> <!-- isi di value harus sama kayak merk nya biar pas tampil datanya lengkap -->
							<option value="Jakarta-Bandung">Jakarta-Bandung</option> <!-- isi di value harus sama kayak merk nya biar pas tampil datanya lengkap -->
							<option value="Jakarta-Banyuwangi">Jakarta-Banyuwangi</option> <!-- isi di value harus sama kayak merk nya biar pas tampil datanya lengkap -->
							<option value="Bandung-Banyumas">Bandung-Banyumas</option> <!-- isi di value harus sama kayak merk nya biar pas tampil datanya lengkap -->
							<option value="Bandung-Brebes">Bandung-Brebes</option> <!-- isi di value harus sama kayak merk nya biar pas tampil datanya lengkap -->
						</select> 
					</td>
				</tr>
				<tr>
					<td>Jumlah Tiket</td>
					<td>:</td>
					<td>
						<input type="text" name="nomor" id="nomor">
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>