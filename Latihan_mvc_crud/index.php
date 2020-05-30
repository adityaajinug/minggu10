<?php

		include 'controller/control.php';

		$main = new controller();

		if(isset($_GET['tambah'])){
				$main->viewInsert();
		}else if(isset($_GET['update'])){
				$id = $_GET['update'];
				$main->viewUpdate($id);
		}else if(isset($_GET['delete'])){
				$id = $_GET['delete'];
				$main->hapus($id);
		}else if(isset($_GET['pdf'])){
				$id = $_GET['pdf'];
				$main->print($id);
		}else if(isset($_GET['download'])){
				$id = $_GET['download'];
				$main->print($id);
		
		}else{
				$main->index();
		}

?>
