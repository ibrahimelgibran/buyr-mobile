<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php $no = 0; ?>
    <?php foreach ($banners as $b) : ?>
      <?php $no++;  ?>
      <div class="carousel-item <?php if ($no <= 1) {
                                  echo "active";
                                } ?>">
        <img src="<?= base_url() ?>images/banner/<?= $b['image'] ?>" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block  <?= $b['text_color'] ?>">
          <!-- <h3 class="text-uppercase"><?= $b['head'] ?></h3>
					<h5 class="mt-3"> <?= $b['content'] ?></h5>
					<a href="<?= base_url('home/detail/' . $b['product_id']) ?>" class="btn btn-success badge-pill mt-3" style="width:200px">ORDER NOW</a> -->
        </div>
      </div>
    <?php endforeach ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- End of Carousel -->

<!--Hero area end-->
<div class="hero_area">
  <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
      <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
      <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
      <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
      <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
      <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
    </g>
  </svg>
</div>
<style>
  /* Waves Animation start*/

  .hero_area {
    position: relative;
  }

  .waves {
    position: absolute;
    width: 100%;
    height: 8vh;
    min-height: 10px;
    max-height: 10px;
    bottom: 0;
    left: 0;
  }

  .parallax>use {
    animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
  }

  .parallax>use:nth-child(1) {
    animation-delay: -2s;
    animation-duration: 7s;
  }

  .parallax>use:nth-child(2) {
    animation-delay: -3s;
    animation-duration: 10s;
  }

  .parallax>use:nth-child(3) {
    animation-delay: -4s;
    animation-duration: 13s;
  }

  .parallax>use:nth-child(4) {
    animation-delay: -5s;
    animation-duration: 20s;
  }

  @keyframes move-forever {
    0% {
      transform: translate3d(-90px, 0, 0);
    }

    100% {
      transform: translate3d(85px, 0, 0);
    }
  }


  /*Shrinking for mobile*/

  @media (max-width: 768px) {
    .waves {
      height: 40px;
      min-height: 40px;
    }
  }

  /* Waves Animation end*/
</style>
<!--Hero area end-->


<!-- List Item -->
<div class="container">
  <div class="row mt-5">
    <div class="col">
      <h2 class="head" style="font-size: 30px;" id="pesanan">Order Layanan</h2>
      <hr>
    </div>
  </div>

  <div class="row mb-5">
    <?php foreach ($games as $game) : ?>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-4">
        <div class="card">
          <img src="<?= base_url() ?>/images/game/<?= $game['image'] ?>" class="card-img-top" alt="<?= $game['name'] ?>">
          <div class="card-body">
            <h6 class="card-title font-weight-bold"><?= $game['name'] ?></h6>
            <h6 class="text-muted"><?= ucfirst($game['edition']) ?> Edition</h6>
            <h3 class="text-right text-warning price mt-4">Rp.<?= number_format($game['price'], 2, ', ', '.'); ?></h3>
            <a href="<?= base_url('home/detail/' . $game['id']) ?>" class="btn btn-outline-info btn-sm btn-block mt-3">Lihat Selengkapnya</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<!-- End of List Item -->


<!-- Sponsor -->
<div class="dev-company-info bg-light" id="colab">
    <div class="woy">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-xl-5 col-md-10">
                <div class="dev-company-info--text text-center text-lg-start mb-5 mb-lg-0">
                    <h2 class="title">
                        Klient seluruh wilayah Yogyakarta
                    </h2>
                    <p class="text pr-xxl-88">
                        Inilah mereka yang telah bekerjasama dengan perusahaan kami
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6 offset-xl-1">
                <div class="dev-company-info--logo">
                    <div class="row card-row">
                        <div class="col-md-4 logo-wrapper">
                            <div class="col-md-12">
                                <div class="logo">
                                    <img src="./images/sponsor/iegcode.png" alt="iegcode" class="img-fluid">
                                </div>
                            </div>
                            <!-- Tambahkan kelas logo-wrapper-hover -->
                            <div class="col-md-12 logo-wrapper-hover">
                                <div class="logo">
                                    <img src="./images/sponsor/eskamuga.png" alt="smkmuhammdiyahgamping" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-12 logo-wrapper">
                                <div class="logo">
                                    <img src="./images/sponsor/buyr.png" alt="buyrnusantara" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 logo-wrapper mt-md-6">
                            <div class="col-md-12">
                                <div class="logo">
                                    <img src="./images/sponsor/nst.png" alt="nusantarasatriatama" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="logo">
                                    <img src="./images/sponsor/swift.png" alt="swiftbeaute" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="logo">
                                    <img src="./images/sponsor/galeri.png" alt="galeririfa" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 logo-wrapper">
                            <div class="col-md-12">
                                <div class="logo">
                                    <img src="./images/sponsor/berbrand.png" alt="berbrandstuff" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="logo">
                                    <img src="./images/sponsor/foji.png" alt="foji" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="logo">
                                    <img src="./images/sponsor/soim.png" alt="sotoijimonjali" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
  .logo img {
    width: 100%;
    min-width: 85px;
    /* Atur lebar minimum logo */
    max-width: 130px;
    /* Atur lebar maksimum logo */
    height: auto;
  }

  .woy {
    padding: 50px;
    margin-top: -100px;
  }

  .dev-company-info {
    padding-top: 60px;
  }

  @media (min-width: 768px) {
    .dev-company-info {
      padding-top: 80px;
    }
  }

  @media (min-width: 992px) {
    .dev-company-info {
      padding-top: 100px;
    }
  }

  .dev-company-info--text .title {
    font-weight: 700;
    font-size: 32px;
    line-height: 40px;
    color: var(--bs-gray-900);
    margin-bottom: 15px;
  }

  @media (min-width: 992px) {
    .dev-company-info--text .title {
      margin-bottom: 24px;
    }
  }

  .dev-company-info--text .text {
    font-weight: 400;
    font-size: 16px;
    color: var(--bs-gray-700);
    line-height: 24px;
  }

  @media (max-width: 768px) {
    .dev-company-info--logo .logo-wrapper {
      display: flex;
      gap: 24px;
      margin: 0;
      justify-content: center;
    }
  }

  .dev-company-info--logo .logo {
    border-radius: 12px;
    background: var(--bs-white);
    padding: 15px 0;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
  }

  @media (min-width: 992px) {
    .dev-company-info--logo .logo {
      padding: 24px 0;
    }
  }

  .dev-company-info--logo .logo img {
    width: 100%;
    transition: all 0.3s ease-in-out;
  }

  .dev-company-info--logo .logo:hover {
    transform: scale(1.05);
    transition: all 0.3s ease-in-out;
    box-shadow: 0px 16px 48px rgba(19, 34, 56, 0.12);
  }

  .dev-company-info--modifi {
    background: linear-gradient(180deg,
        rgba(222, 228, 218, 0) 0%,
        rgba(222, 228, 218, 0.5) 100%);
    padding-bottom: 60px;
  }

  @media (min-width: 768px) {
    .dev-company-info--modifi {
      padding-bottom: 56px;
    }
  }

  @media (min-width: 992px) {
    .dev-company-info--modifi {
      padding-bottom: 76px;
    }
  }
</style>
<br>
<br><br>
<!-- End Sponsor -->

<!-- Tools Section Start -->
<div class="tools-area">
  <div class="container">
    <div class="dev-section-title text-center">
      <h2 class="title">Team Cleanee</h2>
      <p class="text">Sebuah team yang penuh semangat dan dedikasi.</p>
    </div><br>
    <style>
      .card-col {
        margin: 20px 50px;
        /* Atur jarak antar elemen */
        text-align: center;
        /* Pusatkan teks */
      }

      .card-img {
        border-radius: 48%;
        width: 95%;
        object-fit: cover;
        height: 180px;
        /* Mengatur ketinggian gambar agar tidak terlalu besar */
      }

      .card-title {
        margin-top: 10px;
        /* Atur jarak antara gambar dan judul */
        letter-spacing: -1px;
        color: #000;
        /* Warna teks hitam */
        text-shadow: 0 0 10px #fff;
      }

      .card-p {
        margin-top: -1px;
        color: #000;
        /* Warna teks hitam */
        text-shadow: 0 0 10px #fff;
      }
    </style>

    <div class="row card-row justify-content-center">
      <div class="col-6 col-md-3 col-lg-2 card-col text-center mb-4">
        <img src="./images/team/elgibran.png" alt="Ibrahim El Gibran" class="mw-100 make-it-inline card-img" />
        <h6 class="title card-title">Ibrahim El Gibran</h6>
        <p class="card-p">Chief Technology Officer</p>
      </div>
      <div class="col-6 col-md-3 col-lg-2 card-col text-center mb-4">
        <img src="./images/team/rifandi.png" alt="html" class="mw-100 make-it-inline card-img" />
        <h6 class="title card-title">Rifandi Annas Shahruri</h6>
        <p class="card-p">Chief Executive Officer</p>
      </div>
      <div class="col-6 col-md-3 col-lg-2 card-col text-center mb-4">
        <img src="./images/team/elgibran.png" alt="html" class="mw-100 make-it-inline card-img" />
        <h6 class="title card-title">Ibrahim El Gibran</h6>
        <p class="card-p">Chief Financial Officer</p>
      </div>
      <div class="col-6 col-md-3 col-lg-2 card-col text-center mb-4">
        <img src="./images/team/elgibran.png" alt="html" class="mw-100 make-it-inline card-img" />
        <h6 class="title card-title">Ibrahim El Gibran</h6>
        <p class="card-p">Chief Financial Officer</p>
      </div>
    </div>
  </div>
</div>
<br><br><br>
<!-- Tools Section End -->


<!--Hero area end-->
<div class="hero_area">
  <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
      <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
      <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
      <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
      <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
      <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
    </g>
  </svg>
</div>
<style>
  /* Waves Animation start*/

  .hero_area {
    position: relative;
  }

  .waves {
    position: absolute;
    width: 100%;
    height: 10vh;
    min-height: 80px;
    max-height: 13 0px;
    bottom: 0;
    left: 0;
  }

  .parallax>use {
    animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
  }

  .parallax>use:nth-child(1) {
    animation-delay: -2s;
    animation-duration: 7s;
  }

  .parallax>use:nth-child(2) {
    animation-delay: -3s;
    animation-duration: 10s;
  }

  .parallax>use:nth-child(3) {
    animation-delay: -4s;
    animation-duration: 13s;
  }

  .parallax>use:nth-child(4) {
    animation-delay: -5s;
    animation-duration: 20s;
  }

  @keyframes move-forever {
    0% {
      transform: translate3d(-90px, 0, 0);
    }

    100% {
      transform: translate3d(85px, 0, 0);
    }
  }


  /*Shrinking for mobile*/

  @media (max-width: 768px) {
    .waves {
      height: 40px;
      min-height: 40px;
    }
  }

  /* Waves Animation end*/
</style>
<!--Hero area end-->


<!-- Footer -->
<?php $this->load->view('layouts/_footer') ?>
<!-- End of footer -->