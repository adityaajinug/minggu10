<!DOCTYPE html>
<html lang="en" dir="ltr">
		<head>
				<meta charset="utf-8">
				<title>DATA SISWA</title>

				<link href="assets/style/css/bootstrap.min.css" rel="stylesheet">
				<link rel="stylesheet" href="assets/style/style.css">

		</head>
		<body>
				<nav class="navbar navbar-default navbar-fixed-top">
						<div class="container-fluid">
								<div class="navbar-header">
										<a class="navbar-brand" href="index.php">
												<i class="glyphicon glyphicon-check"></i>
													CRUD MVC
										</a>
								</div>
						</div>
				</nav>

				<div class="container-fluid">
						<div class="row">
								<div class="col-md-12">
										<div class="page-header">
												<h4>
														<i class="glyphicon glyphicon-user"></i> Data Siswa
														<a class="btn btn-success pull-right" href="index.php?tambah=add" data-target="#modal_tambah" data-toggle="modal">
																<i class="glyphicon glyphicon-plus"></i> Tambah Data
														</a>
												</h4>
										</div>
										<div class="panel panel-default">
												<div class="panel-heading">
														<h3 class="panel-title">Table Siswa</h3>
												</div>
												<div class="panel-body">
														<table class="table table-striped table-hover">
																<thead>
																		<tr>
																				<th>No</th>
																				<th>Nama</th>
																				<th>Alamat</th>
																				<th>Logo</th>
																				<th>Aksi</th>
																		</tr>
																</thead>

																<?php
																$no = 1;

																		while($row = $this->model->fetch($data)){

																	

																 ?>
																 

																 <tr>
																										<td><?php echo $no++ ?></td>
																										<td><?php echo $row['nama'] ?></td>
																										<td><?php echo $row['alamat'] ?></td>
																										<td>
																										<img src="<?php echo 'assets/imagess/'.$row['logo'];?>" width="80px" height="80px" />
																										</td>
																										<td>
																												<a href="index.php?update=<?php echo $row['id']; ?>" class="btn btn-info">Update</a>
																												<a href="index.php?delete=<?php echo $row['id']; ?>" class="btn btn-success">Delete</a>
																												<a target="blank" href="index.php?pdf=<?php echo $row['id']; ?>" class="btn btn-info">PDF</a>
																												<a href="index.php?download=<?php echo $row['id']; ?>" class="btn btn-success">Download</a>
																												
																											</td>
																								</tr>

																		
																		<?php 	}?>
														</table>
												</div>
										</div>
								</div>
						</div>
				</div>

				<footer class="footer">
		      <div class="container-fluid">
		        <p class="text-muted text-center">CRUD MVC &copy; <?php echo date("Y");  ?></p>
		      </div>
		    </footer>
		</body>
</html>
