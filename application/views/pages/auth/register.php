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
    background-image: url('./images/banner/petani.png');
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
	<div class="row justify-content-center mt-4">
		<div class="col-md-5">
			<div class="card" style="border-radius:20px">
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-10">
							<form action="<?= base_url('register/register') ?>" method="POST" class="form-signin">
								<div class="text-center">
									<img class="mb-2" src="<?= base_url() ?>/images/logo/clean.png" width="210" height="72">
								</div>
			
								<h1 class="nav-item nav-link mr-1" style="font-size:30px; text-align:center; font-family: 'Montserrat', 'Poppins', sans-serif;  font-weight: bold;">Register</h1>

								<?php $this->load->view('layouts/_alert') ?>

								<div class="form-group">
									<input type="text" class="form-control" name="name" placeholder="Your complete name">
									<?= form_error('name', '<small class="text-danger ml-2 mt-1">', '</small>'); ?>
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" placeholder="Email">
									<?= form_error('email', '<small class="text-danger ml-2 mt-1">', '</small>'); ?>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password" placeholder="Password">
									<?= form_error('password', '<small class="text-danger ml-2 mt-1">', '</small>'); ?>
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password2" placeholder="Confirmation Password">
									<?= form_error('password2', '<small class="text-danger ml-2 mt-1">', '</small>'); ?>
								</div>
			
								<button class="btn btn-lg btn-info btn-block" type="submit">Register</button>
								<br>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
