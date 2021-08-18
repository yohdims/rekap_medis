 <?php 
  $head = array("#","Nama Pasien","No RM","Umur","Diagnosa","KD","Dokter");
  $head2 = array("#","Penyakit","Jumlah");
  $no=0;
 
 ?>
  <?= $this->M_1Setting->Cetak();?>
 <style type="text/css">
   #center_align{
     text-align: center;
   }
 </style>
<div class="widget">
  <div class="widget-header"> <i class="icon-th-list"></i>
    <h3><?= $title ?></h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content" style="min-height: 400px">
    <form method="POST">
      <!-- Pilih Tanggal<br> -->
    <input name="hari" type='date' value="<?= $hari?>">
    <button class="btn btn-primary">Pilih</button>
    <button class="btn btn-warning" onclick="printData()">Print</button>
    </form>
    <div id="printTable">
      <table style="width: 100%;">
        <tr >
            <td><img src='<?= $this->M_1Setting->getLogo();?>'></td>
            <td></td>
            <td><h2>KLINIK PKU MUHAMMADIYAH GANDRUNGMANGU</h2></td>
        </tr>
        <tr>
            <td colspan="3"><hr style="border-bottom: 1px solid black "><center><h3>Sensus Harian Rawat Jalan</h3></center></td>
        </tr>
        <tr>
            <td>Nama Poli Klinik</td>
            <td>:</td>
            <td><?= $this->session->userdata('poli'); ?></td>
        </tr>
        <tr>
            <td>Hari/Tanggal</td>
            <td>:</td>
            <td><?= Date("d-m-Y",strtotime($hari)) ?></td>
        </tr>
      </table>
      <br>
      <table class="table table-striped table-bordered" border="1"  style="width: 100%;">
      <thead>
        <tr>
          <?php foreach ( $head as $data) : ?>
          <th> <?= $data; ?></th>
          <?php endforeach ?>
        </tr>
      </thead> 
      <tbody>
        <?php foreach ( $pasien as $data) : 
        $no++;
         $diff= date_diff(date_create($data["tanggal_lahir"]),date_create($hari));
         ?>
        <tr>
          <td> <?= $no; ?></td>
          <td> <?= $data["nama_pasien"]; ?></td>
          <td> No RM. <?= $data["id_rekap_medis"]; ?></td>
          <td> <?= $diff->y." tahun ".$diff->m." bulan ".$diff->d." hari"; ?></td>  
          <td> <?= $data["nama_penyakit"]; ?></td>
          <td> <?= $data["kode_dtd"]; ?></td>
          <td> <?= $data["nama_dokter"]; ?></td>
        </tr>
        <?php endforeach ?>      
      </tbody>
      <tr>
        <td colspan="6">Jumlah</td>
        <td><?= count($pasien)?></td>
      </tr>
    </table>
    <h4>Penyakit yang Terdiagnosa</h4>
    <table class="table table-striped table-bordered" style="width: 40%"  border="1" >
      <thead>
        <tr>
          <?php foreach ( $head2 as $data) : ?>
          <th> <?= $data; ?></th>
          <?php endforeach ?>
        </tr>
      </thead> 
      <tbody>
        <?php 
        $no=0;
        foreach ( $penyakit as $data) : 
        $no++;
         ?>
        <tr>
          <td> <?= $no; ?></td>
          <td> <?= $data["nama_penyakit"]; ?></td>
          <td> <?= $data["jumlah"]; ?></td>
        </tr>
        <?php endforeach ?>      
      </tbody>
    </table>
    </div>
  </div>
  <!-- /widget-content --> 
</div>