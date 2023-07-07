<div class="bg0 m-t-150 p-b-100">
  <div class="container">
    <div class="container rounded bg-white mb-5">
      <div class="row">
        <div class="col-md-12">

          <div class="container">
            <div class="bread-crumb flex-w p-l-25 p-r-15  p-lr-0-lg p-b-50">
              <a href="<?= base_url('wisatawan/home'); ?>" class="stext-120 cl8 hov-cl1 trans-04"> Home <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
              </a>
                <span class="stext-120 cl4"><?= $title; ?></span>
            </div>
          </div>

          <?= $this->session->flashdata('pesan'); ?>
          <?= $this->session->flashdata('message'); ?>

          <form class="bg0 p-b-85">
            <div class="container">
              <h4 class="mtext-109 cl2 m-l-25 m-r--38 m-lr-0-xl m-b-25">
                Keranjang Pesanan
              </h4>

              <div class="row">
                <div class=" col-xl-12 m-b-50">
                  <div class="m-l-10 m-r--38 m-lr-0-xl">
                    <div class="wrap-table-shopping-cart ">
                      <table class="table-shopping-cart ">
                        
                        <tr class="table_head">
                          <th class="column-1">No</th>
                          <th>Nama Produk</th>
                          <th >Deskripsi Produk</th>
                          <th >Harga Sewa</th>
                          <th >Action</th>
                        </tr>
                        

                        <?php $no=1; foreach($cart as $cr) : ?>
                      
                        <tr class="table_row">
                          <td class="column-1"><?php echo $no++ ?></td>
                          <td><?php echo $cr->nama_produk ?></td>
                          <td><?php echo $cr->deskripsi_produk ?></td>
                          <td>Rp. <?php echo number_format($cr->harga_sewa,0,',','.')?></td>
                          <td>
                             <?php
                             if(empty($cr->alamat_sewa)) { ?>
                               <a href="<?php echo base_url('wisatawan/tambah_sewa/'.$cr->id_sewa) ?>" class="btn btn-sm bg-lightblue">Checkout</a>
                               <a href="<?php echo base_url('wisatawan/delete_cart/').$cr->id_sewa ?>" class="btn btn-sm bg-maroon mx-2"><i class="fas fa-trash"></i></a>
                             <?php }else { ?>
                              <span class='text-danger text-bold'>Sudah Checkout </span>
                            <?php } ?>                                                          
                          </td>
                          </tr>

                          <?php endforeach; ?>

                        </table>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </form>

        </div>
      </div>
    </div>
  </div>
</div>
