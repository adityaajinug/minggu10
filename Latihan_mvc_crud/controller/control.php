<?php

		include "model/model.php";

		class controller{

				public $model;

				function __construct(){
						$this->model = new model();
				}

				function index(){
						$data = $this->model->selectAll();
						include "view/view.php";
				}

				function viewInsert(){
						include "view/addview.php";
				}

				function insert(){
					$nama = $_POST['nama'];
					$alamat = $_POST['alamat'];
					$logo = "";
					if ($_FILES['logo']['tmp_name']!="") {
						$tmp_name = $_FILES['logo']['tmp_name'];
						// $target = "imgagess/.";
						$logo = $_FILES["logo"]["name"];
						move_uploaded_file($tmp_name, "assets/imagess/".$logo);
					 
						
					}
					$insert = $this->model->insertdata($nama, $alamat, $logo);
						header("location:index.php");
				}

				function viewUpdate($id){
						$data = $this->model->select($id);
						$row = $this->model->fetch($data);
						include "view/editview.php";
				}

				function update(){
					$id = $_POST['id'];
					$nama = $_POST['nama'];
					$alamat = $_POST['alamat'];
					$logo = $_POST['logo'];
					$update = $this->model->updatedata($id,$nama, $alamat, $logo);
						header("location:index.php");
				}

				function hapus($id){
						$hapus = $this->model->hapus($id);
						header("location:index.php");
				}
				function print($id){
					$print = $this->model->cetak($id);
					include "view/pdf.php";
					include "view/download.php";
					// header("location:view/pdf.php");
				}
				function __destruct(){
				}

	}


?>
