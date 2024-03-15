<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-lg-8">
            <div class="card">
                <h5 class="card-header text-center bg-dark text-light"><strong>Order Detail #<?= $order['invoice'] ?></strong></h5>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>Date: <?= $order['date'] ?></li>
                        <li>Name: <?= $order['name'] ?></li>
                        <li>Phone: <?= $order['phone'] ?></li>
                        <li>Address: <?= $order['address'] ?></li>
                        <li>Status: 
                            <?php if($order['status'] == 'waiting') : ?>
                                <span class="badge badge-primary"><?= $order['status'] ?></span>
                            <?php elseif($order['status'] == 'paid') : ?>
                                <span class="badge badge-warning text-dark"><?= $order['status'] ?></span>
                            <?php elseif($order['status'] == 'delivered') : ?>
                                <span class="badge badge-info"><?= $order['status'] ?></span>
                            <?php elseif($order['status'] == 'cancel') : ?>
                                <span class="badge badge-danger"><?= $order['status'] ?></span>
                            <?php endif; ?>
                        </li>
                    </ul>

                    <div class="table-responsive">
                        <table class="table table-bordered text-center mt-3">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Game</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($order_detail as $od) : ?>
                                    <tr>
                                        <td>
                                            <img src="<?= base_url('images/game/' . $od['image']) ?>" style="max-width: 200px;">
                                        </td>
                                        <td><strong>Rp. <?= number_format($od['price'], 2, ',', '.') ?></strong></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                            <tfoot class="bg-success text-light">
                                <tr>
                                    <td colspan="1"><strong>Total</strong></td>
                                    <td><h5><strong>Rp. <?= number_format(array_sum(array_column($order_detail, 'subtotal')), 2, ',', '.') ?></strong></h5></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <form action="<?= base_url("order/update/" . $order['id']) ?>" method="post">
                        <input type="hidden" name="id" value="<?= $order['id'] ?>">
                        <div class="input-group">
                            <select name="status" class="form-control">
                                <option value="waiting" <?= $order['status'] == 'waiting' ? 'selected' : '' ?>>Penjemputan ke lokasi anda!</option>
                                <option value="paid" <?= $order['status'] == 'paid' ? 'selected' : '' ?>>Sudah Terbayar!</option>
                                <option value="delivered" <?= $order['status'] == 'delivered' ? 'selected' : '' ?>>Success sampah diambil!</option>
                                <option value="cancel" <?= $order['status'] == 'cancel' ? 'selected' : '' ?>>Cancel!</option>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-info" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php if(isset($order_confirm)) : ?>
        <div class="row mt-3">
            <div class="col-lg-8">
                <div class="card">
                    <h5 class="card-header bg-info text-light text-center">Payments Confirmation</h5>
                    <div class="card-body">
                        <p>No HP: <strong><?= $order_confirm['account_name'] ?></strong></p>
                        <hr>
                        <p>Account Name: <strong><?= $order_confirm['account_number'] ?></strong></p>
                        <hr>
                        <p>Nominal: <strong>Rp. <?= number_format($order_confirm['nominal'], 2, ',', '.') ?></strong></p>
                        <hr>
                        <p>Note: <strong><?= $order_confirm['note'] ?></strong></p>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-center">
                <img src="<?= base_url('images/payments/' . $order_confirm['image']) ?>" height="200px">
            </div>
        </div>
    <?php endif ?>
</div>
<br>