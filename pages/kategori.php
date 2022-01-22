


<?php
		$query55          = $db->prepare("SELECT subkategori_produk.nama_subkategori FROM produk LEFT JOIN subkategori_produk ON produk.id_subkategori=subkategori_produk.id_subkategori WHERE subkategori_produk.id_subkategori=? AND produk.aktif=?");
		$query55->bind_param("is", $id_subkategori55,$aktif55);
		$id_subkategori55 = $_GET['id'];
		$aktif55          = "Y";
		$query55->execute();
		$result55         = $query55->get_result();
		$row55            = $result55->fetch_assoc();
		$jumlah55         = $result55->num_rows;
		
		if ( $jumlah55 > 0 ){
		
			$batas                   = 9;
			if ( empty($_GET['halkategori']) ){
				$posisi              = 0;
				$_GET['halkategori'] = 1;
			} else if ( $_GET['halkategori'] > 0 ){
				$posisi              = ( $_GET['halkategori'] - 1 ) * $batas;
			}
			$query5                  = $db->prepare("SELECT kategori_produk.id_kategori,kategori_produk.kategori_seo,produk.id_produk,produk.nama_produk,produk.produk_seo,produk.diskon,produk.stok,produk.harga,produk.gambar, gambar_produk.gambar as gambarproduk FROM produk INNER JOIN subkategori_produk ON produk.id_subkategori=subkategori_produk.id_subkategori INNER JOIN kategori_produk ON subkategori_produk.id_kategori=kategori_produk.id_kategori INNER JOIN gambar_produk ON produk.id_produk = gambar_produk.id_produk WHERE subkategori_produk.id_subkategori=? AND produk.aktif =? ORDER BY produk.id_produk DESC limit $posisi, $batas");
			$query5->bind_param("is", $id_subkategori5,$aktif);
			$id_subkategori5         = $_GET['id'];
			$aktif                   = "Y";
			$query5->execute();
			$result5                 = $query5->get_result();
			$row5 = $result5->fetch_assoc();

			// var_dump($row5);
			// die();
	?>



<div class="slideshow-container">
  <div class="mySlides1">
    <img src="gambar/gambar_produk/<?php echo $row5['gambarproduk']; ?>" style="width:100%">
  </div>


  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>




<div id="et-main-area">
<div id="main-content">


   <div class="container">
      <div id="content-area" class="clearfix">
         <div id="left-area">

			<!--Short codes-->
			<div class="codes">
                  <div class="container">
                     <div class="col-md-12 product-model-sec-custom2">
					
                        <a href="produk-<?php echo $row5['id_produk']; ?>-<?php echo $row5['produk_seo']; ?>">
                           <div class="product-grids3 " data-wow-delay=".5s">
                              <div class="new-top">
                                 <center>
                                 <img src="gambar/produk/<?php echo $row5['gambar']; ?>" class="img-responsive" alt=""/>
                                 <center>
                                 <div class="new-text" style="color : #fff;">
                                    <h2 style="color:white;"><?php echo $row5['nama_produk']; ?></h2>
                                    <p>Mulai dari <?php echo $harga_barang; ?></p>
                                 </div>
                              </div>
                              <div class="new-bottom">
                              </div>
                        </a>
                        </div>
                      
                        <div class="clearfix"></div>
                     </div>
                  </div>
               </div>

			   



            <div class="pagination clearfix">
               <div class="alignleft"></div>
               <div class="alignright"></div>
            </div>
         </div>
         <!-- #left-area -->
         <div id="sidebar">
            <div id="search-2" class="et_pb_widget widget_search">
               <form role="search" method="get" id="searchform" class="searchform" action="https://honda-tulungagung.com/">
               </form>
            </div>
            <!-- end .et_pb_widget -->		
            <div id="recent-posts-2" class="et_pb_widget widget_recent_entries">
               <h4 class="widgettitle">Kategori</h4>
               <ul>
			   <?php
							$query56 = $db->query("SELECT id_kategori,nama_kategori FROM kategori_produk ORDER BY nama_kategori ASC");
							while ( $row56   = $query56->fetch_assoc() ){
						?>
                  <li class="item1"><a href="#"><strong><?php echo $row56['nama_kategori']; ?></strong><span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
								<?php
									$query57 = $db->query("SELECT id_subkategori,nama_subkategori,subkategori_seo FROM subkategori_produk WHERE id_kategori='$row56[id_kategori]' ORDER BY nama_subkategori ASC");
									while ( $row57 = $query57->fetch_assoc() ){
										echo '<li class="subitem1"><a href="kategori-'.$row57['id_subkategori'].'-'.$row57['subkategori_seo'].'.html">'.$row57['nama_subkategori'].'</a></li>';
									}
								?>																		
								</ul>
							</li>
						<?php
							}
						?>
						</ul>
            </div>
            
            <!-- end .et_pb_widget -->	
         </div>
         <!-- end #sidebar -->
      </div>
      <!-- #content-area -->
   </div>
   <!-- .container -->

<span class="et_pb_scroll_top et-pb-icon"></span>

<?php
		} else {
			$query45 = $db->query("SELECT nama_subkategori FROM subkategori_produk WHERE id_subkategori='$_GET[id]'");
			$row45   = $query45->fetch_assoc();
			echo '<div class="breadcrumbs">';
			echo '<div class="container">';
			echo '<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">';
			echo '<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>';
			echo '<li class="active">Belum Ada Produk Untuk Kategori : '.$row45['nama_subkategori'].'</li>';
			echo '</ol>';
			echo '</div>';
			echo '</div>';
		}
	?>


<script>
var slideIndex = [1,1];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>
