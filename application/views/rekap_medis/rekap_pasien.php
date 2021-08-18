<?php
    $diff= date_diff(date_create($pasien->tanggal_lahir),date_create());
?>
        <div class="row">
          <div class="span4" >          
            
            <div class="widget ">
              
              <div class="widget-header">
                <i class="icon-user"></i>
                <h3>Data Pasien</h3>
            </div> <!-- /widget-header -->
          
          <div class="widget-content">
            
              <div class="tab-content">
                <h3><?= $pasien->nama_pasien; ?></h3>
                    <table class="table">
                      <tr >
                        <td>No Identitas</td>
                        <td> : <?= $pasien->no_identitas ?></td>        
                      </tr>
                      <tr >
                        <td>Tempat Lahir</td>
                        <td> : <?= $pasien->tempat_lahir ?></td>        
                      </tr>
                      <tr >
                        <td>Tanggal Lahir</td>
                        <td> : <?= $pasien->tanggal_lahir ?></td>        
                      </tr>
                      <tr >
                        <td>Umur</td>
                        <td> : <?= $diff->y." tahun ".$diff->m." bulan ".$diff->d." hari"; ?></td>        
                      </tr>
                      <tr >
                        <td>Jenis Kelamin</td>
                        <td> : <?= $pasien->jenis_kelamin=="L"?"Laki-laki":"Perempuan" ?></td>        
                      </tr>
                      <tr >
                        <td>Agama</td>
                        <td> : <?= $pasien->agama ?></td>        
                      </tr>
                      <tr >
                        <td>Status Perkawinan</td>
                        <td> : <?= $pasien->status_perkawinan=="bk"?"Belum Kawin":"Kawin" ?></td>        
                      </tr>
                      <tr >
                        <td>Pekerjaan</td>
                        <td> : <?= $pasien->pekerjaan ?></td>        
                      </tr>
                      <tr >
                        <td>Alamat Lengkap</td>
                        <td> : <?= $pasien->alamat ?></td>        
                      </tr>
                      <tr >
                        <td>Nomer Telepon</td>
                        <td> : <?= $pasien->no_telp ?></td>        
                      </tr>
                    </table>
                   
              
            </div>
            
            
            
            
            
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
            
        </div> <!-- /span8 -->
          
          <div class="span8" >          
            
            <div class="widget ">
              
              <div class="widget-header">
                <i class="icon-user"></i>
                <h3><?= $title?></h3>
            </div> <!-- /widget-header -->
          
          <div class="widget-content">
            
              <div class="tab-content">
                
                    <div class="accordion" id="accordion2">
                   <div class='span7'>
                    <?php 
                    $pertama='pertama';
                    foreach ($tahun as $data) {?>
                    <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#A<?= Date('Y',strtotime($data['tgl_pendaftaran']));?>">
                        <?= Date('Y',strtotime($data['tgl_pendaftaran']));?>
                      </a>
                       </div>
                      <div id="A<?= Date('Y',strtotime($data['tgl_pendaftaran']));?>" class="accordion-body collapse <?= $pertama=='pertama'? "in":"" ?>">
                        <div class="accordion-inner">
                      <?php foreach ($this->M_Rekap_Medis->getTahun(Date('Y',strtotime($data['tgl_pendaftaran'])),$rekap_medis->id_pasien) as $data_rekap_medis) {?>
                      <div class="row">
                          
                        <div class='span6'>
                          <span class="alert alert-success">
                            <?= Date('d-m-Y',strtotime($data_rekap_medis['tgl_pendaftaran']));?>
                          </span>
                          <table class="table">
                            <tr>
                              <th>Kunjungan</th>
                              <th class="span5">Diagnosa</th>
                              <th>Dokter</th>
                              <td rowspan="2">
                                <a href='<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/rekap_medis/lihat/<?= $data_rekap_medis['id_rekap_medis']; ?> ' class="btn btn-primary" >Lihat</a>
                                <?php if($this->session->userdata('hak_akses')=='admin'){?>
                                <a href='<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/rekap_medis/cetak/<?= $data_rekap_medis['id_rekap_medis']; ?> ' class="btn btn-primary" >Cetak</a>
                                <a href="<?= base_url()?><?= $this->session->userdata('hak_akses')?>/rekap_medis/hapus/<?= $data_rekap_medis['id_rekap_medis']; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger"><i class="btn-icon-only icon-remove"> </i>Hapus</a>
                                <?php } ?>
                              </td>
                            </tr>
                            <tr>
                              <td><?= $data_rekap_medis['poli_tujuan'];?></td>
                              <td><?= $data_rekap_medis['nama_penyakit'];?></td>
                              <td><?= $data_rekap_medis['nama'];?></td>
                            </tr>
                          </table>
                        </div>
                        </div>

                      <?php }?>
                      </div>
                      </div>
                   
                    </div>
                    <?php $pertama='2';} ?>
                  </div>
                  <div class='span6'>
                      <?php 
                      $pertama='pertama'; 
                      foreach ($tahun as $data) {?>
                      
                    <?php } ?>
                       
                    </div> 
                  </div> 

                   
              
            </div>
            
            
            
            
            
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
            
        </div> <!-- /span8 -->
          
          
        </div> <!-- /row -->
  
