<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Input Data Petugas</h3>
							</div>
							<div class="module-body">

									<form class="form-horizontal row-fluid" method="POST">
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Kode Petugas</label>
											<div class="controls">
												<input type="text" id="basicinput"  name="kd_petugas" value="<?php echo $code?>" class="span3" readonly="readonly">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Nomor KTP *</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="no_ktp" type="text" placeholder="Nomor KTP .." data-original-title="" class="span8 tip">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Nama *</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="nm_petugas" type="text" placeholder="Nama .." data-original-title="" class="span6 tip">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Tempat Lahir</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="tmpt_lahir" type="text" placeholder="Tempat Lahir .." data-original-title="" class="span4 tip">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Tanggal Lahir</label>
											<div class="controls">
											<select name="tgl" class="span2">
											   <?php
											    for($x=1; $x<=31; $x++)
											    {
											     if($x<=9)
											     {
											      echo "<option value='0$x'>0$x</option>";
											     }else{
											                echo "<option value='$x'>$x</option>";
											     }
											    }
											   ?>
											   </select> /
											   <select name="bln" class="span3">
											   <?php
											    $bulan = array(1=>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
											    for($b=1; $b<=12; $b++)
											       {
											                    if($b<=9)
											                    {
											                     echo "<option value='0$b'>$bulan[$b]</option>";
											                    }else{
											             echo "<option value='$b'>$bulan[$b]</option>";
											                    }
											       }
											   ?>
											   </select> /
											   <select name="thn" class="span3">
											   <?php
											   $thun = date("Y");
											    for($t=1970; $t<=$thun; $t++)
											        {
											            echo "<option value='$t'>$t</option>";
											      }
											   ?>
											   </select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Alamat</label>
											<div class="controls">
												<textarea class="span8" rows="5" type="text" placeholder="Alamat.." name="alamat"></textarea>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Jenis Kelamin</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="-- Pilih --" class="span2" name="jk">
													<option value="">-- Pilih --</option>
													<option value="Laki - Laki">Laki - Laki</option>
													<option value="Perempuan">Perempuan</option>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Jabatan</label>
											<div class="controls">
												<select tabindex="1" class="span4" name="jabatan">
													<option value="">-- Pilih --</option>
													<?php while($row = $this->model->fetch($data)){

													?>
													<option value="<?php echo $row['kd_jab'];?>"><?php echo $row['nm_jab'];?></option>
													<?php }?>
												</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Nomor Telpon</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="no_telpon" type="text" placeholder="Nomor Telpon .." data-original-title="" class="span6 tip">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Status</label>
											<div class="controls">
											<select tabindex="1" class="span2" name="status">
												<option value="">-- Pilih --</option>
												<option value="Aktif">Aktif</option>
												<option value="Tidak Aktif">Tidak Aktif</option>
											</select>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Tahun Jabatan</label>
											<div class="controls">
												<select tabindex="1" class="span3" name="thn_jabatan">
													<option>-- Pilih --</option>
													<?php for($i=date('Y');$i>=date('Y')-32;$i-=1){
														echo "<option value='$i'> $i </option>";
													}
													?>
												</select>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<input type="submit" name="tambah" class="btn btn-success" value="Tambah">
												<button type="reset" class="btn btn-danger">Reset</button>
											</div>
										</div>
									</form>
							</div>
						</div>		
					</div>
				</div>
<?php
	if(@$_POST['tambah']){
		$main = new petugasController();
		$main->insert();
	}
?>