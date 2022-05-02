<?php if ($this->session->userdata('LEVEL') == 'admin'){ ?>
<br>   
  <div class="container">
      <div class="row">
        <div class="col-md-12">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item active">
            <a class="nav-link active" href="#home" data-toggle="tab">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tabKerusakan" data-toggle="tab">Input Kerusakan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tabMesin" data-toggle="tab">Membaca Kerusakan</a>
          </li>
<!-- 		      <li class="nav-item">
            <a class="nav-link" href="#tabPemasok"  data-toggle="tab">Pemasok</a>
          </li> -->
		      <li class="nav-item">
            <a class="nav-link" href="#tabPart"  data-toggle="tab">Penugasan Perbaikan</a>
          </li>
 </li>
		      <li class="nav-item">
            <a class="nav-link" href="#tabService"  data-toggle="tab">Laporan Tindakan Perbaikan</a>
          </li>
<!--           <li class="nav-item">
            <a class="nav-link" href="#tabUser"  data-toggle="tab">User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tabContact"  data-toggle="tab">Identitas</a>
          </li> -->
        </ul>
<div class="tab-content">
    <div class="tab-pane active" id="home"><br>hudahuday</div>
    <div class="tab-pane fade" id="tabMekanik"><br><?php $this->load->view('pages/v_tab_master_mekanik')?></div>
    <div class="tab-pane fade" id="tabKendaraan"><br>Halaman belum tersedia</div>
    <div class="tab-pane fade" id="tabMesin"><br><?php $this->load->view('pages/v_tab_mesin')?></div>
    <div class="tab-pane fade" id="tabPemasok"><br>Halaman belum tersedia</div>
	  <div class="tab-pane fade" id="tabService"><br><?php $this->load->view('pages/v_tab_master_service')?></div>
    <div class="tab-pane fade" id="tabPart"><br><?php $this->load->view('pages/v_tab_master_part')?></div>
    <div class="tab-pane fade" id="tabUser"><br><?php $this->load->view('pages/v_tab_master_user')?></div>
    <div class="tab-pane fade" id="tabContact"><br><?php $this->load->view('pages/v_tab_master_contact')?></div>
    <div class="tab-pane fade" id="tabKerusakan"><br><?php $this->load->view('pages/v_kerusakan')?></div>
</div>

      </div>
    </div>
    <hr>
  </div>
<?php } else { ?>
    <br>   
    <div class="container">
        <div class="row">
          <div class="col-md-12">
          Maaf, Anda tidak berhak masuk ke halaman ini
          </div>
        </div>
        <hr>
      </div>
<?php } ?>