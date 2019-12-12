<html>

<head>
	<title>Tampil Data Pembelian</title>
</head>

<body>

	 <?php
		//Rumus untuk menentukan harga sepatu
		
        switch($merk) {
         	case 'Nike':
				$harga = 750000; //sebelumnya gak pake tanda $, makanya error. dia itu variabel jadi harus pake tanda $
         		break;
         	case 'Adidas':
				$harga = 300000;  //sebelumnya gak pake tanda $, makanya error. dia itu variabel jadi harus pake tanda $
				break;
			case 'Kickers':
				$harga = 250000; //sebelumnya gak pake tanda $, makanya error. dia itu variabel jadi harus pake tanda $
         		break;
         	case 'Eiger':
         		$harga = 250000; //sebelumnya gak pake tanda $, makanya error. dia itu variabel jadi harus pake tanda $
         		break;
         	case 'Bucherri':
         		$harga = 275000;  //sebelumnya gak pake tanda $, makanya error. dia itu variabel jadi harus pake tanda $
         		break;
         	case 'Fila X BTS':
         		$harga = 1999000; //sebelumnya gak pake tanda $, makanya error. dia itu variabel jadi harus pake tanda $
         		break;
         	case 'Puma X BTS':
         		$harga = 2145000; //sebelumnya gak pake tanda $, makanya error. dia itu variabel jadi harus pake tanda $
         		break;
         	case 'Reebook BT21':
         		$harga = 1775000;  //sebelumnya gak pake tanda $, makanya error. dia itu variabel jadi harus pake tanda $
         		break;
         	case 'Yongki Komaladi':
         		$harga = 200000; //sebelumnya gak pake tanda $, makanya error. dia itu variabel jadi harus pake tanda $
         		break;
         	default:
         		$harga = "merk tidak ditemukan!"; //sebelumnya gak pake tanda $, makanya error. dia itu variabel jadi harus pake tanda $
         		break;
		 } 
		 
       
        //Grand Total
        $total = $harga;
       
    ?>
	<center>
		<table>
			<tr>
				<th colspan="3">Tampil Data Sepatu</th> 
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
					<?= $nama; ?>
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
				<td>Merk</td>
				<td>:</td>
				<td>
					<?= $merk; ?>
				</td>
			</tr>
			<tr>
				<td>Size</td>
				<td>:</td>
				<td>
					<?= $size; ?>
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
					<?= $total; ?>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<a href="<?= base_url('sepatu'); ?>">Kembali<a/>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>