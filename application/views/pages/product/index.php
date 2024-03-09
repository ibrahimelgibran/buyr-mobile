<div class="container">
    <div class="row mt-4 mb-3">
        <div class="col">
            <h2>List Paket</h2>
        </div>
        <div class="col text-right">
            <a href="<?= base_url('product/add') ?>" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah Paket
            </a>
        </div>
    </div>

    <?php $this->load->view('layouts/_alert') ?>

    <div class="row mt-3">
        <div class="col">
            <div class="table-responsive">
                <table class="table table-striped text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Edition</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach($product as $p) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $p['name'] ?></td>
                                <td>Rp. <?= number_format($p['price'], 2, ', ', '.'); ?></td>
                                <td><?= ucfirst($p['edition']) ?></td>
                                <td>
                                    <a href="<?= base_url('product/edit/' . $p['id']) ?>" class="btn btn-warning btn-sm" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url('product/delete/' . $p['id']) ?>" class="btn btn-danger btn-sm" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
