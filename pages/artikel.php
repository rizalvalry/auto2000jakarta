<?php
   $query55          = $db->prepare("SELECT kategori_artikel.nama_kategori FROM artikel INNER JOIN kategori_artikel ON artikel.id_kategori=kategori_artikel.id_kategori WHERE kategori_artikel.id_kategori = ?");
   $query55->bind_param("i", $id_artikel55);
   $id_artikel55 = $_GET['id'];
   $query55->execute();
   $result55         = $query55->get_result();
   $row55            = $result55->fetch_assoc();
   $jumlah55         = $result55->num_rows;
   
   if ( $jumlah55 > 0 ){
   
   
   ?>
<!--breadcrumbs-->
<div class="breadcrumbs">
   <div class="container">
      <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
         <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Berita & Tips</a></li>
      </ol>
   </div>
</div>
<!--//breadcrumbs-->
<div id="page-container">
<div id="et-main-area">
<div id="main-content">
   <div class="container">
      <div id="content-area" class="clearfix">
         <div id="left-area">
            <article id="post-2792" class="et_pb_post post-2792 post type-post status-publish format-standard has-post-thumbnail hentry category-artikel">
               <!-- .et_pb_section -->
               <div class=" et_pb_row et_pb_row_2 et_pb_gutters2 et_pb_row_fullwidth">
                  <!-- <div class="container"> -->
                  <main class="grid">
                     <?php
                        include "config/tgl_indo.php";
                        $batas                   = 9;
                        if ( empty($_GET['hallabel']) ){
                        	$posisi              = 0;
                        	$_GET['hallabel'] = 1;
                        } else if ( $_GET['hallabel'] > 0 ){
                        	$posisi              = ( $_GET['hallabel'] - 1 ) * $batas;
                        }
                        $query5                  = $db->prepare("SELECT artikel.id_artikel, artikel.judul_artikel, artikel.judul_seo, artikel.isi_artikel, artikel.gambar, artikel.dibaca, artikel.tanggal, artikel.hari FROM artikel INNER JOIN kategori_artikel ON artikel.id_kategori=kategori_artikel.id_kategori WHERE kategori_artikel.id_kategori=? ORDER BY artikel.id_artikel DESC limit $posisi, $batas");
                        $query5->bind_param("i", $id_artikel5);
                        $id_artikel5             = $_GET['id'];
                        $query5->execute();
                        $result5                 = $query5->get_result();
                        while ( $row5            = $result5->fetch_assoc() ){
                        	$tanggal             = tgl_indo($row5['tanggal']);
                        	$isi_artikel         = $row5['isi_artikel'];
                        	$isi                 = substr($isi_artikel,0,150); // ambil sebanyak 220 karakter
                        	$isi                 = substr($isi_artikel,0,strrpos($isi," ")); // potong per spasi kalimat
                        
                        ?>
                     <berita class="artikel">
                        <img class="berita-auto2000" src="gambar/thumb_artikel/<?php echo $row5['gambar']; ?>" alt="Sample photo">
                        <div class="text">
                           <h3><?php echo $row5['judul_artikel']; ?></h3>
                           <hr>
                           </hr>
                           <a href="berita-<?php echo $row5['id_artikel']; ?>-<?php echo $row5['judul_seo']; ?>">Detail Artikel</a>
                        </div>
                     </berita>
                     <?php
                        }
                        ?>
                  </main>
                  <!-- </div> -->
                  <!-- selesai disini -->
               </div>
               <!-- .et_pb_column -->
            </article>
            <!-- .et_pb_post -->
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
               <h4 class="widgettitle">Kategori Berita</h4>
               <ul class="faq">
                  <?php
                     $query56 = $db->query("SELECT id_kategori,nama_kategori,kategori_seo FROM kategori_artikel ORDER BY nama_kategori ASC");
                     while ( $row56   = $query56->fetch_assoc() ){
                     ?>
                  <li class="item1"><a href="label-<?php echo $row56['id_kategori']; ?>-<?php echo $row56['kategori_seo']; ?>.html"><?php echo $row56['nama_kategori']; ?></a>
                     <?php
                        }
                        ?>
               </ul>
               <hr class="margin-auto">
               <h4> Download </h4>
               <ul class="faq">
                  <?php
                     $query1234         = $db->query("SELECT file, judul_file FROM file WHERE aktif = 'Y' ORDER BY id_file DESC");
                     while ( $row1234   = $query1234->fetch_assoc() ){
                     	echo '<li><a href="file/'.$row1234['file'].'">'.$row1234['judul_file'].'</a></li>';
                     }
                     
                     ?>										
               </ul>
            </div>
         </div>
         <!-- end #sidebar -->
      </div>
      <!-- #content-area -->
   </div>
   <!-- .container -->
</div>
<!-- #main-content -->
<span class="et_pb_scroll_top et-pb-icon"></span>
<?php
   } else {
   	$query45 = $db->query("SELECT nama_kategori FROM kategori_artikel WHERE id_kategori='$_GET[id]'");
   	$row45   = $query45->fetch_assoc();
   
   	echo '<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>';
   	echo '<li class="active">Belum Ada Artikel Untuk Kategori : '.$row45['nama_kategori'].'</li>';
   
   }
   ?>