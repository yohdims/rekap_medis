
 <?php
 header("Refresh: 30;"); 
  $head = array("#","Nomer Identitas","Nama","Alamat","Umur","Action");
  $no=0;
 ?>
<div class="widget">
  <div class="widget-header"> <i class="icon-th-list"></i>
    <h3><?= $title ?></h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content" style="min-height: 400px">
        <table class="table table-striped span11">
      <tr>
          <td colspan="3"><h3>Sedang Diperiksa Dokter</h3></td>
      </tr>
        <?php 
        $pertama='pertama';
        foreach ( $periksa as $data) : $no++;
        $diff= date_diff(date_create($data["tanggal_lahir"]),date_create());?>
        <tr>
          <td style="background-color: grey;text-align:center; color: white" rowspan='<?= $pertama=='pertama' && $this->session->userdata('hak_akses')=='dokter'?2 :1 ?>'> No. 
            <h2><?= $data["no_daftar"]; ?></h2></td>
          <td> 
            <?= $data["nama_pasien"]; ?>(<b><?= $data["jenis_kelamin"]; ?></b>)
            <br>
            <?= $diff->y." tahun ".$diff->m." bulan ".$diff->d." hari"; ?>
          </td>
          <td>
            No. RM
            <h2><?= $data["id_rekap_medis"]; ?></h2>
            <br>
            
          </td>
        </tr>
        <?php if($pertama=='pertama' && $this->session->userdata('hak_akses')=='dokter'){?>
        <tr>
          <td>
            <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/pendaftaran/input/<?= $data["id_pendaftaran"]; ?>" class="btn btn-small btn-danger" style="color: white;padding :5px;""><i class="btn-icon-only icon-remove" > </i>Lewati Pasien </a>
          </td>
          <td>
            <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/rekap_medis/periksa/<?= $data["id_rekap_medis"]; ?>" class="btn btn-small btn-success" style="color: white;padding :5px;""><i class="btn-icon-only icon-edit" > </i>Periksa Pasien </a>
          </td>
      </tr>
            <?php $pertama='kedua';} ?>
        <?php endforeach ?>  
      </table>
      <div>
        
        <div class="span6">
          
      <table class="table table-striped"> 
        <tr>
          <td colspan="3"><h3>Sudah Vital Sign</h3></td>
      </tr>   
      <?php 
      $pertama='pertama';
      foreach ( $vital_sign as $data) :$no++;
        $diff= date_diff(date_create($data["tanggal_lahir"]),date_create());?>
        <tr>
          <td style="background-color: grey;text-align:center; color: white" rowspan='<?= $pertama=='pertama' && $this->session->userdata('hak_akses')=='dokter'?2 :1 ?>'> No. 
            <h2><?= $data["no_daftar"]; ?></h2></td>
          <td> 
            <?= $data["nama_pasien"]; ?>(<b><?= $data["jenis_kelamin"]; ?></b>)
            <br>
            <?= $diff->y." tahun ".$diff->m." bulan ".$diff->d." hari"; ?>
          </td>
          <td class="td-actions">
            No. RM
            <h2><?= $data["id_rekap_medis"]; ?></h2>
            <br>
            
          </td>
        </tr>
         <?php if($pertama=='pertama' && $this->session->userdata('hak_akses')=='dokter'){?>
        <tr>
          <td>
            <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/pendaftaran/input/<?= $data["id_pendaftaran"]; ?>" class="btn btn-small btn-danger" style="color: white;padding :5px;""><i class="btn-icon-only icon-remove" > </i>Lewati Pasien </a>
          </td>
          <td>
            <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/rekap_medis/periksa/<?= $data["id_rekap_medis"]; ?>" class="btn btn-small btn-success" style="color: white;padding :5px;""><i class="btn-icon-only icon-edit" > </i>Periksa Pasien </a>
          </td>
      </tr>
            <?php $pertama='kedua';} ?>
        <?php endforeach ?> 
        </table>
        </div>
        <div class="span5">
          
      <table class="table table-striped"> 
        <tr>
          <td colspan="3"><h3>Dilewati Periksa Dokter</h3></td>
      </tr>   
      <?php 
      $pertama='pertama';
      foreach ( $tunggu_periksa as $data) :$no++;
        $diff= date_diff(date_create($data["tanggal_lahir"]),date_create());?>
        <tr>
          <td style="background-color: grey;text-align:center; color: white" rowspan='<?= $pertama=='pertama' && $this->session->userdata('hak_akses')=='dokter'?2 :1 ?>'> No. 
            <h2><?= $data["no_daftar"]; ?></h2></td>
          <td> 
            <?= $data["nama_pasien"]; ?>(<b><?= $data["jenis_kelamin"]; ?></b>)
            <br>
            <?= $diff->y." tahun ".$diff->m." bulan ".$diff->d." hari"; ?>
          </td>
          <td class="td-actions">
            No. RM
            <h2><?= $data["id_rekap_medis"]; ?></h2>
            <br>
            
          </td>
        </tr>
         <?php if($this->session->userdata('hak_akses')=='dokter'){?>
        <tr>
          <td>
            <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/pendaftaran/input_batal/<?= $data["id_pendaftaran"]; ?>" class="btn btn-small btn-danger" style="color: white;padding :5px;""><i class="btn-icon-only icon-remove" > </i>Hapus Antrian </a>
          </td>
          <td>
            <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/rekap_medis/periksa/<?= $data["id_rekap_medis"]; ?>" class="btn btn-small btn-success" style="color: white;padding :5px;""><i class="btn-icon-only icon-edit" > </i>Periksa Pasien </a>
          </td>
      </tr>
            <?php $pertama='kedua';} ?>
        <?php endforeach ?> 
        </table>
        </div>
        <div class="span6">
        <table class="table table-striped ">  
      <tr>
          <td colspan="3"><h3>Belum Vital Sign</h3></td>
      </tr>
      <?php 
      $pertama='pertama';
      foreach ( $antrian as $data) :
        $diff= date_diff(date_create($data["tanggal_lahir"]),date_create());?>
        <tr >
          <td style="background-color: grey;text-align:center; color: white" rowspan='<?= $pertama=='pertama' && $this->session->userdata('hak_akses')=='perawat'?2 :1 ?>'> No. 
            <h2><?= $data["no_daftar"]; ?></h2></td>
          <td> 
            <?= $data["nama_pasien"]; ?>(<b><?= $data["jenis_kelamin"]; ?></b>)
            <br>
            <?= $diff->y." tahun ".$diff->m." bulan ".$diff->d." hari"; ?>
          </td>
          <td class="td-actions">
            No. RM
            <h2><?= $data["id_rekap_medis"]; ?></h2>
            <br>
            
          </td>
        </tr>
            <?php if($pertama=='pertama' && $this->session->userdata('hak_akses')=='perawat'){?>
        <tr>
          <td>
            <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/pendaftaran/input/<?= $data["id_pendaftaran"]; ?>" class="btn btn-small btn-danger" style="color: white;padding :5px;""><i class="btn-icon-only icon-remove" > </i>Lewati Pasien </a>
          </td>
          <td>
            <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/rekap_medis/form/<?= $data["id_rekap_medis"]; ?>" class="btn btn-small btn-success" style="color: white;padding :5px;""><i class="btn-icon-only icon-edit" > </i>Periksa Pasien </a>
          </td>
      </tr>
            <?php $pertama='kedua';} ?>
        <?php endforeach ?>   
    </table>
      </div>
      <div class="span5">
        <table class="table table-striped ">  
      <tr>
          <td colspan="3"><h3>Dilewati Vital Sign</h3></td>
      </tr>
      <?php 
      $pertama='pertama';
      foreach ( $tunggu_vital_sign as $data) :
        $diff= date_diff(date_create($data["tanggal_lahir"]),date_create());?>
        <tr >
          <td style="background-color: grey;text-align:center; color: white" rowspan='<?= $pertama=='pertama' && $this->session->userdata('hak_akses')=='perawat'?2 :1 ?>'> No. 
            <h2><?= $data["no_daftar"]; ?></h2></td>
          <td> 
            <?= $data["nama_pasien"]; ?>(<b><?= $data["jenis_kelamin"]; ?></b>)
            <br>
            <?= $diff->y." tahun ".$diff->m." bulan ".$diff->d." hari"; ?>
          </td>
          <td class="td-actions">
            No. RM
            <h2><?= $data["id_rekap_medis"]; ?></h2>
            <br>
            
          </td>
        </tr>
            <?php if($this->session->userdata('hak_akses')=='perawat'){?>
        <tr>
          <td>
            <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/pendaftaran/input_batal/<?= $data["id_pendaftaran"]; ?>" class="btn btn-small btn-danger" style="color: white;padding :5px;""><i class="btn-icon-only icon-remove" > </i>Hapus Antrian</a>
          </td>
          <td>
            <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/rekap_medis/form/<?= $data["id_rekap_medis"]; ?>" class="btn btn-small btn-success" style="color: white;padding :5px;""><i class="btn-icon-only icon-edit" > </i>Periksa Pasien </a>
          </td>
      </tr>
            <?php $pertama='kedua';} ?>
        <?php endforeach ?>   
    </table>
      </div>
      </div>
  </div>
  <!-- /widget-content --> 
</div>