<?php

	include "model/jabatanModel.php";

	class jabatanController{

		public $model;

		function __construct(){
			$this->model = new jabatanModel();
		}

		function view(){
			$data = $this->model->selectAll();
			include "view/data_jabatan/lihat_jabatan.php";
		}

		function viewInsert(){
			$code = $this->model->genCode('J', 'kd_jab', 'tbl_struk_jabatan', '5');
			include "view/data_jabatan/tambah_jabatan.php";
		}

		function viewEdit($id){
			$data = $this->model->select($id);
			$row = $this->model->fetch($data);
			include "view/data_jabatan/edit_jabatan.php";
		}

		function insert(){
			$kd_jab = @$_POST['kd_jab'];
			$nm_jab = @$_POST['nm_jab'];
			$ket = @$_POST['ket'];

			$cek_data = mysql_num_rows($this->model->cekData($nm_jab));
			
			if($nm_jab == "" || $ket == ""){
				?>
				<script type="text/javascript">
				alert("Inputan Tidak Boleh Kosong!");
				</script>
				<?php
			} else if($cek_data > 0){
				?>
				<script type="text/javascript">
				alert("Data Jabatan Sudah Ada!");
				</script>
				<?php
			} else{
				$insert = $this->model->insert($kd_jab, $nm_jab, $ket);
				?>
				<script type="text/javascript">
				alert("Data Jabatan Berhasil di Tambahkan!");
				window.location.href="?page=struktur_jabatan";
				</script>
				<?php
			}
		}

		function update(){
			$kd_jab = @$_POST['kd_jab'];
			$nm_jab = @$_POST['nm_jab'];
			$ket = @$_POST['ket'];
			
			if($nm_jab == "" || $ket == ""){
				?>
				<script type="text/javascript">
				alert("Inputan Tidak Boleh Kosong!");
				</script>
				<?php
			} else{
				$update = $this->model->update($kd_jab, $nm_jab, $ket);
				?>
				<script type="text/javascript">
				alert("Data Jabatan Berhasil di Edit!");
				window.location.href="?page=struktur_jabatan";
				</script>
				<?php
			}
		}

		function delete($id){
			$delete = $this->model->delete($id);
			?>
				<script type="text/javascript">
					alert("Data Berhasil Di Hapus!");
					window.location.href="?page=struktur_jabatan";
				</script>
			<?php
		}

		function __destruct(){

		}


	}
?>