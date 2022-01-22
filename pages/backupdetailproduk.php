<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
	<link rel="stylesheet" href="css/flexslider1.css" type="text/css" media="screen" />
	<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
	</script>
	<!--flex slider-->
	<script src="js/imagezoom.js"></script>

    
	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Detail Unit</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<?php
		$query10      = $db->prepare("SELECT kategori_produk.id_kategori,kategori_produk.nama_kategori,kategori_produk.kategori_seo,subkategori_produk.id_subkategori,subkategori_produk.nama_subkategori,subkategori_produk.subkategori_seo,produk.id_produk,produk.nama_produk,produk.deskripsi,produk.harga,produk.stok,produk.berat,produk.gambar,produk.diskon, user.nama_lengkap FROM produk LEFT JOIN subkategori_produk ON produk.id_subkategori=subkategori_produk.id_subkategori LEFT JOIN kategori_produk ON subkategori_produk.id_kategori=kategori_produk.id_kategori INNER JOIN user ON produk.id_user=user.id_user WHERE produk.id_produk=?");
		$query10->bind_param("i", $id_produk10);
		$id_produk10  = $_GET['id'];
		$query10->execute();
		$result10     = $query10->get_result();
		$row10        = $result10->fetch_assoc();
        $isi = substr($row10['deskripsi'],0,350); // ambil sebanyak 200 karakter
        $isi = substr($row10['deskripsi'],0,strrpos($isi," ")); // potong per spasi kalimat
		$harga        = number_format( $row10['harga'],0,",","." );
		$disc         = ($row10['diskon']/100)*$row10['harga'];
		$hargadisc    = number_format(( $row10['harga']-$disc),0,",","." );
		
		$cek_diskon   = $row10['diskon'];
		$harga_tetap  = '<h6 class="item_price">Rp. '.$hargadisc.'</h6>';
		$harga_diskon = '<h6 class="item_price">Rp. <del>'.$harga.'</del>  '.$hargadisc.'</h6>';
		if ( $cek_diskon == 0 ){
			$harga_barang = $harga_tetap;
		} else {
			$harga_barang = $harga_diskon;
		}
		
		$stok        = $row10['stok'];
		$tombolbeli  = '<button type="submit" class="add-cart item_add"> Beli</button>';
		$tombolhabis = '<a class="add-cart item_add" href="#"> Stok Habis</a>';
		if ( $stok == 0 ){
			$tombol = $tombolhabis;
		} else {
			$tombol = $tombolbeli;
		}
	?>

<div class="struct">
<div class="row">
  <div class="column">
  <div class="col-md-6 single-top wow fadeInLeft animated" data-wow-delay=".5s">	
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="gambar/produk/<?php echo $row10['gambar']; ?>">
								<div class="thumb-image"> <img src="gambar/produk/<?php echo $row10['gambar']; ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
							</li>
							
						</ul>
					</div>
				</div>
  </div>
  <div class="column">
    <!-- col 2 start -->
    <div class="col-md-6 single-top-left simpleCart_shelfItem wow fadeInRight animated" data-wow-delay=".5s">
					<h3><?php echo $row10['nama_produk']; ?></h3>
					Mulai dari
					<?php echo $harga_barang; ?>			
					<ol class="size">
						<h4><a href="kategori-produk-<?php echo $row10['id_kategori']; ?>-<?php echo $row10['kategori_seo']; ?>.html"><?php echo $row10['nama_kategori']; ?></a><b>.</b><a href="kategori-<?php echo $row10['id_subkategori'] ?>-<?php echo $row10['subkategori_seo'] ?>.html"><?php echo $row10['nama_subkategori']; ?></a></h4>
						<li></li>
					</ol>


                    <iframe src="https://www.youtube.com/embed/rDTKMExl3bM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" id="fitvid0"></iframe>
				
					
					
				</div>
			   <div class="clearfix"> </div>
			</div>
            <!-- col 2 end -->
  </div>
</div>
</div>
    <!-- col 1 start -->
	<!--single-page-->
	<div class="single">
		<div class="container">
			<div class="single-info">		
				
                <!-- col 1 end -->

                

			<!--collapse-tabs-->
			<div class="collpse tabs">
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default wow fadeInUp animated" data-wow-delay=".5s">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  Deskripsi Unit
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
							<?php echo $row10['deskripsi']; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--//collapse -->
			<!--related-products-->
			<div class="related-products">
				<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
					<h3 class="title">Unit<span> Lainnya</span></h3>
				</div>
				<div class="related-products-info">
				<?php
					$query13  = $db->query("SELECT id_produk,nama_produk,produk_seo,gambar,harga,diskon,stok FROM produk ORDER BY rand() limit 4");
					while ( $row13    = $query13->fetch_assoc() ){
					 // diskon  
					$harga13        = number_format( $row13['harga'],0,",","." );
					$disc13         = ($row13['diskon']/100)*$row13['harga'];
					$hargadisc13    = number_format(( $row13['harga']-$disc13),0,",","." );
					
					$cek_diskon13   = $row13['diskon'];
					$harga_tetap13  = '<p><span class="item_price">Rp. '.$hargadisc13.'</span></p>';
					$harga_diskon13 = '<p class="pric1">Rp. <del>'.$harga13.'</del></p>
									 <p><span class="item_price">'.$hargadisc13.'</span></p>';
					if ( $cek_diskon13 == 0 ){
						$harga_barang13 = $harga_tetap13;
					} else {
						$harga_barang13 = $harga_diskon13;
					}
					
					$stok13  = $row13['stok'];
					$tombolbeli13 = '<a class="item_add" href="aksi.php?module=keranjang&act=tambah&id='.$row13['id_produk'].'"> Beli</a>';
					$tombolhabis13 = '<a class="item_add" href="#"> Stok Habis</a>';
					if ( $stok13 == 0 ){
						$tombol13 = $tombolhabis13;
					} else {
						$tombol13 = $tombolbeli13;
					}
				?>
					<div class="col-md-3 new-grid simpleCart_shelfItem wow flipInY animated" data-wow-delay=".5s">
						<div class="new-top">
							<a href="produk-<?php echo $row13['id_produk']; ?>-<?php echo $row13['produk_seo']; ?>.html"><img src="gambar/thumb_produk1/<?php echo $row13['gambar']; ?>" class="img-responsive" alt=""/></a>
							<div class="new-text">
								<ul>
									<li><?php echo $tombol13; ?></li>
									<li><a href="produk-<?php echo $row13['id_produk']; ?>-<?php echo $row13['produk_seo']; ?>.html">Detail </a></li>
									<li><a href="products.html">Terkait</a></li>
								</ul>
							</div>
						</div>
						<div class="new-bottom">
							<h5><a class="name" href="produk-<?php echo $row13['id_produk']; ?>-<?php echo $row13['produk_seo']; ?>.html"><?php echo $row13['nama_produk']; ?></a></h5>
							<div class="rating">
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span class="on">☆</span>
								<span>☆</span>
							</div>	
							<div class="ofr">
								<?php echo $harga_barang13; ?>
							</div>
						</div>
					</div>
				<?php
					}
				?>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!--//related-products-->
		</div>
	</div>
	<!--//single-page-->
	