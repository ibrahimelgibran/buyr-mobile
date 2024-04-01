<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<br><br><br>
<div class="container">
<script>
  // Check jika lebar layar kurang dari 768px (mode HP)
  if (window.innerWidth < 768) {
    // Menambahkan kelas untuk menonaktifkan background image
    document.body.classList.add('no-background-image');
  }
</script>

<style>
  /* Background image hanya aktif untuk tampilan desktop dan tablet */
  body {
    margin: 0; 
    padding: 0; 
    background-image: url('./images/banner/bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed; /* Ini akan memastikan background tidak bergeser saat scroll */
}




  /* Menonaktifkan background image untuk tampilan HP */
  @media (max-width: 767px) {
    body.no-background-image {
      background-image: none !important;
    }
  }
</style>

  <div class="row justify-content-center mt-5">
    <div class="col-md-4"> <!-- Menggunakan col-md-6 untuk tampilan desktop dan tablet, dan akan full width di tampilan HP -->
      <div class="card" style="border-radius:20px">
        <div class="card-body">
          <form action="<?= base_url('login/login') ?>" method="post" class="form-signin text-center">
            <img class="mb-4" src="<?= base_url() ?>/images/logo/clean.png" width="210" height="72">
            <?php  $this->load->view('layouts/_alert') ?>
            <h1 class="nav-item nav-link mr-1" style="font-size:30px; font-family: 'Montserrat', 'Poppins', sans-serif;  font-weight: bold;">Please sign in</h1>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Your email" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Your password" required>
            </div>
            <button class="btn btn-lg btn-info btn-block" type="submit">Sign in</button>
            <br>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


