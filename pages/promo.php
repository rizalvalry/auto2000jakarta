<?php include "config/tgl_indo.php"; ?>
<section class="wrap-banner">
   <div>
      <h2 class="banner-promo"> Dapatkan Promo di auto2000</h2>
   </div>
</section>
<div id="page-container">
<div id="et-main-area">
<div id="main-content">
   <div class="container">
      <div id="content-area" class="clearfix">
         <div id="left-area">
            <?php $querypromo = $db->query("SELECT judul_banner, gambar, tanggal, keterangan FROM banner where aktif='Y'");
               ?>
            <?php while ( $promo = $querypromo->fetch_assoc() ){ ?>
            <article id="post-2792" class="et_pb_post post-2792 post type-post status-publish format-standard has-post-thumbnail hentry category-artikel">
               <a class="entry-featured-image-url" href="#">
               <img src="gambar/banner/<?= $promo['gambar'] ?>" alt='Mulai Pengiriman ke Konsumen, Honda Umumkan Harga Honda City Hatchback RS di Indonesia' width='1080' height='675' />							</a>
               <h2 class="entry-title"><a href="../../artikel/mulai-pengiriman-ke-konsumen-honda-umumkan-harga-honda-city-hatchback-rs-di-indonesia/index.html"><?= $promo['judul_banner'] ?></a></h2>
               <p class="post-meta"><span class="published">Mulai dari - <?= tgl_indo($promo['tanggal']) ?></span></p>
               <?= $promo['keterangan'] ?>			
            </article>
            <!-- .et_pb_post -->
            <?php } ?>
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
               <h4 class="widgettitle">Info Terbaru</h4>
               <ul>
                  <?php $querybar = $db->query("SELECT judul_artikel FROM artikel");
                     ?>
                  <?php while ( $barartikel = $querybar->fetch_assoc() ){ ?>
                  <li>
                     <a href="../../artikel/mulai-pengiriman-ke-konsumen-honda-umumkan-harga-honda-city-hatchback-rs-di-indonesia/index.html">
                     (<?= $barartikel['judul_artikel']; ?>)
                     </a>
                  </li>
                  <?php } ?>
               </ul>
            </div>
            <!-- end .et_pb_widget -->
            <div id="categories-2" class="et_pb_widget widget_categories">
               <h4 class="widgettitle">Categories</h4>
               <ul>
                  <li class="cat-item cat-item-1 current-cat"><a aria-current="page" href="index.html">Artikel</a></li>
                  <li class="cat-item cat-item-2"><a href="../mobil/index.html">Mobil</a></li>
               </ul>
            </div>
            <!-- end .et_pb_widget -->	
         </div>
         <!-- end #sidebar -->
      </div>
      <!-- #content-area -->
   </div>
   <!-- .container -->
</div>
<!-- #main-content -->
<span class="et_pb_scroll_top et-pb-icon"></span>