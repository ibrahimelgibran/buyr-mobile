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
    <div class="row justify-content-center mt-3 mb-5">
        <div class="col-lg-8">
        
            <div class="card">
                <div class="card-header text-center bg-dark text-light">
                    <h4><strong>Keranjang Anda</strong></h4>
                </div>
                <div class="card-body">
                    
                    <!-- Alert -->
                    <?php $this->load->view('layouts/_alert') ?>
                    <!-- Alert -->

                    <!-- Jika cart kosong -->
                    <?php if(empty($product)) : ?>
                        <div class="alert alert-warning" role="alert">
                            Oops, keranjang Anda kosong.
                        </div>
                    <?php else : ?>
                        <div class="table-responsive">
                            <table class="table table-bordered text-center">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Paket</th>
                                        <th>Subtotal</th>
                                        <th>Menu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; foreach($product as $p) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td class="align-middle">
                                                <img src="<?= base_url('/images/game/' . $p['image']) ?>" class="img-fluid" style="max-width:100px; height:auto;">
                                            </td>
                                            <td class="align-middle">Rp. <?= number_format($p['subtotal'], 2, ', ', '.') ?></td>
                                            <td class="align-middle">
                                                <a class="btn btn-danger btn-sm" href="<?= base_url('cart/delete/' . $p['id']) ?>">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <!-- Total -->
                                <tr class="bg-success text-light">
                                    <td colspan="3" class="text-left"><strong>Total:</strong></td>
                                    <td><strong>Rp. <?= number_format(array_sum(array_column($product, 'subtotal')), 2, ', ', '.') ?></strong></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    <?php endif ?>

                </div>
                <div class="card-footer text-muted">
                    <a href="<?= base_url('home') ?>" class="btn btn-secondary btn-sm">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <?php if($product) : ?>
                        <a href="<?= base_url('checkout') ?>" class="btn btn-info btn-sm float-right">
                            Bayar sekarang <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    <?php endif ?>
                </div>
            </div>

        </div>
    </div>
</div>

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