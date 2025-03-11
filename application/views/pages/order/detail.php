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
    <div class="row justify-content-center mt-4">
        <div class="col-lg-8">
            <div class="card">
                <h5 class="card-header text-center bg-dark text-light"><strong>Order Detail #<?= $order['invoice'] ?></strong></h5>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>Date: <?= $order['date'] ?></li>
                        <li>Name: <?= $order['name'] ?></li>
                        <li>Phone: <?= $order['phone'] ?></li>
                        <li>Address: <?= $order['address'] ?></li>
                        <li>Status: 
                            <?php if($order['status'] == 'waiting') : ?>
                                <span class="badge badge-primary"><?= $order['status'] ?></span>
                            <?php elseif($order['status'] == 'paid') : ?>
                                <span class="badge badge-warning text-dark"><?= $order['status'] ?></span>
                            <?php elseif($order['status'] == 'delivered') : ?>
                                <span class="badge badge-info"><?= $order['status'] ?></span>
                            <?php elseif($order['status'] == 'cancel') : ?>
                                <span class="badge badge-danger"><?= $order['status'] ?></span>
                            <?php endif; ?>
                        </li>
                    </ul>

                    <div class="table-responsive">
                        <table class="table table-bordered text-center mt-3">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Game</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($order_detail as $od) : ?>
                                    <tr>
                                        <td>
                                            <img src="<?= base_url('images/game/' . $od['image']) ?>" style="max-width: 200px;">
                                        </td>
                                        <td><strong>Rp. <?= number_format($od['price'], 2, ',', '.') ?></strong></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                            <tfoot class="bg-success text-light">
                                <tr>
                                    <td colspan="1"><strong>Total</strong></td>
                                    <td><h5><strong>Rp. <?= number_format(array_sum(array_column($order_detail, 'subtotal')), 2, ',', '.') ?></strong></h5></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <form action="<?= base_url("order/update/" . $order['id']) ?>" method="post">
                        <input type="hidden" name="id" value="<?= $order['id'] ?>">
                        <div class="input-group">
                            <select name="status" class="form-control">
                                <option value="waiting" <?= $order['status'] == 'waiting' ? 'selected' : '' ?>>Penjemputan ke lokasi anda!</option>
                                <option value="paid" <?= $order['status'] == 'paid' ? 'selected' : '' ?>>Sudah Terbayar!</option>
                                <option value="delivered" <?= $order['status'] == 'delivered' ? 'selected' : '' ?>>Success sampah diambil!</option>
                                <option value="cancel" <?= $order['status'] == 'cancel' ? 'selected' : '' ?>>Cancel!</option>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-info" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php if(isset($order_confirm)) : ?>
        <div class="row mt-3">
            <div class="col-lg-8">
                <div class="card">
                    <h5 class="card-header bg-info text-light text-center">Payments Confirmation</h5>
                    <div class="card-body">
                        <p>No HP: <strong><?= $order_confirm['account_name'] ?></strong></p>
                        <hr>
                        <p>Account Name: <strong><?= $order_confirm['account_number'] ?></strong></p>
                        <hr>
                        <p>Nominal: <strong>Rp. <?= number_format($order_confirm['nominal'], 2, ',', '.') ?></strong></p>
                        <hr>
                        <p>Note: <strong><?= $order_confirm['note'] ?></strong></p>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center">
                <img src="<?= base_url('images/payments/' . $order_confirm['image']) ?>" height="200px">
            </div>
        </div>
    <?php endif ?>
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

