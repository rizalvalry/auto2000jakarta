<?php
	$query567 = $db->query("SELECT DISTINCT foto.judul_foto ,galeri.judul_galeri, galeri.keterangan FROM galeri LEFT JOIN foto ON foto.id_galeri=galeri.id_galeri WHERE galeri.id_galeri = '$_GET[id]' ");
	$jml567   = $query567->num_rows;
	$row567   = $query567->fetch_assoc();
	
?>


<script type="text/javascript">
	$(function() {
		$('#gallery a').lightBox();
	});
	</script>

<!--breadcrumbs-->
<div class="breadcrumbs">
   <div class="container">
      <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
	  <li><a href="galeri.html" title="Retailer - Multipurpose Responsive Shopify Theme/Template">Gallery /<?php if ($row567['judul_foto']  == "") {
					echo "kosong";
				} else {
					echo $row567['judul_galeri'];
				} ?></a></li>
      </ol>
   </div>
</div>
<!--//breadcrumbs-->

<div id="et-main-area">
   <div id="main-content">
      <article id="post-925" class="post-925 page type-page status-publish hentry">
         <div class="entry-content">
            <div class="et_pb_section et_pb_section_1 et_pb_with_background et_section_regular">
               <div class=" et_pb_row et_pb_row_0">
                  <div class="et_pb_column et_pb_column_4_4  et_pb_column_0 et_pb_css_mix_blend_mode_passthrough et-last-child">
                     <div class="et_pb_module et_pb_post_title   et_pb_post_title_0 et_pb_bg_layout_dark et_pb_text_align_center">
                        
                     </div>
                  </div>
                  <!-- .et_pb_column -->
               </div>
               <!-- .et_pb_row -->
            </div>
            <!-- .et_pb_section -->
            <div class="et_pb_section et_pb_section_2 et_section_regular">
               <div class=" et_pb_row et_pb_row_1 et_pb_gutters2">
                  <div class="et_pb_column et_pb_column_4_4  et_pb_column_1 et_pb_css_mix_blend_mode_passthrough et-last-child">
                     <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_center  et_pb_text_0">
                       
                     </div>
                     <!-- .et_pb_text -->
                     <div class="et_pb_module et_pb_gallery et_pb_gallery_0 et_pb_gallery_grid et_pb_bg_layout_light clearfix">
                        <div class="et_pb_gallery_items et_post_gallery clearfix" data-per_page="8">
                           
						
						<?php
							$query1234      = $db->query("SELECT id_foto, foto, judul_foto, keterangan FROM foto WHERE id_galeri = '$_GET[id]' ORDER BY id_foto ASC");
							while( $row1234 = $query1234->fetch_assoc() ){
						?>
						<!-- looping -->
						   <div class="et_pb_gallery_item et_pb_grid_item et_pb_bg_layout_light">
                              <div class='et_pb_gallery_image landscape'>
                                 <a href="gambar/thumb_foto/<?php echo $row1234['foto']; ?>" title="<?php echo $row1234['judul_foto']; ?>">
                                 <img class="radius-galeri" src="gambar/thumb_foto/<?php echo $row1234['foto']; ?>" alt="<?php echo $row1234['judul_foto']; ?>" />
                                 <span class="et_overlay"></span>
                                 </a>
                              </div>
                           </div>
						<!-- end looping -->
						   
                     
                        <?php
						}
						?>
                         
						   
                        </div>
                        <!-- .et_pb_gallery_items -->
                        <div class="et_pb_gallery_pagination"></div>
                     </div>
                     <!-- .et_pb_gallery -->
                  </div>
                  <!-- .et_pb_column -->
               </div>
            
            </div>
            <!-- .et_pb_section -->					
         </div>
         <!-- .entry-content -->
      </article>
      <!-- .et_pb_post -->
   </div>
   <!-- #main-content -->
   <span class="et_pb_scroll_top et-pb-icon"></span>
</div>
<!-- #et-main-area -->
</div> <!-- #page-container -->