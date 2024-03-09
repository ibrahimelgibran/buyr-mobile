<div class="container">
    <div class="row mt-4">
        <!-- Form -->
        <div class="col-lg-8">
            <div class="card">
                <h5 class="card-header bg-info text-white">Formulir Alamat Pengiriman</h5>
                <div class="card-body">
                    <form action="<?= base_url('checkout/create') ?>" method="POST">
                        <div class="form-group">
                            <label for="name">Nama Penerima</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <?= form_error('name', '<small class="text-danger mt-1">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat Lengkap</label>
                            <textarea class="form-control" id="address" name="address" rows="5"></textarea>
                            <?= form_error('address', '<small class="text-danger mt-1">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="phone">No HP</label>
                            <input type="number" class="form-control" id="phone" name="phone">
                            <?= form_error('phone', '<small class="text-danger mt-1">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End of Form -->

        <!-- Cart -->  
        <div class="col-lg-4">
            <div class="card">
                <h5 class="card-header bg-info text-white">Keranjang Anda</h5>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Produk</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($cart as $c) : ?>
                                <tr>
                                    <td><?= $c['name'] ?></td>
                                    <td>Rp. <?= number_format($c['price'], 2, ',', '.') ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Total</th>
                                <th>Rp. <?= number_format(array_sum(array_column($cart, 'subtotal')), 2, ',', '.') ?>,-</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!-- End of Cart -->
    </div>
</div>
