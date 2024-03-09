<div class="container">
	<div class="row mt-4">
		<div class="col">
			<div class="card">
				<h5 class="card-header">Pembayaran Berhasil</h5>	
				<div class="card-body">
					<h4><strong>Jumlah order : <?= $content['invoice'] ?></strong></h4>
					<p>Terimakasih, sampahmu tanggung jawab kami sekarang.</p>
					<br>
					<p>Silakan lewati pembayaran dengan prosedur berikut:</p>
					<ol>
						<li>Lakukan pembayaran ke rekening <strong>BSI 7205751291</strong> An. Ibrahim El Gibran</li>
						<li>Sertakan informasi dengan nomor pesanan <strong><?= $content['invoice'] ?></strong></li>
						<li>Total pembayaran <strong>Rp. <?= number_format($content['total'], 0, ',', '.') ?></strong></li>
					</ol>
					<p>Jika Anda sudah melakukan pembayaran, silakan kirimkan bukti transfernya<a href="<?= base_url('myorder/detail/' . $content['invoice']) ?>"> ke tautan ini</a></p>
					<a href="<?= base_url('home') ?>" class="btn btn-primary btn-sm">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>
