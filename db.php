<?php 
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'siudin');

class Database {
	public $conn;
	function __construct()
	{
		$this->conn = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	}

    public function inp($pesan) {
        date_default_timezone_set("Asia/Jakarta");
        $waktu = date('m/d/Y h:i:s a');
        $sql = "insert into pesan (isi,waktu) values ('$pesan','$waktu')";
		$hasil=$this->conn->query($sql);
		return $hasil;
    }

    public function out() {
        $sql="select * from pesan order by id desc limit 5";
		$hasil=$this->conn->query($sql); 
		return $hasil;
    }
}

?>