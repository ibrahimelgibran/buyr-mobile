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
	.button {
    display: inline-block;
    color: white; /* Warna teks */
    text-align: center;;
    text-decoration: none;
    border: none;
    border-radius: 25px;
    cursor: pointer;
}

.button:hover {
    background-color: #0B60B0; /* Warna latar belakang saat dihover */
}

</style>

<div class="container">
	<div class="row mt-4">
		<div class="col">
			<div class="card">
				<h5 class="card-header">Order Pembayaran</h5>	
				<div class="card-body">
					<h4><strong>Kode Invoice : <?= $content['invoice'] ?></strong></h4>
					<p>Terimakasih, sampahmu tanggung jawab kami sekarang.</p>
					<br>
					<p>Silakan lewati pembayaran manual dengan prosedur berikut:</p>
					<br>
					<p>Virtual Account Bank:</p>
					<ul>
						<li><strong>Mandiri 1370023557081</strong> A.n. Ibrahim El Gibran</li>
						<li><strong>BRI 203301005288531</strong> A.n. Ibrahim El Gibran</li>
						<li><strong>BSI 7205751291</strong> A.n. Ibrahim El Gibran</li>
						<li><strong>Bank Jago 504304694320</strong> A.n. Ibrahim El Gibran</li>
						<!-- <li>Pembayaran dengan E-Wallet <strong>DANA 085876076005</strong> An. Ibrahim El Gibran</li> -->
						<!-- <li>Sertakan informasi dengan nomor pesanan <strong><?= $content['invoice'] ?></strong></li> -->
						<!-- <li>Total pembayaran <strong>Rp. <?= number_format($content['total'], 0, ',', '.') ?></strong></li> -->
					</ul>
					<br>
					<p>E-Wallet:</p>
					<ul>
						<li><strong>DANA 085876076005</strong> A.n. Ibrahim El Gibran</li>
						<li><strong>OVO 085876076005</strong> A.n. Ibrahim El Gibran</li>
						<li><strong>GoPay 085876076005</strong> A.n. Ibrahim El Gibran</li>
						<li><strong>ShopeePay 085876076005</strong> A.n. Ibrahim El Gibran</li>
						<!-- <li>Pembayaran dengan E-Wallet <strong>DANA 085876076005</strong> An. Ibrahim El Gibran</li> -->
						<!-- <li>Sertakan informasi dengan nomor pesanan <strong><?= $content['invoice'] ?></strong></li> -->
						<!-- <li>Total pembayaran <strong>Rp. <?= number_format($content['total'], 0, ',', '.') ?></strong></li> -->
					</ul>
					<p>Sertakan informasi dengan nomor pesanan <strong><?= $content['invoice'] ?></strong></p>
					<p>Total pembayaran<strong> Rp. <?= number_format($content['total'], 0, ',', '.') ?></strong></p>
					<p>Jika Anda sudah melakukan pembayaran, silakan kirimkan bukti transfernya ke sini <a class="button btn btn-primary btn-sm" href="<?= base_url('myorder/detail/' . $content['invoice']) ?>">Konfirmasi Pembayaran</a></p>
					<a href="<?= base_url('home') ?>" class="btn btn-primary btn-sm">Kembali</a>
				</div>
			</div>
			<br>
		</div>
	</div>
</div>

<br><br><br><br>

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