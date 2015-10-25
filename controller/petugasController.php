<?php
include "model/modelPetugas.php";

class petugasController{
	public $model;

	function __construct(){
		$this->model = new modelPetugas();
	}

	function view(){
		$data = $this->model->selectAll();
		include "view/data_petugas/lihat_petugas.php";
	}

	function viewInsert(){
		$code = $this->model->genCode('P', 'kd_petugas', 'tbl_petugas', '5');
		$data = $this->model->selectJabatan();
		include "view/data_petugas/tambah_petugas.php";
	}

	function insert(){
		$kd_petugas 		= @$_POST['kd_petugas'];
		$no_ktp 			= @$_POST['no_ktp'];
		$nm_petugas 		= @$_POST['nm_petugas'];
		$tmpt_lahir 		= @$_POST['tmpt_lahir'];
		$tgl_lahir 			= @$_POST['thn'].'-'.@$_POST['bln'].'-'.@$_POST['tgl'];
		$alamat				= @$_POST['alamat'];
		$jk					= @$_POST['jk'];
		$jabatan 			= @$_POST['jabatan'];
		$no_telpon 			= @$_POST['no_telpon'];
		$status 			= @$_POST['status'];
		$thn_jabatan 		= @$_POST['thn_jabatan'];

		if($no_ktp == ""){
			?>
			<script type="text/javascript">
			alert("Nomor KTP Tidak Boleh Kosong!");
			</script>
			<?php
		}else if($nm_petugas == ""){
			?>
			<script type="text/javascript">
			alert("Nama Tidak Boleh Kosong!");
			</script>
			<?php
		}else{
			$insert = $this->model->insert($kd_petugas, $no_ktp, $nm_petugas, $tmpt_lahir, $tgl_lahir, $alamat, $jk, $jabatan, $no_telpon, $status, $thn_jabatan);
			?>
			<script type="text/javascript">
			alert("Data Petugas Berhasil di Tambahkan!");
			window.location.href="?page=data_petugas"
			</script>
			<?php
		}
		
	}



	function __destruct(){

	}
}
?>