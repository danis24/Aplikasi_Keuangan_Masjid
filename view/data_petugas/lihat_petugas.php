<div class="module">
							<div class="module-head">
								<h3>Data Petugas</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Kode Petugas</th>
											<th>Nama Petugas</th>
											<th>Jenis Kelamin</th>
											<th>Jabatan</th>
											<th>No Telpon</th>
											<th>Status</th>
											<th>Tahun Jabatan</th>
											<th class="span2">Opsi</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$no = 1;
											while($row = $this->model->fetch($data)){
										?>
										<tr class="odd gradeX">
											<td align="center"><?php echo $no++?></td>
											<td align="center"><?php echo $row['kd_petugas'];?></td>
											<td><?php echo $row['nm_petugas'];?></td>
											<td><?php echo $row['jk'];?></td>
											<td><?php echo $row['nm_jab'];?></td>
											<td><?php echo $row['no_telpon'];?></td>
											<td><?php echo $row['status'];?></td>
											<td><?php echo $row['thn_jabatan'];?></td>
											<td align="center">
												<a href="?page=detail_petugas&id=<?php echo $row['kd_petugas'];?>"><i class="btn btn-danger icon-search"></i></a>
												<a href="?page=edit_petugas&id=<?php echo $row['kd_petugas'];?>"><i class="btn btn-success icon-edit"></i></a>
												<a onclick="return confirm('Yakin akan menghapus data ?');" href="?page=hapus_petugas&id=<?php echo $row['kd_petugas'];?>"><i class="btn btn-danger icon-trash"></i></a>
											</td>
										</tr>
										<?php
										}
										?>
									</tbody>
								</table>
							</div>
						</div>