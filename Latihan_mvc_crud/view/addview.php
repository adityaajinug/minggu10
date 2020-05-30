<!DOCTYPE html>
<html lang="en" dir="ltr">
		<head>
				<meta charset="utf-8">
				<title>Tambah Data Siswa</title>

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
														<h3 class="panel-title">Tambah Data Siswa</h3>
												</div>

												<div class="panel-body">
                            <div class="modal-body">
                                <form action="" method="POST" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" name="nama" autocomplete="off" maxlength="10" required/>
                                    </div>

                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" name="alamat" autocomplete="off" required/>
                                    </div>

                                    <div class="form-group">
                                        <label>Logo</label>
                                        <input type="file" class="form-control" name="logo" autocomplete="off" required/>
                                    </div>

                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-success btn-submit" name="simpan" value="Simpan">
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

    if(isset($_POST['simpan'])){
        $main = new controller();
        $main->insert();
    }

?>
