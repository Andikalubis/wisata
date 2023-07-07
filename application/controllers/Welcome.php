<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
}

                    <?php echo $this->session->flashdata('pesan') ?>
                    <?php echo $this->session->flashdata('message') ?>
                    
                     <div class="card">
                        <div class="card-header">
                           Pesanan Tiket Wisata
                        </div>
                        
                        <div class="card-body">
                            <table class="table table-bordered table-stripped">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Customer</th>
                                    <th>Nama Wisata</th>
                                    <th>Harga Tiket</th>
                                    <th>Jumlah Tiket</th>
                                    <th>Action</th>
                                </tr>

                                <?php $no=1; foreach($pesanan as $ps) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $ps->name ?></td>
                                    <td><?php echo $ps->nama_wisata?></td>
                                    <td>Rp. <?php echo number_format($ps->harga_tiket,0,',','.')?></td>
                                    <td><?php echo $ps->jumlah_tiket?></td>
                                    <td>
                                        <?php if($ps->status_beli == 'Selesai') { ?>
                                            <button class="btn btn-sm btn-danger">Pembayaran Selesai</button>

                                        <?php } else { ?>
                                            <a href="<?php echo base_url('wisatawan/pembayaran_tiket/'.$ps->id_tiket) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                                        <?php } ?>
                                        
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </table>
                        </div>
                    </div>

                    
                    <div class="card">
                        <div class="card-header">
                            Form Tiket Wisata
                        </div>
                        
                        <div class="card-body">
                            <?php foreach($detail as $dt) : ?>

                                <form method="POST" action="<?php echo base_url('wisatawan/tambah_tiket_aksi') ?>">
                                    <div class="form-group">
                                        <label class="labels">Harga Tiket / Hari</label>
                                        <input type="hidden" name="id_wisata" value="<?php echo $dt->id_wisata ?>">
                                         <input type="hidden" name="email_admin" value="<?php echo $dt->email_admin ?>">
                                        <input type="hidden" name="nama_wisata" value="<?php echo $dt->nama_wisata ?>">
                                        <input type="text" class="form-control" name="harga_tiket" value="<?php  echo $dt->harga_tiket ?>" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label class="labels">Tanggal Booking Tiket</label>
                                        <input type="date" class="form-control" name="tgl_booking">
                                    </div>

                                    <div class="form-group">
                                        <label class="labels">Jumlah Tiket yang dibeli</label>
                                        <input type="number" class="form-control" name="jumlah_tiket">
                                    </div>

                                    <div class="form-group">
                                        <label class="labels">Alamat Wisatawan</label>
                                        <input type="text" class="form-control" name="alamat_wisatawan">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Beli</button>


                                </form>

                            <?php endforeach; ?>
                        </div>
                    </div>

<?php 

        if ($od->status == 0)
        {
          echo "<h5 class='txt-center text-danger'>Tidak Tersedia</h5>";
        }else{
          echo anchor('Transaksi_outdoor/transaksi/'.$od->id_produk, '<center><button class="flex-c-m stext-107 cl0 size-301 bg1 bor13 hov-btn3 p-lr-15 trans-04 pointer"><i class="icon fas fa-cart-plus px-2"></i>Add to chart</button></center>');
        }

        ?>