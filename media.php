<?php
   error_reporting(0);
   session_start();
   require "config/koneksi.php";
   $query00 = $db->query("SELECT nama_toko,email_pengelola,nomor_hp,meta_deskripsi,static_content, alamat, nomor_hp, email_protokol, gambar, alamat_web FROM profil");
   $row00 = $query00->fetch_assoc();
   $nama_toko00 = explode(" ", $row00['nama_toko']);
   $tahun = date("Y");
   ?>
<!DOCTYPE html>
<html lang="en-US">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="pingback" href="xmlrpc.php" />
      <!--[if lt IE 9]>
      <script src="https://auto2000toyota.com/wp-content/themes/DividiCustomOkejasaweb/js/html5.js" type="text/javascript"></script>
      <![endif]-->
      <script type="text/javascript">
         document.documentElement.className = 'js';
      </script>
      <script>
         var et_site_url = 'index.html';
         var et_post_id = '532';
         
         function et_core_page_resource_fallback(a, b) {
             "undefined" === typeof b && (b = a.sheet.cssRules && 0 === a.sheet.cssRules.length);
             b && (a.onerror = null, a.onload = null, a.href ? a.href = et_site_url + "/?et_core_page_resource=" + a.id + et_post_id : a.src && (a.src = et_site_url + "/?et_core_page_resource=" + a.id + et_post_id))
         }
      </script>
      <title><?= $row00['nama_toko']; ?> | <?php include 'seo/dina_meta1.php'; ?></title>
      <!-- This site is optimized with the Yoast SEO plugin v12.7.1 - https://yoast.com/wordpress/plugins/seo/ -->
      <meta name="description" content="<?php include 'seo/dina_meta2.php'; ?>" />
      <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
      <link rel="canonical" href="index.html" />
      <meta property="og:locale" content="en_US" />
      <meta property="og:type" content="website" />
      <meta property="og:title" content="AUTO 2000 - DP dan Angsuran Rendah, Proses Cepat" />
      <meta property="og:description" content="<?php include 'seo/dina_meta2.php'; ?>" />
      <meta property="og:url" content="<?= $row00['alamat_web']; ?>" />
      <meta property="og:site_name" content="AUTO 2000 Toyota" />
      <meta property="og:image" content="<?= $row00['alamat_web']; ?>gambar/toko/logo.png" />
      <meta property="og:image:secure_url" content="<?= $row00['alamat_web']; ?>gambar/toko/logo.png" />
      <meta property="og:image:width" content="686" />
      <meta property="og:image:height" content="687" />
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:description" content="<?php include 'seo/dina_meta2.php'; ?>" />
      <meta name="twitter:title" content="AUTO 2000 - DP dan Angsuran Rendah, Proses Cepat" />
      <meta name="twitter:image" content="<?= $row00['alamat_web']; ?>gambar/toko/logo.png" />
      <script type='application/ld+json' class='yoast-schema-graph yoast-schema-graph--main'>
         {
             "@context": "https://schema.org",
             "@graph": [{
                 "@type": "Organization",
                 "@id": "https://auto2000toyota.com/#organization",
                 "name": "AUTO 2000 Toyota",
                 "url": "https://auto2000toyota.com/",
                 "sameAs": [],
                 "logo": {
                     "@type": "ImageObject",
                     "@id": "https://auto2000toyota.com/#logo",
                     "url": "http://auto2000toyota.com/gambar/toko/logo.png",
                     "width": 686,
                     "height": 687,
                     "caption": "AUTO 2000 Toyota"
                 },
                 "image": {
                     "@id": "https://auto2000toyota.com/#logo"
                 }
             }, {
                 "@type": "WebSite",
                 "@id": "https://auto2000toyota.com/#website",
                 "url": "https://auto2000toyota.com/",
                 "name": "AUTO 2000 Toyota",
                 "description": "Promo DP Rendah Angsuran Ringan",
                 "publisher": {
                     "@id": "https://auto2000toyota.com/#organization"
                 },
                 "potentialAction": {
                     "@type": "SearchAction",
                     "target": "https://auto2000toyota.com/?s={search_term_string}",
                     "query-input": "required name=search_term_string"
                 }
             }, {
                 "@type": "ImageObject",
                 "@id": "https://auto2000toyota.com/#primaryimage",
                 "url": "http://auto2000toyota.com/gambar/toko/logo.png",
                 "width": 686,
                 "height": 687
             }, {
                 "@type": "WebPage",
                 "@id": "https://auto2000toyota.com/#webpage",
                 "url": "https://auto2000toyota.com/",
                 "inLanguage": "en-US",
                 "name": "AUTO 2000 - DP dan Angsuran Rendah, Proses Cepat",
                 "isPartOf": {
                     "@id": "https://auto2000toyota.com/#website"
                 },
                 "about": {
                     "@id": "https://auto2000toyota.com/#organization"
                 },
                 "primaryImageOfPage": {
                     "@id": "https://auto2000toyota.com/#primaryimage"
                 },
                 "datePublished": "2018-09-01T03:58:00+00:00",
                 "dateModified": "2021-04-10T09:16:43+00:00",
                 "description": "AUTO 2000 Jakarta | Cash Credit | DP Ringan | Angsuran Ringan | Test Drive | Bonus Aksesories | Data di Bantu Sampai Approve hanya ada disini"
             }]
         }
      </script>
      <!-- / Yoast SEO plugin. -->
      <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
      <link rel='dns-prefetch' href='http://s.w.org/' />
      <link rel="alternate" type="application/rss+xml" title="AUTO 2000 Toyota &raquo; Feed" href="feed/index.html" />
      <link rel="alternate" type="application/rss+xml" title="AUTO 2000 Toyota &raquo; Comments Feed" href="comments/feed/index.html" />
      <meta content="Divi v.3.0.106" name="generator" />
      <link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.min7263.css?ver=5.4.4' type='text/css' media='all' />
      <link rel='stylesheet' id='divi-style-css' href='wp-content/themes/DividiCustomOkejasaweb/style4f62.css?ver=3.0.106' type='text/css' media='all' />
      <link rel='stylesheet' id='et-builder-googlefonts-cached-css' href='https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&amp;ver=5.4.4#038;subset=latin,latin-ext'
         type='text/css' media='all' />
      <link href="style.css" rel="stylesheet" type="text/css" media="all" />
      <link rel='stylesheet' id='tablepress-default-css' href='wp-content/plugins/tablepress/css/default.min2f3e.css?ver=1.12' type='text/css' media='all' />
      <link rel='stylesheet' id='dashicons-css' href='wp-includes/css/dashicons.min7263.css?ver=5.4.4' type='text/css' media='all' />
      <script type='text/javascript' src='wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp'></script>
      <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
      <link rel='https://api.w.org/' href='wp-json/index.html' />
      <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
      <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
      <meta name="generator" content="WordPress 5.4.4" />
      <link rel='shortlink' href='index.html' />
      <link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed5834.json?url=https%3A%2F%2Fhonda-tulungagung.com%2F" />
      <link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed4d74?url=https%3A%2F%2Fhonda-tulungagung.com%2F&amp;format=xml" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
      <link rel="shortcut icon" href="favicon/favicon.ico" />
      <link rel="stylesheet" id="et-core-unified-cached-inline-styles" href="wp-content/cache/et/532/et-core-unified-1640336856947.min.css" onerror="et_core_page_resource_fallback(this, true)" onload="et_core_page_resource_fallback(this)" />
      <!-- milik pijar -->
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.0/flexslider.min.css'>
      <link rel="stylesheet" href="style.css">
      <!-- end milik pijar -->
      <!-- font-awesome css -->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!-- ionicons.min css -->
      <link rel="stylesheet" href="css/ionicons.min.css">
   </head>
   <body data-rsssl=1 class="home page-template-default page page-id-532 et_button_custom_icon et_pb_button_helper_class et_fixed_nav et_show_nav et_cover_background et_pb_gutter windows et_pb_gutters3 et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_pb_footer_columns4 et_header_style_left et_pb_pagebuilder_layout et_right_sidebar et_divi_theme et_minified_js et_minified_css">
      <div id="page-container">
         <header id="main-header" data-height-onload="45">
            <div class="container clearfix et_menu_container">
               <div class="logo_container">
                  <span class="logo_helper"></span>
                  <a href="<?= $row00['alamat_web']; ?>">
                  <img src="gambar/toko/<?php echo $row00['gambar']; ?>" alt="<?php include 'seo/dina_meta2.php'; ?>" id="logo" data-height-percentage="81" />
                  </a>
               </div>
               <div id="et-top-navigation" data-height="45" data-fixed-height="40">
                  <nav id="top-menu-nav">
                     <ul id="top-menu" class="nav">
                        <li id="menu-item-873" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-532 current_page_item menu-item-873"><a href="<?= $row00['alamat_web']; ?>" aria-current="page">Home</a></li>
                        <li id="menu-item-485" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-485">
                           <a href="pricelist/index.html">Daftar Mobil</a>
                           <ul class="sub-menu">
                              <?php
                                 $query1 = $db->prepare("SELECT id_kategori,nama_kategori FROM kategori_produk ORDER BY nama_kategori ASC");
                                 $query1->execute();
                                 $result1= $query1->get_result();
                                 while ( $row1 = $result1->fetch_assoc() ){
                                 
                                     
                                     $query2 = $db->prepare("SELECT id_subkategori,nama_subkategori,subkategori_seo FROM subkategori_produk WHERE aktif=? AND id_kategori=? ORDER BY nama_subkategori ASC");
                                     $query2->bind_param("si", $aktif2,$id_kategori2);
                                     $id_kategori2 = $row1['id_kategori'];
                                     $aktif2       = "Y";
                                     $query2->execute();
                                     $result2      = $query2->get_result();
                                     while ( $row2         = $result2->fetch_assoc() ){ ?>
                              <li id="menu-item" class="menu-item menu-item-type-post_type menu-item-object-post menu-item">
                                 <a href="kategori-<?= $row2['id_subkategori']; ?>-<?= $row2['subkategori_seo'];?>"><?= $row2['nama_subkategori']; ?></a>
                              </li>
                              <?php	}
                                 }
                                 ?>
                           </ul>
                        </li>
                        <?php
                           $query4  = $db->prepare("SELECT nama_menu,link FROM menuutama WHERE id_main <> 35 AND aktif=? AND lokasi=? ORDER BY urutan ASC");
                           $query4->bind_param("ss", $aktif4,$lokasi4);
                           $lokasi4 = "Public";
                           $aktif4  = "Y";
                           $query4->execute();
                           $result4 = $query4->get_result();
                           while ( $row4 = $result4->fetch_assoc() ){ ?>
                        <li id="menu-item-930" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-930"><a href="<?= $row4['link']; ?>"><?= $row4['nama_menu']; ?></a></li>
                        <?php } ?>
                        <li id="menu-item-930" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-930">
                        <a href="#" class="raven-menu-item" data-toggle="dropdown">Berita<b class="caret"></b></a>
                                                                <ul class="sub-menu">
                                        
                                                                    <?php
                                                                                $query3 = $db->prepare("SELECT id_kategori,nama_kategori,kategori_seo FROM kategori_artikel WHERE aktif=? ORDER BY nama_kategori ASC");
                                                                                $query3->bind_param("s", $aktif3);
                                                                                $aktif3 = "Y";
                                                                                $query3->execute();
                                                                                $result3= $query3->get_result();
                                                                                while ( $row3 = $result3->fetch_assoc() ){
                                                                        
                                                                                    echo '<li><a class="list" href="label-'.$row3['id_kategori'].'-'.$row3['kategori_seo'].'">'.$row3['nama_kategori'].'</a></li>';
                                                                                
                                                                                }
                                                                    ?>

                                                                </ul>
                        </li>
                     </ul>
                 
                 
                  </nav>
                  <div id="et_mobile_nav_menu">
                     <div class="mobile_nav closed">
                        <span class="select_page">Select Page</span>
                        <span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
                     </div>
                  </div>
               </div>
               <!-- #et-top-navigation -->
            </div>
            <!-- .container -->
            <div class="et_search_outer">
               <div class="container et_search_form_container">
                  <!-- <form role="search" method="get" class="et-search-form" action="https://auto2000toyota.com/">
                     <input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" /> 
                     </form> -->
                  <span class="et_close_search_field"></span>
               </div>
            </div>
         </header>
         <!-- #main-header -->
         <!-- main body -->
         <?php include "tengah.php";?>
         <!-- end main body -->
         <footer id="main-footer">
            <div class="container">
               <div id="footer-widgets" class="clearfix">
                  <div class="footer-widget">
                     <div id="media_image-2" class="fwidget et_pb_widget widget_media_image">
                        <h4 class="title">AUTO 2000</h4>
                        <a href="<?= $row00['alamat_web']; ?>"><img width="650" height="193" src="images/logo-white-auto-2000.png" alt="<?php include 'seo/dina_meta2.php'; ?>" class="image wp-image-2040  attachment-full size-full"  style="max-width: 100%; height: auto;" srcset="images/logo-white-auto-2000.png 650w, images/logo-white-auto-2000.png 300w"
                           sizes="(max-width: 650px) 100vw, 650px" /></a>
                     </div>
                     <!-- end .fwidget -->
                  </div>
                  <!-- end .footer-widget -->
                  <div class="footer-widget">
                     <div id="nav_menu-4" class="fwidget et_pb_widget widget_nav_menu">
                        <h4 class="title">Favourite Car :</h4>
                        <div class="menu-city-car-hatchback-container">
                           <ul id="menu-city-car-hatchback" class="menu">
                              <?php 
                                 $produkfooter = $db->query("SELECT nama_subkategori FROM subkategori_produk");
                                 while ( $footershow = $produkfooter->fetch_assoc() ){
                                 ?>
                              <li id="menu-item-2243" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-2243">
                                 <a href="#"><?= $footershow['nama_subkategori'] ?></a>
                              </li>
                              <?php } ?>
                           </ul>
                        </div>
                     </div>
                     <!-- end .fwidget -->
                     <!-- end .fwidget -->
                     <!-- end .fwidget -->
                  </div>
                  <!-- end .footer-widget -->
                  <div class="footer-widget">
                     <div id="nav_menu-2" class="fwidget et_pb_widget widget_nav_menu">
                        <h4 class="title">Car Type :</h4>
                        <div class="menu-mobil-honda-suv-container">
                           <ul id="menu-mobil-honda-suv" class="menu">
                              <?php 
                                 $produktype = $db->query("SELECT nama_kategori FROM kategori_produk");
                                 while ( $footertype = $produktype->fetch_assoc() ){
                                 ?>
                              <li id="menu-item-2248" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-2248">
                                 <a href="#">
                                 <?= $footertype['nama_kategori']; ?></a>
                              </li>
                              <?php } ?>
                           </ul>
                        </div>
                     </div>
                     <!-- end .fwidget -->
                     <!-- end .fwidget -->
                  </div>
                  <!-- end .footer-widget -->
                  <div class="footer-widget last">
                     <div id="custom_html-2" class="widget_text fwidget et_pb_widget widget_custom_html">
                        <h4 class="title">Hubungi Kami :</h4>
                        <div class="textwidget custom-html-widget">
                           PT. AUTO 2000<br/> (AUTO 2000)<br/> Alamat Dealer : Jl. Jakarta <br/>
                           <!-- <p><img class="alignnone size-full wp-image-1676" src="wp-content/uploads/2021/04/sales-Mobil-Honda-tulungagung.png" alt="" width="123" height="100" /> </p>
                              Yopie Pratama Putra<br/> (Sales Executive)<br/>
                              <div style="float:none; margin: 2px 0px;">
                                  <a href="tel:+6282266661662"><img src="wp-content/uploads/2019/03/logo-tlp.png" style="width: 16px; float: left; margin-top: 3px;" alt="" />
                                      <span style="margin-left:  9px; font-size: 12px; line-height: 14px;  color: #fff;">+62 822-6666-1662</span></a>
                              </div> -->
                           <div style="float:none; margin: 2px 0px;">
                              <a href="https://api.whatsapp.com/send?phone=<?php echo $row00['nomor_hp']; ?>&amp;text=Halo%20AUTO-2000,%20Saya%20mau%20tanya..."><img src="wp-content/uploads/2019/03/logo-wa.png" style="width: 16px; float: left; margin-top: 3px;" alt="" />
                              <span style="margin-left:  9px; margin-right: 9px; font-size: 12px; line-height: 14px;  color: #fff;">+62 857-8157-1742</span></a>
                           </div>
                        </div>
                     </div>
                     <!-- end .fwidget -->
                  </div>
                  <!-- end .footer-widget -->
               </div>
               <!-- #footer-widgets -->
            </div>
            <!-- .container -->
            <div id="footer-bottom">
               <div class="container clearfix">
                  <ul class="et-social-icons">
                  </ul>
                  <div id="footer-info">©2022 - AUTO 2000 Toyota, AUTO 2000, Dealer AUTO 2000, Promo Mobil Toyota, Harga Mobil Toyota. auto2000.id. All rights reserved. </div>
               </div>
               <!-- .container -->
            </div>
         </footer>
         <!-- #main-footer -->
      </div>
      <!-- #et-main-area -->
      </div>
      <!-- #page-container -->
      <!-- milik pijar -->
      <!-- end milik pijar -->
      <!-- google tag manager -->
      <!-- <script type="text/javascript">
         var et_animation_data = [];
         </script> -->
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-194305498-1"></script>
         <script>
             window.dataLayer = window.dataLayer || [];
         
             function gtag() {
                 dataLayer.push(arguments);
             }
             gtag('js', new Date());
         
             gtag('config', 'UA-194305498-1');
         </script> -->
      <!-- google tag manager -->
      <!-- <div class="wpcs">
         <div class="wpcs-content">
             <div class="wpcs-list">
                 <a class="wpcs-telp" href="kontak-kami/index.html">Kontak Kami <span class="wpcs-desk"> </span></a>
             </div>
             <div class="wpcs-list">
                 <a class="wpcs-telp" href="tel:+6285781571742">Call Now <span class="wpcs-desk">+62 857-8157-1742</span></a>
             </div>
             <div class="wpcs-list">
                 <a class="wpcs-wa" href="https://api.whatsapp.com/send?phone=6282266661662&amp;text=Halo%20honda-tulungagung.com,%20Saya%20mau%20tanya%20....">Chat Via WA <span class="wpcs-desk">: +62 857-8157-1742</span></a>
             </div>
         </div>
         </div> -->
      <!-- options 3  -->
      <div class="fab-wrapper wow fadeInUp animated" data-wow-delay=".2s">
         <input id="fabCheckbox" type="checkbox" class="fab-checkbox" />
         <label class="fab" for="fabCheckbox">
         <span class="fab-dots fab-dots-1"></span>
         <span class="fab-dots fab-dots-2"></span>
         </label>
         <div class="fab-wheel">
            <a class="fab-action fab-action-3" href="#" onclick="openForm()">
            <img src="https://auto2000.co.id/_ui/responsive/theme-auto2000/images/need-help.png" style="width:120px;">
            </a>
            <a class="fab-action fab-action-4" href="https://api.whatsapp.com/send?phone=<?php echo $row00['nomor_hp']; ?>&text=Halo%20*Butik(butik-kitchen)*,%20saya%20ingin%20consultasi%20dengan%20anda">
            <i class="fa fa-whatsapp" style="color:green;"  aria-hidden="true"></i>
            </a>
         </div>
      </div>
      <!-- end options -->
      <!-- form -->
      <div class="chat-popup" id="myForm">
         <form onsubmit="return showInput()" class="form-container">
            <img src="https://d141cscbo5t2xj.cloudfront.net/sites/3002/binesh-realty-group-laguna-hills-ca-real-estate-chat.png" style="width:50px;">
            <label for="msg"><b>Tanya Tasia</b></label>
            <textarea placeholder="isi pesan.. " id="user_pesan" required></textarea>
            <a href="#" id="link2" target="_blank"  onclick="showInput();">
            <button type="button" class="btn cancel">
            Kirim
            </button>
            </a>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
         </form>
      </div>
      <!-- end form -->
      <script>
         function openForm() {
         document.getElementById("myForm").style.display = "block";
         }
         
         function closeForm() {
         document.getElementById("myForm").style.display = "none";
         }
      </script>
      <script>
         var str = "<?php echo $rowcrumb['nomor_hp']; ?>";
         
         function showInput() {
         
             var d = document.getElementById("user_pesan").value;
             var wa = "https://api.whatsapp.com/send?phone=";
             var sap = "&text=Halo%20*AUTO-2000*,";
         	var enter = "%0A";
         	
         	if(d == "") {
         		alert("Mohon isi pesan Anda");
         		return false;
           	} else {
         		var strLink = wa + str + sap + enter + d;
         		document.getElementById("link2").setAttribute("href", strLink);
         		console.log(strLink);
         	}
         
         }
      </script>
      <script type='text/javascript'>
         /* <![CDATA[ */
         var et_shortcodes_strings = {
             "previous": "Previous",
             "next": "Next"
         };
         var et_pb_custom = {
             "ajaxurl": "https:\/\/honda-tulungagung.com\/wp-admin\/admin-ajax.php",
             "images_uri": "https:\/\/honda-tulungagung.com\/wp-content\/themes\/DividiCustomOkejasaweb\/images",
             "builder_images_uri": "https:\/\/honda-tulungagung.com\/wp-content\/themes\/DividiCustomOkejasaweb\/includes\/builder\/images",
             "et_frontend_nonce": "0ed3c7b714",
             "subscription_failed": "Please, check the fields below to make sure you entered the correct information.",
             "et_ab_log_nonce": "63116abb79",
             "fill_message": "Please, fill in the following fields:",
             "contact_error_message": "Please, fix the following errors:",
             "invalid": "Invalid email",
             "captcha": "Captcha",
             "prev": "Prev",
             "previous": "Previous",
             "next": "Next",
             "wrong_captcha": "You entered the wrong number in captcha.",
             "is_builder_plugin_used": "",
             "ignore_waypoints": "no",
             "is_divi_theme_used": "1",
             "widget_search_selector": ".widget_search",
             "is_ab_testing_active": "",
             "page_id": "532",
             "unique_test_id": "",
             "ab_bounce_rate": "5",
             "is_cache_plugin_active": "no",
             "is_shortcode_tracking": ""
         };
         var et_pb_box_shadow_elements = [];
         /* ]]> */
      </script>
      <script type='text/javascript' src='wp-content/themes/DividiCustomOkejasaweb/js/custom.min4f62.js?ver=3.0.106'></script>
      <script type='text/javascript' src='wp-content/themes/DividiCustomOkejasaweb/core/admin/js/common4f62.js?ver=3.0.106'></script>
      <script type='text/javascript' src='wp-includes/js/wp-embed.min7263.js?ver=5.4.4'></script>
      <script type='text/javascript' src='wp-content/plugins/tablepress/js/jquery.datatables.min2f3e.js?ver=1.12'></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
             $('#tablepress-25').dataTable({
                 "stripeClasses": ["even", "odd"],
                 "ordering": false,
                 "paging": false,
                 "searching": false,
                 "info": false
             });
             $('#tablepress-26').dataTable({
                 "stripeClasses": ["even", "odd"],
                 "ordering": false,
                 "paging": false,
                 "searching": false,
                 "info": false
             });
             $('#tablepress-27').dataTable({
                 "stripeClasses": ["even", "odd"],
                 "ordering": false,
                 "paging": false,
                 "searching": false,
                 "info": false
             });
             $('#tablepress-28').dataTable({
                 "stripeClasses": ["even", "odd"],
                 "ordering": false,
                 "paging": false,
                 "searching": false,
                 "info": false
             });
             $('#tablepress-29').dataTable({
                 "stripeClasses": ["even", "odd"],
                 "ordering": false,
                 "paging": false,
                 "searching": false,
                 "info": false
             });
             $('#tablepress-30').dataTable({
                 "stripeClasses": ["even", "odd"],
                 "ordering": false,
                 "paging": false,
                 "searching": false,
                 "info": false
             });
             $('#tablepress-31').dataTable({
                 "stripeClasses": ["even", "odd"],
                 "ordering": false,
                 "paging": false,
                 "searching": false,
                 "info": false
             });
             $('#tablepress-32').dataTable({
                 "stripeClasses": ["even", "odd"],
                 "ordering": false,
                 "paging": false,
                 "searching": false,
                 "info": false
             });
             $('#tablepress-33').dataTable({
                 "stripeClasses": ["even", "odd"],
                 "ordering": false,
                 "paging": false,
                 "searching": false,
                 "info": false
             });
             $('#tablepress-34').dataTable({
                 "stripeClasses": ["even", "odd"],
                 "ordering": false,
                 "paging": false,
                 "searching": false,
                 "info": false
             });
             $('#tablepress-35').dataTable({
                 "stripeClasses": ["even", "odd"],
                 "ordering": false,
                 "paging": false,
                 "searching": false,
                 "info": false
             });
             $('#tablepress-36').dataTable({
                 "stripeClasses": ["even", "odd"],
                 "ordering": false,
                 "paging": false,
                 "searching": false,
                 "info": false
             });
         });
      </script>
   </body>
</html>