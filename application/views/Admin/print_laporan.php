<h3 style="text-align: center">Laporan Transaksi</h3>
<table>
	<tr>
		<td>Dari Tanggal</td>
		<td>:</td>
		<td><?php echo date('d-M-Y',strtotime($_GET['dari'])); ?></td>
	</tr>
	<tr>
		<td>Sampai Tanggal</td>
		<td>:</td>
		<td><?php echo date('d-M-Y',strtotime($_GET['sampai'])); ?></td>
	</tr>
</table>

<table class="table table-bordered mt-4">
  <thead>
    <tr>
      <th>No</th>
      <th>Customer</th>
      <th>Tanggal Order</th>
      <th>Tanggal Booking</th>
      <th>Harga Tiket</th>
      <th>Jumlah Tiket</th>
      <th>Total Pembayaran</th>
      <th>Nomor WA</th>
      <th>Alamat Wisatawan</th>
      <th>Cek Pembayaran</th>
    </tr>
  </thead>
  <tbody>
   <?php
   $no=1;
   foreach($laporan as $lp) : ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $lp->email ?></td>
      <td><?php echo $lp->tgl_order ?></td>
      <td><?php echo $lp->tgl_booking ?></td>
      <td>Rp. <?php echo number_format($lp->harga_tiket,0,',','.')?></td>
      <td><?php echo $lp->jumlah_tiket ?> Tiket</td>
      <td>Rp. <?php echo number_format($lp->jumlah_tiket * $lp->harga_tiket,0,',','.') ?></td>
      <td><?php echo $lp->no_hp ?></td>
      <td><?php echo $lp->alamat_wisatawan ?></td>
      <td>
        <center>
          <?php
          if(empty($lp->bukti_transfer)) {?>
            <button class="btn btn-sm btn-danger">Belum transfer</i></button>
            <?php }else{ ?>
              <a class="btn bg-lightblue" href="<?php echo base_url('adminwisata/pembayaran_tiket/'.$lp->id_tiket) ?>">Cek Transfer</a>
              <?php } ?>
        </center>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<script type="text/javascript">
	window.print();
</script>
