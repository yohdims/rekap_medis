 <?php 
  $head = array("#","Kode DTD","Kode ICDX","Nama Penyakit","Action");
  $no=0;
  $usia = array(
            array('awal' =>0,'akhir'=>5 ),
            array('awal' =>5,'akhir'=>15 ),
            array('awal' =>15,'akhir'=>25 ),
            array('awal' =>25,'akhir'=>45 ),
            array('awal' =>45,'akhir'=>65 ),
            array('awal' =>65,'akhir'=>100 )
          );
  
  $jenis_kelamin=array(
      "L"=>"Laki-laki",
      "P"=>"Perempuan");
  if(empty($tahun)){
    $tahun=Date('Y');
  }
  $rs = array(
          'Kode RS' =>'15232355',
          'Nama RS' =>'Klinik PKU Muhammadiyah Gandrungmangu',
          'Bulan' =>'Januari-Desember',
          'Tahun' =>$tahun,
          );
 ?>
 <?= $this->M_1Setting->Cetak();?>
 
<div class="widget">
  <div class="widget-header"> <i class="icon-th-list"></i>
    <h3><?= $title ?></h3>
  </div>
  <!-- /widget-header -->
  <div class="widget-content" style="min-height: 400px">
    <form method="POST">
      Pilih Tahun<br>
    <select name="tahun">
      <?php for($i='2019';$i<=Date('Y');$i++){ ?>
          <option value="<?= $i;?>" <?php if($i==$tahun){echo "selected"; }?>><?= $i;?></option>
        <?php } ?>
    </select>
    <button class="btn btn-primary">Pilih</button>
    <button class="btn btn-warning" onclick="printData()">Print</button>
    </form>
    <div id="printTable">
      
      <table style="width: 100%;">
        <tr >
            <td><img src='<?= $this->M_1Setting->getLogo();?>'></td>
            <td></td>
            <td><h2>Formulir RL 4B<br>LAPORAN DATA KEADAAN MORBIDITAS PASIEN RAWAT JALAN</h2></td>
        </tr>
        <tr>
          <td colspan="3"><hr></td>
        </tr>
         <?php foreach ( $rs as $rs_key =>$rs_value) :?>
        <tr>
            <td><?= $rs_key?></td>
            <td>:</td>
            <td><?= $rs_value?></td>
        </tr>
        <?php endforeach ?>  
      </table>
      <br>
      <table class="table table-striped table-bordered data-table" border="1">
        <thead>
          <tr><td colspan='20' id="center_align"><h3>Tabel Rekap Penyakit</h3></td ></tr>
        </thead>
        <tr style="font-weight: bold">
          <td rowspan="3" id="center_align">No</td>
          <td rowspan="3" id="center_align" class="span1">No DTD</td>
          <td rowspan="3" id="center_align" class="span1">No Daftar Terperinci</td>
          <td rowspan="3" id="center_align" class="span2">Golongan Sebab Penyakit</td>
          <td colspan="12" id="center_align" >Jumlah Pasien Menurut Umur & Sex <br> (Tahun)</td>
          <td colspan="2" id="center_align" class="span2">Jumlah Kasus Baru Menurut Jenis Kelamin</td>
          <td rowspan="3" id="center_align" class="span1">Jumlah Kasus Baru</td>
          <td rowspan="3" id="center_align" class="span1">Jumlah Kunjungan <?= $tahun-1?> - <?= $tahun?></td>
        </tr>
      <tr>
          <?php foreach ( $usia as $usia_key =>$usia_value) :?>
            <td colspan="2" ><?= $usia_value['awal'];?>-<?= $usia_value['akhir'];?></td>
          <?php endforeach ?>
        <td rowspan="2" id="center_align">LK</td>
        <td rowspan="2" id="center_align">PR</td>
      </tr>
      <tr>
        <?php foreach ( $usia as $usia_key =>$usia_value) :?>
          <?php foreach ( $jenis_kelamin as $jenis_kelamin_key=>$value) :?>
            <td><?= $jenis_kelamin_key?></td>
          <?php endforeach ?>        
        <?php endforeach ?>        
      </tr>
      <tbody>
        <?php foreach ( $penyakit as $data) : $no++;?>
        <tr>
          <td> <?= $no; ?></td>
          <td> <?= $data["kode_dtd"]; ?></td>
          <td> <?= $data["kode_icdx"]; ?></td>
          <td> <?= $data["nama_penyakit"]; ?></td>  
            
          <?php foreach ( $usia as $usia_key =>$usia_value) :?>
            <?php foreach ( $jenis_kelamin as $jenis_kelamin_key=>$value) :?>
            <td> 
              <?= $this->M_Penyakit->getCount($data['id_penyakit'],$tahun,$jenis_kelamin_key,$usia_value['awal'],$usia_value['akhir'])?>
            </td>
            <?php endforeach ?>      
          <?php endforeach ?>      
          <?php foreach ( $jenis_kelamin as $jenis_kelamin_key=>$value) :?>
            <td id="center_align"> <?= $this->M_Penyakit->getCountJK($data['id_penyakit'],$tahun,$jenis_kelamin_key)?></td>  
          <?php endforeach ?>   
            <td id="center_align"> <?= $this->M_Penyakit->getCountPenyakit($data['id_penyakit'],$tahun)?></td>  
            <td id="center_align"> <?= $this->M_Penyakit->getCountPenyakitAja($data['id_penyakit'],$tahun)?></td>  
        </tr>
        <?php endforeach ?>      
      </tbody>
    </table>
  </div>
  </div>
  <!-- /widget-content --> 
</div>