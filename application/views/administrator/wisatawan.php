<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header bg-blue">
                <h3 class="card-title"><?= $title; ?></h3>
              </div>

     <div class="card-body">
    <?php echo $this->session->flashdata('pesan') ?>

    <table id="example2" class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Email</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
                foreach($user as $u) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td>
                            <img width="60px" src="<?php echo base_url(). './assets/img/profile/'.$u->image ?>">
                        </td>
                        <td><?php echo $u->email ?></td>
                        <td><?php echo $u->name?></td>
                        <td>
                          
                            <a href="<?php echo base_url('admin/delete_wisatawan/').$u->id ?>" class="btn btn-sm btn-danger">
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

