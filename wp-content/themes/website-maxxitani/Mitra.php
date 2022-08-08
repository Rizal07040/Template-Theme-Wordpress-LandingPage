<?php
/* Template Name: Mitra */
get_header()
  
?>
    <?php 
        $heroMitra  = get_field('hero_mitra');
        $supportMitra = get_field('support_mitra'); 
        $about = get_field('about');
        $impact = get_field('impact');
        $contact =get_field('contact');
    ?>
    <!-- Jumbotron -->
    <section class="jumbotron-mitra jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">
          <?php echo $heroMitra['big_text']; ?>
        </h1>
        <p>
          <?php echo $heroMitra['small_text']; ?>
        </p>
        <?php if($heroMitra['button_hero']) : ?>
        <a href="<?php $heroMitra['button_hero'];?>" 
            class="btn btn-jum-mitra btn-all">
              <?php echo $heroMitra['text_button'];?>  
          </a>
        <?php endif ?>
      </div>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- Support -->

    <section class="support">
      <div class="container-fluid mt-4 pt-5">
        <div class="container-lg">
          <h1 class="text-center"><?php echo $supportMitra['support_judul'];?></h1>
          <div class="row justify-content-center" style="margin-top: 64px">
          <?php 
             $icon1 = $supportMitra['icon_1'];
             $icon2 = $supportMitra['icon_2'];
             $icon3 = $supportMitra['icon_3'];
             $icon4 = $supportMitra['icon_4'];
                        ?>
            <div class="col col-5 icon-pos mt-4">
              <img src="<?php echo $icon1['url'];?>" class="icon-support" alt="" />
              <div class="text-support">
                <h5 class="color-green"><?php echo $supportMitra['text__icon_1'];?></h5>
                <p class="text-support"><?php echo $supportMitra['describtion_icon_1'];?></p>
              </div>
            </div>
            <div class="col col-5 icon-pos mt-4">
              <img src="<?php echo $icon2['url'];?>" class="icon-support" alt="" />
              <div class="text-support">
                <h5 class="color-green"><?php echo $supportMitra['text_icon_2'];?></h5>
                <p class="text-support"><?php echo $supportMitra['describtion_icon_2'];?></p>
              </div>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col col-5 icon-pos mt-4">
              <img src="<?php echo $icon3['url'];?>" class="icon-support" alt="" />
              <div class="text-support">
                <h5 class="color-green"><?php echo $supportMitra['text_icon_3'];?></h5>
                <p class="text-support"><?php echo $supportMitra['describtioon_icon_3'];?></p>
              </div>
            </div>
            <div class="col col-5 icon-pos mt-4">
              <img src="<?php echo $icon4['url'];?>" class="icon-support" alt="" />
              <div class="text-support">
                <h5 class="color-green"><?php echo $supportMitra['text_icon_4'];?></h5>
                <p class="text-support"><?php echo $supportMitra['describtion_icon_4'];?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Support -->

    <!-- Impact -->
    <section class="impact">
      <div class="container-fluid py-1">
        <h1 class="text-center text-light" style="margin-top: 20px">
          <?php echo $impact['judul_impact'];?>
        </h1>
      </div>
      <?php 
             $imageImpact1 = $impact['image1'];
             $imageImpact2 = $impact['image2'];
             $imageImpact3 = $impact['image3'];
             $imageImpact4 = $impact['image4'];
             $imageImpact5 = $impact['image5'];
             $imageImpact6 = $impact['image6'];
                        ?>
      <div class="owl-carousel owl-theme" style="margin-right: 30px">
          <div class="card mt-4">
            <div class="card-body">
              <img src="<?php echo $imageImpact1['url'];?>" alt="">
              <h5 class="card-title"><?php echo $impact['title1'];?></h5>
            </div>
          </div>
        
          <div class="card mt-4">
            <div class="card-body">
            <img src="<?php echo $imageImpact2['url'];?>" alt="">
              <h5 class="card-title"><?php echo $impact['title2'];?></h5>
            </div>
          </div>
        
        <div class="ms-2">
          <div class="card mt-4">
            <div class="card-body">
            <img src="<?php echo $imageImpact3['url'];?>" alt="">
              <h5 class="card-title"><?php echo $impact['title3'];?></h5>
            </div>
          </div>
        </div>
        <div class="ms-2">
          <div class="card mt-4">
            <div class="card-body">
            <img src="<?php echo $imageImpact4['url'];?>" alt="">
              <h5 class="card-title"><?php echo $impact['title4'];?></h5>
            </div>
          </div>
        </div>
        <div class="ms-2">
          <div class="card mt-4">
            <div class="card-body">
            <img src="<?php echo $imageImpact5['url'];?>" alt="">
              <h5 class="card-title"><?php echo $impact['title5'];?></h5>
            </div>
          </div>
        </div>
        <div class="ms-2">
          <div class="card mt-4">
            <div class="card-body">
            <img src="<?php echo $imageImpact6['url'];?>" alt="">
              <h5 class="card-title"><?php echo $impact['title6'];?></h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Impact -->

    <!-- About -->
    <section class="about-1">
      <div class="container">
        <h1 class="text-center pt-5 ms-5"><?php echo $about['judul_about'];  ?></h1>
    </div>
        <div id="carouselExampleIndicators" class="carousel slide " style="padding-bottom: 70px;" data-bs-ride="true">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner" style="max-width: 1324px; margin: auto;">
            <div class="carousel-item active">
              <!-- <div class="container-fluid mb-4">
                <div class="container"> -->
                  <div class="row">
                    <div class="col">
                      <?php echo $about['embed_1']; ?>
                    </div>
                    <div class="col">
                        <img class="kutip" src="<?php echo get_theme_file_uri('assets/images/kutip.png'); ?>" alt="kutip" />
                        <p><?php echo $about['desc_text_1']; ?></p>
                        <h6><?php echo $about['nama_1']; ?></h6>
                        <p><?php echo $about['location_1']; ?></p>
                    </div>
                  </div>
                <!--  </div> -->
              </div> 
              <div class="carousel-item">
              <div class="row">
                    <div class="col">
                      <?php echo $about['embed_2']; ?>
                    </div>
                    <div class="col">
                        <img class="kutip" src="<?php echo get_theme_file_uri('assets/images/kutip.png'); ?>" alt="kutip" />
                        <p><?php echo $about['desc_text_2']; ?></p>
                        <h6><?php echo $about['nama_2']; ?></h6>
                        <p><?php echo $about['location_2']; ?></p>
                    </div>
                  </div>
              </div>
              <div class="carousel-item">
              <div class="row">
                    <div class="col">
                      <?php echo $about['embed_3']; ?>
                    </div>
                    <div class="col">
                        <img class="kutip" src="<?php echo get_theme_file_uri('assets/images/kutip.png'); ?>" alt="kutip" />
                        <p><?php echo $about['desc_text_3']; ?></p>
                        <h6><?php echo $about['nama_3']; ?></h6>
                        <p><?php echo $about['location_3']; ?></p>
                    </div>
                  </div>
              </div>
            <!-- </div> -->
          </div>
          <div class="carousel-nav">
          <button class="carousel-control-prev"  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <img src="<?php echo get_theme_file_uri('assets/images/prev.png'); ?>" alt="" />
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next"  type="button " data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <img src="<?php echo get_theme_file_uri('assets/images/next.png'); ?>" alt="" />
          <span class="visually-hidden">Next</span>
        </button>
        </div>
        </div>
    </section>
    <!-- Akhir About -->

    <!-- Contact -->
    <section class="contact-1">
      <div class="container-fluid">
        <div class="container">
          <h1 class="mt-4">
            <?php echo $contact['big_text'];?>
          </h1>
          <div class="btn-contact-1">
            <a href="<?php echo $contact['button_1'];?>" class="btn btn-contact-1-color "><?php echo $contact['text_button_1'];?></a>
            <a href="<?php echo $contact['button_2'];?>" class="btn btn-contact-1-color-b "><?php echo $contact['text_button_2'];?></a>
          </div>
        </div>
      </div>
      <div class="bg-cta-desktop">
        <object data="<?php echo get_theme_file_uri('assets/images/BG_CTA.svg'); ?>" width="100%"></object>
      </div>
      <div class="bg-cta-mobile">
        <object data="<?php echo get_theme_file_uri('assets/images/CTA.svg'); ?>" width="104%"></object>
      </div>
      
      <div class="illustrasi">
        <img class="illustrasi-size" src="<?php echo get_theme_file_uri('assets/images/illustrasi.png'); ?>" alt="illustrasi" />
      </div>
    </section>
    <!-- Akhir Cotact -->
  <?php
get_footer()
?>

<script>
  $('.owl-carousel').owlCarousel({
    pagination: false,
    responsiveClass:true,
    loop: false,
    center: true,
    autoplay: true,
    responsive: {
      0: {
        items: 1.4,
      },
      700: {
        items: 2.4,
      },
      1000: {
        items: 3.4,
      },
      1200: {
        items: 4.3,
      },
    },
  });

 
</script>