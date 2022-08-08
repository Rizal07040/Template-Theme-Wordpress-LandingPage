<section class="footer-mobile">
    <div class="container">
      <div class="footer-alamat" style="padding-top: 40px; margin-left: 24px;">
        <img src="<?php echo get_theme_file_uri('assets/images/logo2.png'); ?>" alt="logo-footer" />
        <h5 class="text-white pt-5 pb-2">Head Office</h5>
        <p class="text-white ">Vieloft SOHO Unit 808-810, Ciputra <span> World Surabaya, Jawa Timur</p>
      </div>
      <hr class="text-white">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h1 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed fs-5 fw-bolder" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
              Jadi Partner Kami
            </button>
          </h1>
          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a class="dropdown-item" href="mitra.html">Sebagai Mitra</a>
              <a class="dropdown-item" href="petani.html">Sebagai Petani</a>
            </div>
          </div>
        </div>

        <div class="accordion-item">
          <h1 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed fs-5 fw-bolder" type="button" data-bs-toggle="collapse"
              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Perusahaan
            </button>
          </h1>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a class="dropdown-item" href="perusahaan-tentangkami.html">Tentang Kami</a>
              <a class="dropdown-item" href="karir.html">Karir</a>
            </div>
          </div>
        </div>
        <div class="accordion-item" style="padding-left: 20px; padding-top: 10px; margin-bottom: 32px;">
          <a class="fs-5 fw-bolder text-decoration-none text-white" href="blog.html">
            Blog
          </a>
        </div>
      </div>
      <hr class="text-white">
      <div class="col-lg d-flex flex-column" style="margin-left: 24px; margin-bottom: 32px; margin-top: 32px;">
        <h4 class="text-white fw-bolder">Connect with us</h4>
        <div class="social-media d-inline">
          <a href="">
            <img src="<?php echo get_theme_file_uri('asset/img/fb.png') ?>" alt="facebook" />
          </a>
          <a href="">
            <img src="<?php echo get_theme_file_uri('asset/img/youtube.png') ?>" alt="youtube" />
          </a>
          <a href="">
            <img src="<?php echo get_theme_file_uri('asset/img/ig.png') ?>" alt="instagram" />
          </a>
          <a href="">
            <img src="<?php echo get_theme_file_uri('asset/img/linkln.png') ?>" alt="linkIn" />
          </a>

        </div>
      </div>
    </div>
    <hr style="margin-left: 25px; width: 340px;" class="text-white">

    <span class="text-white footer-mobile text-center" style="margin: 32px 54px">&copy; 2022 Maxxi Tani | All Right
      Reserverd</span>

    </div>
  </section>


  <section class="footer">
    <div class="container">
      <div class="d-flex justify-content-between">
        <div class="logo-text">
          <img src="<?php echo get_theme_file_uri('assets/images/logo2.png') ?>" alt="" style="width: 130px; height: 98px; margin-top: 46px;">
          <h5 class="text-white" style="padding-bottom: 10px;">Head Office</h5>
          <p class="text-white" style="margin-bottom: 40px;">Vieloft SOHO Unit 808-810, <br>
            Ciputra World Surabaya, <br>
            Jawa Timur
          </p>
        </div>
        <div class="footer-teks d-flex flex-column">
          <h5 class="py-1">Gabung Jadi Mitra</h5>
          <a href="" class="py-1">Mitra Maxxi</a>
          <a href="">Petani Maxxi</a>
        </div>
        <div class="footer-teks d-flex flex-column">
          <h5 class="py-1">Perusahaan</h5>
          <a href="" class="">Tentang Kami</a>
          <a href="">Fasilitas Alsintan</a>
          <a href="">Karir</a>
        </div>
        <div class="footer-teks d-flex flex-column">
          <h5 class="">Blog</h5>
          <a href="" class="">Cerita</a>
          <a href="">Blog</a>
          <a href="">Tips & Trick</a>
        </div>
        <div class="footer-tek">
          <h5 class="">Gabung Jadi Mitra</h5>
          <br>
          <div class="image d-flex justify-content-start" style="width: 32px;height: 32px;">
            <a href="">
            <img src="<?php echo get_theme_file_uri('asset/img/fb.png') ?>" alt="facebook" />
            </a>
            <a href="" class="px-2">
            <img src="<?php echo get_theme_file_uri('asset/img/youtube.png') ?>" alt="youtube" />
            </a>
            <a href="" style="padding-right: 10px;">
            <img src="<?php echo get_theme_file_uri('asset/img/ig.png') ?>" alt="instagram" />
            </a>
            <a href="">
            <img src="<?php echo get_theme_file_uri('asset/img/linkln.png') ?>" alt="linkIn" />
            </a>
          </div>
        </div>
      </div>
      <hr style="color: white;">
      <span class="text-white">&copy; 2022 Maxxi Tani | All Right Reserverd</span>

    </div>

  </section>
  <?php 
  wp_footer();
  ?>
  </body>
</html>