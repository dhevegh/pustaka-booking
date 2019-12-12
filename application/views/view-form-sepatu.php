<html>
<head>
	<title>Form Input Sepatu</title>
</head>
<body>
	<center>
		<form action="<?=base_url('sepatu/cetak');?>" method="post">
			<table>
				<tr>
					<th colspan="3">
						Form Input Pembelian sepatu
					</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr>
					</td>
				</tr>
				<tr>
					<td>Nama Pembeli</td>
					<td>:</td>
					<td>
						<input type="text" name="nama" id="nama">
					</td>
				</tr>
				<tr>
					<td>No Handphone</td>
					<td>:</td>
					<td>
						<input type="text" name="nomor" id="nomor">
					</td>
				</tr>
				<tr>
					<td>Merk</td>
					<td>:</td>
					<td>
						<select name="merk">
							<option value="">Pilih Merk</option> 
							<option value="Nike">Nike</option> <!-- isi di value harus sama kayak merk nya biar pas tampil datanya lengkap -->
							<option value="Adidas">Adidas</option> <!-- isi di value harus sama kayak merk nya biar pas tampil datanya lengkap -->
							<option value="Kickers">Kickers</option> <!-- isi di value harus sama kayak merk nya biar pas tampil datanya lengkap -->
							<option value="Eiger">Eiger</option> <!-- isi di value harus sama kayak merk nya biar pas tampil datanya lengkap -->
							<option value="Bucherri">Bucherri</option> <!-- isi di value harus sama kayak merk nya biar pas tampil datanya lengkap -->
							<option value="Fila X BTS">Fila X BTS</option> <!-- isi di value harus sama kayak merk nya biar pas tampil datanya lengkap -->
							<option value="Puma X BTS">Puma X BTS</option> <!-- isi di value harus sama kayak merk nya biar pas tampil datanya lengkap -->
							<option value="Reebook BT21">Reebook BT21</option> <!-- isi di value harus sama kayak merk nya biar pas tampil datanya lengkap -->
							<option value="Yongki Komaladi">Yongki Komaladi</option> <!-- isi di value harus sama kayak merk nya biar pas tampil datanya lengkap -->
						</select> 
					</td>
				</tr>
				<tr>
					<td>Size</td>
					<td>:</td>
					<td>
						<select name="size">
							<option value="">Pilih Size</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							<option value="39">39</option>
							<option value="40">40</option>
							<option value="41">41</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
						</select> 
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