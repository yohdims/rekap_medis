<?php
    if(!empty($rekap_medis)){
        $data = array(
          "$rekap_medis->id_rekap_medis",
          "$rekap_medis->nama_pasien",
          "$rekap_medis->jenis_kelamin",
          "$rekap_medis->tanggal_lahir",
          "$rekap_medis->tinggi_badan",
          "$rekap_medis->berat_badan",
          "$rekap_medis->suhu_badan",
          "$rekap_medis->frekuensi_nadi",
          "$rekap_medis->frekuensi_pernapasan",
          "$rekap_medis->tekanan_darah_sistolik",
          "$rekap_medis->tekanan_darah_diastolik",
          "$rekap_medis->id_pendaftaran");
    }else{
        $data = array("","","","","","","","","","","","");
    }
    $diff= date_diff(date_create($data[3]),date_create());
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
                <form id="edit-profile" action="<?= base_url()?><?= $this->session->userdata('hak_akses')?>/rekap_medis/input" method="POST" class="form-horizontal">
                  <fieldset>
                    <div class="control-group"> 
                      <div class="controls">
                    <table class="table table-striped table-bordered data-table">
                      <tr >
                        <td> 
                          <?= $data[1]; ?>(<b><?= $data[2]; ?></b>)
                          <br>
                          <?= $diff->y." tahun ".$diff->m." bulan ".$diff->d." hari"; ?>
                        </td>
                        <td class="td-actions" style="background-color: grey;text-align:center; color: white">
                          No. RM
                          <h2><?= $data[0]; ?></h2>
                          <br>
                          
                        </td>
                      </tr>
                    </table>
                  </div>
                  </div>
                    <div class="control-group">                     
                      <label class="control-label" >Tinggi Badan</label>
                      <div class="controls">
                        <input type="hidden" class="span2" id="id_rekap_medis" name="id_rekap_medis" value="<?= $data[0]; ?>">
                        <input type="hidden" class="span2" id="id_pendaftaran" name="id_pendaftaran" value="<?= $data[11]; ?>">
                        <input type="number" class="span2" id="tinggi_badan" name="tinggi_badan"  value="<?= $data[4]; ?>" > cm
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" >Berat Badan</label>
                      <div class="controls">
                        <input type="number" class="span2" id="berat_badan" name="berat_badan" value="<?= $data[5]; ?>" > kg
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                      
                    <div class="control-group">                     
                      <label class="control-label" >Suhu Badan</label>
                      <div class="controls">
                        <input type="number" class="span2" id="suhu_badan" name="suhu_badan"  value="<?= $data[6]; ?>" > <sup>o</sup>C
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                      <div class="control-group">                     
                      <label class="control-label" >Frekuensi Nadi</label>
                      <div class="controls">
                        <input type="number" class="span2" id="frekuensi_nadi" name="frekuensi_nadi"  value="<?= $data[7]; ?>" > kali/menit
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                        <div class="control-group">                     
                      <label class="control-label" >Frekuensi Pernapasan</label>
                      <div class="controls">
                        <input type="number" class="span2" id="frekuensi_pernapasan" name="frekuensi_pernapasan"  value="<?= $data[8]; ?>" >  kali/menit
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                      <div class="control-group">                     
                      <label class="control-label" >Tekanan Darah</label>
                      <div class="controls">

                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    <div class="control-group">                     
                      <label class="control-label" >Sistolik</label>
                      <div class="controls">
                        <input type="number" class="span2" id="tekanan_darah_sistolik" name="tekanan_darah_sistolik"  value="<?= $data[9]; ?>" > mm/Hg
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    <div class="control-group">                     
                      <label class="control-label" >Diastolik</label>
                      <div class="controls">
                        <input type="number" class="span2" id="tekanan_darah_diastolik" name="tekanan_darah_diastolik"  value="<?= $data[10]; ?>" > mm/Hg
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Save</button> 
                      <a href="<?= base_url()?><?= $this->session->userdata('hak_akses')?>/pendaftaran/" class="btn" >Cancel</a>
                    </div> <!-- /form-actions -->
                  </fieldset>
                </form>
              
              
            </div>
            
            
            
            
            
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
            
        </div> <!-- /span8 -->
          
          
          
          
        </div> <!-- /row -->
  