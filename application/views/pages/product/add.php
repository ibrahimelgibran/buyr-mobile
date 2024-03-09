<div class="container">
    <div class="row mt-4">
        <div class="col">
            <h2 class="text-center">Tambah Baru Paket</h2>
        </div>
    </div>

    <div class="row bg-light p-4 mt-4">
        <div class="col">

            <?= form_open_multipart(base_url('product/add')) ?>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label font-weight-bold">Nama Paket</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name">
                    <?= form_error('name', '<small class="form-text text-danger">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-sm-2 col-form-label font-weight-bold">Price</label>
                <div class="col-sm-4">
                    <input type="number" class="form-control" name="price">
                    <?= form_error('price', '<small class="form-text text-danger">', '</small>') ?>
                </div>
                <label for="edition" class="col-sm-2 col-form-label font-weight-bold">Edition</label>
                <div class="col-sm-4">
                    <select class="form-control" name="edition">
                        <option value="reguler" selected>Reguler</option>
                        <option value="premium">Premium</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label font-weight-bold">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="summernote" name="description" rows="3"></textarea>
                    <?= form_error('description', '<small class="form-text text-danger">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="requirements" class="col-sm-2 col-form-label font-weight-bold">System Requirements</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="summernote2" name="requirements" rows="3"></textarea>
                    <?= form_error('requirements', '<small class="form-text text-danger">', '</small>') ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="image" class="col-sm-2 col-form-label font-weight-bold">Image</label>
                <div class="col-sm-10">
                    <input name="image" type="file" class="form-control-file">
                    <?php if($this->session->flashdata('image_error')) : ?>
                    <small class="form-text text-danger">
                        <?= $this->session->flashdata('image_error') ?>
                    </small>
                    <?php endif ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-info float-right">
                        <i class="fa fa-save mr-2"></i>
                        Simpan
                    </button>
                    <a href="<?= base_url('product') ?>" class="btn btn-secondary mr-2 float-right">
                        <i class="fa fa-arrow-left mr-1"></i>
                        Kembali
                    </a>
                </div>
            </div>
            <?= form_close() ?>			
        </div>
    </div>
</div>
