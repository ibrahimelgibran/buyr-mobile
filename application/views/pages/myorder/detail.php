<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-lg-6">
            <div class="card">
                <h5 class="card-header bg-dark text-white text-center"><strong>Detail Pesanan #<?= $order['invoice'] ?></strong></h5>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Tanggal:</strong> <?= $order['date'] ?></li>
                        <li class="list-group-item"><strong>Nama:</strong> <?= $order['name'] ?></li>
                        <li class="list-group-item"><strong>No HP:</strong> <?= $order['phone'] ?></li>
                        <li class="list-group-item"><strong>Alamat:</strong> <?= $order['address'] ?></li>
                        <li class="list-group-item"><strong>Status:</strong>
                            <?php if($order['status'] == 'waiting') : ?>
                                <span class="badge badge-primary"><?= $order['status'] ?></span>
                            <?php elseif($order['status'] == 'paid') : ?>
                                <span class="badge badge-warning text-light"><?= $order['status'] ?></span>
                            <?php elseif($order['status'] == 'delivered') : ?>
                                <span class="badge badge-info"><?= $order['status'] ?></span>
                            <?php elseif($order['status'] == 'cancel') : ?>
                                <span class="badge badge-danger"><?= $order['status'] ?></span>
                            <?php endif; ?>
                        </li>
                    </ul>

                    <hr>

                    <div class="text-center text-info">
                        <small>Jika Anda memerlukan bantuan atau informasi, Anda dapat menghubungi:</small>
                        <br>
                        <small><strong>ibrahimelgibran17@gmail.com | 085876076005</strong></small>
                    </div>

                    <div class="text-center mt-3">
                        <?php if($order['status'] == 'waiting') : ?>
                            <form action="<?= base_url('myorder/confirm/' .  $order['invoice']) ?>" method="POST">
                                <button type="submit" class="btn btn-info btn-sm">Konfirmasi Pembayaran</button>
                            </form>
                        <?php endif ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
