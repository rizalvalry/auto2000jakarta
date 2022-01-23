<div id="et-main-area">
   <div id="main-content">
      <article id="post-532" class="post-532 page type-page status-publish has-post-thumbnail hentry">
         <div class="entry-content">
            <div class="et_pb_section et_pb_section_0 et_pb_fullwidth_section et_section_regular">
               <div class="et_pb_module et_pb_slider  et_pb_fullwidth_slider_0">
                  <div class="et_pb_slides">
                     <?php 
                        $query37 = $db->query("SELECT nama_slide, link_slide, gambar FROM slide WHERE aktif = 'Y' ORDER BY id_slide ASC");
                        
                        
                        while ( $row337 = $query37->fetch_assoc() ){
                        ?>
                     <!-- lopping -->
                     <div class="et_pb_slide et_pb_bg_layout_dark et_pb_media_alignment_center et_pb_slide_0 et-pb-active-slide" style="background-image: url(gambar/slide/<?=$row337['gambar'] ?>) !important;">
                        <div class="et_pb_container clearfix">
                           <div class="et_pb_slider_container_inner">
                              <div class="et_pb_slide_description">
                                 <div class="et_pb_slide_content"></div>
                                 <?=$row337['nama_slide'] ?>
                              </div>
                              <!-- .et_pb_slide_description -->
                           </div>
                        </div>
                        <!-- .et_pb_container -->
                     </div>
                     <?php } ?>
                     <!-- end lopping -->
                     <!-- .et_pb_slide -->
                  </div>
                  <!-- .et_pb_slides -->
               </div>
               <!-- .et_pb_slider -->
            </div>
            <!-- .et_pb_section -->
            <div class="et_pb_section et_pb_section_1 et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider">
               <div class="et_pb_bottom_inside_divider"></div>
            </div>
            <!-- .et_pb_section -->
            <div class="et_pb_section et_pb_section_2 et_section_regular section_has_divider et_pb_bottom_divider et_pb_top_divider">
               <div class="et_pb_top_inside_divider"></div>
               <div class=" et_pb_row et_pb_row_0">
                  <div class="et_pb_column et_pb_column_1_2  et_pb_column_0 et_pb_css_mix_blend_mode_passthrough">
                     <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_text_0">
                        <?php 
                           $hotpromo = $db->query("SELECT * FROM produk where diskon > 20");
                           $diskontampil   = $hotpromo->fetch_assoc();  ?>
                        <div class="et_pb_text_inner">
                           <h3>HOT PROMO</h3>
                           <h1><?= $diskontampil['nama_produk']; ?></h1>
                           <h1><span style="font-size: 11px !important; vertical-align: top;"> DISKON Mulai</span> <?= $diskontampil['diskon'] ?><span style="font-size: 14px !important; vertical-align: top;"> %</span></h1>
                        </div>
                     </div>
                     <!-- .et_pb_text -->
                     <div class="et_pb_button_module_wrapper et_pb_module et_pb_button_alignment_right">
                        <a class="et_pb_button et_pb_custom_button_icon  et_pb_button_0 et_pb_module et_pb_bg_layout_light" href="mobil/new-honda-brio/index.html" data-icon="&#x45;">Lihat selengkapnya</a>
                     </div>
                  </div>
                  <!-- .et_pb_column -->
                  <div class="et_pb_column et_pb_column_1_2  et_pb_column_1 et_pb_css_mix_blend_mode_passthrough et-last-child">
                     <div class="et_pb_module et_pb_image et_pb_image_0 et_always_center_on_mobile">
                        <a href="mobil/new-honda-brio/index.html">
                        <span class="et_pb_image_wrap">
                        <img src="gambar/produk/<?= $diskontampil['gambar']; ?>" alt="" />
                        </span>
                        </a>
                     </div>
                  </div>
                  <!-- .et_pb_column -->
               </div>
               <!-- .et_pb_row -->
            </div>
            <!-- .et_pb_section -->
            <div class="et_pb_section et_pb_section_3 et_section_regular">
               <div class=" et_pb_row et_pb_row_1">
                  <div class="et_pb_column et_pb_column_1_2  et_pb_column_2 et_pb_css_mix_blend_mode_passthrough">
                     <div class="et_pb_blurb et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_blurb_0 et_pb_blurb_position_left">
                        <div class="et_pb_blurb_content">
                           <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-pb-icon et-waypoint et_pb_animation_off" style="color: #e00b00;">&#x41;</span></span>
                           </div>
                           <div class="et_pb_blurb_container">
                              <h4 class="et_pb_module_header">Pilih Model Toyota AUTO 2000</h4>
                              <div class="et_pb_blurb_description">
                                 Promo AUTO 2000 PPnBM 0% Turun Harga, DP dan Angsuran Ringan, Bunga 0% Hubungi sekarang.
                              </div>
                              <!-- .et_pb_blurb_description -->
                           </div>
                        </div>
                        <!-- .et_pb_blurb_content -->
                     </div>
                     <!-- .et_pb_blurb -->
                  </div>
                  <!-- .et_pb_column -->
                  <div class="et_pb_column et_pb_column_1_2  et_pb_column_3 et_pb_css_mix_blend_mode_passthrough et-last-child">
                     <div class="et_pb_button_module_wrapper et_pb_module et_pb_button_alignment_right">
                        <a class="et_pb_button et_pb_custom_button_icon  et_pb_button_1 et_pb_module et_pb_bg_layout_light" href="pricelist/index.html" data-icon="&#x45;">Lihat semua</a>
                     </div>
                  </div>
                  <!-- .et_pb_column -->
               </div>
               <!-- .et_pb_row -->
            </div>
            <!-- .et_pb_section -->
            <div class="et_pb_section  et_section_regular section_has_divider et_pb_bottom_divider et_pb_top_divider">
               <div class=" et_pb_row et_pb_row_2 et_pb_gutters2 et_pb_row_fullwidth">
                  <!-- <div class="container"> -->
                  <main class="grid">
                     <?php
                        $query5  = $db->prepare("SELECT kategori_produk.id_kategori,kategori_produk.kategori_seo,id_produk,nama_produk,produk_seo,gambar,harga,diskon,stok FROM produk LEFT JOIN subkategori_produk ON produk.id_subkategori=subkategori_produk.id_subkategori LEFT JOIN kategori_produk ON subkategori_produk.id_kategori=kategori_produk.id_kategori WHERE produk.aktif = ? ORDER BY id_produk DESC");
                        $aktif = "Y";
                        $query5->bind_param("s", $aktif);
                        $query5->execute();
                        $result5 = $query5->get_result();
                        while ( $row5 = $result5->fetch_assoc() ){
                        include "diskon.php";
                        ?>
                     <article>
                        <img src="gambar/produk/<?php echo $row5['gambar']; ?>" alt="Sample photo">
                        <div class="text">
                           <h3><?php echo $row5['nama_produk']; ?></h3>
                           <p>Mulai dari Rp. <?php echo number_format($row5['harga']); ?></p>
                           <a href="produk-<?php echo $row5['id_produk']; ?>-<?php echo $row5['produk_seo']; ?>" class="btn btn-primary btn-block">Lebih Detail</a>
                        </div>
                     </article>
                     <?php
                        }
                        ?>
                  </main>
                  <!-- </div> -->
                  <!-- selesai disini -->
               </div>
               <!-- .et_pb_column -->
            </div>
            <!-- .et_pb_row -->
            <div class="et_pb_bottom_inside_divider"></div>
         </div>
         <div class="cards-list">
            <div class="card 1">
               <div class="card_image"> 
                  <img src="images/test-drive.jpg" /> 
               </div>
               <div class="card_title title-white">
                  <p>Test Drive</p>
               </div>
            </div>
            <div class="card 2">
               <div class="card_image">
                  <img src="images/book-services.jpg" />
               </div>
               <div class="card_title title-white">
                  <p>Booking Services</p>
               </div>
            </div>
            <div class="card 3">
               <div class="card_image">
                  <img src="images/aksesoris-kupon.jpg" />
               </div>
               <div class="card_title title-white">
                  <p>Aksesoris dan Kupon</p>
               </div>
            </div>
         </div>
         <div class="et_pb_section_4 et_section_regular section_has_divider et_pb_bottom_divider et_pb_top_divider">
            <div class="et_pb_row_2 et_pb_gutters2 et_pb_row_fullwidth">
               <h1 class="center">Kemudahan Pesan Mobil Toyota Online di Dealer <span style="color:red;">Auto2000 Digiroom</span></h1>
               <div class="container">
                  <main class="grid">
                     <services>
                        <img src="https://tsoimageprod.azureedge.net/sys-master-hybrismedia/h03/h2f/8796157083678/step-1.svg" alt="Sample photo">
                        <div class="text">
                           <h3>Simulasi Cicilan</h3>
                           <p class="text-center">Atur pembelian dan pilih opsi pembayaran terbaik bagi Anda</p>
                        </div>
                     </services>
                     <services>
                        <img src="https://tsoimageprod.azureedge.net/sys-master-hybrismedia/haa/h31/8796157116446/step-2.svg" alt="Sample photo">
                        <div class="text">
                           <h3>Pesan Online Ekspres</h3>
                           <p class="text-center">Upload dokumen dan tanda tangan secara online setelah melakukan pembelian atau pemesanan</p>
                        </div>
                     </services>
                     <services>
                        <img src="https://tsoimageprod.azureedge.net/sys-master-hybrismedia/hac/h2e/8796157050910/step-3.svg" alt="Sample photo">
                        <div class="text">
                           <h3>Konfirmasi dalam 1 jam</h3>
                           <p class="text-center">Cukup tunggu konfirmasi pesanan Anda</p>
                        </div>
                     </services>
                  </main>
               </div>
            </div>
         </div>
         <div class="et_pb_section et_pb_section_4 et_section_regular section_has_divider et_pb_bottom_divider et_pb_top_divider">
            <!-- <div class=" et_pb_row et_pb_row_2 et_pb_gutters2 et_pb_row_fullwidth"> -->
               <div class="container">
                  <!-- start -->
                  <!-- <div class="accordion"> -->
                     <h2 class="accordion__heading">7 Alasan Anda Harus Beli Mobil Baru Toyota di Auto2000</h2>
                     <p class="accordion__heading">Toyota memiliki varian produk sangat komplit sehingga bisa Anda pilih yang paling tepat sesuai kebutuhan. Mulai dari model MPV sejuta umat Toyota Avanza hingga model mewah Toyota Alphard.

Namun masalahnya, membeli mobil tidak berhenti sampai memiliki. Ada proses perawatan supaya mobil dapat membantu mobilitas Anda.

Untuk urusan perawatan, tidak ada pilihan paling baik selain bengkel resmi Auto2000. Bukan bermaksud membanggakan diri, tapi Auto2000 punya banyak kemudahan saat bicara perawatan kendaraan.

Mau buktinya? Berikut kami sampaikan pada Anda.</p>
                     <div class="accordion__item">
                        <button class="accordion__btn">
                        <span class="accordion__caption"><i class="far fa-lightbulb"></i>Jaringan bengkel luas</span>
                        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="accordion__content">
                           <p>Saat ini Auto2000 memiliki tidak kurang dari 125 cabang yang tersebar di wilayah Jawa, Sumatera, Kalimantan, Bali, dan Nusa Tenggara.
Alhasil, bila mobil Toyota Anda terkena masalah di jalan, bisa bertandang ke bengkel resmi Auto2000 terdekat. Termasuk untuk kebutuhan servis berkala yang jadi menu wajib setiap 6 bulan sekali.</p>
                        </div>
                     </div>
                     <div class="accordion__item">
                        <button class="accordion__btn">
                        <span class="accordion__caption"><i class="far fa-lightbulb"></i>Fasilitas bengkel modern</span>
                        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="accordion__content">
                           <p>Dimanapun Anda masuk ke bengkel resmi Auto2000, maka akan mendapatkan fasilitas bengkel yang modern dan sesuai standar yang telah ditetapkan oleh Toyota. Alhasil, proses perbaikan dapat berlangsung cepat dan berkualitas.
                               <br>
                               <br>
                               Pun dengan teknisi yang sudah melewati proses pelatihan agar mahir dalam proses perawatan dan perbaikan mobil serta sesuai dengan kompetensinya. Sehingga Anda tak perlu ragu atas kualitas kerja dan layanan tim after sales Auto2000.
                               <br>
                               <br>
                               Termasuk pula komponen pengganti orisinal Toyota yang memastikan kondisi mobil akan kembali segar seperti awal dan siap pakai kembali. Pun adanya garansi resmi yang membuat Anda merasa tenang
                           </p>
                        </div>
                     </div>
                     <div class="accordion__item">
                        <button class="accordion__btn">
                        <span class="accordion__caption"><i class="far fa-lightbulb"></i>Layanan servis prima</span>
                        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="accordion__content">
                           <p>menyediakan beragam layanan after sales yang memudahkan konsumen dalam melakukan perawatan dan perbaikan mobil Toyota yang pastinya punya standar kualitas tinggi.
                           </p>
                        </div>
                     </div>
                     <div class="accordion__item">
                        <button class="accordion__btn">
                        <span class="accordion__caption"><i class="far fa-lightbulb"></i>THS Home Service</span>
                        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="accordion__content">
                           <p>THS – Auto2000 Home Service yang memberikan layanan servis berkala dan perbaikan ringan di bawah 2 jam di tempat yang konsumen mau, seperti rumah.<br>
Buat Anda yang kesulitan untuk datang ke bengkel resmi Auto2000 dapat memanfaatkan layanan ini. Caranya praktis, karena tinggal klik dari aplikasi Auto2000 Mobile.</p>
                        </div>
                     </div>
                     <div class="accordion__item">
                        <button class="accordion__btn">
                        <span class="accordion__caption"><i class="far fa-lightbulb"></i>Auto2000 Mobile</span>
                        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="accordion__content">
                           <p>Mengapa aplikasi Auto2000 Mobile punya nilai tinggi buat Anda yang membeli mobil Toyota via Auto2000?
                               <br>
                               <br>
                               Anda bisa booking untuk melakukan servis berkala lewat aplikasi cerdas ini, bisa untuk bertandang ke bengkel resmi Auto2000 atau menikmati layanan THS di rumah.
                               <br>
                               <br>
                               Untuk datang ke bengkel, silakan pilih menu Workshop. Sementara untuk layanan THS, silakan lewat menu Home Service.
                               <br>
                               <br>
                               Aplikasi simpel dan kaya fitur ini juga punya menu Our Branches yang memberikan informasi mengenai bengkel resmi Auto2000, nomor kontak dan akses menuju ke sana via peta digital.
                               <br>
                               <br>
                               Jadi, kalau mobil Anda bermasalah, bisa kontak cabang Auto2000 terdekat. Termasuk pula menu Emergency yang membuat Anda bisa menghubungi call center Emergency Road Assistance (ERA) yang stand by 24 jam penuh.
                           </p>
                        </div>
                     </div>
                     <div class="accordion__item">
                        <button class="accordion__btn">
                        <span class="accordion__caption"><i class="far fa-lightbulb"></i>Emergency Road Assistance</span>
                        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="accordion__content">
                           <p>Salah satu benefit membeli mobil Toyota lewat Auto2000 adalah Anda mendapatkan fasilitas layanan Emergency Road Assistance (ERA) yang dioperasikan oleh AstraWorld secara gratis selama 5 tahun.
Mulai dari hal sepele seperti jump-start service atau battery jumper andai mobil Anda tidak kuat starter, serta mengaktifkan kembali baterai atau aki yang lemah.
                               <br>
                               <br>
                               Tidak hanya itu, ERA bisa pula membantu menggantikan ban mobil yang kempis, dan memberikan bensin atau solar gratis sebanyak 2 liter bagi Anda yang kehabisan BBM.
                               <br>
                               <br>
                               Bahkan tim ERA bisa pula membantu membuka pintu mobil yang terkunci atau kunci tertinggal di dalam mobil. Sebuah layanan sederhana tapi pasti sangat berfaedah bila Anda mengalaminya sendiri.
                               <br>
                               <br>
                               Bagaimana kalau mobil Anda terlibat kecelakaan? Tenang, tim ERA juga menyediakan jasa mobil gendong alias car carrier kalau kerusakan mobil Anda cukup berat.
                               
                           </p>
                        </div>
                     </div>
                     <div class="accordion__item">
                        <button class="accordion__btn">
                        <span class="accordion__caption"><i class="far fa-lightbulb"></i>Chatbot Tasia</span>
                        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                        </button>
                        <div class="accordion__content">
                           <p>Tasia merupakan produk layanan digital dari Auto2000 yang mengemban amanat untuk memberikan kemudahan pada pelanggan dalam mengakses dan menikmati segala bentuk layanan yang disajikan oleh Auto2000.
Konsumen hanya perlu mengajak ngobrol Tasia seperti menulis “mau servis dong” atau pilih menu Booking Service yang ada di menu utama chatbox Tasia.
                               <br>
                               <br>
                               Setelah itu konsumen bisa memilih opsi booking service di bengkel atau order layanan THS – Auto2000 Home Service. Tasia akan mengajak pelanggan ‘berkenalan’ dan pelanggan bisa memberikan nama dan data diri untuk kebutuhan identifikasi servis.
                               <br>
                               <br>
                               Ikuti petunjuk yang Tasia berikan hingga pelanggan mendapatkan bukti reservasi booking service, dan selanjutnya akan dihubungi petugas bengkel atau THS.
                               <br>
                               <br>
                               Asyiknya, Anda dapat mengakses Tasia lewat aplikasi WA di 0822-8980-2000 selama 24 jam penuh. Kemudahan yang membuat Anda nyaman dan tenang sebagai pelanggan Auto2000.
                           </p>
                        </div>
                     </div>
                  <!-- </div> -->
                  <!-- end -->
               <!-- </div> -->
            </div>
         </div>
         <!-- .et_pb_section -->
         <div class="et_pb_section et_pb_section_5 et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider et_pb_top_divider">
            <div class="et_pb_top_inside_divider"></div>
            <!-- .et_pb_row -->
            <div class=" et_pb_row et_pb_row_6">
               <div class="et_pb_column et_pb_column_1_2  et_pb_column_20 et_pb_css_mix_blend_mode_passthrough">
                  <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_right  et_pb_text_25">
                     <div class="et_pb_text_inner">
                        <h3>Anda Butuh Informasi Lebih Lengkap ?</h3>
                        <h5>Hubungi Via Chat /Whatsapp untuk Respon Cepat</h5>
                     </div>
                  </div>
                  <!-- .et_pb_text -->
               </div>
               <!-- .et_pb_column -->
               <div class="et_pb_column et_pb_column_1_4  et_pb_column_21 et_pb_css_mix_blend_mode_passthrough">
                  <div class="et_pb_button_module_wrapper et_pb_module et_pb_button_alignment_left">
                     <a class="et_pb_button et_pb_custom_button_icon  et_pb_button_16 et_pb_module et_pb_bg_layout_light" href="tel:+6282266661662" data-icon="&#xe090;">TELP : 0857-8157-1742</a>
                  </div>
               </div>
               <!-- .et_pb_column -->
               <div class="et_pb_column et_pb_column_1_4  et_pb_column_22 et_pb_css_mix_blend_mode_passthrough et-last-child">
                  <div class="et_pb_button_module_wrapper et_pb_module et_pb_button_alignment_">
                     <a class="et_pb_button et_pb_custom_button_icon  et_pb_button_17 et_pb_module et_pb_bg_layout_light" href="https://api.whatsapp.com/send?phone=6282266661662&amp;text=Halo%20honda-tulungagung.com,%20Saya%20Mau%20tanya..." data-icon="&#xe066;">Chat Via WhatsApp</a>
                  </div>
               </div>
               <!-- .et_pb_column -->
            </div>
            <!-- .et_pb_row -->
         </div>
         <!-- .et_pb_section -->
   </div>
   <!-- .entry-content -->
   </article>
   <!-- .et_pb_post -->
</div>
<!-- #main-content -->
<span class="et_pb_scroll_top et-pb-icon"></span>
<script>
   // select all accordion items
   const accItems = document.querySelectorAll(".accordion__item");
   
   // add a click event for all items
   accItems.forEach((acc) => acc.addEventListener("click", toggleAcc));
   
   function toggleAcc() {
     // remove active class from all items exept current item
     accItems.forEach((item) => item != this ? item.classList.remove("accordion__item--active") : null
     );
   
     // toggle active class on current item
     if (this.classList != "accordion__item--active") {
       this.classList.toggle("accordion__item--active");
     }
   }
   
</script>