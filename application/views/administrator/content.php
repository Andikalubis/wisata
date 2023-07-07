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
                        <th>Deskripsi</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no=1;
                    foreach($content as $ct) : ?>

                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td>
                                <img width="60px" src="<?php echo base_url(). 'assets/upload/'.$ct->gambar ?>">
                            </td>
                            <td><?php echo $ct->deskripsi ?></td>
                            <td><?php echo $ct->level ?></td>
                            <td>
                                <a href="<?php echo base_url('admin/update_content/').$ct->id_content ?>"class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
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
</div>