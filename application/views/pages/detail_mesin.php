<?php
if(isset($detail_mesin)){
    foreach($detail_mesin as $row){
        ?>
<div class="row">
	<div class="col-md-6">
        <fieldset class="form-group">
            <label class="form-label">Kode Mesin</label>
            <input name="kode_mesin" type="text" value="<?php echo $row->kode_mesin; ?>" 
			class="form-control" readonly>
        </fieldset>
		
		<fieldset class="form-group">
            <label class="form-label">Nama Mesin</label>
            <input name="nama_mesin" type="text" value="<?php echo $row->nama_mesin; ?>" 
			class="form-control" readonly>
        </fieldset>
	</div>
        
	<div class="col-md-6">
        <fieldset class="form-group">
			<label class="form-label">Tahun Pembuatan</label>
            <input id="tahun_pembuatan" name="stok" type="text" value="<?php echo $row->tahun_pembuatan; ?>" 
			class="form-control" readonly>
        </fieldset>  
		
		<fieldset class="form-group">
            <label class="form-label">Tipe</label>
            <input name="tipe" type="text"  placeholder="Tipe Mesin" 
			class="form-control">
        </fieldset> 
	</div>
</div>
    <?php
    }
}
?>