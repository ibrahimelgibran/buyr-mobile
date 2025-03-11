<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!-- Import Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<!-- Import Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Carousel -->
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  html,
  body {
    overflow-x: hidden;
    font-family: 'Poppins', sans-serif;
    background-color: #fff;
    width: 100%;
  }

  .footer {
  background-color: #337ab7;
  color: white;
  padding: 10px 0;
  text-align: center;
  position: fixed;
  bottom: 0;
  width: 100%;
  box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
  z-index: 1000;
  display: flex;
  justify-content: space-around;
  align-items: center;
}

.footer a {
  color: white;
  text-decoration: none;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.footer a:hover {
  text-decoration: underline;
}

.footer .icon {
  font-size: 24px;
  margin-bottom: 5px;
}

.footer .cart-count {
  position: absolute;
  top: -10px;
  right: -10px;
  background-color: red;
  color: white;
  border-radius: 50%;
  width: 20px;
  height: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 12px;
}

/* Tambahan untuk dropdown akunku */
.account-dropdown {
  position: relative;
  display: inline-block;
}

.account-link {
  color: white;
  text-decoration: none;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.dropdown-content {
  display: none;
  position: absolute;
  bottom: 100%;
  left: 50%;
  transform: translateX(-50%);
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 5px;
  margin-bottom: 10px;
}

.dropdown-content a {
  color: #333;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  flex-direction: row;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.account-dropdown:hover .dropdown-content {
  display: block;
}

/* Panah kecil di bawah dropdown */
.dropdown-content::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -10px;
  border-width: 10px;
  border-style: solid;
  border-color: #f9f9f9 transparent transparent transparent;
}
</style>

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

<br><br><br><br><br>

<div class="footer">
  <a href="<?= base_url('home') ?>">
    <span class="icon">🏠</span> home
  </a>
  <div class="account-dropdown">
    <a href="#" class="account-link">
      <span class="icon">⚙️</span> manage
    </a>
    <div class="dropdown-content">
      <a href="<?= base_url('banner') ?>">Banner</a>
      <a href="<?= base_url('product') ?>">Product</a>
      <a href="<?= base_url('order') ?>">Order</a>
      <a href="<?= base_url('user') ?>">User</a>
    </div>
  </div>
  <div class="account-dropdown">
    <a href="#" class="account-link">
      <span class="icon">👤</span> akunku
    </a>
    <div class="dropdown-content">
      <a href="<?= base_url('profile') ?>">Profil</a>
      <a href="<?= base_url('profile/password') ?>">Change Password</a>
    </div>
  </div>
</div>

