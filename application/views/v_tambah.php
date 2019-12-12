<!DOCTYPE html>
<html>
<head>
	<title>Form Input MataKuliah</title>
</head>
<body>
	<center>
		<form action="<?= base_url('web/tambah_act'); ?>" method="POST">
			<table>
				<tr>
					<th colspan="3">
						Form Input Data Mata Kuliah
					</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr>
					</td>
				</tr>
				<tr>
					<th style="text-align: left;">Id Buku</th>
					<th>:</th>
					<td>
						<input type="text" name="id" value=""><br>
					</td>
				</tr>

				<tr>
					<th style="text-align: left;">Judul Buku</th>
					<th>:</th>
					<td>
						<input type="text" name="judul_buku">
					</td>
				</tr>
				<tr>
					<th style="text-align: left;">Id Kategori</th>
					<th>:</th>
					<td>
						<input type="text" name="id_kategori">
					</td>
				</tr>
				<tr>
					<th style="text-align: left;">Pengarang</th>
					<th>:</th>
					<td>
						<input type="text" name="pengarang">
					</td>
				</tr>
				<tr>
					<th style="text-align: left;">Penerbit</th>
					<th>:</th>
					<td>
						<input type="text" name="penerbit">
					</td>
				</tr>
				<tr>
					<th style="text-align: left;">Tahun Terbit</th>
					<th>:</th>
					<td>
						<input type="year" name="tahun_terbit">
					</td>
				</tr>
				<tr>
					<th style="text-align: left;">ISBN</th>
					<th>:</th>
					<td>
						<input type="text" name="isbn">
					</td>
				</tr>
				<tr>
					<th style="text-align: left;">Stok</th>
					<th>:</th>
					<td>
						<input type="text" name="stok">
					</td>
				</tr>
				<tr>
					<th style="text-align: left;">Status</th>
					<th>:</th>
					<td>
						<input type="text" name="dipinjam">
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" value="submit">
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>