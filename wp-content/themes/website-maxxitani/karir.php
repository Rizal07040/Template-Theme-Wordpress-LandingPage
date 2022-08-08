<?php
/*Template Name: karir */
get_header();
?>

<?php
$hero = get_field('hero');
$perk = get_field('what_about_us');
$about = get_field('about_us');
$gallery = get_field('gallery');
$available = get_field('available_positions');
?>
<!-- Jumbotron -->
<section class="jumbotron-karir  jumbotron-fluid" <?php
$backImage = $hero['backgroun_image'];
?> style="background-image:url( <?php echo $backImage['url']; ?>);">
  <div class="container">
    <h1 class="display-4 mb-5">
      <?php echo $hero['big_text']; ?>
    </h1>
    
      <a href="#available-pos" class="btn tombol btn-jum-karir"><?php echo $hero['button_text']; ?></a>
    
  </div>
</section>
<!-- Akhir Jumbotron -->
<!-- Manfaat -->
<section class="perk mb-5">
  <div class="container-fluid pt-4">
    <h1 class="text-center">
      <?php echo $perk['judul']; ?>
    </h1>
  </div>
  <?php
  $image1 = $perk['image1'];
  $image2 = $perk['image2'];
  $image3 = $perk['image3'];
  $image4 = $perk['image4'];
  ?>
  <div class="owl-carousel owl-theme" style="margin-right: 30px;">
    <div class="carousel">
      <div class="card shadow-lg mb-5 mt-4">
        <div class="card-body">
          <div class="gambar1" style="background-image:url( <?php echo $image1['url']; ?>);">
            <h5 class="card-title"><?php echo $perk['title1']; ?></h5>
            <p><?php echo $perk['describtion1']; ?></p>

          </div>
        </div>
      </div>
    </div>
    <div class="carousel">
      <div class="card shadow-lg mb-5 mt-4">
        <div class="card-body">
          <div class="gambar2" style="background-image:url( <?php echo $image2['url']; ?>);">
            <h5 class="card-title"><?php echo $perk['title2']; ?></h5>
            <p><?php echo $perk['describtion2']; ?></p>

          </div>
        </div>
      </div>
    </div>
    <div class="ms-2">
      <div class="card shadow-lg mb-5 mt-4">
        <div class="card-body">
          <div class="gambar3" style="background-image:url( <?php echo $image3['url']; ?>);">
            <h5 class="card-title"><?php echo $perk['title3']; ?></h5>
            <p><?php echo $perk['describtion3']; ?></p>

          </div>
        </div>
      </div>
    </div>
    <div class="ms-2">
      <div class="card shadow-lg  mb-5 mt-4">
        <div class="card-body">
          <div class="gambar4" style="background-image:url( <?php echo $image4['url']; ?>);">
            <h5 class="card-title"><?php echo $perk['title4']; ?></h5>
            <p><?php echo $perk['describtion4']; ?></p>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>
<!-- Akhir Manfaat -->

<!-- About -->
<section class="about-karir bg-light">
  <div class="container">
    <h1 class="text-center pt-5 ms-5"><?php echo $about['judul'];  ?></h1>
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
            <p><?php echo $about['description_1']; ?></p>
            <h6><?php echo $about['nama_1']; ?></h6>
            <p><?php echo $about['position_1']; ?></p>
          </div>
        </div>
      </div>
      <!-- </div> -->
      <div class="carousel-item">
        <div class="row">
          <div class="col">
            <?php echo $about['embed_1']; ?>
          </div>
          <div class="col">
            <img class="kutip" src="<?php echo get_theme_file_uri('assets/images/kutip.png'); ?>" alt="kutip" />
            <p><?php echo $about['description_1']; ?></p>
            <h6><?php echo $about['nama_1']; ?></h6>
            <p><?php echo $about['position_1']; ?></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col">
            <?php echo $about['embed_1']; ?>
          </div>
          <div class="col">
            <img class="kutip" src="<?php echo get_theme_file_uri('assets/images/kutip.png'); ?>" alt="kutip" />
            <p><?php echo $about['description_1']; ?></p>
            <h6><?php echo $about['nama_1']; ?></h6>
            <p><?php echo $about['position_1']; ?></p>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
    <div class="carousel-nav">
      <button class="carousel-control-prev" style="padding-right: 100px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <img src="<?php echo get_theme_file_uri('assets/images/prev.png'); ?>" alt="" />
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" style="padding-left: 100px;" type="button " data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <img src="<?php echo get_theme_file_uri('assets/images/next.png'); ?>" alt="" />
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
<!-- Akhir About -->

<!-- Moment -->
<section class="moment " style="max-width: 1324px; margin: auto;">
  <div class="container-fluid py-5">
    <h1 class="text-center py-4"><?php echo $gallery['judul'];  ?></h1>
    <div class="scroll-gallery">
      <div class=" row py-4">
        <?php
        $galleryImage1 = $gallery['image1'];
        $galleryImage2 = $gallery['image2'];
        $galleryImage3 = $gallery['image3'];
        $galleryImage4 = $gallery['image4'];
        $galleryImage5 = $gallery['image5'];
        $galleryImage6 = $gallery['image6'];
        $galleryImage7 = $gallery['image7'];
        $galleryImage8 = $gallery['image8'];
        ?>
        <div class="col-4 ">
          <div class="cell">
            <a href="<?php echo $galleryImage1['url']; ?>">
            <img src="<?php echo $galleryImage1['url']; ?>" class="moment-1" alt="">
            </a>
          </div>
        </div>
        <div class="col-3">
          <div class="cell">
            <a href="<?php echo $galleryImage2['url']; ?>">
            <img src="<?php echo $galleryImage2['url']; ?>" class="moment-2" alt="">
            </a>
          </div>
        </div>
        <div class="col-4">
          <div class="cell">
            <a href="<?php echo $galleryImage3['url']; ?>">
            <img src="<?php echo $galleryImage3['url']; ?>" class="moment-3" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="row justify-content-center no-gutters">
        <div class="col-8">
          <div class="row pb-4 pt-3 justify-content-center no-gutters">
            <div class="col-3">
              <div class="cell">
                <a href="<?php echo $galleryImage4['url']; ?>">
                <img src="<?php echo $galleryImage4['url']; ?>" class="moment-4" alt="">
                </a>
              </div>
            </div>
            <div class="col-8">
              <div class="cell">
                <a href="<?php echo $galleryImage5['url']; ?>">
                <img src="<?php echo $galleryImage5['url']; ?>" class="moment-5" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="row pt-2 justify-content-center no-gutters">
            <div class="col-7">
              <div class="cell">
                <a href="<?php echo $galleryImage6['url']; ?>">
                <img src="<?php echo $galleryImage6['url']; ?>" class="moment-6" alt="">
                </a>
              </div>
            </div>
            <div class="col-4">
              <div class="cell">
                <a href="<?php echo $galleryImage7['url']; ?>">
                <img src="<?php echo $galleryImage7['url']; ?>" class="moment-7" alt="">
                </a>
              </div>
            </div>
          </div>

        </div>
        <div class="col-3 pt-3 me-4">
          <div class="cell">
            <a href="<?php echo $galleryImage8['url']; ?>">
            <img src="<?php echo $galleryImage8['url']; ?>" class="cell__big" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- Akhir Moment -->

<!-- Available Positions -->
<section id="available-pos" class="available-pos">
  <div class="container-fluid py-5">
    <div class="container">
      <h1 class="text-center"><?php echo $available['judul']; ?></h1>
      <p class="text-center"><?php echo $available['describtion_judul']; ?></p>
      <!-- <div class="d-flex justify-content-center mt-3">
      <a class="btn rounded-5 " href="">UI/UX Designer</a><a href="" class="btn rounded-5 mx-3">Backend</a><a href="" class="btn rounded-5">Fronend</a><a href="" class="btn rounded-5 mx-3">Graphic Design</a><a href="" class="btn rounded-5">HR</a>
    </div>
    <div class="d-flex justify-content-center mt-3 mb-5">
     <a href="" class="btn rounded-5 mx-3">Internship</a><a href="" class="btn rounded-5">Finance</a>
    </div> -->
      <?php
      $Icon1 = $available['icon_1'];
      $Icon2 = $available['icon_2'];
      $Icon3 = $available['icon_3'];
      $Icon4 = $available['icon_4'];
      $Icon5 = $available['icon_5'];
      $Icon6 = $available['icon_6'];
      $Icon7 = $available['icon_7'];
      $Icon8 = $available['icon_8'];

      ?>
      <div class="row d-lg-flex justify-content-lg-between d-md-flex d-block mb-4 py-3 bg-pos">
        <div class="col-lg-6 col-md-8 d-flex ps-4">
          <img src="<?php echo $Icon1['url']; ?>" class="icon-pos" alt="">
          <h3 class="ms-4 py-3 name-pos"><?php echo $available['position_1']; ?></h3>
        </div>
        <div class="col-lg-3 col-md-3 py-3 d-flex justify-content-around">
          <a type="button" data-bs-toggle="modal" data-bs-target="#ModalPertama" class="detail fw-bold">Details</a>
          <a type="button" class="btn apply">Apply</a>
        </div>
      </div>

      <div class="row d-lg-flex justify-content-lg-between d-md-flex d-block mb-4 py-3 bg-pos">
        <div class="col-lg-6 col-md-8 d-flex ps-4">
          <img src="<?php echo $Icon2['url']; ?>" class="icon-pos" alt="">
          <h3 class="ms-4 py-3 name-pos"><?php echo $available['position_2']; ?></h3>
        </div>
        <div class="col-lg-3 col-md-3 py-3 d-flex justify-content-around">
          <a type="button" data-bs-toggle="modal" data-bs-target="#ModalKedua" class="detail fw-bold">Details</a>
          <a href="" class="btn apply">Apply</a>
        </div>
      </div>

      <div class="row d-lg-flex justify-content-lg-between d-md-flex d-block  mb-4 py-3 bg-pos">
        <div class="col-lg-6 col-md-8 d-flex ps-4">
          <img src="<?php echo $Icon3['url']; ?>" class="icon-pos" alt="">
          <h3 class="ms-4 py-3 name-pos"><?php echo $available['position_3']; ?></h3>
        </div>
        <div class="col-lg-3 col-md-3 py-3 d-flex justify-content-around">
          <a type="button" data-bs-toggle="modal" data-bs-target="#ModalKetiga" class="detail fw-bold">Details</a>
          <a href="" class="btn apply">Apply</a>
        </div>
      </div>

      <div class="row d-lg-flex justify-content-lg-between d-md-flex d-block mb-4 py-3 bg-pos">
        <div class="col-lg-6 col-md-8 d-flex ps-4">
          <img src="<?php echo $Icon4['url']; ?>" class="icon-pos" alt="">
          <h3 class="ms-4 py-3 name-pos"><?php echo $available['position_4']; ?></h3>
        </div>
        <div class="col-lg-3 col-md-3 py-3 d-flex justify-content-around">
          <a type="button" data-bs-toggle="modal" data-bs-target="#ModalKeempat" class="detail fw-bold">Details</a>
          <a href="" class="btn apply">Apply</a>
        </div>
      </div>

      <div class="row d-lg-flex justify-content-lg-between d-md-flex d-block mb-4 py-3 bg-pos">
        <div class="col-lg-6 col-md-8 d-flex ps-4">
          <img src="<?php echo $Icon5['url']; ?>" class="icon-pos" alt="">
          <h3 class="ms-4 py-3 name-pos"><?php echo $available['position_5']; ?></h3>
        </div>
        <div class="col-lg-3 col-md-3 py-3 d-flex justify-content-around">
          <a type="button" data-bs-toggle="modal" data-bs-target="#ModalKelima" class="detail fw-bold">Details</a>
          <a href="" class="btn apply">Apply</a>
        </div>
      </div>

      <div class="row d-lg-flex justify-content-lg-between d-md-flex d-block mb-4 py-3 bg-pos">
        <div class="col-lg-6 col-md-8 d-flex ps-4">
          <img src="<?php echo $Icon6['url']; ?>" class="icon-pos" alt="">
          <h3 class="ms-4 py-3 name-pos"><?php echo $available['position_6']; ?></h3>
        </div>
        <div class="col-lg-3 col-md-3 py-3 d-flex justify-content-around">
          <a type="button" data-bs-toggle="modal" data-bs-target="#ModalKeenam" class="detail fw-bold">Details</a>
          <a href="" class="btn apply">Apply</a>
        </div>
      </div>

      <div class="row d-lg-flex justify-content-lg-between d-md-flex d-block mb-4 py-3 bg-pos">
        <div class="col-lg-6 col-md-8 d-flex ps-4">
          <img src="<?php echo $Icon7['url']; ?>" class="icon-pos" alt="">
          <h3 class="ms-4 py-3 name-pos"><?php echo $available['position_7']; ?></h3>
        </div>
        <div class="col-lg-3 col-md-3 py-3 d-flex justify-content-around">
          <a type="button" data-bs-toggle="modal" data-bs-target="#ModalKetuju" class="detail fw-bold">Details</a>
          <a href="" class="btn apply" >Apply</a>
        </div>
      </div>

      <div class="row d-lg-flex justify-content-lg-between d-md-flex d-block mb-4 py-3 bg-pos">
        <div class="col-lg-6 col-md-8 d-flex ps-4">
          <img src="<?php echo $Icon8['url']; ?>" class="icon-pos" alt="">
          <h3 class="ms-4 py-3 name-pos"><?php echo $available['position_8']; ?></h3>
        </div>
        <div class="col-lg-3 col-md-3 py-3 d-flex justify-content-around">
          <a type="button" data-bs-toggle="modal" data-bs-target="#ModalKedelapan" class="detail fw-bold">Details</a>
          <a href="" class="btn apply">Apply</a>
        </div>
      </div>

      <div class="d-flex justify-content-center">
        <a class="btn rounded-5 load fw-bold mt-4 mb-4">Load More</a>
      </div>


    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="ModalPertama" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="d-flex justify-content-end">
          <button type="button" class="btn-close mx-4 py-4" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class=" d-flex">
          <img src="<?php echo $Icon1['url']; ?>" class="icon-apply mx-4" alt="">
          <div class="d-block">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $available['position_1']; ?></h5>
            <p class="modal-p"><?php echo $available['jam_kerja_popup_1']; ?></p>
          </div>
        </div>
        <div class="modal-body mx-3" style="border-bottom: 1px solid #6CC049;">
          <h6 class="py-2">Job Description:</h6>
          <p class="modal-p"><?php echo $available['job_description_1'] ?></p>
          <h6 class="py-2">Requirements:</h6>
          <p class="modal-p"><?php echo $available['requirements_1'] ?>
          </p>
        </div>
        <div class=" d-flex justify-content-center py-4 mb-3">
          <a type="button" class="btn b-modal rounded-5">Apply Now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="ModalKedua" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="d-flex justify-content-end">
          <button type="button" class="btn-close mx-4 py-4" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class=" d-flex">
          <img src="<?php echo $Icon2['url']; ?>" class="icon-apply mx-4" alt="">
          <div class="d-block">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $available['position_2']; ?></h5>
            <p class="modal-p"><?php echo $available['jam_kerja_popup_2']; ?></p>
          </div>
        </div>
        <div class="modal-body mx-3" style="border-bottom: 1px solid #6CC049;">
          <h6 class="pb-2 pt-5">Job Description:</h6>
          <p class="modal-p"><?php echo $available['job_description_2'] ?></p>
          <h6 class="py-2">Requirements:</h6>
          <p class="modal-p"><?php echo $available['requirements_2'] ?>
          </p>
        </div>
        <div class=" d-flex justify-content-center py-4 mb-3">
          <a type="button" class="btn b-modal rounded-5">Apply Now</a>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="ModalKetiga" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="d-flex justify-content-end">
          <button type="button" class="btn-close mx-4 py-4" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class=" d-flex">
          <img src="<?php echo $Icon3['url']; ?>" class="icon-apply mx-4" alt="">
          <div class="d-block">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $available['position_3']; ?></h5>
            <p class="modal-p"><?php echo $available['jam_kerja_popup_3']; ?></p>
          </div>
        </div>
        <div class="modal-body mx-3" style="border-bottom: 1px solid #6CC049;">
          <h6 class="pb-2 pt-5">Job Description:</h6>
          <p class="modal-p"><?php echo $available['job_description_3'] ?></p>
          <h6 class="py-2">Requirements:</h6>
          <p class="modal-p"><?php echo $available['requirements_3'] ?>
          </p>
        </div>
        <div class=" d-flex justify-content-center py-4 mb-3">
          <a type="button" class="btn b-modal rounded-5">Apply Now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="ModalKeempat" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="d-flex justify-content-end">
          <button type="button" class="btn-close mx-4 py-4" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class=" d-flex">
          <img src="<?php echo $Icon4['url']; ?>" class="icon-apply mx-4" alt="">
          <div class="d-block">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $available['position_4']; ?></h5>
            <p class="modal-p"><?php echo $available['jam_kerja_popup_4']; ?></p>
          </div>
        </div>
        <div class="modal-body mx-3" style="border-bottom: 1px solid #6CC049;">
          <h6 class="pb-2 pt-5">Job Description:</h6>
          <p class="modal-p"><?php echo $available['job_description_4'] ?></p>
          <h6 class="py-2">Requirements:</h6>
          <p class="modal-p"><?php echo $available['requirements_4'] ?>
          </p>
        </div>
        <div class=" d-flex justify-content-center py-4 mb-3">
          <a type="button" class="btn b-modal rounded-5">Apply Now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="ModalKelima" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="d-flex justify-content-end">
          <button type="button" class="btn-close mx-4 py-4" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class=" d-flex">
          <img src="<?php echo $Icon5['url']; ?>" class="icon-apply mx-4" alt="">
          <div class="d-block">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $available['position_5']; ?></h5>
            <p class="modal-p"><?php echo $available['jam_kerja_popup_5']; ?></p>
          </div>
        </div>
        <div class="modal-body mx-3" style="border-bottom: 1px solid #6CC049;">
          <h6 class="pb-2 pt-5">Job Description:</h6>
          <p class="modal-p"><?php echo $available['job_description_5'] ?></p>
          <h6 class="py-2">Requirements:</h6>
          <p class="modal-p"><?php echo $available['requirements_5'] ?>
          </p>
        </div>
        <div class=" d-flex justify-content-center py-4 mb-3">
          <a type="button" class="btn b-modal rounded-5">Apply Now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="ModalKeenam" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="d-flex justify-content-end">
          <button type="button" class="btn-close mx-4 py-4" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class=" d-flex">
          <img src="<?php echo $Icon6['url']; ?>" class="icon-apply mx-4" alt="">
          <div class="d-block">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $available['position_6']; ?></h5>
            <p class="modal-p"><?php echo $available['jam_kerja_popup_6']; ?></p>
          </div>
        </div>
        <div class="modal-body mx-3" style="border-bottom: 1px solid #6CC049;">
          <h6 class="pb-2 pt-5">Job Description:</h6>
          <p class="modal-p"><?php echo $available['job_description_6'] ?></p>
          <h6 class="py-2">Requirements:</h6>
          <p class="modal-p"><?php echo $available['requirements_6'] ?>
          </p>
        </div>
        <div class=" d-flex justify-content-center py-4 mb-3">
          <a type="button" class="btn b-modal rounded-5">Apply Now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="ModalKetuju" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="d-flex justify-content-end">
          <button type="button" class="btn-close mx-4 py-4" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class=" d-flex">
          <img src="<?php echo $Icon7['url']; ?>" class="icon-apply mx-4" alt="">
          <div class="d-block">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $available['position_7']; ?></h5>
            <p class="modal-p"><?php echo $available['jam_kerja_popup_7']; ?></p>
          </div>
        </div>
        <div class="modal-body mx-3" style="border-bottom: 1px solid #6CC049;">
          <h6 class="pb-2 pt-5">Job Description:</h6>
          <p class="modal-p"><?php echo $available['job_description_7'] ?></p>
          <h6 class="py-2">Requirements:</h6>
          <p class="modal-p"><?php echo $available['requirements_7'] ?>
          </p>
        </div>
        <div class=" d-flex justify-content-center py-4 mb-3">
          <a type="button" class="btn b-modal rounded-5">Apply Now</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="ModalKedelapan" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="d-flex justify-content-end">
          <button type="button" class="btn-close mx-4 py-4" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class=" d-flex">
          <img src="<?php echo $Icon8['url']; ?>" class="icon-apply mx-4" alt="">
          <div class="d-block">
            <h5 class="modal-title" id="exampleModalLabel"><?php echo $available['position_8']; ?></h5>
            <p class="modal-p"><?php echo $available['jam_kerja_popup_8']; ?></p>
          </div>
        </div>
        <div class="modal-body mx-3" style="border-bottom: 1px solid #6CC049;">
          <h6 class="pb-2 pt-5">Job Description:</h6>
          <p class="modal-p"><?php echo $available['job_description_8'] ?></p>
          <h6 class="py-2">Requirements:</h6>
          <p class="modal-p"><?php echo $available['requirements_8'] ?>
          </p>
        </div>
        <div class=" d-flex justify-content-center py-4 mb-3">
          <a type="button" class="btn b-modal rounded-5">Apply Now</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Akhir Modal -->

</section>

<!-- Akhir Available Positions -->

<?php
get_footer();

?>
<script>
  $('.owl-carousel').owlCarousel({
    pagination: false,
    autoplay: true,
    center: true,
    responsive: {
      0: {
        items: 1.2,
      },
      700: {
        items: 2.2,
      },
      1000: {
        items: 3,
      },
      1200: {
        items: 4,
      },
    },
  });
</script>
<script>
  $('.scroll-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
    }
  });
</script>