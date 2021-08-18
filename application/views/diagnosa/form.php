<?php
$penyakit_terkonfirmasi=array(
      "Y"=>"Ya",
      "N"=>"Tidak");
?>
        <div class="row">
          
          <div class="span12">          
            <a href="<?= base_url()?><?= $this->session->userdata('hak_akses')?>/rekap_medis/<?= $_GET['h'];?>/<?= $rekap_medis->id_rekap_medis;?>" class="btn btn-small btn-primary"><i class="btn-icon-only icon-arrow-left"> </i>Kembali</a>
            
              <div class="tab-content">
                <form id="edit-profile" action="<?= base_url()?><?= $this->session->userdata('hak_akses')?>/diagnosa/input" method="POST" class="form-horizontal" enctype="multipart/form-data">
                  <fieldset>

                    <div class="control-group span3">                     
                      <label >Penyakit</label>
                        <input type="hidden" id="id_rekap_medis" name="id_rekap_medis" value="<?= $rekap_medis->id_rekap_medis;?>">
                        <input type="hidden" id="halaman" name="halaman" value="<?= $_GET['h'];?>">
                        <select id="penyakit" name="id_penyakit" required="">
                            <option value=""></option>
                          <?php foreach($penyakit as $data){?>
                          <option value="<?= $data['id_penyakit'];?>"><?= $data['nama_penyakit'];?></option>
                          <?php } ?>
                        </select> 
                    </div> <!-- /control-group -->
                    
                    <div class="control-group span5">                     
                      <label >Penyakit Terkonfirmasi</label>
                       <select name="penyakit_terkonfirmasi">
                          <?php foreach ( $penyakit_terkonfirmasi as $data2 => $value) : ?>
                            <option value="<?= $data2;?>" ><?= $value;?></option>
                            <?php endforeach ?>
                        </select>
                    </div> <!-- /control-group -->           
                    <br>
                      <button type="submit" class="btn btn-primary">Simpan</button> 
                  </fieldset>
                </form>
              
              
            </div>
            <div class="widget ">
              
              <div class="widget-header">
                <i class="icon-user"></i>
                <h3><?=$title?> RM. <?= $rekap_medis->id_rekap_medis;?></h3>
            </div> <!-- /widget-header -->
          <div class="widget-content">
          
            
            <?php 
  $head = array("#","Nama Penyakit","Penyakit Terkonfirmasi","Action");
  $no=0;
 ?>
             <table class="table table-striped table-bordered data-table">
      <thead>
        <tr>
          <?php foreach ( $head as $data) : ?>
          <th> <?= $data; ?></th>
          <?php endforeach ?>
        </tr>
      </thead>  
      <tbody>
        <?php foreach ( $diagnosa as $data) : $no++;?>
        <tr>
          <td> <?= $no; ?></td>
          <td> <?= $data["nama_penyakit"]; ?></td>
          <td> <?= $data["penyakit_terkonfirmasi"]=="Y"?"Ya":"Tidak"; ?></td>
          <td class="td-actions">
            <a href="<?= base_url()?><?= $this->session->userdata('hak_akses')?>/diagnosa/hapus/<?= $data["id_diagnosa"]; ?>/<?= $data["id_rekap_medis"]; ?>/<?= $_GET['h']?>" class="btn btn-small btn-danger"><i class="btn-icon-only icon-remove"> </i>Hapus</a>
          </td>
        </tr>
        <?php endforeach ?>      
      </tbody>
    </table>
            
            
          </div> <!-- /widget-content -->
            
        </div> <!-- /widget -->
            
        </div> <!-- /span8 -->
          
          
          
          
        </div> <!-- /row -->
