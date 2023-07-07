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

        <div class="container rounded bg-white mb-5">
            <div class="row">
                <div class="col-md-4 border-right ">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class=" mt-5" width="250px" height="200" src="<?= base_url('./assets/img/profile/') . $administrator['image']; ?>">
                        <span class="font-weight-bold mt-3"><?= $administrator['name']; ?></span>
                        <span class="text-black-50"><?= $administrator['email']; ?></span>
                        <span class="text-black-50">Member Since <?= date('d F Y', $administrator['date_created']); ?></span>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Edit Profil </h4>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                        </div>

                        <?= form_open_multipart('admin/edit_profil'); ?>

                        <div class="row mt-3">
                          <div class="col-md-12 pb-2">
                                <label for="name" class="labels">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= $administrator['name']; ?>">
                                <?= form_error('name',' <small class="text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-12 pb-2">
                                <label for ="email" class="labels">E-mail</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?= $administrator['email']; ?>">
                            </div>

                            <div class="col-md-12 pb-2">
                                <label for ="password" class="labels">password</label>
                                <input type="password" class="form-control" id="password" name="password" value="<?= $administrator['password']; ?>" >
                            </div>

                            <div class="form-group col-md-12 pb-2">
                                <label for="image">Foto </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Pilih File</label>
                                    </div>
                                </div>
                            </div>
                        </div>              
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit">Simpan Profil</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </section>
</div>