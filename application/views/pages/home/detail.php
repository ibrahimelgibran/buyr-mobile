<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <!-- Optimize CSS imports -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            padding-bottom: 70px; /* Untuk ruang footer */
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
            margin: 0;
            left: 0;
            right: 0;
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

        /* Dropdown akunku */
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
        
        /* Detail produk styling */
        .product-img {
            width: 100%;
            max-width: 330px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .mascot-img {
            width: auto;
            height: 215px;
            margin: 0 auto;
        }
        
        .price {
            font-weight: bold;
            color: #ffc107;
        }
        
        .info-table td {
            border: 2px solid #dee2e6;
            padding: 12px;
        }
        
        .section-heading {
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-weight: 600;
            color: #26a8d1;
        }
        
        .content-box {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <!-- Alert -->
    <?php $this->load->view('layouts/_alert') ?>

    <!-- Hero Section -->
    <div class="row mb-4">
        <div class="col-md-4 mb-3">
            <img src="<?= base_url() ?>/images/game/<?= $game['image'] ?>" class="product-img" alt="<?= $game['name'] ?>">
        </div>

        <div class="col-md-4 mb-3">
            <div class="table-responsive">
                <table class="table info-table">
                    <tbody>
                        <tr>
                            <td class="fw-bold">Paket</td>
                            <td><?= $game['name'] ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Edition</td>
                            <td><?= ucfirst($game['edition']) ?> Edition</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Description</td>
                            <td><?= character_limiter($game['description'], 100) ?></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">View More</td>
                            <td><a href="#description" class="text-info fw-bold">View more</a></td>
                        </tr>
                        <tr>
                            <td class="fw-bold">EDITION</td>
                            <td><span class="badge bg-info rounded-pill p-2"><?= ucfirst($game['edition']) ?></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="col-md-4 mb-3">
            <div class="text-center mb-3">
                <img src="https://ik.imagekit.io/elgibran/7182239_3582346-removebg-preview.png?updatedAt=1720319605443" class="mascot-img" alt="Mascot">
            </div>
            
            <div class="card border-dark">
                <div class="card-body text-center">
                    <h2 class="price mb-4">Rp. <?= number_format($game['price'], 2, ',', '.'); ?></h2>
                    <form action="<?= base_url('cart/add') ?>" method="POST">
                        <input type="hidden" name="product_id" value="<?= $game['id'] ?>">
                        <button type="submit" class="btn btn-success w-100">ADD TO CART</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Description Section -->
    <h3 id="description" class="section-heading">Ringkasan</h3>
    <div class="content-box">
        <?= $game['description'] ?>
    </div>

    <!-- System Requirements Section -->
    <h3 class="section-heading">Persyaratan Sistem</h3>
    <div class="content-box mb-5">
        <?= $game['requirements'] ?>
    </div>
</div>
 
<br><br><br>

<!-- Footer -->
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

</body>
</html>