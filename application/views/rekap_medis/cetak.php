<?php
    $diff= date_diff(date_create($rekap_medis->tanggal_lahir),date_create());
?>
<?= $this->M_1Setting->cetak();?>
        <div class="row">
          
          <div class="span12">          
            
            <div class="widget ">
                            <div class="widget-header">
                <i class="icon-user"></i>
                <h3><?= $title?></h3>
            </div> <!-- /widget-header -->
          
          <div class="widget-content">
            <button class="btn btn-warning" onclick="printData()">Print</button>
              <a href='<?= base_url()?><?= $this->session->userdata('hak_akses')?>/rekap_medis/pasien/<?= $rekap_medis->id_pasien; ?>' class="btn btn-primary">Kembali</a>
              <hr>
              <div class="tab-content">
                <div id="printTable">
        <table style="width: 100%;">
        <tr >
            <td><img src='<?= $this->M_1Setting->getLogo();?>'></td>
            <td colspan="3" align="center">
              <h2>KLINIK PKU MUHAMMADIYAH GANDRUNGMANGU</h2><br>
              Jl. Raya Gandrungmangu, Tambangan, Wringinharjo,<br>
              Kec. Gandrungmangu, Kabupaten Cilacap, Jawa Tengah 53254<br>
              Email : pku.gandrungmangu@gmail.com<br>
            </td>
        </tr>
        <tr>
            <td colspan="4"><hr style="border-bottom: 1px solid black "><h4>Rekap Medis <?= $rekap_medis->poli_tujuan; ?></h4></td>
        </tr>
        <tr>
            <td>Hari/Tanggal</td>
            <td>:</td>
            <td><?= Date("d-m-Y",strtotime($rekap_medis->tgl_pendaftaran)) ?></td>
            <td align="center">No Rekap Medis</td>
        </tr>
        <tr>
            <td>Dokter</td>
            <td>:</td>
            <td><?= $rekap_medis->nama_dokter; ?></td>
            <td align="center"><?= $rekap_medis->id_rekap_medis; ?></td>
        </tr>
        
      </table>
      <hr>
                    <table class="table">
                      <tr >
                        <td>Nama</td>
                        <td> : <?= $pasien->nama ?></td> 
                        <td>Agama</td>
                        <td> : <?= $pasien->agama ?></td>         
                      </tr>
                      <tr >
                        <td>No Identitas</td>
                        <td> : <?= $pasien->no_identitas ?></td>  
                        <td>Status Perkawinan</td>
                        <td> : <?= $pasien->status_perkawinan=="bk"?"Belum Kawin":"Kawin" ?></td>      
                      </tr>
                      <tr >
                        <td>Tempat Lahir</td>
                        <td> : <?= $pasien->tempat_lahir ?></td>   
                        <td>Pekerjaan</td>
                        <td> : <?= $pasien->pekerjaan ?></td>       
                      </tr>
                      <tr >
                        <td>Tanggal Lahir</td>
                        <td> : <?= $pasien->tanggal_lahir ?></td>  
                        <td>Alamat Lengkap</td>
                        <td> : <?= $pasien->alamat ?></td>      
                      </tr>
                      <tr >
                        <td>Umur</td>
                        <td> : <?= $diff->y." tahun ".$diff->m." bulan ".$diff->d." hari"; ?></td> 
                        <td>Nomer Telepon</td>
                        <td> : <?= $pasien->no_telp ?></td>         
                      </tr>
                      <tr >
                        <td>Jenis Kelamin</td>
                        <td> : <?= $pasien->jenis_kelamin=="L"?"Laki-laki":"Perempuan" ?></td>        
                      </tr>
                    </table>
                    <table width="100%">
                      <tr>
                        <td width="50%" align="center" style="border: 1px solid black">SOA</td>
                        <td width="50%" align="center" style="border: 1px solid black">TERAPI</td>
                      </tr>
                      <tr>
                        <td>
                            <div class="widget">
                              <div class="widget-content">
                                <h4>Keluhan/Tujuan Kunjungan</h4>
                                <?= $rekap_medis->keluhan; ?>
                              </div>
                        </td>
                        <td rowspan="3" valign="top">
                          
                            <div class="widget">
                              <div class="widget-content">
                          <h4>Terapi</h4>
                          <?= $rekap_medis->keluhan; ?>

                              </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          
                            <div class="widget">
                              <div class="widget-content">

                          <h4>Anamnesis</h4>
                          <?= $rekap_medis->anamnesis; ?>
                              </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          
                            <div class="widget">
                              <div class="widget-content">

                          <h4>Hasil Pemeriksaan Vital</h4>
                          <table class="table ">
                            <tr>
                              <td>Tinggi Badan</td><td>: <?= $rekap_medis->tinggi_badan; ?> cm</td>
                            </tr>
                            <tr>
                              <td>Berat Badan</td><td>: <?= $rekap_medis->berat_badan; ?> kg</td>
                            </tr>
                            <tr>
                              <td>Suhu Badan</td><td>: <?= $rekap_medis->berat_badan; ?><sup>o</sup>C</td>
                            </tr>
                            <tr>
                              <td>Frekuensi Nadi</td><td>: <?= $rekap_medis->frekuensi_nadi; ?> kali/menit</td>
                            </tr>
                            <tr>
                              <td>Frekuensi Pernapasan</td><td>: <?= $rekap_medis->frekuensi_pernapasan; ?> kali/menit </td>
                            </tr>
                            <tr>
                              <td>Tekanan Darah</td><td>: <?= $rekap_medis->tekanan_darah_diastolik; ?>/<?= $rekap_medis->tekanan_darah_sistolik; ?> mmHg</td>
                            </tr>
                          </table>
                              </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          
                            <div class="widget">
                              <div class="widget-content">

                          <h4>Hasil Diagnosa</h4>
                          <table class="table">
                              
                            <?php foreach($diagnosa as $data){?>
                            <tr>
                              <td><?= $data['nama_penyakit']; ?></td>
                              <td><?= $data['kode_icdx']; ?></td>
                              <td><?= $data['penyakit_terkonfirmasi']=='Y'?"Terkonfirmasi":""; ?></td>
                            </tr>
                          <?php }?>
                            </table>
                              </div>
                            </div>
                        </td>
                        <td>
                          
                            <div class="widget">
                              <div class="widget-content">

                          <h4>Resep Obat</h4>
                          <table class="table">
                              <?php foreach($resep_obat as $data){?>
                            <tr>
                              <td><?= $data['nama_obat']; ?></td>
                              <td><?= $data['signatura']; ?></td>
                            </tr>
                          <?php }?>
                            
                            </table>
                              </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          
                            <div class="widget">
                              <div class="widget-content">

                          <h4>File Penunjang</h4>
                            <table class="table">
                              
                            <?php foreach($file as $data){?>
                            <tr>
                              <td><?= $data['file_name']?></td>
                              <td>
                                <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/rekap_medis/hapus_penunjang/<?= $data['id_penunjang'] ?>"  class="btn btn-danger pull-right" onClick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/rekap_medis/tampil_file/<?= $data['id_penunjang'] ?>" target='blank' class="btn btn-primary pull-right">Lihat</a>
                              </td>
                              <!-- <td><iframe src="<?= base_url()?>dokter/resep_obat/tampil_file/<?= $data['id_penunjang'] ?>" width='100%' height='500px'></iframe></td> -->
                            </tr>
                          <?php }?>
                            </table>
                              </div>
                            </div>
                          </div>
                          </td>
                      </tr>
                    </table>
                    
              
            </div>
            </div>
            
            
            
            
            
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
            
        </div> <!-- /span8 -->
          
          
          
          
        </div> <!-- /row -->
