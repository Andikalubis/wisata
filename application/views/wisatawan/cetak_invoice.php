<table style="width: 50%">
	<h3>Invoice Pembayaran Anda</h3>

	<?php foreach($pesanan as $ps) : ?>

		<tr>
			<td>Nama Wisata</td>
			<td>:</td>
			<td><?php echo $ps->nama_wisata ?></td>
		</tr>

		<tr>
			<td>Tanggal Order</td>
			<td>:</td>
			<td><?php echo $ps->tgl_order ?></td>
		</tr>

		<tr>
			<td>Tanggal Booking</td>
			<td>:</td>
			<td><?php echo $ps->tgl_booking ?></td>
		</tr>

		<tr>
			<td>Harga Tiket / Hari</td>
			<td>:</td>
			<td>Rp. <?php echo number_format($ps->harga_tiket,0,',','.')?></td>
		</tr>

		<tr>
			<td>Jumlah Tiket</td>
			<td>:</td>
			<td><?php echo $ps->jumlah_tiket ?> Tiket</td>
		</tr>

		<tr>
			<td>Status Pembayaran</td>
			<td>:</td>
			<td>
				<?php
					if($ps->status_pembayaran == '0') {
						echo "On Proses";
					}else{
						echo"Lunas";
					}
				?>
			</td>
		</tr>

		<tr>
			<h5>Tiket berlaku sampai <?php echo $ps->tgl_selesai?> <?php echo $ps->waktu?></h5>
		</tr>

		<tr style="font-weight: bold; color: red">
			<td>TOTAL PEMBAYARAN</td>
			<td>:</td>
			<td>Rp. <?php echo number_format ($ps->harga_tiket * $ps->jumlah_tiket,0,',','.') ?></td>
		</tr>

		<tr>
			<td>Rekeneng Pembayaran</td>
			<td>:</td>
			<td><?php echo $ps->rekening ?></td>

		</tr>

	<?php endforeach; ?>

</table>

<script type="text/javascript">
	window.print();
</script>