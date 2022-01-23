<?php
   include "config/tgl_indo.php";
   $db->query("UPDATE artikel SET dibaca = dibaca + 1 WHERE id_artikel = '$_GET[id]'");
   $query89     = $db->prepare("SELECT kategori_artikel.nama_kategori, artikel.judul_artikel, artikel.isi_artikel, artikel.tanggal, artikel.jam, artikel.dibaca, artikel.gambar, artikel.judul_seo, user.nama_lengkap FROM artikel INNER JOIN kategori_artikel ON artikel.id_kategori=kategori_artikel.id_kategori LEFT JOIN user ON artikel.id_user=user.id_user WHERE artikel.id_artikel = ?");
   $query89->bind_param("i", $id_artikel);
   $id_artikel  = $_GET['id'];
   $query89->execute();
   $result89    = $query89->get_result();
   $row89       = $result89->fetch_assoc();
   $tanggal     = tgl_indo( $row89['tanggal'] );
   ?>
<!--breadcrumbs-->
<div class="breadcrumbs">
   <div class="container">
      <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
         <li><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Detail Artikel</li>
      </ol>
   </div>
</div>
<!--//breadcrumbs-->
<div id="page-container">
   <div id="et-main-area">
      <div id="main-content">
         <div class="container">
            <div id="content-area" class="clearfix">
               <div class="row">
                  <center>
                     <h2> <?php echo $row89['judul_artikel']; ?>  </h2>
                     <p style="font-size : 10px; margin-top : 6px;"><?php echo 'Kategori : '.$row89['nama_kategori'].' | Posting : '.$tanggal.' | Jam : '.$row89['jam'].' WIB '; ?></p>
                     <br />
                     <img src="gambar/artikel/<?php echo $row89['gambar']; ?>" class="img-responsive" height="80%" width="80%" /><br/>
                  </center>
                  <p><?php echo $row89['isi_artikel']; ?></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>