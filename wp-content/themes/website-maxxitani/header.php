<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  

  <title>Home</title>
  <?php wp_head();
  ?>
</head>

<body>
  <section class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-white mb-3">
      <div class="container pt-3">
        <img src="/asset/img/Maxxi Tani.png" style="max-width: 50px" />
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-3">
              <a class="navbar-aktif" href="index.html">Home</a>
            </li>
            <li class="nav-item mx-3 dropdown">
              <a class="nav-link dropdown-toggle " href="#" style="font-weight: 600" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Jadi partner kami
                <img src="/asset/img/dropdown.png" alt="">
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="mitra.html">Sebagai Mitra</a></li>
                <li><a class="dropdown-item" href="petani.html">Sebagai Petani</a></li>
              </ul>
            </li>
            <li class="nav-item mx-3 dropdown">
              <a class="nav-link dropdown-toggle" href="#" style="font-weight: 600" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Perusahaan
                <img src="asset/img/dropdown.png" alt="">

              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="perusahaan-tentangkami.html">Tentang Kami</a></li>
                <li><a class="dropdown-item" href="produk-kami.html">Alsintan</a></li>
                <li><a class="dropdown-item" href="karir.html">Karir</a></li>
              </ul>
            </li>
            <li class="nav-item mx-3">
              <a class="nav-link" href="blog.html" style="font-weight: 600">Blog</a>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" href="#" style="
                    padding-left: 20px;
                    width: 110%;
                    font-weight: 600;
                    color: #6cc049;
                    border-radius: 10px;
                    background-color: #eff8ed;
                  ">Hubungi Kami</a>
            </li>
            <div class="switch mx-3">
              <input id="language-toggle" class="check-toggle check-toggle-round-flat" type="checkbox"
                style="padding-bottom: 10px" />
              <label for="language-toggle"></label>
              <span class="on">ID</span>
              <span class="off">EN</span>
            </div>
          </ul>
        </div>
      </div>
    </nav>
  </section>