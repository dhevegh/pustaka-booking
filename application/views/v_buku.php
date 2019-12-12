<section>
	<table border="1">
		<h1><?= $judul ?></h1>
		<tr>
			<th>no</th>
			<th>id</th>
			<th>judul buku</th>
			<th>kategori</th>
			<th>pengarang</th>
			<th>penerbit</th>
			<th>tahun terbit</th>
			<th>isbn</th>
			<th>stok</th>
			<th>dipinjam</th>
			<th>dibooking</th>
			<th>image</th>
			<th colspan="2">aksi</th>

		</tr>

		<?php
		$no=1;
		foreach ($buku as $buku) :
		?>


		<tr>
			<td><?= $no; ?> </td>
			<td><?= $buku->id; ?></td>
			<td><?= $buku->judul_buku; ?></td>
			<td><?= $buku->id_kategori; ?></td>
			<td><?= $buku->pengarang; ?></td>
			<td><?= $buku->penerbit; ?></td>
			<td><?= $buku->tahun_terbit; ?></td>
			<td><?= $buku->isbn; ?></td>
			<td><?= $buku->stok; ?></td>
			<td><?= $buku->dipinjam; ?></td>
			<td><?= $buku->dibooking; ?></td>
			<td><?= $buku->image; ?></td>
			<td>
				<a href="">Edit</a>
			</td>
			<td>
				<a href="">Hapus</a>
			</td>
		</tr>

		<?php
		$no = $no +1;
		endforeach
	?>
	</table>