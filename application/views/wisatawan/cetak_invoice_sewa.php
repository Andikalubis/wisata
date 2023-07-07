<table style="width: 50%">
	<h3>Invoice Pembayaran Anda</h3>

	<?php foreach($pesanan as $ps) : ?>

		<tr>
			<td>Nama Produk</td>
			<td>:</td>
			<td><?php echo $ps->nama_produk ?></td>
		</tr>

		<tr>
			<td>Deskripsi Produk</td>
			<td>:</td>
			<td><?php echo $ps->deskripsi_produk ?></td>
		</tr>

		<tr>
			<td>Tanggal Order</td>
			<td>:</td>
			<td><?php echo $ps->tgl_order_sewa ?></td>
		</tr>

		<tr>
			<td>Tanggal Sewa</td>
			<td>:</td>
			<td><?php echo $ps->tgl_sewa ?></td>
		</tr>

		<tr>
			<td>Tanggal Selesai Sewa</td>
			<td>:</td>
			<td><?php echo $ps->tgl_kembali ?></td>
		</tr>

		<tr>
			<?php
	            $x = strtotime($ps->tgl_kembali);
	            $y = strtotime($ps->tgl_sewa);
	            $jmlHari = abs(($x - $y)/(60*60*24));
	          ?>
			<td>Jumlah Hari Sewa</td>
			<td>:</td>
			<td><?php echo $jmlHari?> Hari</td>
		</tr>

		<tr>
			<td>Harga Sewa / Hari</td>
			<td>:</td>
			<td><?php echo $ps->harga_sewa ?></td>
		</tr>		

		<tr>
			<td>Status Pembayaran</td>
			<td>:</td>
			<td>
				<?php
					if($ps->status_bayar == '0') {
						echo "Belum Lunas";
					}else{
						echo"Lunas";
					}
				?>
			</td>
		</tr>

		<tr style="font-weight: bold; color: red">
			<td>TOTAL PEMBAYARAN</td>
			<td>:</td>
			<td>Rp. <?php echo number_format($ps->harga_sewa *$jmlHari,0,',','.')?></td>
		</tr>

		<tr>
			<td>Rekeneing Pembayaran</td>
			<td>:</td>
			<td>
				<ul>
					<li>BCA 123456789</li>
					<li>BRI 6543479542</li>
				</ul>
			</td>

		</tr>

	<?php endforeach; ?>

</table>

<script type="text/javascript">
	window.print();
</script>