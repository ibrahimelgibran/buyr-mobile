<div class="container">
    <div class="row mt-4 mb-3">
        <div class="col">
            <h2 class="text-center">My Profile</h2>
        </div>
    </div>

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row">
        <div class="col-12 bg-light p-4 rounded">
            <form action="<?= base_url('profile/update') ?>" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label font-weight-bold">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="<?= $profile['name'] ?>">
                        <?= form_error('name', '<small class="form-text text-danger">', '</small>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label font-weight-bold">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" value="<?= $profile['email'] ?>">
                        <?= form_error('email', '<small class="form-text text-danger">', '</small>') ?>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-info btn-sm">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
