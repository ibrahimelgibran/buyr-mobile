<div class="container">
	<div class="row mt-4">
		<div class="col">
			<div class="card">
				<h5 class="card-header">Order Pembayaran</h5>	
				<div class="card-body">
					<h4><strong>Kode Invoice : <?= $content['invoice'] ?></strong></h4>
					<p>Terimakasih, sampahmu tanggung jawab kami sekarang.</p>
					<br>
					<p>Silakan lewati pembayaran dengan prosedur berikut:</p>
					<ol>
						<li>Pembayaran dengan Virtual Account Bank  <strong>BSI 7205751291</strong> An. Ibrahim El Gibran</li>
						<li>Pembayaran dengan E-Wallet <strong>DANA 085876076005</strong> An. Ibrahim El Gibran</li>
						<li>Sertakan informasi dengan nomor pesanan <strong><?= $content['invoice'] ?></strong></li>
						<li>Total pembayaran <strong>Rp. <?= number_format($content['total'], 0, ',', '.') ?></strong></li>
					</ol>
					<p>Jika Anda sudah melakukan pembayaran, silakan kirimkan bukti transfernya ke sini <a class="button btn btn-primary btn-sm" href="<?= base_url('myorder/detail/' . $content['invoice']) ?>">Konfirmasi Pembayaran</a></p>
					<a href="<?= base_url('home') ?>" class="btn btn-primary btn-sm">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>

<style>
	.button {
    display: inline-block;
    color: white; /* Warna teks */
    text-align: center;;
    text-decoration: none;
    border: none;
    border-radius: 25px;
    cursor: pointer;
}

.button:hover {
    background-color: #0B60B0; /* Warna latar belakang saat dihover */
}

</style>