  <!DOCTYPE html>
  <html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title><?= $judul_tab ?></title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="<?= base_url('assets/')?>css/linearicons.css">
      <link rel="stylesheet" href="<?= base_url('assets/')?>css/font-awesome.min.css">
      <link rel="stylesheet" href="<?= base_url('assets/')?>css/bootstrap.css">
      <link rel="stylesheet" href="<?= base_url('assets/')?>css/magnific-popup.css">
      <link rel="stylesheet" href="<?= base_url('assets/')?>css/nice-select.css">              
      <link rel="stylesheet" href="<?= base_url('assets/')?>css/animate.min.css">
      <link rel="stylesheet" href="<?= base_url('assets/')?>css/jquery-ui.css">      
      <link rel="stylesheet" href="<?= base_url('assets/')?>css/owl.carousel.css">
      <link rel="stylesheet" href="<?= base_url('assets/')?>css/main.css">
    </head>
    <body>  
        <header id="header" id="home">
          <div class="header-top">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-1 col-sm-6 col-4 header-top-left no-padding">
                    <a href="<?= base_url()?>"><img src="<?= $this->M_1Setting->getLogo();?>" alt="" title="" height="30px" /></a>   

                </div>
                <div class="col-lg-5 col-sm-6 col-4 text-uppercase">
                    <h4>Poli Klinik <br>
                    PKU Muhammadiyah<br>
                    Gandrungmangu
                    </h4> 
                </div>
                <div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
                <a class="btns" href="tel:+62 811 233 8899">Gawat Darurat 0811-233-8899</a>
                  <a class="btns" href="<?= base_url('page/')?>login">Login</a>   
                  <a class="icons" href="tel:+953 012 3654 896">
                    <span class="lnr lnr-phone-handset"></span>
                  </a>
                  <a class="icons" href="<?= base_url('page/')?>login">
                    <span class="lnr "><i class="fa fa-facebook"></i></span>
                  </a>    
                </div>
              </div>                  
            </div>
        </div>
          <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li class="menu-active menu-has-children"><a href="#">Profil</a>
                  <ul>
                      <li><a href="<?= base_url('page/')?>sejarah">Sejarah</a></li>
                      <li><a href="<?= base_url('page/')?>visi_misi">Visi, Misi & Tujuan</a></li>
                      <li><a href="<?= base_url('page/')?>struktur">Struktur Kepegawaian</a></li>
                    </ul>
                  </li>
                  <li class="menu-has-children"><a href="#">Info Pengunjung</a>
                    <ul>
                      <li><a href="<?= base_url('page/')?>jadwal_dokter">Jadwal Dokter</a></li>
                      <li><a href="<?= base_url('page/')?>jam_layanan">Jam Layanan</a></li>
                      <li><a href="<?= base_url('page/')?>alur_pemeriksaan">Alur Pemeriksaan</a></li>
                    </ul>
                  </li>
                  <li><a href="<?= base_url('page/')?>fasilitas">Fasilitas Pelayanan</a></li>
                  <li><a href="<?= base_url('page/')?>berita">Berita</a></li>
                  <li><a href="<?= base_url('page/')?>kontak">Kontak</a></li>                             
                </ul>
              </nav><!-- #nav-menu-container -->         
            </div>
          </div>
        </header><!-- #header -->
 <?php
      if (! empty ($isi)){
          echo $isi;
      }
      ?>
      <!-- start footer Area -->    
      <footer class="footer-area section-gap">
        <div class="container">
          <div class="row">
            <div class="col-lg-4  col-md-6">
              <div class="single-footer-widget mail-chimp">
                <h6 class="mb-20">Alamat</h6>
                <p>
                  Jl. Raya Gandrungmangu, Tambangan, <br>
                Wringinharjo, Kec. Gandrungmangu, <br>
                Kabupaten Cilacap, Jawa Tengah 53254
                </p>
                <h6 class="mb-20">Jam Buka</h6>
                <p>
                  Layanan IGD 24 Jam <br>
                Layanan Poli Klinik Setiap Hari sesuai Jadwal<br>
                </p>
              </div>
            </div>   
            <div class="col-lg-4  col-md-6">
              <div class="single-footer-widget mail-chimp">
                <h6 class="mb-20">Kontak</h6>
                <table class="table">
                  <tr><td >Gawat Darurat</td><td>0811-233-8899</td></tr>
                  <tr><td>Whatsapp</td><td>022-20277564</td></tr>
                  <tr><td>Pusat Panggilan</td><td>0811-235-9988</td></tr>
                </table>
              </div>
            </div>   
            <div class="col-lg-4  col-md-6">
              <div class="single-footer-widget mail-chimp footer-text">
                <h6 class="mb-20">Pintasan</h6>
                <a href="<?= base_url()?>page/jadwal_dokter">Jadwal Dokter</a><br>
                <a href="<?= base_url()?>page/alur_pemeriksaan">Alur Pemeriksaan</a><br>
                <a href="<?= base_url()?>page/jam_layanan">Jam Pelayanan</a><br>
                <a href="<?= base_url()?>page/berita">Berita</a><br>
              </div>
            </div>                    
          </div>
                                  

          <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-4 col-sm-12 footer-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-dribbble"></i></a>
              <a href="#"><i class="fa fa-behance"></i></a>
            </div>
          </div>
        </div>
      </footer>
      <!-- End footer Area -->

      <script src="<?= base_url('assets/')?>js/vendor/jquery-2.2.4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="<?= base_url('assets/')?>js/vendor/bootstrap.min.js"></script>      
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="<?= base_url('assets/')?>js/easing.min.js"></script>      
      <script src="<?= base_url('assets/')?>js/hoverIntent.js"></script>
      <script src="<?= base_url('assets/')?>js/superfish.min.js"></script> 
      <script src="<?= base_url('assets/')?>js/jquery.ajaxchimp.min.js"></script>
      <script src="<?= base_url('assets/')?>js/jquery.magnific-popup.min.js"></script> 
      <script src="<?= base_url('assets/')?>js/jquery-ui.js"></script>     
      <script src="<?= base_url('assets/')?>js/owl.carousel.min.js"></script>            
      <script src="<?= base_url('assets/')?>js/jquery.nice-select.min.js"></script>              
      <script src="<?= base_url('assets/')?>js/mail-script.js"></script> 
      <script src="<?= base_url('assets/')?>js/main.js"></script>  
    </body>
  </html>