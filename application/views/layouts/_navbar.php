<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
 body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    width: 100%;
  }
  .container {
    width: 100%;
    max-width: 100%;
    padding-right: 0;
    padding-left: 0;
    margin-right: auto;
    margin-left: auto;
  }
  .navbar {
    margin-right: 0;
    margin-left: 0;
  }
  .footer {
    margin-right: 0;
    margin-left: 0;
  }
  @media (min-width: 768px) {
    .container {
        max-width: 750px;
    }
  }
  @media (min-width: 992px) {
    .container {
        max-width: 970px;
    }
  }
  @media (min-width: 1200px) {
    .container {
        max-width: 1170px;
    }
  }
  .navbar .navbar-nav {
    display: flex;
    justify-content: flex-end;
  }
  .footer {
    display: flex;
    justify-content: space-around;
    align-items: center;
  }
  .navbar-toggler i {
    font-size: 24px; /* Sesuaikan ukuran ikon */
    color: #000; /* Ganti warna ikon sesuai kebutuhan */
  }
  .dropdown-menu {
    right: 0;
    left: auto;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url('home') ?>">
			<img src="<?= base_url() ?>/images/logo/logo.png" width="100" height="auto" class="d-inline-block align-top" alt="logo" loading="lazy">
		</a>
		<div class="navbar-toggler" style="margin-right: 30px;"  type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</div>
		<div class="collapse navbar-collapse" style="margin-left: 10px;"  id="navbarNavAltMarkup">
			<div class="navbar-nav ml-auto">
				<?php if($this->session->login == TRUE) : ?>
					<!-- Jika yg login user -->
					<?php if($this->session->userdata('role') == 2) : ?>
						

						<a class="nav-item nav-link mr-3 active " style="font-family: 'Poppins', sans-serif;  font-weight: bold;" href="<?= base_url('cart') ?>">
							<i class="fas fa-shopping-cart"></i>
						</a>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-user"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?= base_url('profile') ?>">
									<i class="fas fa-user-cog"></i>
									Profile
								</a>
								<a class="dropdown-item" href="<?= base_url('myorder') ?>">
									<i class="fas fa-shopping-bag"></i>
									My Orders
								</a>
								<a class="dropdown-item" href="<?= base_url('profile/password') ?>">
									<i class="fas fa-key"></i>
									Change Password 
								</a>
							<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('logout') ?>">
									<i class="fas fa-sign-out-alt"></i>
									Logout
								</a>
							</div>
						</li>
					<!-- Jika admin -->
					<?php else : ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Manage
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="<?= base_url('banner') ?>">Banner</a>
								<a class="dropdown-item" href="<?= base_url('product') ?>">Product</a>
								<a class="dropdown-item" href="<?= base_url('order') ?>">Order</a>
								<a class="dropdown-item" href="<?= base_url('user') ?>">Users</a>
							</div>
						</li>
						<li class="nav-item dropdown active">
							<a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-user"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?= base_url('profile') ?>">
									<i class="fas fa-key"></i>
									Profile
								</a>
								<a class="dropdown-item" href="<?= base_url('profile/password') ?>">
									<i class="fas fa-key"></i>
									Change Password 
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?= base_url('logout') ?>">
									<i class="fas fa-sign-out-alt"></i>
									Logout
								</a>
							</div>
						</li>
					<?php endif ?>
				<?php else: ?>
					<div class="nav-item dropdown" style="margin-right: 30px; font-family:'Poppins">
					<a class="nav-item nav-link mr-3 active" style="font-family: 'Poppins', sans-serif;  font-weight: bold;" href="<?= base_url('login') ?>">Login</a>
					<a class="nav-item nav-link mr-3 active" style="font-family:  'Poppins', sans-serif;  font-weight: bold;" href="<?= base_url('register') ?>">Signup</a>
					</div>
				<?php endif ?>
			</div>
		</div>
	</div>
</nav>
