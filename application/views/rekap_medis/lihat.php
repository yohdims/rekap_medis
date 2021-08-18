<?php
    $diff= date_diff(date_create($rekap_medis->tanggal_lahir),date_create());
?>
        <div class="row">
          
          <div class="span12">          
            
            <div class="widget ">
              
              <div class="widget-header">
                <i class="icon-user"></i>
                <h3><?= $title?></h3>
            </div> <!-- /widget-header -->
          
          <div class="widget-content">
            
              <div class="tab-content">
                    <table class="table ">
                      <tr style="color:white">
                        <td class="span3 alert alert-warning" style="text-align: center">Kunjungan</td>
                        <td class="span3 alert alert-warning" style="text-align: center"><?= $rekap_medis->poli_tujuan; ?></td>
                        <td class="span3" class="td-actions" style="color:black">
                          No. RM
                          <span class='alert alert-info'>
                          <?= $rekap_medis->id_rekap_medis; ?>
                          </span>
                        </td>
                        <td class="span3" style="" >
                          
                        </td>
                      </tr>
                      <tr >
                        <td colspan="2"> 
                          <h3><?= $rekap_medis->nama; ?>(<b><?= $rekap_medis->jenis_kelamin; ?></b>)</h3>
                          <br>
                          <h4><?= $diff->y." tahun ".$diff->m." bulan ".$diff->d." hari"; ?></h4>
                        </td>
                        <td><p style="border-bottom: 1px solid grey">Dokter</p> dr. <?= $rekap_medis->nama_dokter; ?></td>
                        <td class="span4" rowspan="3" style="" >
                        </td>
                      </tr>
                    </table>
                    <div class="row " >
                        <div class="span4">
            
                        <div class="widget">
                          
                          <div class="widget-content">
                            
                            <h4>Hasil Pemeriksaan Vital</h4>
                            <br>
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
                            
                          </div> <!-- /widget-content -->
                          
                        </div> <!-- /widget -->
                        
                      </div>
                      <div class="span4">
                        <div class="widget">
                          <div class="widget-content">
                            <?php if($this->session->userdata('hak_akses')=='dokter'){?>
                            <a href="#ubah" role="button" class="btn btn-primary pull-right" data-toggle="modal">Ubah Data</a>
                            <?php }?>
                            <h4>Keluhan/Tujuan Kunjungan</h4>
                            <br>
                            <?= $rekap_medis->keluhan; ?>

                          </div> <!-- /widget-content -->
                          
                        </div> <!-- /widget -->
                        
                      </div>
                      
<div class="control-group">
    <div class="controls">
       <!-- Button to trigger modal -->         
        <!-- Modal -->
        <div id="ubah" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <form action="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/rekap_medis/input" method="POST">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Periksa Pasien</h3>
          </div>
          <div class="modal-body">
            <input style="width:98%;" name='id_rekap_medis' type="hidden" value="<?= $rekap_medis->id_rekap_medis;?>" >
            <input style="width:98%;" name='halaman' type="hidden" value="lihat" >
            Keluhan
            <textarea style="width:98%;" name='keluhan' placeholder="Keluhan" rows="3"><?= $rekap_medis->keluhan;?></textarea>
            Anamnesis
            <textarea style="width:98%;" name='anamnesis' placeholder="Anamnesis" rows="3"><?= $rekap_medis->anamnesis;?></textarea>
            Terapi
            <textarea style="width:98%;" name='terapi' placeholder="Terapi" rows="3"><?= $rekap_medis->terapi;?></textarea>
          </div>
          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary">Save changes</button>
          </div>
          </form>
        </div>
        <div id="lampiran" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <form action="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/rekap_medis/upload_file" method="POST" enctype="multipart/form-data">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Periksa Pasien</h3>
          </div>
          <div class="modal-body">
            <input style="width:98%;" name='id_rekap_medis' type="hidden" value="<?= $rekap_medis->id_rekap_medis;?>" >
            <input style="width:98%;" name='halaman' type="hidden" value="lihat" >
            File
            <input style="width:98%;" type='file' name='file' >
             <small>*file pdf maksimal 500Kb</small>

          </div>
          <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            <button class="btn btn-primary">Save changes</button>
          </div>
          </form>
        </div>
    </div> <!-- /controls --> 
  </div> <!-- /control-group -->

                      </div>

                      <div class="row " >
                        
                      <div class="span5">
                        <div class="widget">
                          <div class="widget-content">
                            <?php if($this->session->userdata('hak_akses')=='dokter'){?>
                            <a href="#ubah" role="button" class="btn btn-primary pull-right" data-toggle="modal">Ubah Data</a>
                            <?php }?>
                            <h4>Anamnesis</h4>

                            <?= $rekap_medis->anamnesis; ?>
                          </div>
                        </div>
                      </div>
                      <div class="span5">
                        <div class="widget">
                          <div class="widget-content">
                            <?php if($this->session->userdata('hak_akses')=='dokter'){?>
                            <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/diagnosa/form/<?= $rekap_medis->id_rekap_medis; ?>?h=lihat" class="btn btn-primary pull-right">Diagnosa Pasien</a>
                            <?php }?>
                            <h4>Hasil Diagnosa</h4>
                            <table class="table">
                              
                            <?php foreach($diagnosa as $data){?>
                            <tr>
                              <td><?= $data['nama_penyakit']; ?></td>
                              <td><?= $data['penyakit_terkonfirmasi']; ?></td>
                            </tr>
                          <?php }?>
                            </table>
                          </div>
                        </div>
                      </div>
                        

                    </div>
                    <div class="row " >
                        
                      <div class="span5">
                        <div class="widget">
                          <div class="widget-content">
                            <?php if($this->session->userdata('hak_akses')=='dokter'){?>
                            <a href="#ubah" role="button" class="btn btn-primary pull-right" data-toggle="modal">Ubah Data</a>
                            <?php }?>
                            <h4>Terapi</h4>

                            <?= $rekap_medis->terapi; ?>
                          </div>
                        </div>
                      </div>
                      <div class="span5">
                        <div class="widget">
                          <div class="widget-content">
                            <?php if($this->session->userdata('hak_akses')=='dokter'){?>
                            <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/resep_obat/form/<?= $rekap_medis->id_rekap_medis; ?>?h=lihat" class="btn btn-primary pull-right">Anjuran Obat</a>
                            <?php }?>
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
                      </div>
                        

                    </div>   
                     <div class="row">
                     <div class="span4">
                        <div class="widget">
                          <div class="widget-content">
                            <?php if($this->session->userdata('hak_akses')=='dokter'){?>
                            <a href='#lampiran' role="button" class="btn btn-warning pull-right" data-toggle="modal" >Tambahkan Lampiran</a> 
                            <?php }?>
                            <h4>File Penunjang</h4>
                            <table class="table">
                              
                            <?php foreach($file as $data){?>
                            <tr>
                              <td><?= $data['file_name']?></td>
                              <td>
                                <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/rekap_medis/hapus_penunjang/<?= $data['id_penunjang'] ?>/lihat"  class="btn btn-danger pull-right" onClick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a>
                                <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/rekap_medis/tampil_file/<?= $data['id_penunjang'] ?>" target='blank' class="btn btn-primary pull-right">Lihat</a>
                              </td>
                              <!-- <td><iframe src="<?= base_url()?>dokter/resep_obat/tampil_file/<?= $data['id_penunjang'] ?>" width='100%' height='500px'></iframe></td> -->
                            </tr>
                          <?php }?>
                            </table>
                          </div>
                        </div>
                      </div>           
                      </div>           
              
            </div>
            
            
            
            
            
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
            
        </div> <!-- /span8 -->
          
          
          
          
        </div> <!-- /row -->
