<?php

	class jabatanModel{

		function __construct(){
			$connect = mysql_connect("localhost", "root", "");
			$db = mysql_select_db("aplikasi_masjid");
		}

		function execute($query){
			return mysql_query($query);
		}

		function fetch($var){
			return mysql_fetch_array($var);
		}


		function selectAll(){
			$query = "select * from tbl_struk_jabatan";
			return $this->execute($query);
		}

		function select($id){
			$query = "SELECT * FROM tbl_struk_jabatan WHERE kd_jab = '$id'";
			return $this->execute($query);
		}

		function cekData($nm_jab){
			$query = "SELECT nm_jab FROM tbl_struk_jabatan WHERE nm_jab='$nm_jab'";
			return $this->execute($query);
		}


		function insert($kd_jab, $nm_jab, $ket){
			$query = "INSERT INTO tbl_struk_jabatan VALUES ('$kd_jab', '$nm_jab', '$ket')";
			return $this->execute($query);
		}

		function update($kd_jab, $nm_jab, $ket){
			$query = "UPDATE tbl_struk_jabatan SET nm_jab='$nm_jab', ket='$ket' WHERE kd_jab='$kd_jab'";
			return $this->execute($query);
		}

		function delete($id){
			$query = "DELETE FROM tbl_struk_jabatan WHERE kd_jab='$id'";
			return $this->execute($query);
		}

		public function genCode($first, $field, $table, $char){

			$query = "SELECT MAX(RIGHT($field, $char)) as maxID FROM $table ORDER BY $field";
			$get = $this->execute($query);
			$code = $this->fetch($get);
			$genKode = $code['maxID'];
			$getCode = (int) substr($genKode, 1, $char);
			$getCode++;
			$theCode = $first.sprintf("%0".$char."s", $getCode);
			return $theCode;

		}


		function __destruct(){

		}
	}
?>