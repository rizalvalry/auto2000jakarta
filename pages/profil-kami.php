<section class="wrap-profil">
   <div>
      <h2 class="profil-promo"> Tentang auto2000</h2>
   </div>
</section>
<?php
   $profikami = $db->query("SELECT pin_bb,email_pengelola,nomor_hp,meta_deskripsi,static_content, alamat, nomor_hp, email_protokol, gambar, alamat_web FROM profil");
   $pro = $profikami->fetch_assoc();
   ?>
<div id="page-container">
<div id="et-main-area">
   <div id="main-content">
      <div class="container">
         <div id="content-area" class="clearfix">
            <?= $pro['pin_bb']; ?>
         </div>
      </div>
      <!-- #left-area -->
      <hr class="medium">
   </div>
   <!-- #content-area -->
</div>
<!-- .container -->
<div class="et_pb_section_4 et_section_regular section_has_divider et_pb_bottom_divider et_pb_top_divider">
   <div class=" et_pb_row et_pb_row_2 et_pb_gutters2 et_pb_row_fullwidth">
      <h1 class="center">Proposisi Nilai</h1>
      <div class="container">
         <main class="grid">
            <services>
               <img src="https://tsoimageprod.azureedge.net/sys-master-hybrismedia/hca/hbd/8813810614302/OfflineDocSubmission.png" alt="Sample photo">
               <div class="text-center">
                  <h3>Kemudahan</h3>
                  <p class="text-center">Auto2000 memberikan berbagai kenyamanan kepada pelanggan. Kemudahan mendapatkan informasi, dengan menyediakan berbagai sumber, mulai dari kantor cabang, pameran, situs web, telepon, hingga call center dan lain-lain.</p>
               </div>
            </services>
            <services>
               <img src="https://tsoimageprod.azureedge.net/sys-master-hybrismedia/h91/h68/8813811007518/OfflineDocSubmission%20(1).png" alt="Sample photo">
               <div class="text-center">
                  <h3>Personal</h3>
                  <p class="text-center">Auto2000 melayani pelanggan secara pribadi. Dengan membangun basis data pelanggan secara komprehensif, AUTO2000 memberikan layanan sesuai dengan kebutuhan pelanggan.</p>
               </div>
            </services>
            <services>
               <img src="https://tsoimageprod.azureedge.net/sys-master-hybrismedia/h12/h61/8813811269662/OfflineDocSubmission%20(2).png" alt="Sample photo">
               <div class="text-center">
                  <h3>Andal</h3>
                  <p class="text-center">Auto2000 didukung oleh tim dan sistem yang handal mulai dari wiraniaga profesional, teknisi dengan sertifikasi Toyota Internasional, hingga sistem Teknologi Informasi online teritegrasi.</p>
               </div>
            </services>
         </main>
      </div>
   </div>
   <div class="clear-fix"></div>
   <!-- founder-area-start -->
   <div class="founder-area ptb-80">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="founder-description text-center fadeIndown animated" data-wow-delay="1.5s">
                  <h1 class="wow fadeIndown animated" data-wow-delay="1.5s">Mitra Bisnis</h1>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- founder-area-end -->
   <div class="centerlize">
      <!-- banner-area-start -->
      <div class="container scrollmenu">
         <?php
            $query5  = $db->prepare("SELECT * FROM pembayaran");
            $aktif = "Y";
            $query5->bind_param("s", $aktif);
            $query5->execute();
            $result5 = $query5->get_result();
            while ( $row5 = $result5->fetch_assoc() ){
            include "diskon.php";
            ?>
         <div class="collection-product wow zoomIn animated" data-wow-delay=".5s">
            <div class="collection-img">
               <a href="#" data-toggle="modal" data-target="#exampleModal<?= $row5['id_pembayaran']; ?>">
               <img style="width:120px;" src="gambar/pembayaran/<?php echo $row5['gambar']; ?>" alt=""></a>
            </div>
            <div class="collection-content text-center">
            </div>
         </div>
         <?php } ?>
      </div>
   </div>
   <!-- banner-area-end -->
   <div class="clear-fix"></div>
   <!-- founder-area-start -->
   <div class="founder-area ptb-80">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="founder-description text-center fadeIndown animated" data-wow-delay="1.5s">
                  <h1 class="wow fadeIndown animated" data-wow-delay="1.5s">Berita & Tips</h1>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- founder-area-end -->
</div>
<span class="et_pb_scroll_top et-pb-icon"></span>