<table class="table table-striped table-sm">
<thead>
  <tr>
    <th>No</th>
    <th>Kode Mekanik</th>
    <th>Nama Mekanik</th>
    <th>Alamat</th>
    <th>Telepon</th>
      <th>
       <a href="#AddMekanik" class="btn btn-mini btn-block btn-inverse" data-toggle="modal">Tambah Data</a>
      </th>
  </tr>
</thead>
<tbody>
<?php
  $no=1;
  if(isset($data_mekanik)){
      foreach($data_mekanik as $row){
          ?>
          <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $row->kode_mekanik; ?></td>
              <td><?php echo $row->nama_mekanik; ?></td>
              <td><?php echo $row->alamat; ?></td>
              <td><?php echo $row->telp; ?></td>
              <td align="center">
                  <a class="btn btn-primary" href="#EditMekanik<?php echo $row->kode_mekanik?>" data-toggle="modal"> Edit</a>
                  <a class="btn btn-danger" href="<?php echo site_url('master/hapus_mekanik/'.$row->kode_mekanik);?>"
                     onclick="return confirm('Data akan dihapus ?')"> Hapus</a>
              </td>
          </tr>
      <?php }
  }
  ?>
</tbody>
</table>

<!-- Add Pelanggan -->
<div class="modal fade" id="AddMekanik" role="dialog">
    <div role="document" class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel">Add Data Mekanik</h3>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body form">
        <form class="form-horizontal" method="post" action="<?php echo site_url('master/tambah_mekanik')?>">
          <div class="row">

       <div class="col-md-6">
                <fieldset class="form-group">
                    <label class="form-label">Kode Mekanik</label>
                    <input name="kode_mekanik" type="text" value="<?php echo $kode_mekanik; ?>" class="form-control" readonly>
                </fieldset>

                <fieldset class="form-group">
                    <label class="form-label">Nama Mekanik</label>
                    <input name="nama_mekanik" placeholder="Nama Mekanik" class="form-control" type="text">
                </fieldset>

                <fieldset class="form-group">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat"  class="form-control" type="text"></textarea>
                </fieldset> 
          </div>
         
          <div class="col-md-6">
                <fieldset class="form-group">
                    <label class="form-label">Nomor Telp</label>
                    <input name="telp" placeholder="Telp" class="form-control" type="number">
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

<!-- Edit Pelanggan -->
<?php
if(isset($data_mekanik)){
    foreach($data_mekanik as $row){
        ?>
<div class="modal fade" id="EditMekanik<?php echo $row->kode_mekanik?>" role="dialog">
    <div role="document" class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
        <h3 class="modal-title" id="myModalLabel">Edit Data Mekanik</h3>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body form">
        <form class="form-horizontal" method="post" action="<?php echo site_url('master/edit_mekanik')?>">
          <div class="row">

          <div class="col-md-6">
                <fieldset class="form-group">
                    <label class="form-label">Kode Mekanik</label>
                    <input name="kode_mekanik" type="text" value="<?php echo $row->kode_mekanik; ?>" class="form-control" readonly>
                </fieldset>

                <fieldset class="form-group">
                    <label class="form-label">Nama Mekanik</label>
                    <input name="nama_mekanik" class="form-control" type="text" value="<?php echo $row->nama_mekanik; ?>">
                </fieldset>

                <fieldset class="form-group">
                    <label class="form-label">Alamat</label>
                    <input name="alamat"  class="form-control" type="text" value="<?php echo $row->alamat; ?>">
                </fieldset> 
          </div>
         
          <div class="col-md-6">
                <fieldset class="form-group">
                    <label class="form-label">Nomor Telp</label>
                    <input name="telp" class="form-control" type="number" value="<?php echo $row->telp; ?>">
                </fieldset>

<!--                 <fieldset class="form-group">
                <label class="form-label">Email</label>
                    <input name="email" class="form-control" type="email" value="<?php echo $row->email; ?>">
                </fieldset>   -->
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