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
  background-color: #26a8d1;
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
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php $no = 0; ?>
    <?php foreach ($banners as $b) : ?>
      <?php $no++;  ?>
      <div class="carousel-item <?php if ($no <= 1) {
                                  echo "active";
                                } ?>">
        <img src="<?= base_url() ?>images/banner/<?= $b['image'] ?>"
          class="d-block w-100 img-fluid"
          style="max-height: 400px; object-fit: cover;">
        <div class="carousel-caption d-none d-md-block <?= $b['text_color'] ?>">
          <!-- <h3 class="text-uppercase"><?= $b['head'] ?></h3>
					<h5 class="mt-3"> <?= $b['content'] ?></h5>
					<a href="<?= base_url('home/detail/' . $b['product_id']) ?>" class="btn btn-success badge-pill mt-3" style="width:200px">ORDER NOW</a> -->
        </div>
      </div>
    <?php endforeach ?>
  </div>
  <!-- <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>
<br>
<!-- End of Carousel -->

<!-- List Item -->
<div class="container">
  <div class="container mb-5" style="font-family: 'Poppins';"> 
  <h2 class="mb-4 text-center" style="font-weight: bold; color:#26a8d1">PRODUK PILIHAN</h2>
  <div class="row">
    <?php foreach ($games as $game) : ?>
      <div class="col-6 mt-3">
        <div class="card shadow-sm" style="border-radius: 15px; overflow: hidden;">
          <div style="overflow: hidden;">
            <img
              src="<?= base_url('images/game/' . $game['image']) ?>"
              class="card-img-top img-fluid"
              style="width: 100%; height: auto;"
              alt="<?= htmlspecialchars($game['name'], ENT_QUOTES, 'UTF-8') ?>">
          </div>

          <div class="card-body p-2">
            <!-- Jika ada lokasi -->
            <?php if (isset($game['location'])) : ?>
              <p class="mb-1">
                <i class="fas fa-map-marker-alt text-primary"></i>
                <small class="text-primary"><?= htmlspecialchars($game['location'], ENT_QUOTES, 'UTF-8') ?></small>
              </p>
            <?php endif; ?>
            
            <!-- Nama Produk -->
            <h6 class="card-title mb-1" style="font-weight: 600; font-size: 14px;">
              <?= htmlspecialchars($game['name'], ENT_QUOTES, 'UTF-8') ?>
            </h6>
            
            <!-- Edition jika ada -->
            <?php if (isset($game[''])) : ?>
              <h6 class="text-muted" style="font-size: 12px;"><?= ucfirst(htmlspecialchars($game['edition'], ENT_QUOTES, 'UTF-8')) ?> Edition</h6>
            <?php endif; ?>
            
            <!-- Jika ada diskon -->
            <?php if (isset($game['discount']) && $game['discount'] > 0) : ?>
              <p class="mb-1">
                <s class="text-muted" style="font-size: 12px;">Rp. <?= number_format($game['original_price'], 0, ',', '.') ?></s>
                <span class="badge bg-danger"><?= $game['discount'] ?>%</span>
              </p>
              <p class="text-danger" style="font-weight: bold; font-size: 14px;">
                Rp. <?= number_format($game['price'], 0, ',', '.') ?>
              </p>
            <?php elseif (isset($game['price'])) : ?>
              <p class="text-danger" style="font-weight: bold; font-size: 14px;">
                Rp. <?= number_format($game['price'], 0, ',', '.') ?>
              </p>
            <?php endif; ?>
            
            <a href="<?= base_url('home/detail/' . $game['id']) ?>" 
               class="btn btn-primary btn-sm w-100" 
               style="border-radius: 10px; font-size: 12px;">
              BELANJA SEKARANG
            </a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
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
<!-- <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f069bfbf-3d23-4118-896b-6010e06d37f2";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script> -->