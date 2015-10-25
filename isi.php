<?php

	include "controller/jabatanController.php";
	include "controller/petugasController.php";
	$jabatan = new jabatanController();
	$petugas = new petugasController();


	$page = @$_GET['page'];

	if($page == ''){
		include "view/beranda.php";

		//Struktur Jabatan
	}else if($page == 'struktur_jabatan'){
		$jabatan->view();
	}else if($page == 'tambah_jabatan'){
		$jabatan->viewInsert();
	} else if($page == 'edit_jabatan'){
		$id = @$_GET['id'];
		$jabatan->viewEdit($id);
	} else if($page == 'hapus_jabatan'){
		$id = @$_GET['id'];
		$jabatan->delete($id);
		//Data Petugas
	}else if($page == 'data_petugas'){
		$petugas->view();
	}else if($page == 'tambah_petugas'){
		$petugas->viewInsert();
	}else{
		echo "Halaman Tidak Tersedia";
	}
?>