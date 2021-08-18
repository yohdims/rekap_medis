 <?php 
  $head = array("#","Nama","Username","Jabatan","Hak Akses","Action");
  $no=0;
 ?>
<div class="widget">
  <div class="widget-header"> <i class="icon-th-list"></i>
    <h3><?= $title?></h3>
    <a href="<?= base_url()?>admin/user/form/0" class="btn btn-small btn-success pull-right" ><i class="btn-icon-only icon-plus" style="color: white"> Tambah</i></a>
  </div>
  <!-- /widget-header -->
  <div class="widget-content" style="min-height: 400px">
  <div class="row">
    <div class='span2'>
      <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-parent="#accordion2" data-toggle="collapse" href="#dokter">
          Dokter
        </a>
      </div>
      </div>
      <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-parent="#accordion2" data-toggle="collapse" href="#perawat">
          Perawat
        </a>
      </div>
      </div>
      <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-parent="#accordion2" data-toggle="collapse" href="#petugas">
          Petugas
        </a>
      </div>
      </div>
      <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-parent="#accordion2" data-toggle="collapse" href="#admin">
          Admin
        </a>
      </div>
      </div>
    </div>
    <div class='span9'>
      <div class="accordion" id="accordion2">
      <div id="dokter" class="accordion-body collapse in">
        <div class="accordion-inner">
          <?php foreach ( $dokter as $data) :?>
          <table class="table span4">
            <tr >
              <td rowspan='3' >
                <img src="<?= base_url()?>admin/user/tampil_gambar/<?= $data["id_user"]; ?>" width="180px">
              </td>
              <!-- <td rowspan='3' style="border: solid black 1px;width: 80px; overflow: hidden" ><img src="data:<?= $data['tipe_gambar']; ?>;base64,<?= $data["foto"]; ?>" width="80px"></td> -->
              <td style="background-color: blue; color: white"><?= $data["jabatan"]; ?></td>
            </tr>
            <tr>
              <td><?= $data["nama"]; ?></td>
            </tr>
            <tr>
              <td>
                <a href="<?= base_url()?>admin/user/form/<?= $data["id_user"]; ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i>Edit</a>
                <a href="<?= base_url()?>admin/user/hapus/<?= $data["id_user"]; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i> Hapus</a>
              </td>
            </tr>
          </table>
        <?php endforeach?>

      </div>
      </div>
      <div id="perawat" class="accordion-body collapse">
        <div class="accordion-inner">
          <?php foreach ( $perawat as $data) :?>
           <table class="table span4">
            <tr >
              <td rowspan='3' >
                <img src="<?= base_url()?>admin/user/tampil_gambar/<?= $data["id_user"]; ?>" width="180px">
              </td>
              <td style="background-color: blue; color: white"><?= $data["jabatan"]; ?></td>
            </tr>
            <tr>
              <td><?= $data["nama"]; ?></td>
            </tr>
            <tr>
              <td>
                <a href="<?= base_url()?>admin/user/form/<?= $data["id_user"]; ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i>Edit</a>
                <a href="<?= base_url()?>admin/user/hapus/<?= $data["id_user"]; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i> Hapus</a>
              </td>
            </tr>
          </table>
        <?php endforeach?>
        </div>
      </div>
      <div id="petugas" class="accordion-body collapse">
        <div class="accordion-inner">
          <?php foreach ( $resepsionis as $data) :?>
          <table class="table span4">
            <tr >
              <td rowspan='3' >
                <img src="<?= base_url()?>admin/user/tampil_gambar/<?= $data["id_user"]; ?>" width="180px">
              </td>
              <td style="background-color: blue; color: white"><?= $data["jabatan"]; ?></td>
            </tr>
            <tr>
              <td><?= $data["nama"]; ?></td>
            </tr>
            <tr>
              <td>
                <a href="<?= base_url()?>admin/user/form/<?= $data["id_user"]; ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i>Edit</a>
                <a href="<?= base_url()?>admin/user/hapus/<?= $data["id_user"]; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i> Hapus</a>
              </td>
            </tr>
          </table>
        <?php endforeach?>
        </div>
      </div>
      <div id="admin" class="accordion-body collapse">
        <div class="accordion-inner">
          <?php foreach ( $admin as $data) :?>
           <table class="table span4">
            <tr >
              <td rowspan='3' >
                <img src="<?= base_url()?>admin/user/tampil_gambar/<?= $data["id_user"]; ?>" width="180px">
              </td>
              <td style="background-color: blue; color: white"><?= $data["jabatan"]; ?></td>
            </tr>
            <tr>
              <td><?= $data["nama"]; ?></td>
            </tr>
            <tr>
              <td>
                <a href="<?= base_url()?>admin/user/form/<?= $data["id_user"]; ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i>Edit</a>
                <a href="<?= base_url()?>admin/user/hapus/<?= $data["id_user"]; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i> Hapus</a>
              </td>
            </tr>
          </table>
        <?php endforeach?>
        </div>
      </div>
    </div>
    </div>
    </div>
        
    </table>
  </div>
  <!-- /widget-content --> 
</div>