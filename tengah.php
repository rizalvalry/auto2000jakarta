<?php
	if ( $_GET['module'] == "home" ){
		include "pages/konten.php";
	} else if ( $_GET['module'] == "detailproduk" ){
		include "pages/detail-produk.php";
	} else if ( $_GET['module'] == "keranjangbelanja" ){
		include "pages/keranjang.php";
	} else if ( $_GET['module'] == "detailkategori" ){
		include "pages/kategori.php";
	} else if ( $_GET['module'] == "kategoriproduk" ){
		include "pages/kategori-produk.php";
	} else if ( $_GET['module'] == "semuaproduk" ){
		include "pages/semua-produk.php";
	} else if ( $_GET['module'] == "selesaibelanja" ){
		include "pages/login.php";
	} else if ( $_GET['module'] == "memberbaru" ){
		include "pages/daftar.php";
	} else if ( $_GET['module'] == "konfirmasipesanan" ){
		include "pages/konfirmasi-pesanan.php";
	} else if ( $_GET['module'] == "simpantransaksi" ){
		include "pages/aksi-konfirmasi.php";
	} else if ( $_GET['module'] == "memberdaftar" ){
		include "pages/memberdaftar.php";
	} else if ( $_GET['module'] == "loginmember" ){
		include "pages/login-member.php";
	} else if ( $_GET['module'] == "akunsaya" ){
		include "pages/akun-saya.php";
	} else if ( $_GET['module'] == "riwayatpesanan" ){
		include "pages/riwayat-pesanan.php";
	} else if ( $_GET['module'] == "detailorder" ){
		include "pages/detail-order.php";
	} else if ( $_GET['module'] == "katasandi" ){
		include "pages/kata-sandi.php";
	} else if ( $_GET['module'] == "lupapassword" ){
		include "pages/lupa-sandi.php";
	} else if ( $_GET['module'] == "aboutus" ){
		include "pages/profil-kami.php";
	} else if ( $_GET['module'] == "portofolio" ){
		include "pages/halaman-statis.php";
	} else if ( $_GET['module'] == "contactus" ){
		include "pages/hubungi-kami.php";
	} else if ( $_GET['module'] == "detaillabel" ){
		include "pages/artikel.php";
	} else if ( $_GET['module'] == "detailartikel" ){
		include "pages/detail-artikel.php";
	} else if ( $_GET['module'] == "semuatestimoni" ){
		include "pages/testimoni.php";
	} else if ( $_GET['module'] == "hasilcari" ){
		include "pages/cari-produk.php";
	} else if ( $_GET['module'] == "daftarseller" ){
		include "pages/daftar-seller.php";
	} else if ( $_GET['module'] == "galeri" ){
		include "pages/galeri.php";
	} else if ( $_GET['module'] == "fotogaleri" ){
		include "pages/foto-galeri.php";
	} else if ( $_GET['module'] == "loginseller" ){
		include "pages/login-seller.php";
	} else if ( $_GET['module'] == "cekongkir" ){
		include "pages/ongkir.php";
	} else if ( $_GET['module'] == "semuaartikel" ){
		include "pages/semua-artikel.php";
	} else if ( $_GET['module'] == "promo" ){
		include "pages/promo.php";
	} else {
		echo "Page Not Found";
	}

?>