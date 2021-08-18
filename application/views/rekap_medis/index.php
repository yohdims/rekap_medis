 <?php 
  $head = array("#","No Identitas","Nama","Alamat","Action");
  $no=0;
 ?>
<div class="widget">
  <div class="widget-header"> <i class="icon-th-list"></i>
    <h3><?= $title ?></h3>
    <!-- <a href="<?= base_url()?>admin/penyakit/form/0" class="btn btn-small btn-success pull-right" ><i class="btn-icon-only icon-plus" style="color: white"> Tambah</i></a> -->
  </div>
  <!-- /widget-header -->
  <div class="widget-content" style="min-height: 400px">

        <table class="table table-striped table-bordered data-table">
      <thead>
        <tr>
          <?php foreach ( $head as $data) : ?>
          <th> <?= $data; ?></th>
          <?php endforeach ?>
        </tr>
      </thead>  
      <tbody>
        <?php foreach ( $pasien as $data) : $no++;?>
        <tr>
          <td> <?= $no; ?></td>
          <td> <?= $data["no_identitas"]; ?></td>
          <td> <?= $data["nama_pasien"]; ?></td>
          <td> <?= $data["alamat"]; ?></td>
          <td class="td-actions">
            <a href="<?= base_url()?><?= $this->session->userdata('hak_akses')?>/rekap_medis/pasien/<?= $data["id_pasien"]; ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-eye-open"> </i>Lihat</a>
          </td>
        </tr>
        <?php endforeach ?>      
      </tbody>
    </table>
  </div>
  <!-- /widget-content --> 
</div>