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
                                                                                        <h2 class="elementor-heading-title elementor-size-default"><?= $rowevents['judul_banner'] ?></h2>
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
		
				<!-- mulai dari sini -->

				
			<!-- banner-area-start -->
			<div class="container  animated wow slideInLeft" data-wow-delay=".5s">
				<div class="container">
					<div class="row">

                  
						
						<?php
				include "config/tgl_indo.php";
				$query0                  = $db->prepare("SELECT artikel.id_artikel, artikel.tag, artikel.judul_artikel, artikel.judul_seo, artikel.isi_artikel, artikel.gambar, artikel.dibaca, artikel.tanggal, artikel.hari FROM artikel INNER JOIN kategori_artikel ON artikel.id_kategori=kategori_artikel.id_kategori ORDER BY artikel.id_artikel DESC");
				$query0->execute();
				$result0                 = $query0->get_result();
				while ( $row0            = $result0->fetch_assoc() ){
					$tanggal             = tgl_indo($row0['tanggal']);
					$isi_artikel         = $row0['isi_artikel'];
					$isi                 = substr($isi_artikel,0,50); // ambil sebanyak 220 karakter
					$isi                 = substr($isi_artikel,0,strrpos($isi," ")); // potong per spasi kalimat

			?>
						<div class="col-xl-4 col-lg-4 col-md-4 col-12">
							<!-- single-banner-start -->
							<div class="single-banner mb-3">
								<div class="banner-img">
									<a href="events-<?php echo $row0['id_artikel']; ?>-<?php echo $row0['judul_seo']; ?>"><img src="gambar/thumb_artikel/<?php echo $row0['gambar']; ?>" class="rounded" alt="banner" style="width:358px; height:250px" /></a>
								</div>
								<div class="banner-content-3 wow slideInLeft" data-wow-duration="1.0s" data-wow-delay="2s">
									<p class="white-text"><?php echo $row0['judul_artikel']; ?></p class="white-text">
									<!-- <h2>Clothing Originals</h2> -->
									<!-- <a href="<?php echo $row0['url']; ?>" class="text-white">view collection</a> -->
								</div>
							</div>
							<!-- single-banner-end -->
                        </div>
                        <?php } ?>
						
					</div>
				</div>
			</div>
            <!-- banner-area-end -->
		
		
				<!-- isi terakhir -->

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
