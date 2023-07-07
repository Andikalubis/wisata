
<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><?= $title; ?></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item">
                  <a href="<?= base_url('dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <div class="container rounded bg-white mb-3">
      <div class="row">

        <div class="col-md-4 border-right ">
          <div class="d-flex flex-column align-items-center text-center p-3 py-5">
              <img class=" mt-5" width="250px" height="200" src="<?= base_url('assets/img/profile/') . $admin_wisata['image']; ?>">
              <span class="font-weight-bold mt-3"><?= $admin_wisata['nama_wisata']; ?></span>
              <span class="text-black-50"><?= $admin_wisata['email_admin']; ?></span>
              <span class="text-black-50">Member Since <?= date('d F Y', $admin_wisata['date_created']); ?></span>
          </div>

          <div class="p-2 py-2">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-center">Edit Password</h4>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?= $this->session->flashdata('pesan'); ?>
                </div>
            </div>

            <form action="<?= base_url('adminwisata/edit_password'); ?>" method="post">

              <div class="row mt-3">
                <div class="col-md-12 pb-2">
                    <label for="current_password" class="labels">Password saat ini</label>
                    <input type="password" class="form-control" id="current_password" name="current_password">
                    <?= form_error('current_password',' <small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-md-12 pb-2">
                  <label for ="new_password1" class="labels">Password baru</label>
                  <input type="password" class="form-control" id="new_password1" name="new_password1">
                        <?= form_error('new_password1',' <small class="text-danger">', '</small>'); ?>
                </div>

                <div class="col-md-12 pb-3">
                    <label for ="new_password2" class="labels">Konfirmasi password baru</label>
                    <input type="password" class="form-control" id="new_password2" name="new_password2">
                    <?= form_error('new_password2',' <small class="text-danger">', '</small>'); ?>
                </div>
              </div>

              <div class="mt-3 text-center">
                <button class="btn bg-lightblue" type="submit">Simpan Password</button>
              </div>
            </form>

            </div>
        </div>

        <div class="col-md-8">
          <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="text-center">Edit Profil Wisata</h4>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <?= $this->session->flashdata('message'); ?>
              </div>
            </div>

            <?= form_open_multipart('adminwisata/edit_profil'); ?>

              <div class="row mt-3">
                <div class="col-md-12 pb-2">
                  <label for="nama_wisata" class="labels">Nama Wisata</label>
                  <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" value="<?= $admin_wisata['nama_wisata']; ?>"readonly>
                    <?= form_error('nama_wisata',' <small class="text-danger">', '</small>'); ?>
                </div>

                <div class="col-md-12 pb-2">
                  <label for ="email_admin" class="labels">E-mail</label>
                  <input type="text" class="form-control" id="email_admin" name="email_admin" value="<?= $admin_wisata['email_admin']; ?>" readonly>
                </div>

                <div class="col-md-12 pb-2">
                  <label>Deskripsi</label>
                  <textarea type="text" name="deskripsi" id="deskripsi" class="form-control" rows="4"><?= $admin_wisata['deskripsi']; ?></textarea>
                  <?= form_error('deskripsi',' <small class="text-danger">', '</small>'); ?>
                </div>

                <div class="col-md-12 pb-2">
                  <label>Alamat</label>
                  <textarea type="text" name="alamat" id="alamat" class="form-control" rows="4"><?= $admin_wisata['alamat']; ?></textarea>
                  <?php echo form_error('alamat','<div class="text-danger"></div>') ?>
                </div>

                <div class="col-md-12 pb-2">
                  <label for="jam_operasional" class="labels">Jam Operasional</label>
                  <input type="text" class="form-control" id="jam_operasional" name="jam_operasional" value="<?= $admin_wisata['jam_operasional']; ?>">
                  <?= form_error('jam_operasional',' <small class="text-danger">', '</small>'); ?>
                </div>

                <div class="col-md-12 pb-2">
                  <label for="harga_tiket" class="labels">Harga Tiket</label>
                  <input type="text" class="form-control" id="harga_tiket" name="harga_tiket" value="<?= $admin_wisata['harga_tiket']; ?>">
                  <?= form_error('harga_tiket',' <small class="text-danger">', '</small>'); ?>
                </div>

                <div class="col-md-12 pb-2">
                  <label for="akses_jalan" class="labels">Akses Jalan</label>
                  <input type="text" class="form-control" id="akses_jalan" name="akses_jalan" value="<?= $admin_wisata['akses_jalan']; ?>">
                    <?= form_error('akses_jalan',' <small class="text-danger">', '</small>'); ?>
                </div>

                <div class="col-md-12 pb-2">
                  <label for="fasilitas" class="labels">Fasilitas</label>
                  <input type="text" class="form-control" id="fasilitas" name="fasilitas" value="<?= $admin_wisata['fasilitas']; ?>">
                    <?= form_error('fasilitas',' <small class="text-danger">', '</small>'); ?>
                </div>

                <div class="col-md-12 pb-2">
                  <label for="kontak" class="labels">Kontak</label>
                  <input type="text" class="form-control" id="kontak" name="kontak" value="<?= $admin_wisata['kontak']; ?>">
                    <?= form_error('kontak',' <small class="text-danger">', '</small>'); ?>
                </div>

                <div class="col-md-12 pb-2">
                  <label for="maps" class="labels">Maps</label>
                  <input type="text" class="form-control" id="maps" name="maps" value="<?= $admin_wisata['maps']; ?>">
                  <?= form_error('maps',' <small class="text-danger">', '</small>'); ?>
                </div>

                <div class="col-md-12 pb-2">
                  <label for="kode_kategori_wisata" class="labels">Kategori Wisata</label>
                  <select class="form-control" id="kode_kategori_wisata" name="kode_kategori_wisata" value="<?= set_value('kode_kategori_wisata'); ?>" >
                    <option value="">--Pilih Kategori Wisata--</option>
                      <?php foreach($kategori_wisata as $ktw) : ?>
                    <option value="<?php echo $ktw->kode_kategori_wisata ?>">
                      <?php echo $ktw->nama_kategori_wisata ?></option>
                      <?php endforeach; ?>
                      <?= form_error('kategori',' <small class="text-danger pl-3">', '</small>'); ?>
                  </select>
                </div>

                <div class="col-md-12 pb-2">
                  <label for="rekening" class="labels">Rekening</label>
                  <input type="text" class="form-control" id="rekening" name="rekening" value="<?= $admin_wisata['rekening']; ?>">
                  <?= form_error('rekening',' <small class="text-danger">', '</small>'); ?>
                </div>
                    
                <div class="form-group col-md-12 pb-2">
                  <label for="image">Foto Wisata</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                          <label class="custom-file-label" for="image">Pilih File</label>
                      </div>
                    </div>
                </div>
              </div>

              <div class="mt-5 text-center">
                <button class="btn bg-lightblue" type="submit">Simpan Profil</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>