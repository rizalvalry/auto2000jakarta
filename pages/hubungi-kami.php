<?php
   $query00 = $db->query("SELECT nama_lengkap FROM user");
   $rowuser = $query00->fetch_assoc();
//    $nama_toko00 = explode(" ", $row00['nama_toko']);
   $tahun = date("Y");
   ?>

<!--breadcrumbs-->
<div class="breadcrumbs">
   <div class="container">
      <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
	  <li>Hubungi Kami</li>
      </ol>
   </div>
</div>
<!--//breadcrumbs-->

<div id="et-main-area">
   <div id="main-content">
      <article id="post-384" class="post-384 page type-page status-publish hentry">
         <div class="entry-content">
            <div class="et_pb_section et_pb_section_1 et_pb_with_background et_section_regular">
               <div class=" et_pb_row et_pb_row_0">
                  <div class="et_pb_column et_pb_column_4_4  et_pb_column_0 et_pb_css_mix_blend_mode_passthrough et-last-child">
                     <div class="et_pb_module et_pb_post_title   et_pb_post_title_0 et_pb_bg_layout_dark et_pb_text_align_center">
                        <div class="et_pb_title_container">
                           <p class="entry-title">Silakan isi form di bawah ini jika Anda memiliki pertanyaan terkait produk, layanan, atau pertanyaan lain. Untuk memulai, silakan pilih jenis pertanyaan Anda agar kami dapat melayani Anda dengan lebih baik.</p>
                        </div>
                     </div>
                  </div>
                  <!-- .et_pb_column -->
               </div>
               <!-- .et_pb_row -->
            </div>
            <!-- .et_pb_section -->
            <div id="kontak-kami" class="et_pb_section et_pb_section_2 et_section_regular">
               <div class=" et_pb_row et_pb_row_1 et_pb_gutters2">
                  <div class="et_pb_column et_pb_column_1_4  et_pb_column_1 et_pb_css_mix_blend_mode_passthrough">
                     <div class="et_pb_module et_pb_image et_pb_image_0 et_always_center_on_mobile">
                        <span class="et_pb_image_wrap"><img src="../wp-content/uploads/2021/04/Foto-Serah-Terima-Mobil-Honda-Tulungagung.jpg" alt="" /></span>
                     </div>
                  </div>
                  <!-- .et_pb_column -->
                  <div class="et_pb_column et_pb_column_1_4  et_pb_column_2 et_pb_css_mix_blend_mode_passthrough">
                     <div class="et_pb_blurb et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_blurb_0 et_pb_blurb_position_left">
                        <div class="et_pb_blurb_content">
                           <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-pb-icon et-waypoint et_pb_animation_off et-pb-icon-circle et-pb-icon-circle-border" style="color: #d10000; background-color: #ffffff; border-color: #d10000;">&#xe0ef;</span></span></div>
                           <div class="et_pb_blurb_container">
                              <h4 class="et_pb_module_header">PT. ASTRA INTERNASIONAL AUTO2000</h4>
                              <div class="et_pb_blurb_description">
                                 <p> 
								 <?= $row00['alamat']; ?>
								</p>
                              </div>
                              <!-- .et_pb_blurb_description -->
                           </div>
                        </div>
                        <!-- .et_pb_blurb_content -->
                     </div>
                     <!-- .et_pb_blurb -->
                     <div class="et_pb_blurb et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_blurb_1 et_pb_blurb_position_left">
                        <div class="et_pb_blurb_content">
                           <div class="et_pb_main_blurb_image"><span class="et_pb_image_wrap"><span class="et-pb-icon et-waypoint et_pb_animation_off et-pb-icon-circle et-pb-icon-circle-border" style="color: #d10000; background-color: #ffffff; border-color: #d10000;">&#xe08a;</span></span></div>
                           <div class="et_pb_blurb_container">
                              <h4 class="et_pb_module_header"> <?= $rowuser['nama_lengkap']; ?></h4>
                              <div class="et_pb_blurb_description">
                                 (Sales Executive)
                              </div>
                              <!-- .et_pb_blurb_description -->
                           </div>
                        </div>
                        <!-- .et_pb_blurb_content -->
                     </div>
                     <!-- .et_pb_blurb -->
                     <div class="et_pb_blurb et_pb_module et_pb_bg_layout_light et_pb_text_align_left  et_pb_blurb_2 et_pb_blurb_position_left">
                        <div class="et_pb_blurb_content">
                           <div class="et_pb_main_blurb_image"><a href="tel:+6282266661662"><span class="et_pb_image_wrap"><span class="et-pb-icon et-waypoint et_pb_animation_off et-pb-icon-circle et-pb-icon-circle-border" style="color: #d10000; background-color: #ffffff; border-color: #d10000;">&#xe090;</span></span></a></div>
                           <div class="et_pb_blurb_container">
                              <h4 class="et_pb_module_header"><a href="tel:+<?= $row00['nomor_hp']; ?>">TLP : 
							  <?php
								$show =ltrim($row00['nomor_hp'], '62');
								echo "0".$show;
							   ?></a></h4>
                              <div class="et_pb_blurb_description">
                              </div>
                              <!-- .et_pb_blurb_description -->
                           </div>
                        </div>
                        <!-- .et_pb_blurb_content -->
                     </div>
                  </div>
                  <!-- .et_pb_column -->
                  <div class="et_pb_column et_pb_column_1_2  et_pb_column_3 et_pb_css_mix_blend_mode_passthrough et-last-child">
                     <div id="et_pb_contact_form_0" class="et_pb_module et_pb_contact_form_container clearfix  et_pb_contact_form_0" data-form_unique_num="0">
                        <h5 class="et_pb_contact_main_title">Contact Form :</h5>
                        <div class="et-pb-contact-message"></div>
                        <div class="et_pb_contact">
						<form onsubmit="return showInput()" class="et_pb_contact_form clearfix"> 
                              <p class="et_pb_contact_field et_pb_contact_field_0 et_pb_contact_field_half" data-id="name" data-type="input">
                                 <label for="user_input" class="et_pb_contact_form_label">Nama Anda</label>
                                 <input type="text" id="user_input" class="input" data-required_mark="required" data-field_type="input" data-original_id="name" placeholder="Nama Anda">
                              </p>
                              <p class="et_pb_contact_field et_pb_contact_field_1 et_pb_contact_field_half et_pb_contact_field_last" data-id="phone" data-type="input">
                                 <label for="user_goal" class="et_pb_contact_form_label">No Telepon / WhatsApp</label>
                                 <input type="text" id="user_goal" class="input" data-required_mark="required" data-field_type="input" data-original_id="phone" placeholder="No Telepon / WhatsApp">
                              </p>
                              <p class="et_pb_contact_field et_pb_contact_field_2 et_pb_contact_field_last" data-id="email" data-type="email">
                                 <label for="user_email" class="et_pb_contact_form_label">Email Address</label>
                                 <input type="text" id="user_email" class="input" data-required_mark="required" data-field_type="email" data-original_id="email" placeholder="Email Address">
                              </p>
                              <p class="et_pb_contact_field et_pb_contact_field_3 et_pb_contact_field_last" data-id="message" data-type="text">
                                 <label for="user_pesan" class="et_pb_contact_form_label">Tulis pesan yang ingin anda sampaikan disini</label>
                                 <textarea id="user_pesan" class="et_pb_contact_message input" data-required_mark="required" data-field_type="text" data-original_id="message" placeholder="Tulis pesan yang ingin anda sampaikan disini"></textarea>
                              </p>
                             
                              <div class="et_contact_bottom_container">
								<a href="#" id="link2" target="_blank"  onclick="showInput();">
									<button type="button" class="et_pb_contact_submit et_pb_button">Kirim Pesan</button>
								</a>
							 </div>
                              
                           </form>
                        </div>
                        <!-- .et_pb_contact -->
                     </div>
                     <!-- .et_pb_contact_form_container -->
                  </div>
                  <!-- .et_pb_column -->
               </div>
               <!-- .et_pb_section -->					
            </div>
            <!-- .entry-content -->
      </article>
      <!-- .et_pb_post -->
      </div> <!-- #main-content -->
      <span class="et_pb_scroll_top et-pb-icon"></span>
   </div>
   <!-- #et-main-area -->


   <script>
var str = "<?php echo $rowcrumb['nomor_hp']; ?>";

function showInput() {

    var a = document.getElementById("user_input").value;
    var b = document.getElementById("user_email").value;
    var c = document.getElementById("user_goal").value;
    var d = document.getElementById("user_pesan").value;
    var wa = "https://api.whatsapp.com/send?phone=";
    var sap = "&text=Halo%20*AUTO-2000*,";
	var enter = "%0A";
	
	if (a == "") {
		alert("Mohon isi nama Anda dengan benar"); 
		return false;
	} else {
		var strLink = wa + str + sap + a + enter + b + enter + c + enter + d;
		document.getElementById("link2").setAttribute("href", strLink);
		console.log(strLink);
	}

}
</script>