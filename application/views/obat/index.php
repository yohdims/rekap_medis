 <?php 
  $head = array("#","Nama Obat","Action");
  $no=0;
 ?>
<div class="widget">
  <div class="widget-header"> <i class="icon-th-list"></i>
    <h3><?= $title ?></h3>
    <a href="<?= base_url()?>admin/obat/form/0" class="btn btn-small btn-success pull-right" ><i class="btn-icon-only icon-plus" style="color: white"> Tambah</i></a>
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
        <?php foreach ( $obat as $data) : $no++;?>
        <tr>
          <td> <?= $no; ?></td>
          <td> <?= $data["nama_obat"]; ?></td>
          <td class="td-actions">
            <a href="<?= base_url()?>admin/obat/form/<?= $data["id_obat"]; ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a>
            <a href="<?= base_url()?>admin/obat/hapus/<?= $data["id_obat"]; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a>
          </td>
        </tr>
        <?php endforeach ?>      
      </tbody>
    </table>
  </div>
  <!-- /widget-content --> 
</div>