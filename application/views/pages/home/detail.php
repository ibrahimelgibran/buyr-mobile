<div class="container">

	<!-- Alert -->
	<?php $this->load->view('layouts/_alert') ?>
	<!-- End of alert -->

<!-- Hero -->
<div class="row mt-5">
<div class="col">
    <img src="<?= base_url() ?>/images/game/<?= $game['image'] ?>" class="card-img-top" alt="<?= $game['name'] ?>" style="width: 100%; max-width: 330px;">
</div>

    <div class="col-md-5">
      <br>
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td class="font-weight-bold" style="border: 2px solid black;">Paket</td>
                        <td style="border: 2px solid black;"><?= $game['name'] ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold" style="border: 2px solid black;">Edition</td>
                        <td style="border: 2px solid black;"><?= ucfirst($game['edition']) ?> Edition</td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold" style="border: 2px solid black;">Description</td>
                        <td style="border: 2px solid black;"><?= character_limiter($game['description'], 200) ?></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold" style="border: 2px solid black;">View More</td>
                        <td style="border: 2px solid black;"><a href="#description" class="text-info font-weight-bold">View more</a></td>
                    </tr>
                    <tr>
                        <td class="font-weight-bold" style="border: 2px solid black;">EDITION</td>
                        <td style="border: 2px solid black;"><span class="badge badge-info badge-pill p-2"><?=  ucfirst($game['edition']) ?></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col">
    <div style="text-align:center;">
        <img src="https://subscription.bsd.education/wp-content/uploads/2021/12/Successful-purchase-bro-2.png" style="width:auto; height:210px;" alt="">
    </div>
    <br>
    <div class="card border-dark">
        <div class="card-body text-center">
            <h2 class="text-warning price mb-4">Rp. <?= number_format($game['price'], 2, ', ','.'); ?></h2>
            <!-- <h2 class="text-warning price mb-4">Rp. <?= number_format($game['price']); ?></h2> -->
            <form action="<?= base_url('cart/add') ?>" method="POST">
                <input type="hidden" name="product_id" value="<?= $game['id'] ?>">
                <button type="submit" class="btn btn-success btn-block">ADD TO CART</button>
            </form>
        </div>
    </div>
</div>

</div>

</div>
<!-- End of hero -->


	<!-- Summary -->
	<div class="row mt-5 mb-2">
		<div class="col">
			<h3 id="description">Ringkasan</h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col bg-light p-5">
			<?= $game['description'] ?>
		</div>
	</div>
	<!-- End of summary -->

	<!-- System requirements -->
	<div class="row mt-5 mb-2">
		<div class="col">
			<h3>Persyaratan Sistem</h3>
		</div>
	</div>
	
	<div class="row">
		<div class="col bg-light p-5">
			<?= $game['requirements'] ?>
		</div>
	</div>
	<!-- End of System requirements -->
</div>

<br><br>
<footer class="footer bg-light">
		<!-- Footer Section Start -->
		<div class="dev-footer-area">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="logo-wrapper mb-5">
                <a style="color:#387ADF;" class="logo">
                <div>
                <img src="http://localhost/Cleanee/images/logo/logo.svg" alt="logo" />
                </div>
                  <span class="text" style="color:#95c11f">Cleanee</span>
                </a>
                <p>
                  Jl. Menuju Surga <br />
                  Yogyakarta, Indonesia 55581
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-4">
                  <ul class="dev-footer-list">
                    <li><a href="http://localhost/Cleanee/home">Home</a></li>
                    <li><a href="http://localhost/Cleanee/about.html">About Us</a></li>
                    <li><a href="../#pesanan">Pilih Paket</a></li>
                    <li><a href="http://localhost/coinku/auth/loginAnggota">Cointku</a></li>
                  </ul>
                </div>
                <div class="col-4">
                  <ul class="dev-footer-list">
                    <li><a href="#">Collaboration</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                </div>
                <div class="col-4">
                  <ul class="dev-footer-list">
                    <li>
                      <a href="https://www.instagram.com/cleanee.id"
                        >Instagram</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="dev-copyright-area">
        <div class="container">
          <div class="dev-copyright-area__wrapper">
			<hr>	
			<br>
            <p class="order-2 order-md-1">
            Made With 💙 By Team Cleanee
            </p>
          </div>
        </div>
      </div>
	  <br>
      <!-- Footer Section End -->
</footer>  

<style>
.dev-copyright-area__wrapper{
	text-align: center;

}

	.footer{
		margin-bottom: -15px;
	}

	.dev-footer-area {
  background: var(--bs-white);
  padding: 60px 0;
}
@media (min-width: 768px) {
  .dev-footer-area {
    padding: 80px 0;
  }
}
@media (min-width: 992px) {
  .dev-footer-area {
    padding: 100px 0;
  }
}
.dev-footer-area .logo-wrapper .logo {
  display: flex;
  align-items: center;
  margin-bottom: 24px;
}
.dev-footer-area .logo-wrapper .logo img {
  min-width: 48px;
  max-width: 48px;
  min-height: 48px;
  max-height: 48px;
  -o-object-fit: cover;
  object-fit: cover;
  border-radius: 500px;
  margin-right: 12px;
}
.dev-footer-area .logo-wrapper .logo .text {
  color: var(--bs-gray-900);
  white-space: nowrap;
  font-weight: 700;
  font-size: 18px;
}
@media (min-width: 992px) {
  .dev-footer-area .logo-wrapper .logo .text {
    font-size: 24px;
  }
}
.dev-footer-area .logo-wrapper p {
  color: var(--bs-gray-700);
  font-weight: 400;
  font-size: 16px;
  line-height: 1.4444444444;
}
@media (min-width: 575px) {
  .dev-footer-area .logo-wrapper p {
    font-size: 18px;
  }
}
.dev-footer-area .dev-footer-list {
  list-style: none;
  margin: 0;
  padding: 0;
}
.dev-footer-area
  .dev-footer-list
  li:not(.dev-footer-area .dev-footer-list li:last-child) {
  padding-bottom: 18px;
}
.dev-footer-area .dev-footer-list li a {
  font-weight: 400;
  font-size: 18px;
  line-height: 1.4444444444;
  transition: 0.3s;
  color: var(--bs-gray-700);
  position: relative;
}
.dev-footer-area .dev-footer-list li a::before {
  content: url("data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M3.75 12H20.25' stroke='%23424E60' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'%3E%3C/path%3E%3Cpath d='M13.5 5.25L20.25 12L13.5 18.75' stroke='%23424E60' stroke-width='1.5' stroke-linecap='round' stroke-linejoin='round'%3E%3C/path%3E%3C/svg%3E");
  display: inline-block;
  position: absolute;
  left: 0;
  opacity: 0;
  visibility: hidden;
  transition: all 0.24s ease-in-out;
}
.dev-footer-area .dev-footer-list li a:hover {
  color: var(--bs-gray-900);
  padding-left: 24px;
}
.dev-footer-area .dev-footer-list li a:hover::before {
  opacity: 1;
  visibility: visible;
}
.dev-footer-area--modifi {
  box-shadow: inset 0px 1px 0px var(--bs-gray-100);
}
</style>
