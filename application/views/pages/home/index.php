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
<br>
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
<div class="haha">
  <div class="container" style="margin-top: -5%;">
    <div class="row" style="margin-top: -7%;">
      <div class="col-md-6 py-3">
        <br><br>
        <h2 class="title-section">Kami <span class="marked">ready</span> untuk melayani anda dengan yang terbaik</h2>
        <div class="divider"></div>
        <p class="pusing" style="text-align:left">Cleanee merupakan sebuah layanan pengolahan sampah dengan tema zero waste dimana sampah an organik seperti plastik akan di daur ulang dan sampah rumah tangga akan di urai menjadi kompos sehingga akan mengurangi volume sampah yang tersedia.</p>
        <form action="<?= base_url('register') ?>" method="POST">
          <button type="submit" class="btn btn-primary">→ Daftar Now</button>
        </form>

      </div>
      <div class="gambar col-md-6 ">
        <div class="img-place text-center">
          <img src="./images/logo/ba.png" style="width: 85%; height: auto;" alt=""> <!-- Ubah height menjadi auto agar proporsional -->
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .haha {
    position: relative;
    padding-top: 80px;
    padding-bottom: -20px;
    /* Tambahkan padding bawah untuk memberikan ruang antara konten dan elemen berikutnya */
    background-color: #fff;
    overflow: hidden;
  }

  .haha p {
    color: #898798;
  }

  .pusing {
    margin-left: 0;
    /* Ubah margin-left menjadi 0 */
  }

  .title-section {
    margin-left: 0;
    /* Ubah margin-left menjadi 0 */
    max-width: 450px;
    color: #2D2B3A;
    font-weight: 600;
  }

  .title-section .marked {
    position: relative;
    color: #6C55F9;
  }

  .title-section .marked::before {
    content: '';
    position: absolute;
    bottom: 4px;
    left: 0;
    width: 100%;
    height: 8px;
    background-color: #d3ccff;
    z-index: -1;
  }

  .title-section .marked {
    position: relative;
    color: #387ADF;
  }

  .title-section .marked::before {
    content: '';
    position: absolute;
    bottom: 4px;
    left: 0;
    width: 100%;
    height: 8px;
    background-color: #d3ccff;
    z-index: -1;
  }

  .divider {
    margin-left: 0;
    /* Ubah margin-left menjadi 0 */
    display: block;
    margin-top: 16px;
    margin-bottom: 32px;
    width: 32px;
    height: 3px;
    border-radius: 40px;
    background-color: #387ADF;
  }

  .text-center .title-section {
    margin-left: auto;
    margin-right: auto;
  }
</style>




<!-- List Item -->
<div class="container">
  <div class="row mt-5">
    <div class="col">
      <h2 class="head" style="font-size: 30px;" id="pesanan">Pilih Paket</h2>
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
            <!-- <h3 class="text-right text-warning price mt-4">Rp.<?= number_format($game['price'], 2, ', ', '.'); ?></h3> -->
            <a href="<?= base_url('home/detail/' . $game['id']) ?>" class="btn btn-outline-info btn-sm btn-block mt-3" >Order dan Lihat Selengkapnya</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<!-- End of List Item -->


<!-- Sponsor -->
<div class="dev-company-info bg-light" id="colab">
  <br>
  <div class="woy">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-6 col-xl-5 col-md-10">
        <div class="dev-company-info--text text-center text-lg-start mb-5 mb-lg-0">
          <h2 class="title">
            Klient Seluruh Wilayah Yogyakarta
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

<!-- Counter Section Start -->
<h2 class="text-center" style="font-weight: bold; margin-top:-30px; ">Our Service  <span class="team" style="color:#1777E5">Cleanee</span></h2>
<p class="text-center mb-5">Pekerjaan yang dapat kami kerjakan dan kolaborasikan dengan Anda.</p>
<div class="dev-counter-section">
  <div class="anjay">
    <div class="row align-items-center card-row">
      <div class="col-md-3 col-6">
        <div class="dev-count-block text-center">
          <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 33L24 43.5L42 33" stroke="#1777E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M6 24L24 34.5L42 24" stroke="#1777E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M6 15L24 25.5L42 15L24 4.5L6 15Z" stroke="#1777E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <h3 class="title"><span class="counter" data-count="1">1</span>+</h3>
          <p class="text">Years of Experience</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="dev-count-block text-center">
          <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M40.5 13.5H7.5C6.67157 13.5 6 14.1716 6 15V39C6 39.8284 6.67157 40.5 7.5 40.5H40.5C41.3284 40.5 42 39.8284 42 39V15C42 14.1716 41.3284 13.5 40.5 13.5Z" stroke="#1777E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M31.5 13.5V10.5C31.5 9.70435 31.1839 8.94129 30.6213 8.37868C30.0587 7.81607 29.2956 7.5 28.5 7.5H19.5C18.7044 7.5 17.9413 7.81607 17.3787 8.37868C16.8161 8.94129 16.5 9.70435 16.5 10.5V13.5" stroke="#1777E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M42 23.6812C36.5293 26.8451 30.3197 28.5074 24 28.4999C17.6791 28.5164 11.4673 26.8534 6 23.6812" stroke="#1777E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M21.75 22.5H26.25" stroke="#1777E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <h3 class="title"><span class="counter" data-count="50">0</span>+</h3>
          <p class="text">Completed Projects</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="dev-count-block text-center">
          <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M24 42C33.9411 42 42 33.9411 42 24C42 14.0589 33.9411 6 24 6C14.0589 6 6 14.0589 6 24C6 33.9411 14.0589 42 24 42Z" stroke="#1777E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path class="fill" d="M17.25 22.5C18.4926 22.5 19.5 21.4926 19.5 20.25C19.5 19.0074 18.4926 18 17.25 18C16.0074 18 15 19.0074 15 20.25C15 21.4926 16.0074 22.5 17.25 22.5Z" fill="#1777E5" />
            <path d="M28.5 20.25H33" stroke="#1777E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M31.8 28.5C31.007 29.8661 29.8691 31 28.5003 31.7882C27.1314 32.5764 25.5795 32.9913 24 32.9913C22.4204 32.9913 20.8685 32.5764 19.4996 31.7882C18.1308 31 16.9929 29.8661 16.2 28.5" stroke="#1777E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <h3 class="title"><span class="counter" data-count="48">0</span>+</h3>
          <p class="text">Happy Clients</p>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="dev-count-block text-center">
          <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.4999 4.5V10.5" stroke="#1777E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M22.5 4.5V10.5" stroke="#1777E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M28.5001 4.5V10.5" stroke="#1777E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M6.00012 40.5H39.0001" stroke="#1777E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M15.6189 40.4998C12.748 39.1824 10.3156 37.0688 8.61053 34.4098C6.90548 31.7509 5.99947 28.6584 6.00012 25.4998V16.4998H39.0001V25.4998C39.0008 28.6584 38.0948 31.7509 36.3897 34.4098C34.6847 37.0688 32.2522 39.1824 29.3814 40.4998" stroke="#1777E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M39.0002 16.4998C40.5915 16.4998 42.1176 17.1319 43.2428 18.2571C44.368 19.3823 45.0002 20.9085 45.0002 22.4998V23.9998C45.0002 25.5911 44.368 27.1172 43.2428 28.2424C42.1176 29.3676 40.5915 29.9998 39.0002 29.9998H38.3627" stroke="#1777E5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <h3 class="title"><span class="counter" data-count="24">24</span>+</h3>
          <p class="text">Hours of Work</p>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  const counters = document.querySelectorAll(".counter");

counters.forEach((counter) => {
  const target = parseInt(counter.dataset.count); // Dapatkan nilai akhir dari data-count
  let current = 0;

  const interval = setInterval(() => {
    current++;
    counter.textContent = current;

    if (current === target) {
      clearInterval(interval); // Hentikan animasi saat target tercapai
    }
  },150); // Atur interval (dalam milidetik) untuk kecepatan animasi (lebih rendah untuk lebih cepat)
});

</script>
<style>
  /* Counter Section Styles */
  .dev-count-block {
    background-color: #fff;
    border-radius: 10px;
    padding: 30px 20px;
    margin: 0 45px;
    text-align: center;
    box-shadow: 0 10px 5px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
  }

  .dev-count-block:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  }

  .dev-count-block svg {
    margin-bottom: 20px;
  }

  .dev-count-block h3.title {
    font-size: 2em;
    margin-bottom: 10px;
    color: #1777E5;
  }

  .dev-count-block h3.title .counter {
    font-weight: bold;
  }

  .dev-count-block p.text {
    font-size: 16px;
    color: #333;
  }

  /* Responsive Styles */
  @media (max-width: 768px) {
    .dev-counter-section {
      padding: 30px 0;
    }

    .row {
      flex-wrap: wrap;
      /* Wrap counters on smaller screens */
    }

    .dev-count-block {
      margin: 10px;
    }
  }
</style>
<!-- Counter Section End -->
<br><br><br>

<!-- TESTIMONI-->
<div class="outerdiv">
<h2 class="pusing mt-4" style="font-weight: bold;">Testimonials  <span class="team" style="color:#1777E5">Cleanee</span>
    <div class="innerdiv">
      <!-- div1 -->
      <div class="div1 eachdiv" style="text-align:left">
        <div class="userdetails">
          <div class="imgbox">
            <img src="https://smksmuhammadiyahgamping.sch.id/media_library/employees/39b2a78ddc16adfc28049d92d13ef5e1.jpg" style="width:50px; height:50px" alt="">
          </div>
          <div class="detbox">
            <p class="name">SARDI, S.PD, MM.</p>
            <p class="designation">Kepala Sekolah SMK MUHAMMADIYAH GAMPING</p>
          </div>
        </div>
        <div class="review">
          <h4>Lingkungan yang bersih menciptakan <br> belajar yang nyaman dan produktif.</h4>
        <p>“ Program Cleanee sangat membantu lingkungan yang bersih di sekolah tidak hanya menciptakan kesan visual yang menyenangkan tetapi juga memengaruhi suasana belajar secara keseluruhan. Kebersihan ini tidak hanya memberikan kenyamanan visual tetapi juga mempengaruhi kesehatan fisik dan mental siswa, menciptakan kondisi yang ideal untuk fokus belajar dan pengembangan potensi. ”</p>
        </div>
      </div>
      <!-- div2 -->
      <div class="div2 eachdiv"  style="text-align:left" >
        <div class="userdetails">
          <div class="imgbox">
            <img src="./images/logo/sha.jpg" style="width:50px; height:50px" alt="">
          </div>
          <div class="detbox">
            <p class="name">ZIN SHA </p>
            <p class="designation">SwiftBeaute - Zumba Instructur</p>
          </div>
        </div>
        <div class="review">
          <h4>Kebersihan sampah adalah kunci untuk kulit yang sehat dan cantik.</h4>
        <p>“ menciptakan lingkungan yang sehat dan bersih bagi perawatan diri kita setelah berlangganan dengan Cleanee. ”</p>
        </div>
      </div>
      <!-- div3 -->
      <div class="div3 eachdiv"  style="text-align:left">
        <div class="userdetails">
          <div class="imgbox">
            <img src="./images/logo/teamgmt.jpg" style="width:50px; height:50px" alt="">
          </div>
          <div class="detbox">
            <p class="name dark">Team GMT</p>
            <p class="designation dark">Gemilang Multi Teknologi</p>
          </div>
        </div>
        <div class="review dark">
          <h4>Inovasi untuk Kebebasan Teknologi dan Platform Layanan Bisnis Teknologi: Bersihkan Dengan Cerdas, Tanpa Jejak Sampah.!</h4>
          <p>“ Cleanee merupakan platform Melalui inovasi untuk kebebasan teknologi dan platform layanan bisnis, kami memperkenalkan solusi bersih tanpa jejak untuk mengelola limbah elektronik dan teknologi secara efisien. Kita bisa menciptakan lingkungan yang lebih bersih dan berkelanjutan. Solusi memastikan pengelolaan limbah elektronik dan teknologi yang efisien, tanpa meninggalkan jejak berlebihan. ”</p>
        </div>
      </div>
      <!-- div4 -->
      <div class="div4 eachdiv"  style="text-align:left">
        <div class="userdetails">
          <div class="imgbox">
            <img src="./images/logo/rizky.jpg" style="width:50px; height:50px"  alt="">
          </div>
          <div class="detbox">
            <p class="name dark">Rizky Alexander Risamasu</p>
            <p class="designation dark">CEO BUYR Nusantara</p>
          </div>
        </div>
        <div class="review dark">
          <h4>Struk Digital Mengurangi Sampah.</h4>
        <p>“ Cleanee memberikan Solusi struk digital pembelian yang diterbitkan oleh retail melalui buyr akan muncul di dalam aplikasi, dan pengguna dapat menyimpan struk tersebut. ”</p>
        </div>
      </div>
      <!-- div5 -->
      <div class="div5 eachdiv" style="text-align:left">
        <div class="userdetails">
          <div class="imgbox">
          <img src="https://yt3.googleusercontent.com/LxOO_p0TSDwI3nh8nmYGuiZwAQJyZYUB-MWmQjhlXYDVWyjsK34781UjSD3tmV1fnJqhCZLYIQ=s176-c-k-c0x00ffffff-no-rj" style="width:50px; height:50px" alt="">
          </div>
          <div class="detbox">
            <p class="name">Devi Kusumawardhani</p>
            <p class="designation">Komisaris PT Nusantara Satria Tama</p>
          </div>
        </div>
        <div class="review">
          <h4>Kebersihan adalah tanggung jawab <br> kita bersama.</h4>
        <p>“ Mencerminkan suatu langkah Cleanee yang sangat penting. Dengan memastikan bahwa sampah-sampah dikelola dan dibuang dengan benar sesuai dengan prosedur yang ditetapkan, perusahaan menciptakan lingkungan kerja yang bersih, aman, dan nyaman bagi seluruh karyawan. Kebersihan sampah juga mencerminkan komitmen perusahaan terhadap lingkungan. Dengan demikian, menjaga kebersihan sampah adalah bagian integral dari budaya kerja yang profesional dan bertanggung jawab di perusahaan. ”</p>
        </div>
      </div>
    </div>
  </div>
  <style>
.pusing{
  text-align: center
}

    @import url('https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@500;600&display=swap');

a:link,a:active,a:visited,a:hover{
	color:#3f51b5;
}

.outerdiv
{
	width: 100%;
    min-height: 100vh;
    background: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
}
.innerdiv
{
	transform: scale(0.9);
	margin: 1rem;
	display: grid;
	grid-gap: 1.5rem;
	grid-template-rows: repeat(2,22rem);
	grid-template-columns: repeat(4,17rem);
}
.eachdiv
{
	padding: 1rem 2rem;
    border-radius: 0.8rem;
    box-shadow: 5px 5px 20px #6d6b6b6b;
    color: white;
}
.div1 {
    background: #0D9276;
    grid-column: 1/3;
    grid-row: 1/2;
    background-image: url(./images/sponsor/smk.png);
    background-repeat: no-repeat;
    background-size: 130px;
    background-position-x: 27rem;
}

.div2 {
    background: #49556B;
    grid-column: 3/4;
    grid-row: 1/2;
    background-position-x: 8.5rem;
    background-repeat: no-repeat;
    background-size: 60%;
    background-image: url(./images/sponsor/swift.png);
}

.div3 {
    background: #F9F3CC;
    grid-column: 4/5;
    grid-row: 1/3;
    color: black;
    background-position-x: 12.5rem;
    background-repeat: no-repeat;
    background-size: 23%;
    background-image: url(./images/sponsor/gmt.png);
}

.div4 {
    background: #F38181;
    grid-column: 1/2;
    grid-row: 2/3;
    color: black;
    background-position-x: 9.5rem;
    background-repeat: no-repeat;
    background-size: 59%;
    background-image: url(./images/sponsor/buyr.png);
}

.div5 {
    background: #18202D;
    grid-column: 2/4;
    grid-row: 2/3;
    background-position-x: 25rem;
    background-size: 25%;
    background-repeat: no-repeat;
    background-image: url(./images/sponsor/nst1.png);
}

@media only screen and (max-width: 600px) {
    .div1 {
        background-position: right top !important;
    }

    .div2 {
        background-position: right top !important;
    }

    .div3 {
        background-position: right top !important;
    }

    .div4 {
        background-position: right top !important;
    }

    .div5 {
        background-position: right top !important;
    }
}


.userdetails
{
	display: flex;
}
.imgbox
{
	margin-right: 1rem;
}
.imgbox img
{
	border-radius: 50%;
	width: 2rem;
	border: 2px solid #cec5c5;
}
.detbox
{
	display: flex;
    flex-direction: column;
    justify-content: center;
}
.detbox p
{
	margin: 0;
}
.detbox .name
{
	color: hsl(0, 0%, 81%);
    font-size: 0.9rem;
    margin-bottom: 0.1rem;
    font-weight: 600;
}
.detbox .name.dark
{
	color: #49505A;
}
.detbox .designation
{
	color: hsl(0, 0%, 81%);
    opacity: 50%;
    font-size: 0.8rem;
}
.detbox .designation.dark
{
	color: #49505A;
}
.review h4
{
	font-size: 1.4rem;
	color: #F3DEFF;
    font-weight: 600;
    line-height: 1.5;
    margin-bottom: 0.8rem;
}
.review.dark h4{
	color:#4B5258;
}
.review p
{
	font-size: 0.95rem;
    color: #F3DEFF;
    font-weight: 500;
    opacity: 50%;
    line-height: 1.5;
}
.review.dark p{
	color: #0e0e0e;
}
.attribution
{
	font-size: 1rem;
    line-height: 1.5;
    position: fixed;
    bottom: 1rem;
    right: 1rem;
    text-align: right;
}
.attribution a
{
	text-decoration: none;
}

@media only screen and (max-width: 1000px)
{
	.innerdiv
	{
		transform: scale(0.7);
	}
}
@media only screen and (max-width: 800px)
{
	.innerdiv
	{
		transform: scale(0.6);
	}
}
@media only screen and (max-width: 600px)
{
	.div1 {
		background-position-x: 10rem;
	}
	.innerdiv
	{
		display: flex; 
		flex-direction: column;
		transform: scale(1);
		margin: 2rem;
		margin-bottom: 5rem;
	}
	.attribution
	{
		position: relative;
	}
}
  </style>
<!-- END TESTIMONI-->
<br>
<!-- Tools Section Start -->
<div class="tools-area">
  <div class="container">
    <div class="dev-section-title text-center">
    <h2 class="title">Team <span class="team" style="color:#1777E5">Cleanee</span></h2>
      <p class="text">Sebuah team yang penuh semangat dan dedikasi.</p>
    </div><br>
    <style>
      .dev-section-title {
        margin-bottom: 30px;
        /* Menambahkan jarak bawah antara judul dan paragraf */
      }

      .dev-section-title .title {
        font-size: 30px;
        /* Ukuran font judul */
        color: #000;
        /* Warna teks judul */
        font-weight: bold;
        /* Ketebalan font judul */
      }

      .dev-section-title .text {
        font-size: 16px;
        /* Ukuran font teks */
        color: #333;
        /* Warna teks */
      }

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
      <img src="./images/team/reza.png" alt="html" class="mw-100 make-it-inline card-img" />
      <h6 class="title card-title">Reza Apriansyah</h6>
      <p class="card-p">Chief Operating Officer</p>
    </div>
  </div>

  <div class="row card-row justify-content-center">
    <div class="col-6 col-md-3 col-lg-2 card-col text-center mb-4">
      <img src="./images/team/dean.png" alt="html" class="mw-100 make-it-inline card-img" />
      <h6 class="title card-title">Deandra Gerva Oxa Bernino</h6>
      <p class="card-p">CMO Chief Marketing Officer</p>
    </div>
    <div class="col-6 col-md-3 col-lg-2 card-col text-center mb-4">
      <img src="./images/team/fauzi.png" alt="html" class="mw-100 make-it-inline card-img" />
      <h6 class="title card-title">Bagas Nurfauzi Hidayatullah</h6>
      <p class="card-p">CFO Chief Financial Officer</p>
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

<!-- button chackbok -->
<button class="live-chat-btn" onclick="window.location.href='https://chatapp.smksmuhammadiyahgamping.sch.id/'">
  <img src="./images/logo/chat.png" alt="Icon Pesan" width="24" height="24"> Live Chat
</button>

<style>
  .live-chat-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    font-family: inherit;
    font-size: 13px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.4px;
    color: #000;
    background-color: #e0e8ef;
    border-style: solid;
    border-width: 2px 2px 2px 2px;
    border-color: rgba(255, 255, 255, 0.333);
    border-radius: 40px 40px 40px 40px;
    padding: 16px 24px 16px 28px;
    transition: 0.2s;
    box-shadow: -4px -2px 16px 0px #ffffff, 4px 2px 16px 0px rgb(95 157 231 / 48%);
    position: fixed;
    bottom: 20px;
    right: 20px;
  }

  .live-chat-btn:hover {
    color: #516d91;
    background-color: #E5EDF5;
    box-shadow: -2px -1px 8px 0px #ffffff, 2px 1px 8px 0px rgb(95 157 231 / 48%);
  }

  .live-chat-btn:active {
    box-shadow: none;
  }
</style>

<!--end button chackbok-->