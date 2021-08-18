 <?php 
  $head = array("#","Nomer Identitas","Nama","Alamat","Umur","Action");
  $no=0;
 ?>
<div class="widget">
  <div class="widget-header"> <i class="icon-th-list"></i>
    <h3><?= $title ?></h3>
    <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/pasien/form/0" class="btn btn-small btn-success pull-right" ><i class="btn-icon-only icon-plus" style="color: white;padding :10px;" >  Tambah</i>
    </a>
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
        <?php foreach ( $pasien as $data) : $no++;
        $diff= date_diff(date_create($data["tanggal_lahir"]),date_create());?>
        <tr>
          <td> <?= $no; ?></td>
          <td> <?= $data["no_identitas"]; ?></td>
          <td> <?= $data["nama"]; ?></td>
          <td> <?= $data["alamat"]; ?></td>
          <td> <?= $diff->y." tahun ".$diff->m." bulan ".$diff->d." hari"; ?></td>
          <td class="td-actions">
            <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/rekap_medis/form/<?= $data["id_pasien"]; ?>" class="btn btn-small btn-success" style="color: white;padding :5px;""><i class="btn-icon-only icon-edit" > </i>Pilih </a>
            <!-- <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/pasien/form/<?= $data["id_pasien"]; ?>" class="btn btn-small btn-success"><i class="btn-icon-only icon-edit"> </i></a>
            <a href="<?= base_url('/')?><?= $this->session->userdata('hak_akses')?>/pasien/hapus/<?= $data["id_pasien"]; ?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a> -->
          </td>
        </tr>
        <?php endforeach ?>      
      </tbody>
    </table>
  </div>
  <!-- /widget-content --> 
</div>