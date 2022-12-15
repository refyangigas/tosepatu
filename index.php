<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOSEPATU-Layanan Cuci Sepatu</title>
    
    <!-- All CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-warning">TO</span>SEPATU</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">Tentang Kami</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#services">Layanan</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#testimoni">Testimoni</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">Founder</a>
              </li> 
              <li class="nav-item">
                <a class="btn btn-warning" href="login.php">Login</a>
              </li>  
            </ul>
          </div>
        </div>
      </nav>
         
         
         
         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/sepatu-1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Jasa Layanan Cuci Sepatu</h5>
                              <p>Kami hadir untuk perawatan sepatu anda</p>
                              <p><a href="login.php" class="btn btn-warning mt-3">Login</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/sepatu-2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Jasa Layanan Cuci Sepatu</h5>
                              <p>Daftar terlebih dahulu untuk pemesanan</p>
                              <p><a href="#" class="btn btn-warning mt-3">Register</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/sepatu-3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Jasa Layanan Cuci Sepatu</h5>
              <p>Apa saja sih layanan di TOSEPATU? Yuk cari tahu!</p>
              <p><a href="#services" class="btn btn-warning mt-3">Layanan</a></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- about section starts -->
      <section id="about" class="about section-padding">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-12 col-12">
                      <div class="about-img">
                          <img src="img/about2.jpeg" alt="" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                      <div class="about-text">
                            <h2>TENTANG KAMI</h2>
                            <p>TOSEPATU adalah Jasa layanan cuci sepatu yang menawarkan pick up and delivery free ongkir khusus daerah sekitar kampus POLIJE jember  ,didirikan oleh sekumpulan mahasiswa berawal hanya dari rencana dan kemudian diimplementasikan menjadi sebuah bisnis yang menguntungkan, TOSEPATU didasari oleh keinginan untuk menambah pengalaman,pemasukan kami sebagai mahasiswa.<br>ketika awal beridiri, TOSEPATU kian mendapat banyak perhatian mulai dari kalangan mahasiswa,pekerja,dan kalangan lainnya.<br></p>
                            <a href="#services" class="btn btn-warning">Selanjutnya</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- about section Ends -->
      
      <!-- services section Starts -->
      <section class="services section-padding" id="services">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-header text-center pb-5">
                          <h2>LAYANAN</h2>
                          <p>Jasa yang kami tawarkan antara lain: </p>
                      </div>
                  </div>
              </div>
          </div>
          <style>
            .anjay-row{
       --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: calc(-.5 * var(--bs-gutter-x));
    margin-left: calc(-.5 * var(--bs-gutter-x));
    justify-content: flex-end;
    flex-direction: row;
    flex-wrap: nowrap;
            }
            
          </style>
          <div class="anjay-row">
            <div class="col-sm-5">
              <div class="card" style="width:500px;">
                <img class="card-img-top" src="img/services.png" class = "img-fluid" alt="Card image">
                <div class="card-body">
                  <h5 class="card-title">Medium Clean</h5>
                  <p class="card-text">Bersihkan midsole,upper,outside dan bagian lainnya terkecuali sepatu warna putih</p>
                  <a href="login.php" class="btn btn-warning">Order</a>
                </div>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="card" style="width: 500px;">
                <img class="card-img-top ms-auto" src="img/services2.png" class = "img-fluid" alt="Card image">
                <div class="card-body">
                  <h5 class="card-title">Deep Clean for White Shoes</h5>
                  <p class="card-text">Bersihkan midsole,upper,outside,noda tali sepatu dan berbagai keluhan lainnya khusus sepatu warna putih </p>
                  <a href="login.php" class="btn btn-warning">Order</a>
                </div>
              </div>
            </div>
          </div>
      </section>
      <!-- services section Ends -->
      

      <!-- portfolio strats -->
      <section id="testimoni" class="portfolio section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>TESTIMONI</h2>
                        <p>TOSEPATU kini mengundang banyak perhatian khususnya di kalangan mahasiswa karena harga terjangkau, kualitas yang murah, dan respon yang cepat <br>TOSEPATU tentunya dibantu oleh para customer yang terus memberi kepercayaan pada kami sehingga terus berkembang <br> Berikut salah satu testimoni dari beberapa customers :
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="img/testimoni1.jpeg" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Ardela Setya Maharani</h3>
                            <p class="lead">"Tysm TOSEPATU dapet harga 10k, sepatu jadi wangi dan bersih"</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="img/testimoni2.jpeg" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Adhimas Rayhan Tritama</h3>
                            <p class="lead">"Layanan cuci sepatu tergokil di jember bro, keren!"</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="img/testimoni3.jpeg" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Rizal Khoirul Anam</h3>
                            <p class="lead">"Info ngadusi sepatu, recomended poll"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!-- portfolio ends -->
      <!-- team starts -->
      <section class="team section-padding" id="team">
          <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Founder of TOSEPATU</h2>
                        <p>TOSEPATU didirikan oleh 5 pemuda yang ingin terjun di dunia bisnis</p>
                    </div>
                </div>
            </div>
            <style>
              .row {
    --bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    display: flex;
    margin-top: calc(-1 * var(--bs-gutter-y));
    margin-right: calc(-.5 * var(--bs-gutter-x));
    margin-left: calc(-.5 * var(--bs-gutter-x));
    flex-direction: row;
    justify-content: center;
              }
            </style>
            <div class="row">
                <div class="col-5 col-md-2 col-lg-2">
                    <div class="card text-center">
                        <div class="card-body">
                          <img src="img/refyan.jpg" alt="" class="w-60 img-fluid rounded-circle">
                        <h3 class="card-title py-2">Refyan Gigas</h3>
                        <p class="card-text">Mahasiswa POLIJE semester 3, Hobi Olahraga, suka main game dan minum kopi, senang merangkai kata<br> "Jatuh tujuh kali, bangkit delapan kali"</p>
                        </div>
                    </div>
                </div>
                <div class="col-5 col-md-2 col-lg-2">
                    <div class="card text-center">
                        <div class="card-body">
                          <img src="img/arya.png" alt="" class="w-60 img-fluid rounded-circle">
                        <h3 class="card-title py-2">Achmad Zakariya</h3>
                        <p class="card-text">Mahasiswa santuy </p>
                        <p class="socials">
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-5 col-md-2 col-lg-2">
                    <div class="card text-center">
                        <div class="card-body">
                          <img src="img/bangla.jpeg" alt="" class="w-60 img-fluid rounded-circle">
                        <h3 class="card-title py-2">Ahmad Maulana Subandrio</h3>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
                        <p class="socials">
                        </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-5 col-md-2 col-lg-2">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="img/akbar.jpeg" alt="" class="w-60 img-fluid rounded-circle">
                        <h3 class="card-title py-2">Akbar Kusnadi</h3>
                        <p class="card-text">Mahasiswa aktif semester 3 di Politeknik Negeri Jember. Hobi menjelajah dan menyelam informasi seputar teknologi dan games. memotivasi diri untuk selalu berkembang.</p>
                        <p class="socials">
                        </p>
                        </div>
                      </div>
                    </div>

                    <div class="col-5 col-md-2 col-lg-2">
                      <div class="card text-center">
                          <div class="card-body">
                            <img src="img/daffa.jpg" alt="" class="w-60 img-fluid rounded-circle">
                          <h3 class="card-title py-2">Daffa Fauzi Rahman</h3>
                          <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
                          <p class="socials">
                          </p>
                          </div>
                        </div>
                      </div>
    
              </div>
            </div>
          </div>
      </section>
      <!-- team ends -->
      
      <!-- footer starts -->
      <footer class="bg-dark p-2 text-center">
          <div class="container">
              <p class="text-white"><i class="bi bi-instagram text-white mx-1"></i>@tosepatu.kc</p>
          </div>
      </footer>
      <!-- footer ends -->








    
    
    <!-- All Js -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>