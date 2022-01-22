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

<?php $queryevents = $db->query("SELECT * FROM banner where aktif='Y' AND id_banner = 25");
					  $rowevents = $queryevents->fetch_assoc(); ?>

<div class="jupiterx-site" data-markup-id="jupiterx_site">

<main class="jupiterx-main" data-markup-id="jupiterx_main">
            <div class="jupiterx-main-content" data-markup-id="jupiterx_main_content">
                <div class="container" data-markup-id="jupiterx_fixed_wrap[_main_content]">
                    <div class="row" data-markup-id="jupiterx_main_grid">
                        <div class="jupiterx-primary col-lg-12" data-markup-id="jupiterx_primary">
                            <div class="jupiterx-content" role="main" itemprop="mainEntityOfPage" data-markup-id="jupiterx_content">
                                <article id="268" class="jupiterx-post post-268 page type-page status-publish hentry" itemscope="itemscope" itemtype="http://schema.org/CreativeWork" data-markup-id="jupiterx_post">
                                    <header class="jupiterx-post-header" data-markup-id="jupiterx_post_header"></header>
                                    <div class="jupiterx-post-body" itemprop="articleBody" data-markup-id="jupiterx_post_body">
                                        <div class="jupiterx-post-content clearfix" itemprop="text" data-markup-id="jupiterx_post_content">
                                            <div data-elementor-type="post" data-elementor-id="268" class="elementor elementor-268" data-elementor-settings="[]">
                                                <div class="elementor-inner">
                                                    <div class="elementor-section-wrap">
                                                        <section class="elementor-element elementor-element-3bf34cc elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle elementor-section elementor-top-section" data-id="3bf34cc" data-element_type="section"
                                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background-image:url('gambar/banner/<?= $rowevents['gambar'] ?>')">
                                                            <div class="elementor-background-overlay"></div>
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-element elementor-element-24e856b elementor-column elementor-col-100 elementor-top-column" data-id="24e856b" data-element_type="column">
                                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-0f2424c p-no-margin elementor-widget elementor-widget-heading" data-id="0f2424c" data-element_type="widget" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h2 class="elementor-heading-title elementor-size-default"><?php echo $row55['nama_kategori']; ?></h2>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-dac60f6 elementor-widget elementor-widget-text-editor" data-id="dac60f6" data-element_type="widget" data-widget_type="text-editor.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                                            <p><?= $rowevents['keterangan'] ?></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
				
														
                                                        <section class="elementor-element elementor-element-53560ab elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="53560ab" data-element_type="section"
                                                            data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                                        </section>
														
														
				<section class="elementor-element elementor-element-f30b298 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="f30b298" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-no">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-8ea52bf elementor-column elementor-col-100 elementor-top-column" data-id="8ea52bf" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-5666634 elementor-widget elementor-widget-heading pemisah" data-id="5666634" data-element_type="widget" data-widget_type="heading.default">
		
				<!-- isi -->
				
					
						<!-- banner-area-start -->
			<div class="container  animated wow slideInLeft" data-wow-delay=".5s">
				<div class="container">
					<div class="row">

                  
						
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
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">
							<!-- single-banner-start -->
							<div class="single-banner mb-3">
								<div class="banner-img">
									<a href="event-<?php echo $row5['id_artikel']; ?>-<?php echo $row5['judul_seo']; ?>"><img src="gambar/thumb_artikel/<?php echo $row5['gambar']; ?>" class="rounded" alt="banner" style="width:358px; height:250px" /></a>
								</div>
								<div class="banner-content-3 wow slideInLeft" data-wow-duration="1.0s" data-wow-delay="2s">
									<p class="white-text"><?php echo $row5['judul_artikel']; ?></p class="white-text">
									<!-- <h2>Clothing Originals</h2> -->
									<!-- <a href="<?php echo $row5['url']; ?>" class="text-white">view collection</a> -->
								</div>
							</div>
							<!-- single-banner-end -->
                        </div>
                        <?php } ?>
						
					</div>
				</div>

				

				<!-- pages -->
				<div class="clearfix"></div>
							<div class="grid_3 grid_5 wow fadeInDown animated" data-wow-delay=".5s">
							<center>
								<ul class="pagination pagination-lg">
								<?php
									$query27      = $db->query("SELECT id_artikel FROM artikel,kategori_artikel WHERE artikel.id_kategori=kategori_artikel.id_kategori AND kategori_artikel.id_kategori = '$_GET[id]'");
									$row27        = $query27->num_rows;
									$jumlah_hal27 = ceil ($row27/$batas);
								?>
								
								<li style="<?php if ( $_GET['hallabel'] <= 1 ) echo "display:none"; ?>"><a href="hallabel-<?php echo $_GET['id']; ?>-<?php echo $_GET['hallabel'] - 1; ?>"><span class="badge"><i style="font-size:24px" class="fa">«</i></span></a></li>
									<!-- <span class="badge"> -->
									<?php
										for ( $i = 1; $i <= $jumlah_hal27; $i++ ){
									?>
										<li class="<?php if ( $_GET['hallabel'] == $i ) echo "number-active"; ?>">
										<a class="font-number-active" href="hallabel-<?php echo $_GET['id'].'-'. $i; ?>"><?php echo $i; ?></a>
										<!-- </span> -->
									</li>
									<?php
										}
									?>
									<li style="<?php if ( $_GET['hallabel'] >= $jumlah_hal27 ) echo "display:none"; ?>"><a href="hallabel-<?php echo $_GET['id']; ?>-<?php echo $_GET['hallabel'] + 1; ?>"><span class="badge"><i style="font-size:24px" class="fa">»</i></span></a></li>
								</ul>
							</center>
							</div>
						</div>
				<!-- end pages -->


			</div>
            <!-- banner-area-end -->


						</div>
			</div>
		</div>
						</div>
			</div>
		</section>
				
						</div>
			</div>
		</div>
		</div></div></article></div></div></div></div></div>



    </div>

	<?php
		} else {
			$query45 = $db->query("SELECT nama_kategori FROM kategori_artikel WHERE id_kategori='$_GET[id]'");
			$row45   = $query45->fetch_assoc();
		
			echo '<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>';
			echo '<li class="active">Belum Ada Artikel Untuk Kategori : '.$row45['nama_kategori'].'</li>';
		
		}
	?>