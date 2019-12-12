<html>

<head>
	<title>Tampil Data Pembelian Tiket</title>
</head>

<body>

	 <?php
		//Rumus untuk menentukan harga sepatu
		
        switch($rute) {
         	case 'Bogor-Boyolali':
				$harga = 150000; //sebelumnya gak pake tanda $, makanya error. dia itu variabel jadi harus pake tanda $
         		break;
         	case 'Jakarta-Bandung':
				$harga = 100000;  //sebelumnya gak pake tanda $, makanya error. dia itu variabel jadi harus pake tanda $
				break;
			case 'Jakarta-Banyuwangi':
				$harga = 125000; //sebelumnya gak pake tanda $, makanya error. dia itu variabel jadi harus pake tanda $
         		break;
         	case 'Bandung-Banyumas':
         		$harga = 80000; //sebelumnya gak pake tanda $, makanya error. dia itu variabel jadi harus pake tanda $
         		break;
         	case 'Bandung-Brebes':
         		$harga = 70000;  //sebelumnya gak pake tanda $, makanya error. dia itu variabel jadi harus pake tanda $
         		break;
         	default:
         		$harga = "rute tidak ditemukan!"; //sebelumnya gak pake tanda $, makanya error. dia itu variabel jadi harus pake tanda $
         		break;
		 } 
		 
       
        //Grand Total
        $total = $harga;
       
    ?>
	<center>
		<table>
			<tr>
				<th colspan="3">Tampil Data Tiket</th> 
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
					<?= $admin; ?>
				</td>
			</tr>
			<tr>
				<td>Nama Pembeli</td>
				<td>:</td>
				<td>
					<?= $pembeli; ?>
				</td>
			</tr>
			<tr>
				<td>No HP</td>
				<td>:</td>
				<td>
					<?= $nomor; ?>
				</td>
			</tr>
			<tr>
				<td>Rute</td>
				<td>:</td>
				<td>
					<?= $rute; ?>
				</td>
			</tr>
			<tr>
				<td>Jumlah Tiket</td>
				<td>:</td>
				<td>
					<?= $jumlah; ?>
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td>
					<?= $harga; ?>
				</td>
			</tr>
			<tr>
				<td>Total</td>
				<td>:</td>
				<td>
					<?= $total * $jumlah; ?>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<a href="<?= base_url('tiket'); ?>">Kembali<a/>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>