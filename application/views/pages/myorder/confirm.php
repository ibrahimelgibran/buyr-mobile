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
	<div class="row mt-4 mb-5">
		<div class="col">
			<div class="card">

				<?php $this->load->view('layouts/_alert') ?>

				<h5 class="card-header text-center"><strong>Konfirmasi Pembayaran #<?= $order['invoice'] ?></strong></h5>
				<div class="card-body">
					<?= form_open_multipart(base_url('myorder/confirm/' . $order['invoice'])) ?>
						<input type="hidden" name="orders_id" value="<?= $order['id'] ?>">
						<div class="form-group">
							<label>Your Invoice</label>
							<input type="text" class="form-control" name="invoice" value="<?= $order['invoice'] ?>" readonly>
						</div>
						<div class="form-group">
							<label>Account Name</label>
							<input type="text" class="form-control" name="account_name">
							<?= form_error('account_name', '<small class="form-text text-danger">', '</small>') ?>
						</div>
						<div class="form-group">
							<label>No HP</label>
							<input type="text" class="form-control" name="account_number">
							<?= form_error('account_number', '<small class="form-text text-danger">', '</small>') ?>
						</div>
						<div class="form-group">
							<label>Nominal</label>
							<input type="text" class="form-control" name="nominal">
							<?= form_error('nominal', '<small class="form-text text-danger">', '</small>') ?>
						</div>
						<div class="form-group">
							<label>Catatan</label>
							<textarea class="form-control" name="note" rows="3"  placeholder="Ambil / Diantar"></textarea>
						</div>

						<div class="form-group">
							<label>Bukti Transfer</label>
							<input name="image" type="file" class="form-control-file">
							<?php if($this->session->flashdata('image_error')) :  ?>
								<small class="form-text text-danger">
									<?= $this->session->flashdata('image_error') ?>
								</small>
							<?php endif ?>
						</div>

						<button class="btn btn-info float-right" type="submit">Kirim</button>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
</div>

<br><br><br>

<div class="footer">
  <a href="<?= base_url('home') ?>">
    <span class="icon">🏠</span> home
  </a>
  <div class="account-dropdown">
    <a href="#" class="account-link">
    <span class="icon">🛒</span> keranjang
    </a>
    <div class="dropdown-content">
      <a href="<?= base_url('cart') ?>">Keranjang</a>
      <a href="<?= base_url('myorder') ?>">My Orders</a>
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