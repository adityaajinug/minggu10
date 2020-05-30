<!DOCTYPE html>
<html lang="en" dir="ltr">
		<head>
				<meta charset="utf-8">
				<title>UPDATE DATA SISWA</title>

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
										<div class="panel panel-default">
												<div class="panel-heading">
														<h3 class="panel-title">Update Data Siswa</h3>
												</div>

												<div class="panel-body">
                            <div class="modal-body">
																<form action="" method="POST" enctype="multipart/from-data">
																
																				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
																			 

                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $row['nama']; ?>" required/>
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" name="alamat" autocomplete="off" value="<?php echo $row['alamat']; ?>" required/>
                                    </div>

                                    <div class="form-group">
                                        <label>Logo</label>
																				<img src="assets/imagess/<?php echo $row['logo'];?>" width="80"> <br> <br>
                                        <input type="file" class="form-control" name="logo"/>
																				
                                    </div>

                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success btn-submit" name="update" value="Update">
                                        <button type="reset" class="btn btn-danger btn-reset" data-dismiss="modal" aria-hidden="true">Batal</button>
                                    </div>

                                </form>
                            </div>
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

<?php

    if(isset($_POST['update'])){
        $main = new controller();
        $main->update();
    }

?>
