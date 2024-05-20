<?php 
include 'header.php';
?>
<!-- IMAGE-->
<div class="carousel-item">
 <center><img src="image/home/1.png" style="width:60%"></center>
  <div class="carousel-caption">
  </div>
</div>

<br>
<br>

<!-- PRODUK TERBARU -->
<div class="container">
		<h4 class="text-center" style="font-family: arial; padding-top: 10px; padding-bottom: 10px; font-style: italic; line-height: 29px; border-top: 2px solid #000099; border-bottom: 2px solid #000099;">Poros Sinar Media adalah sebuah platform marketplace Iklan Luar Ruang (OOH/DOOH) yang memberikan berbagai macam pilihan media seperti Billboard, Videotron, Banner, dan lain-lainnya yang di dukung dengan Teknologi terkini yang menyediakan Traffic dan Demographic Data yang tersebar di seluruh Indonesia.</h4>
	<h2 style=" width: 100%; border-bottom: 4px solid #000099; margin-top: 80px;"><b>Produk Kami</b></h2>

	<div class="row">
		<?php 
		$result = mysqli_query($conn, "SELECT * FROM produk");
		while ($row = mysqli_fetch_assoc($result)) {
			?>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="image/produk/<?= $row['image']; ?>" >
					<div class="caption">
						<h3><?= $row['nama'];  ?></h3>
						<h4>Rp.<?= number_format($row['harga']); ?></h4>
						<div class="row">
							<div class="col-md-6">
								<a href="detail_produk.php?produk=<?= $row['kode_produk']; ?>" class="btn btn-warning btn-block">Detail</a> 
							</div>
							<?php if(isset($_SESSION['kd_cs'])){ ?>
								<div class="col-md-6">
									<a href="proses/add.php?produk=<?= $row['kode_produk']; ?>&kd_cs=<?= $kode_cs; ?>&hal=1" class="btn btn-success btn-block" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
								</div>
								<?php 
							}
							else{
								?>
								<div class="col-md-6">
									<a href="keranjang.php" class="btn btn-success btn-block" role="button"><i class="glyphicon glyphicon-shopping-cart"></i> Tambah</a>
								</div>

								<?php 
							}
							?>

						</div>

					</div>
				</div>
			</div>
			<?php 
		}
		?>
	</div>

</div>
<br>
<br>
<br>
<br>

<div class="carousel-item">
 <center><img src="image/home/2.png" style="width:80%"></center>
  <div class="carousel-caption">
  </div>
</div>
<?php 
include 'footer.php';
?>