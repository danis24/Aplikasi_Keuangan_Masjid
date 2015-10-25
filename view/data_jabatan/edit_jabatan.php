<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Edit Data Jabatan</h3>
							</div>
							<div class="module-body">

									<form class="form-horizontal row-fluid" method="POST">
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Kode Jabatan</label>
											<div class="controls">
												<input type="text" id="basicinput"  name="kd_jab" value="<?=$row['kd_jab']?>" class="span3" readonly="readonly">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Nama Jabatan</label>
											<div class="controls">
												<input data-title="A tooltip for the input" name="nm_jab" type="text" value="<?=$row['nm_jab']?>" data-original-title="" class="span4 tip">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Keterangan</label>
											<div class="controls">
												<textarea class="span8" rows="5" type="text" value="<?=$row['ket']?>" name="ket"></textarea>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<input type="submit" name="edit" class="btn btn-success" value="Edit">
												<button type="reset" class="btn btn-danger">Reset</button>
											</div>
										</div>
									</form>
							</div>
						</div>		
					</div>
				</div>
<?php
	if(@$_POST['edit']){
		$main = new jabatanController();
		$main->update();
	}
?>