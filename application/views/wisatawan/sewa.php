<div class="bg0 m-t-150 p-b-100">
    <div class="container">
        <div class="container rounded bg-white mb-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Penyewaan </h4>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <?= $this->session->flashdata('message'); ?>
                            </div>
                        </div>

                        <?= form_open_multipart('transaksi_outdoor/submit'); ?>

                        <div class="row mt-3">
                            <div class="col-md-12 pb-2">
                                <label for="id" class="labels">Nama</label>
                                <input type="text" class="form-control" id="id" name="id" value="<?= $user['name']; ?>"readonly>
                                <?= form_error('id',' <small class="text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-12 pb-2">
                            <label for="nama_produk" class="labels">Nama Produk</label>
                                <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $outdoor['nama_produk']; ?>"readonly>
                                <?= form_error('nama_produk',' <small class="text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-12 pb-2">
                            <label for="harga_sewa" class="labels">Harga Sewa </label>
                                <input type="text" class="form-control" id="harga_sewa" name="harga_sewa" value="<?= $outdoor['harga_sewa']; ?>"readonly>
                                <?= form_error('harga_sewa',' <small class="text-danger">', '</small>'); ?>
                            </div>

                            <div class="col-md-12 pb-2">
                            <label for="tlp" class="labels">No Telphone</label>
                            <input type="text" class="form-control form-control-user" id="tlp" name="tlp" 
                            placeholder="Nomor Telphone" value="<?= set_value('tlp'); ?>">
                                <?= form_error('tlp',' <small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="col-md-12 pb-2">
                            <label for="lama_sewa" class="labels">Lama Sewa (/hari)</label>
                            <input type="number" class="form-control form-control-user" id="lama_sewa" name="lama_sewa" 
                            placeholder="Lama Sewa" value="<?= set_value('lama_sewa'); ?>">
                                <?= form_error('lama_sewa',' <small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    

                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit">SUBMIT</button>
                        </div>
                        <?php echo form_close(); ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>