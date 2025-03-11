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

   /* Background image hanya aktif untuk tampilan desktop dan tablet */
   html,
   body {
    overflow-x: hidden;
    font-family: 'Poppins', sans-serif;
    background-color: #fff;
    width: 100%;
    margin: 0; 
    padding: 0; 
    /* background-image: url('./images/banner/bg.jpg'); */
    background-color: #26a8d1;
    background-repeat: no-repeat;
    background-size: cover;
    font-family: 'Poppins';
    background-position: center;
    background-attachment: fixed; /* Ini akan memastikan background tidak bergeser saat scroll */
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

<br><br><br>

<div class="container">
  <div class="row justify-content-center mt-3">
    <div class="col-md-4"> <!-- Menggunakan col-md-6 untuk tampilan desktop dan tablet, dan akan full width di tampilan HP -->
      <div class="card" style="border-radius:20px">
        <div class="card-body">
          <form action="<?= base_url('login/login') ?>" method="post" class="form-signin text-center">
            <img class="mb-4" src="<?= base_url() ?>/images/logo/logo.png" width="100" height="auto">
            <?php  $this->load->view('layouts/_alert') ?>
            <h1 class="nav-item nav-link mr-1" style="font-size:30px; font-family: 'Poppins', sans-serif;  font-weight: bold;">Please sign in</h1>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Your email" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Your password" required>
            </div>
            <button class="btn btn-lg btn-info btn-block" type="submit">Sign in</button>
            <br><br>
								<p class="text-center" style="text-align: center;" >Belum memiliki akun? <a href="<?= base_url('register') ?>">Signup</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


