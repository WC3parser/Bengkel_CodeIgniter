<table class="table table-striped table-sm">
<thead>
  <tr>
        <th>No</th>
        <th>Kode Mesin</th>
        <th>Nama Mesin</th>
        <th>Tahun Pembuatan</th>
        <th>Tipe</th>
      <th>
       <a href="#AddMesin" class="btn btn-mini btn-block btn-inverse" data-toggle="modal">Tambah Mesin</a>
      </th>
  </tr>
</thead>
<tbody>
<?php
    $no=1;
    if(isset($data_mesin)){
    foreach($data_mesin as $row){
    ?>
        <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row->kode_mesin; ?></td>
        <td><?php echo $row->nama_mesin; ?></td>
        <td><?php echo $row->tahun_pembuatan; ?></td>
        <td><?php echo $row->tipe; ?></td>
        <td align="center">
            <a class="btn btn-primary" href="#EditMesin<?php echo $row->kode_mesin?>" data-toggle="modal"> Edit</a>
            <a class="btn btn-danger" href="<?php echo site_url('master/hapus_mesin/'.$row->kode_mesin);?>"
            onclick="return confirm('Data akan dihapus ?')"> Hapus</a>
        </td>
        </tr>
      <?php }
  }
  ?>
</tbody>
</table>

<!-- Add Part -->
<div class="modal fade" id="AddMesin" role="dialog">
    <div role="document" class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel">Add Data Mesin</h3>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body form">
        <form class="form-horizontal" method="post" action="<?php echo site_url('master/tambah_mesin')?>">
          <div class="row">

          <div class="col-md-6">
                <fieldset class="form-group">
                    <label class="form-label">Kode Mesin</label>
                    <input name="kode_mesin" type="text" value="<?php echo $kode_mesin; ?>" class="form-control" readonly>
                </fieldset>

                <fieldset class="form-group">
                    <label class="form-label">Nama Mesin</label>
                    <input name="nama_mesin" placeholder="Nama Mesin" class="form-control" type="text">
                </fieldset>
          </div>
         
          <div class="col-md-6">
                <fieldset class="form-group">
                    <label class="form-label">Tahun Pembuatan</label>
                    <input name="tahun_pembuatan" placeholder="Tahun Pembuatan" class="form-control" type="number">
                </fieldset>
                <fieldset class="form-group">
                    <label class="form-label">Tipe</label>
                    <input name="tipe" placeholder="Tipe Mesin" class="form-control" type="text">
                </fieldset>
          </div>
        
        </div>
        </div>
        <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>

<!-- Edit Sparepart -->
<?php
if (isset($data_mesin)){
    foreach($data_mesin as $row){
        ?>
<div class="modal fade" id="EditMesin<?php echo $row->kode_mesin?>" role="dialog">
    <div role="document" class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel">Edit Data Mesin</h3>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body form">
        <form class="form-horizontal" method="post" action="<?php echo site_url('master/edit_mesin')?>">
          <div class="row">

          <div class="col-md-6">
                <fieldset class="form-group">
                    <label class="form-label">Kode Mesin</label>
                    <input name="kode_mesin" type="text" value="<?php echo $row->kode_mesin; ?>" class="form-control" readonly>
                </fieldset>

                <fieldset class="form-group">
                    <label class="form-label">Nama Mesin</label>
                    <input name="nama_mesin" class="form-control" type="text" value="<?php echo $row->nama_mesin; ?>">
                </fieldset>
          </div>
         
          <div class="col-md-6">
                <fieldset class="form-group">
                    <label class="form-label">Tahun Pembuatan</label>
                    <input name="tahun_pembuatan" class="form-control" type="number" value="<?php echo $row->tahun_pembuatan; ?>">
                </fieldset>
                <fieldset class="form-group">
                    <label class="form-label">Tipe Msein</label>
                    <input name="tipe" class="form-control" type="text" value="<?php echo $row->tipe; ?>">
                </fieldset>

          </div>
        
        </div>
        </div>
        <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <?php }
}
?>