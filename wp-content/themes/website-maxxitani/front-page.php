<?php
get_header()
?>


<?php $hero= get_field('hero');?>

<?php $opp  = get_field('opportunity');?>
<section class="jumbotron">
    <div class="container" style="height: 100%">
      <div class="content">
        <h1 class="heading-jumbotron">
        <?php echo $hero['big_text'];?>
        </h1>
        <p class="caption-jumbotron">
        <?php echo $hero['small_text']; ?>
        </p>
        <?php if ($hero['button_hero']) : ?>
      <a class="button-jumbotron" 
            href="<?php echo $hero['button_hero'];?> ">
            <?php echo $hero['text_button'];?>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="card-status-mobile">
    <div class="group-card">
      <div class="card-1">
        <div class="d-flex justify-content-start mx-4">
          <div class="card-info">
            <div class="group-text">
              <h4 class="info-title">46</h4>
              <p class="text-center">Mitra Tergabung</p>
            </div>
            <img class="card-vector" src="/asset/img/vector-card.png" alt=""
              width="60%" />
          </div>
        </div>
        <div class="d-flex justify-content-end mx-4">
          <div class="card-info">
            <div class="group-text">
              <h4 class="info-title">3.581</h4>
              <p class="text-center">Petani Tergabung</p>
            </div>
            <img class="card-vector" src="/asset/img/vector-card.png" alt=""
              width="60%" />
          </div>
        </div>
        <div class="card-2" style="margin-top: 10.5rem;">
          <div class="d-flex justify-content-start mx-4">
            <div class="card-info">
              <div class="group-text">
                <h4 class="info-title">2.049</h4>
                <p class="text-center">
                  Hektar Lahan <br />
                  Terkelola
                </p>
              </div>
              <img class="card-vector" src="/asset/img/vector-card.png" alt=""
                width="60%" />
            </div>
          </div>
          <div class="d-flex justify-content-end mx-4">
            <div class="card-info">
              <div class="group-text">
                <h4 class="info-title">26</h4>
                <p class="text-center">Layanan Mitra</p>
              </div>
              <img class="card-vector" src="/asset/img/vector-card.png" alt=""
                width="60%" />
            </div>
          </div>
        </div>
      </div>


  </section>

  <section class="card-status">

    <div class="container">
      <div class="card-status">

        <div class="row group-card">
          <div class="col col-lg-3 col-6">
            <div class="card-info">
              <div class="group-text">
                <h4 class="info-title">46</h4>
                <p class="text-center">Mitra Tergabung</p>
              </div>
              <img class="card-vector" src="/asset/img/vector-card.png" alt=""
                width="60%" />
            </div>
          </div>
          <div class="col col-lg-3 col-6">
            <div class="card-info">
              <div class="group-text">
                <h4 class="info-title">3.581</h4>
                <p class="text-center">Petani Tergabung</p>
              </div>
              <img class="card-vector" src="/asset/img/vector-card.png" alt=""
                width="60%" />
            </div>
          </div>
          <div class="col col-lg-3 col-6">
            <div class="card-info">
              <div class="group-text">
                <h4 class="info-title">2.049</h4>
                <p class="text-center">
                  Hektar Lahan <br />
                  Terkelola
                </p>
              </div>
              <img class="card-vector" src="/asset/img/vector-card.png" alt=""
                width="60%" />
            </div>
          </div>
          <div class="col col-lg-3 col-6">
            <div class="card-info">
              <div class="group-text">
                <h4 class="info-title">26</h4>
                <p class="text-center">Layanan Mitra</p>
              </div>
              <img class="card-vector" src="/asset/img/vector-card.png" alt=""
                width="60%" />
            </div>
          </div>
        </div>
      </div>
  </section>


  <section class="peluang">
    <div class="container">
      <h3 class="peluang text-center">Peluang Bersama Maxxi Tani</h3>
      <div class="container">
        <div class="container d-flex justify-content-center">
          <div class="wrapper">
            <div class="tabs d-flex justify-content-between">
              <div class="tab d-flex">
                <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch" />
                <label for="tab-1" class="tab-label">Sebagai Mitra</label>
                <div class="tab-content">
                  <div class="content-peluang">
                    <div class="group-content">
                      <div class="row align-items-center">
                      <?php 
                            $imageMitra1 = $opp['icon_mitra1'];
                            $imageMitra2 = $opp['icon_mitra2'];
                            $imageMitra3 = $opp['icon_mitra3'];
                            $imageMitra4 = $opp['icon_mitra4'];
                        ?>
                        <div class="col-lg-6 ">
                          <div class="isi-peluang d-flex">
                            <img class="img-peluang"
                              src='<?php echo esc_url($imageMitra1['url']) ?>' alt="grafik" />
                            <div class="head-text-peluang align-content-center">
                              <h5 class="head-peluang"><?php echo $opp['text_icon_mitra1'];?></h5>
                              <p>
                              <?php echo $opp['describtion_icon_mitra1'];?>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="isi-peluang d-flex">
                            <img class="img-peluang"
                              src="<?php echo esc_url($imageMitra2['url']) ?>" alt="grafik" />
                            <div class="head-text-peluang align-content-center">
                              <h5 class="head-peluang"><?php echo $opp['text_icon_mitra2'];?></h5>
                              <p>
                              <?php echo $opp['describtion_icon_mitra2'];?>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="row align-items-center" style="margin-top: 30px;">
                          <div class="col-lg-6 ">
                            <div class="isi-peluang d-flex">
                              <img class="img-peluang"
                                src='<?php echo esc_url($imageMitra3['url']) ?>' alt="grafik" />
                              <div class="head-text-peluang align-content-center">
                                <h5 class="head-peluang"><?php echo $opp['text_icon_mitra3'];?></h5>
                                <p>
                                <?php echo $opp['describtion_icon_mitra3'];?>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="isi-peluang d-flex">
                              <img class="img-peluang"
                                src="<?php echo esc_url($imageMitra4['url']) ?>" alt="grafik" />
                              <div class="head-text-peluang align-content-center">
                                <h5 class="head-peluang"><?php echo $opp['text_icon_mitra4'];?></h5>
                                <p>
                                <?php echo $opp['describtion_icon_mitra4'];?>
                                </p>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab d-flex">
                  <input type="radio" name="css-tabs" id="tab-2" checked class="tab-switch" />
                  <label for="tab-2" class="tab-label">Sebagai Petani</label>
                  <div class="tab-content">
                    <div class="content-peluang">
                      <div class="group-content">
                        <div class="row align-items-center">
                        <?php 
                            $imagePetani1 = $opp['icon_petani1'];
                            $imagePetani2 = $opp['icon_petani2'];
                            $imagePetani3 = $opp['icon_petani3'];
                            $imagePetani4 = $opp['icon_petani4'];
                        ?>
                          <div class="col-lg-6 ">
                            <div class="isi-peluang d-flex">
                              <img class="img-peluang"
                                src='<?php echo esc_url($imagePetani1['url']) ?>' alt="grafik" />
                              <div class="head-text-peluang align-content-center">
                                <h5 class="head-peluang"><?php echo $opp['text_icon_petani1'];?></h5>
                                <p>
                                <?php echo $opp['describtion_icon_petani1'];?>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="isi-peluang d-flex">
                              <img class="img-peluang"
                                src="<?php echo esc_url($imagePetani2['url']) ?>" alt="grafik" />
                              <div class="head-text-peluang align-content-center">
                                <h5 class="head-peluang"><?php echo $opp['text_icon_petani2'];?></h5>
                                <p>
                                <?php echo $opp['describtion_icon_petani2'];?>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="row align-items-center" style="margin-top: 30px;">
                            <div class="col-lg-6 ">
                              <div class="isi-peluang d-flex">
                                <img class="img-peluang"
                                  src='<?php echo esc_url($imagePetani3['url']) ?>' alt="grafik" />
                                <div class="head-text-peluang align-content-center">
                                  <h5 class="head-peluang"><?php echo $opp['text_icon_petani3'];?></h5>
                                  <p>
                                  <?php echo $opp['describtion_icon_petani3'];?>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="isi-peluang d-flex">
                                <img class="img-peluang"
                                  src="<?php echo esc_url($imagePetani4['url']) ?>"
                                  alt="grafik" />
                                <div class="head-text-peluang align-content-center">
                                  <h5 class="head-peluang"><?php echo $opp['text_icon_petani4'];?></h5>
                                  <p>
                                  <?php echo $opp['describtion_icon_petani4'];?>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
  </section>

  <section class="area">
    <div class="layanan">
      <h1 style="margin-bottom: 40px">Area Layanan Kami</h1>
      <div class="map">
        <div class="mapouter">
          <div class="gmap_canvas">
            <iframe width="100%" height="539" id="gmap_canvas"
              src="https://maps.google.com/maps?q=Indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
              scrolling="no" marginheight="0" marginwidth="0"></iframe><a
              href="https://fmovies-online.net">fmovies</a><br />
            <style>
              .mapouter {
                position: relative;
                text-align: right;
                width: 100%;
              }
            </style><a href="https://www.embedgooglemap.net">embed google map in html</a>
            <style>
              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                height: 539px;
              }
            </style>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cara-kerja">
    <div class="container">
      <h1 class="text-center" style="margin-top: 100px">Cara Kerja Kami</h1>
      <div class="switch-kerja mx-auto">
        <p>Persemaian</p>
        <p>Olah Tanah</p>
        <p>Penanaman</p>
        <p>Penyemprotan</p>
        <p>Panen</p>
      </div>

      <div class="content-cara-kerja d-flex">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6">
            <img class="img-kerja" src="/asset/img/kerja-kami.jpg" alt="" />
          </div>
          <div class="col-lg-6" style="font-size: 24px; font-weight: 400">
            <p class="mx-auto">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit
              amet odio sem. Suspendisse vitae lacus laoreet, putate erat sed,
              laoreet dui.
            </p>
            <p class="mx-auto">
              Nulla sit amet venenatis est, ac rutrum ligula. Etiam at finibus
              enisit amet odio sem. Suspendisse vitae lacus laoreet, putate erat
              sed.
            </p>
            <div class="button-kerja d-flex justify-content-center">
              <!-- <img src="asset/img/play-icon.png" alt="" style="width: 20px; height: 20px; color: #6cc049" /> -->
              <a href="#" style="
                  font-weight: 700;
                  font-size: 14px;
                  color: #6cc049;
                  text-decoration: none;
                ">Lihat Detil Kegiatan</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about">
    <div class="content-wrapper ">
      <h1 class="text-center text-white" style="padding-top: 50px">
        Yuk, dengar cerita <span>sukses dari Mitra</span>
      </h1>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators" style="margin-bottom: -2rem
          ;">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid mb-4">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col">
                    <iframe class="iframe-home" src="https://www.youtube.com/embed/ya8rN7NuNDk"
                      title="YouTube video player" frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen></iframe>
                  </div>
                  <div class="col">
                    <img src="asset/img/kutip.png" alt="" />
                    <p class="text-white">
                      Rata-rata petani saya sejak ikut program <span> kemitraan maxxi
                        tani itu jadi lebih tenang. <span>Maxxi membantu dari olah
                          lahan, penyemprotan <span>pestisida sampai panen. Jadi kami
                            tinggal<span> memantau saja.
                    </p>
                    <h6 class="text-white">M. Khoirul Ansori</h6>
                    <p class="text-white">Mitra Maxxi - Lamongan</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid mb-4">
              <div class="container-fluid mb-4">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col">
                      <iframe class="iframe-home" src="https://www.youtube.com/embed/ya8rN7NuNDk"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    </div>
                    <div class="col">
                      <img src="asset/img/kutip.png" alt="" />
                      <p class="text-white">
                        Rata-rata petani saya sejak ikut program <span> kemitraan maxxi
                          tani itu jadi lebih tenang. <span>Maxxi membantu dari olah
                            lahan, penyemprotan <span>pestisida sampai panen. Jadi kami
                              tinggal<span> memantau saja.
                      </p>
                      <h6 class="text-white">M. Khoirul Ansori</h6>
                      <p class="text-white">Mitra Maxxi - Lamongan</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="..." />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button " data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon color-green" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <section class="kegiatan" style="margin-top: 100px">
    <div class="container">
      <h1 class="text-center fw-bolder">Kegiatan Terkini Maxxi Tani</h1>
      <div class="row">
        <div class="col">
          <img class="kegiatan-home" src="asset/img/berita-1.png" alt="" />
          <h4 class="fw-bolder" style="padding-top: 24px; padding-bottom: 17px">
            Percepatan Tanam di Jawa Timur bersama Gubernur Khofifah Indar
            Parawansa
          </h4>
          <p>Kegiatan / 21 Juni 2022</p>
        </div>
        <div class="col" style="padding-top: 30px">
          <img src="asset/img/berita-2.png" alt="" style="width: 350px; height: 175px; border-radius: 8px" />
          <h1 class="kegiatan">
            Panen Raya Padi Bersama Brigif 2 Marinir Sidoarjo
          </h1>
          <p class="kegiatan">Kegiatan / 21 Juni 2022</p>
          <img src="asset/img/berita-3.png" alt="" style="
                width: 350px;
                height: 175px;
                border-radius: 8px;
                margin-top: 49px;
              " />
          <h1 class="kegiatan">
            Panen Raya Padi Bersama Brigif 2 Marinir Sidoarjo
          </h1>
          <p class="kegiatan">Kegiatan / 21 Juni 2022</p>
        </div>
      </div>
      <div class="group-button-text d-flex justify-content-center">
        <div class="button-kegiatan mx-auto d-flex justify-content-center align-items-center">
          <a href="" style="text-decoration: none; color: #6cc049;">Lihat Semua Kegiatan</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="contact">
    <div class="container-fluid">
      <div class="container">
        <h1 class="contact-home">
          Untungnya banyak,
          <br />
          Panenya maksimal!
        </h1>
        <div class="button-contact d-flex">
          <a href="" class="btn button-contact-color-b tombol">Hubungi Kami</a>
        </div>
      </div>
    </div>
    <div class="bg-cta">
      <img src="<?php echo get_theme_file_uri('asset/img/ilustrasi-1.svg') ?>" style="width: 100%; " alt="bg-cta" />
    </div>
    <div class="illustrasi d-flex justify-content-end">
      <img src="<?php echo get_theme_file_uri('asset/img/ilustrasi.png') ?>" alt="illustrasi" style="width: 50% ;" />
    </div>


  </section>
  <!-- Akhir Contact -->



<?php
get_footer()
?>