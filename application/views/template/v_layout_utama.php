<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?= $judul_tab;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="stylesheet" href="<?= base_url()?>css/matrix-style.css" />
 <link href="<?= base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url()?>css/bootstrap-responsive.min.css" rel="stylesheet">

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
<link href="<?= base_url()?>css/font-awesome.css" rel="stylesheet">
<link href="<?= base_url()?>css/style.css" rel="stylesheet">
<link href="<?= base_url()?>css/pages/dashboard.css" rel="stylesheet">

<link href="<?= base_url('assets/');?>plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style type="text/css">
   #center_align{
     text-align: center;
   }
 </style>
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner" style="background-color: blue">
    <div class="container"> 
      <div class="pull-left" style="margin-right: 10px">
        <img src="<?= $this->M_1Setting->getLogo();?>" width="75px">
      </div>
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">
          <h2>Sistem Rekap Medis </h2>
        <!-- <h4>Klinik PKU Muhammadiyah Gandrungmangu</h4> -->
        </a>
      <div class="nav-collapse">
        <?php if(!empty($this->session->userdata('username'))){?>
        <ul class="nav pull-right">
            <li><a href="<?= base_url()?>page/profil"><?= $this->session->userdata('poli'); ?></a></li>
          <li class="dropdown">
            
            <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <i class="icon-user"></i> <?= $this->session->userdata("username"); ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="<?= base_url()?><?= $this->session->userdata('hak_akses') ?>/page/profile">Profile</a></li>
              <li><a href="<?= base_url()?>auth/logout">Logout</a></li>
            </ul>
          </li>
        </ul>
        <?php } ?>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
     <?php if(!empty($this->session->userdata('username'))){?>
      <ul class="mainnav">
        <li class="active"><a href="<?= base_url("/")?><?= $this->session->userdata('hak_akses')?>"><i class="icon-dashboard"></i><span>Dashboard</span> </a> </li>

       <?php if($this->session->userdata('hak_akses')=="dokter"){?>

        <li><a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/pendaftaran"><i class="icon-upload"></i><span>Antrian</span> </a> </li>
        <li><a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/rekap_medis"><i class="icon-upload"></i><span>Rekap Medis Pasien</span> </a> </li>
      
      <?php }else if($this->session->userdata('hak_akses')=="resepsionis"){ ?>
        <li><a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/pasien"><i class="icon-upload"></i><span>Pendaftaran</span> </a> </li>

      <?php }elseif($this->session->userdata('hak_akses')=="perawat"){ ?>
        <li><a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/pendaftaran"><i class="icon-upload"></i><span>Antrian</span> </a> </li>
        <li><a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/pasien/laporan"><i class="icon-upload"></i><span>Laporan Harian</span> </a> </li>

      <?php }else if($this->session->userdata('hak_akses')=="admin"){ ?>
        <li><a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/user"><i class="icon-user"></i><span>User</span> </a> </li>
        <li><a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/obat"><i class="icon-user"></i><span>Obat</span> </a> </li>
        <li><a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/penyakit"><i class="icon-user"></i><span>Penyakit</span> </a> </li>
        <li><a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/rekap_medis"><i class="icon-user"></i><span>Rekap Medis</span> </a> </li>
        <li><a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/penyakit/laporan"><i class="icon-user"></i><span>Laporan Morbiditas</span> </a> </li>
    <?php }} ?>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container" style="min-height: 300px">
              <?php if (!empty( $this->session->flashdata('message'))):?>
                  <div class="alert alert-success" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                      <?=  $this->session->flashdata('message');?> 
                  </div>
              <?php endif;?>
              <?php if (!empty( $this->session->flashdata('message2'))):?>
                  <div class="alert alert-danger" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                      <?=  $this->session->flashdata('message2');?> 
                  </div>
              <?php endif;?>
    <?php
      if (! empty ($isi)){
          echo $isi;
      }
      ?>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
<div class="extra">
  <div class="extra-inner">
    <div class="container">
      <div class="row">
                    <!-- /span3 -->
                      <div class="span6">
                        <h4>
                            PETA</h4>
                            <ul>
                                   <iframe 
                                            frameborder="0"
                                            style="border:0;
                                                  width:85%;
                                                  height:300px;"
                                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBIKL4_UhAFEs4fxihEqrOdj22JC3GfEgo&q=dinas+komunikasi+dan inforatika+daerah+istimewa+yogyakarta" allowfullscreen>
                                    </iframe>
                            </ul>
                    </div>
                    <!-- /span -->
                    <div class="span6">
                        <h4>
                            KONTAK</h4>
                             <div class="col-md-4 margin-bottom-20">  
                          <ul>
                            <li><b>Alamat </b>: Jl. alsdjkasd</li>
                            <li><b>Telepon </b>: (0274) </li>
                            <li><b>Fax </b>: (0274) </li>
                            <l i><b>Email </b>: pku@gmal.com</li>
                        </ul>
                        </div>
                    <!-- /span3 -->
                </div>
      <!-- /row -->  
    </div>
    <!-- /container --> 
  </div>
  <!-- /extra-inner --> 
</div>
<!-- /extra -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12" align="center"> &copy; 2020 <a href="#" style="color: black" >Klinik PKU Muhammadiyah Gandrungmangu</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?= base_url()?>js/jquery-1.7.2.min.js"></script> 
<script src="<?= base_url()?>assets/jquery/jquery-3.3.1.min.js"></script>
<!-- <script src="<?= base_url()?>js/jquery.min.js"></script>  -->
<script src="<?= base_url()?>js/excanvas.min.js"></script> 
<script src="<?= base_url()?>js/chart.min.js" type="text/javascript"></script> 

<script src="<?= base_url()?>js/jquery.dataTables.min.js"></script> 
<script src="<?= base_url()?>js/matrix.tables.js"></script>
<script language="javascript" type="text/javascript" src="<?= base_url()?>js/full-calendar/fullcalendar.min.js"></script>
   
<script src="<?= base_url()?>js/base.js"></script> 
<!-- <link rel="stylesheet" href="<?= base_url()?>assets/bootstrap-3.3.7/dist/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="<?= base_url()?>assets/select2-4.0.6-rc.1/dist/css/select2.min.css">
<script src="<?= base_url()?>assets/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>   
  <script src="<?= base_url()?>assets/select2-4.0.6-rc.1/dist/js/i18n/id.js"></script>   
<script type="text/javascript">
    $( document ).ready(function() {
     $('#obat').select2({
        placeholder: 'Pilih Obat',
        language: "id"
     });
     $('#penyakit').select2({
        placeholder: 'Pilih Penyakit',
        language: "id"
     });

  
});

</script>
</body>
</html>
