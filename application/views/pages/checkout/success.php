<div class="container">
	<div class="row mt-4">
		<div class="col">
			<div class="card">
				<h5 class="card-header">Order Pembayaran</h5>	
				<div class="card-body">
					<h4><strong>Kode Invoice : <?= $content['invoice'] ?></strong></h4>
					<p>Terimakasih, sampahmu tanggung jawab kami sekarang.</p>
					<br>
					<p>Silakan lewati pembayaran manual dengan prosedur berikut:</p>
					<br>
					<p>Virtual Account Bank:</p>
					<ul>
						<li><strong>Mandiri 1370023557081</strong> A.n. Ibrahim El Gibran</li>
						<li><strong>BRI 203301005288531</strong> A.n. Ibrahim El Gibran</li>
						<li><strong>BSI 7205751291</strong> A.n. Ibrahim El Gibran</li>
						<li><strong>Bank Jago 504304694320</strong> A.n. Ibrahim El Gibran</li>
						<!-- <li>Pembayaran dengan E-Wallet <strong>DANA 085876076005</strong> An. Ibrahim El Gibran</li> -->
						<!-- <li>Sertakan informasi dengan nomor pesanan <strong><?= $content['invoice'] ?></strong></li> -->
						<!-- <li>Total pembayaran <strong>Rp. <?= number_format($content['total'], 0, ',', '.') ?></strong></li> -->
					</ul>
					<br>
					<p>E-Wallet:</p>
					<ul>
						<li><strong>DANA 085876076005</strong> A.n. Ibrahim El Gibran</li>
						<li><strong>OVO 085876076005</strong> A.n. Ibrahim El Gibran</li>
						<li><strong>GoPay 085876076005</strong> A.n. Ibrahim El Gibran</li>
						<li><strong>ShopeePay 085876076005</strong> A.n. Ibrahim El Gibran</li>
						<!-- <li>Pembayaran dengan E-Wallet <strong>DANA 085876076005</strong> An. Ibrahim El Gibran</li> -->
						<!-- <li>Sertakan informasi dengan nomor pesanan <strong><?= $content['invoice'] ?></strong></li> -->
						<!-- <li>Total pembayaran <strong>Rp. <?= number_format($content['total'], 0, ',', '.') ?></strong></li> -->
					</ul>
					<p>Sertakan informasi dengan nomor pesanan <strong><?= $content['invoice'] ?></strong></p>
					<p>Total pembayaran<strong> Rp. <?= number_format($content['total'], 0, ',', '.') ?></strong></p>
					<p>Jika Anda sudah melakukan pembayaran, silakan kirimkan bukti transfernya ke sini <a class="button btn btn-primary btn-sm" href="<?= base_url('myorder/detail/' . $content['invoice']) ?>">Konfirmasi Pembayaran</a></p>
					<a href="<?= base_url('home') ?>" class="btn btn-primary btn-sm">Kembali</a>
				</div>
			</div>
			<br>
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