<?php 
    /* Template Name: Syarat Bergabung Petani */
    get_header();
?>
<?php 
        $hero = get_field('hero');
        $persyaratan  = get_field('persyaratan');
        $prosesPendaftaran  = get_field('proses_pendaftaran');
        $contact = get_field('contact');
  ?>

    <!-- Jumbotron -->
    <section class="jumbotron-petani jumbotron-fluid" 
    <?php 
    $backImage = $hero['backgroun_hero'];
   ?>
   style="background-image:url( <?php echo $backImage['url']; ?>);">
      <div class="container">
        <h1 class="display-4">
         <?php echo $hero['big_text'] ?>
        </h1>
        <p>
        <?php echo $hero['small_text'] ?>
        </p>
        <a href="<?php echo $hero['button'] ?>" class="btn btn-jum-petani"><?php echo $hero['button_text'] ?></a>
      </div>
    </section>
    <!-- Akhir Jumbotron -->

      <!-- Persyaratan -->
      <section class="persyaratan">
        <div class="container-fluid py-5 ">
            <h1 class="text-center pb-5"><?php echo $persyaratan['judul']; ?></h1>
            <div class="container">
            <div class="card" >
            <div class="card-body">
                <div class="container-fluid px-5 py-4">
                <p class="card-text"><?php echo $persyaratan['list_syarat']; ?></p>
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <img class="icon_information" src="<?php echo get_theme_file_uri('assets/images/icons/ic_information.png') ?>" alt="">
                    <div class="text-alert"><?php echo $persyaratan['alert_syarat']; ?></div> 
                </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Akhir Persyaratan -->

    <!-- Proses Pendaftaran -->
    <section class="proses-pendaftaran">
      <div class="container-fluid mt-4 pt-5">
        <div class="container">
          <h1 class="text-center pb-5"><?php echo $prosesPendaftaran['judul'];?></h1>
          <div class="row justify-content-center py-2">
          <?php 
             $icon1 = $prosesPendaftaran['icon_1'];
             $icon2 = $prosesPendaftaran['icon_2'];
             $icon3 = $prosesPendaftaran['icon_3'];
                        ?>
            <div class="col col-lg-6 d-flex mt-4">
              <img src="<?php echo $icon1['url'];?>" class="icon-syarat" alt="" />
              <div>
                <h5><?php echo $prosesPendaftaran['text_icon_1'];?></h5>
                <p><?php echo $prosesPendaftaran['describtion_icon_1'];?></p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center py-2">
            <div class="col col-lg-6 d-flex mt-4">
              <img src="<?php echo $icon2['url'];?>" class="icon-syarat" alt="" />
              <div >
                <h5><?php echo $prosesPendaftaran['text_icon_2'];?></h5>
                <p><?php echo $prosesPendaftaran['describtion_icon_2'];?></p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center py-2">
            <div class="col col-lg-6 d-flex mt-4">
              <img src="<?php echo $icon3['url'];?>" class="icon-syarat" alt="" />
              <div >
                <h5><?php echo $prosesPendaftaran['text_icon_3'];?></h5>
                <p><?php echo $prosesPendaftaran['describtion_icon_3'];?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Proses Pendaftaran -->

    <!-- Contact -->
    <section class="contact-1">
      <div class="container-fluid">
        <div class="container">
          <h1 class="mt-4">
            <?php echo $contact['big_text']; ?>
          </h1>
          <div class="btn-contact-1">
          <a href="<?php echo $contact['button_1']; ?>" class="btn btn-contact-1-color-b"><?php echo $contact['text_button_1']; ?></a>
        </div>
        </div>
      </div>
      <div class="bg-cta-desktop">
        <object data="<?php echo get_theme_file_uri('assets/images/BG_CTA.svg'); ?>" width="100%"></object>
      </div>
      <div class="bg-cta-mobile">
        <object data="<?php echo get_theme_file_uri('assets/images/CTA.svg'); ?>" width="104%"></object>
      </div>
      <div class="mascout">
        <img class="mascout-size" src="<?php echo get_theme_file_uri('assets/images/Mascot.png'); ?>" alt="mascout" />
      </div>
    </section>
    <!-- Akhir Cotact -->

<?php 
    get_footer();
?>

