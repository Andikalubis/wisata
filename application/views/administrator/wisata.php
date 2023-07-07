
<div class="content-wrapper">
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><?= $title; ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
                    <li class="breadcrumb-item active"><?= $title; ?></li>
                </ol>
          </div>
      </div>
  </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-red">
                        <h3 class="card-title"><?= $title; ?></h3>
                    </div>

     <div class="card-body">
    <?php echo $this->session->flashdata('pesan') ?>

    <table id="example2" class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama Wisata</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>kontak</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
                foreach($admin_wisata as $aw) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td>
                            <img width="60px" src="<?php echo base_url(). './assets/img/profile/'.$aw->image ?>">
                        </td>
                        <td><?php echo $aw->nama_wisata ?></td>
                        <td><?php echo $aw->email_admin ?></td>                     
                        <td><?php echo $aw->alamat ?></td>
                        <td><?php echo $aw->kontak ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/detail_wisata/').$aw->id_wisata ?>" class="btn btn-sm btn-primary">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="<?php echo base_url('admin/delete_wisata/').$aw->id_wisata ?>" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
            <?php endforeach; ?>
        </tbody>     
    </table>
</div>

</div>
</div>
</div>
</div>
</section>

