<?php
    if(!empty($pasien)){
        $data = array(
            "$pasien->id_pasien",
            "$pasien->nama",
            "$pasien->tempat_lahir",
            "$pasien->tanggal_lahir",
            "$pasien->jenis_kelamin",
            "$pasien->agama",
            "$pasien->status_perkawinan",
            "$pasien->pekerjaan",
            "$pasien->alamat",
            "$pasien->no_telp",
            "$pasien->no_identitas");
    }else{
        $data = array("0","","","","","","","","","","");
        $data = array("0","Agus","Yogyakarta","1996-01-10","","","","asdas","Jl Cempaka","123123","34123213");
         $poli_tujuan = array("Poli Umum","Poli KIA");
    }
    $jenis_kelamin=array(
      "L"=>"Laki-laki",
      "P"=>"Perempuan");
    $status_perkawinan=array(
      "K"=>"Kawin",
      "BK"=>"Belum Kawin");
    $agama=array(
        "Islam",
        "Katolik",
        "Kristen",
        "Budha",
        "Hindu",
        "Konghucu");
?>
 <?= $this->M_1Setting->Cetak();?>
        <div class="row">
          
          <div class="span12">          
            
            <div class="widget ">
              
              <div class="widget-header">
                <i class="icon-user"></i>
                <h3><?= $title?></h3>
            </div> <!-- /widget-header -->
          
          <div class="widget-content">
            
              <div class="tab-content">
                <form id="edit-profile" action="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/pasien/input" method="POST" class="form-horizontal">
                  <fieldset>
                    
                    <div class="control-group">                     
                      <label class="control-label" for="nama">Nama Lengkap</label>
                      <div class="controls">
                        <input type="hidden" class="span6" id="id_pasien" name="id_pasien" value="<?= $data[0]; ?>">
                        <input type="text" class="span6" id="nama" name="nama" placeholder="nama" value="<?= $data[1]; ?>" required>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label" for="tempat_lahir">Tempat Lahir</label>
                      <div class="controls">
                        <input type="text" class="span6" id="tempat_lahir" name="tempat_lahir" placeholder="tempat_lahir" value="<?= $data[2]; ?>" required>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                      <div class="control-group">                     
                      <label class="control-label" for="tanggal_lahir">Tanggal Lahir</label>
                      <div class="controls">
                        <input type="date" class="span6" id="tanggal_lahir" name="tanggal_lahir" placeholder="tanggal_lahir" value="<?= $data[3]; ?>" required>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    
                    <div class="control-group">                     
                      <label class="control-label" for="jenis_kelamin">Jenis Kelamin</label>
                      <div class="controls">
                        <select name="jenis_kelamin">
                          <?php foreach ( $jenis_kelamin as $data2 => $value) : ?>
                            <option value="<?= $data2;?>" <?php if($data2==$data[4]){echo "selected"; }?>><?= $value;?></option>
                            <?php endforeach ?>
                        </select>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                      <div class="control-group">                     
                      <label class="control-label" for="agama">Agama</label>
                      <div class="controls">
                        <select name="agama">
                          <?php foreach ( $agama as $data2 => $value) : ?>
                            <option value="<?= $value;?>" <?php if($value==$data[5]){echo "selected"; }?>><?= $value;?></option>
                            <?php endforeach ?>
                        </select>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                      <div class="control-group">                     
                      <label class="control-label" for="status_perkawinan">Status Perkawinan</label>
                      <div class="controls">
                        <select name="status_perkawinan">
                          <?php foreach ( $status_perkawinan as $data2 => $value) : ?>
                            <option value="<?= $data2;?>" <?php if($data2==$data[6]){echo "selected"; }?>><?= $value;?></option>
                            <?php endforeach ?>
                        </select>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                      <div class="control-group">                     
                      <label class="control-label" for="pekerjaan">Pekerjaan</label>
                      <div class="controls">
                        <input type="text" class="span6" id="pekerjaan" name="pekerjaan" placeholder="pekerjaan" value="<?= $data[7]; ?>" required>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                      <div class="control-group">                     
                      <label class="control-label" for="alamat">Alamat</label>
                      <div class="controls">
                        <input type="text" class="span6" id="alamat" name="alamat" placeholder="alamat" value="<?= $data[8]; ?>" required>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                      <div class="control-group">                     
                      <label class="control-label" for="no_telp">Nomer Telepon</label>
                      <div class="controls">
                        <input type="text" class="span6" id="no_telp" name="no_telp" placeholder="no_telp" value="<?= $data[9]; ?>" required>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                      <div class="control-group">                     
                      <label class="control-label" for="no_identitas">No Identitas</label>
                      <div class="controls">
                        <input type="text" class="span6" id="no_identitas" name="no_identitas" placeholder="no_identitas" value="<?= $data[10]; ?>" required>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    <?php if(!empty($poli_tujuan)){?>
                    <div class="control-group">                     
                      <label class="control-label" for="poli_tujuan">Poli Tujuan</label>
                      <div class="controls">
                        <select name="poli_tujuan">
                          <?php foreach ( $poli_tujuan as $data2 => $value) : ?>
                            <option value="<?= $value;?>"><?= $value;?></option>
                            <?php endforeach ?>
                        </select>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->

                    <div class="control-group">                     
                      <label class="control-label">Keluhan</label>
                      <div class="controls">
                        <textarea class="span6" id="keluhan" name="keluhan" placeholder="keluhan" rows='5' value="" required> </textarea>
                      </div> <!-- /controls -->       
                    </div> <!-- /control-group -->
                    <?php } ?>
                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Save</button> 
                      <!-- <a href="<?= base_url()?><?= $this->session->userdata('hak_akses')?>/pasien/" class="btn" >Cancel</a> -->
                      <a href="" class="btn" onclick="printKartu()">Cancel</a>
                    </div> <!-- /form-actions -->
                  </fieldset>
                </form>
              
              
            </div>
            
            
            
            
            
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
            
        </div> <!-- /span8 -->
          
          
          
          
        </div> <!-- /row -->
  