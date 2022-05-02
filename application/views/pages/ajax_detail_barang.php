<?php
if(isset($detail_barang)){
    foreach($detail_barang as $row){
        ?>
<div class="row">
	<div class="col-md-6">
        <fieldset class="form-group">
            <label class="form-label">Kode Sparepart</label>
            <input name="kd_part" type="text" value="<?php echo $row->kd_part; ?>" 
			class="form-control" readonly>
        </fieldset>
		
		<fieldset class="form-group">
            <label class="form-label">Nama Sparepart</label>
            <input name="nm_part" type="text" value="<?php echo $row->nm_part; ?>" 
			class="form-control" readonly>
        </fieldset>
	</div>
        
	<div class="col-md-6">
        <fieldset class="form-group">
			<label class="form-label">Stok</label>
            <input id="stok" name="stok" type="text" value="<?php echo $row->stok; ?>" 
			class="form-control" readonly>
        </fieldset>  
		
		<!-- <fieldset class="form-group">
            <label class="form-label">Jumlah Beli</label>
            <input name="qty" type="text"  placeholder="Input jumlah beli" 
			class="form-control">
        </fieldset>  -->
	</div>
</div>
    <?php
    }
}
?>