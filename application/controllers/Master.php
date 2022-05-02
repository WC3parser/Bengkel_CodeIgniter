<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Master extends CI_Controller{
    function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','Username atau Password Anda Salah !');
            redirect('');
        };

        $this->load->model('MyModel');
        $this->load->helper('currency_format_helper');
    }

    function index(){
        $data=array(
            'kode_mekanik'=>$this->MyModel->getKodeMekanik(),
            'kode_mesin'=>$this->MyModel->getKodeMesin(),
            'title'=>'Master Data',
            'active_master'=>'active',
            'kd_part'=>$this->MyModel->getKodeBarang(),
            'kd_pelanggan'=>$this->MyModel->getKodePelanggan(),
            'kd_user'=>$this->MyModel->getKodePengguna(),
			'data_service'=>$this->MyModel->getAllData('servis'),
            'data_barang'=>$this->MyModel->getAllData('sparepart'),
            'data_pelanggan'=>$this->MyModel->getAllData('pelanggan'),
            'data_mekanik'=>$this->MyModel->getAllData('mekanik'),
            'data_mesin'=>$this->MyModel->getAllData('mesin'),
            'data_contact'=>$this->MyModel->getAllData('contact'),
            'data_pegawai'=>$this->MyModel->getAllData('user'),
        );
        $this->load->view('element/header',$data);
        $this->load->view('pages/v_master');
        $this->load->view('element/footer');
    }

//Method Insert
	function tambah_service(){
        $data=array(
            'nm_layanan'=>$this->input->post('nm_layanan'),
            'harga'=>$this->input->post('harga'),
        );
        $this->MyModel->insertData('servis',$data);
        redirect("master");
    }
    function tambah_barang(){
        $data=array(
            'kd_part'=>$this->input->post('kd_part'),
            'nm_part'=>$this->input->post('nm_part'),
            'stok'=>$this->input->post('stok'),
        );
        $this->MyModel->insertData('sparepart',$data);
        redirect("master");
    }
    function tambah_pelanggan(){
        $data=array(
            'kd_pelanggan'=> $this->input->post('kd_pelanggan'),
            'nm_pelanggan'=>$this->input->post('nm_pelanggan'),
            'alamat'=>$this->input->post('alamat'),
            'email'=>$this->input->post('email'),
            'telp'=>$this->input->post('telp'),
        );
        $this->MyModel->insertData('pelanggan',$data);
        redirect("master");
    }
    function tambah_mekanik(){
        $data=array(
            'kode_mekanik'=> $this->input->post('kode_mekanik'),
            'nama_mekanik'=>$this->input->post('nama_mekanik'),
            'alamat'=>$this->input->post('alamat'),
            'telp'=>$this->input->post('telp'),
        );
        $this->MyModel->insertData('mekanik',$data);
        redirect("master");
    }
    function tambah_user(){
        $data=array(
            'kd_user'=> $this->input->post('kd_user'),
            'username'=>$this->input->post('username'),
            'password'=>md5($this->input->post('password')),
            'nama'=> $this->input->post('nama'),
            'level'=>$this->input->post('level'),
        );
        $this->MyModel->insertData('user',$data);
        redirect("master");
    }
    function tambah_mesin(){
        $data=array(
            'kode_mesin'=>$this->input->post('kode_mesin'),
            'nama_mesin'=>$this->input->post('nama_mesin'),
            'tahun_pembuatan'=>$this->input->post('tahun_pembuatan'),
            'tipe'=>$this->input->post('tipe'),
        );
        $this->MyModel->insertData('mesin',$data);
        redirect("master");
    }

//Method Edit
	function edit_service(){
        $id['id_servis'] = $this->input->post('id_servis');
        $data=array(
            'nm_layanan'=>$this->input->post('nm_layanan'),
            'harga'=>$this->input->post('harga'),
        );
        $this->MyModel->updateData('servis',$data,$id);
        redirect("master");
    }
    function edit_barang(){
        $id['kd_part'] = $this->input->post('kd_part');
        $data=array(
            'nm_part'=>$this->input->post('nm_part'),
            'stok'=>$this->input->post('stok'),
        );
        $this->MyModel->updateData('sparepart',$data,$id);
        redirect("master");
    }
    function edit_pelanggan(){
        $id['kd_pelanggan'] = $this->input->post('kd_pelanggan');
        $data=array(
            'nm_pelanggan'=>$this->input->post('nm_pelanggan'),
            'alamat'=>$this->input->post('alamat'),
            'email'=>$this->input->post('email'),
            'telp'=>$this->input->post('telp'),
        );
        $this->MyModel->updateData('pelanggan',$data,$id);
        redirect("master");
    }
     function edit_mekanik(){
        $id['kode_mekanik'] = $this->input->post('kode_mekanik');
        $data=array(
            'nama_mekanik'=>$this->input->post('nama_mekanik'),
            'alamat'=>$this->input->post('alamat'),
            'telp'=>$this->input->post('telp'),
        );
        $this->MyModel->updateData('mekanik',$data,$id);
        redirect("master");
    }
    function edit_contact(){
        $id['id'] = 1;
        $data=array(
            'nama'=> $this->input->post('nama'),
            'owner'=>$this->input->post('owner'),
            'alamat'=>$this->input->post('alamat'),
            'telp'=>$this->input->post('telp'),
            'email'=>$this->input->post('email'),
            'website'=>$this->input->post('website'),
            'desc'=>$this->input->post('desc'),
        );
        $this->MyModel->updateData('contact',$data,$id);
        redirect("master");
    }
    function edit_user(){
        $id['kd_user'] = $this->input->post('kd_user');
        $data=array(
            'username'=>$this->input->post('username'),
            'password'=>md5($this->input->post('password')),
            'nama'=> $this->input->post('nama'),
            'level'=>$this->input->post('level'),
        );
        $this->MyModel->updateData('user',$data,$id);
        redirect("master");
    }
    function edit_mesin(){
        $id['kode_mesin'] = $this->input->post('kode_mesin');
        $data=array(
            'nama_mesin'=>$this->input->post('nama_mesin'),
            'tahun_pembuatan'=>$this->input->post('tahun_pembuatan'),
            'tipe'=>$this->input->post('tipe'),
        );
        $this->MyModel->updateData('mesin',$data,$id);
        redirect("master");
    }

//Method Delete
	function hapus_service(){
        $id['id_servis'] = $this->uri->segment(3);
        $this->MyModel->deleteData('servis',$id);
        redirect("master");
    }
    function hapus_barang(){
        $id['kd_part'] = $this->uri->segment(3);
        $this->MyModel->deleteData('sparepart',$id);
        redirect("master");
    }
    function hapus_pelanggan(){
        $id['kd_pelanggan'] = $this->uri->segment(3);
        $this->MyModel->deleteData('pelanggan',$id);
        redirect("master");
    }
    function hapus_mekanik(){
        $id['kode_mekanik'] = $this->uri->segment(3);
        $this->MyModel->deleteData('mekanik',$id);
        redirect("master");
    }
    function hapus_user(){
        $id['kd_user'] = $this->uri->segment(3);
        $this->MyModel->deleteData('user',$id);
        redirect("master");
    }
    function hapus_mesin(){
        $id['kode_mesin'] = $this->uri->segment(3);
        $this->MyModel->deleteData('mesin',$id);
        redirect("master");
    }
}