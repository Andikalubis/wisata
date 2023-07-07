
<div class="bg0 m-t-150 p-b-100">
  <div class="container">
    <div class="container rounded bg-white mb-5">
      <div class="row">
        <div class="col-md-4 border-right">
          <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <img class=" mt-5" width="200px" height="200" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
            <span class="font-weight-bold mt-3 stext-110 cl2"><?= $user['name']; ?></span>
            <span class="text-black-50 stext-115 cl6"><?= $user['email']; ?></span>
            <span class="text-black-50 stext-115 cl6">Member Since <?= date('d F Y', $user['date_created']); ?></span>
          </div>
        </div>

        <div class="col-md-4">
          <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="mtext-112 cl2">Edit Profil</h4>
            </div>
            <div class="row">
              <div class="col-lg-12">
                  <?= $this->session->flashdata('message'); ?>
              </div>
            </div>

            <?= form_open_multipart('wisatawan/profil'); ?>

            <div class="row mt-3">
              <div class="col-md-12 pb-2">
                <label for="name" class=" stext-110 cl2">Username</label>
                <input type="text" class="form-control stext-115 cl6" id="name" name="name" value="<?= $user['name']; ?>">
                <?= form_error('name',' <small class="text-danger">', '</small>'); ?>
              </div>

              <div class="col-md-12 pb-2">
                <label for ="email" class="stext-110 cl2">E-mail</label>
                <input type="text" class="form-control stext-115 cl6" id="email" name="email" value="<?= $user['email']; ?>" readonly>
              </div>
                    
              <div class="form-group col-md-12 pb-2">
                <label for="image" class="stext-110 cl2">Foto Profil</label>
                <div class="input-group">
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="image" name="image">
                      <label class="custom-file-label stext-115 cl6" for="image">Pilih File</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 mt-2 text-center">
              <button class="flex-c-m stext-110 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer " type="submit">Simpan Profil</button>
            </div>
          </form>
        </div>
    </div>

    <div class="col-md-4 border-left">
      <div class="p-3 py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4 class="text-right mtext-112 cl2 ">Ubah Password</h4>
        </div>

        <div class="row">
          <div class="col-lg-12">
              <?= $this->session->flashdata('pesan'); ?>
          </div>
        </div>

        <form action="<?= base_url('wisatawan/password'); ?>" method="post">

          <div class="row mt-3">
            <div class="col-md-12 pb-2">
              <label for="current_password" class="stext-110 cl2">Password saat ini</label>
              <input type="password" class="form-control" id="current_password" name="current_password">
              <?= form_error('current_password',' <small class="text-danger">', '</small>'); ?>
            </div>

            <div class="col-md-12 pb-2">
              <label for ="new_password1" class="stext-110 cl2">Password baru</label>
              <input type="password" class="form-control" id="new_password1" name="new_password1">
              <?= form_error('new_password1',' <small class="text-danger">', '</small>'); ?>
            </div>

            <div class="col-md-12 pb-3">
              <label for ="new_password2" class="stext-110 cl2">Konfirmasi password baru</label>
              <input type="password" class="form-control" id="new_password2" name="new_password2">
              <?= form_error('new_password2',' <small class="text-danger">', '</small>'); ?>
            </div>
          </div>

          <div class="col-md-8 mt-3 text-center">
            <button class="flex-c-m stext-110 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer " type="submit">Simpan Password</button>
          </div>
      </form>
    </div>
  </div>

  </div>
</div>
</div>

