<?php

		class model{
		public $host = 'localhost';
    public $name = 'root';
    public $pass = '';
    public $dbname = 'crud_sekolah';

    public $mysqli;

				function __construct(){
					$this->mysqli = new mysqli($this->host, $this->name, $this->pass, $this->dbname);
						// $db = mysqli_select_db("");
				}

				function execute($query){
					$koneksi = $this->mysqli = new mysqli($this->host, $this->name, $this->pass, $this->dbname);
						return mysqli_query($koneksi,$query);
				}

				function selectAll(){
						$query = "select * from sekolah";
						return $this->execute($query);
				}

				function select($id){
					$query = "select * from sekolah where id='$id'";
					return $this->execute($query);
				}

				function insertdata($nama, $alamat, $logo){
						$query = "insert into sekolah values ('', '$nama', '$alamat', '$logo')";
						return $this->execute($query);
				}

				function updatedata($id, $nama, $alamat, $logo){
					$query = "update sekolah set nama='$nama', alamat='$alamat', logo='$logo' where id='$id'";
					return $this->execute($query);
				}

				function hapus($id){
					$query = "delete from sekolah where id='$id'";
					return $this->execute($query);
				}
				function cetak($id){
					$query = "select * from sekolah where id='$id'";
					return $this->execute($query);
				}

				function fetch($var){
						return mysqli_fetch_array($var);
				}

				function __destruct(){
				}

	}

?>
